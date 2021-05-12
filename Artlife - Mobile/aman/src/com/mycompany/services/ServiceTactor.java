/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.services;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;

import com.codename1.l10n.SimpleDateFormat;

import com.codename1.ui.events.ActionListener;
import com.mycompany.entities.Tactor;
import com.mycompany.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;
import java.util.Map;
/**
 *
 */
public class ServiceTactor {
    public static ServiceTactor instance=null;
     public String result = "";
    public boolean resultOK;
    private ConnectionRequest req;
       public ArrayList<Tactor> tactors;
       public static ServiceTactor getInstance() {
        if (instance == null) {
            instance = new ServiceTactor ();
        }
        return instance;
    }
       public ServiceTactor () {
        req = new ConnectionRequest();
    }
       
        public boolean addTactor(Tactor t) {
        String url = Statics.BASE_URL + "/tactor/addTactor?name=" + t.getName()  + "&born=" +  t.getBorn()   + "&description=" +  t.getDescription()  + "&image=" + t.getImage() ; //création de l'URL
        req.setUrl(url);// Insertion de l'URL de notre demande de connexion
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; 
                req.removeResponseListener(this); 
                
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }

    
         public ArrayList<Tactor> AffichageTactor (){
         
        ArrayList<Tactor> result=new ArrayList<>();
        String url=Statics.BASE_URL+"/tactor/displayTactor";
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser Jsonp;
                Jsonp=new JSONParser();
                try{
                    Map<String,Object>mapTactor= Jsonp.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                    List<Map<String,Object>> listofMaps = (List<Map<String,Object>>) mapTactor.get("root");
                    
                    
                    for(Map<String,Object> obj : listofMaps)
                    {
                        Tactor te=new Tactor();
                        
                        float id=Float.parseFloat(obj.get("id").toString());
                        String name=obj.get("name").toString();
                
                          String description=obj.get("description").toString();
                        String image=obj.get("image").toString();
                        
                        te.setId((long)id);
                        te.setName(name);
                        
                        te.setDescription(description);
                        te.setImage(image);
                        
                       Map<String, Object> dd = (Map<String, Object>) obj.get("born");
                float ll = Float.parseFloat(dd.get("timestamp").toString());
                
               
                   
                te.setBorn(new Date(((long) ll * 1000)));
//
//                System.out.println(te.getBorn());
//                            String ds = obj.get("born").toString();
//                       try {
//                    
//                    Date date = new SimpleDateFormat("yyyy-mm-dd").parse(ds);
//                    System.out.println((date));
//                    te.setBorn(date);
//                   
//
//                } catch (ParseException ex) {
//                    System.out.println("ex date" + ex);
//                    
//                }
                    
                result.add(te);
            }
                        
                        
                   
                    
                    
                    
                    
                } catch (IOException ex) {
                    System.out.println(
                            "good");
                    
                }
            }
        });
                    NetworkManager.getInstance().addToQueueAndWait(req); 
                    return result;

        
    }
  public Tactor DetailTactor(Long id,Tactor t)
    {
        
        String url=Statics.BASE_URL+"/tactor/detailTactor?"+id;
        req.setUrl(url);
         String sr=new String(req.getResponseData());
        
        req.addResponseListener((evt)->{
            
            JSONParser jSONParser=new JSONParser();
            try {
          Map<String,Object>obj= jSONParser.parseJSON(new CharArrayReader(new String(sr).toCharArray()));

          t.setName(obj.get("name").toString());
        
         
          t.setDescription(obj.get("description").toString());
          t.setImage(obj.get("image").toString());

          
          
          
          
            } catch (IOException e) {
                System.out.println("error related to sql"+e.getMessage());
            }
            System.out.println("date "+sr);

           
        });
                  NetworkManager.getInstance().addToQueueAndWait(req); 
                  return t;

    }

    public boolean deleteTactor(Long id)
    {
        String url=Statics.BASE_URL + "/tactor/deleteTactor?id="+id;
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200 ; 
                req.removeResponseCodeListener(this);
                
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
        
    }
    
    public boolean modifierTactor (Tactor t){
        SimpleDateFormat format = new SimpleDateFormat("yyyy-MM-dd");
        String dateee = format.format(t.getBorn());
String url = Statics.BASE_URL+"/tactor/updateTactor?id="+ t.getId() +"&name=" + t.getName()  + "&born=" +  dateee  + "&description=" +  t.getDescription()  + "&image=" + t.getImage()  ;
req.setUrl(url);
req.addResponseListener(new ActionListener<NetworkEvent>() {
public void actionPerformed (NetworkEvent evt) {
resultOK = req.getResponseCode() == 200 ; // Code response Http 200 ok
req.removeResponseListener(this);
}});
NetworkManager.getInstance().addToQueueAndWait(req);//execution tal request sinon yet Sada chy dima nalawa
return resultOK;
    }


}
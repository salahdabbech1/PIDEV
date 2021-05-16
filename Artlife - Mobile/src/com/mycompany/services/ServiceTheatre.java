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
import com.codename1.l10n.ParseException;
import com.codename1.l10n.SimpleDateFormat;

import com.codename1.ui.events.ActionListener;

import com.mycompany.entities.Theatre;
import com.mycompany.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;
import java.util.Map;
/**
 *
 */
public class ServiceTheatre {
    public static ServiceTheatre instance=null;
     public String result = "";
    public boolean resultOK;
    private ConnectionRequest req;
       public ArrayList<Theatre> theatres;
       public static ServiceTheatre getInstance() {
        if (instance == null) {
            instance = new ServiceTheatre ();
        }
        return instance;
    }
       public ServiceTheatre () {
        req = new ConnectionRequest();
    }
       
        public boolean addTheatre(Theatre th) {
        String url = Statics.BASE_URL + "/theatre/addTheatre?name=" + th.getName()  +"&genre=" +  th.getGenre()   + "&rdate=" +  th.getRdate()   +  "&image=" + th.getImage() +"&trailer=" +  th.getTrailer()  +"&description=" +  th.getDescription()  +"&poster=" +  th.getPoster()   ; //création de l'URL
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

    
         public ArrayList<Theatre> AffichageTheatre (){
         
        ArrayList<Theatre> result=new ArrayList<>();
        String url=Statics.BASE_URL+"/theatre/displayTheatre";
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser Jsonp;
                Jsonp=new JSONParser();
                try{
                    Map<String,Object>mapTheatre= Jsonp.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                    List<Map<String,Object>> listofMaps = (List<Map<String,Object>>) mapTheatre.get("root");
                    
                    
                    for(Map<String,Object> obj : listofMaps)
                    {
                        Theatre th=new Theatre();
                        
                        float id=Float.parseFloat(obj.get("id").toString());
                        String name=obj.get("name").toString();
                        String genre=obj.get("genre").toString();
                          String description=obj.get("description").toString();
                        String image=obj.get("image").toString();
                        String trailer=obj.get("trailer").toString();
                        String poster=obj.get("poster").toString();
                        
                        th.setId((long)id);
                        th.setName(name);
                        
                        th.setDescription(description);
                        th.setImage(image);
                        th.setTrailer(trailer);
                        th.setPoster(poster);
                        th.setGenre(genre);
                        
                       Map<String, Object> dd = (Map<String, Object>) obj.get("rdate");
                float ll = Float.parseFloat(dd.get("timestamp").toString());
                
               
                   
                th.setRdate(new Date(((long) ll * 1000)));
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
                    
                result.add(th);
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
  public Theatre DetailTheatre(Long id,Theatre th)
    {
        
        String url=Statics.BASE_URL+"/theatre/detailTheatre?"+id;
        req.setUrl(url);
         String sr=new String(req.getResponseData());
        
        req.addResponseListener((evt)->{
            
            JSONParser jSONParser=new JSONParser();
            try {
          Map<String,Object>obj= jSONParser.parseJSON(new CharArrayReader(new String(sr).toCharArray()));

          th.setName(obj.get("name").toString());
        
         
          th.setDescription(obj.get("description").toString());
          th.setImage(obj.get("image").toString());
           th.setPoster(obj.get("trailer").toString());
            th.setTrailer(obj.get("poster").toString());
             

          
          
          
          
            } catch (IOException e) {
                System.out.println("error related to sql"+e.getMessage());
            }
            System.out.println("date "+sr);

           
        });
                  NetworkManager.getInstance().addToQueueAndWait(req); 
                  return th;

    }
    
    
    public boolean deleteTheatre(Long id)
    {
        String url=Statics.BASE_URL + "/theatre/deleteTheatre?id="+id;
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                req.removeResponseCodeListener(this);
                
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
        
    }
    
    public boolean modifierTheatre (Theatre th){
        SimpleDateFormat format = new SimpleDateFormat("yyyy-MM-dd");
        String dateee = format.format(th.getRdate());
String url = Statics.BASE_URL+"/theatre/updateTheatre?id="+ th.getId() +"&name="+  th.getName()  +"&genre=" +  th.getGenre()   + "&rdate=" +  th.getRdate()   +  "&image=" + th.getImage() +"&trailer=" +  th.getTrailer()+"&description=" +  th.getDescription()  +"&poster=" +  th.getPoster()   ; //création de l'URL;
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
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

import com.codename1.ui.events.ActionListener;
import com.mycompany.entities.Musician;
import com.mycompany.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;
/**
 *
 * @author HP
 */
public class ServiceMusician {
    public static ServiceMusician instance=null;
    public static boolean resulatok=true;
    private ConnectionRequest req;
    
    
    public static ServiceMusician getInstance()
    { if(instance == null)
            instance = new ServiceMusician();
            return instance;
        
    }
    
    
    public ServiceMusician()
    {
        req=new ConnectionRequest();
        
    }
    
    public boolean  addMusician(Musician t)
    {
        String url=Statics.BASE_URL+"/musician/addMusician?name=" + t.getName() + "&prenom=" + t.getPrenom() + "&description=" +  t.getDescription()  + "&born=" +  t.getBorn()  + "&image=" + t.getImage() + "&born=" + t.getBorn() ; //création de l'URL
        req.setUrl(url);
        req.addResponseListener((e)->{
        
        String str=new String(req.getResponseData());
                
              System.out.println("data =="+str);
                
                
                });
        
            NetworkManager.getInstance().addToQueueAndWait(req); 
             return resulatok;
    }
    
    
    
    public ArrayList<Musician>AffichageMusician()
    {
        ArrayList<Musician> result=new ArrayList<>();
        String url=Statics.BASE_URL+"/musician/displayMusicians";
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser Jsonp;
                Jsonp=new JSONParser();
                try{
                    Map<String,Object>mapMusician= Jsonp.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                    List<Map<String,Object>> listofMaps = (List<Map<String,Object>>) mapMusician.get("root");
                    
                    
                    for(Map<String,Object> obj : listofMaps)
                    {
                        Musician re=new Musician();
                        
                        float id=Float.parseFloat(obj.get("id").toString());
                        String name=obj.get("name").toString();
                        String prenom=obj.get("prenom").toString();
                          String description=obj.get("description").toString();
                        String image=obj.get("image").toString();
                        
                        re.setId((int) id);
                        re.setName(name);
                        re.setPrenom(prenom);
                        re.setDescription(description);
                        re.setImage(image);
                        
                        result.add(re);
                        
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
    
    
    
    
    public Musician DetailMusician(int id,Musician musicians)
    {
        
        String url=Statics.BASE_URL+"/musician/detailMusician?"+id;
        req.setUrl(url);
         String sr=new String(req.getResponseData());
        
        req.addResponseListener((evt)->{
            
            JSONParser jSONParser=new JSONParser();
            try {
          Map<String,Object>obj= jSONParser.parseJSON(new CharArrayReader(new String(sr).toCharArray()));

          musicians.setName(obj.get("name").toString());
          musicians.setPrenom(obj.get("prenom").toString());

          musicians.setDescription(obj.get("description").toString());
          musicians.setImage(obj.get("image").toString());

          
          
          
          
            } catch (IOException e) {
                System.out.println("error related to sql"+e.getMessage());
            }
            System.out.println("date "+sr);

           
        });
                  NetworkManager.getInstance().addToQueueAndWait(req); 
                  return musicians;

    }
    
    
    public boolean deleteMusician(int id)
    {
        String url=Statics.BASE_URL + "/musician/deleteMusician?id="+id;
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                req.removeResponseCodeListener(this);
                
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resulatok;
        
    }
    
    public boolean modifierMusician (Musician t){
String url = Statics.BASE_URL+"/musician/updateMusician?id="+ t.getId() +"&name=" + t.getName() + "&prenom=" + t.getPrenom() + "&description=" +  t.getDescription()  + "&born=" +  t.getBorn()  + "&image=" + t.getImage() + "&born=" + t.getBorn() ;
req.setUrl(url);
req.addResponseListener(new ActionListener<NetworkEvent>() {
public void actionPerformed (NetworkEvent evt) {
resulatok = req.getResponseCode() == 200 ; // Code response Http 200 ok
req.removeResponseListener(this);
}});
NetworkManager.getInstance().addToQueueAndWait(req);//execution tal request sinon yet Sada chy dima nalawa
return resulatok;
    }


}

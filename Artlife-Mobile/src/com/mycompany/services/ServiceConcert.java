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
import com.mycompany.entities.Concert;
import com.mycompany.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author HP
 */
public class ServiceConcert {
     public static ServiceConcert instance=null;
    public static boolean resulatok=true;
    private ConnectionRequest req;
       public ArrayList<Concert> Concerts;
            private ConnectionRequest request;
    
    
    public static ServiceConcert getInstance()
    { if(instance == null)
            instance = new ServiceConcert();
            return instance;
        
    }
    
    
    public ServiceConcert()
    {
        req=new ConnectionRequest();
        
    }
    
    public boolean  addConcert(Concert t)
    {
        String url=Statics.BASE_URL+"/concert/addConcert?name=" + t.getName() + "&idmusician=" + t.getIdmusician() + "&musics=" +  t.getMusics()  + "&trailer=" +  t.getTrailer()  + "&image=" + t.getImage(); //création de l'URL
        req.setUrl(url);
        req.addResponseListener((e)->{
        
        String str=new String(req.getResponseData());
                
              System.out.println("data =="+str);
                
                
                });
        
            NetworkManager.getInstance().addToQueueAndWait(req); 
             return resulatok;
    }
    
    
    
    public ArrayList<Concert>AffichageConcert()
    {
        ArrayList<Concert> result=new ArrayList<>();
        String url=Statics.BASE_URL+"/concert/displayConcerts";
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser Jsonp;
                Jsonp=new JSONParser();
                try{
                    Map<String,Object>mapConcert= Jsonp.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                    List<Map<String,Object>> listofMaps = (List<Map<String,Object>>) mapConcert.get("root");
                    
                    
                    for(Map<String,Object> obj : listofMaps)
                    {
                        Concert re=new Concert();
                        
                        float id=Float.parseFloat(obj.get("id").toString());
                        String name=obj.get("name").toString();
                          String musics=obj.get("musics").toString();
                             String idmusician=obj.get("idmusician").toString();
                                String trailer=obj.get("trailer").toString();
                        String image=obj.get("image").toString();
                        
                        re.setId((int) id);
                        re.setName(name);
                        re.setIdmusician(idmusician);
                        re.setMusics(musics);
                        re.setTrailer(trailer);
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
    
    
    
    
    public Concert DetailConcert(int id,Concert concerts)
    {
        
        String url=Statics.BASE_URL+"/concert/detailConcert?"+id;
        req.setUrl(url);
         String sr=new String(req.getResponseData());
        
        req.addResponseListener((evt)->{
            
            JSONParser jSONParser=new JSONParser();
            try {
          Map<String,Object>obj= jSONParser.parseJSON(new CharArrayReader(new String(sr).toCharArray()));
          
    String name=obj.get("name").toString();
                          String musics=obj.get("musics").toString();
                             String idmusician=obj.get("idmusician").toString();
                                String trailer=obj.get("trailer").toString();
                        String image=obj.get("image").toString();
                        
                        concerts.setId((int) id);
                        concerts.setName(name);
                        concerts.setIdmusician(idmusician);
                        concerts.setMusics(musics);
                        concerts.setTrailer(trailer);
                        concerts.setImage(image);

          
          
          
          
            } catch (IOException e) {
                System.out.println("error related to sql"+e.getMessage());
            }
            System.out.println("date "+sr);

           
        });
                  NetworkManager.getInstance().addToQueueAndWait(req); 
                  return concerts;

    }
    
    
    public boolean deleteConcert(int id)
    {  System.out.print(id);
        String url=Statics.BASE_URL + "/concert/deleteConcert?id="+id;
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
    
    public boolean modifierConcert (Concert t){
String url = Statics.BASE_URL+"/concert/updateConcert?id="+ t.getId() + "&name=" + t.getName() + "&idmusician=" + t.getIdmusician() + "&musics=" +  t.getMusics()  + "&trailer=" +  t.getTrailer()  + "&image=" + t.getImage(); 
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

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
import com.mycompany.entities.cinema;
import com.mycompany.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author HP
 */
public class Servicecinema {
     public static Servicecinema instance=null;
    public static boolean resulatok=true;
    private ConnectionRequest req;
       public ArrayList<cinema> cinemas;
            private ConnectionRequest request;
    
    
    public static Servicecinema getInstance()
    { if(instance == null)
            instance = new Servicecinema();
            return instance;
        
    }
    
    
    public Servicecinema()
    {
        req=new ConnectionRequest();
        
    }
    
    public boolean  addcinema(cinema t)
    {
        String url=Statics.BASE_URL+"/cinema/addCinema?name=" + t.getName() + "&nbsalle=" + t.getNb_salle() + "&adresse=" +  t.getAdresse() + "&image=" + t.getImg()+"&description="+t.getDesc(); //création de l'URL
        req.setUrl(url);
        req.addResponseListener((e)->{
        
        String str=new String(req.getResponseData());
                
              System.out.println("data =="+str);
                
                
                });
        
            NetworkManager.getInstance().addToQueueAndWait(req); 
             return resulatok;
    }
    

    
    public ArrayList<cinema>Affichagecinema()
    {
        ArrayList<cinema> result=new ArrayList<>();
        String url=Statics.BASE_URL+"/cinema/displayCinemas";
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser Jsonp;
                Jsonp=new JSONParser();
                try{
                    Map<String,Object>mapcinema= Jsonp.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                    List<Map<String,Object>> listofMaps = (List<Map<String,Object>>) mapcinema.get("root");
                    
                    
                    for(Map<String,Object> obj : listofMaps)
                    {
                        cinema re= new cinema();
                        
                        float id=Float.parseFloat(obj.get("id").toString());
                        String name=obj.get("name").toString();
                        float nb_salle=Float.parseFloat(obj.get("nbsalle").toString());
                        String adresse=obj.get("adresse").toString();
                        String image=obj.get("image").toString();
                        String desc=obj.get("description").toString();
                        float rate=Float.parseFloat(obj.get("rate").toString());
                        
                        re.setId((int) id);
                        
                        re.setName(name);
                        re.setNb_salle((int)nb_salle);
                        re.setAdresse(adresse);
                        re.setImg(image);
                        re.setDesc(desc);
                        re.setRate((int) rate);
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
    
    
    
    
    public cinema Detailcinema(int id,cinema cinemas)
    {
        
        String url=Statics.BASE_URL+"/cinema/detailCinema?"+id;
        req.setUrl(url);
         String sr=new String(req.getResponseData());
        
        req.addResponseListener((evt)->{
            
            JSONParser jSONParser=new JSONParser();
            try {
          Map<String,Object>obj= jSONParser.parseJSON(new CharArrayReader(new String(sr).toCharArray()));
          
                        String name=obj.get("name").toString();
                        float nb_salle=Float.parseFloat(obj.get("nbsalle").toString());
                        String adresse=obj.get("adresse").toString();
                        String image=obj.get("image").toString();
                        String desc=obj.get("description").toString();
                    
                        cinemas.setId((int) id);
                        cinemas.setName(name);
                        cinemas.setNb_salle((int)nb_salle);
                        cinemas.setAdresse(adresse);
                        cinemas.setImg(image);
                        cinemas.setDesc(desc);

          
          
          
          
            } catch (IOException e) {
                System.out.println("error related to sql"+e.getMessage());
            }
            System.out.println("date "+sr);

           
        });
                  NetworkManager.getInstance().addToQueueAndWait(req); 
                  return cinemas;

    }
    
    public boolean deletecinema(int id)
    {  
        String url=Statics.BASE_URL + "/cinema/deleteCinema?id="+id;
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
    
    public boolean modifiercinema (cinema t){
                
        
String url=Statics.BASE_URL+"/cinema/updateCinema?id="+t.getId()+"&name="+ t.getName() + "&nbsalle=" + t.getNb_salle() + "&adresse=" +  t.getAdresse() + "&image=" + t.getImg()+"&description="+t.getDesc()+"&rate="+t.getRate(); //création de l'URL
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

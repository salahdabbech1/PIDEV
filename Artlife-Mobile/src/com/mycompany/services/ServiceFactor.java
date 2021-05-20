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
import com.mycompany.entities.Factor;
import com.mycompany.entities.Movie;
import com.mycompany.entities.Musician;
import com.mycompany.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;
import com.mycompany.utils.DataSource;
import java.util.Date;
import java.util.HashMap;
import java.util.Iterator;
/**
 *
 * @author HP
 */
public class ServiceFactor {
    public static ServiceFactor instance=null;
    public static boolean resulatok=true;
    private ConnectionRequest req;
       public ArrayList<Musician> Musicians;
            private ConnectionRequest request;
    
    
    public static ServiceFactor getInstance()
    { if(instance == null)
            instance = new ServiceFactor();
            return instance;
        
    }
    
    
    public ServiceFactor()
    {
        req=new ConnectionRequest();
        
    }
    
    public boolean  addFactor(Factor t)
    {
        String url=Statics.BASE_URL+"/factor/ajouterfactore?name=" + t.getName()+ "&image=" + t.getImage() + "&imageb=" + t.getImageb() + "&born=" + t.getBorn()+ "&description=" + t.getDescription(); //création de l'URL
        req.setUrl(url);
        req.addResponseListener((e)->{
        
        String str=new String(req.getResponseData());
                
              System.out.println("data =="+str);
                
                
                });
        
            NetworkManager.getInstance().addToQueueAndWait(req); 
             return resulatok;
    }
    
    
    
    public ArrayList<Factor>AffichageFactor()
    {
            ArrayList<Factor> result=new ArrayList<>();
            String url=Statics.BASE_URL+"/factor/displayfactorseee";
            req.setUrl(url);
            req.addResponseListener(new ActionListener<NetworkEvent>() {
                @Override
                public void actionPerformed(NetworkEvent evt) {
                    JSONParser Jsonp;
                    Jsonp=new JSONParser();
                    try{
                        Map<String,Object>mapFactor= Jsonp.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                        List<Map<String,Object>> listofMaps = (List<Map<String,Object>>) mapFactor.get("root");


                        for(Map<String,Object> obj : listofMaps)
                        {
//                            System.out.println(obj.get("filmActors").toString());
                            
                           
                            
                            Factor re=new Factor();
                            float id=Float.parseFloat(obj.get("id").toString());
                            String name=obj.get("name").toString();
                            String description=obj.get("description").toString();
                            String image=obj.get("image").toString();
                            String imageb=obj.get("imageb").toString();
                            Map<String, Object> dd = (Map<String, Object>) obj.get("born");
                            float ll = Float.parseFloat(dd.get("timestamp").toString());
                
                            re.setId((int)id);
                            re.setName(name);
                            re.setDescription(description);
                            re.setImage(image);
                            re.setImageb(imageb);
                            re.setBorn(new Date(((long) ll * 1000)));

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
    
    /*
    public Musician DetailMusician(String id,Musician musicians)
    {
        String url=Statics.BASE_URL+"/musician/displayMusiciansParConcert/"+id;
        req.setUrl(url);
        System.out.println(req.getResponseData());
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

    }*/
    
    
    public boolean deleteFactor(int id)
    {
        String url=Statics.BASE_URL + "/factor/deletefactorr?id="+id;
        System.out.println(url);
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
    
    public boolean modifierFactor (Factor t){
        String url=Statics.BASE_URL+"/factor/updatefactorerer?id=" + t.getId()+"&name=" + t.getName() + "&image=" + t.getImage() + "&imageb=" + t.getImageb() + "&born=" + t.getBorn()+ "&description=" + t.getDescription(); //création de l'URL
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
        public void actionPerformed (NetworkEvent evt) {
        resulatok = req.getResponseCode() == 200 ; // Code response Http 200 ok
        req.removeResponseListener(this);
        }});
        NetworkManager.getInstance().addToQueueAndWait(req);//execution tal request sinon yet Sada chy dima nalawa
        return resulatok;
    }
    
    public ArrayList<Musician>Affich(String id)
    {
        ArrayList<Musician> result=new ArrayList<>();
        String url=Statics.BASE_URL+"/film/displayMusiciansParConcert/"+id;
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

}

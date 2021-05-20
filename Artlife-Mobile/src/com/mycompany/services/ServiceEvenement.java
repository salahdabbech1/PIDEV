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
import com.mycompany.entities.Evenement;

import com.mycompany.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author PersoPc
 */
public class ServiceEvenement  {
public static ServiceEvenement instance=null;
    public static boolean resulatok=true;
    private ConnectionRequest req;
    
    public static ServiceEvenement getInstance()
    { if(instance == null)
            instance = new ServiceEvenement();
            return instance;
        
    }
    public ServiceEvenement()
    {
        req=new ConnectionRequest();
        
    }
    
    
     public boolean  addEvenement (Evenement t)
    {
        String url=Statics.BASE_URL+"/addEvenement?Name=" + t.getName() + "&idContent=" + t.getIdContent()  + "&idCinema=" + t.getIdCinema()  + "&Datedeb=" + t.getDatedeb()  + "&Type=" + t.getType()  + "&DateFin=" + t.getDateFin() + "&Adresse=" +  t.getAdresse()  + "&image=" + t.getImage()+ "&image_qr=" + t.getImage_qr()  ; //création de l'URL
        req.setUrl(url);
        req.addResponseListener((e)->{
        
        String str=new String(req.getResponseData());
                
              System.out.println("data =="+str);
                
                
                });
        
            NetworkManager.getInstance().addToQueueAndWait(req); 
             return resulatok;
    }
     public ArrayList<Evenement>AffichageEvenement()
    {
        ArrayList<Evenement> result=new ArrayList<>();
      String url=Statics.BASE_URL+"/displayEvenements";
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser Jsonp;
                Jsonp=new JSONParser();
                try{
                    Map<String,Object>mapEvent= Jsonp.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                    List<Map<String,Object>> listofMaps = (List<Map<String,Object>>) mapEvent.get("root");
                    
                    
                    for(Map<String,Object> obj : listofMaps)
                    {
                        Evenement re=new Evenement();
                        
                                float id=Float.parseFloat(obj.get("id").toString());
                        String Name=obj.get("name").toString();
                        String idContent=obj.get("idcontent").toString();
                          String idCinema=obj.get("idcinema").toString();
                        String Type=obj.get("type").toString();
                        String Adresse=obj.get("adresse").toString();
                        String image=obj.get("image").toString();
                        
                        re.setId((int)id);
                        re.setName(Name);
                        
                        re.setIdContent(idContent);
                        re.setImage(image);
                        re.setAdresse(Adresse);
                        re.setType(Type);
                        re.setIdCinema(idCinema);
                    
          
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
    
    
    
    
    public Evenement DetailEvenement(int id,Evenement evenements)
    {
        
        String url=Statics.BASE_URL+"/detailEvenement?"+id;
        req.setUrl(url);
         String sr=new String(req.getResponseData());
        
        req.addResponseListener((evt)->{
            
            JSONParser jSONParser=new JSONParser();
            try {
          Map<String,Object>obj= jSONParser.parseJSON(new CharArrayReader(new String(sr).toCharArray()));

          evenements.setName(obj.get("Name").toString());
          evenements.setIdCinema(obj.get("idCinema").toString());

          evenements.setIdContent(obj.get("idContent").toString());
                    evenements.setType(obj.get("Type").toString());
                            evenements.setAdresse(obj.get("Adresse").toString());

          evenements.setImage(obj.get("image").toString());

          
          
          
          
            } catch (IOException e) {
                System.out.println("error related to sql"+e.getMessage());
            }
            System.out.println("date "+sr);

           
        });
                  NetworkManager.getInstance().addToQueueAndWait(req); 
                  return evenements;

    }
    
    
    public boolean deleteEvenement(int id)
    {
        String url=Statics.BASE_URL + "/deleteEvenement?id="+id;
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
    
    public boolean modifierEvenement (Evenement t){
String url = Statics.BASE_URL+"/updateEvenement?id="+ t.getId() +"Name=" + t.getName() + "&idContent=" + t.getIdContent()  + "&idCinema=" + t.getIdCinema()  + "&Datedeb=" + t.getDatedeb()  + "&Type=" + t.getType()  + "&DateFin=" + t.getDateFin() + "&Adresse=" +  t.getAdresse()  + "&image=" + t.getImage() + "&image_qr=" + t.getImage_qr()  ;
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
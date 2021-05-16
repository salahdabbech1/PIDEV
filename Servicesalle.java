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
import com.mycompany.entities.salle;
import com.mycompany.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;
/**
 *
 * @author salah
 */
public class Servicesalle {
    public static Servicesalle instance=null;
    public static boolean resulatok=true;
    private ConnectionRequest req;
       public ArrayList<salle> salles;
            private ConnectionRequest request;
    
    
    public static Servicesalle getInstance()
    { if(instance == null)
            instance = new Servicesalle();
            return instance;
        
    }
    
    
    public Servicesalle()
    {
        req=new ConnectionRequest();
        
    }
    
    public boolean  addsalle(salle t)
    {
        String url=Statics.BASE_URL+"/salle/addSalle?idCin=" + t.getId_cine()+"&NumChaise=" + t.getNb_chaise(); //création de l'URL
        req.setUrl(url);
        req.addResponseListener((e)->{
        
        String str=new String(req.getResponseData());
                
              System.out.println("data =="+str);
                
                
                });
        
            NetworkManager.getInstance().addToQueueAndWait(req); 
             return resulatok;
    }
    

    
    public ArrayList<salle>Affichagesalle()
    {
        ArrayList<salle> result=new ArrayList<>();
        String url=Statics.BASE_URL+"/salle/displaySalles";
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser Jsonp;
                Jsonp=new JSONParser();
                try{
                    Map<String,Object>mapsalle= Jsonp.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                    List<Map<String,Object>> listofMaps = (List<Map<String,Object>>) mapsalle.get("root");
                    
                    
                    for(Map<String,Object> obj : listofMaps)
                    {
                        salle re= new salle();
                        
                        float id=Float.parseFloat(obj.get("id").toString());
                        float idcin=Float.parseFloat(obj.get("idcin").toString());
                        float num_chaise=Float.parseFloat(obj.get("numchaise").toString());
                        
                        re.setId((int) id);
                      re.setId_cine((int)idcin);
                        re.setNb_chaise((int)num_chaise);
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
    
    
    
    
   
    
    public boolean deletesalle(int id)
    {  
        String url=Statics.BASE_URL + "/salle/deleteSalle?id="+id;
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
    
public boolean modifiersalle (salle t){
    String url=Statics.BASE_URL+"/salle/addSalle?idcin=" + t.getId_cine() + "&numchaise=" + t.getNb_chaise();
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



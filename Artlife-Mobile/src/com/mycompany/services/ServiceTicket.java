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
import com.mycompany.entities.Ticket;
import com.mycompany.gui.SessionManager;
import com.mycompany.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;
import java.util.Map;

/**
 *
 * @author KARIMOOOO
 */
public class ServiceTicket {
    public static ServiceTicket instance = null ;
public static boolean resultok = true;
//initilisation connection request
private ConnectionRequest req;
public static ServiceTicket getInstance() {
if(instance == null)
instance = new ServiceTicket();
return instance ;
}
public ServiceTicket() {
req = new ConnectionRequest();
}
     public ArrayList<Ticket>AffichageMyTicket()
    {
        ArrayList<Ticket> result1=new ArrayList<>();
        String url=Statics.BASE_URL+"/ticket/displaytickets?iduser="+SessionManager.getName();
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser Jsonp;
                Jsonp=new JSONParser();
                try{
                    Map<String,Object>mapTicket= Jsonp.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                    List<Map<String,Object>> listofMaps = (List<Map<String,Object>>) mapTicket.get("root");
                    
//                    private int id,idSalle,montant ;
// private LocalDate date;
//    private String chaise,idCinema,idEvent,idUser;
                  for(Map<String,Object> obj : listofMaps)
                    {
                        Ticket re=new Ticket();
                        
                        float id=Float.parseFloat(obj.get("id").toString());
                        String idCinema=obj.get("idcinema").toString();
                        String idEvent=obj.get("idevent").toString();
                        String idUser=obj.get("iduser").toString();
                        String chaise=obj.get("chaise").toString();
                        Map<String, Object> date = (Map<String, Object>) obj.get("date");
                float ll = Float.parseFloat(date.get("timestamp").toString());
                        float idSalle=Float.parseFloat(obj.get("idsalle").toString());
                        float montant=Float.parseFloat(obj.get("montant").toString());
                       
                        



                
                        re.setId((int) id);
                        re.setIdCinema(idCinema);
                        re.setIdEvent(idEvent);
                        re.setIdUser(idUser);
                        re.setChaise(chaise);
                        re.setDate(new Date(((long) ll * 1000)));
                        re.setIdSalle((int) idSalle);
                         re.setMontant((int) montant);
                        
                        result1.add(re);
                        
                    }
                    
                    
                    
                    
                } catch (IOException ex) {
                    System.out.println(
                            "good");
                    
                }
            }
        });
                    NetworkManager.getInstance().addToQueueAndWait(req); 
                    return result1;

        
    }
     public boolean  addTicketn(Ticket t)
    {//http://127.0.0.1:8000/ticket/updateticket?id=7&iduser=symfony1&date=2021-03-03&idcinema=colise&idsalle=7&chaise=g5&idevent=jcc&montant=55
        String url=Statics.BASE_URL+"/ticket/addticket?iduser=" +t.getIdUser()+"&date="+t.getDate()+ "&idcinema=" +  t.getIdCinema()+ "&idsalle=" +  t.getIdSalle()+ "&chaise=" + t.getChaise()+"&idevent="+t.getIdEvent()+"&montant="+t.getMontant() ; //création de l'URL
        req.setUrl(url);
        req.addResponseListener((e)->{
        
        String str=new String(req.getResponseData());
                
              System.out.println("data =="+str);
                
                
                });
        
            NetworkManager.getInstance().addToQueueAndWait(req); 
             return resultok;
    }
     public boolean deleteTicket(int id)
    {
        String url=Statics.BASE_URL + "/ticket/deleteticket?id="+id;
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                req.removeResponseCodeListener(this);
                
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultok;
        
    }
    
}

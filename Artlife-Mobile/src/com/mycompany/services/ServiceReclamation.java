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
import com.codename1.l10n.DateFormat;
import com.codename1.l10n.Format;
import com.codename1.l10n.ParseException;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.ui.events.ActionListener;
import com.mycompany.entities.Reclamation;
import com.mycompany.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;
import java.util.Map;




/**
 *
 * @author PersoPc
 */
public class ServiceReclamation {
     public ArrayList<Reclamation> Reclamations;
    public static ServiceReclamation instance = null;
    public boolean resultOK;
    private ConnectionRequest req;
     public ServiceReclamation() {
        req = new ConnectionRequest();
    }

    public static ServiceReclamation getInstance() {
        if (instance == null) {
            instance = new ServiceReclamation();
        }
        return instance;
    }
        public ArrayList<Reclamation> parseReclamation(String jsonText) throws ParseException {
        try {
            Reclamations = new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String, Object> ReclamationListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));

            List<Map<String, Object>> list = (List<Map<String, Object>>) ReclamationListJson.get("root");

            for (Map<String, Object> obj : list) {
                Reclamation r = new Reclamation();

       float id=Float.parseFloat(obj.get("id").toString());
                        String Titre=obj.get("Titre").toString();
                        String Description=obj.get("Description").toString();
//                         String Traite=obj.get("traite").toString();

                        r.setId((int) id);
                        r.setTitre(Titre);
                        r.setDescription(Description);
                        r.setTraiter(obj.get("traiter").toString());
                       
            Map map = ((Map) obj.get("datere")) ;
          
            Date date = new Date((((Double)map.get("timestamp")).longValue()*1000)); 
            Format formatter = new SimpleDateFormat("yyyy-MM-dd");
            String s = formatter.format(date);
        
            DateFormat df = new SimpleDateFormat("yyyy-MM-dd");
            Date datedebut = new Date();
           
            datedebut = df.parse(s);
            
            r.setDatere(datedebut);
             
              
                
                // questionnaire q =new questionnaire();
                // q.setDescription_cat_qst((String) map.get("description_cat_qst"));
             
                Reclamations.add(r);
            }

        } catch (IOException ex) {
            System.out.println("Exception in parsing reclamations ");
        }

        return Reclamations;
    }

    public ArrayList<Reclamation> findAll() {
        String url = Statics.BASE_URL + "/displayReclamations";
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                try {
                    Reclamations = parseReclamation(new String(req.getResponseData()));
                } catch (ParseException ex) {
                 
                }
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return Reclamations;
    }
    
     public void Delete(int id) {
        String url = Statics.BASE_URL + "/deleteReclamation?id="+id;
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
              
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
       
    }  
     public void addReclamation(Reclamation t){
        String url = Statics.BASE_URL +"/addReclamation?Titre=" + t.getTitre() + "&Description=" + t.getDescription()   ; 
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
              
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
       
    } 
     
       public void modifierReclamation(Reclamation t){
        String url = Statics.BASE_URL +"/updateReclamation?id="+ t.getId() + "&Description=" + t.getDescription()   +"&Titre=" + t.getTitre()   + "&datere=" +  t.getDatere()  + "&traiter=" + t.getTraiter() ;
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
              
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
       
    } 
      public void traiterReclamation(int id){
        String url = Statics.BASE_URL +"/traiterReclamation?id="+id;
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
              
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
       
    } 
}

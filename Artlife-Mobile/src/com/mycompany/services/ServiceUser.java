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
import com.codename1.ui.ComboBox;
import com.codename1.ui.Dialog;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.util.Resources;
import com.mycompany.entities.Musician;
import com.mycompany.entities.User;

import com.mycompany.gui.AjoutMusicianForm;
import com.mycompany.gui.BaseBack;
import com.mycompany.gui.BaseFront;
import com.mycompany.gui.HomeBack;
import com.mycompany.gui.HomeFront;
import com.mycompany.gui.ListMusicianForm;
import com.mycompany.gui.ListUsers;
import com.mycompany.gui.ProfileForm;
import com.mycompany.gui.SessionManager;
import com.mycompany.gui.WalkthruForm;
import static com.mycompany.services.ServiceMusician.resulatok;
import com.mycompany.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;
import java.util.Vector;
 
 
 

/**
 *
 * @author KARIMOOOO
 */
public class ServiceUser {
    //singleton
public static ServiceUser instance = null ;
public static boolean resultok = true;
//initilisation connection request
private ConnectionRequest req;
public static ServiceUser getInstance() {
if(instance == null)
instance = new ServiceUser();
return instance ;
}
public ServiceUser() {
req = new ConnectionRequest();
}
// Signup
public void signup (TextField name, TextField password, TextField email, TextField confirmPassword,ComboBox role,TextField image,Resources res) {
   //Role
//Vector 3ibara ala array 7atit fiha roles ta3na ba3d nzidouhom lel comboBox
 
//http://127.0.0.1:8000/user/addUser?name=symfony8965&password=test&email=mohamedkarim.oueslati@esprit.tn&role=0&image=images
String url = Statics. BASE_URL+"/user/addUser?name="+name.getText().toString()+"&password="+password.getText().toString()+"&email="+email.getText().toString()+"&role="+role.getSelectedItem().toString()+"&image="+image.getText().toString();
req.setUrl(url);

 
req.addResponseListener((e)-> {
//njib data lyatithom fi form
   byte[]data = (byte[])e.getMetaData();//lazm awi Jaja nathrhom ke meta data ya3ni na5o id ta3 kol textField
   String responseData = new String(data);//ba3dika na5o content
   System.out.println("data ===>"+responseData);
}
);

NetworkManager.getInstance().addToQueueAndWait(req);
  
 
}


// Sign In


public void signin (TextField name, TextField password, Resources rs) {
    String url = Statics. BASE_URL+"/user/signin?name="+name.getText().toString() +"&password="+password.getText().toString();
    req.setUrl(url);
    req.addResponseListener((e) ->{
      JSONParser j = new JSONParser();
       String json = new String (req.getResponseData()) + "";
  try {
     if (json.equals("failed")) {
     Dialog.show("Echec d'authentification", "name ou mot de passe éronné", "OK", null);
}
else {
          System.out.println("data =="+json); 
         
          Map<String, Object> user = j.parseJSON (new CharArrayReader(json.toCharArray()));
            //Session  Service
                float id = Float.parseFloat(user.get("id").toString());
                SessionManager.setId((int)id);//jibt id ta3 user ly3ml login w sajltha fi session ta3i
                
                SessionManager.setPassowrd(user.get("password").toString());
                SessionManager.setName(user.get("name").toString());
                SessionManager.setEmail(user.get("email").toString());
                
                //photo 
                
                if(user.get("image") != null)
                    SessionManager.setImage(user.get("image").toString());
                System.err.println("current user==>"+SessionManager.getName()+","+SessionManager.getPassowrd()+","+SessionManager.getRole());
           
         if(user.size()>0){
             if(!"artlife".equals(SessionManager.getName())){
                
                   new HomeFront(rs).show();
             }else{
                    new HomeBack(rs).show();
             }
         }
     
     }
         
        } catch (Exception ex) {
            ex.printStackTrace();
        }
        
    });
   NetworkManager.getInstance().addToQueueAndWait(req); 
}
public ArrayList<User>AffichageUser()
    {
        ArrayList<User> result=new ArrayList<>();
        String url=Statics.BASE_URL+"/user/displayUsers";
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
                        User re=new User();
                        
                        float id=Float.parseFloat(obj.get("id").toString());
                        String name=obj.get("name").toString();
                        String password=obj.get("password").toString();
                        String email=obj.get("email").toString();
                        float role=Float.parseFloat(obj.get("role").toString());
                        String image=obj.get("image").toString();
                        
                        re.setId((int) id);
                        re.setName(name);
                        re.setPassword(password);
                        re.setEmail(email);
                        re.setRole((int) role);
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
public boolean deleteMusician(int id)
    {
        String url=Statics.BASE_URL + "/user/deleteUser?id="+id;
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

  public boolean myacount (User t){
      //http://127.0.0.1:8000/user/updateUser?id=92&name=symfony&password=test123&email=mohamedkarim.oueslati@esprit.tn&role=0&image=images
String url = Statics.BASE_URL+"/user/updateUser?id="+ t.getId() +"&name=" + t.getName() + "&password=" + t.getPassword() + "&email=" +  t.getEmail()  + "&role=0"+"&image=" + t.getImage();
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
  



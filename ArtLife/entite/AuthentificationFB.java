/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entite;
 

import com.restfb.DefaultFacebookClient;
import com.restfb.FacebookClient;
import com.restfb.Version;
import com.restfb.types.User;
import  entite.user;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.InputStream;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;

/**
 *
 * @author lenovo
 */
public class AuthentificationFB {
   /* public user AuthentificationFB() throws FileNotFoundException
    {
       String accessToken = "EAAC5zP2J5sABANNFlk0ZCAR1XZA59KcvJrmXaV1Gn8XdsZCtvQEAGDOKWq9uMXCSWZAnZCAD95LBnOikPVZAD1MrePZApehBZC2MEZBr9vYZBcZBRFFm5ohheRXYeKti9RGqF4QLRZCsx9NLe1BpMPbP8mXxm6i0skC4zjd8CUrNfMLAOaR0Y619er9lKlRwZAlWeoI7ZAcTFRseH2Iqtwowq9fIdIv5ZC0nlnwdgpgBHJjbGJ4BAZDZD";
        FacebookClient fbClient = new DefaultFacebookClient(accessToken, Version.UNVERSIONED);
        
        User me = fbClient.fetchObject("me", User.class);
       String email ="oueslatikarim77@gmail.com";
       // String email=me.getEmail();
        System.out.println(email);
        
        String name = me.getName();
        System.err.println(name);
        String password = "ARTLIFE";
        
        
        //InputStream inputStream = new FileInputStream("src/hangargame/images/ImageAnonyme.jpg");

       // String loginFB = me.getName();
        user u = new user(name, password,email);
        return u;
        
       
    }*/
    public user AuthentificationFB(){
       String domain  ="http%3A%2F%2Flocalhost%2F";
        String appId="204290078140096";
        
        String authUrl="https://graph.facebook.com/oauth/authorize?type=user_agent&client_id="+appId+"&redirect_uri="+domain+"&scope=email,public_profile";
                
                
                
         System.setProperty("webdriver.chrome.driver", "chromedriver.exe");
         
         WebDriver driver =new ChromeDriver();
         driver.get(authUrl);
         String accessToken="EAAC5zP2J5sABAKTDGREQzQWGOk50jtEjtGh0ZBbxE5a6GPwz6VATuNtgaep55UpZA67HlDqsYGJqvZCNpqfpYU3NVTMU65H4aIHLjk1jZBFgjFLKUO31MXegNF7AgoyPOGAXzyR5KnZCPEqnMLX9mEy42uytXCSMkm96zYh8aGwAQknOozDLTizKKdbBCnwYZD";
         
         while (true){
             if(!driver.getCurrentUrl().contains("facebook.com")){
                 String url=driver.getCurrentUrl();
                 //accessToken=url.replaceAll(".*#access_token=(.+)&.*", "$1");
                 driver.quit();
                 
                FacebookClient fbClient= new DefaultFacebookClient(accessToken, Version.UNVERSIONED);
                User me= fbClient.fetchObject("me",User.class);
                String email ="oueslatikarim77@gmail.com";
       // String email=me.getEmail();
        System.out.println(email);
        
        String name = me.getName();
        System.err.println(name);
        String password = "ARTLIFE";
         user u = new user(name, password,email);  
          return u;      
             }
           
            
             
         }
         
                  
         
        
       
   } 
    
     
}
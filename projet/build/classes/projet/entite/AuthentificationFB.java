/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projet.entite;
 

import com.restfb.DefaultFacebookClient;
import com.restfb.FacebookClient;
import com.restfb.Version;
import com.restfb.types.User;
import projet.entite.user;
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
       String accessToken = "EAAC5zP2J5sABAA2OWWyLarTLkDQ4ZBSwTDIrm9oJsmgI7mIjkzzcvc4dMWfoaZCkDVHdoFXjrf0AiyJtLZBvmT3uJethZCe49zb7vSd1IxFkZB8pNzq5z3zWuAZAEKcZBGgraYPmZA9QcZA8sXB4fBCZANr93eZCjunzhSNCnEZC1cX9uxelnCfHZBIcLk7xZAeIym4xCtv4GZC2DlLboEJ3Qj2MNNYNlVwc8CxzcNFePuAIhYJ6wZDZD";
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
         String accessToken="EAAC5zP2J5sABABPIBZBkLTGiuyp3cIFoxbdvfVpI0JmCVT99cGbrMhGwMAkGQlbs8HfvLK7SZBGncXSZBAKgV5Mq5VA31dkGU7wNSq7iJ7rCdU6zZA4ZCBekGl6ZC6pZAwTMZCXZBFn0JGuZCo2AqZCvqO6KibM1cV77IJVJelD8ZALMTAP0W72cRsiUVj4hoRNFqzAZD";
         
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
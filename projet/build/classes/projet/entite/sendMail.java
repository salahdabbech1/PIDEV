/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projet.entite;


import java.net.Authenticator;
import java.net.PasswordAuthentication;
import java.util.Properties;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.mail.Message;
import javax.mail.MessagingException;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;
 
 
 

/**
 *
 * @author KARIMOOOO
 */
public class sendMail {
    public static void sendMail(String receveursList) {
        Properties properties = new Properties();
        
        properties.put("mail.smtp.auth", "true");
        properties.put("mail.smtp.starttls.enable", "true");
        properties.put("mail.smtp.host", "smtp.gmail.com");
        properties.put("mail.smtp.port", "587");
        
        String MonEmail = "oueslatikarim77@gmail.com";
        String password = "azerty102";
        
         Session session= Session.getInstance(properties,new javax.mail.Authenticator() {
            @Override
            protected javax.mail.PasswordAuthentication getPasswordAuthentication() {
                return new javax.mail.PasswordAuthentication(MonEmail, password);
            }
             
         
             
         
} );
                
                 
        
        Message message = prepareMessage(session,MonEmail,receveursList);
        
        try {
        Transport.send(message);
        } catch (MessagingException ex) {
            Logger.getLogger(sendMail.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        System.err.println("Message envoyé avec succès");
    }
    
    private static Message prepareMessage(Session session,String email,String receveursList)
    {
     
        
        try {
             Message message = new MimeMessage(session);
            message.setFrom(new InternetAddress(email));
            
            message.setSubject("java");
            message.setRecipient(Message.RecipientType.TO, new InternetAddress(receveursList));
            message.setText("Welcome to artlife");
            
            return message;
        } catch (MessagingException ex) {
            Logger.getLogger(sendMail.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        return null;
    }
    
    
    
}

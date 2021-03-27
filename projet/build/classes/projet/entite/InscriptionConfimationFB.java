/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projet.entite;

/**
 *
 * @author KARIMOOOO
 */
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 

import java.util.Properties;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.mail.Message;
import javax.mail.MessagingException;
import javax.mail.PasswordAuthentication;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;

/**
 *
 * @author lenovo
 */
public class InscriptionConfimationFB {
    
     final String username = "artlife.appl@gmail.com";
		final String password = "artlife123";
                
                Properties props = new Properties();
                
    public void send(String name, String motPass, String email){
                
                props.put("mail.smtp.auth", "true");
		props.put("mail.smtp.starttls.enable", "true");
		props.put("mail.smtp.host", "smtp.gmail.com");
		props.put("mail.smtp.port", "587");
                
                
                Session session = Session.getInstance(props,
		  new javax.mail.Authenticator() {
                        @Override
			protected PasswordAuthentication getPasswordAuthentication() {
				return new PasswordAuthentication(username, password);
			}
		  });
                
                Message message = new MimeMessage(session);
                
    try {
        message.setFrom(new InternetAddress("artlife.appl@gmail.com"));
        message.setRecipients(Message.RecipientType.TO,
				InternetAddress.parse(email));
        
        
        message.setSubject("Inscription réussite");
        
        message.setText("Bonjour "+name+"\n "
                + "Merci d'avoir rejoindre Artlife, la plate-forme la plus divertissante au monde! \n"
                + " Votre mot de passe attribué par défaut est:  "+motPass+", vous pouvez le changer en cliquant sur 'My Account dans votre compte'  " );

			Transport.send(message);

			System.out.println("Done");
        
        
        
    } catch (MessagingException ex) {
        Logger.getLogger(InscriptionConfimationFB.class.getName()).log(Level.SEVERE, null, ex);
    }
                
                
                }
}


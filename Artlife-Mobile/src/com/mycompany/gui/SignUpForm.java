/*
 * Copyright (c) 2016, Codename One
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated 
 * documentation files (the "Software"), to deal in the Software without restriction, including without limitation 
 * the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, 
 * and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions 
 * of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, 
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A 
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT 
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF 
 * CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE 
 * OR THE USE OR OTHER DEALINGS IN THE SOFTWARE. 
 */

package com.mycompany.gui;

import com.codename1.components.FloatingHint;

 
import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.util.Resources;
import com.mycompany.services.ServiceUser;
import com.sun.mail.smtp.SMTPTransport;
import java.util.Date;


 


import java.util.Vector;
 
import javax.mail.Message;
import javax.mail.MessagingException;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.AddressException;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;



/**
 * Signup UI
 *
 * @author Shai Almog
 */
public class SignUpForm extends BaseForm {

    public SignUpForm(Resources res) throws MessagingException {
        super(new BorderLayout());
        Toolbar tb = new Toolbar(true);
        setToolbar(tb);
        tb.setUIID("Container");
        getTitleArea().setUIID("Container");
        Form previous = Display.getInstance().getCurrent();
        tb.setBackCommand("", e -> previous.showBack());
        setUIID("SignIn");
                
        TextField name = new TextField("", "name", 20, TextField.ANY);
        TextField email = new TextField("", "E-Mail", 20, TextField.EMAILADDR);
        TextField password = new TextField("", "Password", 20, TextField.PASSWORD);
        TextField confirmPassword = new TextField("", "Confirm Password", 20, TextField.PASSWORD);
        TextField image = new TextField("", "image", 20,TextField.ANY);
        
        
        //Role
//Vector 3ibara ala array 7atit fiha roles ta3na ba3d nzidouhom lel comboBox
Vector<Integer> vectorRole;
vectorRole = new Vector();
vectorRole.add(0);

ComboBox<Integer>role = new ComboBox<>(vectorRole);


      
        
        name.setSingleLineTextArea(false);
        email.setSingleLineTextArea(false);
        password.setSingleLineTextArea(false);
        confirmPassword.setSingleLineTextArea(false);
        image.setSingleLineTextArea(false);
        Button next = new Button("SignUp");
        Button signIn = new Button("Sign In");
        signIn.addActionListener(e ->new SignInForm(res).show());
        signIn.setUIID("Link");
        Label alreadHaveAnAccount = new Label("Already have an account?");
      
       
                         
                        
              
                  
        
        Container content = BoxLayout.encloseY(
                new Label("Sign Up", "LogoLabel"),
                new FloatingHint(name),
                createLineSeparator(),
                new FloatingHint(email),
                createLineSeparator(),
                new FloatingHint(password),
                createLineSeparator(),
                new FloatingHint(confirmPassword),
                createLineSeparator(),
                new FloatingHint(image),
                createLineSeparator(),
                role
                
        );
        content.setScrollableY(true);
        add(BorderLayout.CENTER, content);
        add(BorderLayout.SOUTH, BoxLayout.encloseY(
                next,
                FlowLayout.encloseCenter(alreadHaveAnAccount, signIn)
        ));
        next.requestFocus();
        next.addActionListener((e) ->{
            if(name.getText()=="" ||  password.getText()=="" || email.getText()==""|| confirmPassword.getText()==""|| image.getText()==""){
             Dialog.show("Erreur", "Veuillez remplir les champs", "OK", null);
    }else{
            ServiceUser.getInstance().signup(name, password, email, confirmPassword,role,image,res);
            
            Dialog.show("Succses","account is saved","OK",null);
            
            new SignInForm(res).show();
            }
                    
        }
        );
    }
   /* public  void sendMail() throws MessagingException {
         
          
        Properties props=new Properties();
         props.put("mail.transport.protocol", "smtp"); //SMTP protocol
         props.put("mail.smtps.host", "smtp.gmail.com"); // SMTP Host
         props.put("mail.smtps.auth", "true"); //enable authentication
              Session session = Session.getInstance (props, null); // alen 9rahach 5ater mazina masabinach javax.mail .jar
               MimeMessage msg = new MimeMessage (session);
               msg. setFrom(new InternetAddress ("Reintialisation mot de passe <monEmail@domaine.com>"));
              //  msg.setRecipients (Message. RecipientType.TO, email.getText().toString());
                msg.setSubject ("Application nom : Confirmation du ");
                msg.setSentDate (new Date(System.currentTimeMillis()));
                  
                msg.setText("hallo");
SMTPTransport st = (SMTPTransport) session.getTransport ("smtps");
// String MonEmail = "artlife.appl@gmail.com";
     //   String password = "artlife123";
st.connect("smtp.gmail", 465, "artlife.appl@gmail.com","artlife123");
st.sendMessage (msg, msg.getAllRecipients());

System.out.println("server response : "+st.getLastServerResponse ());

    
}*/
}

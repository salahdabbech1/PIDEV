/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package service;

import Iservice.IserviceFB;
import java.io.InputStream;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.logging.Level;
import java.util.logging.Logger;
import projet.entite.user;
import utils.DatabaseConnection;

/**
 *
 * @author KARIMOOOO
 */
public class serviceFB implements IserviceFB{
    Connection cnx;
    public serviceFB() {
       cnx = DatabaseConnection.getInstance().getConn();
       
    }
    
    Statement ste;
    PreparedStatement prepste;

@Override
    public boolean InscriptionFB(user u) {
        
                
       String ps="INSERT INTO `user`(`name`,`email`,`password`,`role`,`image`) VALUES('"+u.getName()+"','"+u.getEmail()+"','"+u.getPassword()+"',0,'"+u.getImage()+"')";
           System.out.println(u.toString());
        
        try{

            //InputStream inputStream = g.getImage();
            prepste = cnx.prepareStatement(ps);
            prepste.executeUpdate(ps);
          //  InscriptionConfirmationFB sendMail = new InscriptionConfirmationFB();
            //sendMail.send(g.getLogin(), g.getPassword(), g.getEmail());

            return true;
}   catch (SQLException ex) {
            Logger.getLogger(serviceFB.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        return false;
    

 
    
    }
}
   
    


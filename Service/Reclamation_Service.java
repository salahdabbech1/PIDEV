/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Service;

import IService.IService;
import Utils.MyConnexion;
import entities.Event;
import entities.reclamation;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author PersoPc
 */
public class Reclamation_Service {


    Connection c=MyConnexion.getInsCon().getcnx();

    public void Ajouter(reclamation q) throws SQLException {
   
 String query ="INSERT INTO `reclamation`( `Titre`, `Description') VALUES (?,?)";
 
         PreparedStatement st;
        
        try {
            st = c.prepareStatement(query);
            
                st.setString(1,q.getTitre());
                st.setString(2,q.getDescription());
             
                st.executeUpdate();

        } catch (SQLException ex) {
            Logger.getLogger(Event_Service.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        
    
}    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Service;

import Alert.AlertDialog;
import IService.IService;
import Utils.MyConnexion;

import entities.Event;

import Utils.MyConnexion;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLDataException;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author PersoPc
 */
public class Event_Service  implements IService<Event> {


    Connection c=MyConnexion.getInsCon().getcnx();
  
    @Override
    public void Ajouter(Event q) throws SQLException {
   
 String query ="INSERT INTO `event`( `Name`, `idContent`, `idCinema`, `DateDeb`, `Type`, `DateFin`, `Adresse`) VALUES (?,?,?,?,?,?,?)";
 
         PreparedStatement st;
        
        try {
            st = c.prepareStatement(query);
            
                st.setString(1,q.getName());
                st.setInt(2,q.getIdContent());
                st.setInt(3,q.getIdCinema());
                st.setDate(4,q.getDateDeb());
                st.setString(5,q.getType());
                st.setDate(6,q.getDateFin());
                st.setString(7,q.getAdresse());
                st.executeUpdate();

        } catch (SQLException ex) {
            Logger.getLogger(Event_Service.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        
    
}
    

    @Override
    public void Supprimer(int t) throws SQLException {
       String requete = "DELETE FROM `event` WHERE `id`=" + String.valueOf(t) + "";
        try {

            PreparedStatement pst = c.prepareStatement(requete);
            pst.execute(requete);
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

    }

    @Override
    public void Modifier(Event q, int id) throws SQLException {
String query = "UPDATE `event` SET `Name`=?,`idContent`=?,`idCinema`=?,`DateDeb`=?,`Type`=?,`DateFin`=?,`Adresse`=? WHERE `id` = ?";
		PreparedStatement st;
        try {
                st = c.prepareStatement(query);
               st.setString(1,q.getName());
                st.setInt(2,q.getIdContent());
                st.setInt(3,q.getIdCinema());
                st.setDate(4,q.getDateDeb());
                st.setString(5,q.getType());
                st.setDate(6,q.getDateFin());
                st.setString(7,q.getAdresse());
                 st.setInt(8,id);

                 System.out.println(q+"" + id);
                st.executeUpdate();

        } catch (SQLException ex) {
                                                               System.out.println(ex.getMessage());

        }    }

    @Override
    public ObservableList<Event> Affichertout() throws SQLException {
         ObservableList<Event> list = FXCollections.observableArrayList();
        String requete = "SELECT * FROM `event` ";
        try {
            PreparedStatement ps = c.prepareStatement(requete);
            ResultSet rs = ps.executeQuery();

            while (rs.next()) {
                list.add(new Event(rs.getInt("id"), rs.getDate("DateDeb"), rs.getDate("DateFin"),rs.getInt("idContent"),rs.getInt("idCinema"),rs.getString("Adresse"),rs.getString("Type"),rs.getString("Name")));

            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return list;
    }
    
}

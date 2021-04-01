/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package service;

import Iservice.MyConnexion;
import entite.Event;
import entite.reclamation;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import utils.DatabaseConnection;

/**
 *
 * @author PersoPc
 */
public class Reclamation_Service {


    Connection cnx;
    public Reclamation_Service() {
       cnx = DatabaseConnection.getInstance().getConn();
       
    }
    
    Statement ste;
    PreparedStatement st;
    
    

    public void Ajouter(reclamation r) throws SQLException {
   
 String query ="INSERT INTO `reclamation`( `Titre`, `Description`, `datere` ,  `traiter`) VALUES (?,?,?,?)";
 
     
        
        try {
            st = cnx.prepareStatement(query);
            
                st.setString(1,r.getTitre());
                st.setString(2,r.getDescription());
                                st.setDate(3,r.getDatere());

                                st.setString(4,"nontraiter");

             
                st.executeUpdate();

        } catch (SQLException ex) {
            System.out.println(ex.getMessage());        }
        
        
    
}    

    public ObservableList<reclamation> Affichertout() {
        ObservableList<reclamation> list = FXCollections.observableArrayList();
        String requete = "SELECT * FROM `reclamation` ";
        try {
            PreparedStatement ps = cnx.prepareStatement(requete);
            ResultSet rs = ps.executeQuery();

            while (rs.next()) {
                list.add(new reclamation(rs.getInt("id"),rs.getString("Titre"),rs.getString("Description"),rs.getString("traiter"),rs.getDate("datere")));
  
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
        return list;//To change body of generated methods, choose Tools | Templates.
    }

    public void Modifier(reclamation t, int id) throws SQLException {
        PreparedStatement ps;

        String query = "UPDATE `reclamation` SET `traiter`=? where id = ?";
        ps = cnx.prepareStatement(query);
        ps.setInt(2, id);
        ps.setString(1, t.getTraiter());
        ps.execute(); //To change body of generated methods, choose Tools | Templates.
    }

    public void Supprimer(int id) {
          String requete = "DELETE FROM `reclamation` WHERE `ID`=" + String.valueOf(id) + "";
        try {

            PreparedStatement pst = cnx.prepareStatement(requete);
            pst.execute(requete);
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        } //To change body of generated methods, choose Tools | Templates.
    }

    public ObservableList<reclamation> serach(String cas) throws SQLException  {
        ObservableList<reclamation> list = FXCollections.observableArrayList();
        String requete = "SELECT * FROM reclamation  where Titre LIKE '%" + cas + "%' ";
        try {
            PreparedStatement ps = cnx.prepareStatement(requete);
            ResultSet rs = ps.executeQuery();

            while (rs.next()) {

                list.add(new reclamation(rs.getInt("id"),rs.getString("Titre"),rs.getString("Description"),rs.getString("traiter"),rs.getDate("datere")));

            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }

        return list;
    }    }


    


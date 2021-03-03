/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package service;
import Entite.cinema;
import Entite.salle;
import Iservices.Iservice;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import utils.Database;
/**
 *
 * @author KARIMOOOO
 */
public class service_salle implements Iservice<salle> {
    Connection cnx;
    public service_salle() {
         cnx = Database.getInstance().getConn();
        
    }
    @Override
    public void add(salle t) throws SQLException {
       PreparedStatement ps=cnx.prepareStatement("INSERT INTO salle(idCin,NumChaise) VALUES(?,?)");
     
       ps.setInt(1,t.getId_cine());
         ps.setInt(2,t.getNb_chaise());
         ps.execute();
       
        
    }

    @Override
    public List<salle> read() throws SQLException {
       // List<cinema> ls = new ArrayList<cinema>();
               ObservableList<salle> ls = FXCollections.observableArrayList();

    Statement st = cnx.createStatement();
    String req = "select * from salle";
    ResultSet rs = st.executeQuery(req);
     
    while(rs.next()){
        
         int id_cine = rs.getInt("idCin");
        
         int nb_chaise=rs.getInt(3);
           int id = rs.getInt(2);
        
       salle c = new salle( id_cine,nb_chaise,id);
        ls.add(c);
      //  System.out.println( id + ", " + nom + ", " + prenom);
    }
    
    return ls;
    }

    @Override
    public void update(salle t) throws SQLException {
       PreparedStatement pt = cnx.prepareStatement("update salle set id = ?,NumChaise=? where idCin = ? ");
        pt.setInt(1, t.getId());
        pt.setInt(2, t.getNb_chaise());
        pt.setInt(3, t.getId_cine());
        pt.executeUpdate(); 
    }

    @Override
    public void delete(int a) throws SQLException {
        PreparedStatement pt = cnx.prepareStatement("delete from salle where idCin = ?");
        pt.setInt(1, a);
        pt.executeUpdate();    }
    
    
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package service;
import Entite.cinema;
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
public class service_cinema implements Iservice<cinema>  {
    Connection cnx;
    public service_cinema() {
         cnx = Database.getInstance().getConn();
        
    }
    @Override
    public void add(cinema t) throws SQLException {
       PreparedStatement ps=cnx.prepareStatement("INSERT INTO cinema(name,nbsalle,adresse,image) VALUES(?,?,?,?)");
       ps.setString(1,t.getName());
       ps.setInt(2,t.getNb_salle());
       ps.setString(3,t.getAdresse());
       ps.setString(4,t.getImg());
       ps.execute();
    }

    @Override
    public List<cinema> read() throws SQLException {
       // List<cinema> ls = new ArrayList<cinema>();
               ObservableList<cinema> ls = FXCollections.observableArrayList();

    Statement st = cnx.createStatement();
    String req = "select * from cinema";
    ResultSet rs = st.executeQuery(req);
     
    while(rs.next()){
        int id = rs.getInt("id");
        String nom = rs.getString(2);
        int nb_salle=rs.getInt(3);
        String adresse = rs.getString(4);
        String img=rs.getString(5);
        
       cinema c = new cinema(id,nom,nb_salle,adresse,img);
        ls.add(c);
      //  System.out.println( id + ", " + nom + ", " + prenom);
    }
    
    return ls;
    }

    @Override
    public void update(cinema t) throws SQLException {
       PreparedStatement pt = cnx.prepareStatement("update cinema set name = ?,nbsalle=?,adresse=?,image=? where id = ? ");
        pt.setString(1, t.getName());
        pt.setInt(2, t.getNb_salle());
        pt.setString(3, t.getAdresse());
        pt.setString(4, t.getImg());
        pt.setInt(5, t.getId());
        pt.executeUpdate(); 
    }

    @Override
    public void delete(int a) throws SQLException {
        PreparedStatement pt = cnx.prepareStatement("delete from cinema where id = ?");
        pt.setInt(1, a);
        pt.executeUpdate();    }
    
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package service;

import Iservice.Iservice;
import java.sql.SQLException;
import java.util.List;
import entite.ticket;
import java.sql.Connection;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.time.LocalDate;
import java.util.ArrayList;
import java.util.List;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import utils.DatabaseConnection;



/**
 *
 * @author KARIMOOOO
 */
public class service_reservation implements Iservice<ticket>{
Connection cnx;
 public service_reservation() {
       cnx = DatabaseConnection.getInstance().getConn();
    }
    @Override
    public void add(ticket t) throws SQLException {
       PreparedStatement ps=cnx.prepareStatement ( "INSERT INTO `ticket` (`id`,`idUser`, `date`, `idCinema`, `idSalle`, `chaise`, `idEvent`, `montant`) VALUES(null,?,?,?,?,?,?,?)");
         
    }

    @Override
    public List<ticket> read() throws SQLException {
        ObservableList<ticket> ticketList = FXCollections.observableArrayList();
        
        String query = "Select * from ticket";
        Statement st;
        ResultSet rs;
        
        try{
            
            st=cnx.createStatement();
            rs=st.executeQuery(query);
            ticket tickets;
            while(rs.next()){
               
                tickets = new ticket(rs.getInt("id"),rs.getInt("idUser"),rs.getString("idCinema"),rs.getInt("idSalle"),rs.getString("idEvent"),rs.getInt("montant"),rs.getDate("date").toLocalDate(),rs.getString("chaise"));
                ticketList.add(tickets); 
                System.out.println(rs.getInt("id"));
                
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return ticketList;

         
    }

   @Override
    public void update(ticket t) throws SQLException {
        PreparedStatement pt = cnx.prepareStatement("update ticket set idUser = ?,idCinema=?,idSalle=?,chaise=?,idEvent=?,montant=? where id = ? ");
        pt.setInt(1, t.getIdUser());
        //pt.setDate(2, t.getLocalDate);
        pt.setString(2, t.getIdCinema());
        pt.setInt(3, t.getIdSalle());
        pt.setString(4, t.getChaise());
        pt.setString(5, t.getIdEvent());
              
             pt.setInt(6, t.getMontant());
        pt.setInt(7, t.getId());
        pt.executeUpdate(); 
         
    }

    @Override
    public void delete(int a) throws SQLException {
        PreparedStatement pt = cnx.prepareStatement("delete from ticket where id = ?");
        pt.setInt(1, a);
        pt.executeUpdate();    }

   
    
}

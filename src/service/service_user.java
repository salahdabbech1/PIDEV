/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package service;
import Iservice.Iservice;
import java.sql.SQLException;
import java.util.List;
import entite.user;
import java.sql.Connection;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import utils.DatabaseConnection;
 



/**
 *
 * @author KARIMOOOO
 */
public class service_user implements Iservice<user>{
Connection cnx;
 public service_user() {
       cnx = DatabaseConnection.getInstance().getConn();
    }
    @Override
    public void add(user t) throws SQLException {
       PreparedStatement ps=cnx.prepareStatement ( "INSERT INTO `user` (`name`,`email`, `password`, `role`, `image` ) VALUES (?,?,?,?,?)");
         
    }

    @Override
    public List<user> read() throws SQLException {
       ObservableList<user> UserList = FXCollections.observableArrayList();
       
        String Uqueri = "Select * from user where role=0";
        Statement st;
        ResultSet rs;
        
        try{
            
            st=cnx.createStatement();
            rs=st.executeQuery(Uqueri);
            user users;
            while(rs.next()){
              
                users = new user(rs.getInt("id"),rs.getString("name"),rs.getString("password"),rs.getString("email"),rs.getInt("role"),rs.getString("image"));
                UserList.add(users);
                


                  
               // Boxxx.getItems().add(rs.getString("id"));
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return UserList;
    }

    @Override
    public void update(user t) throws SQLException {
        PreparedStatement pt = cnx.prepareStatement("update user set name = ?,password=?,email=?,image=? where id = ? ");
        
          pt.setString(1, t.getName());
           pt.setString(2, t.getPassword());
            pt.setString(3, t.getEmail());
             //pt.setInt(4, t.getRole());
              pt.setString(4, t.getImage());
              
            pt.setInt(5, t.getId());
              
              
        pt.executeUpdate(); 
         
    }

    @Override
    public void delete(int a) throws SQLException {
        PreparedStatement pt = cnx.prepareStatement("delete from user where id = ?");
        pt.setInt(1, a);
        pt.executeUpdate();    }

   
    
}

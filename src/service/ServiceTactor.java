/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package service;

import Movie.TactorController;
import utils.DatabaseConnection;
import entite.Tactor;
import Iservice.IServiceTheatre;
import java.sql.Connection;
import java.sql.Date;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.time.LocalDate;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;

/**
 *
 * @author mateu
 */
public class ServiceTactor implements IServiceTheatre<Tactor> {
     Connection cnx ;
    public ServiceTactor() {
         cnx = DatabaseConnection.getInstance().getConn();
     
    }

    @Override
    public void add(Tactor t) throws SQLException {
        Statement st = cnx.createStatement();
        String query = "INSERT INTO `tactor` (`id`, `name`, `born`, `description`, `image`) VALUES (NULL, '"+t.getName()+"', '"+ t.getBorn() +"', '"+t.getDescription() +"','"+t.getImage()+"');";
        st.executeUpdate(query);
       
    }

    @Override
    public List<Tactor> read() throws SQLException {
        List<Tactor> ls = new ArrayList<Tactor>();
        Statement st = cnx.createStatement();
        String req = "select * from tactor order by name";
        ResultSet rs = st.executeQuery(req);

        while(rs.next()){
            Long id = rs.getLong("id");
            String name = rs.getString("name");
            LocalDate born = rs.getDate("born").toLocalDate();
            String description = rs.getString("description");
            String image = rs.getString("image");
            Tactor p = new Tactor(id, name, born,description,image);
            ls.add(p);
         
        }

        return ls;
    }

    @Override
    public void update(Tactor t) throws SQLException {
        Statement st = cnx.createStatement();
        String query = "UPDATE `tactor` SET `name` = '"+ t.getName() +"',`born` = '"+ t.getBorn() +"', `description` = '"+t.getDescription() + "', `image` = '"+t.getImage() + "' WHERE `tactor`.`id` = "+ t.getId()+";";       
        st.executeUpdate(query);
    }

    @Override
    public void delete(Long id) throws SQLException {
         Statement st = cnx.createStatement();
        String query = "DELETE FROM `tactor` WHERE `tactor`.`id` = '"+id+"'";        
        st.executeUpdate(query);
    }
    
    public ObservableList<Tactor> likeByName(String a) {
       
        ObservableList<Tactor> listData = FXCollections.observableArrayList();
        try {
            String sql = "select * from tactor where id like '%"+a+"%' or name like '%"+a+"%' or born like '%"+a+"%' or description like '%"+a+"%'  ";
            ResultSet rs = cnx.createStatement().executeQuery(sql);
            while (rs.next()) {  
                Tactor m = new Tactor();
                m.setId(rs.getLong(1));
                m.setName(rs.getString(2));
                m.setBorn(rs.getDate(3).toLocalDate()); 
               m.setDescription(rs.getString(4));
               m.setImage(rs.getString(5));
                listData.add(m);
            }
        } catch (Exception ex) {
            Logger.getLogger(Tactor.class.getName()).log(Level.SEVERE, null, ex);
        }
        return listData;
    }
    
}

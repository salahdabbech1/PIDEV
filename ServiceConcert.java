/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Service;

import intService.IService;
import Movie.Concert;
import Movie.DatabaseConnection;
import intService.IService;
import java.sql.Connection;
import java.sql.Date;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import Movie.ConcertController;


/**
 *
 * @author HP
 */
public class ServiceConcert implements IService<Concert>{
    Connection cnx ;
    DatabaseConnection db;
    public ServiceConcert() {
         cnx = db.getConnection();
     
    }

    @Override
    public void add(Concert t) throws SQLException {
        Statement st = cnx.createStatement();
        String query = "INSERT INTO `concert` (`id`, `name`, `idmusician`, `musics`, `image`) VALUES (NULL, '"+t.getName()+"','"+t.getIdmusician()+"', '"+ t.getMusics()+"','"+t.getImage()+"');";
        st.executeUpdate(query);
       
    }

    @Override
    public List<Concert> read() throws SQLException {
        List<Concert> ls = new ArrayList<Concert>();
        Statement st = cnx.createStatement();
        String req = "select * from concert order by name";
        ResultSet rs = st.executeQuery(req);

        while(rs.next()){
            int id = rs.getInt("id");
            String name = rs.getString("name");
            String idmusician = rs.getString("idmusician");
            String description = rs.getString("musics");
            String image = rs.getString("image");
            Concert p = new Concert(id,name,idmusician,description,image);
            ls.add(p);
         
        }

        return ls;
    }

    @Override
    public void update(Concert t) throws SQLException {
        Statement st = cnx.createStatement();
        String query = "UPDATE `concert` SET `name` = '"+ t.getName() +"',`idmusician` = '"+ t.getIdmusician() +"',`musics` = '"+ t.getMusics() +"', `image` = '"+t.getImage() + "' WHERE `concert`.`id` = "+ t.getId()+";";       
        st.executeUpdate(query);
    }

    @Override
    public void delete(Long id) throws SQLException {
         Statement st = cnx.createStatement();
        String query = "DELETE FROM `concert` WHERE `concert`.`id` = '"+id+"'";        
        st.executeUpdate(query);
    }
    
    public ObservableList<Concert> likeByName(String a) {
       
        ObservableList<Concert> listData = FXCollections.observableArrayList();
        try {
            String sql = "select * from concert where id like '%"+a+"%' or name like '%"+a+"%' or idmusician like '%"+a+"%'or musics like '%"+a+"%'  ";
            ResultSet rs = cnx.createStatement().executeQuery(sql);
            while (rs.next()) {  
                Concert m = new Concert();
                m.setId(rs.getInt(1));
                m.setName(rs.getString(2)); 
                m.setIdmusician(rs.getString(3));
               m.setMusics(rs.getString(4));
               m.setImage(rs.getString(5));
                listData.add(m);
            }
        } catch (Exception ex) {
            Logger.getLogger(Concert.class.getName()).log(Level.SEVERE, null, ex);
        }
        return listData;
    }

    
}

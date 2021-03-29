/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Service;
import Iservice.Iservice;
import Movie.MusicianController;
import Movie.DatabaseConnection;
import Movie.Musician;
import Movie.Musician;
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
//TNAJEM JINI ERREUR TE3 LIMPORT 5ATER LEZEM NRODHA ENTITE.MUSICIAN

/**
 *
 * @author HP
 */
public class ServiceMusician implements Iservice<Musician>{
    Connection cnx ;
    DatabaseConnection db;
    public ServiceMusician() {
         cnx = db.getConnection();
     
    }

    @Override
    public void add(Musician t) throws SQLException {
        Statement st = cnx.createStatement();
        String query = "INSERT INTO `musician` (`id`, `name`, `prenom`, `born`, `description`, `image`) VALUES (NULL, '"+t.getName()+"','"+t.getPrenom()+"', '"+ t.getBorn() +"', '"+t.getDescription() +"','"+t.getImage()+"');";
        st.executeUpdate(query);
       
    }

    @Override
    public List<Musician> read() throws SQLException {
        List<Musician> ls = new ArrayList<Musician>();
        Statement st = cnx.createStatement();
        String req = "select * from musician order by name";
        ResultSet rs = st.executeQuery(req);

        while(rs.next()){
            int id = rs.getInt("id");
            String name = rs.getString("name");
            String prenom = rs.getString("prenom");
            Date born = rs.getDate("born");
            String description = rs.getString("description");
            String image = rs.getString("image");
            Musician p = new Musician(id,name,prenom,born,description,image);
            ls.add(p);
         
        }

        return ls;
    }

    @Override
    public void update(Musician t) throws SQLException {
        Statement st = cnx.createStatement();
        String query = "UPDATE `musician` SET `name` = '"+ t.getName() +"',`prenom` = '"+ t.getPrenom() +"',`born` = '"+ t.getBorn() +"', `description` = '"+t.getDescription() + "', `image` = '"+t.getImage() + "' WHERE `musician`.`id` = "+ t.getId()+";";       
        st.executeUpdate(query);
    }

    public void delete(Long id) throws SQLException {
         Statement st = cnx.createStatement();
        String query = "DELETE FROM `musician` WHERE `musician`.`id` = '"+id+"'";        
        st.executeUpdate(query);
    }
    
    public ObservableList<Musician> likeByName(String a) {
       
        ObservableList<Musician> listData = FXCollections.observableArrayList();
        try {
            String sql = "select * from musician where id like '%"+a+"%' or name like '%"+a+"%' or prenom like '%"+a+"%' or born like '%"+a+"%' or description like '%"+a+"%'  ";
            ResultSet rs = cnx.createStatement().executeQuery(sql);
            while (rs.next()) {  
                Musician m = new Musician();
                m.setId(rs.getInt(1));
                m.setName(rs.getString(2));
                m.setBorn(rs.getDate(3)); 
               m.setDescription(rs.getString(4));
               m.setImage(rs.getString(5));
                listData.add(m);
            }
        } catch (Exception ex) {
            Logger.getLogger(Musician.class.getName()).log(Level.SEVERE, null, ex);
        }
        return listData;
    }

    @Override
    public void delete(int a) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    
    
}

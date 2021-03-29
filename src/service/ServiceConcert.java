/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Service;

import Iservice.Iservice;
import Movie.Concert;
import Movie.DatabaseConnection;
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
import Movie.Musician;
import java.time.LocalDate;


/**
 *
 * @author HP
 */
public class ServiceConcert implements Iservice<Concert>{
    Connection cnx ;
    DatabaseConnection db;
    public ServiceConcert() {
         System.out.println("i read db");
         cnx = db.getConnection();
         System.out.println("i read db");
     
    }

    @Override
    public void add(Concert t) throws SQLException {
        Statement st = cnx.createStatement();
        String query = "INSERT INTO `concert` (`id`, `name`, `idmusician`, `musics`, `image`, `trailer`) VALUES (NULL, '"+t.getName()+"','"+t.getIdmusician()+"', '"+ t.getMusics()+"','"+t.getImage()+"','"+t.getTrailer()+"');";
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
            String trailer = rs.getString("trailer");
            Concert p = new Concert(id,name,idmusician,description,image,trailer);
            ls.add(p);
         
        }

        return ls;
    }

    @Override
    public void update(Concert t) throws SQLException {
        Statement st = cnx.createStatement();
        String query = "UPDATE `concert` SET `name` = '"+ t.getName() +"',`idmusician` = '"+ t.getIdmusician() +"',`musics` = '"+ t.getMusics() +"', `image` = '"+t.getImage() + "',`trailer` = '"+ t.getTrailer() +"' WHERE `concert`.`id` = "+ t.getId()+";";       
        st.executeUpdate(query);
    }

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
               m.setTrailer(rs.getString(6));
                listData.add(m);
            }
        } catch (Exception ex) {
            Logger.getLogger(Concert.class.getName()).log(Level.SEVERE, null, ex);
        }
        return listData;
    }
    
     public List getConcert(String name){
         
  System.out.println("ipart 1");
        List<Concert> concertList=new ArrayList<>();
        Connection conn = db.getConnection();
        String query = "Select * from  concert where name='"+name+"'";
        Statement st;
        ResultSet rs;
        System.out.println("ipart 2");
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
             System.out.println("ipart 3");
            
            while(rs.next()){
                   int idt = rs.getInt("id");
                  String nom = rs.getString("name");
                  String idmusician = rs.getString("idmusician");
                  String musics = rs.getString("musics");
                  String image = rs.getString("image");
                  String trailer=rs.getString("trailer");
                 Concert pp = new Concert(idt, nom,idmusician, musics,image,trailer);
                  concertList.add(pp);
                  
                 
            }
             System.out.println("ipart 4");
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return concertList;
    }
    
        
    public Concert getConcert(int id){
       
        Connection conn = db.getConnection();
        String query = "Select * from concert where id='"+id+"'";
        Statement st;
        ResultSet rs;
        Concert concert = null;
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                  int idt = rs.getInt("id");
                  String name = rs.getString("name");
                  String idmusician = rs.getString("idmusician");
                  String musics = rs.getString("musics");
                  String image = rs.getString("image");
                  String trailer=rs.getString("trailer");
                  concert = new Concert(idt, name,idmusician, musics,image,trailer);
                  
                 
            }
            
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return concert;
    }
     public List<Musician> getMusician(int id){
        List<Musician> MusicianList=new ArrayList<>();
        Connection conn = db.getConnection();
        String query = "Select * from musician where id='"+id+"'";
        Statement st;
        ResultSet rs;
        try
        {
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next())
            {
                 int idt = rs.getInt("id");
            String name = rs.getString("name");
            String prenom = rs.getString("prenom");
            Date born = rs.getDate("born");
            String description = rs.getString("description");
            String image = rs.getString("image");
            Musician T = new Musician(idt,name,prenom,born,description,image);
                    MusicianList.add(T);
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return MusicianList;
    }
        public List<Musician> getMusician(String name){
        List<Musician> ActorList=new ArrayList<>();
        Connection conn = db.getConnection();
        String query = "Select * from musician where name='"+name+"'";
        Statement st;
        ResultSet rs;
        try
        {
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next())
            {
                     int idt = rs.getInt("id");
            String name1 = rs.getString("name");
            String prenom = rs.getString("prenom");
            Date born = rs.getDate("born");
            String description = rs.getString("description");
            String image = rs.getString("image");
            Musician T = new Musician(idt,name1,prenom,born,description,image);
                    ActorList.add(T);
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return ActorList;
    }

    @Override
    public void delete(int a) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package service;

import entité.Tactor;
import utils.DatabaseConnection;
import entité.Theatre;
import entité.TheatreActors;
import intService.IService;
import java.sql.Connection;
import java.sql.Date;
import java.sql.PreparedStatement;
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
import javafx.scene.control.ComboBox;

/**
 *
 * @author mateu
 */
public class ServiceTheatre implements IService<Theatre> {
     Connection cnx ;
     final ObservableList options= FXCollections.observableArrayList();
    public ServiceTheatre() {
         cnx = DatabaseConnection.getInstance().getConn();
        
    }

    @Override
    public void add(Theatre th) throws SQLException {
        Statement st = cnx.createStatement();
        String query = "INSERT INTO `theatre` (`id`, `name`, `IdTactor`, `genre`, `rdate`, `image`) VALUES (NULL, '"+ th.getName() +"', '"+th.getTactor().getId()+"', '"+ th.getGenre() +"', '"+th.getRdate() +"','"+th.getImage()+"');";
       
        st.executeUpdate(query);
      
       
    }

    @Override
    public List<Theatre> read() throws SQLException {
        List<Theatre> ls = new ArrayList<Theatre>();
        Statement st = cnx.createStatement();
        String req = "SELECT t.*, a.* from theatre t INNER JOIN ( SELECT id as actorID, name as nameActor from tactor ) a ON t.IdTactor=a.actorID order by a.nameActor";
        ResultSet rs = st.executeQuery(req);
        while(rs.next()){
            Long id = rs.getLong("id");
            String IdTactor=rs.getString("IdTactor");
            String name = rs.getString("name");
            String genre = rs.getString("genre");
            LocalDate rdate = rs.getDate("rdate").toLocalDate();
            String image = rs.getString("image");
            Tactor tactor = new Tactor(rs.getLong("actorID"),rs.getString("nameActor"),null,null,null);
            Theatre pp = new Theatre(id, name,tactor, genre,rdate,image);
            ls.add(pp);
         
        }

        return ls;
    }

    @Override
    public void update(Theatre th) throws SQLException {
        Statement st = cnx.createStatement();
        String query = "UPDATE `theatre` SET `name` = '"+ th.getName() +"',`genre` = '"+ th.getGenre() +"', `rdate` = '"+th.getRdate() + "', `IdTactor` = '"+th.getTactor().getId()+"', `image` = '"+th.getImage()+"' WHERE `theatre`.`id` = "+ th.getId()+";";
        st.executeUpdate(query);
        String query2 = "UPDATE `theatreactors` SET `TactorId` = '"+th.getTactor().getId()+ "' WHERE ( `theatreactors`.`theatreid` = "+ th.getId()+" ) ";
        st.executeUpdate(query2);
    }

    @Override
    public void delete(Long id) throws SQLException {
         Statement st = cnx.createStatement();
         String query1= "DELETE FROM theatreactors WHERE TheatreId= '"+id+"'";
         st.executeUpdate(query1);
        String query = "DELETE FROM theatre  WHERE theatre.id = '"+id+"'";
        st.executeUpdate(query);
        
        
    }
   
    public ObservableList<Theatre> searchTable(String a) {
       
        ObservableList<Theatre> listData = FXCollections.observableArrayList();
        try {
            //probleme rechrche par id
            String sql = "SELECT t.*, a.* from theatre t INNER JOIN ( SELECT id as actorID, name as nameActor from tactor ) a ON t.IdTactor=a.actorID where t.id like '%"+a+"%' or t.name like '%"+a+"%' or a.actorID like '%"+a+"%' or t.genre like '%"+a+"%' or t.rdate like '%"+a+"%' or a.nameActor like '%"+a+"%'   ";
            ResultSet rs = cnx.createStatement().executeQuery(sql);
            while (rs.next()) {  
                Long id = rs.getLong("id");
                String IdTactor=rs.getString("IdTactor");
                String name = rs.getString("name");
                String genre = rs.getString("genre");
                LocalDate rdate = rs.getDate("rdate").toLocalDate();
                 String image = rs.getString("image");
                Tactor tactor = new Tactor(rs.getLong("actorID"),rs.getString("nameActor"),null,null,null);
                Theatre pp = new Theatre(id, name,tactor, genre,rdate,image);
                listData.add(pp);
            }
        } catch (Exception ex) {
            Logger.getLogger(Theatre.class.getName()).log(Level.SEVERE, null, ex);
        }
        return listData;
    }
    
      /* public List<Tactor> getListTactors(Long id){
        //actorsname

        List<Tactor> listactors=new ArrayList<>();
        String query = "SELECT * FROM theatreactors as ta left join (select * from tactor )a on a.id=ta.TactorId WHERE ta.TheatreId= '"+id+"'";
        Statement st;
        ResultSet rs;
       
        try{
            st=cnx.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                Long idr = rs.getLong("id");
                String name = rs.getString("name");
                LocalDate born = rs.getDate("born").toLocalDate();
                String description = rs.getString("description");
                String image = rs.getString("image");
                Tactor p = new Tactor(idr, name, born,description,image);
                listactors.add(p) ;
            }
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
        }
          System.out.println(listactors);
        return listactors;
    }*/

    public void add(TheatreActors ta) throws SQLException {
        Statement st = cnx.createStatement();
          String query1="INSERT INTO theatreactors (TactorId,TheatreId) SELECT tactor.id, MAX(theatre.id) FROM tactor, theatre where tactor.id='"+ta.getTactor().getId()+"' ";
        st.executeUpdate(query1);
    }
     
    public void update(TheatreActors ta) throws SQLException {
        Statement st = cnx.createStatement();
        String query2 = "UPDATE `theatreactors` SET `TactorId` = '"+ta.getTactor().getId()+ "' WHERE ( `theatreactors`.`theatreid` = "+ ta.getTactor().getId()+" ) ";
        st.executeUpdate(query2);
        
    }

}



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package service;

import utils.DatabaseConnection;
import entité.Theatre;
import intService.IService;
import java.sql.Connection;
import java.sql.Date;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.time.LocalDate;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author mateu
 */
public class ServiceTheatre implements IService<Theatre> {
     Connection cnx ;
    public ServiceTheatre() {
         cnx = DatabaseConnection.getInstance().getConn();
        
    }

    @Override
    public void add(Theatre th) throws SQLException {
        Statement st = cnx.createStatement();
        String query = "INSERT INTO `theatre` (`id`, `name`, `idTactor`, `genre`, `rdate`, `image`) VALUES (NULL, '"+ th.getName() +"', '"+th.getidTactor()+"', '"+ th.getGenre() +"', '"+th.getRdate() +"', '');";
        st.executeUpdate(query);
       
    }

    @Override
    public List<Theatre> read() throws SQLException {
        List<Theatre> ls = new ArrayList<Theatre>();
        Statement st = cnx.createStatement();
        String req = "select * from theatre";
        ResultSet rs = st.executeQuery(req);
        while(rs.next()){
            Long id = rs.getLong("id");
            Long idTactor=rs.getLong("idTactor");
            String name = rs.getString("name");
            String genre = rs.getString("genre");
            LocalDate rdate = rs.getDate("rdate").toLocalDate();
            //String description = rs.getString("image");
            Theatre pp = new Theatre(id, name,idTactor, genre,rdate);
            ls.add(pp);
         
        }

        return ls;
    }

    @Override
    public void update(Theatre th) throws SQLException {
        Statement st = cnx.createStatement();
        String query = "UPDATE `theatre` SET `name` = '"+ th.getName() +"',`genre` = '"+ th.getGenre() +"', `rdate` = '"+th.getRdate() + "', `idTactor` = '"+th.getidTactor()+"' WHERE `theatre`.`id` = "+ th.getId()+";";
        st.executeUpdate(query);
    }

    @Override
    public void delete(Long id) throws SQLException {
         Statement st = cnx.createStatement();
        String query = "DELETE FROM `theatre` WHERE `theatre`.`id` = '"+id+"'";
        st.executeUpdate(query);
    }

 
    
}

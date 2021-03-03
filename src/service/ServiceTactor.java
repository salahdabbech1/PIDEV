/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package service;

import utils.DatabaseConnection;
import entité.Tactor;
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
public class ServiceTactor implements IService<Tactor> {
     Connection cnx ;
    public ServiceTactor() {
         cnx = DatabaseConnection.getInstance().getConn();
        
    }

    @Override
    public void add(Tactor t) throws SQLException {
        Statement st = cnx.createStatement();
        String query = "INSERT INTO `tactor` (`id`, `name`, `born`, `description`, `image`) VALUES (NULL, '"+t.getName()+"', '"+ t.getBorn() +"', '"+t.getDescription() +"', '');";
        st.executeUpdate(query);
       
    }

    @Override
    public List<Tactor> read() throws SQLException {
        List<Tactor> ls = new ArrayList<Tactor>();
        Statement st = cnx.createStatement();
        String req = "select * from tactor";
        ResultSet rs = st.executeQuery(req);

        while(rs.next()){
            Long id = rs.getLong("id");
            String name = rs.getString("name");
            LocalDate born = rs.getDate("born").toLocalDate();
            String description = rs.getString("description");
            Tactor p = new Tactor(id, name, born,description,null);
            ls.add(p);
         
        }

        return ls;
    }

    @Override
    public void update(Tactor t) throws SQLException {
        Statement st = cnx.createStatement();
        String query = "UPDATE `tactor` SET `name` = '"+ t.getName() +"',`born` = '"+ t.getBorn() +"', `description` = '"+t.getDescription() + "' WHERE `tactor`.`id` = "+ t.getId()+";";       
        st.executeUpdate(query);
    }

    @Override
    public void delete(Long id) throws SQLException {
         Statement st = cnx.createStatement();
        String query = "DELETE FROM `tactor` WHERE `tactor`.`id` = '"+id+"'";        
        st.executeUpdate(query);
    }
    
}

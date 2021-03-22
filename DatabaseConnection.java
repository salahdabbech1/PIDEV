/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Movie;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;


public class DatabaseConnection {
      public Connection databaseLink ;


    public Connection getConnection(){
       // String databaseName="karim";
            String databaseUser="root";
            String databasePassword = "";
            String url = "jdbc:mysql://localhost:3306/artlife";
         try {
            
            Class.forName("com.mysql.cj.jdbc.Driver");
            databaseLink= DriverManager.getConnection(url,databaseUser,databasePassword);
        }catch (Exception e){
            e.printStackTrace();
            e.getCause();
        }

return databaseLink;
    }
}

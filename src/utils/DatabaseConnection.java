/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package utils;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;


/*public class DatabaseConnection {

    public static Object getInstance() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
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
}*/
public class DatabaseConnection {
    
    private static String url ="jdbc:mysql://localhost:3306/artlife";
    private static String user ="root";
    private static String pwd ="";
    
    private static Connection conn;
 
    static DatabaseConnection instance;
    
    public DatabaseConnection() {
        
        try {
            conn = DriverManager.getConnection(url, user, pwd);
                        System.out.println(" connecté !!!!");

        } catch (SQLException ex) {
            Logger.getLogger(DatabaseConnection.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    public static DatabaseConnection getInstance(){
        if(instance == null)
            instance = new  DatabaseConnection();
        
        return instance;
    }

    public static Connection getConn() {
        return conn;
    }
}
    
    
    

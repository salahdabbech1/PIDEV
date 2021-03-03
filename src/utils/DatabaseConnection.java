
package utils;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;


public class DatabaseConnection {
    
    private static String url ="jdbc:mysql://localhost:3306/artlife";
    private static String user ="root";
    private static String pwd ="";
    
    private static Connection conn;
 
    static DatabaseConnection instance;
    
    private DatabaseConnection() {
        
        try {
            conn = DriverManager.getConnection(url, user, pwd);
                        System.out.println(" connecté !!!!");

        } catch (SQLException ex) {
            Logger.getLogger(DatabaseConnection.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    public static DatabaseConnection getInstance(){
        if(instance == null)
            instance = new DatabaseConnection();
        
        return instance;
    }

    public static Connection getConn() {
        return conn;
    }
    
    
    
}

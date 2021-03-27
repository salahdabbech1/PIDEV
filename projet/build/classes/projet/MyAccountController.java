/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projet;

import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.InputMethodEvent;
import javafx.scene.input.MouseEvent;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import javafx.stage.Window;
import projet.entite.event;
import projet.entite.ticket;
import projet.entite.user;
import static utils.DatabaseConnection.getConn;

/**
 * FXML Controller class
 *
 * @author KARIMOOOO
 */
public class MyAccountController implements Initializable {

    @FXML
    private TextField userField;
    @FXML
    private TextField passField;
    @FXML
    private TextField emailField;
    @FXML
    private TextField passConfField;
    @FXML
    private Label accLB;
    @FXML
    private Label confPass;
    @FXML
    private Button backfront;
    
   public void setLbNameA(String name) {
        this.accLB.setText(name);
         
     
   }
    
     
    

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
         
         
          }   
     public void executeQuery(String query){
        Connection conn = getConn();
        Statement st;
        try{
            st=conn.createStatement();
            st.executeUpdate(query);
        }
        catch(SQLException ex)
        {
            ex.printStackTrace();
            
        }
    }
    
    public void Account(String name){
          
         //String name="karim";
         
           
           
         System.out.println(name);
        Connection conn = getConn();
        String Uqueri = "select * from user where name='"+name+"'";
        Statement st;
        ResultSet rs;
        
        System.err.println("name");
        
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(Uqueri);
            
            
            System.err.println("while");
            while(rs.next()){
                userField.setText(rs.getString("name")) ;
                
                passField.setText(rs.getString("password")) ;
                
                emailField.setText(rs.getString("email")); 
                 //rs.getString("image");
                
                 
                
               
                


                  
               // Boxxx.getItems().add(rs.getString("id"));
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
      
    }
    public String ModifyRow(String name) {
        return name;
    }
@FXML
    public void update(ActionEvent event)   {
       
       String name=this.accLB.getText();
       System.out.println(name);
        if(passField.getText().equals(passConfField.getText())){
        String query = "UPDATE `user` SET `password` = '" + this.passField.getText() + "', `email` = '" + this.emailField.getText() + "', `image` = '/image/" + FileChooser() + "' WHERE `user`.`name` = '" + name + "'";
        this.executeQuery(query);
        confPass.setText("done");
        }else {
                 confPass.setText("Password does not match");
        }
         
        
        
  
    }
    
    
     public void changeScreenButtonPushed(ActionEvent event) throws IOException
    {
        Parent tableViewParent = FXMLLoader.load(getClass().getResource("front.fxml"));
        Scene tableViewScene = new Scene(tableViewParent);
        
        //This line gets the Stage information
        Stage window = (Stage)((Node)event.getSource()).getScene().getWindow();
        
        window.setScene(tableViewScene);
        window.show();
    }
     
    @FXML
    private void closeBackButtonOnAction(ActionEvent event) {
          Stage stage =(Stage) backfront.getScene().getWindow();
        stage.close();
    }
      String FileChooser() {
        FileChooser fc = new FileChooser();
        fc.setInitialDirectory(new File("C:\\Users\\ouesl\\Documents\\NetBeansProjects\\projet\\src\\image"));
        fc.getExtensionFilters().addAll(new FileChooser.ExtensionFilter("Images","*.png","*.jpg","*.gif"));


        File f = fc.showOpenDialog((Window)null);
        if (f != null) {
            System.out.println(f);
        }

        return f.getName();
    }

   
    

     
     

     
   
       
       
      
         
                
                }               
       
      
    


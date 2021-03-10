/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projet;
import utils.DatabaseConnection;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.PasswordField;
import javafx.scene.control.TextField;

import java.io.File;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.fxml.Initializable;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import javafx.application.Platform;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.scene.control.Alert;
import javafx.stage.Stage;
import projet.entite.sendMail;
/**
 * FXML Controller class
 *
 * @author KARIMOOOO
 */
public class RegisterADController implements Initializable {

    @FXML
    private Button closeButton;
    
    @FXML
    private Button registerADButton;
     @FXML
    private Label regMessageLabel;
     
    @FXML
    private PasswordField AdminPasswordField;
      
      @FXML
    private PasswordField ConformAdminPasswordField;
      @FXML
    private TextField AdminTextField;
      @FXML
    private TextField AdminEmailTextField;
      
       @FXML
    private Label comfirmationPassword;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }  
     public void registerADButtonOnAction(ActionEvent event) throws SQLException{
           
            if(AdminPasswordField.getText().equals(ConformAdminPasswordField.getText())){
                registerAdmin();
                
                
                comfirmationPassword.setText("you are set");
                String email=AdminEmailTextField.getText();
                 sendMail.sendMail(email);
                  
        }else {
                 comfirmationPassword.setText("Password does not match");
        }

    }
    public void closeButtonOnAction(ActionEvent ActionEvent){
        Stage stage =(Stage) closeButton.getScene().getWindow();
        stage.close();
       // Platform.exit();

    }
    
    public void registerAdmin(){
      DatabaseConnection connectNow;
        connectNow = new DatabaseConnection();
        Connection ConnectDB = connectNow.getConn();
        
        String username=AdminTextField.getText();
        String password=AdminPasswordField.getText();
        String email=AdminEmailTextField.getText();
        //String image=userPasswordField.getText();
        String image="";
        int role = 0;
       
        
        String insertFields="INSERT INTO user(name,email,password,role,image)VALUES('";
       
        String insertValues= username +"','"+email +"','"+ password  +"','"+ role  +"','"+ image  +"')";
        String insertToRegister= insertFields + insertValues;
        try {
            Statement statement = ConnectDB.createStatement();
            statement.executeUpdate(insertToRegister);
                             
            
            regMessageLabel.setText("user has been registered successfully");


            


        }catch (Exception e){
            e.printStackTrace() ;
            e.getCause();
        }

       
    }
    
     
}


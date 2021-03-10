/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projet;

import utils.DatabaseConnection;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.PasswordField;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.stage.Stage;
import javafx.scene.Scene;
import javafx.stage.StageStyle;
import javafx.scene.Parent;

import java.io.File;
import java.net.URL;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.HashSet;
 
import java.util.ResourceBundle;
import java.util.Set;
import javafx.animation.TranslateTransition;
import javafx.event.EventHandler;
import javafx.fxml.FXMLLoader;
import javafx.scene.control.Alert;
import javafx.scene.control.Tab;
import javafx.scene.control.TabPane;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.Pane;
import javafx.util.Duration;


public class LoginController implements Initializable {

    @FXML
    private Label lblUs;
@FXML
    private Label lblStatus;
@FXML
    private Label lblAdmin;
 @FXML
    private Pane slidingPane;
 @FXML
    private Tab tabAdmin;
 @FXML
    private Tab tabClient;
 
@FXML
    private TabPane tabPaneLogin;

    
    
    
    
    

    @FXML
    private Button cancelButton;

    @FXML
    private Button loginButton;
@FXML
    private Button loginADButton;
    @FXML
    private Label loginMessageLabel;
    @FXML
    private Label loginADMessageLabel;


    @FXML
    private ImageView  brandingImageView;

    @FXML
    private ImageView  artImageView;


    @FXML
     private TextField  usernameTextField;

     @FXML
     private PasswordField enterPasswordField;
     @FXML
     private TextField  usernameADTextField;

     @FXML
     private PasswordField enterADPasswordField;
     
     @FXML
    private Label lbl_userN;
    @FXML
    private Label lbl_userN2;

     

    @Override
    public void initialize(URL url , ResourceBundle resourceBundle)  {
        File brandingFile = new File("image/logo.png");
        Image brandingImage = new Image(brandingFile.toURI().toString());
        brandingImageView.setImage(brandingImage);

        File artFile = new File("image/téléchargement-removebg-preview.png");
        Image artImage = new Image(artFile.toURI().toString());
        artImageView.setImage(artImage);
    }
    
    @FXML
    public void openUserTab(MouseEvent event )
    {
    TranslateTransition toRightAnimation = new TranslateTransition(new Duration(500),lblStatus);
    toRightAnimation.setToX(slidingPane.getTranslateX()+(slidingPane.getPrefWidth()-lblStatus.getPrefWidth()));
    toRightAnimation.play();
    toRightAnimation.setOnFinished((ActionEvent event1) -> {
    lblStatus.setText("About");     
    });
    tabPaneLogin.getSelectionModel().select(tabClient);
     
    }
    @FXML
    public void openAdminTab(MouseEvent event )
    { 
        TranslateTransition toRightAnimation = new TranslateTransition(new Duration(500),lblStatus);
    toRightAnimation.setToX(slidingPane.getTranslateX());
    toRightAnimation.play();
    toRightAnimation.setOnFinished((ActionEvent event2) -> {
    lblStatus.setText("Login");     
    });
    tabPaneLogin.getSelectionModel().select(tabAdmin);
     
    }


    public void loginButtonOnAction(ActionEvent event) throws SQLException{

        if(!usernameTextField.getText().isEmpty() && !enterPasswordField.getText().isEmpty()){
          // validateLogin();
          
             
            
            

        }else {
            loginMessageLabel.setText("please check your username and password");
        }


    }

public void loginADButtonOnAction(ActionEvent event1) throws SQLException{

        if(!usernameADTextField.getText().isEmpty() && !enterADPasswordField.getText().isEmpty()){
           //validateADLogin();
            authenticateUser();
            
            
            

        }else {
            loginADMessageLabel.setText("please check your username and password");
        }


    }



    public void cancelButtonOnAction(ActionEvent ActionEvent){
        Stage stage =(Stage) cancelButton.getScene().getWindow();
        stage.close();

    }
 /*   public int validateLogin() throws SQLException{
       DatabaseConnection connectNow;
        connectNow = new DatabaseConnection();
        Connection ConnectDB = connectNow.getConn();
       
       String username;
        username = usernameTextField.getText();
       String password=enterPasswordField.getText();
       
        
        
       String verifyLogin ="SELECT * from user WHERE name = ? and password = ? and role=0 ";
        PreparedStatement ps = ConnectDB.prepareStatement(verifyLogin);
        ps.setString(1,username);
        ps.setString(2,password);
        ResultSet rs = ps.executeQuery();
        System.out.println(rs);  
if(!rs.next())
        {
         System.out.println("Wrong pass or user");
          loginMessageLabel.setText("invalid");  
        }
        else
        {
         loginMessageLabel.setText("valid");      
         Alert a=new Alert(Alert.AlertType.CONFIRMATION);
         a.setContentText("Success");
         a.setHeaderText(null);
         a.showAndWait();
         return 1;
        }
       /* try {
            Statement statement = ConnectDB.createStatement();
            ResultSet queryResult =statement.executeQuery(verifyLogin);

            while (queryResult.next()){
              if(queryResult.getInt(1)==1 ){
                  //loginMessageLabel.setText("congrat");
                //createAccountForm();

              }else 
                  
              {
                  loginMessageLabel.setText("invalid");
              }
            }



        }catch (Exception e){
            e.printStackTrace() ;
            e.getCause();
        }
        return 0;
    }
  public int validateADLogin() throws SQLException{
        DatabaseConnection connectNow;
        connectNow = new DatabaseConnection();
        Connection ConnectDB = connectNow.getConn();
       
       String username;
       username = usernameADTextField.getText();
       String password=enterADPasswordField.getText();
       
       
       
        
        
       String verifyLogin ="SELECT * from user WHERE name = ? and password = ? and role=1";
        PreparedStatement ps = ConnectDB.prepareStatement(verifyLogin);
        ps.setString(1,username);
        ps.setString(2,password);
        ResultSet rs = ps.executeQuery();
        System.out.println(rs);  
if(!rs.next())
        {
         System.out.println("Wrong pass or user");
         loginADMessageLabel.setText("invalid");
 
        }
        else
        {
          loginADMessageLabel.setText("valid");    
          backform();
           
          
         /*Alert a=new Alert(Alert.AlertType.CONFIRMATION);
         a.setContentText("Success");
         a.setHeaderText(null);
         a.showAndWait();
         return 1;
        }
       /* try {
            Statement statement = ConnectDB.createStatement();
            ResultSet queryResult =statement.executeQuery(verifyLogin);

            while (queryResult.next()){
              if(queryResult.getInt(1)==1 ){
                  //loginMessageLabel.setText("congrat");
                //createAccountForm();

              }else 
                  
              {
                  loginMessageLabel.setText("invalid");
              }
            }



        }catch (Exception e){
            e.printStackTrace() ;
            e.getCause();
        }
        return 0;
    }
  
    
    
    
    
    
    
        
       
    /*   if(user.equals("1111")&&pass.equals("2222"))
       {
       System.out.println("It wooooorked !!!");
       }
       
       String sql ="SELECT * from USER WHERE username = ? and password = ? ";
       
        ps=con.prepareStatement(sql);
        ps.setString(1,user);
        ps.setString(2,pass);
        rs=ps.executeQuery();
        System.out.println(rs);  
        if(!rs.next())
        {
         System.out.println("Wrong pass or user");
         test=0;
        }
        else
        {
         Alert a=new Alert(Alert.AlertType.CONFIRMATION);
         a.setContentText("Success");
         a.setHeaderText(null);
         a.showAndWait();
         return 1;
        }
            return 0;
    }
    }*/
   
 
public String authenticateUser() throws SQLException
{   DatabaseConnection connectNow;
        connectNow = new DatabaseConnection();
        Connection ConnectDB = connectNow.getConn();
       
       String username;
       username = usernameADTextField.getText();
       String password=enterADPasswordField.getText();
       
        
        
       
       String userNameDB = "";
    String passwordDB = "";
    int roleDB; 
        
        
       String verifyLogin ="SELECT * from user WHERE name = ? and password = ? ";
        PreparedStatement ps = ConnectDB.prepareStatement(verifyLogin);
        ps.setString(1,username);
        ps.setString(2,password);
      
        ResultSet rs = ps.executeQuery();
 
    
       
       
        while(rs.next())
        {
            userNameDB = rs.getString("name");
            passwordDB = rs.getString("password");
            roleDB = rs.getInt("role");
 
            if(username.equals(userNameDB) && password.equals(passwordDB) && roleDB==1){
               loginADMessageLabel.setText("valid");     
                      backform();
            
            }

            else if(username.equals(userNameDB) && password.equals(passwordDB) && roleDB==0){
                loginADMessageLabel.setText("valid");      
         Alert a=new Alert(Alert.AlertType.CONFIRMATION);
         a.setContentText("Success");
         a.setHeaderText(null);
         a.showAndWait();
           frontform();
            }
            
            else if (!username.equals(userNameDB) || !password.equals(passwordDB))  {
                System.out.println("Wrong pass or user");
                loginADMessageLabel.setText("invalid");
            }
             
        }
    return null;
    }
     
    
       
         
    
   


    public void createAccountForm()
    {
    try{
       Parent root = FXMLLoader.load(getClass().getResource("register.fxml"));
       Stage registerStage= new Stage();
        registerStage.initStyle(StageStyle.UNDECORATED);
        registerStage.setScene(new Scene(root, 600, 400));
        registerStage.show();
        
        
    }catch (Exception e){
            e.printStackTrace() ;
            e.getCause();
        }
    }
    public void createAccountFormAD()
    {
    try{
       Parent root = FXMLLoader.load(getClass().getResource("registerAD.fxml"));
       Stage registerStage= new Stage();
        registerStage.initStyle(StageStyle.UNDECORATED);
        registerStage.setScene(new Scene(root, 600, 400));
        registerStage.show();
        
        
    }catch (Exception e){
            e.printStackTrace() ;
            e.getCause();
        }
    }
    
    public void backform()
    {
    try{
       Parent root = FXMLLoader.load(getClass().getResource("back.fxml"));
       Stage registerStage= new Stage();
        registerStage.initStyle(StageStyle.UNDECORATED);
        registerStage.setScene(new Scene(root, 1250, 700));
        registerStage.show();
        
        
    }catch (Exception e){
            e.printStackTrace() ;
            e.getCause();
        }
    }
    
    public void frontform()
    {
    try{
       Parent root = FXMLLoader.load(getClass().getResource("registerAD.fxml"));
       Stage registerStage= new Stage();
        registerStage.initStyle(StageStyle.UNDECORATED);
        registerStage.setScene(new Scene(root, 600, 400));
        registerStage.show();
        
        
    }catch (Exception e){
            e.printStackTrace() ;
            e.getCause();
        }
    }
    
}

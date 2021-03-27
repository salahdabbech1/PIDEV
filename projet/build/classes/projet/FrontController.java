/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projet;

import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.Statement;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.BorderPane;
import javafx.stage.Stage;
import javafx.stage.StageStyle;
import projet.entite.user;
import static utils.DatabaseConnection.getConn;

/**
 * FXML Controller class
 *
 * @author KARIMOOOO
 */
public class FrontController implements Initializable {

    @FXML
    private BorderPane roott;
    @FXML
    private Label lblNamehome;
    @FXML
    private Button exitfront;
    @FXML
    private ImageView userimage;
    
    
    
    
    public void setLbName(String name) {
        this.lblNamehome.setText(name);
    }
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    
    private void loadPage(String page){
    Parent root = null;
        try {
            root = FXMLLoader.load(getClass().getResource(page+".fxml"));
        } catch (IOException ex) {
            Logger.getLogger(FrontController.class.getName()).log(Level.SEVERE, null, ex);
        }
        roott.setCenter(root);
    }
    
    @FXML
    private void closeBackButtonOnAction(ActionEvent event) {
          Stage stage =(Stage) exitfront.getScene().getWindow();
        stage.close();
    }

    @FXML
    private void Account(MouseEvent event) {
         try{
       FXMLLoader loader = new FXMLLoader(getClass().getResource("MyAccount.fxml"));
      
       Parent root = loader.load();
       
       
       MyAccountController pc = loader.getController();
     
       
            
          pc.setLbNameA(lblNamehome.getText());
          pc.Account(lblNamehome.getText());
        pc.ModifyRow(lblNamehome.getText());
        
        
            
       Stage registerStage= new Stage();
        registerStage.initStyle(StageStyle.UNDECORATED);
        registerStage.setScene(new Scene(root,1500, 1000));
        registerStage.show();
        
        
    }catch (Exception e){
            e.printStackTrace() ;
            e.getCause();
        }
          
    }
    @FXML
    private void MyTicket(MouseEvent event) {
         try{
      
       FXMLLoader loader= new FXMLLoader(getClass().getResource("MyTicket.fxml"));
       Parent root = loader.load();
    
       
       MyTicketController pt=loader.getController();
       
          pt.getTick(lblNamehome.getText());
          pt.showTick(lblNamehome.getText());
            
       Stage registerStage= new Stage();
        registerStage.initStyle(StageStyle.UNDECORATED);
        registerStage.setScene(new Scene(root,800, 248));
        registerStage.show();
        
        
    }catch (Exception e){
            e.printStackTrace() ;
            e.getCause();
        }
          
    }
      public void Showimage(String name){
          
         //String name="karim";
         
           String image=null ; 
           
         System.out.println("*****");
        Connection conn = getConn();
        String Uqueri = "select image from user where name='"+name+"'";
        Statement st;
        ResultSet rs;
        
        System.err.println("name");
        
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(Uqueri);
            
            
            
            while(rs.next()){
                 image=rs.getString("image");
                System.out.println(image);
                       
                
                 
       Image im = new Image(image);
        this.userimage.setImage(im);
               
                
              
                 
                
                 
                
               
                


                  
               // Boxxx.getItems().add(rs.getString("id"));
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
      
    }
    
  
    
}

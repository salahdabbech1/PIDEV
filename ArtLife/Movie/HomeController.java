/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Movie;

import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.ScrollPane;
import javafx.scene.control.TextArea;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.BorderPane;
import javafx.scene.paint.ImagePattern;
import javafx.scene.shape.Circle;
import javafx.scene.text.Font;
import javafx.scene.web.WebView;
import javafx.stage.Stage;
import javafx.stage.StageStyle;
import static utils.DatabaseConnection.getConn;

/**
 * FXML Controller class
 *
 * @author bouyo
 */
public class HomeController implements Initializable {

    @FXML
    private BorderPane bp;
    @FXML
    private AnchorPane ap;
    @FXML
    private AnchorPane chatPane;
    @FXML
    private TextArea msgF;
    @FXML
    private ScrollPane chatscrollp;
    @FXML
    private AnchorPane HideShow;
    @FXML
    private Label lblNamehome;
    @FXML
    private Button exitfront;
    @FXML
    private Circle circlee;
    @FXML
    private WebView TrailerYTB;
    
     public void setLbName(String name) {
        this.lblNamehome.setText(name);
    }
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        ShowChat();
        HideShow.setVisible(false);
        String name=this.lblNamehome.getText();
        
        TrailerYTB.getEngine().load("https://www.youtube.com/embed/hvIg3PTJWxs");
        

    }    
    
    
    
    
    
    
    
    
    private void loadPage(String page,String name){
    Parent root = null;
        System.out.println(lblNamehome.getText());
    
        try {
            root = FXMLLoader.load(getClass().getResource(page+".fxml"));
            FXMLLoader loader= new FXMLLoader(getClass().getResource(page+".fxml"));
            if(page=="EventF")
            {
                EventFController pc = loader.getController();
//                pc.setLbNam(name);
            }
        } catch (IOException ex) {
            Logger.getLogger(FactorController.class.getName()).log(Level.SEVERE, null, ex);
        }
        bp.setCenter(root);
    }
    
    
    @FXML
    private void Home(MouseEvent event) {
        bp.setCenter(ap);
    }

    @FXML
    private void Film(MouseEvent event) {
        loadPage("MovieF","");
    }
    @FXML
    private void Concert(MouseEvent event) {
        loadPage("ConcertF","");
    }
    private void Musician(MouseEvent event) {
        loadPage("Musician","");
    }
      @FXML
    private void Theatre(MouseEvent event) {
        loadPage("TheatreFront","");
    }
    @FXML
    private void Event(MouseEvent event) {
        String name=this.lblNamehome.getText();
        loadPage("EventF",name);
        
    }
    @FXML
    private void Cinema(MouseEvent event) {
        loadPage("CinemaFront","");
    }
     @FXML
     private void Reclamation(MouseEvent event) {
        loadPage("reclamationF","");
        
    }
    
    
    public Connection getConnection(){ 
        Connection conn; 
        try{ 
            conn= DriverManager.getConnection("jdbc:mysql://localhost:3306/artlife", "root","");
        return conn;
        } 
        catch(Exception ex){ 
        System.out.println("Error: " + ex.getMessage());
        return null;
        }
    }
    
    
    
    public String getUsername(int id){
        List<Chat> chatList=new ArrayList<>();
        Connection conn = getConnection();
        String query = "SELECT * FROM `user` where id="+id+"";
        Statement st;
        ResultSet rs;
        String name = null;
        
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            Movie movies;
            while(rs.next()){
                name = rs.getString("name");
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        
        return name;
    }
    
    public List getChatlist(){
        List<Chat> chatList=new ArrayList<>();
        Connection conn = getConnection();
        String query = "SELECT * FROM `chat`";
        Statement st;
        ResultSet rs;
        
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            Movie movies;
            while(rs.next()){
                Chat chat = new Chat(rs.getInt("id"),rs.getInt("idsender"),rs.getString("content"),rs.getDate("time"));
                chatList.add(chat);
                
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return chatList;
    }
    
    
    public void ShowChat(){
        List<Chat> list=getChatlist();
        int Y=0;
        int HP=0;
        chatPane.getChildren().clear();
        chatscrollp.setPannable(true);
        chatscrollp.setHbarPolicy(ScrollPane.ScrollBarPolicy.AS_NEEDED);
        
        for (int i = 0; i < list.size(); i++) {
            Label Content = new Label(list.get(i).getContent());
            Content.setLayoutX(10);
            Content.setLayoutY(Y+30);
            Content.setStyle("-fx-border-color: white;\n" +
            "    -fx-border-radius: 20;\n" +
            "    -fx-alignment: center;\n" +
            "    -fx-text-fill:white;");
            Content.setPrefWidth(230);
            Content.setPrefHeight(50);
            Content.setWrapText(true);
            Label Name = new Label();
            String name= getUsername(list.get(i).getIdsender())+"  "+list.get(i).getTime().toString();
            Name.setText(name);
            Name.setLayoutX(10);
            Name.setLayoutY(Content.getPrefHeight()-50+Y);
            Name.setStyle("-fx-text-fill:white;");
            
//            Label Time = new Label(list.get(i).getTime().toString());
//            Time.setLayoutX(Name.getPrefWidth()+ 100);
//            Time.setLayoutY(Content.getPrefHeight()-50+Y);
//            Time.setStyle("-fx-text-fill:white;");
            chatPane.getChildren().addAll(Name,Content);
            Y+=140;
            HP+=110;
            chatPane.setPrefHeight(HP);
            chatscrollp.setVvalue(HP);
        }
    
    }
    public int executeQuery(String query){
        Connection conn = getConnection();
        Statement st;
        int test=0;
        try{
            st=conn.createStatement();
            test=st.executeUpdate(query);
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
        }
        
        return test;
    }
    @FXML
    void SendChat(){
        if(msgF.getText()!=null){
            
            
            
            int id=0 ; 
           
        
        Connection conn = getConn();
        String Uqueri = "select * from user where name='"+lblNamehome.getText()+"'";
        Statement st;
        ResultSet rs;
        
        System.out.println("name");
        
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(Uqueri);
            
            
            
            while(rs.next()){
                 id=rs.getInt("id");
                       
               // Boxxx.getItems().add(rs.getString("id"));
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
            
            
            String query = "INSERT INTO `chat` (`idSender`, `content`) VALUES ("+id+", '"+msgF.getText()+"');";

            try
            {
                executeQuery(query); 
            }
            catch(Exception ex)
            {
                ex.printStackTrace();

            }
            ShowChat();
            chatscrollp.setVvalue(99999999);
            msgF.setText(null);
        }
    
    }
    @FXML
    public void showhideChat(){
        if(HideShow.isVisible())
        HideShow.setVisible(false);
        else 
        HideShow.setVisible(true);
        
        
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
        registerStage.setScene(new Scene(root,600, 500));
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
             circlee.setFill(new ImagePattern(im));
               // Boxxx.getItems().add(rs.getString("id"));
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
      
    }
       
    
    
}

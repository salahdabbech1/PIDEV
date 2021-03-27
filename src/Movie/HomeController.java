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
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Label;
import javafx.scene.control.ScrollPane;
import javafx.scene.control.TextArea;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.BorderPane;

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
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        ShowChat();
        HideShow.setVisible(false);
    }    
    
    
    
    
    private void loadPage(String page){
    Parent root = null;
        try {
            root = FXMLLoader.load(getClass().getResource(page+".fxml"));
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
        loadPage("MovieF");
    }
    private void Concert(MouseEvent event) {
        loadPage("Concert");
    }
    private void Musician(MouseEvent event) {
        loadPage("Musician");
    }
      @FXML
    private void Theatre(MouseEvent event) {
        loadPage("TheatreFront");
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
            String name= getUsername(list.get(i).getIdsender());
            Name.setText(name);
            Name.setLayoutX(10);
            Name.setLayoutY(Content.getPrefHeight()-50+Y);
            Name.setStyle("-fx-text-fill:white;");
            
            Label Time = new Label(list.get(i).getTime().toString());
            Time.setLayoutX(Name.getPrefWidth()+ 100);
            Time.setLayoutY(Content.getPrefHeight()-50+Y);
            Time.setStyle("-fx-text-fill:white;");
            chatPane.getChildren().addAll(Name,Time,Content);
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
            Connection conn = getConnection();
            String query = "INSERT INTO `chat` (`idSender`, `content`) VALUES ("+1+", '"+msgF.getText()+"');";

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
    
    
}

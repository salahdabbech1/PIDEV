/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Movie;

import java.net.URL;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Hyperlink;
import javafx.scene.control.Label;
import javafx.scene.control.ScrollPane;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.KeyEvent;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.Pane;

/**
 * FXML Controller class
 *
 * @author HP
 */
public class ConcertFController implements Initializable {

    @FXML
    private Pane pane;
    @FXML
    private ScrollPane scrollp;
    @FXML
    private TextField searchF;
    @FXML
    private AnchorPane newpane;
    @FXML
    private ComboBox<String> comboB;
    @FXML
    private AnchorPane actinf;
    @FXML  
private Hyperlink hype;


    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        ShowConcerts();
        ShowNewConcert();
        CatCombo();
       tester();
           
        
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
    
    public void tester(){
        Hyperlink hype = new Hyperlink();
      hype.setOnMouseClicked(new EventHandler<MouseEvent>() { 
 
        @Override 
        public void handle(MouseEvent t) { 
            List<Musician> list=getMus();
       int Y=50;
        int HP=0;
        actinf.getChildren().clear();
        for (int i = 0; i < list.size(); i++) {
            Label t1 = new Label("Name :");
            Label t2 = new Label("Prenom:");
            Label t3 = new Label("Date :");
            Label t4 = new Label("Desvription :");
            t1.setLayoutX(400);
            t1.setLayoutY(Y+10);
            t1.setStyle("-fx-text-fill:white;");
            t2.setLayoutX(400);
            t2.setLayoutY(Y+30);
            t2.setStyle("-fx-text-fill:white;");
            t3.setLayoutX(400);
            t3.setLayoutY(Y+50);
            t4.setStyle("-fx-text-fill:white;");
            t4.setLayoutX(400);
            t4.setLayoutY(Y+70);
            t4.setStyle("-fx-text-fill:white;");
            Label Name = new Label();
            Name.setText(list.get(i).getName());
            Name.setLayoutX(220);
            Name.setLayoutY(Y+10);
            Name.setStyle("-fx-text-fill:white;");
            Label Prenom = new Label(list.get(i).getPrenom());
            Prenom.setLayoutX(220);
            Prenom.setLayoutY(Y+30);
            Prenom.setStyle("-fx-text-fill:white;");
            Image im = new Image(list.get(i).getImage());
            ImageView Image = new ImageView(im);
            Image.setFitHeight(120);
            Image.setFitWidth(120);
            Image.setLayoutX(0);
            Image.setLayoutY(Y);
            Label born = new Label(list.get(i).getBorn().toString());
            born.setLayoutX(220);
            born.setLayoutY(Y+50);
            born.setStyle("-fx-text-fill:white;");
            Label Description = new Label(list.get(i).getDescription());
            Description.setLayoutX(220);
            Description.setLayoutY(Y+70);
            Description.setStyle("-fx-text-fill:white;");
            actinf.getChildren().addAll(t1,t2,t3,t4,Name,Image,Prenom,born,Description);
             Y+=200;
            HP+=350;
            actinf.setPrefHeight(HP);
     
        } 
        }
    }); 
        
    }
    
     public List getConcertlist() {
          List<Concert> concertList = new ArrayList<>();
                   Connection conn = getConnection();
        String query = "SELECT * FROM concert";
        Statement st;
        ResultSet rs;
                try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            Concert concert;
            while(rs.next()){
                concert = new Concert(rs.getInt("id"),rs.getString("name"),rs.getString("idmusician"),rs.getString("musics"),rs.getString("image"));
                concertList.add(concert);
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return concertList;
      }
     
     public List getMus(){
                   Connection conn = getConnection();
                   String cat = hype.getText();
                   List<Musician> musList = new ArrayList<>();
        String query = "SELECT * FROM musician where name ='"+cat+"'";
        Statement st;
        ResultSet rs;
                try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            Musician musician;
            while(rs.next()){
               musician = new Musician(rs.getInt("id"),rs.getString("name"),rs.getString("prenom"),rs.getDate("born"),rs.getString("description"),rs.getString("image"));
                musList.add(musician);
            }
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
                 return musList;
         
     }
     

      
    @FXML
       public void ShowConcerts(){
        List<Concert> list=getConcertlist();
       int Y=0;
        int HP=0;
        pane.getChildren().clear();
        scrollp.setPannable(true);
        scrollp.setHbarPolicy(ScrollPane.ScrollBarPolicy.AS_NEEDED);
        for (int i = 0; i < list.size(); i++) {
            Label t1 = new Label("Name :");
            Label t2 = new Label("Musiciens :");
            Label t3 = new Label("Musique :");
            t1.setLayoutX(130);
            t1.setLayoutY(Y+10);
            t1.setStyle("-fx-text-fill:white;");
            t2.setLayoutX(130);
            t2.setLayoutY(Y+30);
            t2.setStyle("-fx-text-fill:white;");
            t3.setLayoutX(130);
            t3.setLayoutY(Y+50);
            t3.setStyle("-fx-text-fill:white;");
            Label Name = new Label();
            Name.setText(list.get(i).getName());
            Name.setLayoutX(220);
            Name.setLayoutY(Y+10);
            Name.setStyle("-fx-text-fill:white;");
            Hyperlink Musiciens = new Hyperlink(list.get(i).getIdmusician());
            Musiciens.setLayoutX(220);
            Musiciens.setLayoutY(Y+30);
            Musiciens.setStyle("-fx-text-fill:white;");
            Image im = new Image(list.get(i).getImage());
            ImageView Image = new ImageView(im);
            Image.setFitHeight(120);
            Image.setFitWidth(120);
            Image.setLayoutX(0);
            Image.setLayoutY(Y);
            Label Musique = new Label(list.get(i).getMusics());
            Musique.setLayoutX(220);
            Musique.setLayoutY(Y+70);
            Musique.setMaxWidth(200);
            Musique.setStyle("-fx-text-fill:white;");
            pane.getChildren().addAll(t1,t2,t3,Name,Image,Musiciens,Musique);
             Y+=140;
            HP+=150;
            pane.setPrefHeight(HP);
        }
    
    }


    @FXML
    private void SelectCat(ActionEvent event) {
        Connection conn = getConnection();
        String cat = comboB.getValue();
        List<Concert> list=new ArrayList<>();
        String query = "Select * from concert where idmusician ='"+cat+"' ";
        Statement st;
        ResultSet rs;
        Concert concerts;
        
        try{
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                concerts = new Concert(rs.getInt("id"),rs.getString("name"),rs.getString("idmusician"),rs.getString("musics"),rs.getString("image"));
                list.add(concerts);
            }
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        pane.getChildren().clear();
        int Y=0;
        int HP=0;
        scrollp.setPannable(true);
        scrollp.setHbarPolicy(ScrollPane.ScrollBarPolicy.AS_NEEDED);
        
        for (int i = 0; i < list.size(); i++) {
            Label t1 = new Label("Name :");
            Label t2 = new Label("Musiciens :");
            Label t3 = new Label("Musique :");
            t1.setLayoutX(130);
            t1.setLayoutY(Y+10);
            t1.setStyle("-fx-text-fill:white;");
            t2.setLayoutX(130);
            t2.setLayoutY(Y+30);
            t2.setStyle("-fx-text-fill:white;");
            t3.setLayoutX(130);
            t3.setLayoutY(Y+50);
            t3.setStyle("-fx-text-fill:white;");
            Label Name = new Label();
            Name.setText(list.get(i).getName());
            Name.setLayoutX(220);
            Name.setLayoutY(Y+10);
            Name.setStyle("-fx-text-fill:white;");
           Hyperlink Musiciens = new Hyperlink(list.get(i).getIdmusician());
            Musiciens.setLayoutX(220);
            Musiciens.setLayoutY(Y+30);
            Musiciens.setStyle("-fx-text-fill:white;");
            Image im = new Image(list.get(i).getImage());
            ImageView Image = new ImageView(im);
            Image.setFitHeight(120);
            Image.setFitWidth(120);
            Image.setLayoutX(0);
            Image.setLayoutY(Y);
            Label Musique = new Label(list.get(i).getMusics());
            Musique.setLayoutX(220);
            Musique.setLayoutY(Y+70);
            Musique.setMaxWidth(200);
            Musique.setStyle("-fx-text-fill:white;");
            Musique.setWrapText(true);
            pane.getChildren().addAll(t1,t2,t3,Name,Image,Musique);
            Y+=140;
            HP+=150;
            pane.setPrefHeight(HP);
    }
    }


    @FXML
    private void SearchConcert(KeyEvent event) {
         String name = searchF.getText();
        Connection conn = getConnection();
        List<Concert> list=new ArrayList<>();
        String query = "Select * from concert where (name like '%"+name+"%') or (idmusician like '%"+name+"%')";
        Statement st;
        ResultSet rs;
        
        try{
            st=conn.createStatement();
            rs=st.executeQuery(query);
            Concert concerts;
            while(rs.next()){
                concerts = new Concert(rs.getInt("id"),rs.getString("name"),rs.getString("idmusician"),rs.getString("musics"),rs.getString("image"));
                list.add(concerts);
            }
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        int Y=0;
        int HP=0;
        scrollp.setPannable(true);
        scrollp.setHbarPolicy(ScrollPane.ScrollBarPolicy.AS_NEEDED);
        pane.getChildren().clear();
          for (int i = 0; i < list.size(); i++) {
            Label t1 = new Label("Name :");
            Label t2 = new Label("Musiciens :");
            Label t3 = new Label("Musique :");
            t1.setLayoutX(130);
            t1.setLayoutY(Y+10);
            t1.setStyle("-fx-text-fill:white;");
            t2.setLayoutX(130);
            t2.setLayoutY(Y+30);
            t2.setStyle("-fx-text-fill:white;");
            t3.setLayoutX(130);
            t3.setLayoutY(Y+50);
            t3.setStyle("-fx-text-fill:white;");
            Label Name = new Label();
            Name.setText(list.get(i).getName());
            Name.setLayoutX(220);
            Name.setLayoutY(Y+10);
            Name.setStyle("-fx-text-fill:white;");
            Hyperlink Musiciens = new Hyperlink(list.get(i).getIdmusician());
            Musiciens.setLayoutX(220);
            Musiciens.setLayoutY(Y+30);
            Musiciens.setStyle("-fx-text-fill:white;");
            Image im = new Image(list.get(i).getImage());
            ImageView Image = new ImageView(im);
            Image.setFitHeight(120);
            Image.setFitWidth(120);
            Image.setLayoutX(0);
            Image.setLayoutY(Y);
            Label Musique = new Label(list.get(i).getMusics());
            Musique.setLayoutX(220);
            Musique.setLayoutY(Y+70);
            Musique.setMaxWidth(200);
            Musique.setStyle("-fx-text-fill:white;");
            Musique.setWrapText(true);
            pane.getChildren().addAll(t1,t2,t3,Name,Image,Musique);
            Y+=140;
            HP+=150;
            pane.setPrefHeight(HP);
    }
    }
     public void CatCombo(){
        Connection conn = getConnection();
        String query = "Select DISTINCT idmusician from concert ";
        Statement st;
        ResultSet rs;
        comboB.setValue("Select IDMUSICIAN");
        try{
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                comboB.getItems().add(rs.getString("idmusician"));
            }
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
    }
    
     public List getNewConcert() {
          List<Concert> concertList = new ArrayList<>();
                   Connection conn = getConnection();
        String query = "SELECT * FROM concert order by idmusician LIMIT 4";
        Statement st;
        ResultSet rs;
                try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            Concert concert;
            while(rs.next()){
                concert = new Concert(rs.getInt("id"),rs.getString("name"),rs.getString("idmusician"),rs.getString("musics"),rs.getString("image"));
                concertList.add(concert);
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return concertList;
      }
    
    
    public void ShowNewConcert(){
        List<Concert> list=getNewConcert();
        int Y=0;
        
        for (int i = 0; i < 2; i++) {
            Label Name = new Label();
            Name.setText(list.get(i).getName());
            Name.setLayoutX(40);
            Name.setLayoutY(Y+0);
            Name.setStyle("-fx-text-fill:white;");
            Image im = new Image(list.get(i).getImage());
            ImageView Image = new ImageView(im);
            Image.setFitHeight(120);
            Image.setFitWidth(120);
            Image.setLayoutX(0);
            Image.setLayoutY(Y+20);
            newpane.getChildren().addAll(Name,Image);
            Y+=160;
        }
        
        for (int i = 2; i < list.size(); i++) {
            Label Name = new Label();
            Name.setText(list.get(i).getName());
            Name.setLayoutX(190);
            Name.setLayoutY(Y-320);
            Name.setStyle("-fx-text-fill:white;");
            Image im = new Image(list.get(i).getImage());
            ImageView Image = new ImageView(im);
            Image.setFitHeight(120);
            Image.setFitWidth(120);
            Image.setLayoutX(160);
            Image.setLayoutY(Y-300);
            newpane.getChildren().addAll(Name,Image);
            Y+=160;
        }
    
    }

    
}

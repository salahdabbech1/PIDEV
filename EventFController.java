/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Movie;

import Service.Event_Service;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Label;
import javafx.scene.control.ScrollPane;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.KeyEvent;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.HBox;
import javafx.scene.layout.Pane;
/**
 * FXML Controller class
 *
 * @author PersoPc
 */
public class EventFController implements Initializable {

     @FXML
    private Pane pane;
    @FXML
    private ScrollPane scrollp;
    @FXML
    private TextField searchF;
    private AnchorPane newpane;
    @FXML
    private ComboBox<String> comboB;
    
        static int indiceSite = 0;
            private int taille_site = 0;
    @FXML
    private ScrollPane scrollpaneSite;
    @FXML
    private HBox hbox_site;
   
     Event_Service service_site = new Event_Service();



    /**
     * Initializes the controller class.
     * @param url
     * @param rb
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        ShowEvents();
         try {
            /*-------------------*/
            // site
            taille_site = service_site.Affichertaille();
            System.out.println(taille_site);
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }       
                Node[] nodes_site = new Node[taille_site];
         scrollpaneSite.setVbarPolicy(ScrollPane.ScrollBarPolicy.NEVER);
        for (indiceSite = 0; indiceSite < taille_site; indiceSite++) {
            try {
                nodes_site[indiceSite] = FXMLLoader.load(getClass().getResource("/Movie/Item_Site.fxml"));
                hbox_site.getChildren().add(nodes_site[indiceSite]);
            } catch (IOException e) {
            }}
    //    ShowNewEvent();
        CatCombo();
    }   
    
    public Connection getConnection(){ 
        Connection conn; 
        try{ 
            conn= DriverManager.getConnection("jdbc:mysql://localhost:3306/artlife", "root","");
        return conn;
        } 
        catch(SQLException ex){ 
        System.out.println("Error: " + ex.getMessage());
        return null;
        }
    }
    
     public List getEventlist() {
          List<Event> eventList = new ArrayList<>();
                   Connection conn = getConnection();
        String query = "SELECT * FROM event";
        Statement st;
        ResultSet rs;
                try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            Event event;
            while(rs.next()){
                event = new Event(rs.getInt("id"),rs.getDate("DateDeb"),rs.getDate("DateFin"),rs.getString("idContent"),rs.getString("idCinema"),rs.getString("Adresse"),rs.getString("Type"),rs.getString("Name"),rs.getString("image"));
                eventList.add(event);
            }
            
        }
        catch(SQLException ex)
        {
            ex.printStackTrace();
            
        }
        return eventList;
      }
     

      
     @FXML
       public void ShowEvents(){
        List<Event> list=getEventlist();
       int Y=0;
        int HP=0;
        pane.getChildren().clear();
        scrollp.setPannable(true);
        scrollp.setHbarPolicy(ScrollPane.ScrollBarPolicy.AS_NEEDED);
        for (int i = 0; i < list.size(); i++) {
            Label t1 = new Label("Name :");
            Label t2 = new Label("Adresse :");
            Label t3 = new Label("Type :");
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
            Label Adresse = new Label(list.get(i).getAdresse());
            Adresse.setLayoutX(220);
            Adresse.setLayoutY(Y+30);
            Adresse.setStyle("-fx-text-fill:white;");
            Image im = new Image(list.get(i).getImage());
            ImageView Image = new ImageView(im);
            Image.setFitHeight(120);
            Image.setFitWidth(120);
            Image.setLayoutX(0);
            Image.setLayoutY(Y);
            Label Type = new Label(list.get(i).getType());
            Type.setLayoutX(220);
            Type.setLayoutY(Y+70);
            Type.setMaxWidth(200);
            Type.setStyle("-fx-text-fill:white;");
            pane.getChildren().addAll(t1,t2,t3,Name,Image,Adresse,Type);
             Y+=140;
            HP+=150;
            pane.setPrefHeight(HP);
            

        }
    
    }


    @FXML
    private void SelectCat(ActionEvent event) {
        Connection conn = getConnection();
        String cat = comboB.getValue();
        List<Event> list=new ArrayList<>();
        String query = "Select * from event where Adresse ='"+cat+"' ";
        Statement st;
        ResultSet rs;
        Event events;
        
        try{
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                events = new Event(rs.getInt("id"),rs.getDate("DateDeb"),rs.getDate("DateFin"),rs.getString("idContent"),rs.getString("idCinema"),rs.getString("Adresse"),rs.getString("Type"),rs.getString("Name"),rs.getString("image"));
                list.add(events);
            }
        }
        catch(SQLException ex)
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
            Label t2 = new Label("Adresse :");
            Label t3 = new Label("Type :");
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
            Label idm = new Label(list.get(i).getAdresse());
            idm.setLayoutX(220);
            idm.setLayoutY(Y+30);
            idm.setStyle("-fx-text-fill:white;");
            Image im = new Image(list.get(i).getImage());
            ImageView Image = new ImageView(im);
            Image.setFitHeight(120);
            Image.setFitWidth(120);
            Image.setLayoutX(0);
            Image.setLayoutY(Y);
            Label Type = new Label(list.get(i).getType());
            Type.setLayoutX(220);
            Type.setLayoutY(Y+70);
            Type.setMaxWidth(200);
            Type.setStyle("-fx-text-fill:white;");
            Type.setWrapText(true);
            pane.getChildren().addAll(t1,t2,t3,Name,Image,Type);
            Y+=140;
            HP+=150;
            pane.setPrefHeight(HP);
    }
    }


     public void CatCombo(){
        Connection conn = getConnection();
        String query = "Select DISTINCT Adresse from event ";
        Statement st;
        ResultSet rs;
        comboB.setValue("Select ADRESSE");
        try{
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                comboB.getItems().add(rs.getString("Adresse"));
            }
        }
        catch(SQLException ex)
        {
            ex.printStackTrace();
            
        }
    }
    
     public List getNewEvent() {
          List<Event> eventList = new ArrayList<>();
                   Connection conn = getConnection();
        String query = "SELECT * FROM event order by Adresse LIMIT 4";
        Statement st;
        ResultSet rs;
                try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            Event event;
            while(rs.next()){
                event = new Event(rs.getInt("id"),rs.getDate("DateDeb"),rs.getDate("DateFin"),rs.getString("idContent"),rs.getString("idCinema"),rs.getString("Adresse"),rs.getString("Type"),rs.getString("Name"),rs.getString("image"));
                eventList.add(event);
            }
            
        }
        catch(SQLException ex)
        {
            ex.printStackTrace();
            
        }
        return eventList;
      }
    
    
    public void ShowNewEvent(){
        List<Event> list=getNewEvent();
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

   

 
 

    @FXML
    private void SearchEvent(ActionEvent event) {
         String name = searchF.getText();
        Connection conn = getConnection();
        List<Event> list=new ArrayList<>();
        String query = "Select * from event where (Name like '%"+name+"%') or (Adresse like '%"+name+"%')";
        Statement st;
        ResultSet rs;
        
        try{
            st=conn.createStatement();
            rs=st.executeQuery(query);
            Event events;
            while(rs.next()){
                events = new Event(rs.getInt("id"),rs.getDate("DateDeb"),rs.getDate("DateFin"),rs.getString("idContent"),rs.getString("idCinema"),rs.getString("Adresse"),rs.getString("Type"),rs.getString("Name"),rs.getString("image"));
                list.add(events);
            }
        }
        catch(SQLException ex)
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
            Label t2 = new Label("Adresse :");
            Label t3 = new Label("Type :");
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
            Label idm = new Label(list.get(i).getAdresse());
            idm.setLayoutX(220);
            idm.setLayoutY(Y+30);
            idm.setStyle("-fx-text-fill:white;");
            Image im = new Image(list.get(i).getImage());
            ImageView Image = new ImageView(im);
            Image.setFitHeight(120);
            Image.setFitWidth(120);
            Image.setLayoutX(0);
            Image.setLayoutY(Y);
            Label Type = new Label(list.get(i).getType());
                Type.setLayoutX(220);
            Type.setLayoutY(Y+70);
            Type.setMaxWidth(200);
            Type.setStyle("-fx-text-fill:white;");
            Type.setWrapText(true);
            pane.getChildren().addAll(t1,t2,t3,Name,Image,Type);
            Y+=140;
            HP+=150;
            pane.setPrefHeight(HP);}
    }

   
  

 

    
    
    
}

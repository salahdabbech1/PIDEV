/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Movie;

import entite.Tactor;
import entite.Theatre;
import java.awt.BorderLayout;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.time.LocalDate;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.geometry.Insets;
import javafx.geometry.Pos;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Label;
import javafx.scene.control.ScrollBar;
import javafx.scene.control.ScrollPane;
import javafx.scene.control.TextField;
import javafx.scene.effect.ColorAdjust;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.BorderPane;
import javafx.scene.layout.Pane;
import javafx.scene.layout.VBox;
import javafx.scene.media.Media;
import javafx.scene.media.MediaPlayer;
import javafx.scene.media.MediaView;
import javafx.scene.paint.Color;
import javafx.scene.paint.CycleMethod;
import javafx.scene.paint.LinearGradient;
import javafx.scene.paint.RadialGradient;
import javafx.scene.paint.Stop;
import javafx.scene.text.Font;
import javafx.scene.text.FontWeight;
import javafx.scene.web.WebView;
import javafx.stage.Stage;
import service.ServiceTheatre;
import javax.swing.JScrollPane;

public class TheatreFrontController implements Initializable {

    @FXML
    private AnchorPane pane;
    @FXML
    private ScrollPane scrollPANE;
    @FXML
    private TextField SearchField;
    @FXML
    private ComboBox<String> cbGenre;
    @FXML
    private AnchorPane newAP;
    @FXML
    private Label LabelNewTh;
    @FXML
    private ImageView Retour;
    
    
    
    
    
    
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        ShowTheatre();
        Category();
        ShowNewestTheatre();
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
    
    
    
    public List getTheatrelist(){
         ServiceTheatre st= new ServiceTheatre();
        return st.getTheatrelist();
       
    }
    
    
    String getActorName(Long id){
        
        String name = null;
        Connection conn = getConnection();
       
        String query = "Select * from tactor where id ="+id+"";
        Statement st;
        ResultSet rs;
        
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
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
    public String getActors(Long idTheatre){
        Connection conn = getConnection();
        String query = "Select * from theatreactors where theatreId='"+idTheatre+"'";
        Statement st;
        ResultSet rs;
        String name="";
        
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            //Theatre theatres;
            while(rs.next()){
                name=name +getActorName(Long.valueOf(rs.getString("tactorId")))+" , ";
               
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return name;
    }
    
        public void Category(){
        Connection conn = getConnection();
        String query = "Select DISTINCT genre from theatre ";
        Statement st;
        ResultSet rs;
        cbGenre.setValue("Select Category");
        try{
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                cbGenre.getItems().add(rs.getString("genre"));
                
                
            }
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
    }
          @FXML
         public void SelectCat(){
        
        Connection conn = getConnection();
        String cat = cbGenre.getValue();
        List<Theatre> list=new ArrayList<>();
        String query = "Select * from theatre where genre ='"+cat+"' ";
        Statement st;
        ResultSet rs;
        //Theatre theatres;
        
        try{
            st=conn.createStatement();
            rs=st.executeQuery(query);
            //Theatre theatres;
            while(rs.next()){
                  Long id = rs.getLong("id");
               // String IdTactor=rs.getString("IdTactor");
                String name = rs.getString("name");
                String genre = rs.getString("genre");
                LocalDate rdate = rs.getDate("rdate").toLocalDate();
                 String image = rs.getString("image");
                 String trailer=rs.getString("trailer");
                 String description=rs.getString("description");
                 String poster=rs.getString("poster");
                Tactor tactor = new Tactor(null,null,null,null,null);
                Theatre pp = new Theatre(id, name,tactor, genre,rdate,image,trailer,description,poster);
                list.add(pp);
              
            }
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
              
        }
        pane.getChildren().clear();
        int Y=0;
        int HP=0;
        scrollPANE.setPannable(true);
        scrollPANE.setHbarPolicy(ScrollPane.ScrollBarPolicy.AS_NEEDED);
        
        for (int i = 0; i < list.size(); i++) {
            Label t1 = new Label("Name :");
            Label t2 = new Label("Genre :");
            Label t3 = new Label("Debut Date :");
            Label t4 = new Label("Actors :");
            t1.setLayoutX(130);
            t1.setLayoutY(Y+10);
            t1.setStyle("-fx-text-fill:white;");
            t2.setLayoutX(130);
            t2.setLayoutY(Y+30);
            t2.setStyle("-fx-text-fill:white;");
            t3.setLayoutX(130);
            t3.setLayoutY(Y+50);
            t3.setStyle("-fx-text-fill:white;");
            t4.setLayoutX(130);
            t4.setLayoutY(Y+70);
            t4.setStyle("-fx-text-fill:white;");
            Label Name = new Label();
            Name.setText(list.get(i).getName());
            Name.setLayoutX(220);
            Name.setLayoutY(Y+10);
            Name.setStyle("-fx-text-fill:white;");
            Name.setOnMouseClicked((event) -> {
            ShowTact(Name);});
            Label Genre = new Label(list.get(i).getGenre());
            Genre.setLayoutX(220);
            Genre.setLayoutY(Y+30);
            Genre.setStyle("-fx-text-fill:white;");
            Label Rl = new Label(list.get(i).getRdate().toString());
            Rl.setLayoutX(220);
            Rl.setLayoutY(Y+50);
            Rl.setStyle("-fx-text-fill:white;");
            Image im = new Image(list.get(i).getImage());
            ImageView Image = new ImageView(im);
            Image.setFitHeight(120);
            Image.setFitWidth(120);
            Image.setLayoutX(0);
            Image.setLayoutY(Y);
            Image.setOnMouseClicked((event) -> {
            ShowTact(Name);});
            Label Actors = new Label(getActors(list.get(i).getId()));
            Actors.setLayoutX(220);
            Actors.setLayoutY(Y+70);
            Actors.setMaxWidth(200);
            Actors.setStyle("-fx-text-fill:white;");
            Actors.setWrapText(true);
            pane.getChildren().addAll(t1,t2,t3,t4,Name,Image,Rl,Genre,Actors);
            Y+=140;
            HP+=150;
            pane.setPrefHeight(HP);
        }
        
        
    }
    
      public List getNewestShows(){
     ServiceTheatre st= new ServiceTheatre();
            
       
        return st.getNewestShows();
    }
        public void ShowNewestTheatre(){
        List<Theatre> list=getNewestShows();
        int Y=0;
       int X=0;
        for (int i = 0; i < 4; i++) {
          if(i<2){
            Label Name = new Label();
            Name.setText(list.get(i).getName());
            Name.setLayoutX(40);
            Name.setLayoutY(Y);
            Name.setStyle("-fx-text-fill:white;");
            Image im = new Image(list.get(i).getImage());
            ImageView Image = new ImageView(im);
            Image.setFitHeight(120);
            Image.setFitWidth(120);
            Image.setLayoutX(0);
            Image.setLayoutY(Y+20);
            Image.setOnMouseClicked((event) -> {
            ShowTact(Name);});
            Name.setOnMouseClicked((event) -> {
            ShowTact(Name);});
            newAP.getChildren().addAll(Name,Image);
            Y+=160;
          }
          else {      
            
              Label Name2 = new Label();
            Name2.setText(list.get(i).getName());
            Name2.setLayoutX(190);
            Name2.setLayoutY(X);
            Name2.setStyle("-fx-text-fill:white;");
            Image im2 = new Image(list.get(i).getImage());
            ImageView Image2 = new ImageView(im2);
            Image2.setFitHeight(120);
            Image2.setFitWidth(120);
            Image2.setLayoutX(160);
            Image2.setLayoutY(X+20);
            Image2.setOnMouseClicked((event) -> {
            ShowTact(Name2);});
            Name2.setOnMouseClicked((event) -> {
            ShowTact(Name2);});
            newAP.getChildren().addAll(Name2,Image2);
            X+=160;}
            
        }
        
   
    }
               
    
    public List getTheatreByName(String name){
           ServiceTheatre st= new ServiceTheatre();
    
        return st.getTheatreByName(name);
    }
    
    
    public Theatre getTheatreById(Long id){
        ServiceTheatre st= new ServiceTheatre();
        return st.getTheatreById(id);
    }
     public List<Long> getActorList(Long idTheatre){
         ServiceTheatre st= new ServiceTheatre();
         return st.getActorList(idTheatre);
    }
    public List<Tactor> getTactorById(Long id){
         ServiceTheatre st= new ServiceTheatre();
        return st.getTactorById(id);
    }
    public List<Tactor> getTactorByName(String name){
         ServiceTheatre st= new ServiceTheatre();
        return st.getTactorByName(name);
    }
    public List<Long> getActorsTheatrelist(Long id){
         ServiceTheatre st= new ServiceTheatre();
          return st.getActorsTheatrelist(id);
    }
    public void ShowTact(Label name){
        List<Theatre> theatreL=getTheatreByName(name.getText());
        pane.getChildren().clear();

        WebView webview = new WebView();
        webview.getEngine().load(theatreL.get(0).getTrailer());
        webview.setPrefSize(600, 400);
        webview.setLayoutX(0);
        webview.setLayoutY(10);
        
     
        Label Name = new Label(theatreL.get(0).getName());
       
        Name.setLayoutX(160);
        Name.setLayoutY(750);
        Name.setFont(Font.font("Verdana", FontWeight.BOLD, 30));
        Name.setStyle("-fx-text-fill:#5f53a6;");
        Label Des = new Label(theatreL.get(0).getRdate().toString()+"   "+(theatreL.get(0).getGenre()));
       
        Des.setLayoutX(160);
        Des.setLayoutY(790);
        Des.setFont(Font.font("Arial", 20));
        Des.setStyle("-fx-text-fill:#dddddd;");
       //imageTheatre
        ImageView Image = new ImageView(theatreL.get(0).getImage());
        Image.setFitHeight(200);
        Image.setFitWidth(150);
        Image.setLayoutX(0);
        Image.setLayoutY(620);
           //poster
          AnchorPane ImagePane = new AnchorPane();
          ImagePane.setPrefHeight(100);
          ImagePane.setPrefWidth(600);
          ImagePane.setLayoutX(0);
          ImagePane.setLayoutY(720);
        
         ImageView Poster = new ImageView(theatreL.get(0).getPoster());
        Poster.setFitHeight(400);
        Poster.setFitWidth(600);
        Poster.setLayoutX(0);
        Poster.setLayoutY(420);
        
      
       
        ImagePane.setStyle("-fx-background-color:  linear-gradient(to top , #ff7f50, transparent)");
        List<Long> actorList = getActorList(theatreL.get(0).getId());
        
        Label Actors = new Label("Actors :");
        Actors.setLayoutX(620);
        Actors.setLayoutY(0);
        Actors.setFont(Font.font("Arial", FontWeight.BOLD, 30));
        Actors.setStyle("-fx-text-fill:#5fb8c2;");
       //acteur
        ScrollPane ScrollActors = new ScrollPane();
        VBox ActorPane = new VBox();
        ActorPane.setPrefHeight(500);
        ActorPane.setPrefWidth(180);
        ActorPane.setStyle("-fx-background-color: linear-gradient(to top right, #ff7f50, #6a5acd)");
        ////
         Label Title = new Label("Description  :" );
        Title.setLayoutX(0);
        Title.setLayoutY(830);
        Title.setFont(Font.font("Arial", FontWeight.BOLD, 30));
        
        Title.setStyle("-fx-text-fill:#5f53a6;");
        Label Description = new Label(theatreL.get(0).getDescription());
        Description.setLayoutX(10);
        Description.setLayoutY(870);
        
        Description.setFont(new Font("Arial", 20));
        Description.setStyle("-fx-text-fill:#dddddd;");
        
        Description.setMaxHeight(600);
        Description.setMaxWidth(560);
        Description.setWrapText(true);
        //ScrollPane ScrollDesc = new ScrollPane();
        AnchorPane DescPane = new AnchorPane();
        DescPane.setStyle("-fx-background-color: linear-gradient(to top right, #ff7f50, #6a5acd)");
        DescPane.setPrefHeight(182);
        DescPane.setPrefWidth(610);
//         ScrollDesc.setContent(DescPane);
//        ScrollDesc.setLayoutX(0);
//        ScrollDesc.setLayoutY(370);
//        ScrollDesc.setPrefHeight(200);
//        ScrollDesc.setPrefWidth(610);
//        ScrollDesc.setPannable(true);
//        ScrollDesc.setHbarPolicy(ScrollPane.ScrollBarPolicy.ALWAYS);
        ////
        ScrollActors.setContent(ActorPane);
        ScrollActors.setLayoutX(620);
        ScrollActors.setLayoutY(40);
        ScrollActors.setPrefHeight(500);
        ScrollActors.setPrefWidth(220);
        ScrollActors.setPannable(true);
        ScrollActors.setHbarPolicy(ScrollPane.ScrollBarPolicy.ALWAYS);
        int U=0;
        for (int i = 0; i < actorList.size() ; i++) {
           
            String nameActor = getTactorById(actorList.get(i)).get(0).getName();
            Label ActorName = new Label();
            ImageView ImageActor = new ImageView();
            Image ima=new Image(getTactorById(actorList.get(i)).get(0).getImage());
            ImageActor.setImage(ima);
            ImageActor.setFitHeight(120);
            ImageActor.setFitWidth(100);
            
            
            ActorName.setText(getTactorById(actorList.get(i)).get(0).getName());
            ActorName.setFont(new Font("Arial", 15));
            ActorName.setStyle("-fx-text-fill:white;");
        

            ActorPane.getChildren().addAll(ActorName,ImageActor);
            ActorPane.setSpacing(10);
            
            ActorPane.setAlignment(Pos.BASELINE_CENTER);
            if(U>0)
                ActorPane.setPrefWidth(1000);
                   ImageActor.setOnMouseClicked(event ->{
                ShowActor(nameActor);
            });
            ActorName.setOnMouseClicked(event ->{
                ShowActor(nameActor);
            });
            ImageActor.setOnMouseEntered(event ->{
                 ImageActor.setFitHeight(150);
            ImageActor.setFitWidth(130);
        ImageActor.setLayoutY(10);
         
            });
         ImageActor.setOnMouseExited(event ->{
             ImageActor.setFitHeight(120);
            ImageActor.setFitWidth(100);
            });
        }
           webview.setOnMouseEntered(event ->{
                webview.setPrefSize(700, 400);
                webview.setLayoutX(10);
        webview.setLayoutY(10);
      
            });
         webview.setOnMouseExited(event ->{
                webview.setPrefSize(600, 400);
                webview.setLayoutX(0);
        webview.setLayoutY(10);
            });
        Retour.setOnMouseClicked(event -> {
        webview.getEngine().loadContent("");
            MouseEvent e = null;
        Retour(e);
        });
        pane.getChildren().addAll(Actors,Poster,ImagePane,ScrollActors,webview,Name,Des,Image,Description,Title);
        pane.setPrefHeight(1000);
        pane.setPrefWidth(822);
        newAP.getChildren().clear();
        LabelNewTh.setText("");
    
    }
      public void ShowActor(String name){
        pane.getChildren().clear();
        ImageView Image = new ImageView(getTactorByName(name).get(0).getImage());
        Image.setFitHeight(250);
        Image.setFitWidth(200);
        Image.setLayoutX(0);
        Image.setLayoutY(80);
       
        Label Name = new Label(name);
        Name.setLayoutX(0);
        Name.setLayoutY(30);
        Name.setFont(new Font("Courier", 30));
        Name.setStyle("-fx-text-fill:white;");
        Label Description = new Label(getTactorByName(name).get(0).getDescription());
        Description.setLayoutX(220);
        Description.setLayoutY(120);
        Description.setFont(new Font("Courier", 20));
        Description.setStyle("-fx-text-fill:white;");
        Description.setMaxHeight(400);
        Description.setMaxWidth(400);
        Description.setWrapText(true);
        Label Born = new Label("Born in "+getTactorByName(name).get(0).getBorn().toString()+" .");
        Born.setLayoutX(220);
        Born.setLayoutY(95);
        Born.setFont(new Font("Courier", 20));
        Born.setStyle("-fx-text-fill:white;");
  
        List<Long> theatreList = getActorsTheatrelist(getTactorByName(name).get(0).getId());
        
        Label Theatres = new Label("Known For :");
        Theatres.setLayoutX(620);
        Theatres.setLayoutY(0);
        Theatres.setFont(Font.font("Arial", FontWeight.BOLD, 30));
        Theatres.setStyle("-fx-text-fill:#5fb8c2;");
        
        ScrollPane ScrollActors = new ScrollPane();
        VBox ActorP = new VBox();
        ActorP.setStyle("-fx-background-color: linear-gradient(to top right, #ff7f50, #6a5acd)");
        ActorP.setPrefHeight(500);
        ActorP.setPrefWidth(180);
        ScrollActors.setContent(ActorP);
        ScrollActors.setLayoutX(620);
        ScrollActors.setLayoutY(40);
        ScrollActors.setPrefHeight(500);
        ScrollActors.setPrefWidth(220);
        ScrollActors.setPannable(true);
        ScrollActors.setHbarPolicy(ScrollPane.ScrollBarPolicy.ALWAYS);
        int U=0;
        for (int i = 0; i < theatreList.size() ; i++) {
            Label TheatreName = new Label();
            ImageView ImageActor = new ImageView();
            
            Image ima=new Image(getTheatreById(theatreList.get(i)).getImage());
            ImageActor.setImage(ima);
         

            ImageActor.setFitHeight(120);
            ImageActor.setFitWidth(100);
            
            TheatreName.setText(getTheatreById(theatreList.get(i)).getName());
            TheatreName.setFont(new Font("Arial", 15));
            TheatreName.setStyle("-fx-text-fill:white;");

            ActorP.getChildren().addAll(TheatreName,ImageActor);
             ActorP.setSpacing(10);
            ActorP.setAlignment(Pos.BASELINE_CENTER);
            if(U>700)
            ActorP.setPrefWidth(1000);
               ImageActor.setOnMouseClicked((event) -> {
            ShowTact(TheatreName);});
            TheatreName.setOnMouseClicked((event) -> {
            ShowTact(TheatreName);});
              
        ImageActor.setOnMouseEntered(event ->{
                 ImageActor.setFitHeight(150);
            ImageActor.setFitWidth(130);
        ImageActor.setLayoutY(10);
            });
         ImageActor.setOnMouseExited(event ->{
             ImageActor.setFitHeight(120);
            ImageActor.setFitWidth(100);
            });
        }
        ScrollActors.setContent(ActorP);
        pane.getChildren().addAll(Theatres,Name,Born,Image,Description,ScrollActors);
        pane.setPrefHeight(540);
        pane.setPrefWidth(822);
        newAP.getChildren().clear();
        LabelNewTh.setText("");
        
    }
    @FXML
    public void SearchTheatre(){
        
        String n = SearchField.getText();
        Connection conn = getConnection();
        List<Theatre> list=new ArrayList<>();
        String query = "SELECT t.*, a.* from theatre t INNER JOIN ( SELECT id as actorID, name as nameActor from tactor ) a ON t.IdTactor=a.actorID where t.id like '%"+n+"%' or t.name like '%"+n+"%' or a.actorID like '%"+n+"%' or t.genre like '%"+n+"%' or t.rdate like '%"+n+"%' or a.nameActor like '%"+n+"%'";
        Statement st;
        ResultSet rs;
          try{
            st=conn.createStatement();
            rs=st.executeQuery(query);
            //Theatre theatres;
            while(rs.next()){
                  Long id = rs.getLong("id");
               // String IdTactor=rs.getString("IdTactor");
                String name = rs.getString("name");
                String genre = rs.getString("genre");
                LocalDate rdate = rs.getDate("rdate").toLocalDate();
                 String image = rs.getString("image");
                 String trailer=rs.getString("trailer");
                 String description=rs.getString("description");
                  String poster=rs.getString("poster");
                Tactor tactor = new Tactor(rs.getLong("actorID"),rs.getString("nameActor"),null,null,null);
                Theatre pp = new Theatre(id, name,tactor, genre,rdate,image,trailer,description,poster);
                list.add(pp);
            }
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
          
        //TableTheatres.setItems(theatreListSearch);
                int Y=0;
        int HP=0;
        scrollPANE.setPannable(true);
        scrollPANE.setHbarPolicy(ScrollPane.ScrollBarPolicy.AS_NEEDED);
        pane.getChildren().clear();
        
        for (int i = 0; i < list.size(); i++) {
            Label t1 = new Label("Name :");
            Label t2 = new Label("Genre :");
            Label t3 = new Label("Debut Date :");
            Label t4 = new Label("Actors :");
            t1.setLayoutX(130);
            t1.setLayoutY(Y+10);
            t1.setStyle("-fx-text-fill:white;");
            t2.setLayoutX(130);
            t2.setLayoutY(Y+30);
            t2.setStyle("-fx-text-fill:white;");
            t3.setLayoutX(130);
            t3.setLayoutY(Y+50);
            t3.setStyle("-fx-text-fill:white;");
            t4.setLayoutX(130);
            t4.setLayoutY(Y+70);
            t4.setStyle("-fx-text-fill:white;");
            Label Name = new Label();
            Name.setText(list.get(i).getName());
            Name.setLayoutX(220);
            Name.setLayoutY(Y+10);
            Name.setStyle("-fx-text-fill:white;");
            Name.setOnMouseClicked((event) -> {
            ShowTact(Name);});
            Name.setStyle("-fx-text-fill:white;");
            Label Genre = new Label(list.get(i).getGenre());
            Genre.setLayoutX(220);
            Genre.setLayoutY(Y+30);
            Genre.setStyle("-fx-text-fill:white;");
            Label Rl = new Label(list.get(i).getRdate().toString());
            Rl.setLayoutX(220);
            Rl.setLayoutY(Y+50);
            Rl.setStyle("-fx-text-fill:white;");
            Image im = new Image(list.get(i).getImage());
            ImageView Image = new ImageView(im);
            Image.setFitHeight(120);
            Image.setFitWidth(120);
            Image.setLayoutX(0);
            Image.setLayoutY(Y);
            Image.setOnMouseClicked((event) -> {
            ShowTact(Name);});
            Label Actors = new Label(getActors(list.get(i).getId()));
            Actors.setLayoutX(220);
            Actors.setLayoutY(Y+70);
            Actors.setMaxWidth(200);
            Actors.setStyle("-fx-text-fill:white;");
            Actors.setWrapText(true);
            pane.getChildren().addAll(t1,t2,t3,t4,Name,Image,Rl,Genre,Actors);
            Y+=140;
            HP+=150;
            pane.setPrefHeight(HP);
        } 
        }
     
    public void ShowTheatre(){
        
        List<Theatre> list=getTheatrelist();
        int Y=0;
         int HP=0;
        pane.getChildren().clear();
        scrollPANE.setPannable(true);
        scrollPANE.setHbarPolicy(ScrollPane.ScrollBarPolicy.AS_NEEDED);
        
    
        for (int i = 0; i < list.size(); i++) {
            Label t1 = new Label("Name :");
            Label t2 = new Label("Genre :");
            Label t3 = new Label("Debut Date :");
            Label t4 = new Label("Actors :");
            t1.setLayoutX(130);
            t1.setLayoutY(Y+10);
            t1.setStyle("-fx-text-fill:white;");
            t2.setLayoutX(130);
            t2.setLayoutY(Y+30);
            t2.setStyle("-fx-text-fill:white;");
            t3.setLayoutX(130);
            t3.setLayoutY(Y+50);
            t3.setStyle("-fx-text-fill:white;");
            t4.setLayoutX(130);
            t4.setLayoutY(Y+70);
            t4.setStyle("-fx-text-fill:white;");
            Label Name = new Label();
            Name.setText(list.get(i).getName());
            Name.setLayoutX(220);
            Name.setLayoutY(Y+10);
         
            Label Genre = new Label(list.get(i).getGenre());
            Genre.setLayoutX(220);
            Genre.setLayoutY(Y+30);
            Genre.setStyle("-fx-text-fill:white;");
            Label Rl = new Label(list.get(i).getRdate().toString());
            Rl.setLayoutX(220);
            Rl.setLayoutY(Y+50);
            Rl.setStyle("-fx-text-fill:white;");
            Image im = new Image(list.get(i).getImage());
            ImageView Image = new ImageView(im);
            Image.setFitHeight(120);
            Image.setFitWidth(120);
            Image.setLayoutX(0);
            Image.setLayoutY(Y);
            Label Actors = new Label(getActors(list.get(i).getId()));
            Actors.setLayoutX(220);
            Actors.setLayoutY(Y+70);
            Actors.setMaxWidth(200);
            Actors.setStyle("-fx-text-fill:white;");
            Actors.setStyle("-fx-text-fill:white;");
            
//            List<Tactor> lista=new ArrayList();
//            String n=(getA(lista.get(i).getName()));
             
//                  Actors.setOnMouseClicked(new EventHandler<MouseEvent>() {
//      @Override
//      public void handle(MouseEvent e) {
//        Alert alert = new Alert(Alert.AlertType.INFORMATION);
//                    alert.setContentText(Actors.toString());
//                    alert.show();
//      }
//    });
//                  
            pane.getChildren().addAll(t1,Image,t2,t3,t4,Name,Rl,Genre,Actors);
             Y+=140;
              HP+=150;
            pane.setPrefHeight(HP);
            Name.setOnMouseClicked((event) -> {
            ShowTact(Name);});
            
            Image.setOnMouseClicked((event) -> {
            ShowTact(Name);});
            
        }
    
    }
    //          public List<Tactor> getListTactors(){
//        //actorsname
//         
//        List<Tactor> listactors=new ArrayList<>();
//        String query = "SELECT * FROM tactor";
//        Statement st;
//        ResultSet rs;
//       Connection conn = getConnection();
//        try{
//            st=conn.createStatement();
//            rs=st.executeQuery(query);
//            while(rs.next()){
//                Long idr = rs.getLong("id");
//                String name = rs.getString("name");
//                LocalDate born = rs.getDate("born").toLocalDate();
//                String description = rs.getString("description");
//                String image = rs.getString("image");
//                Tactor p = new Tactor(idr, name, born,description,image);
//                listactors.add(p) ;
//            }
//        }
//        catch(Exception ex)
//        {
//            ex.printStackTrace();
//        }
//          System.out.println(listactors);
//        return listactors;
//    }
//          public void showActors(){
//             List<Theatre> listTH=getTheatrelist();
//              List<Tactor> list=getListTactors();
//        int Y=0;
//        // int HP=0;
//            Label NameTH = new Label();
//            NameTH.setText(list.get(i).getTactor().getName());
//        pane.getChildren().clear();
//        
//        for (int i = 0; i < list.size(); i++) {
//            Label t1 = new Label("Name :");
//            Label t2 = new Label("Birthdate :");
//            Label t3 = new Label("Description :");
//           
//            t1.setLayoutX(130);
//            t1.setLayoutY(Y+10);
//            t1.setStyle("-fx-text-fill:white;");
//            t2.setLayoutX(130);
//            t2.setLayoutY(Y+30);
//            t2.setStyle("-fx-text-fill:white;");
//            t3.setLayoutX(130);
//            t3.setLayoutY(Y+50);
//            t3.setStyle("-fx-text-fill:white;");
//           
//            Label Name = new Label();
//            Name.setText(list.get(i).getName());
//            Name.setLayoutX(220);
//            Name.setLayoutY(Y+10);
//            Name.setStyle("-fx-text-fill:white;");
//          
    
//            Label Birthdate = new Label(list.get(i).getBorn().toString());
//            Birthdate.setLayoutX(220);
//            Birthdate.setLayoutY(Y+30);
//            Birthdate.setStyle("-fx-text-fill:white;");
//            Label Rl = new Label(list.get(i).getDescription().toString());
//            Rl.setLayoutX(220);
//            Rl.setLayoutY(Y+50);
//            Rl.setStyle("-fx-text-fill:white;");
//            Image im = new Image(list.get(i).getImage());
//           ImageView Image = new ImageView(im);
//            Image.setFitHeight(120);
//            Image.setFitWidth(120);
//            Image.setLayoutX(0);
//            Image.setLayoutY(Y);
//            
    
//            pane.getChildren().addAll(t1,Image,t2,t3,Name,Rl,Birthdate);
//             Y+=160;
//              //HP+=150;
//            //pane.setPrefHeight(HP);
//            
//        }
//    
//          }

    @FXML
    private void Retour(MouseEvent event) {
        cbGenre.setValue("");
        ShowTheatre();
        ShowNewestTheatre();
    }
}

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
import javafx.application.Application;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Label;
import javafx.scene.control.ScrollPane;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.BorderPane;
import javafx.scene.layout.Pane;
import javafx.scene.paint.Color;
import javafx.scene.text.Font;
import javafx.scene.web.WebView;
import javafx.stage.Stage;
import javax.swing.JScrollPane;

/**
 * FXML Controller class
 *
 * @author bouyo
 */
public class MovieFController implements Initializable {

    @FXML
    private AnchorPane pane;
    @FXML
    private ScrollPane scrollp;
    @FXML
    private TextField searchF;
    @FXML
    private AnchorPane newpane;
    @FXML
    private ComboBox<String> comboB;
    @FXML
    private Label newflabel;
    
    
    
    
    
    
    
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        ShowMovie();
        ShowNewMovie();
        CatCombo();
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
    
    
    
    public List getMovielist(){
        List<Movie> movieList=new ArrayList<>();
        Connection conn = getConnection();
        String query = "Select * from film";
        Statement st;
        ResultSet rs;
        
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            Movie movies;
            while(rs.next()){
                movies = new Movie(rs.getInt("id"),rs.getString("name"),rs.getString("genre"),rs.getString("image"),rs.getDate("rdate"));
                movieList.add(movies);
                
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return movieList;
    }
    
    
    
    public List getMovie(String name){
        List<Movie> movieList=new ArrayList<>();
        Connection conn = getConnection();
        String query = "Select * from film where name='"+name+"'";
        Statement st;
        ResultSet rs;
        
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            Movie movies;
            while(rs.next()){
                movies = new Movie(rs.getInt("id"),rs.getString("name"),rs.getString("genre"),rs.getString("image"),rs.getString("trailer"),rs.getDate("rdate"));
                movieList.add(movies);
                
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return movieList;
    }
    
    
    public Movie getMovie(int id){
        List<Movie> movieList=new ArrayList<>();
        Connection conn = getConnection();
        String query = "Select * from film where id='"+id+"'";
        Statement st;
        ResultSet rs;
        Movie movie = null;
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                movie = new Movie(rs.getInt("id"),rs.getString("name"),rs.getString("genre"),rs.getString("image"),rs.getString("trailer"),rs.getDate("rdate"));
                
            }
            
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return movie;
    }
    
    
    public List<Integer> getActorsMovielist(int id){
        List<Integer> movieList=new ArrayList<>();
        Connection conn = getConnection();
        String query = "Select * from filmactors where faid ="+id+"";
        Statement st;
        ResultSet rs;
        
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            Movie movies;
            while(rs.next()){
                movieList.add(rs.getInt("Fid"));
                
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return movieList;
    }
    
    @FXML
    public void SearchFilm(){
        String name = searchF.getText();
        Connection conn = getConnection();
        List<Movie> list=new ArrayList<>();
        String query = "Select * from film where (name like '%"+name+"%') or (genre like '%"+name+"%')";
        Statement st;
        ResultSet rs;
        
        try{
            st=conn.createStatement();
            rs=st.executeQuery(query);
            Movie movies;
            while(rs.next()){
                movies = new Movie(rs.getInt("id"),rs.getString("name"),rs.getString("genre"),rs.getString("image"),rs.getDate("rdate"));
                list.add(movies);
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
            Label t2 = new Label("Genre :");
            Label t3 = new Label("Release Date :");
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
            ShowSingle(Name);});
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
            ShowSingle(Name);});
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
    
    
    
    
    
    String getActorName(int id){
        String name = null;
        Connection conn = getConnection();
        String query = "Select * from factor where id ="+ id+"";
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
    public String getActors(int idfilm){
        List<String> movieList=new ArrayList<>();
        Connection conn = getConnection();
        String query = "Select * from filmactors where Fid='"+idfilm+"'";
        Statement st;
        ResultSet rs;
        String name="";
        
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            Movie movies;
            while(rs.next()){
                name=name +getActorName(Integer.valueOf(rs.getString("Faid")))+" , ";
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return name;
    }
    
    public List<Integer> getActorList(int idfilm){
        List<Integer> ActorList=new ArrayList<>();
        Connection conn = getConnection();
        String query = "Select * from filmactors where Fid='"+idfilm+"'";
        Statement st;
        ResultSet rs;
        try
        {
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
//                Factor F = new Factor(rs2.getInt("id"),rs2.getString("name"),rs2.getDate("born"),rs2.getString("description"),rs2.getString("image"));
                    ActorList.add(rs.getInt("faid"));
                }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return ActorList;
    }
    
    public List<Factor> getActor(int id){
        List<Factor> ActorList=new ArrayList<>();
        Connection conn = getConnection();
        String query = "Select * from factor where id='"+id+"'";
        Statement st;
        ResultSet rs;
        try
        {
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next())
            {
                    Factor F = new Factor(rs.getInt("id"),rs.getString("name"),rs.getDate("born"),rs.getString("description"),rs.getString("image"));
                    ActorList.add(F);
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return ActorList;
    }
    
    public List<Factor> getActor(String name){
        List<Factor> ActorList=new ArrayList<>();
        Connection conn = getConnection();
        String query = "Select * from factor where name='"+name+"'";
        Statement st;
        ResultSet rs;
        try
        {
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next())
            {
                    Factor F = new Factor(rs.getInt("id"),rs.getString("name"),rs.getDate("born"),rs.getString("description"),rs.getString("image"));
                    ActorList.add(F);
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return ActorList;
    }
    
    @FXML
    public void ShowMovie(){
        searchF.setOnAction((event) -> {
            SearchFilm();
        });
        searchF.setOnKeyPressed((event) -> {
            SearchFilm();
        });
        searchF.setOnKeyReleased((event) -> {
            SearchFilm();
        });
        List<Movie> list=getMovielist();
        int Y=0;
        int HP=0;
        pane.getChildren().clear();
        scrollp.setPannable(true);
        scrollp.setHbarPolicy(ScrollPane.ScrollBarPolicy.AS_NEEDED);
        newflabel.setText("Newest Films :");
        ShowNewMovie();
        for (int i = 0; i < list.size(); i++) {
            Label t1 = new Label("Name :");
            Label t2 = new Label("Genre :");
            Label t3 = new Label("Release Date :");
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
            Actors.setWrapText(true);
            pane.getChildren().addAll(t1,t2,t3,t4,Name,Image,Rl,Genre,Actors);
            Y+=140;
            HP+=150;
            pane.setPrefHeight(HP);
            
            
            Name.setOnMouseClicked((event) -> {
            ShowSingle(Name);});
            
            Image.setOnMouseClicked((event) -> {
            ShowSingle(Name);});
            
        }
    
    }
    
    
    public List getNewMovie(){
        List<Movie> movieList=new ArrayList<>();
        Connection conn = getConnection();
        String query = "Select * from film ORDER BY rdate DESC LIMIT 4";
        Statement st;
        ResultSet rs;
        
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            Movie movies;
            while(rs.next()){
                movies = new Movie(rs.getInt("id"),rs.getString("name"),rs.getString("genre"),rs.getString("image"),rs.getDate("rdate"));
                movieList.add(movies);
                
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return movieList;
    }
    
    
    public void ShowNewMovie(){
        List<Movie> list=getNewMovie();
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
            Image.setOnMouseClicked((event) -> {
            ShowSingle(Name);});
            Name.setOnMouseClicked((event) -> {
            ShowSingle(Name);});
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
            Image.setOnMouseClicked((event) -> {
            ShowSingle(Name);});
            Name.setOnMouseClicked((event) -> {
            ShowSingle(Name);});
            newpane.getChildren().addAll(Name,Image);
            Y+=160;
        }
    
    }
    
    
    
    public void CatCombo(){
        Connection conn = getConnection();
        String query = "Select DISTINCT genre from film ";
        Statement st;
        ResultSet rs;
        comboB.setValue("Select Category");
        try{
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                comboB.getItems().add(rs.getString("genre"));
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
        String cat = comboB.getValue();
        List<Movie> list=new ArrayList<>();
        String query = "Select * from film where genre ='"+cat+"' ";
        Statement st;
        ResultSet rs;
        Movie movies;
        ShowNewMovie();
        try{
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                movies = new Movie(rs.getInt("id"),rs.getString("name"),rs.getString("genre"),rs.getString("image"),rs.getDate("rdate"));
                list.add(movies);
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
            Label t2 = new Label("Genre :");
            Label t3 = new Label("Release Date :");
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
            ShowSingle(Name);});
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
            ShowSingle(Name);});
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
    
    public void ShowSingle(Label name){
        List<Movie> movieL=getMovie(name.getText());
        pane.getChildren().clear();
        WebView webview = new WebView();
        webview.getEngine().load(movieL.get(0).getTrailer());
        webview.setPrefSize(400, 250);
        webview.setLayoutX(220);
        webview.setLayoutY(80);
        Label Name = new Label(movieL.get(0).getName()+" ("+movieL.get(0).getRdate().toString()+")    |   "+movieL.get(0).getGenre());
        Name.setLayoutX(0);
        Name.setLayoutY(30);
        Name.setFont(new Font("Arial", 30));
        Name.setStyle("-fx-text-fill:white;");
        ImageView Image = new ImageView(movieL.get(0).getImage());
        Image.setFitHeight(250);
        Image.setFitWidth(200);
        Image.setLayoutX(0);
        Image.setLayoutY(80);
        List<Integer> actorList = getActorList(movieL.get(0).getId());
        
        Label Cast = new Label("Cast :");
        Cast.setLayoutX(0);
        Cast.setLayoutY(330);
        Cast.setFont(new Font("Arial", 30));
        Cast.setStyle("-fx-text-fill:white;");
        
        ScrollPane ScrollA = new ScrollPane();
        AnchorPane ActorP = new AnchorPane();
        ActorP.setStyle("-fx-background-color:#001935;");
        ActorP.setPrefHeight(185);
        ActorP.setPrefWidth(720);
        ScrollA.setContent(ActorP);
        ScrollA.setLayoutX(0);
        ScrollA.setLayoutY(370);
        ScrollA.setPrefHeight(200);
        ScrollA.setPrefWidth(730);
        ScrollA.setPannable(true);
        ScrollA.setHbarPolicy(ScrollPane.ScrollBarPolicy.ALWAYS);
        int U=0;
        for (int i = 0; i < actorList.size() ; i++) {
            String nameActor = getActor(actorList.get(i)).get(0).getName();
            Label ActorName = new Label();
            ImageView ImageActor = new ImageView();
            Image ima=new Image(getActor(actorList.get(i)).get(0).getImage());
            ImageActor.setImage(ima);
            ImageActor.setFitHeight(120);
            ImageActor.setFitWidth(100);
            ImageActor.setLayoutX(U+0);
            ImageActor.setLayoutY(25);
            ImageActor.setOnMouseClicked(event ->{
                ShowActor(nameActor);
            });
            ActorName.setText(getActor(actorList.get(i)).get(0).getName());
            ActorName.setFont(new Font("Arial", 15));
            ActorName.setStyle("-fx-text-fill:white;");
            ActorName.setLayoutX(U+0);
            ActorName.setLayoutY(0);
            ActorName.setOnMouseClicked(event ->{
                ShowActor(nameActor);
            });
            U+=120;
            ActorP.getChildren().addAll(ActorName,ImageActor);
            if(U>700)
                ActorP.setPrefWidth(1000);
        }
        
        pane.getChildren().addAll(Name,Image,webview,Cast,ScrollA);
        pane.setPrefHeight(540);
        pane.setPrefWidth(730);
        newpane.getChildren().clear();
        newflabel.setText("");
    
    }
    
    public void ShowActor(String name){
        pane.getChildren().clear();
        ImageView Image = new ImageView(getActor(name).get(0).getImage());
        Image.setFitHeight(250);
        Image.setFitWidth(200);
        Image.setLayoutX(0);
        Image.setLayoutY(80);
        Label Name = new Label(name);
        Name.setLayoutX(0);
        Name.setLayoutY(30);
        Name.setFont(new Font("Courier", 30));
        Name.setStyle("-fx-text-fill:white;");
        Label Description = new Label(getActor(name).get(0).getDescription());
        Description.setLayoutX(220);
        Description.setLayoutY(120);
        Description.setFont(new Font("Courier", 20));
        Description.setStyle("-fx-text-fill:white;");
        Description.setMaxHeight(400);
        Description.setMaxWidth(400);
        Description.setWrapText(true);
        Label Born = new Label("Born in "+getActor(name).get(0).getBorn().toString()+" .");
        Born.setLayoutX(220);
        Born.setLayoutY(95);
        Born.setFont(new Font("Courier", 20));
        Born.setStyle("-fx-text-fill:white;");
        
        
        
        
        List<Integer> filmList = getActorsMovielist(getActor(name).get(0).getId());
        
        Label Films = new Label("Films :");
        Films.setLayoutX(0);
        Films.setLayoutY(330);
        Films.setFont(new Font("Courier", 30));
        Films.setStyle("-fx-text-fill:white;");
        
        ScrollPane ScrollA = new ScrollPane();
        AnchorPane ActorP = new AnchorPane();
        ActorP.setStyle("-fx-background-color:#001935;");
        ActorP.setPrefHeight(185);
        ActorP.setPrefWidth(720);
        ScrollA.setContent(ActorP);
        ScrollA.setLayoutX(0);
        ScrollA.setLayoutY(370);
        ScrollA.setPrefHeight(200);
        ScrollA.setPrefWidth(730);
        ScrollA.setPannable(true);
        ScrollA.setHbarPolicy(ScrollPane.ScrollBarPolicy.ALWAYS);
        int U=0;
        for (int i = 0; i < filmList.size() ; i++) {
            Label FilmName = new Label();
            ImageView ImageActor = new ImageView();
            Image ima=new Image(getMovie(filmList.get(i)).getImage());
            ImageActor.setImage(ima);
            ImageActor.setFitHeight(120);
            ImageActor.setFitWidth(100);
            ImageActor.setLayoutX(U+0);
            ImageActor.setLayoutY(25);            
            FilmName.setText(getMovie(filmList.get(i)).getName());
            FilmName.setFont(new Font("Arial", 15));
            FilmName.setStyle("-fx-text-fill:white;");
            FilmName.setLayoutX(U+0);
            FilmName.setLayoutY(0);
            ImageActor.setOnMouseClicked((event) -> {
            ShowSingle(FilmName);});
            FilmName.setOnMouseClicked((event) -> {
            ShowSingle(FilmName);});
            U+=120;
            ActorP.getChildren().addAll(FilmName,ImageActor);
            if(U>700)
                ActorP.setPrefWidth(1000);
        }
        
        ScrollA.setContent(ActorP);
        pane.getChildren().addAll(Films,Name,Born,Image,Description,ScrollA);
        pane.setPrefHeight(540);
        pane.setPrefWidth(730);
        newpane.getChildren().clear();
        newflabel.setText("");
        
    }
    
    
    
    @FXML
    public void ShowActors(){
        searchF.setOnAction((event) -> {
            SearchActor();
        });
        searchF.setOnKeyPressed((event) -> {
            SearchActor();
        });
        searchF.setOnKeyReleased((event) -> {
            SearchActor();
        });
        pane.getChildren().clear();
        Connection conn = getConnection();
        List<Factor> ActorList=new ArrayList<>();
        String query = "Select * from factor ";
        Statement st;
        ResultSet rs;
        try
        {
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next())
            {
                    Factor F = new Factor(rs.getInt("id"),rs.getString("name"),rs.getDate("born"),rs.getString("description"),rs.getString("image"));
                    ActorList.add(F);
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
        
        for (int i = 0; i < ActorList.size(); i++) {
            Label t1 = new Label("Name :");
            Label t2 = new Label("Birth :");
            Label t3 = new Label("Films :");
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
            Name.setText(ActorList.get(i).getName());
            Name.setLayoutX(220);
            Name.setLayoutY(Y+10);
            Name.setStyle("-fx-text-fill:white;");
            Name.setOnMouseClicked((event) -> {
            ShowActor(Name.getText());});
            Label Rl = new Label(ActorList.get(i).getBorn().toString());
            Rl.setLayoutX(220);
            Rl.setLayoutY(Y+30);
            Rl.setStyle("-fx-text-fill:white;");
            Image im = new Image(ActorList.get(i).getImage());
            ImageView Image = new ImageView(im);
            Image.setFitHeight(120);
            Image.setFitWidth(120);
            Image.setLayoutX(0);
            Image.setLayoutY(Y);
            Image.setOnMouseClicked((event) -> {
            ShowActor(Name.getText());});
            
            
            String Filmsl="";
            List<Integer> FilmList=getActorsMovielist(ActorList.get(i).getId());
            Label Films = new Label();
            for (int j = 0; j < FilmList.size(); j++) {
                Filmsl+=getMovie(FilmList.get(j)).getName()+", ";
                Films.setText(Filmsl);
            }
            Films.setLayoutX(220);
            Films.setLayoutY(Y+50);
            Films.setMaxWidth(200);
            Films.setStyle("-fx-text-fill:white;");
            Films.setWrapText(true);
            
            pane.getChildren().addAll(t1,t2,t3,Name,Image,Rl,Films);
            Y+=140;
            HP+=150;
            pane.setPrefHeight(HP);
        }
    }
    
    
    
    @FXML
    public void SearchActor(){
        pane.getChildren().clear();
        Connection conn = getConnection();
        List<Factor> ActorList=new ArrayList<>();
        String query = "Select * from factor where name like '%"+searchF.getText()+"%' ";
        Statement st;
        ResultSet rs;
        try
        {
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next())
            {
                    Factor F = new Factor(rs.getInt("id"),rs.getString("name"),rs.getDate("born"),rs.getString("description"),rs.getString("image"));
                    ActorList.add(F);
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
        
        for (int i = 0; i < ActorList.size(); i++) {
            Label t1 = new Label("Name :");
            Label t2 = new Label("Birth :");
            Label t3 = new Label("Films :");
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
            Name.setText(ActorList.get(i).getName());
            Name.setLayoutX(220);
            Name.setLayoutY(Y+10);
            Name.setStyle("-fx-text-fill:white;");
            Name.setOnMouseClicked((event) -> {
            ShowActor(Name.getText());});
            Label Rl = new Label(ActorList.get(i).getBorn().toString());
            Rl.setLayoutX(220);
            Rl.setLayoutY(Y+30);
            Rl.setStyle("-fx-text-fill:white;");
            Image im = new Image(ActorList.get(i).getImage());
            ImageView Image = new ImageView(im);
            Image.setFitHeight(120);
            Image.setFitWidth(120);
            Image.setLayoutX(0);
            Image.setLayoutY(Y);
            Image.setOnMouseClicked((event) -> {
            ShowActor(Name.getText());});
            
            
            String Filmsl="";
            List<Integer> FilmList=getActorsMovielist(ActorList.get(i).getId());
            Label Films = new Label();
            for (int j = 0; j < FilmList.size(); j++) {
                Filmsl+=getMovie(FilmList.get(j)).getName()+", ";
                Films.setText(Filmsl);
            }
            Films.setLayoutX(220);
            Films.setLayoutY(Y+50);
            Films.setMaxWidth(200);
            Films.setStyle("-fx-text-fill:white;");
            Films.setWrapText(true);
            
            pane.getChildren().addAll(t1,t2,t3,Name,Image,Rl,Films);
            Y+=140;
            HP+=150;
            pane.setPrefHeight(HP);
        }
    }
    
    
    
    
}

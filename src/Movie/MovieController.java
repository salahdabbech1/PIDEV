/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Movie;

import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;


import java.io.File;
import java.sql.Connection;
import java.sql.Date;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.time.LocalDate;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.Iterator;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.application.Application;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.EventHandler;
import javafx.event.EventType;
import javafx.fxml.FXMLLoader;
import javafx.geometry.Pos;
import javafx.scene.Group;
import javafx.scene.Scene;
import javafx.scene.chart.PieChart;
import javafx.scene.control.Alert;
import javafx.scene.control.ComboBox;
import javafx.scene.control.DatePicker;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.KeyEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.HBox;
import javafx.scene.layout.VBox;
import javafx.scene.paint.Color;
import javafx.stage.FileChooser;
import javafx.stage.Modality;
import javafx.stage.Stage;
import javafx.util.Duration;
import org.controlsfx.control.Notifications;

/**
 *
 * @author bouyo
 */
public class MovieController implements Initializable {
    
    private Label label;
    @FXML
    private TextField FieldName;
    @FXML
    private DatePicker FieldRelease;
    @FXML
    private TableView<Movie> TableFilms;
    private TableColumn<Movie, Integer> ColID;
    @FXML
    private TableColumn<Movie, String> ColName;
    @FXML
    private TableColumn<Movie, String> ColGenre;
    @FXML
    private TableColumn<Movie, Date> ColRD;
    @FXML
    private TableColumn<Movie, String> ColIm;
    @FXML
    private Button BtnAdd;
    @FXML
    private Button BtnModify;
    @FXML
    private Button BtnRefresh;
    @FXML
    private Button ChooseIma;
    @FXML
    private Button RemoveRow;
    @FXML
    private ComboBox<String> GenreBox;
    @FXML
    private HBox hb;
    @FXML
    private ImageView imageFilm;
    @FXML
    private TextField FieldNb;
    @FXML
    private ComboBox<String> Boxxx;
    @FXML
    private ComboBox<String> Boxxx1;
    @FXML
    private ComboBox<String> Boxxx2;
    @FXML
    private ComboBox<String> Boxxx3;
    @FXML
    private ComboBox<String> Boxxx4;
    @FXML
    private ComboBox<String> Boxxx5;
    @FXML
    private ComboBox<String> Boxxx6;
    @FXML
    private ComboBox<String> Boxxx7;
    @FXML
    private TextField TextSearch;
    @FXML
    private Button showstat;
    @FXML
    private TextField FieldTrailer;
    @FXML
    private TableColumn<?, ?> ColTrailer;
    
    
    
    
        
        
    
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        setActors();
        showMovie();
        
        GenreBox.getItems().add("War");
        GenreBox.getItems().add("Action");
        GenreBox.getItems().add("Fantasy");
        GenreBox.getItems().add("Horror");
        GenreBox.getItems().add("Drama");
        GenreBox.getItems().add("Comedy");
        GenreBox.getItems().add("Cartoon");
        GenreBox.getItems().add("Sci-Fi");
        
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
    
    @FXML
    public void Statistic(){
        PieChartEx p= new PieChartEx();
        Stage s = new Stage();
        try {
            p.start(s);
        } catch (Exception ex) {
            Logger.getLogger(MovieController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    public class PieChartEx extends Application{

        @Override
        public void start(Stage primaryStage) throws Exception {
            Connection conn = getConnection();
            String query = "SELECT COUNT(genre) FROM `film` WHERE genre='Action'";
            Statement st;
            ResultSet rs;
            int action = 0;
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                action= rs.getInt("COUNT(genre)");
            }
            
            query = "SELECT COUNT(genre) FROM `film` WHERE genre='War'";
            int War = 0;
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                War= rs.getInt("COUNT(genre)");
            }
            
            query = "SELECT COUNT(genre) FROM `film` WHERE genre='Fantasy'";
            int fantasy = 0;
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                fantasy= rs.getInt("COUNT(genre)");
            }
            query = "SELECT COUNT(genre) FROM `film` WHERE genre='Horror'";
            int horror = 0;
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                horror= rs.getInt("COUNT(genre)");
            }
            query = "SELECT COUNT(genre) FROM `film` WHERE genre='Drama'";
            int drama = 0;
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                drama= rs.getInt("COUNT(genre)");
            }
            query = "SELECT COUNT(genre) FROM `film` WHERE genre='Comedy'";
            int comedy = 0;
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                comedy= rs.getInt("COUNT(genre)");
            }
            query = "SELECT COUNT(genre) FROM `film` WHERE genre='Cartoon'";
            int cartoon = 0;
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                cartoon= rs.getInt("COUNT(genre)");
            }
            query = "SELECT COUNT(genre) FROM `film` WHERE genre='Sci-Fi'";
            int scifi = 0;
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                scifi= rs.getInt("COUNT(genre)");
            }
            
            
            
            ObservableList<PieChart.Data> pieData = FXCollections.observableArrayList(
                    new PieChart.Data("War",  War),
                    new PieChart.Data("Action", action),
                    new PieChart.Data("Fantasy", fantasy),
                    new PieChart.Data("Horror", horror),
                    new PieChart.Data("Drama", drama),
                    new PieChart.Data("Comedy", comedy),
                    new PieChart.Data("Cartoon", cartoon),
                    new PieChart.Data("Sci-Fi", scifi)
            );
        
            PieChart pChart = new PieChart(pieData);
            
            Group root = new Group(pChart);
            Scene scene = new Scene(root,600,400);
            primaryStage.setTitle("Statistics Films :");
            primaryStage.setScene(scene);
            primaryStage.show();
            
        }
        
    
    }
    
    
    public ObservableList<Movie> getMovielist(){
        ObservableList<Movie> movieList = FXCollections.observableArrayList();
        Connection conn = getConnection();
        String query = "Select * from film";
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
    public void PushNotf(String title,String text){
        Notifications nb = Notifications.create()
                .title(title)
                .text(text)
                .graphic(null)
                .hideAfter(Duration.seconds(5))
                .position(Pos.BOTTOM_RIGHT)
                .onAction(new EventHandler<ActionEvent>(){
                    @Override
                    public void handle(ActionEvent event){
                        System.out.print("zzz");
                    }
                });
        if(title=="Success !")
            nb.showInformation();
        else if(title=="Error !")
            nb.showError();
    }
    
    public class ConfirmBox{
        
        boolean answer = false;
        
        public boolean Confirm(String title,String message){
            Stage window = new Stage();
            ImageView view = new ImageView("images/Front/info.png");
            view.setFitHeight(100);
            view.setFitWidth(100);
            view.setLayoutX(500);
            window.initModality(Modality.APPLICATION_MODAL);
            window.setTitle(title);
            window.setMinWidth(400);
            window.setMinHeight(200);
            Label label = new Label();
            label.setText(message);
            label.setStyle("-fx-text-fill:white;");

            Button yesButton = new Button("Yes");
            Button noButton = new Button("No");
            yesButton.setOnAction(e -> {
                answer = true ;
                window.close();
            });
            noButton.setOnAction(e -> {
                answer = false ;
                window.close();
            });
            AnchorPane layout= new AnchorPane();
            layout.setStyle("-fx-background-color: #001935");
            layout.getChildren().addAll(label,yesButton,noButton,view);
            view.setLayoutX(10);
            view.setLayoutY(10);
            label.setLayoutX(125);
            label.setLayoutY(40);
            label.setTextFill(Color.web("#e7e5e5"));
            yesButton.setPrefWidth(70);
            yesButton.setPrefHeight(30);
            yesButton.setLayoutX(150);
            yesButton.setLayoutY(100);
            noButton.setPrefWidth(70);
            noButton.setPrefHeight(30);
            noButton.setLayoutX(230);
            noButton.setLayoutY(100);
            Scene scene = new Scene(layout);
            window.setScene(scene);
            window.showAndWait();

            return answer;
        }
    }
    
    
    public void doneBox(String title,String message){
        Stage window = new Stage();
        ImageView view = new ImageView("images/Front/success.png");
        view.setFitHeight(100);
        view.setFitWidth(100);
        view.setLayoutX(500);
        window.initModality(Modality.APPLICATION_MODAL);
        window.setTitle(title);
        window.setMinWidth(400);
        window.setMinHeight(200);
        Label label = new Label();
        label.setText(message);
        
        
        Button closeButton = new Button("OK");
        closeButton.setOnAction( e -> window.close());
        AnchorPane layout= new AnchorPane();
        layout.getChildren().addAll(label,closeButton,view);
        layout.setStyle("-fx-background-color: #001935");
        view.setLayoutX(10);
        view.setLayoutY(10);
        label.setLayoutX(125);
        label.setLayoutY(40);
        label.setStyle("-fx-text-fill:white;");
        closeButton.setPrefWidth(100);
        closeButton.setPrefHeight(30);
        closeButton.setLayoutX(200);
        closeButton.setLayoutY(100);
        Scene scene = new Scene(layout);
        window.setScene(scene);
        window.showAndWait();
        
        
    }
    
    public void errorBox(String title,String message){
        Stage window = new Stage();
        ImageView view = new ImageView("images/Front/error.png");
        view.setFitHeight(100);
        view.setFitWidth(100);
        view.setLayoutX(500);
        window.initModality(Modality.APPLICATION_MODAL);
        window.setTitle(title);
        window.setMinWidth(500);
        window.setMinHeight(250);
        Label label = new Label();
        label.setText(message);
        label.setStyle("-fx-text-fill:white;");
        
        Button closeButton = new Button("OK");
        closeButton.setOnAction( e -> window.close());
        AnchorPane layout= new AnchorPane();
        layout.getChildren().addAll(label,closeButton,view);
        layout.setStyle("-fx-background-color: #001935");
        view.setLayoutX(10);
        view.setLayoutY(10);
        label.setLayoutX(125);
        label.setLayoutY(40);
        closeButton.setPrefWidth(100);
        closeButton.setPrefHeight(30);
        closeButton.setLayoutX(200);
        closeButton.setLayoutY(100);
        Scene scene = new Scene(layout);
        window.setScene(scene);
        window.showAndWait();
        
        
    }
    
    
    public void setActors(){
        Connection conn = getConnection();
        String query = "Select * from factor";
        Statement st;
        ResultSet rs;
        
        try{
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                Boxxx.getItems().add(rs.getString("name"));
                Boxxx1.getItems().add(rs.getString("name"));
                Boxxx2.getItems().add(rs.getString("name"));
                Boxxx3.getItems().add(rs.getString("name"));
                Boxxx4.getItems().add(rs.getString("name"));
                Boxxx5.getItems().add(rs.getString("name"));
                Boxxx6.getItems().add(rs.getString("name"));
                Boxxx7.getItems().add(rs.getString("name"));
            }
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
        }
    }
    @FXML
    public void SearchFilm(){
        String name = TextSearch.getText();
        ObservableList<Movie> movieList = FXCollections.observableArrayList();
        Connection conn = getConnection();
        String query = "Select * from film where (name like '%"+name+"%') or (genre like '%"+name+"%')";
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
//        ColID.setCellValueFactory(new PropertyValueFactory<>("id"));
//        ColID.cellFactoryProperty();
        ColName.setCellValueFactory(new PropertyValueFactory("name"));
        ColGenre.setCellValueFactory(new PropertyValueFactory("genre"));
        ColTrailer.setCellValueFactory(new PropertyValueFactory("trailer"));
        ColRD.setCellValueFactory(new PropertyValueFactory("rdate"));
        ColRD.cellFactoryProperty();
        ColIm.setCellValueFactory(new PropertyValueFactory("image"));
        
        TableFilms.setItems(movieList);
    }
//        String name = TextSearch.getText();
//        Connection conn = getConnection();
//        String query = "Select * from film where name LIKE 'Batman 2008'";
//        Statement st;
//        ResultSet rs;
//        int id=0;
//        
//        try{
//            st=conn.createStatement();
//            rs=st.executeQuery(query);
//            showMovie();
//        }
//        catch(Exception ex)
//        {
//            ex.printStackTrace();
//        }
//        
//    }
    public List getTeeest(int id){
        
        Connection conn = getConnection();
//        List<int> list=new ArrayList<>;
        List<Integer> list=new ArrayList<>();
        String query = "SELECT * FROM `filmactors` WHERE `Fid`= '"+id+"'";
        Statement st;
        ResultSet rs;
        
        try{
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                list.add(rs.getInt("id")) ;
            }
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
        }
        return list;
    }
    
    
    
    public List getFActors(int id){
        
        Connection conn = getConnection();
//        List<int> list=new ArrayList<>;
        List<Integer> list=new ArrayList<>();
        String query = "SELECT * FROM `filmactors` WHERE `Fid`= '"+id+"'";
        Statement st;
        ResultSet rs;
        
        try{
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                list.add(rs.getInt("Faid")) ;
            }
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
        }
        return list;
    }
    public int getIdActor(String name){
        Connection conn = getConnection();
        String query = "Select * from factor where name ='"+name+"'";
        Statement st;
        ResultSet rs;
        int id=0;
        
        try{
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                
                id= rs.getInt("id");
            }
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
        }
        return id;
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
    
    @FXML
    public void showMovie(){
        ObservableList<Movie> list = getMovielist();
//        ColID.setCellValueFactory(new PropertyValueFactory<>("id"));
//        ColID.cellFactoryProperty();
        ColName.setCellValueFactory(new PropertyValueFactory("name"));
        ColGenre.setCellValueFactory(new PropertyValueFactory("genre"));
        ColTrailer.setCellValueFactory(new PropertyValueFactory("trailer"));
        ColRD.setCellValueFactory(new PropertyValueFactory("rdate"));
        ColRD.cellFactoryProperty();
        ColIm.setCellValueFactory(new PropertyValueFactory("image"));
        
        TableFilms.setItems(list);
    }
    @FXML
    public void addField(ActionEvent a){
    int nb =  Integer.valueOf(FieldNb.getText());
    if (nb==1){
        Boxxx.setStyle("-visibility:shown");
    }
    if (nb==2){
        Boxxx.setStyle("-visibility:shown");
        Boxxx1.setStyle("-visibility:shown");
    }
    if (nb==3){
        Boxxx.setStyle("-visibility:shown");
        Boxxx1.setStyle("-visibility:shown");
        Boxxx2.setStyle("-visibility:shown");
    }
    if (nb==4){
        Boxxx.setStyle("-visibility:shown");
        Boxxx1.setStyle("-visibility:shown");
        Boxxx2.setStyle("-visibility:shown");
        Boxxx3.setStyle("-visibility:shown");
    }
    if (nb==5){
        Boxxx.setStyle("-visibility:shown");
        Boxxx1.setStyle("-visibility:shown");
        Boxxx2.setStyle("-visibility:shown");
        Boxxx3.setStyle("-visibility:shown");
        Boxxx4.setStyle("-visibility:shown");
    }
    if (nb==6){
        Boxxx.setStyle("-visibility:shown");
        Boxxx1.setStyle("-visibility:shown");
        Boxxx2.setStyle("-visibility:shown");
        Boxxx3.setStyle("-visibility:shown");
        Boxxx4.setStyle("-visibility:shown");
        Boxxx5.setStyle("-visibility:shown");
    }
    if (nb==7){
        Boxxx.setStyle("-visibility:shown");
        Boxxx1.setStyle("-visibility:shown");
        Boxxx2.setStyle("-visibility:shown");
        Boxxx3.setStyle("-visibility:shown");
        Boxxx4.setStyle("-visibility:shown");
        Boxxx5.setStyle("-visibility:shown");
        Boxxx6.setStyle("-visibility:shown");
    }
    if (nb==8){
        Boxxx.setStyle("-visibility:shown");
        Boxxx1.setStyle("-visibility:shown");
        Boxxx2.setStyle("-visibility:shown");
        Boxxx3.setStyle("-visibility:shown");
        Boxxx4.setStyle("-visibility:shown");
        Boxxx5.setStyle("-visibility:shown");
        Boxxx6.setStyle("-visibility:shown");
        Boxxx7.setStyle("-visibility:shown");
    }
    
    }
    
    public int getfilmID(String name){
        Connection conn = getConnection();
        String querye = "Select * from film where name ='"+name+"'";
        Statement st;
        ResultSet rs;
        int idF=0;
        
        try{
            st=conn.createStatement();
            rs=st.executeQuery(querye);
            while(rs.next()){
                
                idF= rs.getInt("id");
            }
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
        }
        return idF;
    }
    
    @FXML
    public void insertMovie(){
        
        
        
        String query = "INSERT INTO `film` (`id`, `name`, `genre`, `trailer`, `rdate`, `image`) VALUES (NULL, '"+ FieldName.getText() +"', '"+ GenreBox.getValue() +"', '"+ FieldTrailer.getText() +"', '"+FieldRelease.getValue() +"', '/images/Films/"+FileChooser()+"');";
        if(executeQuery(query)!=0)
        {
            int idF= getfilmID(FieldName.getText());
            int nb=Integer.valueOf(FieldNb.getText());
            int id =getIdActor(Boxxx.getValue()) ;
            int id1 =getIdActor(Boxxx1.getValue()) ;
            int id2 =getIdActor(Boxxx2.getValue()) ;
            int id3 =getIdActor(Boxxx3.getValue()) ;
            int id4 =getIdActor(Boxxx4.getValue()) ;
            int id5 =getIdActor(Boxxx5.getValue()) ;
            int id6 =getIdActor(Boxxx6.getValue()) ;
            int id7 =getIdActor(Boxxx7.getValue()) ;
            if(nb==1){
            String query1 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( "+id+ ", "+idF+ ") ;";
            executeQuery(query1);
            }
            if(nb==2){
            String query1 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( "+id+ ", "+idF+ "), ( "+id1+ ", "+idF+ ") ;";
            executeQuery(query1);
            }
            if(nb==3){
            String query1 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( "+id+ ", "+idF+ "), ( "+id1+ ", "+idF+ "), ( "+id2+ ", "+idF+ ") ;";
            executeQuery(query1);
            }
            if(nb==4){
            String query1 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( "+id+ ", "+idF+ "), ( "+id1+ ", "+idF+ "), ( "+id2+ ", "+idF+ "), ( "+id3+ ", "+idF+ ") ;";
            executeQuery(query1);
            }
            if(nb==5){
            String query1 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( "+id+ ", "+idF+ "), ( "+id1+ ", "+idF+ "), ( "+id2+ ", "+idF+ "), ( "+id3+ ", "+idF+ "), ( "+id4+ ", "+idF+ ") ;";
            executeQuery(query1);
            }
            if(nb==6){
            String query1 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( "+id+ ", "+idF+ "), ( "+id1+ ", "+idF+ "), ( "+id2+ ", "+idF+ "), ( "+id3+ ", "+idF+ "), ( "+id4+ ", "+idF+ "), ( "+id5+ ", "+idF+ ") ;";
            executeQuery(query1);
            }
            if(nb==7){
            String query1 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( "+id+ ", "+idF+ "), ( "+id1+ ", "+idF+ "), ( "+id2+ ", "+idF+ "), ( "+id3+ ", "+idF+ "), ( "+id4+ ", "+idF+ "), ( "+id5+ ", "+idF+ "), ( "+id6+ ", "+idF+ ") ;";
            executeQuery(query1);
            }
            if(nb==8){
            String query1 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( "+id+ ", "+idF+ "), ( "+id1+ ", "+idF+ "), ( "+id2+ ", "+idF+ "), ( "+id3+ ", "+idF+ "), ( "+id4+ ", "+idF+ "), ( "+id5+ ", "+idF+ "), ( "+id6+ ", "+idF+ "), ( "+id7+ ", "+idF+ ") ;";
            executeQuery(query1);
            }
            PushNotf("Success !","Your Film has been added into the database");
            doneBox("Success !","Your Film has been added into the database");
            
            
        }
        else
        {
            PushNotf("Error !","An error has occured check your inputs and try again");
            errorBox("Error !","An error has occured check your inputs and try again");
        }
        showMovie();
        
            
        
        
    }
//    public void deleteMovie(){
//        String query = "DELETE FROM `film` WHERE `film`.`id` = '"+Boxxx.getValue()+"'";
//        executeQuery(query);
//        showMovie();
//    }
    
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
    public void removeRow(){
        int idDelete=TableFilms.getSelectionModel().getSelectedItem().getId();
        ConfirmBox c = new ConfirmBox();
        boolean answer = c.Confirm("Confirm Delete !", "You sure wanna delete this Film ?");
        if (answer){
            String query = "DELETE FROM `film` WHERE `film`.`id` = '"+idDelete+"'";
            String query2 = "DELETE FROM `filmactors` WHERE `filmactors`.`Fid` = '"+idDelete+"'";
            executeQuery(query2);
            if (executeQuery(query)!=0)
            {
                PushNotf("Success !","Your Film has been deleted ");
                doneBox("Success !","Your Film has been deleted ");
            }
            else{
                PushNotf("Error !","An error has occured and the film wasnt deleted");
                errorBox("Error !","An error has occured and the film wasnt deleted");
                }
        }
        showMovie();
    }
    
    @FXML
    public void SelectRow(){
        List<Integer> list=new ArrayList<>();
        int id=TableFilms.getSelectionModel().getSelectedItem().getId();
        List<Integer> allActors=new ArrayList<>();
        allActors=getTeeest(id);
        FieldName.setText(TableFilms.getSelectionModel().getSelectedItem().getName());
        FieldTrailer.setText(TableFilms.getSelectionModel().getSelectedItem().getTrailer());
        GenreBox.setValue(TableFilms.getSelectionModel().getSelectedItem().getGenre());
//        Boxxx.setValue(getActorName(TableFilms.getSelectionModel().getSelectedItem().getIdactor()));
        FieldRelease.setValue(LocalDate.parse(TableFilms.getSelectionModel().getSelectedItem().getRdate().toString()));
        Image image = new Image(TableFilms.getSelectionModel().getSelectedItem().getImage());
        imageFilm.setImage(image);
        FieldNb.setText(Integer.toString(allActors.size()));
        list = getFActors(id);
        
//        for (Integer integer : list) {
//            Boxxx.setValue(getActorName(list.get(0)));
//            ;
//            
//        }
            Boxxx.setValue(getActorName(list.get(0)));
            Boxxx1.setValue(getActorName(list.get(1)));
            Boxxx2.setValue(getActorName(list.get(2)));
            Boxxx3.setValue(getActorName(list.get(3)));
            Boxxx4.setValue(getActorName(list.get(4)));
            Boxxx5.setValue(getActorName(list.get(5)));
            Boxxx6.setValue(getActorName(list.get(6)));
            Boxxx7.setValue(getActorName(list.get(7)));
            
    }
    @FXML
    public void ModifyRow(){
        int id=TableFilms.getSelectionModel().getSelectedItem().getId();
        int nb=Integer.valueOf(FieldNb.getText());
        List<Integer> allActors=new ArrayList<>();
        String query = "UPDATE `film` SET `name` = '"+ FieldName.getText() +"',`genre` = '"+ GenreBox.getValue() +"',`trailer` = '"+ FieldTrailer.getText() +"', `rdate` = '"+FieldRelease.getValue() + "', `image` = '/images/Films/"+FileChooser()+"' WHERE `film`.`id` = "+ id+";";
        if (executeQuery(query)!=0)
        {
            String query2="";
            String query3="";
            String query4="";
            String query5="";
            allActors=getTeeest(id);
            int changeId = getIdActor(Boxxx.getValue());
            System.out.println(nb);
            if(nb==1){

                int p=nb-1;
                int oldAid=allActors.get(p);
                query2 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid+" )  ;";
                executeQuery(query2);
            }
            if(nb==2){
                int oldAid=allActors.get(nb-2);
                query2 = "UPDATE `filmactors` SET `Faid` = '"+ changeId + "' WHERE `filmactors`.`id` = "+oldAid+";";
                executeQuery(query2);
                int oldAid2=0;
                if(allActors.size()==nb)
                {
                    oldAid2=allActors.get(nb-1);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx1.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                }
                else{
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx1.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                }
            }

            if(nb==3){
                int oldAid=allActors.get(nb-3);
                query2 = "UPDATE `filmactors` SET `Faid` = '"+ changeId + "' WHERE `filmactors`.`id` = "+oldAid+";";
                executeQuery(query2);
                int oldAid2=0;
                int oldAid3=0;
                if(allActors.size()==nb)
                {
                    oldAid2=allActors.get(nb-2);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx1.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-1);
                    query4 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx2.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query4);
                }
                else if(allActors.size()==nb-1)
                {
                    oldAid2=allActors.get(nb-2);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx1.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    query4 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx2.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query4);
                }
                else if(allActors.size()==nb-2)
                {
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx1.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query4 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx2.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query4);
                }
            }

            if(nb==4){
                int oldAid=allActors.get(nb-4);
                query2 = "UPDATE `filmactors` SET `Faid` = '"+ changeId + "' WHERE `filmactors`.`id` = "+oldAid+";";
                executeQuery(query2);
                int oldAid2=0;
                int oldAid3=0;
                int oldAid4=0;
                if(allActors.size()==nb)
                {
                    oldAid2=allActors.get(nb-3);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx1.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid3=allActors.get(nb-2);
                    query4 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx2.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid3+" )  ;";
                    executeQuery(query4);
                    oldAid4=allActors.get(nb-1);
                    query5 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx3.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid4+" )  ;";
                    executeQuery(query5);
                }
                else if(allActors.size()==nb-1)
                {
                    oldAid2=allActors.get(nb-3);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx1.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid3=allActors.get(nb-2);
                    query4 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx2.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid3+" )  ;";
                    executeQuery(query4);
                    query5 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx3.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query5);
                }
                else if(allActors.size()==nb-2)
                {
                    oldAid2=allActors.get(nb-3);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx1.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    query4 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx2.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query4);
                    query5 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx3.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query5);
                }
                else if(allActors.size()==nb-3)
                {
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx1.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query4 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx2.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query4);
                    query5 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx3.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query5);
                }
            }
            if(nb==5){
                int oldAid=allActors.get(nb-5);
                query2 = "UPDATE `filmactors` SET `Faid` = '"+ changeId + "' WHERE `filmactors`.`id` = "+oldAid+";";
                executeQuery(query2);
                int oldAid2=0;
                if(allActors.size()==nb)
                {
                    oldAid2=allActors.get(nb-4);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx1.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-3);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx2.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-2);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx3.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-1);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx4.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                }
                else if(allActors.size()==nb-1)
                {
                    oldAid2=allActors.get(nb-4);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx1.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-3);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx2.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-2);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx3.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx4.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                }
                else if(allActors.size()==nb-2)
                {
                    oldAid2=allActors.get(nb-4);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx1.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-3);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx2.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx3.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx4.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                }
                else if(allActors.size()==nb-3)
                {
                    oldAid2=allActors.get(nb-4);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx1.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx1.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx2.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx3.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                }
                else if(allActors.size()==nb-4)
                {
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx1.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx2.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx3.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx4.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                }
            }
            if(nb==6){
                int oldAid=allActors.get(nb-6);
                query2 = "UPDATE `filmactors` SET `Faid` = '"+ changeId + "' WHERE `filmactors`.`id` = "+oldAid+";";
                executeQuery(query2);
                int oldAid2=0;
                if(allActors.size()==nb)
                {
                    oldAid2=allActors.get(nb-5);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx1.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-4);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx2.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-3);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx3.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-2);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx4.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-1);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx5.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                }
                else if(allActors.size()==nb-1)
                {
                    oldAid2=allActors.get(nb-5);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx1.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-4);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx2.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-3);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx3.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-2);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx4.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx5.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                }
                else if(allActors.size()==nb-2)
                {
                    oldAid2=allActors.get(nb-5);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx1.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-4);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx2.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-3);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx3.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx4.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx5.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                }
                else if(allActors.size()==nb-3)
                {
                    oldAid2=allActors.get(nb-5);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx1.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-4);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx2.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx3.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx4.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx5.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                }
                else if(allActors.size()==nb-4)
                {
                    oldAid2=allActors.get(nb-5);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx1.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx2.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx3.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx4.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx5.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                }
                else if(allActors.size()==nb-4)
                {
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx1.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx2.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx3.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx4.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx5.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                }
            }


            if(nb==7){
                int oldAid=allActors.get(nb-7);
                query2 = "UPDATE `filmactors` SET `Faid` = '"+ changeId + "' WHERE `filmactors`.`id` = "+oldAid+";";
                executeQuery(query2);
                int oldAid2=0;
                if(allActors.size()==nb)
                {
                    oldAid2=allActors.get(nb-6);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx1.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-5);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx2.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-4);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx3.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-3);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx4.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-2);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx5.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-1);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx6.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                }
                else if(allActors.size()==nb-1)
                { 
                    oldAid2=allActors.get(nb-6);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx1.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-5);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx2.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-4);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx3.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-3);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx4.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-2);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx5.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx6.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                }
                else if(allActors.size()==nb-2)
                {
                    oldAid2=allActors.get(nb-6);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx1.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-5);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx2.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-4);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx3.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-3);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx4.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx5.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx6.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                }
                else if(allActors.size()==nb-3)
                {
                    oldAid2=allActors.get(nb-6);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx1.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-5);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx2.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-4);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx3.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx4.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx5.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx6.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                }
                else if(allActors.size()==nb-4)
                {
                    oldAid2=allActors.get(nb-6);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx1.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-5);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx2.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx3.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx4.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx5.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx6.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                }
                else if(allActors.size()==nb-5)
                {
                    oldAid2=allActors.get(nb-6);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx1.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx2.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx3.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx4.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx5.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx6.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                }
                else if(allActors.size()==nb-6)
                {
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx1.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx2.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx3.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx4.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx5.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx6.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                }
            }

            if(nb==8){
                int oldAid=allActors.get(nb-8);
                query2 = "UPDATE `filmactors` SET `Faid` = '"+ changeId + "' WHERE `filmactors`.`id` = "+oldAid+";";
                executeQuery(query2);
                int oldAid2=0;
                if(allActors.size()==nb)
                {
                    oldAid2=allActors.get(nb-7);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx1.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-6);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx2.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-5);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx3.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-4);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx4.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-3);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx5.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-2);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx6.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-1);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx7.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                }
                else if(allActors.size()==nb-1)
                { 
                    oldAid2=allActors.get(nb-7);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx1.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-6);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx2.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-5);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx3.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-4);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx4.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-3);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx5.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-2);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx6.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx7.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                }
                else if(allActors.size()==nb-2)
                {
                    oldAid2=allActors.get(nb-7);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx1.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-6);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx2.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-5);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx3.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-4);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx4.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-3);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx5.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx6.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx7.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                }
                else if(allActors.size()==nb-3)
                {
                    oldAid2=allActors.get(nb-7);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx1.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-6);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx2.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-5);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx3.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-4);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx4.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx5.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx6.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx7.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                }
                else if(allActors.size()==nb-4)
                {
                    oldAid2=allActors.get(nb-7);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx1.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-6);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx2.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-5);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx3.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx4.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx5.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx6.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx7.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                }
                else if(allActors.size()==nb-5)
                {
                    oldAid2=allActors.get(nb-7);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx1.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    oldAid2=allActors.get(nb-6);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx2.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx3.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx4.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx5.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx6.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx7.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                }
                else if(allActors.size()==nb-6)
                {
                    oldAid2=allActors.get(nb-7);
                    query3 = "UPDATE `filmactors` SET `Faid` = '"+ getIdActor(Boxxx1.getValue())+ "' WHERE ( `filmactors`.`id` = "+ oldAid2+" )  ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx2.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx3.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx4.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx5.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx6.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx7.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                }
                else if(allActors.size()==nb-7)
                {
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx1.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx2.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx3.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx4.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx5.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx6.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                    query3 = "INSERT INTO `filmactors` ( `Faid`, `Fid`) VALUES ( '"+getIdActor(Boxxx7.getValue())+ "', '"+id+ "') ;";
                    executeQuery(query3);
                }
            }
            PushNotf("Success !","Your Film has been modified");
            doneBox("Success !","Your Film has been modified");
        }
        
        else {
            PushNotf("Error !","An error has occured check your inputs and try again");
            errorBox("Error !","An error has occured check your inputs and try again");
        }
        showMovie();
    }
    
    @FXML
    String FileChooser(){
        FileChooser fc = new FileChooser();
        fc.setInitialDirectory(new File("C:\\Users\\bouyo\\Desktop\\Study\\S2\\Project\\JavaFX\\ArtLife\\src\\images\\Films"));
        fc.getExtensionFilters().add(new FileChooser.ExtensionFilter("Image Files", "*.jpg"));
        fc.getExtensionFilters().add(new FileChooser.ExtensionFilter("Image Files", "*.jpeg"));
        File f = fc.showOpenDialog(null);
        if(f != null)
        {
            System.out.println(f);
        }
        
        return f.getName();
    }

    
    
    
    
}

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
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Label;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.BorderPane;
import javafx.scene.layout.Pane;
import javafx.scene.paint.Color;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author bouyo
 */
public class MovieFController implements Initializable {

    @FXML
    private Pane pane;
    
    
    
    
    
    
    
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        ShowMovie();
        
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
    
    public void ShowMovie(){
        List<Movie> list=getMovielist();
        int Y=0;
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
            pane.getChildren().addAll(t1,t2,t3,t4,Name,Image,Rl,Genre,Actors);
            Y+=140;
        }
    
    }
    
    
    
    
    
    
    
    
}

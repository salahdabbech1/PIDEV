/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Movie;

import entite.Tactor;
import entite.Theatre;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import java.time.LocalDate;
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


public class TheatreFrontController implements Initializable {

    @FXML
    private Pane pane;
    
    
    
    
    
    
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        ShowTheatre();
        
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
        List<Theatre> theatreList=new ArrayList<>();
        Connection conn = getConnection();
        
        String query = "SELECT t.*, a.* from theatre t INNER JOIN ( SELECT id as actorID, name as nameActor from tactor ) a ON t.IdTactor=a.actorID";
        Statement st;
        ResultSet rs;
        
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            //Theatre theatres;
            while(rs.next()){
            Long id = rs.getLong("id");
            //String IdTactor=rs.getString("IdTactor");
            String name = rs.getString("name");
            String genre = rs.getString("genre");
            LocalDate rdate = rs.getDate("rdate").toLocalDate();
            String image = rs.getString("image");
            Tactor tactor = new Tactor(rs.getLong("actorID"),rs.getString("nameActor"),null,null,null);
            Theatre theatres = new Theatre(id, name,tactor, genre,rdate,image);
            theatreList.add(theatres);
                
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return theatreList;
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
                System.out.println("name");
            }
        }
        catch(Exception ex)
        {
            
            ex.printStackTrace();
            
        }
        return name;
    
    }
    public String getActors(Long idTheatre){
        //List<String> theatreList=new ArrayList<>();
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
                System.out.println("act");
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return name;
    }
    
    public void ShowTheatre(){
        List<Theatre> list=getTheatrelist();
        int Y=0;
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
            Label Genre = new Label(list.get(i).getGenre());
            Genre.setLayoutX(220);
            Genre.setLayoutY(Y+30);
            Genre.setStyle("-fx-text-fill:white;");
            Label Rl = new Label(list.get(i).getRdate().toString());
            Rl.setLayoutX(220);
            Rl.setLayoutY(Y+50);
            Rl.setStyle("-fx-text-fill:white;");
           /* Image im = new Image(list.get(i).getImage());
            ImageView Image = new ImageView(im);
            Image.setFitHeight(120);
            Image.setFitWidth(120);
            Image.setLayoutX(0);
            Image.setLayoutY(Y);*/
            Label Actors = new Label(getActors(list.get(i).getId()));
            Actors.setLayoutX(220);
            Actors.setLayoutY(Y+70);
            Actors.setMaxWidth(200);
            Actors.setStyle("-fx-text-fill:white;");
            pane.getChildren().addAll(t1,t2,t3,t4,Name,Rl,Genre,Actors);
            Y+=140;
            
        }
    
    }
}

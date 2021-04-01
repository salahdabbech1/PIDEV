/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Movie;
import entite.cinema;
import java.io.IOException;
import service.service_cinema;
import java.net.URL;
import java.sql.SQLException;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Group;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.ScrollPane;
import javafx.scene.control.TextArea;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;
import org.controlsfx.control.Rating;

/**
 * FXML Controller class
 *
 * @author salah
 */
public class CinemaFrontController implements Initializable {

    @FXML
    private AnchorPane pane;
      
    Stage stage=new Stage();
    @FXML
    private ScrollPane Scrollp;


    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
                                                          
        
         
        try {
            // TODO
            Showcinema(stage);
        } catch (SQLException ex) {
            Logger.getLogger(CinemaFrontController.class.getName()).log(Level.SEVERE, null, ex);
        } catch (IOException ex) {
            Logger.getLogger(CinemaFrontController.class.getName()).log(Level.SEVERE, null, ex);
        }
         
       
    }    
     
    public void Showcinema(Stage stage) throws SQLException, IOException{
        
        service_cinema sc= new service_cinema();
         List<cinema> list=sc.getlistcinema();
        int Y=0;
        int u=0;
        for (int i = 0; i < list.size(); i++) {
            Label t1 = new Label("Name :");
            Label t2 = new Label("les salles :");
            Label t3 = new Label("adresse :");
            Label t4 = new Label("rating");
            Label t5=  new Label("les chaises");
            Button rate = new Button("rate it");
            t1.setLayoutX(130);
            t1.setLayoutY(Y+10);
            t1.setStyle("-fx-text-fill:black;");
            t2.setLayoutX(130);
            t2.setLayoutY(Y+30);
            t2.setStyle("-fx-text-fill:black;");
            t3.setLayoutX(130);
            t3.setLayoutY(Y+50);
            t3.setStyle("-fx-text-fill:black;");
            t4.setLayoutX(130);
            t4.setLayoutY(Y+70);
            t4.setStyle("-fx-text-fill:black;");
            t5.setLayoutX(130);
            t5.setLayoutY(Y+90);
            t5.setStyle("-fx-text-fill:black;");
            rate.setTranslateX(150);
            rate.setTranslateY(Y+110);
              Group root = new Group(rate);
      // action event
       String Namee= list.get(i).getName();
        EventHandler<ActionEvent> event = new EventHandler<ActionEvent>() {
            public void handle(ActionEvent e)
            {

            
                try {
                    FXMLLoader loader = new FXMLLoader(getClass().getResource("rating.fxml"));
                 
                    Parent root = loader.load();
                    
                    RatingController pc = loader.getController();
                    
                    pc.setLbrate(Namee);
                    Scene scene = new Scene(root);
                    
                    stage.setScene(scene);
                    stage.show();
                } catch (IOException ex) {
                    Logger.getLogger(CinemaFrontController.class.getName()).log(Level.SEVERE, null, ex);
                }
             
            };
        };
                
        // when button is pressed
        rate.setOnAction(event);
        
            Label Name = new Label();
            Name.setText(list.get(i).getName());
            Name.setLayoutX(220);
            Name.setLayoutY(Y+10);
            Name.setStyle("-fx-text-fill:black;");
            Label Genre = new Label( Integer.toString(list.get(i).getNb_salle()));
            Genre.setLayoutX(220);
            Genre.setLayoutY(Y+30);
            Genre.setStyle("-fx-text-fill:black;");
            Label Rl = new Label(list.get(i).getAdresse());
            Rl.setLayoutX(220);
            Rl.setLayoutY(Y+50);
            Rl.setStyle("-fx-text-fill:black;");
            Image im;
            im = new Image(list.get(i).getImg());
            ImageView Image = new ImageView(im);
            Image.setFitHeight(120);
            Image.setFitWidth(120);
            Image.setLayoutX(0);
            Image.setLayoutY(Y);
            Label rating=new Label(Float.toString(list.get(i).getRate()));
            rating.setLayoutX(220);
            rating.setLayoutY(Y+70);
            rating.setMaxWidth(200);
            rating.setStyle("-fx-text-fill:black;");
             Label chaise=new Label(Integer.toString(list.get(i).getNum_chaise()));
            chaise.setLayoutX(220);
            chaise.setLayoutY(Y+90);
            chaise.setMaxWidth(200);
            chaise.setStyle("-fx-text-fill:black;");
            pane.getChildren().addAll(t1,t2,t3,t4,t5,rate,Image,Name,Rl,Genre,rating,chaise);
            Y+=140;
            
            
            u+=120;
            
                pane.setPrefHeight(u);
            
        }
        
            Scrollp.setContent(pane);
            Scrollp.setPannable(true);
            Scrollp.setHbarPolicy(ScrollPane.ScrollBarPolicy.ALWAYS);
       
    }

    
}

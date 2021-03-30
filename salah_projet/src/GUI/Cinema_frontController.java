/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;
import Entite.cinema;
import service.service_cinema;
import java.net.URL;
import java.sql.SQLException;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Label;
import javafx.scene.control.TextArea;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.AnchorPane;
import org.controlsfx.control.Rating;

/**
 * FXML Controller class
 *
 * @author salah
 */
public class Cinema_frontController implements Initializable {

    @FXML
    private AnchorPane pane;


    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        try {
            // TODO
            Showcinema();
        } catch (SQLException ex) {
            Logger.getLogger(Cinema_frontController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }    
     public void Showcinema() throws SQLException{
        service_cinema sc= new service_cinema();
         List<cinema> list=sc.getlistcinema();
        int Y=0;
        for (int i = 0; i < list.size(); i++) {
            Label t1 = new Label("Name :");
            Label t2 = new Label("les salles :");
            Label t3 = new Label("adresse :");
            Label t4 = new Label("rating");
            Label t5=  new Label("les chaises");
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
//            Image im;
//            im = new Image(list.get(i).getImg());
//            System.out.println(list.get(i).getImg());
//            ImageView Image = new ImageView(im);
//            Image.setFitHeight(120);
//            Image.setFitWidth(120);
//            Image.setLayoutX(0);
//            Image.setLayoutY(Y);
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
            pane.getChildren().addAll(t1,t2,t3,t4,t5,Name,Rl,Genre,rating,chaise);
            Y+=140;
            
        }
       
    }

    
}

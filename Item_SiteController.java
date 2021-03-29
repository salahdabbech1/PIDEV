/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Movie;

import static Movie.EventFController.indiceSite;
import Service.Event_Service;
import com.GoogleMaps.GoogleMapBike;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.layout.HBox;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author PersoPc
 */
public class Item_SiteController implements Initializable {

    @FXML
    private HBox itemC;
    @FXML
    private Label lieu;
    @FXML
    private Button btn_Google_Map;
    @FXML
    private Label libelle;
    @FXML
    private Button btn_produit_dispo;
       Event_Service service = new Event_Service() ;
    Event event = null;
       static Event site_pour_affichage_produit; 

    /**
     * Initializes the controller class.
     * @param url
     * @param rb
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        event = service.get_event(indiceSite);

        libelle.setText(event.getIdCinema());

        lieu.setText(event.getAdresse());
        // TODO
    }    

    @FXML
    private void handleClicks(ActionEvent event) throws Exception {
        if (event.getSource() == btn_Google_Map) {

            GoogleMapBike m = new GoogleMapBike();

            m.start(new Stage());

        }
         
                if(event.getSource()==btn_produit_dispo)
        {                 
            Node node = (Node) event.getSource();
            Stage stage = (Stage) node.getScene().getWindow();
            //stage.setMaximized(true);
            stage.close();
            Scene scene = new Scene(FXMLLoader.load(getClass().getResource("/Movie/Event.fxml")));
            stage.setScene(scene);
            stage.show();

        }
    }
    
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Movie;

import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.BorderPane;

/**
 * FXML Controller class
 *
 * @author bouyo
 */
public class HomeController implements Initializable {

    @FXML
    private BorderPane bp;
    @FXML
    private AnchorPane ap;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    
    
    
    
    
    private void loadPage(String page){
    Parent root = null;
        try {
            root = FXMLLoader.load(getClass().getResource(page+".fxml"));
        } catch (IOException ex) {
            Logger.getLogger(FactorController.class.getName()).log(Level.SEVERE, null, ex);
        }
        bp.setCenter(root);
    }
    
    
    @FXML
    private void Home(MouseEvent event) {
        bp.setCenter(ap);
    }

    @FXML
    private void Film(MouseEvent event) {
        loadPage("MovieF");
    }
    private void Concert(MouseEvent event) {
        loadPage("Concert");
    }
    private void Musician(MouseEvent event) {
        loadPage("Musician");
    }
      @FXML
    private void Theatre(MouseEvent event) {
        loadPage("TheatreFront");
    }
}

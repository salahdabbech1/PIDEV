/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gui;

import entité.Tactor;
import entité.Theatre;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Label;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.util.StringConverter;
import service.ServiceTactor;
import service.ServiceTheatre;

/**
 * FXML Controller class
 *
 * @author ahmed
 */
public class FrontController implements Initializable {

    @FXML
    private ComboBox<Theatre> comboTheatre;
    @FXML
    private ImageView imageView;
    @FXML
    private Label TheatreName;
    @FXML
    private Label Duration;
    @FXML
    private Label Rating;
   
    @FXML
    private Label Seats;
    @FXML
    private Label Place;
    @FXML
    private Button buyTicket;
    @FXML
    private Label Descrption;
    @FXML
    private Label Genre;
    @FXML
    private Label ActorsName;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        ServiceTheatre servT = new ServiceTheatre();
        
        try {
             ObservableList<Theatre> listTheatre=FXCollections.observableList(servT.read()); 
             comboTheatre.itemsProperty().setValue(listTheatre);
             convertComboDisplayList();
        } 
        catch (SQLException ex)
        {
            Logger.getLogger(TheatreController.class.getName()).log(Level.SEVERE, null, ex);
        }

       
    }
  private void convertComboDisplayList() {
        comboTheatre.setConverter(new StringConverter<Theatre>() {
            @Override
            public String toString(Theatre theatre) {
                return theatre.getName();
            }

            @Override
            public Theatre fromString(final String string) {
                return comboTheatre.getItems().stream().filter(theatre -> theatre.getName().equals(string)).findFirst().orElse(null);
            }
        });
       
    }   
  @FXML
  public void SelectedBox(){
        
        Image image = new Image("file:///"+comboTheatre.getSelectionModel().getSelectedItem().getImage());
        imageView.setImage(image);
      
        TheatreName.setText(comboTheatre.getSelectionModel().getSelectedItem().getName());
        Duration.setText(comboTheatre.getSelectionModel().getSelectedItem().getRdate().toString());
        Genre.setText(comboTheatre.getSelectionModel().getSelectedItem().getGenre());
        ActorsName.setText(comboTheatre.getSelectionModel().getSelectedItem().getTactor().getName().toString());
  }
  

    
}

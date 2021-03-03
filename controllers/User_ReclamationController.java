/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package controllers;

import Alert.AlertDialog;
import Service.Reclamation_Service;
import entities.reclamation;
import java.io.File;
import java.net.URL;
import java.sql.SQLException;
import java.time.LocalDate;
import java.util.Date;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.DatePicker;
import javafx.scene.control.Label;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TablePosition;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.control.cell.TextFieldTableCell;
import javafx.scene.image.ImageView;
import javafx.scene.input.DragEvent;
import javafx.scene.layout.Pane;
import javafx.scene.layout.VBox;
import javafx.util.Callback;
import javafx.util.converter.DateStringConverter;
import javafx.util.converter.FloatStringConverter;
import javafx.util.converter.IntegerStringConverter;

/**
 * FXML Controller class
 *
 * @author PersoPc
 */
public class User_ReclamationController implements Initializable {

    @FXML
    private VBox vboxdrawer;
    @FXML
    private ImageView imagechange;
    @FXML
    private Pane pnl_abonnement;
    @FXML
    private TextField txt_titre;
    @FXML
    private TextField txt_description;
    @FXML
    private Button btn_ajout;
    @FXML
    private ImageView Image_Qr;
        Reclamation_Service service = new Reclamation_Service();


    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void ajouter_reclamation(ActionEvent reclamation) throws SQLException {

        

        if (txt_titre.getText().equals("")) {
            AlertDialog.showNotification("Error !", "Champ vide de name", AlertDialog.image_cross);
        } else if (txt_titre.getText().matches("^[0-9]+$")) {
            AlertDialog.showNotification("Erreur txt_name !", "il faut saisir des caracteres  !", AlertDialog.image_cross);
        } else if (txt_description.getText().equals("")) {
            AlertDialog.showNotification("Error !", "Champ vide de adresse", AlertDialog.image_cross);
        } else if (txt_description.getText().matches("^[0-9]+$")) {
            AlertDialog.showNotification("Erreur adresse !", "il faut saisir des caracteres  !", AlertDialog.image_cross);
        } 
       
        
        else {
            reclamation r = new reclamation(String.valueOf(txt_titre.getText()),String.valueOf(txt_description.getText())); 
        
        service.Ajouter(r);

        
        
    }
    
}
}
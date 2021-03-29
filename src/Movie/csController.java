/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Movie;


import entite.cinema;
import entite.salle;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.stage.FileChooser;
import service.service_cinema;
import service.service_salle;

/**
 * FXML Controller class
 *
 * @author KARIMOOOO
 */
 
 


import entite.cinema;
import entite.salle;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.stage.FileChooser;
import service.service_cinema;
import service.service_salle;

/**
 * FXML Controller class
 *
 * @author KARIMOOOO
 */
public class csController implements Initializable {

    @FXML
    private TableView<cinema> tab_cin;
    @FXML
    private TableColumn<cinema, String> name_cin;
    @FXML
    private TableColumn<cinema, Integer> nb_sc;
    @FXML
    private TableColumn<cinema, String> adresse_cin;
    @FXML
    private TableColumn<cinema, String> img_cin;
    @FXML
    private TextField name_field;
    @FXML
    private TextField nbs_field;
    @FXML
    private TextField adresse_field;
    @FXML
    private TextField image_field;
    @FXML
    private Button btn_modif;
    @FXML
    private Button btn_del;
    @FXML
    private Button btn_ajout;
    @FXML
    private Button upload_img;
    @FXML
    private TextField idCinField;
    @FXML
    private TextField numChaiseField;
    @FXML
    private Button btn_addSalle;
    @FXML
    private Button btn_modSalle;
    @FXML
    private Button btn_suppSalle;
    @FXML
    private TableView<salle> tabsalle;
    @FXML
    private TableColumn<salle, Integer> NumChaise_col;
    @FXML
    private TableColumn<salle, Integer> idCin_col;
    @FXML
    private ImageView img;
    
    

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        try {
            afficher_cinema();
        } catch (SQLException ex) {
            Logger.getLogger(csController.class.getName()).log(Level.SEVERE, null, ex);
        }
        try {
            afficher_salle();
        } catch (SQLException ex) {
            Logger.getLogger(csController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }  
      @FXML
    private void ajouter_cinema(ActionEvent event) throws SQLException {
        cinema c = new cinema(name_field.getText(),Integer.parseInt(nbs_field.getText()),adresse_field.getText(),image_field.getText());
        service_cinema sc= new service_cinema();
        try {
            sc.add(c);
        } catch (SQLException ex) {
            Logger.getLogger(csController.class.getName()).log(Level.SEVERE, null, ex);
        }
        afficher_cinema();
        name_field.setText("");
        nbs_field.setText("");
        adresse_field.setText("");
        image_field.setText("");
    }
   @FXML
    private void ajouter_salle(ActionEvent event) throws SQLException {
        salle c = new salle(Integer.parseInt(idCinField.getText()),Integer.parseInt(numChaiseField.getText()));
        service_salle sc= new service_salle();
        try {
            sc.add(c);
        } catch (SQLException ex) {
            Logger.getLogger(csController.class.getName()).log(Level.SEVERE, null, ex);
        }
        afficher_salle();
        name_field.setText("");
        nbs_field.setText("");
        adresse_field.setText("");
        image_field.setText("");
    }
    private void afficher_cinema() throws SQLException{
        service_cinema sc= new service_cinema();
        ObservableList<cinema> list = (ObservableList<cinema>) sc.read();
        name_cin.setCellValueFactory(new PropertyValueFactory<>("name"));
         nb_sc.setCellValueFactory(new PropertyValueFactory<>("nbsalle"));
          nb_sc.cellFactoryProperty();
         adresse_cin.setCellValueFactory(new PropertyValueFactory<>("adresse"));
         img_cin.setCellValueFactory(new PropertyValueFactory<>("image"));
        tab_cin.setItems(list);
        
        }
    
     private void afficher_salle() throws SQLException{
        service_salle sc= new service_salle();
        ObservableList<salle> list = (ObservableList<salle>) sc.read();
        idCin_col.setCellValueFactory(new PropertyValueFactory<>("id_cine"));
        idCin_col.cellFactoryProperty();
        NumChaise_col.setCellValueFactory(new PropertyValueFactory<>("nb_chaise"));
        NumChaise_col.cellFactoryProperty();
            
         
    
        tabsalle.setItems(list);
        
        }
    @FXML
    private void delete_cinema(ActionEvent event) throws SQLException{
        int idDelete=tab_cin.getSelectionModel().getSelectedItem().getId();
        service_cinema sc=new service_cinema();
        sc.delete(idDelete);
        afficher_cinema();
        
    }
    @FXML
    private void delete_salle(ActionEvent event) throws SQLException{
        int idDelete=tabsalle.getSelectionModel().getSelectedItem().getId();
        service_salle sc=new service_salle();
        sc.delete(idDelete);
        afficher_salle();
        
    }
    @FXML
    public void SelectRow(){
        int id=tab_cin.getSelectionModel().getSelectedItem().getId();
        name_field.setText(tab_cin.getSelectionModel().getSelectedItem().getName());
        nbs_field.setText(Integer.toString(tab_cin.getSelectionModel().getSelectedItem().getNbsalle()));
        adresse_field.setText(tab_cin.getSelectionModel().getSelectedItem().getAdresse());
        image_field.setText(tab_cin.getSelectionModel().getSelectedItem().getImage());
        Image image = new Image(tab_cin.getSelectionModel().getSelectedItem().getImage());
        img.setImage(image);
    }
    @FXML
    public void SelectRowsalle(){
        int id=tabsalle.getSelectionModel().getSelectedItem().getId();
        idCinField.setText(Integer.toString(tabsalle.getSelectionModel().getSelectedItem().getId_cine()));
        numChaiseField.setText(Integer.toString(tabsalle.getSelectionModel().getSelectedItem().getNb_chaise()));
     

       
    }
    @FXML
    public void Modify_cinema(ActionEvent event) throws SQLException{
           
        int id=tab_cin.getSelectionModel().getSelectedItem().getId();
       
       cinema c = new cinema(id,name_field.getText(),Integer.parseInt(nbs_field.getText()),adresse_field.getText(),image_field.getText());
        service_cinema sc= new service_cinema();
        try {
           sc.update(c);
        } catch (SQLException ex) {
            Logger.getLogger(csController.class.getName()).log(Level.SEVERE, null, ex);
        }
        afficher_cinema();
        name_field.setText("");
        nbs_field.setText("");
        adresse_field.setText("");
        image_field.setText("");
    }
 @FXML
    private void Uploadfile(ActionEvent event) {
         FileChooser fc = new FileChooser();
        String path = fc.showOpenDialog(upload_img.getScene().getWindow()).getPath();
        image_field.setText(path);
    }
}
 
    
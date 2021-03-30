/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Entite.cinema;
import Entite.salle;
import java.io.File;
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
import javafx.scene.control.TextArea;
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
public class Cinema_salleController implements Initializable {

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
    private TableColumn<cinema, String> desc_cin;
    @FXML
    private TableColumn<cinema, Integer> rate_cin;
    @FXML
    private TextArea desc_field;
    
    

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        try {
            afficher_cinema();
        } catch (SQLException ex) {
            Logger.getLogger(Cinema_salleController.class.getName()).log(Level.SEVERE, null, ex);
        }
        try {
            afficher_salle();
        } catch (SQLException ex) {
            Logger.getLogger(Cinema_salleController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }  
      @FXML
    private void ajouter_cinema(ActionEvent event) throws SQLException {
        cinema c = new cinema(name_field.getText(),Integer.parseInt(nbs_field.getText()),adresse_field.getText(),image_field.getText(),desc_field.getText());
        service_cinema sc= new service_cinema();
        try {
            sc.add(c);
        } catch (SQLException ex) {
            Logger.getLogger(Cinema_salleController.class.getName()).log(Level.SEVERE, null, ex);
        }
        afficher_cinema();
    
        name_field.setText("");
        nbs_field.setText("");
        adresse_field.setText("");
        image_field.setText("");
        desc_field.setText("");
    }
   @FXML
    private void ajouter_salle(ActionEvent event) throws SQLException {
        salle c = new salle(Integer.parseInt(idCinField.getText()),Integer.parseInt(numChaiseField.getText()));
        service_salle sc= new service_salle();
        try {
            sc.add(c);
        } catch (SQLException ex) {
            Logger.getLogger(Cinema_salleController.class.getName()).log(Level.SEVERE, null, ex);
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
         nb_sc.setCellValueFactory(new PropertyValueFactory<>("nb_salle"));
          nb_sc.cellFactoryProperty();
         adresse_cin.setCellValueFactory(new PropertyValueFactory<>("adresse"));
         img_cin.setCellValueFactory(new PropertyValueFactory<>("img"));
         desc_cin.setCellValueFactory(new PropertyValueFactory<>("desc"));
         rate_cin.setCellValueFactory(new PropertyValueFactory<>("rate"));
          rate_cin.cellFactoryProperty();
         
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
        nbs_field.setText(Integer.toString(tab_cin.getSelectionModel().getSelectedItem().getNb_salle()));
        adresse_field.setText(tab_cin.getSelectionModel().getSelectedItem().getAdresse());
        image_field.setText(tab_cin.getSelectionModel().getSelectedItem().getImg());
        desc_field.setText(tab_cin.getSelectionModel().getSelectedItem().getDesc());
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
       
       cinema c = new cinema(id,name_field.getText(),Integer.parseInt(nbs_field.getText()),adresse_field.getText(),image_field.getText(),desc_field.getText());
        service_cinema sc= new service_cinema();
        try {
           sc.update(c);
        } catch (SQLException ex) {
            Logger.getLogger(Cinema_salleController.class.getName()).log(Level.SEVERE, null, ex);
        }
        afficher_cinema();
        name_field.setText("");
        nbs_field.setText("");
        adresse_field.setText("");
        image_field.setText("");
        desc_field.setText("");
    }
    @FXML
    public void Modify_salle(ActionEvent event) throws SQLException{
        int id=tabsalle.getSelectionModel().getSelectedItem().getId();
        salle s=new salle(id,Integer.parseInt(numChaiseField.getText()));
        service_salle sa=new service_salle();
        try {
           sa.update(s);
        } catch (SQLException ex) {
            Logger.getLogger(Cinema_salleController.class.getName()).log(Level.SEVERE, null, ex);
        }
        afficher_salle();
        idCinField.setText("");
        numChaiseField.setText("");
     
        
        
    }
 @FXML
    private void Uploadfile(ActionEvent event) {
         FileChooser fc = new FileChooser();
         fc.setInitialDirectory(new File("C:\\Users\\salah\\OneDrive\\Bureau\\java\\Salah_Java\\salah_projet\\src\\images"));
//        String path = fc.showOpenDialog(upload_img.getScene().getWindow()).getPath();
        fc.getExtensionFilters().add(new FileChooser.ExtensionFilter("Image Files", "*.jpg"));
        fc.getExtensionFilters().add(new FileChooser.ExtensionFilter("Image Files", "*.jpeg"));
        File f = fc.showOpenDialog(null);
        System.out.println(f.getName());
        image_field.setText("images\\"+f.getName () );
    }
}
 
    
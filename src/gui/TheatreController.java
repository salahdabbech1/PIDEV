/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gui;

import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;

import entité.Theatre;
import java.io.File;
import java.io.IOException;
import java.sql.Connection;
import java.sql.Date;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.time.LocalDate;
import java.time.ZoneId;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.Event;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.control.Alert;
import javafx.scene.control.ComboBox;
import javafx.scene.control.DatePicker;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.BorderPane;
import service.ServiceTheatre;

/**
 *
 * @author bouyo
 */
public class TheatreController implements Initializable {
    @FXML
    private AnchorPane ap2;
    @FXML
    private BorderPane bp2;
    @FXML
    private Label label;
    @FXML
    private TextField FieldName;
    @FXML
    private TextField FieldIdActor;
    private TextField FieldGenre;
    @FXML
    private DatePicker FieldRelease;
    @FXML
    private TableView<Theatre> TableTheatres;
    @FXML
    private TableColumn<Theatre, Integer> ColID;
    @FXML
    private TableColumn<Theatre, String> ColName;
    @FXML
    private TableColumn<Theatre, Integer> ColIdActor;
    @FXML
    private TableColumn<Theatre, String> ColGenre;
    @FXML
    private TableColumn<Theatre, Date> ColRD;
    @FXML
    private Button BtnAdd;
    private Button BtnDelete;
    @FXML
    private Button BtnModify;
    @FXML
    private Button BtnRefresh;
    private ComboBox<String> comBox;
    @FXML
    private Button RemoveRow;
    @FXML
    private ComboBox<String> GenreBox;
    
    
    @FXML
    private void handleButtonAction(ActionEvent event) throws SQLException {
        System.out.println("You clicked me!");
        
        if(event.getSource()==BtnAdd){
        insertTheatres();
        label.setText("Added !");
        }
        
        
    }
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        try {
            // TODO
            showTheatre();
        } catch (SQLException ex) {
            Logger.getLogger(TheatreController.class.getName()).log(Level.SEVERE, null, ex);
        }
        GenreBox.getItems().add("War");
        GenreBox.getItems().add("Action");
        GenreBox.getItems().add("Fantasy");
        GenreBox.getItems().add("Horror");
        GenreBox.getItems().add("Comedy");
        GenreBox.getItems().add("Cartoon");
        GenreBox.getItems().add("Sci-Fi");
        System.out.println(GenreBox.getValue());
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
    public ObservableList<Theatre> getTheatrelist() throws SQLException{
       ServiceTheatre servtthreat= new ServiceTheatre();  
       ObservableList<Theatre> theatreList = FXCollections.observableArrayList(servtthreat.read());
       return theatreList;
    }
    
@FXML
    public void showTheatre() throws SQLException{
        ObservableList<Theatre> list = getTheatrelist();
        ColID.setCellValueFactory(new PropertyValueFactory<>("id"));
        ColID.cellFactoryProperty();
        ColName.setCellValueFactory(new PropertyValueFactory<>("name"));
        ColIdActor.setCellValueFactory(new PropertyValueFactory<>("idTactor"));
        ColIdActor.cellFactoryProperty();
        ColGenre.setCellValueFactory(new PropertyValueFactory<>("genre"));
        ColRD.setCellValueFactory(new PropertyValueFactory<>("rdate"));
        ColRD.cellFactoryProperty();
        
        TableTheatres.setItems(list);
    }

       public void insertTheatres() throws SQLException{
        Theatre th = new Theatre(null, FieldName.getText(),Long.parseLong(FieldIdActor.getText()) ,GenreBox.getValue(),FieldRelease.getValue());
        ServiceTheatre serviceTheatre= new ServiceTheatre();
        serviceTheatre.add(th);
        showTheatre();
    }

    
    public void executeQuery(String query){
        Connection conn = getConnection();
        Statement st;
        try{
            st=conn.createStatement();
            st.executeUpdate(query);
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
    }
    
    @FXML
    public void removeRow() throws SQLException{
         ServiceTheatre serviceTheatre= new ServiceTheatre();
        serviceTheatre.delete(TableTheatres.getSelectionModel().getSelectedItem().getId());
        showTheatre();
 
    }
    
    @FXML
    public void SelectRow(){
        
        Long id=TableTheatres.getSelectionModel().getSelectedItem().getId();
        FieldName.setText(TableTheatres.getSelectionModel().getSelectedItem().getName());
        FieldIdActor.setText(Long.toString(TableTheatres.getSelectionModel().getSelectedItem().getidTactor()));
        GenreBox.setValue(TableTheatres.getSelectionModel().getSelectedItem().getGenre());
        FieldRelease.setValue(TableTheatres.getSelectionModel().getSelectedItem().getRdate());   
    }
    @FXML
    public void ModifyRow() throws SQLException{
        Theatre th = new Theatre(TableTheatres.getSelectionModel().getSelectedItem().getId(), FieldName.getText(),Long.parseLong(FieldIdActor.getText()) ,GenreBox.getValue(),FieldRelease.getValue());
        ServiceTheatre serviceTheatre= new ServiceTheatre();
        serviceTheatre.update(th);
        showTheatre();
    }
   }

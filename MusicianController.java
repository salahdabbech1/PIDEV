/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package crudaziz;

import java.net.URL;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.Date;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.DatePicker;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javafx.util.StringConverter;

/**
 *
 * @author HP
 */
public class MusicianController implements Initializable {
    
    @FXML
    private TextField fxid;
    @FXML
    private TextField fxname;
    @FXML
    private TextField fxpr;
    @FXML
    private TextField fxdesc;
    @FXML
    private DatePicker fxdate;
    @FXML
    private TextField fximage;
    @FXML
    private TableView<Musician> TableMusician;
    @FXML
    private TableColumn<Musician, Integer> ColID;
    @FXML
    private TableColumn<Musician, String> ColName;
    @FXML
    private TableColumn<Musician, String> Colpr;
    @FXML
    private TableColumn<Musician, String> ColDesc;
    @FXML
    private TableColumn<Musician, Date> ColDate;
    @FXML
    private TableColumn<Musician, ?> ColIm;
    @FXML
    private Button BtnAdd;
    @FXML
    private Button BtnModify;
    @FXML
    private Button BtnRefresh;
    @FXML
    private Button RemoveRow;
    
    
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
    
      public ObservableList<Musician> getMusicianlist() {
           ObservableList<Musician> musicianList = FXCollections.observableArrayList();
                   Connection conn = getConnection();
        String query = "SELECT * FROM musician";
        Statement st;
        ResultSet rs;
        
                try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            Musician musician;
            while(rs.next()){
                musician = new Musician(rs.getInt("id"),rs.getString("name"),rs.getString("prenom"),rs.getDate("born"),rs.getString("description"),rs.getString("image"));
                musicianList.add(musician);
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return musicianList;

        
        
      }
      
       @FXML
    public void showMusician(){
        ObservableList<Musician> list = getMusicianlist();
        ColID.setCellValueFactory(new PropertyValueFactory<Musician, Integer>("id"));
        ColName.setCellValueFactory(new PropertyValueFactory<Musician, String>("name"));
        Colpr.setCellValueFactory(new PropertyValueFactory<Musician, String>("prenom"));
        ColDate.setCellValueFactory(new PropertyValueFactory<Musician, Date>("born"));
        ColDesc.setCellValueFactory(new PropertyValueFactory<Musician, String>("description"));
        ColIm.setCellValueFactory(new PropertyValueFactory<>("image"));

        TableMusician.setItems(list);
       
    }
    
     public void insertMusician(){
      
         String query= "INSERT INTO `musician` (`id`, `name`, `prenom`, `born`, `description`, `image`) VALUES ('"+ fxid.getText()+"', '"+ fxname.getText()+"' , '"+fxpr.getText()+"' , '"+fxdate.getValue()+"' , '"+fxdesc.getText() +"', '"+fximage.getText() +"' )";
        executeQuery(query);
        showMusician();
        
        
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
    private void handleButtonAction(ActionEvent event) {
         if(event.getSource()==BtnAdd){
                System.out.println(fxname.getText());
        System.out.println(fxpr.getText());
        System.out.println(fxpr.getText());
        System.out.println(fxdate.getValue());
        System.out.println(fxdesc.getText());
        System.out.println(fximage.getText());
        insertMusician();
        }
    }
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
    showMusician();    }    

    @FXML
    private void SelectRow(MouseEvent event) {
    }

    @FXML
    private void ModifyRow(ActionEvent event) {
        String query = "UPDATE `musician` SET `name` = '"+ fxname.getText() +"',`prenom` = '"+ fxpr.getText() +"', `born` = '"+fxdate.getValue() + "', `description` = '"+fxdesc.getText()+"' WHERE id = "+ fxid.getText() +"";
        executeQuery(query);
        showMusician();
    }

    @FXML
    private void showMusician(ActionEvent event) {
    }

    @FXML
    private void removeRow(ActionEvent event) {
         int idDelete=TableMusician.getSelectionModel().getSelectedItem().getId();
        String query = "DELETE FROM `musician` WHERE `musician`.`id` = '"+idDelete+"'";
        executeQuery(query);
         showMusician();
    }
    
}

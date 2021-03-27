/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projet;

import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.Date;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.time.LocalDate;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.SelectionMode;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.control.cell.TextFieldTableCell;
import javafx.scene.input.MouseEvent;
import javafx.stage.Stage;
import projet.entite.ticket;
import static utils.DatabaseConnection.getConn;

/**
 * FXML Controller class
 *
 * @author KARIMOOOO
 */
public class MyTicketController implements Initializable {

    @FXML
    private TableColumn<ticket,String> ColTidUser;
    @FXML
    private TableColumn<ticket,Date> ColTDate;
    @FXML
    private TableColumn<ticket, String> ColTdCinema;
    @FXML
    private TableColumn<ticket, Integer> ColTidSalle;
    @FXML
    private TableColumn<ticket, String> ColTchaise;
    @FXML
    private TableColumn<ticket, String> ColTEvent;
    @FXML
    private TableColumn<ticket, Integer> ColMontant;
    @FXML
    private TableView<ticket> tabTick;
    @FXML
    private Button detailedViewButton;
    @FXML
    private Label lbTick;
    @FXML
    private Button BACKFR;

    /**
     * Initializes the controller class.
     */
     public void setLbNameT(String name) {
        this.lbTick.setText(name);
         
     
   }
    @Override
    public void initialize(URL url, ResourceBundle rb) {
      String name=  this.lbTick.getText();
        try { 
            showTick(name);
        } catch (SQLException ex) {
            Logger.getLogger(MyTicketController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }    

    @FXML
    private void SelectRowRes(MouseEvent event) {
         
        this.detailedViewButton.setDisable(false);
     
    }
    @FXML
     public void changeSceneToDetailedView(ActionEvent event) throws IOException
    {
        FXMLLoader loader = new FXMLLoader();
        loader.setLocation(getClass().getResource("TicketView.fxml"));
        Parent tableViewParent = loader.load();
        
        Scene tableViewScene = new Scene(tableViewParent);
        
        //access the controller and call a method
       TicketViewController controller = loader.getController();
        controller.initData(tabTick.getSelectionModel().getSelectedItem());
        
        //This line gets the Stage information
        Stage window = (Stage)((Node)event.getSource()).getScene().getWindow();
        
        window.setScene(tableViewScene);
        window.show();
    }
     @FXML
    private void closeBackButtonOnAction(ActionEvent event) {
          Stage stage =(Stage) BACKFR.getScene().getWindow();
        stage.close();
    }
 public ObservableList<ticket> getTick(String name){
        ObservableList<ticket> ResList = FXCollections.observableArrayList();
        Connection conn = getConn();
        String Uqueri = "select * from ticket where idUser='"+name+"'";
        Statement st;
        ResultSet rs;
        
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(Uqueri);
            ticket tickets;
            while(rs.next()){
              
                tickets = new ticket(rs.getInt("id"),rs.getString("idUser"),rs.getString("idCinema"),rs.getInt("idSalle"),rs.getString("idEvent"),rs.getInt("montant"),rs.getDate("date").toLocalDate(),rs.getString("chaise"));
                ResList.add(tickets);
                


                  
               // Boxxx.getItems().add(rs.getString("id"));
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return ResList;
    }
 public void showTick(String name) throws SQLException{
    /*service_reservation sc= new service_reservation();
        ObservableList<ticket> list = (ObservableList<ticket>) sc.read();*/
    ObservableList<ticket> list = getTick(name);
       
      //  ColResid.setCellValueFactory(new PropertyValueFactory<>("id"));
        //ColResid.cellFactoryProperty();
         ColTidUser.setCellValueFactory(new PropertyValueFactory<>("idUser"));
         ColTidUser.cellFactoryProperty();
         ColTDate.setCellValueFactory(new PropertyValueFactory<>("date"));
        ColTDate.cellFactoryProperty();
        ColTdCinema.setCellValueFactory(new PropertyValueFactory<>("idCinema"));
         ColTdCinema.cellFactoryProperty();
         
        ColTidSalle.setCellValueFactory(new PropertyValueFactory<>("idSalle"));
        ColTidSalle.cellFactoryProperty();
                ColTchaise.setCellValueFactory(new PropertyValueFactory<>("chaise"));

        ColTEvent.setCellValueFactory(new PropertyValueFactory<>("idEvent"));
        ColTEvent.cellFactoryProperty();
        ColMontant.setCellValueFactory(new PropertyValueFactory<>("montant"));
        ColMontant.cellFactoryProperty();
        tabTick.setItems(list);
    }

    @FXML
    private void changeScreenButtonPushed(ActionEvent event) {
    }
    
    
    
}

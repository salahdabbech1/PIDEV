/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projet;

import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Label;
import javafx.stage.Stage;
import projet.entite.ticket;

/**
 * FXML Controller class
 *
 * @author KARIMOOOO
 */
public class TicketViewController implements Initializable {

    @FXML
    private Label lbName;
    @FXML
    private Label lbDate;
    @FXML
    private Label lbChaise;
    @FXML
    private Label lbEvent;
    @FXML
    private Label lbCinema;
    @FXML
    private Label lbSalle;
 private ticket selectedTicket;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }  
     public void initData(ticket ticket)
    {
        selectedTicket = ticket;
        lbName.setText(selectedTicket.getIdUser());
       
        lbDate.setText(selectedTicket.getDate().toString());
        lbSalle.setText(Integer.toString(selectedTicket.getIdSalle()));
         lbChaise.setText(selectedTicket.getChaise());
          lbEvent.setText(selectedTicket.getIdEvent());
           lbCinema.setText(selectedTicket.getIdCinema());
         
    }
   /* @FXML
    private void closeBackButtonOnAction(ActionEvent event) {
          Stage stage =(Stage) backfront.getScene().getWindow();
        stage.close();
    }*/
}

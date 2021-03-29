/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Movie;

import Service.Reclamation_Service;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.DatePicker;
import javafx.scene.control.TextField;
import javafx.scene.image.ImageView;
import javafx.scene.layout.Pane;
import javafx.scene.layout.VBox;
import javafx.util.Duration;
import org.controlsfx.control.Notifications;
import java.time.Instant;
import java.time.LocalDate;
import java.time.LocalDateTime;
import java.time.ZoneId;
import java.util.Date;

/**
 * FXML Controller class
 *
 * @author PersoPc
 */
public class ReclamationFController implements Initializable {

    @FXML
    private VBox vboxdrawer;
    @FXML
    private ImageView imagechange;
    @FXML
    private Pane pnl_abonnement;
    @FXML
    private Button btn_ajout;
    @FXML
    private TextField txt_description;
    @FXML
    private TextField txt_titre;
    @FXML
    private DatePicker datere;
        Reclamation_Service service = new Reclamation_Service();


    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void ajouter_reclamation(ActionEvent event) throws SQLException {
           LocalDate d = LocalDate.now();
        Date date = java.sql.Date.valueOf(d);
                    Date dd = new java.sql.Date(new Date(datere.getEditor().getText()).getTime());

        reclamation r = new reclamation(txt_titre.getText(),txt_description.getText(),(java.sql.Date)dd);
        
        service.Ajouter(r);
        notificationadd();
    }

    private void notificationadd() {
// Image image;
      //  image = new Image("/image/tik.png");
        Notifications notifications=Notifications.create();
      //  notifications.graphic(new ImageView(image));
        notifications.text("Add succsesfully");
        notifications.title("Success message");
        notifications.hideAfter(Duration.seconds(2));
        notifications.show();    }
    
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;
import Entite.cinema;
import service.service_cinema;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import org.controlsfx.control.Rating;

/**
 * FXML Controller class
 *
 * @author salah
 */
public class RatingController implements Initializable {

    @FXML
    private Rating star;
    @FXML
    private Button rate;
    @FXML
    private Button exit;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    } 
    @FXML
private void ajouter_rate(ActionEvent event) throws SQLException {
    service_cinema sc =new service_cinema();
    cinema c=new cinema(4,"",0,"","","");
    sc.insert_rate(c, star.getRating());
}
}

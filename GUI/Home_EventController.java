/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package GUI;

import Alert.AlertDialog;
import Service.Event_Service;
import entities.Event;
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
public class Home_EventController implements Initializable {

    @FXML
    private VBox vboxdrawer;
    @FXML
    private ImageView imagechange;
    @FXML
    private Label fullName;
    @FXML
    private Button btn_affichage;
    @FXML
    private Button btn_back;
    @FXML
    private Button btnSignout;
    @FXML
    private Pane pnl_abonnement;
    @FXML
    private TextField txt_Seach;
    @FXML
    private TableView<Event> tabview;
    @FXML
    private TableColumn<Event, Integer> col_id;
    @FXML
    private TableColumn<Event, Date> col_dated;
    @FXML
    private TableColumn<Event, Date> col_datef;
    @FXML
    private TableColumn<Event, String> col_name;
    @FXML
    private TableColumn<Event, String> col_type;
    @FXML
    private TableColumn<Event, String> col_adresse;
    @FXML
    private TableColumn<Event, Integer> col_idcinema;
    @FXML
    private TableColumn<Event, Integer> col_idcontent;
    @FXML
    private TextField txt_id;
    @FXML
    private Button Ajouter;
    @FXML
    private ImageView Image_Qr;
    @FXML
    private DatePicker txt_datedeb;
    @FXML
    private DatePicker txt_datefin;
    @FXML
    private TextField txt_name;
    @FXML
    private TextField txt_adresse;
    @FXML
    private TextField txt_type;
    @FXML
    private TextField txt_idcontent;
    @FXML
    private TextField txt_idcinema;
    @FXML
    private ImageView imageview;
    Event_Service service = new Event_Service();
    private TableColumn<Event, String> col_btnDelet;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
       tabview.setEditable(true);
               Modifier();

        try {
            refreche();
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
                tabview.setEditable(true);

        col_btnDelet = new TableColumn("Supprimer");
 javafx.util.Callback<TableColumn<Event, String>, TableCell<Event, String>> cellFactory
                = new Callback<TableColumn<Event, String>, TableCell<Event, String>>() {
            public TableCell call(final TableColumn<Event, String> param) {
                final TableCell<Event, String> cell = new TableCell<Event, String>() {

                    final Button btn = new Button("supprimer");

                    @Override
                    public void updateItem(String item, boolean empty) {
                        super.updateItem(item, empty);
                        if (empty) {
                            setGraphic(null);
                            setText(null);
                        } else {
                            btn.setOnAction(Evenement -> {
                                Event u = getTableView().getItems().get(getIndex());

                             

                          
                              
                                try {
                                    service.Supprimer(u.getId());
                                } catch (SQLException ex) {
                                    Logger.getLogger(Home_EventController.class.getName()).log(Level.SEVERE, null, ex);
                                }
                               

                                try {
                                    refreche();
                                } catch (SQLException ex) {
                                  
                                }

                            });
                            setGraphic(btn);
                            setText(null);
                        }
                    }
                };
                return cell;
            }
        };
        col_btnDelet.setCellFactory(cellFactory);
        tabview.getColumns().add(col_btnDelet);
    }    

    @FXML
    private void handleClicks(ActionEvent event) {
    }

    @FXML
    private void ajouter_Event(ActionEvent event) throws SQLException {
         float res1 = 0;
        float res2 = 0;
        LocalDate d = LocalDate.now();
        Date date = java.sql.Date.valueOf(d);
        if (txt_datefin.getValue() != null && txt_datedeb.getValue() != null) {

            Date dd = new java.sql.Date(new Date(txt_datedeb.getEditor().getText()).getTime());

            Date df = new java.sql.Date(new Date(txt_datefin.getEditor().getText()).getTime());

            long diff1 = df.getTime() - dd.getTime();

            long diff = dd.getTime() - date.getTime();
            res1 = (diff / (1000 * 60 * 60 * 24));
            res2 = (diff1 / (1000 * 60 * 60 * 24));
        }

        if (txt_name.getText().equals("")) {
            AlertDialog.showNotification("Error !", "Champ vide de name", AlertDialog.image_cross);
        } else if (txt_name.getText().matches("^[0-9]+$")) {
            AlertDialog.showNotification("Erreur txt_name !", "il faut saisir des caracteres  !", AlertDialog.image_cross);
        } else if (txt_datefin.getValue() == null || txt_datedeb.getValue() == null) {

            AlertDialog.showNotification("Erreur Date !", "Vérifier votre champs !", AlertDialog.image_cross);
        } else if ((res1 < 0)) {

            AlertDialog.showNotification("Erreur Date !", "Vérifier votre date !", AlertDialog.image_cross);

        } else if ((res2 < 0)) {

            AlertDialog.showNotification("Erreur Date !", "Aujourd'hui est " + date, AlertDialog.image_cross);

        } else if (txt_adresse.getText().equals("")) {
            AlertDialog.showNotification("Error !", "Champ vide de adresse", AlertDialog.image_cross);
        } else if (txt_adresse.getText().matches("^[0-9]+$")) {
            AlertDialog.showNotification("Erreur adresse !", "il faut saisir des caracteres  !", AlertDialog.image_cross);
        } 
       
        
        
        
        
        
        else {

          
            Date dd = new java.sql.Date(new Date(txt_datedeb.getEditor().getText()).getTime());

            Date df = new java.sql.Date(new Date(txt_datefin.getEditor().getText()).getTime());

            Event e = new Event((java.sql.Date)dd, (java.sql.Date)df,Integer.valueOf(txt_idcontent.getText()),Integer.valueOf(txt_idcinema.getText()),String.valueOf(txt_adresse.getText()),String.valueOf(txt_type.getText()), String.valueOf(txt_name.getText())); 
        
        service.Ajouter(e);
refreche();


        }
    
    
    }

    @FXML
    private void handleDragOver(DragEvent event) {
    }

    @FXML
    private void handleDrop(DragEvent event) {
    }
    public void refreche() throws SQLException {
                col_id.setCellValueFactory(new PropertyValueFactory<>("id"));
             col_dated.setCellValueFactory(new PropertyValueFactory<>("DateDeb"));
        col_dated.setCellFactory(TextFieldTableCell.forTableColumn(new DateStringConverter()));
          col_datef.setCellValueFactory(new PropertyValueFactory<>("DateFin"));
        col_datef.setCellFactory(TextFieldTableCell.forTableColumn(new DateStringConverter()));
         col_idcontent.setCellValueFactory(new PropertyValueFactory<>("idContent"));
        col_idcontent.setCellFactory(TextFieldTableCell.forTableColumn(new IntegerStringConverter()));
  col_idcinema.setCellValueFactory(new PropertyValueFactory<>("idCinema"));
        col_idcinema.setCellFactory(TextFieldTableCell.forTableColumn(new IntegerStringConverter()));
col_adresse.setCellValueFactory(new PropertyValueFactory<>("Adresse"));
        col_adresse.setCellFactory(TextFieldTableCell.<Event>forTableColumn());
           col_type.setCellValueFactory(new PropertyValueFactory<>("Type"));
        col_type.setCellFactory(TextFieldTableCell.<Event>forTableColumn());
        col_name.setCellValueFactory(new PropertyValueFactory<>("Name"));
        col_name.setCellFactory(TextFieldTableCell.<Event>forTableColumn());
        tabview.getItems().clear();
        tabview.setItems(service.Affichertout());
        
        
    }
public void Modifier()
    {
               
                   col_dated.setOnEditCommit((TableColumn.CellEditEvent<Event, Date> event) -> {
            TablePosition<Event, Date> pos = event.getTablePosition();
           
            Date dated = event.getNewValue();
     
 
      
         java.sql.Date dd=  new java.sql.Date(  dated.getTime());
            int row = pos.getRow();
            Event ab = event.getTableView().getItems().get(row);
  
            ab.setDateDeb(dd);

                    try {
                       service.Modifier(ab,ab.getId());
                    } catch (SQLException ex) {
                        System.out.println(ex.getMessage());
                    }
        });       
                
    } 
    
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Movie;

import Service.Reclamation_Service;
import com.itextpdf.text.Document;
import com.itextpdf.text.Element;
import com.itextpdf.text.Paragraph;
import com.itextpdf.text.pdf.PdfPCell;
import com.itextpdf.text.pdf.PdfPTable;
import com.itextpdf.text.pdf.PdfWriter;
import java.io.FileOutputStream;
import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Button;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.Pane;
import javafx.scene.layout.VBox;
import javafx.util.Callback;

/**
 * FXML Controller class
 *
 * @author PersoPc
 */
public class ReclamationBController implements Initializable {

    @FXML
    private TextField txt_Seach;
    @FXML
    private TableView<reclamation> tabview;
    @FXML
    private TableColumn<reclamation, Integer> col_id;
    @FXML
    private TableColumn<reclamation, String> col_Description;
    @FXML
    private TableColumn<reclamation, String> col_Titre;
    @FXML
    private TableColumn<reclamation, String> col_traite;
    @FXML
    private TableColumn<reclamation, String> col_date;
    @FXML
    private Button btn_Traiter;
    @FXML
    private Button pdf;
    @FXML
    private ImageView Image_rec;
       private Reclamation_Service service = new Reclamation_Service();
    private TableColumn<reclamation, String> col_btnDelet;
        reclamation reclamation;
    
    @FXML
    private Pane bp;
    @FXML
    private AnchorPane ap;


    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
                               search();

         try {
            refreche();
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    setCellfromtabletoImage();
        tabview.setEditable(true);
        
         col_btnDelet = new TableColumn("Supprimer");
        
        
        
                    javafx.util.Callback<TableColumn<reclamation, String>, TableCell<reclamation, String>> cellFactory
                = new Callback<TableColumn<reclamation, String>, TableCell<reclamation, String>>() {
            public TableCell call(final TableColumn<reclamation, String> param) {
                final TableCell<reclamation, String> cell = new TableCell<reclamation, String>() {

                    final Button btn = new Button("supprimer");

                    @Override
                    public void updateItem(String item, boolean empty) {
                        super.updateItem(item, empty);
                        if (empty) {
                            setGraphic(null);
                            setText(null);
                        } else {
                            btn.setOnAction(event -> {
                                reclamation u = getTableView().getItems().get(getIndex());
                            
                          
                              
                              
                                    service.Supprimer(u.getId());
                                
                               

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
         
        // TODO
    }    

    @FXML
    private void Traiter_Reclamation(ActionEvent event) throws SQLException {
       
         if (reclamation.getTraiter().equals("Traite"))
        {
                     
        }
           else
        {
            reclamation.setTraiter("Traite");
            service.Modifier(reclamation, reclamation.getId());
       
                      refreche();
        
        
        }
    }
    @FXML
    private void fairepdf(ActionEvent event) {
          Document document = new Document();
        try {

            PdfWriter.getInstance(document, new FileOutputStream("reclamation_users_admin.pdf"));
            document.open();
            Paragraph ph1 = new Paragraph("Bienvenue a ArtLife!");
            Paragraph ph2 = new Paragraph(".");
            PdfPTable table = new PdfPTable(3);
         
   
 
   
            //On créer l'objet cellule.
            PdfPCell cell;
           
            //contenu du tableau.
            table.addCell("Description : ");
            table.addCell("Titre : ");
            table.addCell("Date : ");

             
            service.Affichertout().forEach(e
                    -> {
                 table.addCell(e.getTitre());
             
		table.setHorizontalAlignment(Element.ALIGN_CENTER);

               
                table.addCell(String.valueOf(e.getDescription()));
                                table.addCell(String.valueOf(e.getDatere()));

             
                
               
   
    //Scale to new height and new width of image

    //Add to document

             
            }
            );
            document.add(ph1);
            document.add(ph2);
            document.add(table);
            document.addAuthor("ArtLife");
        } catch (Exception e) {
            System.out.println(e);
        }
        document.close();
            
        
    }

    private void refreche() throws SQLException {

        col_Titre.setCellValueFactory(new PropertyValueFactory<>("Titre"));
          col_id.setCellValueFactory(new PropertyValueFactory<>("id"));
  col_Description.setCellValueFactory(new PropertyValueFactory<>("Description"));
    col_date.setCellValueFactory(new PropertyValueFactory<>("datere"));
  col_traite.setCellValueFactory(new PropertyValueFactory<>("traiter"));      
        tabview.getItems().clear();
        tabview.setItems(service.Affichertout());

    }

    private void setCellfromtabletoImage() {
tabview.setOnMouseClicked(e -> {

            reclamation rec = tabview.getItems().get(tabview.getSelectionModel().getSelectedIndex());
            reclamation = tabview.getItems().get(tabview.getSelectionModel().getSelectedIndex());
     
          }
        );
    }

public void search() {
        txt_Seach.setOnKeyReleased(e
                -> {
            if (txt_Seach.getText().equals("") ) {

                try {
                    refreche();
                } catch (SQLException ex) {
                        System.out.println(ex.getMessage());
                }

            } else {

                try {
                  col_id.setCellValueFactory(new PropertyValueFactory<>("id"));
                    col_Description.setCellValueFactory(new PropertyValueFactory<>("Description"));
                    col_Titre.setCellValueFactory(new PropertyValueFactory<>("Titre"));
                   col_traite.setCellValueFactory(new PropertyValueFactory<>("traiter"));
                     col_date.setCellValueFactory(new PropertyValueFactory<>("datere"));
                  
                    tabview.getItems().clear();
                    tabview.setItems(service.serach(txt_Seach.getText()));

                } catch (SQLException ex) {
                     System.out.println(ex.getMessage());
                }
        

            }
        }
        );

    }
private void loadPage(String page){
    Parent root = null;
        try {
            root = FXMLLoader.load(getClass().getResource(page+".fxml"));
        } catch (IOException ex) {
            Logger.getLogger(FactorController.class.getName()).log(Level.SEVERE, null, ex);
        }
      //  bp.setCenter(root);
    }

    @FXML
    private void Event(MouseEvent event) {
                      //  bp.setCenter(ap);

    }

    @FXML
    private void Film(MouseEvent event) {
    }

    @FXML
    private void Actor(MouseEvent event) {
    }

    @FXML
    private void Concert(MouseEvent event) {
    }

    @FXML
    private void Musician(MouseEvent event) {
    }




    
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Movie;

import javafx.scene.control.TextArea;
import java.io.File;
import java.io.FileNotFoundException;
import java.net.URL;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.collections.transformation.FilteredList;
import javafx.collections.transformation.SortedList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.geometry.Pos;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.ComboBox;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.stage.FileChooser;
import javafx.stage.FileChooser.ExtensionFilter;
import javafx.util.Duration;
import javax.swing.JOptionPane;
import org.controlsfx.control.Notifications;
/**
 * FXML Controller class
 *
 * @author HP
 */
public class ConcertController implements Initializable {

    @FXML
    private TextField nomC;
    @FXML
    private TextArea Chan;
    @FXML
    private TableView<Concert> tableCo;
    @FXML
    private TableColumn<Concert, String> Cidnom;
    @FXML
    private TableColumn<Concert, String> Cidmu;
    @FXML
    private TableColumn<Concert, String> Cchans;
    @FXML
    private TableColumn<Concert, String> Cim;
    @FXML
    private Button addC;
    @FXML
    private Button editC;
    @FXML
    private Button deleteC;
    @FXML
    private ComboBox<String> idmu;
    @FXML
    private TextField field1;
    @FXML
    private ImageView imavu;
    @FXML
    private TextField trailerfx;
    @FXML
    private TableColumn<Concert, String> Ctr;
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

    public ObservableList<Concert> getConcertlist() {
           ObservableList<Concert> concertList = FXCollections.observableArrayList();
                   Connection conn = getConnection();
        String query = "SELECT * FROM concert";
        Statement st;
        ResultSet rs;
        
                try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            Concert concert;
            while(rs.next()){
                concert = new Concert(rs.getInt("id"),rs.getString("name"),rs.getString("idmusician"),rs.getString("musics"),rs.getString("image"),rs.getString("trailer"));
                concertList.add(concert);
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return concertList;

        
        
      }

    public void showConcert(){
ObservableList<Concert> list = getConcertlist() ;
        Cidnom.setCellValueFactory(new PropertyValueFactory<Concert, String>("name"));
        Cidmu.setCellValueFactory(new PropertyValueFactory<Concert, String>("idmusician"));
        Cchans.setCellValueFactory(new PropertyValueFactory<Concert, String>("musics"));
        Cim.setCellValueFactory(new PropertyValueFactory<Concert, String>("image"));
        Ctr.setCellValueFactory(new PropertyValueFactory<Concert, String>("trailer"));
        tableCo.setItems(list);
        
       
    }


        public void insertConcert(){
      
         String query= "INSERT INTO `concert` (`id`, `name`, `idmusician`, `musics`, `image`, `trailer`) VALUES (NULL, '"+ nomC.getText()+"' , '"+idmu.getValue()+"' , '"+Chan.getText() +"', 'images/Concerts/"+FileChooser()+"' , '"+ trailerfx.getText()+"' )";
        executeQuery(query);
        showConcert();
        
        
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
    private void handleButtonAction(ActionEvent event) throws SQLException, FileNotFoundException {
  Image i = new Image("/img/rsz_check.png");
  Connection conn = getConnection();
  
        if ((nomC.getText().isEmpty()) || (idmu.getValue()==null) || (Chan.getText().isEmpty())) 
        {
             Alert alert = new Alert(AlertType.ERROR);
alert.setTitle("Message ");
alert.setHeaderText("Invalide!");
alert.setContentText("Prière de remplir tout les champs! ");
alert.showAndWait().ifPresent(rs -> {
    if (rs == ButtonType.OK) {
        System.out.println("Pressed OK.");
    }
});
            
        }
        
   
   else {            
        insertConcert();
         Notifications n = Notifications.create().title("Succès!").text("Concert Ajouté").graphic(new ImageView(i)).hideAfter(Duration.seconds(5)).position(Pos.BASELINE_RIGHT);
        n.show();
        Alert alert = new Alert(AlertType.INFORMATION);
alert.setTitle("Message ");
alert.setHeaderText("Félicitations!");
alert.setContentText("Concert Ajouté! ");
alert.showAndWait().ifPresent(rs -> {
    if (rs == ButtonType.OK) {
        System.out.println("Pressed OK.");
    }
    
});
search_concert();

}
        
        
ObservableList data = FXCollections.observableArrayList();
        ObservableList comboString = FXCollections.observableArrayList();

        try {
            
           
            ResultSet rs = conn.createStatement().executeQuery("SELECT name FROM musician");
            while (rs.next()) {
                        data.add(new Musician(rs.getString("name")));
                        comboString.add(rs.getString("name"));

            }

        } catch (SQLException ex) {
            System.err.println("Error"+ex);
        }
        idmu.setItems(null);
        idmu.setItems(comboString);

    }
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        showConcert();

         //initialiser le combobox
        ObservableList data = FXCollections.observableArrayList();
        ObservableList comboString = FXCollections.observableArrayList();

        try {
            Connection conn = getConnection();
           
            ResultSet rs = conn.createStatement().executeQuery("SELECT name FROM musician");
            while (rs.next()) {
                        data.add(new Musician(rs.getString("name")));
                        comboString.add(rs.getString("name"));

            }

        } catch (SQLException ex) {
            System.err.println("Error"+ex);
        }
        idmu.setItems(null);
        idmu.setItems(comboString);  
      search_concert(); 
    }    
    @FXML
    public String FileChooser(){
        FileChooser fc = new FileChooser();
      fc.setInitialDirectory(new File("C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife\\src\\images\\Concerts"));
        fc.getExtensionFilters().add(new ExtensionFilter("Image Files", "*.jpg"));
        fc.getExtensionFilters().add(new ExtensionFilter("Image Files", "*.jpeg"));
         fc.getExtensionFilters().add(new ExtensionFilter("Image Files", "*.png"));
        File selectedFile = fc.showOpenDialog(null);
        if (selectedFile != null) {
            System.out.println(selectedFile);
       
        }
        return selectedFile.getName();
    }
    @FXML
    private void SelectRowConcerts(MouseEvent event) {
        int id=tableCo.getSelectionModel().getSelectedItem().getId();
        nomC.setText(tableCo.getSelectionModel().getSelectedItem().getName());
        idmu.setValue(tableCo.getSelectionModel().getSelectedItem().getIdmusician());
        Chan.setText(tableCo.getSelectionModel().getSelectedItem().getMusics());
        Image image = new Image(tableCo.getSelectionModel().getSelectedItem().getImage());
        imavu.setImage(image);
        trailerfx.setText(tableCo.getSelectionModel().getSelectedItem().getTrailer());
    }



  @FXML
      private void ModifierConcert(ActionEvent event) {

        String query = "UPDATE `concert` SET `name` = '"+ nomC.getText() +"',`idmusician` = '"+ idmu.getValue() +"', `musics` = '"+ Chan.getText() + "',`image` = 'images/Concerts/"+FileChooser()+"' , `trailer` = '"+ trailerfx.getText() + "'WHERE id = "+ tableCo.getSelectionModel().getSelectedItem().getId() +"";
        executeQuery(query);
        showConcert();
        Image i = new Image("/img/rsz_check.png");
         Notifications n = Notifications.create().title("Succès!").text("Concert modifié").graphic(new ImageView(i)).hideAfter(Duration.seconds(5)).position(Pos.BASELINE_RIGHT);
        n.show();
        Alert alert = new Alert(AlertType.INFORMATION);
alert.setTitle("Message ");
alert.setHeaderText("Félicitations!");
alert.setContentText("Concert modifié! ");
alert.showAndWait().ifPresent(rs -> {
    if (rs == ButtonType.OK) {
        System.out.println("Pressed OK.");
    }
});
    
 search_concert();
    }



  @FXML
    private void removeConcert(ActionEvent event) {
              int p = JOptionPane.showConfirmDialog(null, "Voulez-vous vraiment supprimer ce concert ?", "Supprimer", JOptionPane.YES_NO_OPTION);
              if (p==0) {
                  
              
       int idDelete=tableCo.getSelectionModel().getSelectedItem().getId();
        String query = "DELETE FROM `concert` WHERE `concert`.`id` = '"+idDelete+"'";
        executeQuery(query);
      showConcert();
      Image i = new Image("/img/rsz_check.png");
         Notifications n = Notifications.create().title("Succès!").text("Concert Supprimé").graphic(new ImageView(i)).hideAfter(Duration.seconds(5)).position(Pos.BASELINE_RIGHT);
        n.show();
      Alert alert = new Alert(AlertType.INFORMATION);
alert.setTitle("Message ");
alert.setHeaderText("Félicitations!");
alert.setContentText("Concert Supprimé! ");
alert.showAndWait().ifPresent(rs -> {
    if (rs == ButtonType.OK) {
        System.out.println("Pressed OK.");
    }
});

ObservableList data = FXCollections.observableArrayList();
        ObservableList comboString = FXCollections.observableArrayList();

        try {
            Connection conn = getConnection();
           
             ResultSet rs = conn.createStatement().executeQuery("SELECT name FROM musician");
            while (rs.next()) {
                        data.add(new Musician(rs.getString("name")));
                        comboString.add(rs.getString("name"));

            }

        } catch (SQLException ex) {
            System.err.println("Error"+ex);
        }
        idmu.setItems(null);
        idmu.setItems(comboString);
        //houni nrmlm
        }
              search_concert();
    }


  //RECHERCHE AVANCEE - ONLY PART
     void search_concert() {          
        Cidnom.setCellValueFactory(new PropertyValueFactory<Concert, String>("name"));
        Cidmu.setCellValueFactory(new PropertyValueFactory<Concert, String>("idmusician"));
        Cchans.setCellValueFactory(new PropertyValueFactory<Concert, String>("musics"));
        Cim.setCellValueFactory(new PropertyValueFactory<Concert, String>("image"));
         ObservableList<Concert>  dataList = getConcertlist();
        tableCo.setItems(dataList);
        FilteredList<Concert> filteredData = new FilteredList<>(dataList, b -> true); 
 field1.textProperty().addListener((observable, oldValue, newValue) -> {
 filteredData.setPredicate(c -> {
    if (newValue == null || newValue.isEmpty()) {
     return true;
    }    
    String lowerCaseFilter = newValue.toLowerCase();
    
    if (c.getMusics().toLowerCase().indexOf(lowerCaseFilter) != -1) {
     return true; // Filter matches username
    }else if (c.getName().toLowerCase().indexOf(lowerCaseFilter) != -1) {
     return true; // Filter matches password
    }
    else if (String.valueOf(c.getIdmusician()).toLowerCase().indexOf(lowerCaseFilter) != -1) {
     return true; // Filter matches password
    }
    else if (String.valueOf(c.getId()).toLowerCase().indexOf(lowerCaseFilter) != -1)
         return true;// Filter matches email
                                
         else  
          return false; // Does not match.
   });
  });  
  SortedList<Concert> sortedData = new SortedList<>(filteredData);  
  sortedData.comparatorProperty().bind(tableCo.comparatorProperty());  
  tableCo.setItems(sortedData);      
    }

  
}

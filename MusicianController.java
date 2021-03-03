/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package crudaziz;

import java.awt.Desktop;
import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.time.LocalDate;
import java.time.format.DateTimeFormatter;
import java.util.ArrayList;
import java.util.Date;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.collections.transformation.FilteredList;
import javafx.collections.transformation.SortedList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.geometry.Pos;
import javafx.scene.chart.PieChart;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.ComboBox;
import javafx.scene.control.DatePicker;
import javafx.scene.control.Label;
import javafx.scene.control.ListView;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.scene.media.Media;
import javafx.scene.media.MediaPlayer;
import javafx.scene.text.Font;
import javafx.stage.FileChooser;
import javafx.stage.FileChooser.ExtensionFilter;
import javafx.stage.Stage;
import javafx.util.Duration;
import javafx.util.StringConverter;
import javax.swing.JOptionPane;
import javax.swing.ImageIcon;
import org.controlsfx.control.Notifications;


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
    private ListView<String> fximage;
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
    private Button RemoveRow;
    @FXML
    private Label label;
    @FXML
    private TextField fxidc;
    @FXML
    private TextField nomC;
    @FXML
    private ListView<String> fxima;
    @FXML
    private TextArea Chan;
    @FXML
    private TableView<Concert> tableCo;
    @FXML
    private TableColumn<Concert, Integer> CidC;
    @FXML
    private TableColumn<Concert, String> Cidnom;
    @FXML
    private TableColumn<Concert, Integer> Cidmu;
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
    ComboBox<?> idmu;
    @FXML
    private Button join;
    @FXML
    private ImageView imagev;
    private Image im;
    private FileChooser fileChooser;
    private File file;
    @FXML
    private ImageView imv;
    @FXML
    private TextField filterField;
    @FXML
    private TextField field1;
    @FXML
    private PieChart piechart;
    ObservableList<PieChart.Data> piedata;
    
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
                concert = new Concert(rs.getInt("id"),rs.getString("name"),rs.getInt("idmusician"),rs.getString("musics"),rs.getString("image"));
                concertList.add(concert);
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return concertList;

        
        
      }
        
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
    
    public void showConcert(){
ObservableList<Concert> list = getConcertlist() ;
        CidC.setCellValueFactory(new PropertyValueFactory<Concert, Integer>("id"));
        Cidnom.setCellValueFactory(new PropertyValueFactory<Concert, String>("name"));
        Cidmu.setCellValueFactory(new PropertyValueFactory<Concert, Integer>("idmusician"));
        Cchans.setCellValueFactory(new PropertyValueFactory<Concert, String>("musics"));
        Cim.setCellValueFactory(new PropertyValueFactory<Concert, String>("image"));

        tableCo.setItems(list);
        
       
    }
    
     public void insertMusician(){
      
         String query= "INSERT INTO `musician` (`id`, `name`, `prenom`, `born`, `description`, `image`) VALUES ('"+ fxid.getText()+"', '"+ fxname.getText()+"' , '"+fxpr.getText()+"' , '"+fxdate.getValue()+"' , '"+fxdesc.getText() +"', '"+fximage.getItems() +"' )";
        executeQuery(query);
        showMusician();
        
        
    }
     
        public void insertConcert(){
      
         String query= "INSERT INTO `concert` (`id`, `name`, `idmusician`, `musics`, `image`) VALUES ('"+ fxidc.getText()+"', '"+ nomC.getText()+"' , '"+idmu.getValue()+"' , '"+Chan.getText() +"', '"+fxima.getItems() +"' )";
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
     public int getInt(String test){
        try{
            return Integer.parseInt(test.trim());
        }catch(Exception e){
            return 0;
        }
    }
     //VERIFICATION ET CONTROLE SAISIE D'AJOUT
     
    @FXML
    private void handleButtonAction(ActionEvent event) throws SQLException {
       Connection conn = getConnection();
       Image i = new Image("/img/rsz_check.png");
    //   Boolean r = conn.createStatement().executeQuery("SELECT ID FROM MUSICIAN WHERE ID != "+ fxidc.getText()).getBoolean(1);
  
        
        //IF ADD MUSICIAN IS CLICKED
        
if(event.getSource()==BtnAdd){
    //TESTING IF ALL FIELDS ARE EMPTY
    
        if ((fxname.getText().isEmpty())|| (fxid.getText().isEmpty()) || (fxname.getText().isEmpty()) || (fxpr.getText().isEmpty()) || (fxdate.getValue()==null) || (fxdesc.getText().isEmpty()) || (fximage == null) ) {
            
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
        
   else 
            //THE LENFTH OF AN ID SHOULD BE EQUAL TO 8
            
            if ( (fxid.getText().length()<8) || (fxid.getText().length()>8) ) {
       Alert alert = new Alert(AlertType.ERROR);
alert.setTitle("Message ");
alert.setHeaderText("Invalide!");
alert.setContentText("Un ID doit comporter 8 CHIFFRES! ");
alert.showAndWait().ifPresent(rs -> {
    if (rs == ButtonType.OK) {
        System.out.println("Pressed OK.");
    }
});
}
        //CONCERT ADD BUTTON CLICKED
        
        else {

            
        insertMusician();
        
       Notifications n = Notifications.create().title("Succès!").text("Musicien Ajouté").graphic(new ImageView(i)).hideAfter(Duration.seconds(5)).position(Pos.BASELINE_RIGHT);
        n.show();
        Alert alert = new Alert(AlertType.INFORMATION);
alert.setTitle("Message ");
alert.setHeaderText("Félicitations!");
alert.setContentText("Musicien Ajouté! ");
alert.showAndWait().ifPresent(rs -> {
    if (rs == ButtonType.OK) {
        System.out.println("Pressed OK.");
    }
});

        }
        
//    else
//    {
//          Alert alert = new Alert(AlertType.ERROR);
//alert.setTitle("Message ");
//alert.setHeaderText("Invalide!");
//alert.setContentText("IDENTIFIANT DEJA EXISTANT! SAISISSEZ UN AUTRE ");
//alert.showAndWait().ifPresent(rs -> {
//    if (rs == ButtonType.OK) {
//        System.out.println("Pressed OK.");
//    }
//});
//    }
}




         else if (event.getSource()==addC){
             
   //TESTING IF ALL FIELDS ARE EMPTY
    
        if ((fxidc.getText().isEmpty())|| (nomC.getText().isEmpty()) || (idmu.getValue()==null) || (Chan.getText().isEmpty())) 
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
        
         else 
            //THE LENFTH OF AN ID SHOULD BE EQUAL TO 8
            
            if ( (fxidc.getText().length()<8) || (fxidc.getText().length()>8) ) {
       Alert alert = new Alert(AlertType.ERROR);
alert.setTitle("Message ");
alert.setHeaderText("Invalide!");
alert.setContentText("Un ID doit comporter 8 CHIFFRES! ");
alert.showAndWait().ifPresent(rs -> {
    if (rs == ButtonType.OK) {
        System.out.println("Pressed OK.");
    }
});
}
            //SI LES 2 TESTS SONT INVALIDES IL PEUT AJOUTER LE CONCERT
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

}
        
        }
ObservableList data = FXCollections.observableArrayList();
        ObservableList comboString = FXCollections.observableArrayList();

        try {
            
           
            ResultSet rs = conn.createStatement().executeQuery("SELECT id FROM musician");
            while (rs.next()) {
                        data.add(new Musician(rs.getInt("id")));
                        comboString.add(rs.getInt("id"));

            }

        } catch (SQLException ex) {
            System.err.println("Error"+ex);
        }
        idmu.setItems(null);
        idmu.setItems(comboString);

    }
    
    @FXML
    public void JoinBut(ActionEvent event){
        FileChooser fc = new FileChooser();
        File selectedFile = fc.showOpenDialog(null);
        if (selectedFile != null) {
            fximage.getItems().add(selectedFile.getPath());
            fxima.getItems().add(selectedFile.getPath());
            imv.setImage(new Image(fc.toString()));
        }
        else {
            System.out.println("file is not valid");
        }
    }
    
    @Override
    
    
    public void initialize(URL url, ResourceBundle rb) {
      
        LoadData();
        piechart.setData(piedata);
    showMusician();  
    showConcert(); 
         //initialiser le combobox
        ObservableList data = FXCollections.observableArrayList();
        ObservableList comboString = FXCollections.observableArrayList();

        try {
            Connection conn = getConnection();
           
            ResultSet rs = conn.createStatement().executeQuery("SELECT id FROM musician");
            while (rs.next()) {
                        data.add(new Musician(rs.getInt("id")));
                        comboString.add(rs.getInt("id"));

            }

        } catch (SQLException ex) {
            System.err.println("Error"+ex);
        }
        idmu.setItems(null);
        idmu.setItems(comboString);
      search_musician();  
      search_concert();
            
    }    

    @FXML
    private void SelectRow(MouseEvent event) {
    }

    @FXML
    private void ModifyRow(ActionEvent event) {
        String query = "UPDATE `musician` SET `name` = '"+ fxname.getText() +"',`prenom` = '"+ fxpr.getText() +"', `born` = '"+fxdate.getValue() + "', `description` = '"+fxdesc.getText()+ "', `image` = '"+fximage.getItems() + "' WHERE id = "+ fxid.getText() +"";
        executeQuery(query);
        showMusician();
        Image i = new Image("/img/rsz_check.png");
         Notifications n = Notifications.create().title("Succès!").text("Musicien modifié").graphic(new ImageView(i)).hideAfter(Duration.seconds(5)).position(Pos.BASELINE_RIGHT);
        n.show();
        Alert alert = new Alert(AlertType.INFORMATION);
alert.setTitle("Message ");
alert.setHeaderText("Félicitations!");
alert.setContentText("Musicien modifié! ");
alert.showAndWait().ifPresent(rs -> {
    if (rs == ButtonType.OK) {
        System.out.println("Pressed OK.");
    }
});
ObservableList data = FXCollections.observableArrayList();
        ObservableList comboString = FXCollections.observableArrayList();

        try {
            Connection conn = getConnection();
           
            ResultSet rs = conn.createStatement().executeQuery("SELECT id FROM musician");
            while (rs.next()) {
                        data.add(new Musician(rs.getInt("id")));
                        comboString.add(rs.getInt("id"));

            }

        } catch (SQLException ex) {
            System.err.println("Error"+ex);
        }
        idmu.setItems(null);
        idmu.setItems(comboString);
    }
    
    @FXML
      private void ModifierConcert(ActionEvent event) {
        String query = "UPDATE `concert` SET `name` = '"+ nomC.getText() +"',`idmusician` = "+ idmu.getValue() +", `musics` = '"+ Chan.getText() + "', `image` = '"+fxima.getItems()+"' WHERE id = "+ fxidc.getText() +"";
        executeQuery(query);
        showConcert();
        Image i = new Image("/img/rsz_check.png");
         Notifications n = Notifications.create().title("Succès!").text("Concert modifié").graphic(new ImageView(i)).hideAfter(Duration.seconds(5)).position(Pos.BASELINE_RIGHT);
        n.show();
        Alert alert = new Alert(AlertType.INFORMATION);
alert.setTitle("Message ");
alert.setHeaderText("Félicitations!");
alert.setContentText("Concert Modifié! ");
alert.showAndWait().ifPresent(rs -> {
    if (rs == ButtonType.OK) {
        System.out.println("Pressed OK.");
    }
});

    }



    @FXML
    private void removeRow(ActionEvent event) {
                      int p = JOptionPane.showConfirmDialog(null, "Voulez-vous vraiment supprimer ce musicien ?", "Supprimer", JOptionPane.YES_NO_OPTION);
if (p==0) {
         int idDelete=TableMusician.getSelectionModel().getSelectedItem().getId();
        String query = "DELETE FROM `musician` WHERE `musician`.`id` = '"+idDelete+"'";
        executeQuery(query);
         showMusician();
         Image i = new Image("/img/rsz_check.png");
         Notifications n = Notifications.create().title("Succès!").text("Musicien Supprimé").graphic(new ImageView(i)).hideAfter(Duration.seconds(5)).position(Pos.BASELINE_RIGHT);
        n.show();
         Alert alert = new Alert(AlertType.INFORMATION);
alert.setTitle("Message ");
alert.setHeaderText("Félicitations!");
alert.setContentText("Musicien Supprimé! ");
alert.showAndWait().ifPresent(rs -> {
    if (rs == ButtonType.OK) {
        System.out.println("Pressed OK.");
    }
});

ObservableList data = FXCollections.observableArrayList();
        ObservableList comboString = FXCollections.observableArrayList();

        try {
            Connection conn = getConnection();
           
            ResultSet rs = conn.createStatement().executeQuery("SELECT id FROM musician");
            while (rs.next()) {
                        data.add(new Musician(rs.getInt("id")));
                        comboString.add(rs.getInt("id"));

            }

        } catch (SQLException ex) {
            System.err.println("Error"+ex);
        }
        idmu.setItems(null);
        idmu.setItems(comboString);
        }
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
           
            ResultSet rs = conn.createStatement().executeQuery("SELECT id FROM musician");
            while (rs.next()) {
                        data.add(new Musician(rs.getInt("id")));
                        comboString.add(rs.getInt("id"));

            }

        } catch (SQLException ex) {
            System.err.println("Error"+ex);
        }
        idmu.setItems(null);
        idmu.setItems(comboString);
        //houni nrmlm
        }
    }
    //RECHERCHE AVANCEE - ONLY PART
     void search_musician() {          
 ColID.setCellValueFactory(new PropertyValueFactory<Musician, Integer>("id"));
        ColName.setCellValueFactory(new PropertyValueFactory<Musician, String>("name"));
        Colpr.setCellValueFactory(new PropertyValueFactory<Musician, String>("prenom"));
        ColDate.setCellValueFactory(new PropertyValueFactory<Musician, Date>("born"));
        ColDesc.setCellValueFactory(new PropertyValueFactory<Musician, String>("description"));
        ColIm.setCellValueFactory(new PropertyValueFactory<>("image"));
         ObservableList<Musician>  dataList = getMusicianlist();
        TableMusician.setItems(dataList);
        FilteredList<Musician> filteredData = new FilteredList<>(dataList, b -> true); 
 filterField.textProperty().addListener((observable, oldValue, newValue) -> {
 filteredData.setPredicate(m -> {
    if (newValue == null || newValue.isEmpty()) {
     return true;
    }    
    String lowerCaseFilter = newValue.toLowerCase();
    
    if (m.getDescription().toLowerCase().indexOf(lowerCaseFilter) != -1) {
     return true; // Filter matches username
    }else if (m.getName().toLowerCase().indexOf(lowerCaseFilter) != -1) {
     return true; // Filter matches password
    }
    else if (m.getPrenom().toLowerCase().indexOf(lowerCaseFilter) != -1)
         return true;// Filter matches email
    else if (String.valueOf(m.getId()).toLowerCase().indexOf(lowerCaseFilter) != -1)
         return true;// Filter matches email                         
         else  
          return false; // Does not match.
   });
  });  
  SortedList<Musician> sortedData = new SortedList<>(filteredData);  
  sortedData.comparatorProperty().bind(TableMusician.comparatorProperty());  
  TableMusician.setItems(sortedData);      
    }
     
       //RECHERCHE AVANCEE - ONLY PART
     void search_concert() {          
CidC.setCellValueFactory(new PropertyValueFactory<Concert, Integer>("id"));
        Cidnom.setCellValueFactory(new PropertyValueFactory<Concert, String>("name"));
        Cidmu.setCellValueFactory(new PropertyValueFactory<Concert, Integer>("idmusician"));
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
    public void LoadData(){
                
        ArrayList<Integer> cell= new ArrayList<Integer>();
        ArrayList<String> name= new ArrayList<String>();
        piedata=FXCollections.observableArrayList();
        
        
        Connection conn = getConnection();
        String query = "SELECT * FROM concert";
        PreparedStatement st;
        ResultSet rs;

         try{
            
            st=conn.prepareStatement(query);
            rs=st.executeQuery(query);
           
            while(rs.next()){
                piedata.add(new PieChart.Data(rs.getString("idmusician"),rs.getInt("idmusician")));
                cell.add(rs.getInt("idmusician"));
                name.add(rs.getString("idmusician"));
                
                
                
                
//                final Label label = new Label("");
//        label.setStyle("-fx-font: 24 arial;");
//               //menhouni 
//                for (final PieChart.Data data : piechart.getData()) {
//            data.getNode().addEventHandler(MouseEvent.MOUSE_PRESSED,
//                e -> {
//                    double total = 0;
//                    for (PieChart.Data d : piechart.getData()) {
//                        total += d.getPieValue();
//                    }
//                    label.setTranslateX(e.getSceneX());
//                    label.setTranslateY(e.getSceneY());
//                    String text = String.format("%.1f%%", 100*data.getPieValue()/total) ;
//                    label.setText(text);
//                 }
//                );
//        }
//                //lhouni


                
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        
        
        
    }
}

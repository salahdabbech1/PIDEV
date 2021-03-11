/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package crudaziz;

import com.gtranslate.Audio;
import com.gtranslate.Language;
import com.itextpdf.text.Phrase;
import com.itextpdf.text.pdf.PdfPCell;
import com.itextpdf.text.pdf.PdfPTable;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.time.LocalDate;
import java.time.LocalTime;
import java.util.ArrayList;
import java.util.Date;
import java.util.Properties;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.animation.Animation;
import javafx.animation.KeyFrame;
import javafx.animation.Timeline;
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
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.stage.FileChooser;
import javafx.util.Duration;
import javax.swing.JOptionPane;
import org.controlsfx.control.Notifications;
import javax.mail.Message;
import javax.mail.PasswordAuthentication;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;
import org.apache.poi.hssf.usermodel.HSSFRow;
import org.apache.poi.hssf.usermodel.HSSFSheet;
import org.apache.poi.hssf.usermodel.HSSFWorkbook;
import com.itextpdf.text.Document;
import com.itextpdf.text.DocumentException;
import com.itextpdf.text.Paragraph; 
import com.itextpdf.text.pdf.PdfWriter; 
import java.io.FileInputStream;
import java.io.InputStream;
import java.nio.file.Paths;
import javafx.scene.media.Media;
import javafx.scene.media.MediaPlayer;
import javafx.stage.FileChooser.ExtensionFilter;
import javazoom.jl.decoder.JavaLayerException;

/**
 *
 * @author HP
 */
public class MusicianController implements Initializable {
    
    @FXML
    private TextField fxname;
    @FXML
    private TextField fxpr;
    @FXML
    private TextField fxdesc;
    @FXML
    private DatePicker fxdate;
    @FXML
    private TableView<Musician> TableMusician;
    @FXML
    private TableColumn<Musician, String> ColName;
    @FXML
    private TableColumn<Musician, String> Colpr;
    @FXML
    private TableColumn<Musician, String> ColDesc;
    @FXML
    private TableColumn<Musician, Date> ColDate;
    @FXML
    
    private TableColumn<Musician, String> ColIm;
    @FXML
    private Button BtnAdd;
    @FXML
    private Button BtnModify;
    @FXML
    private Button RemoveRow;
    @FXML
    private Label label;
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
    ComboBox<String> idmu;
    @FXML
    private Button join;
    private Image im;
        private Image image;
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
    @FXML
    private TextField fxrec;
    @FXML
    private TextField fxsubj;
    @FXML
    private TextField fxbody;
    @FXML
    private Button sendm;
    @FXML
    private Label time;
    private FileInputStream fis;
    private ImageView imavu;
        public static TextField txtTo;
    public static TextField txtMessage;
    public Button btnSend;
    @FXML
    private TextField voicet;

    
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
                concert = new Concert(rs.getInt("id"),rs.getString("name"),rs.getString("idmusician"),rs.getString("musics"),rs.getString("image"));
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
      //  ColID.setCellValueFactory(new PropertyValueFactory<Musician, Integer>("id"));
        ColName.setCellValueFactory(new PropertyValueFactory<Musician, String>("name"));
        Colpr.setCellValueFactory(new PropertyValueFactory<Musician, String>("prenom"));
        ColDate.setCellValueFactory(new PropertyValueFactory<Musician, Date>("born"));
        ColDesc.setCellValueFactory(new PropertyValueFactory<Musician, String>("description"));
        ColIm.setCellValueFactory(new PropertyValueFactory<>("image"));

        TableMusician.setItems(list);
        
       
    }
    
    public void showConcert(){
ObservableList<Concert> list = getConcertlist() ;
        Cidnom.setCellValueFactory(new PropertyValueFactory<Concert, String>("name"));
        Cidmu.setCellValueFactory(new PropertyValueFactory<Concert, String>("idmusician"));
        Cchans.setCellValueFactory(new PropertyValueFactory<Concert, String>("musics"));
        Cim.setCellValueFactory(new PropertyValueFactory<Concert, String>("image"));

        tableCo.setItems(list);
        
       
    }
    
     public void insertMusician(){
      
         String query= "INSERT INTO `musician` (`id`, `name`, `prenom`, `born`, `description`, `image`) VALUES (NULL, '"+ fxname.getText()+"' , '"+fxpr.getText()+"' , '"+fxdate.getValue()+"' , '"+fxdesc.getText() +"', '/img/"+FileChooser()+"')";
        executeQuery(query);
        showMusician();
       
        
        
        
    }
     
        public void insertConcert(){
      
         String query= "INSERT INTO `concert` (`id`, `name`, `idmusician`, `musics`, `image`) VALUES (NULL, '"+ nomC.getText()+"' , '"+idmu.getValue()+"' , '"+Chan.getText() +"', '/img/"+FileChooser()+"' )";
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
 
     //VERIFICATION ET CONTROLE SAISIE D'AJOUT
     
    @FXML
    private void handleButtonAction(ActionEvent event) throws SQLException, FileNotFoundException {
       Connection conn = getConnection();
       Image i = new Image("/img/rsz_check.png");
   String s = "C:\\Users\\HP\\Documents\\NetBeansProjects\\v3_1\\tsalhetlghalta\\before_transformation\\CRUDAziz\\src\\crudaziz\\click.mp3";
		Media h = new Media(Paths.get(s).toUri().toString());
		mediaPlayer = new MediaPlayer(h);
		mediaPlayer.play();
        
        //IF ADD MUSICIAN IS CLICKED
        
if(event.getSource()==BtnAdd){
    //TESTING IF ALL FIELDS ARE EMPTY
   
        if ((fxname.getText().isEmpty())||  (fxname.getText().isEmpty()) || (fxpr.getText().isEmpty()) || (fxdate.getValue()==null) || (fxdesc.getText().isEmpty())) {
            
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

}




         else if (event.getSource()==addC){
             
   //TESTING IF ALL FIELDS ARE EMPTY
    
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
    
    @FXML
    public String FileChooser(){
        FileChooser fc = new FileChooser();
         fc.setInitialDirectory(new File("C:\\Users\\HP\\Documents\\NetBeansProjects\\v3_1\\tsalhetlghalta\\before_transformation\\CRUDAziz\\src\\img"));
        fc.getExtensionFilters().add(new ExtensionFilter("Image Files", "*.jpg"));
        fc.getExtensionFilters().add(new ExtensionFilter("Image Files", "*.jpeg"));
        File selectedFile = fc.showOpenDialog(null);
        if (selectedFile != null) {
            System.out.println(selectedFile);
       
        }
        return selectedFile.getName();
    }
    
    @Override
    
    
    public void initialize(URL url, ResourceBundle rb) {
//   //how to display an image     imageView.setImage(new Image("img/rsz_check.png"));
//PAGINATION STARTS HERE
////Pagination pagination = new Pagination((data.size() / rowsPerPage + 1), 0);
////    pagination.setPageFactory(this::createPage);
////

//ENDS HERE
music();
Timeline clock = new Timeline(new KeyFrame(Duration.ZERO, e -> {        
        LocalTime currentTime = LocalTime.now();
        time.setText(currentTime.getHour() + ":" + currentTime.getMinute() + ":" + currentTime.getSecond());
    }),
         new KeyFrame(Duration.seconds(1))
    );
    clock.setCycleCount(Animation.INDEFINITE);
    clock.play();



        LoadData();
        piechart.setData(piedata);
//                     
                for (final PieChart.Data data : piechart.getData()) {
            data.getNode().addEventHandler(MouseEvent.MOUSE_CLICKED,
                e -> {
                    double total = 0;
                    for (PieChart.Data d : piechart.getData()) {
                        total += d.getPieValue();
                    }
                    label.setTranslateX(e.getSceneX());
                    label.setTranslateY(e.getSceneY());
                    String text = String.format("%.1f%%", 100*data.getPieValue()/total) ;
                    label.setText(text);
                 }
                );
        }
    showMusician();  
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
      search_musician();  
      search_concert();
      export(TableMusician);
      
            
    }    

    @FXML
    private void SelectRow(MouseEvent event) {
        int id=TableMusician.getSelectionModel().getSelectedItem().getId();
        fxname.setText(TableMusician.getSelectionModel().getSelectedItem().getName());
        fxpr.setText(TableMusician.getSelectionModel().getSelectedItem().getDescription());
        fxdate.setValue(LocalDate.parse(TableMusician.getSelectionModel().getSelectedItem().getBorn().toString()));
        fxdesc.setText(TableMusician.getSelectionModel().getSelectedItem().getDescription());
        Image image = new Image(TableMusician.getSelectionModel().getSelectedItem().getImage());
        imv.setImage(image);
    }
    
     @FXML
    private void SelectRowConcerts(MouseEvent event) {
        int id=tableCo.getSelectionModel().getSelectedItem().getId();
        nomC.setText(tableCo.getSelectionModel().getSelectedItem().getName());
        idmu.setValue(tableCo.getSelectionModel().getSelectedItem().getIdmusician());
        Chan.setText(tableCo.getSelectionModel().getSelectedItem().getMusics());
        Image image = new Image(tableCo.getSelectionModel().getSelectedItem().getImage());
        imavu.setImage(image);
    }

    @FXML
    private void ModifyRow(ActionEvent event) {
        String s = "C:\\Users\\HP\\Documents\\NetBeansProjects\\v3_1\\tsalhetlghalta\\before_transformation\\CRUDAziz\\src\\crudaziz\\click.mp3";
		Media h = new Media(Paths.get(s).toUri().toString());
		mediaPlayer = new MediaPlayer(h);
		mediaPlayer.play();
        String query = "UPDATE `musician` SET `name` = '"+ fxname.getText() +"',`prenom` = '"+ fxpr.getText() +"', `born` = '"+fxdate.getValue() + "', `description` = '"+fxdesc.getText()+ "',  `image` = '/img/"+FileChooser()+"' WHERE id = "+ TableMusician.getSelectionModel().getSelectedItem().getId() +"";
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
    @FXML
      private void ModifierConcert(ActionEvent event) {
          String s = "C:\\Users\\HP\\Documents\\NetBeansProjects\\v3_1\\tsalhetlghalta\\before_transformation\\CRUDAziz\\src\\crudaziz\\click.mp3";
		Media h = new Media(Paths.get(s).toUri().toString());
		mediaPlayer = new MediaPlayer(h);
		mediaPlayer.play();
        String query = "UPDATE `concert` SET `name` = '"+ nomC.getText() +"',`idmusician` = '"+ idmu.getValue() +"', `musics` = '"+ Chan.getText() + "',`image` = '/img/"+FileChooser()+"' WHERE id = "+ tableCo.getSelectionModel().getSelectedItem().getId() +"";
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
    

    }



    @FXML
    private void removeRow(ActionEvent event) {
        String s = "C:\\Users\\HP\\Documents\\NetBeansProjects\\v3_1\\tsalhetlghalta\\before_transformation\\CRUDAziz\\src\\crudaziz\\click.mp3";
		Media h = new Media(Paths.get(s).toUri().toString());
		mediaPlayer = new MediaPlayer(h);
		mediaPlayer.play();
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
    }
    
     @FXML
    private void removeConcert(ActionEvent event) {
        String s = "C:\\Users\\HP\\Documents\\NetBeansProjects\\v3_1\\tsalhetlghalta\\before_transformation\\CRUDAziz\\src\\crudaziz\\click.mp3";
		Media h = new Media(Paths.get(s).toUri().toString());
		mediaPlayer = new MediaPlayer(h);
		mediaPlayer.play();
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
    }
    //RECHERCHE AVANCEE - ONLY PART
     void search_musician() {          
// ColID.setCellValueFactory(new PropertyValueFactory<Musician, Integer>("id"));
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
             Connection conn = getConnection();

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
                piedata.add(new PieChart.Data(rs.getString("idmusician"),rs.getInt("id")));
                cell.add(rs.getInt("id"));
                name.add(rs.getString("idmusician"));
                
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        
        
        
    }
    
public static void sendMail(String recepient,String subject,String body) throws Exception {
        System.out.println("Preparing to send email");
        Properties properties = new Properties();

        //Enable authentication
        properties.put("mail.smtp.auth", "true");
        //Set TLS encryption enabled
        properties.put("mail.smtp.starttls.enable", "true");
        //Set SMTP host
        properties.put("mail.smtp.host", "smtp.gmail.com");
        //Set smtp port
        properties.put("mail.smtp.port", "587");

        //Your gmail address
        String myAccountEmail = "azizaziz97450@gmail.com";
        //Your gmail password
        String password = "katyperry";

        //Create a session with account credentials
        Session session = Session.getInstance(properties,
          new javax.mail.Authenticator() {
            protected PasswordAuthentication getPasswordAuthentication() {
                return new PasswordAuthentication(myAccountEmail, password);
            }
          });

        //Prepare email message
        Message message = prepareMessage(session, myAccountEmail, recepient,subject,body);

        //Send mail
        Transport.send(message);
        System.out.println("Message sent successfully");
    }

    private static Message prepareMessage(Session session, String myAccountEmail, String recepient,String subject,String body) {
        try {
            Message message = new MimeMessage(session);
            message.setFrom(new InternetAddress(myAccountEmail));
            message.setRecipient(Message.RecipientType.TO, new InternetAddress(recepient));
            message.setSubject(subject);
            String htmlCode = body;
            message.setContent(htmlCode, "text/html");
            return message;
        } catch (Exception ex) {
            //Logger.getLogger(JavaMailUtil.class.getName()).log(Level.SEVERE, null, ex);
        }
        return null;
    }
    
    @FXML
    public void verifierMail(ActionEvent event) {
        String recepient = fxrec.getText();
String subject = fxsubj.getText() ;
String body = fxbody.getText();
        try {
            sendMail(recepient,subject,body);
        } catch (Exception ex) {
            Logger.getLogger(MusicianController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
public void export(TableView<Musician> tableView){

        HSSFWorkbook hssfWorkbook=new HSSFWorkbook();
        HSSFSheet hssfSheet=  hssfWorkbook.createSheet("Sheet1");
        HSSFRow firstRow= hssfSheet.createRow(0);

        ///set titles of columns
        for (int i=0; i<tableView.getColumns().size();i++){

            firstRow.createCell(i).setCellValue(tableView.getColumns().get(i).getText());

        }


        for (int row=0; row<tableView.getItems().size();row++){

            HSSFRow hssfRow= hssfSheet.createRow(row+1);

            for (int col=0; col<tableView.getColumns().size(); col++){

                Object celValue = tableView.getColumns().get(col).getCellObservableValue(row).getValue();

                try {
                    if (celValue != null && Double.parseDouble(celValue.toString()) != 0.0) {
                        hssfRow.createCell(col).setCellValue(Double.parseDouble(celValue.toString()));
                    }
                } catch (  NumberFormatException e ){

                    hssfRow.createCell(col).setCellValue(celValue.toString());
                }

            }

        }

        //save excel file and close the workbook
        try {
            hssfWorkbook.write(new FileOutputStream("Table_Des_Musiciens.xls"));
            hssfWorkbook.close();
        } catch (IOException e) {
            e.printStackTrace();
        }




    }
 private static void addEmptyLine(Paragraph paragraph, int number) {
    for (int i = 0; i < number; i++) {
      paragraph.add(new Paragraph("  "));
    }
  }
//FONCTION PDF
       private void pdfs(ActionEvent event) 
          throws Exception{
        try {
           Class.forName("com.mysql.jdbc.Driver");
               Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/artlife", "root", "");
  Statement stmt = con.createStatement();
                    /* Define the SQL query */
                    ResultSet query_set = stmt.executeQuery("SELECT name,prenom,born,description,image From musician");
                    /* Step-2: Initialize PDF documents - logical objects */
                    Document my_pdf_report = new Document();
                    PdfWriter.getInstance(my_pdf_report, new FileOutputStream("liste_des_musiciens.pdf"));
                    my_pdf_report.open();        
                    my_pdf_report.addTitle("Liste Des Musiciens");
                    
                    //we have four columns in our table
                    PdfPTable my_report_table = new PdfPTable(5);
                    Paragraph preface = new Paragraph();
                    my_pdf_report.add(new Paragraph("Liste Des Musiciens"));
    // We add one empty line
    addEmptyLine(preface, 1);
    // Will create: Report generated by: _name, _date
    my_pdf_report.add(new Paragraph("Rapport généré par: " + System.getProperty("user.name") + ", " + new Date()));
    addEmptyLine(preface, 3);
    my_pdf_report.add(preface);
                    //create a cell object
                    PdfPCell table_cell;
        my_report_table.addCell("NAME");
        my_report_table.addCell("PRENOM");
        my_report_table.addCell("BORN");
        my_report_table.addCell("DESCRIPTION");
         my_report_table.addCell("IMAGE");

                    while (query_set.next()) {                
                                    String nameMus = query_set.getString("name");
                                    table_cell=new PdfPCell(new Phrase(nameMus));
                                    my_report_table.addCell(table_cell);
                                    String preMus=query_set.getString("prenom");
                                    table_cell=new PdfPCell(new Phrase(preMus));
                                    my_report_table.addCell(table_cell);
                                    Date bornDate=query_set.getDate("born");
                                    table_cell=new PdfPCell(new Phrase(bornDate.toString()));
                                    my_report_table.addCell(table_cell);
                                    String descMus=query_set.getString("description");
                                    table_cell=new PdfPCell(new Phrase(descMus));
                                    my_report_table.addCell(table_cell);
                                    String imageMus=query_set.getString("image");
                                    table_cell=new PdfPCell(new Phrase(imageMus));
                                    my_report_table.addCell(table_cell);
                                    }
                    /* Attach report table to PDF */
                    my_pdf_report.add(my_report_table);                       
                    my_pdf_report.close();

                    /* Close all DB related objects */
                    query_set.close();
                    stmt.close(); 
                    con.close();               



    } catch (FileNotFoundException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
    } catch (DocumentException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
    }
}

       MediaPlayer mediaPlayer;
	public void music() {
		String s = "C:\\Users\\HP\\Documents\\NetBeansProjects\\v3_1\\tsalhetlghalta\\before_transformation\\CRUDAziz\\src\\crudaziz\\p.mp3";
		Media h = new Media(Paths.get(s).toUri().toString());
		mediaPlayer = new MediaPlayer(h);
		mediaPlayer.play();
		
	}
    @FXML
    private void imprimer(ActionEvent event) {
    }
//@FXML 
//    private void sendMessage() throws IOException
//    {   String getTo = txtTo.getText();
//            String getMsg = txtMessage.getText();
//            AuthMethod auth = new TokenAuthMethod("api_key", "api_id");
//            NexmoClient client = new NexmoClient(auth);
//            TextMessage text = new TextMessage("12013514464", getTo, getMsg);
//        AuthMethod auth = new TokenAuthMethod("api_key", "api_id");
//        NexmoClient client = new NexmoClient(auth);
//
//        TextMessage text = new TextMessage("12013514464", "+12063760671", "YIKES");
//        SmsSubmissionResult[] responses = client.getSmsClient().submitMessage(text);
//        for(SmsSubmissionResult response : responses)
//        {
//            System.out.println(response);
//        }
//
//    }
    @FXML
    public void textvoice(ActionEvent event) {
       
                    String txt = voicet.getText();
                    TextToSpeech tts = new TextToSpeech();
	
		//Print all the available voices
		tts.getAvailableVoices().stream().forEach(voice -> System.out.println("Voice: " + voice));
		
		// Setting the Current Voice
		tts.setVoice("dfki-poppy-hsmm");
		
		// TTS say something that we actually are typing into the first variable
		tts.speak(txt, 2.0f, false, true);
    }

}


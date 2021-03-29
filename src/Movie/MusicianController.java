/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Movie;

import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.time.LocalDate;
import java.time.LocalTime;
import java.util.Date;
import java.util.ResourceBundle;
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
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.ComboBox;
import javafx.scene.control.DatePicker;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.stage.FileChooser;
import javafx.util.Duration;
import javax.swing.JOptionPane;
import org.controlsfx.control.Notifications;
import org.apache.poi.hssf.usermodel.HSSFRow;
import org.apache.poi.hssf.usermodel.HSSFSheet;
import org.apache.poi.hssf.usermodel.HSSFWorkbook;
import java.io.FileInputStream;
import javafx.scene.control.ListView;
import javafx.scene.media.MediaPlayer;
import javafx.stage.FileChooser.ExtensionFilter;

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
    
    private TextField fxrec;
    private TextField fxsubj;
    private TextField fxbody;
    @FXML
    private Label time;
    private FileInputStream fis;
    private ImageView imavu;
        public static TextField txtTo;
    public static TextField txtMessage;
    public Button btnSend;
    private TextField voicet;

      private String path;
    private MediaPlayer mediaPlayer;
    private ListView<?> listeV;
 
    
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
    
    
     public void insertMusician(){
      
         String query= "INSERT INTO `musician` (`id`, `name`, `prenom`, `born`, `description`, `image`) VALUES (NULL, '"+ fxname.getText()+"' , '"+fxpr.getText()+"' , '"+fxdate.getValue()+"' , '"+fxdesc.getText() +"', 'images/Musicians/"+FileChooser()+"')";
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
 
     //VERIFICATION ET CONTROLE SAISIE D'AJOUT
     
    @FXML
    private void handleButtonAction(ActionEvent event) throws SQLException, FileNotFoundException {
       Connection conn = getConnection();
       Image i = new Image("/img/rsz_check.png");
//   String s = "C:\\Users\\HP\\Documents\\NetBeansProjects\\v3_1\\tsalhetlghalta\\before_transformation\\CRUDAziz\\src\\crudaziz\\click.mp3";
//		Media h = new Media(Paths.get(s).toUri().toString());
//		mediaPlayer = new MediaPlayer(h);
//		mediaPlayer.play();
//        
   
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
  search_musician(); 
        }


    }
    
    @FXML
    public String FileChooser(){
        FileChooser fc = new FileChooser();
         fc.setInitialDirectory(new File("C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife\\src\\images\\Musicians"));
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
//initView ();       

//music();
Timeline clock = new Timeline(new KeyFrame(Duration.ZERO, e -> {        
        LocalTime currentTime = LocalTime.now();
        time.setText(currentTime.getHour() + ":" + currentTime.getMinute() + ":" + currentTime.getSecond());
    }),
         new KeyFrame(Duration.seconds(1))
    );
    clock.setCycleCount(Animation.INDEFINITE);
    clock.play();

    showMusician();  
         
      
      search_musician();  
     export(TableMusician);
      
            
    }    

    @FXML
    private void SelectRow(MouseEvent event) {
        int id=TableMusician.getSelectionModel().getSelectedItem().getId();
        fxname.setText(TableMusician.getSelectionModel().getSelectedItem().getName());
        fxpr.setText(TableMusician.getSelectionModel().getSelectedItem().getPrenom());
        fxdate.setValue(LocalDate.parse(TableMusician.getSelectionModel().getSelectedItem().getBorn().toString()));
        fxdesc.setText(TableMusician.getSelectionModel().getSelectedItem().getDescription());
        Image image = new Image(TableMusician.getSelectionModel().getSelectedItem().getImage());
        imv.setImage(image);
    }
    
    @FXML
    private void ModifyRow(ActionEvent event) {
//        String s = "C:\\Users\\HP\\Documents\\NetBeansProjects\\v3_1\\tsalhetlghalta\\before_transformation\\CRUDAziz\\src\\crudaziz\\click.mp3";
//		Media h = new Media(Paths.get(s).toUri().toString());
//		mediaPlayer = new MediaPlayer(h);
//		mediaPlayer.play();
        String query = "UPDATE `musician` SET `name` = '"+ fxname.getText() +"',`prenom` = '"+ fxpr.getText() +"', `born` = '"+fxdate.getValue() + "', `description` = '"+fxdesc.getText()+ "',  `image` = 'images/Musicians/"+FileChooser()+"' WHERE id = "+ TableMusician.getSelectionModel().getSelectedItem().getId() +"";
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
  search_musician(); 
    }
  



    @FXML
    private void removeRow(ActionEvent event) {
//        String s = "C:\\Users\\HP\\Documents\\NetBeansProjects\\v3_1\\tsalhetlghalta\\before_transformation\\CRUDAziz\\src\\crudaziz\\click.mp3";
//		Media h = new Media(Paths.get(s).toUri().toString());
//		mediaPlayer = new MediaPlayer(h);
//		mediaPlayer.play();
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
  search_musician(); 
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
     
     
             Connection conn = getConnection();

   
    
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
FileOutputStream fileOut = new FileOutputStream("Table Des Musicians.xls");
hssfWorkbook.write(fileOut);
fileOut.close();
        } catch (IOException e) {
            e.printStackTrace();
        }




    }
}


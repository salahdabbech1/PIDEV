/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Movie;

import service.Event_Service;
import com.google.zxing.BarcodeFormat;
import com.google.zxing.WriterException;
import com.google.zxing.common.BitMatrix;
import com.google.zxing.qrcode.QRCodeWriter;
import java.awt.Graphics2D;
import java.awt.image.BufferedImage;
import javafx.event.ActionEvent;
import javafx.scene.control.*;
import java.io.File;
import java.io.IOException;
import java.math.BigInteger;
import java.net.URL;
import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;
import java.sql.Connection;
import java.sql.Date;
import java.sql.DriverManager;
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
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.geometry.Pos;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.DatePicker;
import javafx.scene.control.Label;
import javafx.scene.control.ListView;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.KeyEvent;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.BorderPane;
import javafx.scene.paint.Color;
import javafx.stage.FileChooser;
import javafx.stage.Modality;
import javafx.stage.Stage;
import javafx.util.Duration;
import javax.imageio.ImageIO;
import org.controlsfx.control.Notifications;
import entite.Event;
import static service.Event_Service.getMd5;

/**
 * FXML Controller class
 *
 * @author PersoPc
 */
public class EventController implements Initializable {

    private BorderPane bp;
    @FXML
    private AnchorPane ap;
    @FXML
    private TextField FieldName;
    @FXML
    private Button BtnChoose;
    @FXML
    private DatePicker FieldDateDeb;
    @FXML
    private DatePicker FieldDateFin;
    @FXML
    private TextField FieldAdresse;
    @FXML
    private ComboBox<String> FieldType;
    @FXML
    private ComboBox<String> FieldIDcontent;
    @FXML
    private TextField FieldIDcinema;
    @FXML
    private TableView<Event> TableEvents;
    @FXML
    private TableColumn<Event, String> ColName;
    @FXML
    private TableColumn<Event, Date> ColDateDeb;
    @FXML
    private TableColumn<Event, Date> ColDateFin;
    @FXML
    private TableColumn<Event, String> ColImage;
    @FXML
    private TableColumn<Event, String> ColAdresse;
    @FXML
    private TableColumn<Event, String> ColType;
    @FXML
    private TableColumn<Event, String> ColIDcontent;
    @FXML
    private TableColumn<Event, String> ColIDcinema;
    @FXML
    private Button BtnAdd;
    @FXML
    private Button BtnModify;
    @FXML
    private Button BtnRefresh;
    @FXML
    private Button RemoveRow;
    @FXML
    private ImageView imageEvent;
    @FXML
    private TextField TextSearch;
   // private ListView<Event> ListEvents;
    @FXML
    private ImageView Image_Qr;
    @FXML
    private TableColumn<Event,String> ColImageqr;
   
    /**
     * Initializes the controller class.
     * @param url
     * @param rb
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
     // setCellfromtabletoImageQR();
     FieldType.getItems().add("Consert");
        FieldType.getItems().add("Film");
        FieldType.getItems().add("onemanshow");
           
    showEvent();
        // TODO
    }    
    private void loadPage(String page){
    Parent root = null;
        try {
            root = FXMLLoader.load(getClass().getResource(page+".fxml"));
        } catch (IOException ex) {
            Logger.getLogger(FactorController.class.getName()).log(Level.SEVERE, null, ex);
        }
        bp.setCenter(root);
    }
    public void PushNotf(String title,String text){
        Notifications nb = Notifications.create()
                .title(title)
                .text(text)
                .graphic(null)
                .hideAfter(Duration.seconds(5))
                .position(Pos.BOTTOM_RIGHT)
                .onAction(new EventHandler<ActionEvent>(){
                    @Override
                    public void handle(ActionEvent event){
                        System.out.print("zzz");
                    }
                });
        if(title=="Success !")
            nb.showInformation();
        else if(title=="Error !")
            nb.showError();
    }

    @FXML
    private void showEvent() {
        
            ObservableList<Event> list = getEventlist();
//        ColID.setCellValueFactory(new PropertyValueFactory<>("id"));
//        ColID.cellFactoryProperty();
         ColName.setCellValueFactory(new PropertyValueFactory<>("Name"));
         ColDateDeb.setCellValueFactory(new PropertyValueFactory<>("DateDeb"));
         ColDateDeb.cellFactoryProperty();
         ColDateFin.setCellValueFactory(new PropertyValueFactory<>("DateFin"));
         ColDateFin.cellFactoryProperty();
         ColAdresse.setCellValueFactory(new PropertyValueFactory<>("Adresse"));
          ColType.setCellValueFactory(new PropertyValueFactory<>("Type"));
          ColIDcontent.setCellValueFactory(new PropertyValueFactory<>("idContent"));
          ColIDcinema.setCellValueFactory(new PropertyValueFactory<>("idCinema"));
        ColImage.setCellValueFactory(new PropertyValueFactory<>("image"));
                ColImageqr.setCellValueFactory(new PropertyValueFactory<>("image_qr"));


        TableEvents.setItems(list);
//        ListEvents.setItems(list);

//        ListActors.setCellFactory(new PropertyValueFactory<>("name"));
    }

    @FXML
    private void SearchEvent(KeyEvent event) {
        String name = TextSearch.getText();
        ObservableList<Event> eventList = FXCollections.observableArrayList();
        Connection conn = getConnection();
        String query = "Select * from event where (Name like '%"+name+"%') or (Adresse like '%"+name+"%')";
        Statement st;
        ResultSet rs;
        
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            Event events;
            while(rs.next()){
                events = new Event(rs.getInt("id"),rs.getDate("DateDeb"),rs.getDate("DateFin"),rs.getString("idContent"),rs.getString("idCinema"),rs.getString("Adresse"),rs.getString("Type"),rs.getString("Name"),rs.getString("image"));
                eventList.add(events);
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
//        ColID.setCellValueFactory(new PropertyValueFactory<>("id"));
//        ColID.cellFactoryProperty();
        ColName.setCellValueFactory(new PropertyValueFactory<>("name"));
        ColDateDeb.setCellValueFactory(new PropertyValueFactory<>("DateDeb"));
        ColDateDeb.cellFactoryProperty();
        ColDateFin.setCellValueFactory(new PropertyValueFactory<>("DateFin"));
        ColDateFin.cellFactoryProperty();
        ColImage.setCellValueFactory(new PropertyValueFactory<>("image"));
           ColImageqr.setCellValueFactory(new PropertyValueFactory<>("image_qr"));

        ColAdresse.setCellValueFactory(new PropertyValueFactory<>("Adresse"));
        ColType.setCellValueFactory(new PropertyValueFactory<>("Type"));
        ColIDcontent.setCellValueFactory(new PropertyValueFactory<>("IDcontent"));
        ColIDcinema.setCellValueFactory(new PropertyValueFactory<>("IDcinema"));
  
        TableEvents.setItems(eventList);
        
        
    }
    public class ConfirmBox{
        
        boolean answer = false;
        
        public boolean Confirm(String title,String message){
            Stage window = new Stage();
            ImageView view = new ImageView("images/Front/info.png");
            view.setFitHeight(100);
            view.setFitWidth(100);
            view.setLayoutX(500);
            window.initModality(Modality.APPLICATION_MODAL);
            window.setTitle(title);
            window.setMinWidth(400);
            window.setMinHeight(200);
            Label label = new Label();
            label.setText(message);
            label.setStyle("-fx-text-fill:white;");

            Button yesButton = new Button("Yes");
            Button noButton = new Button("No");
            yesButton.setOnAction(e -> {
                answer = true ;
                window.close();
            });
            noButton.setOnAction(e -> {
                answer = false ;
                window.close();
            });
            AnchorPane layout= new AnchorPane();
            layout.setStyle("-fx-background-color: #001935");
            layout.getChildren().addAll(label,yesButton,noButton,view);
            view.setLayoutX(10);
            view.setLayoutY(10);
            label.setLayoutX(125);
            label.setLayoutY(40);
            label.setTextFill(Color.web("#e7e5e5"));
            yesButton.setPrefWidth(70);
            yesButton.setPrefHeight(30);
            yesButton.setLayoutX(150);
            yesButton.setLayoutY(100);
            noButton.setPrefWidth(70);
            noButton.setPrefHeight(30);
            noButton.setLayoutX(230);
            noButton.setLayoutY(100);
            Scene scene = new Scene(layout);
            window.setScene(scene);
            window.showAndWait();

            return answer;
        }
    }
    
    
    public void doneBox(String title,String message){
        Stage window = new Stage();
        ImageView view = new ImageView("images/Front/success.png");
        view.setFitHeight(100);
        view.setFitWidth(100);
        view.setLayoutX(500);
        window.initModality(Modality.APPLICATION_MODAL);
        window.setTitle(title);
        window.setMinWidth(400);
        window.setMinHeight(200);
        Label label = new Label();
        label.setText(message);
        
        
        Button closeButton = new Button("OK");
        closeButton.setOnAction( e -> window.close());
        AnchorPane layout= new AnchorPane();
        layout.getChildren().addAll(label,closeButton,view);
        layout.setStyle("-fx-background-color: #001935");
        view.setLayoutX(10);
        view.setLayoutY(10);
        label.setLayoutX(125);
        label.setLayoutY(40);
        label.setStyle("-fx-text-fill:white;");
        closeButton.setPrefWidth(100);
        closeButton.setPrefHeight(30);
        closeButton.setLayoutX(200);
        closeButton.setLayoutY(100);
        Scene scene = new Scene(layout);
        window.setScene(scene);
        window.showAndWait();
        
        
    }
    
    public void errorBox(String title,String message){
        Stage window = new Stage();
        ImageView view = new ImageView("images/Front/error.png");
        view.setFitHeight(100);
        view.setFitWidth(100);
        view.setLayoutX(500);
        window.initModality(Modality.APPLICATION_MODAL);
        window.setTitle(title);
        window.setMinWidth(500);
        window.setMinHeight(250);
        Label label = new Label();
        label.setText(message);
        label.setStyle("-fx-text-fill:white;");
        
        Button closeButton = new Button("OK");
        closeButton.setOnAction( e -> window.close());
        AnchorPane layout= new AnchorPane();
        layout.getChildren().addAll(label,closeButton,view);
        layout.setStyle("-fx-background-color: #001935");
        view.setLayoutX(10);
        view.setLayoutY(10);
        label.setLayoutX(125);
        label.setLayoutY(40);
        closeButton.setPrefWidth(100);
        closeButton.setPrefHeight(30);
        closeButton.setLayoutX(200);
        closeButton.setLayoutY(100);
        Scene scene = new Scene(layout);
        window.setScene(scene);
        window.showAndWait();
        
        
    }
    public ObservableList<Event> getEventlist(){
        ObservableList<Event> eventList = FXCollections.observableArrayList();
        Connection conn = getConnection();
        String query = "Select * from event";
        Statement st;
        ResultSet rs;
        
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            Event events;
            while(rs.next()){
                events = new Event(rs.getInt("id"),rs.getDate("DateDeb"),rs.getDate("DateFin"),rs.getString("idContent"),rs.getString("idCinema"),rs.getString("Adresse"),rs.getString("Type"),rs.getString("Name"),rs.getString("image"),rs.getString("image_qr"));
                eventList.add(events);
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return eventList;
    }
     
    
    
//    private void Actor(MouseEvent event) {
//                loadPage("Actor");
//
//    }
//    
//    private void Event(MouseEvent event) {
//                bp.setCenter(ap);
//
//    }
//
//    private void Film(MouseEvent event) {
//                loadPage("Movie");
//
//    }
//    
//    private void Concert(MouseEvent event) {
//                loadPage("Concert");
//
//    }
//
//    private void Musician(MouseEvent event) {
//                loadPage("Musician");
//
//    }
    
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

    @FXML
    private String FileChooser() {
         FileChooser fc = new FileChooser(); 
        fc.setInitialDirectory(new File("C:\\Users\\bouyo\\Desktop\\Study\\S2\\Project\\JavaFX\\ArtLife\\src\\images\\Events"));
        fc.getExtensionFilters().add(new FileChooser.ExtensionFilter("jpg Files", "*.jpg"));
        fc.getExtensionFilters().add(new FileChooser.ExtensionFilter("jpeg Files", "*.jpeg"));
        fc.getExtensionFilters().add(new FileChooser.ExtensionFilter("png Files", "*.png"));
        File f = fc.showOpenDialog(null);
        if(f != null)
        {
//            System.out.println(f);
        }
        return f.getName();
    }

    @FXML
    private void SelectRow(MouseEvent event) {
          //int id=TableEvents.getSelectionModel().getSelectedItem().getId();
        FieldName.setText(TableEvents.getSelectionModel().getSelectedItem().getName());
        FieldDateDeb.setValue(LocalDate.parse(TableEvents.getSelectionModel().getSelectedItem().getDateDeb().toString()));
        FieldDateFin.setValue(LocalDate.parse(TableEvents.getSelectionModel().getSelectedItem().getDateFin().toString()));
        FieldAdresse.setText(TableEvents.getSelectionModel().getSelectedItem().getAdresse());
        FieldType.setValue(TableEvents.getSelectionModel().getSelectedItem().getType());
        FieldIDcontent.setValue(TableEvents.getSelectionModel().getSelectedItem().getIdContent());
        FieldIDcinema.setText(TableEvents.getSelectionModel().getSelectedItem().getIdCinema());
        Image image = new Image(TableEvents.getSelectionModel().getSelectedItem().getImage());
         String ImageUrl ="http://localhost/artlife/web/uploads/images/qrproduit/";
        
        Image image_qr = new Image( ImageUrl+TableEvents.getSelectionModel().getSelectedItem().getImage_qr());
        
        imageEvent.setImage(image);
        Image_Qr.setImage(image_qr);
        
    }
    // 
    private void insertEvent(ActionEvent event) throws SQLException, WriterException {
         String path = FileChooser();
      
            PushNotf("Success !","Your event has been added to the database !");
            doneBox("Added !", "Your event has been added to the database !");
           Date dd  = new java.sql.Date(new java.util.Date(FieldDateDeb.getEditor().getText()).getTime());

            Date df = new java.sql.Date(new java.util.Date(FieldDateFin.getEditor().getText()).getTime());
           Event eventajouter = new Event(0, (java.sql.Date)dd,(java.sql.Date)df,FieldIDcontent.getValue(),FieldIDcinema.getText(),FieldAdresse.getText(),FieldType.getValue(),FieldName.getText(),"/images/Events/"+path,"qr");
              Event_Service Service = new Event_Service();    
              Service.Ajouter(eventajouter);   
         // Event u = TableEvents.getItems().get(TableEvents.getSelectionModel().getSelectedIndex());
                          //     File f = new File("C:/PHP/htdocs/artlife/web/uploads/images/qrproduit/"+u.getImage());

       
        showEvent();
 
        
        
    }
    
    
    
    @FXML
    private void insertRow(){
         String path = FileChooser();
            
             Date dd  = new java.sql.Date(new java.util.Date(FieldDateDeb.getEditor().getText()).getTime());
            Date df = new java.sql.Date(new java.util.Date(FieldDateFin.getEditor().getText()).getTime());
            String code = getMd5(FieldAdresse.getText());
                   String imageqr = code + ".png";   
            String query = "INSERT INTO `event`(`id`, `Name`, `idContent`, `idCinema`, `DateDeb`, `Type`, `DateFin`, `Adresse`, `image`, `image_qr`) VALUES (NULL, '"+ FieldName.getText() +"', '"+ FieldIDcontent.getValue() +"', '"+ FieldIDcinema.getText() +"','"+ (java.sql.Date)dd +"','"+FieldType.getValue() +"', '"+ (java.sql.Date)df +"', '"+FieldAdresse.getText() +"','/images/Events/"+FileChooser()+"','"+imageqr+"');";
        if(executeQuery(query)!=0)
        {
          
//           Event eventajouter = new Event(0, (java.sql.Date)dd,(java.sql.Date)df,FieldIDcontent.getValue(),FieldIDcinema.getText(),FieldAdresse.getText(),FieldType.getValue(),FieldName.getText(),"/images/Events/"+path,"qr");
//              Event_Service Service = new Event_Service();     
         // Event u = TableEvents.getItems().get(TableEvents.getSelectionModel().getSelectedIndex());
                          //     File f = new File("C:/PHP/htdocs/artlife/web/uploads/images/qrproduit/"+u.getImage());

       
            PushNotf("Success !","Your event has been added to the database !");
            doneBox("Added !", "Your event has been added to the database !");
 
            
            
                       
//                q.setImage_qr(imageqr);

             QRCodeWriter qrCodeWriter = new QRCodeWriter();
            String data = "Adresse : "+ FieldAdresse.getText()+"<br> Merci pour votre confiance &#128525;";
            int width = 300;
            int height = 300;
            
            BufferedImage bufferedImage = null;
            try {
              BitMatrix byteMatrix = qrCodeWriter.encode(data,BarcodeFormat.QR_CODE, width, height);
      
                bufferedImage = new BufferedImage(width, height, BufferedImage.TYPE_INT_RGB);
                bufferedImage.createGraphics();
                
                Graphics2D image = (Graphics2D) bufferedImage.getGraphics();
                image.setColor(java.awt.Color.WHITE);
                image.fillRect(0, 0, width, height);
                image.setColor(java.awt.Color.BLACK);
                
                for (int i = 0; i < height; i++) {
                    for (int j = 0; j < width; j++) {
                        if (byteMatrix.get(i, j)) {
                            image.fillRect(i, j, 1, 1);
                        }
                    }
                }
                if (ImageIO.write(bufferedImage, "png", new File("C:/xampp/htdocs/artlife/web/uploads/images/qrproduit/"+code+".png")))
            {                                       
                System.out.println("-- saved");
            }
                System.out.println("QR created successfully....");
                
            } catch (WriterException ex) {
              System.out.println(ex); 
            } catch (IOException ex) {
                System.out.println(ex);   } 
        
        }
        showEvent();
    }
    
    @FXML
    public void setcontent(){
        Connection conn = getConnection();
        String type = FieldType.getValue().toString();
        String query=null;
        if (type=="Consert")
            query = "Select * from event";
        else if (type=="Film")
            query = "Select * from event";
        else if (type=="onemanshow")
            query = "Select * from event";
        Statement st;
        ResultSet rs;
        
        try{
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                FieldIDcontent.getItems().add(rs.getString("name"));
            }
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
        }
    }
    
    @FXML
    private void ModifyRow(ActionEvent event) {
        int id=TableEvents.getSelectionModel().getSelectedItem().getId();
        System.out.println(BtnChoose.getOnMouseClicked());
        
        
        String code = getMd5(FieldAdresse.getText());
                   String imageqr = code + ".png";
             
        
        String query = "UPDATE `event` SET `Name` = '" + FieldName.getText() + "', `idContent` = '" + FieldIDcontent.getValue() + "', `idCinema` = '" + FieldIDcinema.getText() +  "',   `DateDeb` = '" + FieldDateDeb.getValue() + "', `Type` = '" + FieldType.getValue() + "',  `DateFin` = '" +  FieldDateFin.getValue() + "', `Adresse` = '" + FieldAdresse.getText() + "', `image` = 'images/Events/"+FileChooser()+"',`image_qr` = '"+imageqr+"' WHERE `event`.`id` = "+ id +";";
        if(executeQuery(query)!=0){
            PushNotf("Success !","Your event has been modified !");
            doneBox("Modified !", "You event has been modified !");
            QRCodeWriter qrCodeWriter = new QRCodeWriter();
            String data = "Adresse : "+ FieldAdresse.getText()+"<br> Merci pour votre confiance &#128525;";
            int width = 300;
            int height = 300;
            
            BufferedImage bufferedImage = null;
            try {
              BitMatrix byteMatrix = qrCodeWriter.encode(data,BarcodeFormat.QR_CODE, width, height);
      
                bufferedImage = new BufferedImage(width, height, BufferedImage.TYPE_INT_RGB);
                bufferedImage.createGraphics();
                
                Graphics2D image = (Graphics2D) bufferedImage.getGraphics();
                image.setColor(java.awt.Color.WHITE);
                image.fillRect(0, 0, width, height);
                image.setColor(java.awt.Color.BLACK);
                
                for (int i = 0; i < height; i++) {
                    for (int j = 0; j < width; j++) {
                        if (byteMatrix.get(i, j)) {
                            image.fillRect(i, j, 1, 1);
                        }
                    }
                }
                if (ImageIO.write(bufferedImage, "png", new File("C:/xampp/htdocs/artlife/web/uploads/images/qrproduit/"+code+".png")))
            {                                       
                System.out.println("-- saved");
            }
                System.out.println("QR created successfully....");
                
            } catch (WriterException ex) {
              System.out.println(ex); 
            } catch (IOException ex) {
                System.out.println(ex);   } 
        }
        else {
            PushNotf("Error !","An error has occured check your inputs and try again");
            errorBox("Error !","An error has occured check your inputs and try again");
        }
        showEvent();     
    }

   

    @FXML
    private void removeRow(ActionEvent event) {
        int idDelete=TableEvents.getSelectionModel().getSelectedItem().getId();
        
        EventController.ConfirmBox c = new EventController.ConfirmBox();
        boolean answer = c.Confirm("Confirm Delete !", "You sure wanna delete this Event ?");
        if (answer){
            String  query = "DELETE FROM `event` WHERE `event`.`id` = '"+idDelete+"'";

            executeQuery(query);
            if (executeQuery(query)!=0)
            {
                PushNotf("Success !","Your Event has been deleted ");
                doneBox("Success !","Your Actor has been deleted ");
            }
            else {
               PushNotf("Success !","Your Event has been deleted ");
                doneBox("Success !","Your Event has been deleted ");
            }
        }
        showEvent();
        
        
    }
     private void setCellfromtabletoImageQR() {
        TableEvents.setOnMouseClicked(e -> {

            Event ab = TableEvents.getItems().get(TableEvents.getSelectionModel().getSelectedIndex());
            String ImageUrl ="http://localhost/artlife/web/uploads/images/qrproduit/";
        

        Image image = new Image( ImageUrl + ab.getImage_qr());
        Image_Qr.setImage(image);
        }
        );

    }

    
    
    public int executeQuery(String query){
        Connection conn = getConnection();
        Statement st;
        int test=0;
        try{
            st=conn.createStatement();
            test=st.executeUpdate(query);
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
        }
        
        return test;
    }
     
     
    
    
     
    
}

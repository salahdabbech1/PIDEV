/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Movie;

import Service.Event_Service;
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

/**
 * FXML Controller class
 *
 * @author PersoPc
 */
public class EventController implements Initializable {

    @FXML
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
    private TextField FieldType;
    @FXML
    private TextField FieldIDcontent;
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
    @FXML
    private ListView<Event> ListEvents;
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
        ListEvents.setItems(list);

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
     
    
    
    @FXML
    private void Actor(MouseEvent event) {
                loadPage("Actor");

    }
    
    @FXML
    private void Event(MouseEvent event) {
                bp.setCenter(ap);

    }

    @FXML
    private void Film(MouseEvent event) {
                loadPage("Movie");

    }
    
    @FXML
    private void Concert(MouseEvent event) {
                loadPage("Concert");

    }

    @FXML
    private void Musician(MouseEvent event) {
                loadPage("Musician");

    }
    
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
        fc.setInitialDirectory(new File("C:\\Users\\PersoPc\\Desktop\\ArtLife\\src\\images\\Events"));
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
        FieldType.setText(TableEvents.getSelectionModel().getSelectedItem().getType());
        FieldIDcontent.setText(TableEvents.getSelectionModel().getSelectedItem().getIdContent());
        FieldIDcinema.setText(TableEvents.getSelectionModel().getSelectedItem().getIdCinema());
        Image image = new Image(TableEvents.getSelectionModel().getSelectedItem().getImage());
         String ImageUrl ="http://localhost:8080/artlife/web/uploads/images/qrproduit/";
        
        Image image_qr = new Image( ImageUrl+TableEvents.getSelectionModel().getSelectedItem().getImage_qr());
        
        imageEvent.setImage(image);
        Image_Qr.setImage(image_qr);
        
    }
    // 
    @FXML
    private void insertEvent(ActionEvent event) throws SQLException {
         String path = FileChooser();
      
            PushNotf("Success !","Your event has been added to the database !");
            doneBox("Added !", "Your event has been added to the database !");
           Date dd  = new java.sql.Date(new java.util.Date(FieldDateDeb.getEditor().getText()).getTime());

            Date df = new java.sql.Date(new java.util.Date(FieldDateFin.getEditor().getText()).getTime());
           Event eventajouter = new Event(0, (java.sql.Date)dd,(java.sql.Date)df,FieldIDcontent.getText(),FieldIDcinema.getText(),FieldAdresse.getText(),FieldType.getText(),FieldName.getText(),"/images/Events/"+path,"qr");
              Event_Service Service = new Event_Service();    
              Service.Ajouter(eventajouter);   
         // Event u = TableEvents.getItems().get(TableEvents.getSelectionModel().getSelectedIndex());
                          //     File f = new File("C:/PHP/htdocs/artlife/web/uploads/images/qrproduit/"+u.getImage());

       
        showEvent();
 
        
        
    }

    @FXML
    private void ModifyRow(ActionEvent event) {
        int id=TableEvents.getSelectionModel().getSelectedItem().getId();
        System.out.println(BtnChoose.getOnMouseClicked());
        String query = "UPDATE `event` SET `Name` = '" + FieldName.getText() + "', `idContent` = '" + FieldIDcontent.getText() + "', `idCinema` = '" + FieldIDcinema.getText() +  "',   `DateDeb` = '" + FieldDateDeb.getValue() + "', `Type` = '" + FieldType.getText() + "',  `DateFin` = '" +  FieldDateFin.getValue() + "', `Adresse` = '" + FieldAdresse.getText() + "', `image` = '/images/Events/"+FileChooser()+"' WHERE `event`.`id` = "+ id +";";
        if(executeQuery(query)!=0){
            PushNotf("Success !","Your event has been modified !");
            doneBox("Modified !", "You event has been modified !");
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

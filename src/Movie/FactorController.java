/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Movie;



import javafx.event.ActionEvent;
import javafx.scene.control.*;


import java.util.*;
import com.itextpdf.text.Document;
import com.itextpdf.text.Element;
import com.itextpdf.text.Paragraph;
import com.itextpdf.text.pdf.PdfPCell;
import com.itextpdf.text.pdf.PdfPTable;
import com.itextpdf.text.pdf.PdfWriter;
import java.io.File;
import java.io.FileOutputStream;
import java.io.IOException;
import java.net.PasswordAuthentication;
import java.net.URL;
import java.sql.Connection;
import java.sql.Date;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import java.time.LocalDate;
import java.util.Properties;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.application.Application;
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
import javafx.scene.chart.PieChart;
import javafx.scene.control.Button;
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
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.BorderPane;
import javafx.scene.paint.Color;
import javafx.stage.FileChooser;
import javafx.stage.FileChooser.ExtensionFilter;
import javafx.stage.Modality;
import javafx.stage.Stage;
import javafx.util.Duration;
import javax.mail.*;
import javax.mail.internet.*;
import java.util.*;

import org.controlsfx.control.Notifications;

/**
 * FXML Controller class
 *
 * @author bouyo
 */
public class FactorController implements Initializable {

    @FXML
    private AnchorPane ap;
    @FXML
    private BorderPane bp;
    @FXML
    private TextField FieldName;
    @FXML
    private TextField TextSearch;
    @FXML
    private DatePicker FieldBorn;
    @FXML
    private Button BtnAdd;
    @FXML
    private Button BtnModify;
    @FXML
    private Button BtnRefresh;
    @FXML
    private Button RemoveRow;
    @FXML
    private Button BtnChoose;
    @FXML
    private TextArea FieldDesc;
    @FXML
    private TableColumn<Factor, String> ColName;
    @FXML
    private TableColumn<Factor, Date> ColBorn;
    @FXML
    private TableColumn<Factor, String> ColDescription;
    @FXML
    private TableColumn<Factor, String> ColImage;
    PropertyValueFactory<Factor, String> a ;
    @FXML
    private TableView<Factor> TableActors;
    @FXML
    private ImageView imageFactor;
    @FXML
    private Button BtnAdd1;
    @FXML
    private Button BtnAdd11;
    @FXML
    private ListView<Factor> ListActors;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        showFactor();
        
        
//        if(event.getSource()==BtnAdd){
//        insertFactor();
//        }
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
    
    
    @FXML
    private void Actor(MouseEvent event) {
        bp.setCenter(ap);
    }

    @FXML
    private void Film(MouseEvent event) {
        loadPage("Movie");
    }

    @FXML
    private void sendEmail(ActionEvent event) {
    }

    @FXML
    private void Concert(MouseEvent event) {
        loadPage("Concert");
    }

    @FXML
    private void Musician(MouseEvent event) {
        loadPage("Musician");
    }

    @FXML
    private void user(MouseEvent event) {
         loadPage("user");
    }

    @FXML
    private void reservation(MouseEvent event) {
         loadPage("reservation");
    }

    @FXML
    private void Tactor(MouseEvent event) {
        loadPage("Tactor");
    }

    @FXML
    private void Theatre(MouseEvent event) {
        loadPage("Theatre");
    }
    
    public class Mail {
        
        
        String  username="yosribouzid123@gmail.com"; 
        char[] password ={ 'a', 'b', 'c', 'd', 'e' };
        public Label sentBoolValue;

        public void buttonClicked(ActionEvent actionEvent){
            sendEmail();
        }
        
        public PasswordAuthentication getPasswordAuthentication() {
                    return new PasswordAuthentication(username, password);
                }
        
        public void sendEmail(){
            String to = "yosri.bouzid@esprit.tn";
            String from = "yosribouzid123@gmail.com";
            String host = "smtp.gmail.com";
            String username="yosribouzid123@gmail.com"; 
            String password ="Rengar12";

            //setup mail server

            Properties props = System.getProperties();
            props.put("mail.smtp.auth", "true");
            props.put("mail.smtp.starttls.enable", "true");
            props.put("mail.smtp.host", host);
            props.put("mail.smtp.port", "587");
            
            
            
            Session session = Session.getDefaultInstance(props, new javax.mail.Authenticator() {});

            try{

                //create mail
                MimeMessage m = new MimeMessage(session);
                m.setFrom(new InternetAddress(from));
                m.addRecipient(MimeMessage.RecipientType.TO, new InternetAddress(to));
                m.setSubject("subject");
                m.setText("content");

                //send mail

                Transport.send(m);
                sentBoolValue.setVisible(true);
                System.out.println("Message sent!");

            }   catch (MessagingException e){
                e.printStackTrace();
            }

        }
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
    private void fairepdf(ActionEvent event) {

         Document document = new Document();
        try {

            PdfWriter.getInstance(document, new FileOutputStream("actors.pdf"));
            document.open();
            Paragraph ph1 = new Paragraph("These are ArtLife actors !");
            Paragraph ph2 = new Paragraph("\n");
            PdfPTable table = new PdfPTable(3);
            
            
            ObservableList<Factor> factorList = FXCollections.observableArrayList();
            Connection conn = getConnection();
            String query = "Select * from factor";
            Statement st;
            ResultSet rs;
            //On créer l'objet cellule.
            PdfPCell cell;

            //contenu du tableau.
//            table.addCell("Image : ");
            table.addCell("Name : ");
            table.addCell("Born : ");
            table.addCell("Description : ");
            
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            Factor factors;
            while(rs.next()){
//                Image image = new Image(rs.getString("name"));
                
//                PdfPCell Image = null;
//                
//                Image image = new Image(rs.getString("name"));
//                table.addCell(Image );
//                table.addCell(rs.getString("image"));
                table.addCell(rs.getString("name"));
                table.addCell(rs.getString("born"));
                table.setHorizontalAlignment(Element.ALIGN_CENTER);
                table.addCell(rs.getString("description"));
            }
            
            document.add(ph1);
            document.add(ph2);
            document.add(table);
            document.addAuthor("ArtLife");
            PushNotf("Success !","Your PDF was generated in ArtLife/actors.pdf !");
            doneBox("Added !", "Your PDF was generated in ArtLife/actors.pdf !");
        } catch (Exception e) {
            System.out.println(e);
        }
        document.close();











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
    
    public ObservableList<Factor> getFactorlist(){
        ObservableList<Factor> factorList = FXCollections.observableArrayList();
        Connection conn = getConnection();
        String query = "Select * from factor";
        Statement st;
        ResultSet rs;
        
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            Factor factors;
            while(rs.next()){
                factors = new Factor(rs.getInt("id"),rs.getString("name"),rs.getDate("born"),rs.getString("description"),rs.getString("image"));
                factorList.add(factors);
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return factorList;
    }
    @FXML
    String FileChooser(){
        FileChooser fc = new FileChooser();
        fc.setInitialDirectory(new File("C:\\Users\\ahmed\\OneDrive\\Documents\\ArtLife\\src\\images\\Factors"));
        fc.getExtensionFilters().add(new ExtensionFilter("jpg Files", "*.jpg"));
        fc.getExtensionFilters().add(new ExtensionFilter("jpeg Files", "*.jpeg"));
        fc.getExtensionFilters().add(new ExtensionFilter("png Files", "*.png"));
        File f = fc.showOpenDialog(null);
        if(f != null)
        {
//            System.out.println(f);
        }
        return f.getName();
    }
    @FXML
    public void SearchActor(){
        String name = TextSearch.getText();
        ObservableList<Factor> factorList = FXCollections.observableArrayList();
        Connection conn = getConnection();
        String query = "Select * from factor where (name like '%"+name+"%') or (description like '%"+name+"%')";
        Statement st;
        ResultSet rs;
        
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            Factor factors;
            while(rs.next()){
                factors = new Factor(rs.getInt("id"),rs.getString("name"),rs.getDate("born"),rs.getString("description"),rs.getString("image"));
                factorList.add(factors);
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
//        ColID.setCellValueFactory(new PropertyValueFactory<>("id"));
//        ColID.cellFactoryProperty();
        ColName.setCellValueFactory(new PropertyValueFactory<>("name"));
        ColDescription.setCellValueFactory(new PropertyValueFactory<>("description"));
        ColBorn.setCellValueFactory(new PropertyValueFactory<>("born"));
        ColBorn.cellFactoryProperty();
        ColImage.setCellValueFactory(new PropertyValueFactory<>("image"));
        
        TableActors.setItems(factorList);
    }
    @FXML
    public void SelectRow(){
        int id=TableActors.getSelectionModel().getSelectedItem().getId();
        FieldName.setText(TableActors.getSelectionModel().getSelectedItem().getName());
        FieldDesc.setText(TableActors.getSelectionModel().getSelectedItem().getDescription());
        FieldBorn.setValue(LocalDate.parse(TableActors.getSelectionModel().getSelectedItem().getBorn().toString()));
        Image image = new Image(TableActors.getSelectionModel().getSelectedItem().getImage());
        imageFactor.setImage(image);
    }

    @FXML
    private void ModifyRow() {
        int id=TableActors.getSelectionModel().getSelectedItem().getId();
        System.out.println(BtnChoose.getOnMouseClicked());
        String query = "UPDATE `factor` SET `name` = '"+ FieldName.getText() +"',`born` = '"+ FieldBorn.getValue() +"', `description` = '"+FieldDesc.getText() + "', `image` = '/images/Factors/"+FileChooser()+"' WHERE `factor`.`id` = "+ id+";";
        if(executeQuery(query)!=0){
            PushNotf("Success !","Your actor has been modified !");
            doneBox("Modified !", "You actor has been modified !");
        }
        else {
            PushNotf("Error !","An error has occured check your inputs and try again");
            errorBox("Error !","An error has occured check your inputs and try again");
        }
        showFactor();
    }

    @FXML
    private void showFactor() {
        
        ObservableList<Factor> list = getFactorlist();
//        ColID.setCellValueFactory(new PropertyValueFactory<>("id"));
//        ColID.cellFactoryProperty();
        ColName.setCellValueFactory(new PropertyValueFactory<>("name"));
        ColDescription.setCellValueFactory(new PropertyValueFactory<>("description"));
        ColBorn.setCellValueFactory(new PropertyValueFactory<>("born"));
        ColBorn.cellFactoryProperty();
        ColImage.setCellValueFactory(new PropertyValueFactory<>("image"));
        
        TableActors.setItems(list);
        ListActors.setItems(list);
//        ListActors.setCellFactory(new PropertyValueFactory<>("name"));
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
    
    @FXML
    public void insertFactor(){
        String path = FileChooser();
        String query = "INSERT INTO `factor` (`id`, `name`, `born`, `description`, `image`) VALUES (NULL, '"+FieldName.getText()+"', '"+ FieldBorn.getValue() +"', '"+FieldDesc.getText() +"', '/images/Factor/"+path+"');"; 
        if(executeQuery(query)!=0){
            PushNotf("Success !","Your actor has been added to the database !");
            doneBox("Added !", "Your actor has been added to the database !");
        }
        else {
            PushNotf("Error !","An error has occured check your inputs and try again");
            errorBox("Error !","An error has occured check your inputs and try again");
        }
        showFactor();
    }

    @FXML
    private void removeRow() {
        int idDelete=TableActors.getSelectionModel().getSelectedItem().getId();
        
        ConfirmBox c = new ConfirmBox();
        boolean answer = c.Confirm("Confirm Delete !", "You sure wanna delete this Actor ?");
        if (answer){
            String query = "DELETE FROM `filmactors` WHERE `filmactors`.`Faid` = '"+idDelete+"'";
            executeQuery(query);
            query = "DELETE FROM `factor` WHERE `factor`.`id` = '"+idDelete+"'";
            if (executeQuery(query)!=0)
            {
                PushNotf("Success !","Your Actor has been deleted ");
                doneBox("Success !","Your Actor has been deleted ");
            }
            else {
                PushNotf("Error !","An error has occured and the actor wasnt deleted");
                errorBox("Error !","An error has occured and the actor wasnt deleted");
            }
        }
        showFactor();
    }

    
}

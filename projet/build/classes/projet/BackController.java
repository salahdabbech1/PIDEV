/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projet;

import projet.entite.cinema;
import java.io.File;
import java.net.URL;
import java.sql.Connection;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.text.MessageFormat;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.DatePicker;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.BorderPane;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import projet.entite.ticket;
import projet.entite.user;
import service.service_reservation;
import service.service_user;
import static utils.DatabaseConnection.getConn;
import java.time.LocalDate;
import java.util.ArrayList;
import javafx.collections.transformation.FilteredList;
import javafx.collections.transformation.SortedList;
import javafx.event.EventHandler;
import javafx.scene.chart.BarChart;
import javafx.scene.chart.PieChart;
import javafx.scene.control.ComboBox;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.stage.Window;
import javafx.util.Duration;
import org.controlsfx.control.Notifications;

 
import projet.entite.event;

/**
 * FXML Controller class
 *
 * @author KARIMOOOO
 */
public class BackController implements Initializable {

    
    
     
    String query = null;
    Connection connection = null ;
    PreparedStatement preparedStatement = null ;
    ResultSet resultSet = null ;
    user user = null ;
    cinema cinema=null;
    
    
    //ObservableList<user>  userList = FXCollections.observableArrayList();
    //ObservableList<ticket> ticketList = FXCollections.observableArrayList();
    @FXML
    private BorderPane bp;
    @FXML
    private Button backClose;
    @FXML
    private AnchorPane ap;
    @FXML
    private TableView<user> tabUser;
    @FXML
    private TableColumn<user, String> Colname;
    @FXML
    private TableColumn<user, String> Colpassword;
    @FXML
    private TableColumn<user, String> Colemail;
    @FXML
    private TableColumn<user, Integer> Colrole;
    @FXML
    private TableColumn<user, String> Colimage;
    @FXML
    private TextField TextFieldUserid;
    @FXML
    private TextField TextFieldUserpassword;
    @FXML
    private TextField TextFieldUseremail;
    @FXML
    private Button btnUpdate;
    @FXML
    private Button btnDelete;
    @FXML
    private TextField idUserR;
    
    @FXML
    private TextField idSalla;
    @FXML
    private TextField chaise;
    @FXML
    private ComboBox<String> idEvent;
    @FXML
    private TextField montant;
    @FXML
    private DatePicker dateR;
    @FXML
    private TableView<ticket> tabRes;
    @FXML
    private TableColumn<ticket, Integer> ColResidUser;
    @FXML
    private TableColumn<ticket, Date> ColResDate;
    @FXML
    private TableColumn<ticket,String> ColResidCinema;
    @FXML
    private TableColumn<ticket, Integer> ColResidSalle;
    @FXML
    private TableColumn<ticket, String> Colchaise;
    @FXML
    private TableColumn<ticket, Integer> ColidEvent;
    @FXML
    private TableColumn<ticket, Integer> ColMontant;
    @FXML
    private Button addRes;
    @FXML
    private Button btn_image;
    @FXML
    private ComboBox<String> idCinemaG;
    @FXML
    private ImageView imageFactor;
    @FXML
    private Label lbl_userN;
    @FXML
    private Label lbl_userN2;
    @FXML
    private TextField rechercheField;
    @FXML
    private TextField rechercheRField;
     
    @FXML
    private PieChart piechart;
    ObservableList<PieChart.Data> piedata;
    
    @FXML
    private Label label1;
    
    
   
    


  
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
         LoadData();
        piechart.setData(piedata);
        
//                     
               /* for (final PieChart.Data data:piechart.getData()) {
            data.getNode().addEventHandler(MouseEvent.MOUSE_CLICKED, new EventHandler<MouseEvent>() {
                @Override
                public void handle(MouseEvent e) {
                    double total = 0;
                    for (PieChart.Data d : piechart.getData()) {
                        total += d.getPieValue();
                    }
                    label1.setTranslateX(e.getSceneX());
                    label1.setTranslateY(e.getSceneY());
                    String text = String.format("%.1f%%", 100*data.getPieValue()/total) ;
                    label1.setText(text);
                }
            });
        }*/
        try {
            showUser();
        } catch (SQLException ex) {
            Logger.getLogger(BackController.class.getName()).log(Level.SEVERE, null, ex);
        }
        try {
            showReservation();
        } catch (SQLException ex) {
            Logger.getLogger(BackController.class.getName()).log(Level.SEVERE, null, ex);
        }
       ObservableList data = FXCollections.observableArrayList();
        ObservableList comboString = FXCollections.observableArrayList();

        
Connection conn = getConn();
        String query = "Select name from cinema";
        Statement st;
        ResultSet rs;
try {
             st=conn.createStatement();
            rs=st.executeQuery(query);
             
            while (rs.next()) {
                        data.add(new cinema(rs.getString("name")));
                        comboString.add(rs.getString("name"));

            }

        } catch (SQLException ex) {
            System.err.println("Error"+ex);
        }
        idCinemaG.setItems(null);
        idCinemaG.setItems(comboString);
        
        
        ObservableList data1 = FXCollections.observableArrayList();
        ObservableList comboString1 = FXCollections.observableArrayList();

        
Connection conn1 = getConn();
        String query1 = "Select name from event";
        Statement st1;
        ResultSet rs1;
try {
             st1=conn1.createStatement();
            rs1=st1.executeQuery(query1);
             
            while (rs1.next()) {
                        data1.add(new event(rs1.getString("Name")));
                        comboString1.add(rs1.getString("Name"));

            }

        } catch (SQLException ex) {
            System.err.println("Error"+ex);
        }
        idEvent.setItems(null);
        idEvent.setItems(comboString1);
        
        try {
            search_user();
        } catch (SQLException ex) {
            Logger.getLogger(BackController.class.getName()).log(Level.SEVERE, null, ex);
        }
        try {
            search_Res();
        } catch (SQLException ex) {
            Logger.getLogger(BackController.class.getName()).log(Level.SEVERE, null, ex);
        }
       
     }   
    
    
    
    
   /* public Connection getConnection(){ 
    Connection conn; 
    try{ 
        conn= DriverManager.getConnection("jdbc:mysql://localhost:3306/artlife", "root","");
    return conn;
    } 
    catch(Exception ex){ 
    System.out.println("Error: " + ex.getMessage());
    return null;
    }
    }*/
     /*public ObservableList<ticket> getticketlist(){
        ObservableList<ticket> ticketList = FXCollections.observableArrayList();
        Connection conn = getConnection();
        String query = "Select * from ticket";
        Statement st;
        ResultSet rs;
        
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            ticket tickets;
            while(rs.next()){
               
                tickets = new ticket(rs.getInt("id"),rs.getInt("idUser"),rs.getInt("idCinema"),rs.getInt("idSalle"),rs.getInt("idEvent"),rs.getInt("montant"),rs.getDate("date"),rs.getString("chaise"));
                ticketList.add(tickets); 
                System.out.println(rs.getInt("id"));
                
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return ticketList;
    }*/
    
    public ObservableList<ticket> getRes(){
        ObservableList<ticket> ResList = FXCollections.observableArrayList();
        Connection conn = getConn();
        String Uqueri = "Select * from ticket";
        Statement st;
        ResultSet rs;
        
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(Uqueri);
            ticket tickets;
            while(rs.next()){
              
                tickets = new ticket(rs.getInt("id"),rs.getInt("idUser"),rs.getString("idCinema"),rs.getInt("idSalle"),rs.getString("idEvent"),rs.getInt("montant"),rs.getDate("date").toLocalDate(),rs.getString("chaise"));
                ResList.add(tickets);
                


                  
               // Boxxx.getItems().add(rs.getString("id"));
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return ResList;
    }
    
    public void showUser() throws SQLException{
         service_user sc= new service_user();
        ObservableList<user> list = (ObservableList<user>) sc.read();
       
       // Colid.setCellValueFactory(new PropertyValueFactory<>("id"));
       // Colid.cellFactoryProperty();
         Colname.setCellValueFactory(new PropertyValueFactory<>("name"));
         Colpassword.setCellValueFactory(new PropertyValueFactory<>("password"));
         Colemail.setCellValueFactory(new PropertyValueFactory<>("email"));
         Colrole.setCellValueFactory(new PropertyValueFactory<>("role"));
        Colrole.cellFactoryProperty();
         Colimage.setCellValueFactory(new PropertyValueFactory<>("image"));

        tabUser.setItems(list);
    }
    public void showReservation() throws SQLException{
    /*service_reservation sc= new service_reservation();
        ObservableList<ticket> list = (ObservableList<ticket>) sc.read();*/
    ObservableList<ticket> list = getRes();
       
      //  ColResid.setCellValueFactory(new PropertyValueFactory<>("id"));
        //ColResid.cellFactoryProperty();
         ColResidUser.setCellValueFactory(new PropertyValueFactory<>("idUser"));
         ColResidUser.cellFactoryProperty();
         ColResDate.setCellValueFactory(new PropertyValueFactory<>("date"));
        ColResDate.cellFactoryProperty();
        ColResidCinema.setCellValueFactory(new PropertyValueFactory<>("idCinema"));
         ColResidCinema.cellFactoryProperty();
         
        ColResidSalle.setCellValueFactory(new PropertyValueFactory<>("idSalle"));
        ColResidSalle.cellFactoryProperty();
                Colchaise.setCellValueFactory(new PropertyValueFactory<>("chaise"));

        ColidEvent.setCellValueFactory(new PropertyValueFactory<>("idEvent"));
        ColidEvent.cellFactoryProperty();
        ColMontant.setCellValueFactory(new PropertyValueFactory<>("montant"));
        ColMontant.cellFactoryProperty();
        tabRes.setItems(list);
    }
    
    public void executeQuery(String query){
        Connection conn = getConn();
        Statement st;
        try{
            st=conn.createStatement();
            st.executeUpdate(query);
        }
        catch(SQLException ex)
        {
            ex.printStackTrace();
            
        }
    }
    @FXML
    public void insertRes() throws SQLException{
        String query = "INSERT INTO `ticket` (`id`,`idUser`, `date`, `idCinema`, `idSalle`, `chaise`, `idEvent`, `montant`) VALUES (NULL, '"+ idUserR.getText() +"','"+dateR.getValue() +"', '"+ idCinemaG.getValue() +"', '"+ idSalla.getText() +"', '"+ chaise.getText() +"','"+ idEvent.getValue() +"','"+ montant.getText() +"');";
      // String query = "INSERT INTO `film` (`id`, `name`, `idactor`, `genre`, `rdate`, `image`) VALUES (NULL, '"+ FieldName.getText() +"', '"+FieldIdActor.getText()+"', '"+ GenreBox.getValue() +"', '"+FieldRelease.getValue() +"', '');";
        executeQuery(query);
        showReservation();
        notificationadd();
    }
    
    @FXML
    public void removeRowUser() throws SQLException{
         int idDelete=tabUser.getSelectionModel().getSelectedItem().getId();
        service_user sc=new  service_user();
        sc.delete(idDelete);
        showUser();
        notificationsupp();
    }
    
    @FXML
    public void removeRowRes() throws SQLException{
        int idDelete=tabRes.getSelectionModel().getSelectedItem().getId();
        service_reservation sc=new service_reservation();
        sc.delete(idDelete);
         
        showReservation();
        notificationsupp();
    }
    
    /*@FXML
    public void ModifyRow(ActionEvent event) throws SQLException{
        int id=tabUser.getSelectionModel().getSelectedItem().getId();
    user u  = new user(id,TextFieldUserid.getText(),TextFieldUserpassword.getText(),TextFieldUseremail.getText(),/images/Factors/ this.FileChooser());
     service_user sc=new service_user();
     sc.update(u);
     showUser();
    
   
    
//String query = "UPDATE user SET name = '"+ TextFieldUserid.getText() +"',`password` = '"+ TextFieldUserpassword.getText() +"', `email` = '"+ TextFieldUseremail.getText() + "'  WHERE `user`.`id` = "+ id+";";
               //"UPDATE `film` SET `name` = '"+ FieldName.getText() +"',`genre` = '"+ GenreBox.getValue() +"', `rdate` = '"+FieldRelease.getValue() + "', `idactor` = '"+FieldIdActor.getText()+"' WHERE `film`.`id` = "+ id+";";
//executeQuery(query);
        //showUser();
    }*/
    @FXML
    private void ModifyRow(ActionEvent event) throws SQLException {
        int id = ((user)this.tabUser.getSelectionModel().getSelectedItem()).getId();
        String query = "UPDATE `user` SET `name` = '" + this.TextFieldUserid.getText() + "',`password` = '" + this.TextFieldUserpassword.getText() + "', `email` = '" + this.TextFieldUseremail.getText() + "', `image` = '/image/" + FileChooser() + "' WHERE `user`.`id` = " + id + ";";
        this.executeQuery(query);
        this.showUser();
        notificationmod();
    }
  // @FXML
    //public void ModifyRowRes(ActionEvent event) throws SQLException{
              //  int id=tabRes.getSelectionModel().getSelectedItem().getId();

    
      // ticket t  = new ticket(Integer.parseInt(idUserR.getText()),Integer.parseInt(idCinema.getText()),Integer.parseInt(idSalla.getText()),Integer.parseInt(idEvent.getText()),Integer.parseInt( montant.getText()),/*java.util.Date*/ dateR.getValue(),chaise.getText());

  //int id,int idUser,int idCinema,int idSalle,int idEvent,int montant,java.util.Date date,String chaise
    // service_reservation sc=new service_reservation();
   // sc.update(t);    
   // showReservation();
    //} 
    @FXML
      private void ModifyRowR(ActionEvent event) throws SQLException {
      String query = "UPDATE ticket SET idUser  = '"+ idUserR.getText() +"',idCinema = '"+ idCinemaG.getValue() + "', idSalle = '"+idSalla.getText()+ "', idEvent = '"+idEvent.getValue() +"',montant = '"+ montant.getText() +"', Date = '"+dateR.getValue() + "', chaise = '"+chaise.getText()+ "' WHERE id = "+ tabRes.getSelectionModel().getSelectedItem().getId() +"";
        executeQuery(query);
        showReservation();
        notificationmod();

    }
    
    
   @FXML
    public void SelectRow(){
        int id=tabUser.getSelectionModel().getSelectedItem().getId();
        TextFieldUserid.setText(tabUser.getSelectionModel().getSelectedItem().getName());
        TextFieldUserpassword.setText(tabUser.getSelectionModel().getSelectedItem().getPassword());
        TextFieldUseremail.setText(tabUser.getSelectionModel().getSelectedItem().getEmail());
 Image image = new Image(((user)this.tabUser.getSelectionModel().getSelectedItem()).getImage());
        this.imageFactor.setImage(image);
    }
    @FXML
    public void SelectRowRes(){
        int id=tabRes.getSelectionModel().getSelectedItem().getId();
        idUserR.setText(Integer.toString(tabRes.getSelectionModel().getSelectedItem().getIdUser()));
        idCinemaG.setValue((tabRes.getSelectionModel().getSelectedItem().getIdCinema()));
        idSalla.setText(Integer.toString(tabRes.getSelectionModel().getSelectedItem().getIdSalle()));
        chaise.setText(tabRes.getSelectionModel().getSelectedItem().getChaise());
        idEvent.setValue((tabRes.getSelectionModel().getSelectedItem().getIdEvent()));
        montant.setText(Integer.toString(tabRes.getSelectionModel().getSelectedItem().getMontant()));
        dateR.setValue(LocalDate.parse(tabRes.getSelectionModel().getSelectedItem().getDate().toString()));
 
    }

     @FXML
    private void closeBackButtonOnAction(ActionEvent event) {
          Stage stage =(Stage) backClose.getScene().getWindow();
        stage.close();
    }
    /* @FXML
    private void Loadimg(MouseEvent event) throws IOException {
        Stage stage=(Stage)btn_image.getScene().getWindow();
        FileChooser fileChooser = new FileChooser();
        
fileChooser.setTitle("Open Resource File");
fileChooser.getExtensionFilters().addAll(new FileChooser.ExtensionFilter("Images","*.png","*.jpg","*.gif"));
File f=fileChooser.showOpenDialog(stage);
imageField.setText(f.getName());
    }*/
       @FXML
    String FileChooser() {
        FileChooser fc = new FileChooser();
        fc.setInitialDirectory(new File("C:\\Users\\ouesl\\Documents\\NetBeansProjects\\projet\\src\\image"));
        fc.getExtensionFilters().addAll(new FileChooser.ExtensionFilter("Images","*.png","*.jpg","*.gif"));


        File f = fc.showOpenDialog((Window)null);
        if (f != null) {
            System.out.println(f);
        }

        return f.getName();
    }
    void search_user() throws SQLException {
// ColID.setCellValueFactory(new PropertyValueFactory<Musician, Integer>("id"));
         Colname.setCellValueFactory(new PropertyValueFactory<>("name"));
         Colpassword.setCellValueFactory(new PropertyValueFactory<>("password"));
         Colemail.setCellValueFactory(new PropertyValueFactory<>("email"));
         Colrole.setCellValueFactory(new PropertyValueFactory<>("role"));
        Colrole.cellFactoryProperty();
         Colimage.setCellValueFactory(new PropertyValueFactory<>("image"));
         service_user sc= new service_user();
  ObservableList<user> list = (ObservableList<user>) sc.read();
        tabUser.setItems(list);
        FilteredList<user> filteredData = new FilteredList<>(list, b -> true); 
 rechercheField.textProperty().addListener((observable, oldValue, newValue) -> {
 filteredData.setPredicate(m -> {
    if (newValue == null || newValue.isEmpty()) {
     return true;
    }
    String lowerCaseFilter = newValue.toLowerCase();

    if (m.getName().toLowerCase().indexOf(lowerCaseFilter) != -1) {
     return true; // Filter matches username
    }else if (m.getPassword().toLowerCase().indexOf(lowerCaseFilter) != -1) {
     return true; // Filter matches password
    }
    else if (m.getEmail().toLowerCase().indexOf(lowerCaseFilter) != -1)
         return true;// Filter matches email
    else if (String.valueOf(m.getId()).toLowerCase().indexOf(lowerCaseFilter) != -1)
         return true;// Filter matches email
         else
          return false; // Does not match.
   });
  });
  SortedList<user> sortedData = new SortedList<>(filteredData);
  sortedData.comparatorProperty().bind(tabUser.comparatorProperty());
  tabUser.setItems(sortedData);
    }
     void search_Res() throws SQLException {
// ColID.setCellValueFactory(new PropertyValueFactory<Musician, Integer>("id"));
        ColResidUser.setCellValueFactory(new PropertyValueFactory<>("idUser"));
         ColResidUser.cellFactoryProperty();
         ColResDate.setCellValueFactory(new PropertyValueFactory<>("date"));
        ColResDate.cellFactoryProperty();
        ColResidCinema.setCellValueFactory(new PropertyValueFactory<>("idCinema"));
         ColResidCinema.cellFactoryProperty();
         
        ColResidSalle.setCellValueFactory(new PropertyValueFactory<>("idSalle"));
        ColResidSalle.cellFactoryProperty();
                Colchaise.setCellValueFactory(new PropertyValueFactory<>("chaise"));

        ColidEvent.setCellValueFactory(new PropertyValueFactory<>("idEvent"));
        ColidEvent.cellFactoryProperty();
        ColMontant.setCellValueFactory(new PropertyValueFactory<>("montant"));
        ColMontant.cellFactoryProperty();
         service_reservation sc= new service_reservation();
  ObservableList<ticket> list = (ObservableList<ticket>) sc.read();
        tabRes.setItems(list);
        FilteredList<ticket> filteredData = new FilteredList<>(list, b -> true); 
 rechercheRField.textProperty().addListener((observable, oldValue, newValue) -> {
 filteredData.setPredicate(m -> {
    if (newValue == null || newValue.isEmpty()) {
     return true;
    }
    String lowerCaseFilter = newValue.toLowerCase();

    if (m.getIdCinema() .toLowerCase().indexOf(lowerCaseFilter) != -1) {
     return true; // Filter matches username
    }else if (m.getChaise().toLowerCase().indexOf(lowerCaseFilter) != -1) {
     return true; // Filter matches password
    }
    else if (m.getIdEvent().toLowerCase().indexOf(lowerCaseFilter) != -1)
     return true;// Filter matches email
    else if (String.valueOf(m.getId()).toLowerCase().indexOf(lowerCaseFilter) != -1)
         return true;// Filter matches email
         else
          return false; // Does not match.
   });
  });
  SortedList<ticket> sortedData = new SortedList<>(filteredData);
  sortedData.comparatorProperty().bind(tabRes.comparatorProperty());
  tabRes.setItems(sortedData);
    }
     
   /*  
    @FXML
    private void print(ActionEvent event) {
        MessageFormat header =new MessageFormat("Liste reservation:");
        MessageFormat footer =new MessageFormat("page{0,number,integer}");
      try{
          tabRes.print();   
         }catch(Exception ex){
          System.err.format("erreur d'impression",ex.getMessage());
      } 

    }*/
     public void notificationadd(){
       Image image;
        image = new Image("/image/tik.png");
        Notifications notifications=Notifications.create();
        notifications.graphic(new ImageView(image));
        notifications.text("Add succsesfully");
        notifications.title("Success message");
        notifications.hideAfter(Duration.seconds(2));
        notifications.show();
        
     }
     
      public void notificationmod(){
       Image image;
        image = new Image("/image/tik.png");
        Notifications notifications=Notifications.create();
        notifications.graphic(new ImageView(image));
        notifications.text("Update succsesfully");
        notifications.title("Success message");
        notifications.hideAfter(Duration.seconds(2));
        notifications.show();
        
     }
      
       public void notificationsupp(){
       Image image;
        image = new Image("/image/tik.png");
        Notifications notifications=Notifications.create();
        notifications.graphic(new ImageView(image));
        notifications.text("Delete succsesfully");
        notifications.title("Success message");
        notifications.hideAfter(Duration.seconds(2));
        notifications.show();
        
     }
     public void LoadData(){
           
        ArrayList<Integer> cell= new ArrayList<Integer>();
        ArrayList<String> name= new ArrayList<String>();
        piedata=FXCollections.observableArrayList();
        
        Connection conn = getConn();
        String query = "SELECT * FROM ticket";
        PreparedStatement st;
        ResultSet rs;

         try{
            
            st=conn.prepareStatement(query);
            rs=st.executeQuery(query);
           
            while(rs.next()){
                piedata.add(new PieChart.Data(rs.getString("idCinema"),rs.getInt("id")));
                cell.add(rs.getInt("id"));
                name.add(rs.getString("idCinema"));
                
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        
        
        
    }
     
    
    
    
    
    
            
               
               
            }
     
     
    


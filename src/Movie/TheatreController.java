/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Movie;

import entite.Tactor;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;

import entite.Theatre;
import entite.TheatreActors;
import java.io.File;
import java.io.IOException;
import java.sql.Connection;
import java.sql.Date;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.time.LocalDate;
import java.time.ZoneId;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import java.util.stream.Collectors;
import javafx.application.Application;
import javafx.beans.property.SimpleStringProperty;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.Event;
import javafx.event.EventHandler;
import javafx.fxml.FXMLLoader;
import javafx.scene.Group;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.chart.PieChart;
import javafx.scene.control.Alert;
import javafx.scene.control.ComboBox;
import javafx.scene.control.DatePicker;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn.CellEditEvent;
import javafx.scene.control.TextArea;
import javafx.scene.control.cell.ComboBoxTableCell;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.control.cell.TextFieldTableCell;
import javafx.scene.control.cell.TextFieldTreeTableCell;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.KeyEvent;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.BorderPane;
import javafx.scene.layout.HBox;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import javafx.util.Callback;
import javafx.util.StringConverter;
import static jdk.nashorn.internal.runtime.Debug.id;
import service.ServiceTactor;
import service.ServiceTheatre;
import utils.DatabaseConnection;


public class TheatreController implements Initializable {
    @FXML
    private Button btnChart;
    @FXML
    private Label label;
    @FXML
    private TextField FieldName;
    private TextField FieldIdActor;
    private TextField FieldGenre;
    @FXML
    private DatePicker FieldRelease;
    @FXML
    private TableView<Theatre> TableTheatres;
    @FXML
    private TableColumn<Theatre, String> ColName;
    
    @FXML
    private TableColumn<Theatre, String> ColGenre;
    @FXML
    private TableColumn<Theatre, Date> ColRD;
    @FXML
    private Button BtnAdd;
    private Button BtnDelete;
    @FXML
    private Button BtnModify;
    private ComboBox<String> comBox;
    @FXML
    private Button RemoveRow;
    @FXML
    private ComboBox<String> GenreBox;
    @FXML
    private TextField TextSearch;
    private String statusCode,statusClick;
    ObservableList<Theatre> theatreListSearch;
    List<Tactor>theatreListActors;
    @FXML
    private TableColumn<Theatre, String> ColNameTactor;
    @FXML
    private TextField fieldNB;
    @FXML
    private ComboBox<Tactor> cb1;
    @FXML
    private ComboBox<Tactor> cb2;
    @FXML
    private ComboBox<Tactor> cb3;
    @FXML
    private ComboBox<Tactor> cb4;
    @FXML
    private ImageView imageTheatre;
    String imagePath = null;
    @FXML
    private TableColumn<?, ?> ColImage;
    @FXML
    private Button BtnChoose;
    @FXML
    private Button btnClear;
    
    
    @FXML
    private void handleButtonAction(ActionEvent event) throws SQLException {
        System.out.println("You clicked me!");
        
        if(event.getSource()==BtnAdd){
        insertTheatres();
        clear();
        //label.setText("Added !");
        }
        
        
    }
     
    @Override
    public void initialize(URL url, ResourceBundle rb) {
       ServiceTactor servT = new ServiceTactor();
        
        try {
            showTheatre();
             ObservableList<Tactor> listTactor=FXCollections.observableList(servT.read()); 
             //cbTactor.itemsProperty().setValue(listTactor);
             cb1.itemsProperty().setValue(listTactor);
             cb2.itemsProperty().setValue(listTactor);
             cb3.itemsProperty().setValue(listTactor);
             cb4.itemsProperty().setValue(listTactor);
             
             convertComboDisplayList();
        } 
        catch (SQLException ex)
        {
            Logger.getLogger(TheatreController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        GenreBox.getItems().add("Political");
        GenreBox.getItems().add("Tragedy");
        GenreBox.getItems().add("Historical");
        GenreBox.getItems().add("Musical theatre");
        GenreBox.getItems().add("Theatre of Cruelty");
        GenreBox.getItems().add("Terminology");
        GenreBox.getItems().add("Theatre of the Absurd");
        System.out.println(GenreBox.getValue());
        
      // TableTheatres.setEditable(true);
     // ColNameTactor.setCellValueFactory(new PropertyValueFactory<Theatre, String>("ActorNames"));
        //cbName.getItems().contains(servTH.fillCombobox());
        
        
    }    
  
    public Connection getConnection(){ 
    Connection conn; 
    try{ 
       conn = DatabaseConnection.getInstance().getConn();
    return conn;
    } 
    catch(Exception ex){ 
    System.out.println("Error: " + ex.getMessage());
    return null;
    }
    }
     /*  public void setActors(){
        Connection conn = getConnection();
        String query = "Select * from tactor";
        Statement st;
        ResultSet rs;
      
        try{
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
               
                cb1.getItems().add(rs.getString("name"));
                cb2.getItems().add(rs.getString("name"));
                cb3.getItems().add(rs.getString("name"));
                cb4.getItems().add(rs.getString("name"));
            
              
            }
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
        }
    }
*/
    public ObservableList<Theatre> getTheatrelist() throws SQLException{
       ServiceTheatre servtthreat= new ServiceTheatre();  
       ObservableList<Theatre> theatreList = FXCollections.observableArrayList(servtthreat.read());
       return theatreList;
       
    }
        public List<Tactor> getListTactors(Long id){
        //actorsname
        Connection conn = getConnection();
        ServiceTheatre servtthreat= new ServiceTheatre(); 
        return servtthreat.getListTactors(id);
        /*List<Tactor> listactors=new ArrayList<>();
        String query = "SELECT * FROM theatreactors as ta left join (select * from tactor )a on a.id=ta.TactorId WHERE ta.TheatreId= '"+id+"'";
        Statement st;
        ResultSet rs;
       
        try{
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                Long idr = rs.getLong("id");
                String name = rs.getString("name");
                LocalDate born = rs.getDate("born").toLocalDate();
                String description = rs.getString("description");
                String image = rs.getString("image");
                Tactor p = new Tactor(idr, name, born,description,image);
                listactors.add(p) ;
            }
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
        }
          System.out.println(listactors);
        return listactors;
    }
   /*   public List ListActors(Long id) throws SQLException{
       ServiceTheatre st=new ServiceTheatre();
       theatreListActors =st.getListTactors(id);
       return theatreListActors;
   
   */
   }   
       
    private void convertComboDisplayList() {
       /* cbTactor.setConverter(new StringConverter<Tactor>() {
            @Override
            public String toString(Tactor tactor) {
                return tactor.getName();
            }
          

            @Override
            public Tactor fromString(final String string) {
                return cbTactor.getItems().stream().filter(tactor -> tactor.getName().equals(string)).findFirst().orElse(null);
            }
        });*/
        cb1.setConverter(new StringConverter<Tactor>() {
            @Override
            public String toString(Tactor tactor) {
                return tactor.getName();
            }
            @Override
            public Tactor fromString(final String string) {
                return cb1.getItems().stream().filter(tactor -> tactor.getName().equals(string)).findFirst().orElse(null);
            }
        });
         cb2.setConverter(new StringConverter<Tactor>() {
            @Override
            public String toString(Tactor tactor) {
                return tactor.getName();
            }
            @Override
            public Tactor fromString(final String string) {
                return cb2.getItems().stream().filter(tactor -> tactor.getName().equals(string)).findFirst().orElse(null);
            }
        });
          cb3.setConverter(new StringConverter<Tactor>() {
            @Override
            public String toString(Tactor tactor) {
                return tactor.getName();
            }
            @Override
            public Tactor fromString(final String string) {
                return cb3.getItems().stream().filter(tactor -> tactor.getName().equals(string)).findFirst().orElse(null);
            }
        });
           cb4.setConverter(new StringConverter<Tactor>() {
            @Override
            public String toString(Tactor tactor) {
                return tactor.getName();
            }
            @Override
            public Tactor fromString(final String string) {
                return cb4.getItems().stream().filter(tactor -> tactor.getName().equals(string)).findFirst().orElse(null);
            }
        });
    }

     
 
    public void showTheatre() throws SQLException{
   
        ObservableList<Theatre> list = getTheatrelist();
/*        ColID.setCellValueFactory(new PropertyValueFactory<>("id"));
        ColID.cellFactoryProperty();*/
        ColName.setCellValueFactory(new PropertyValueFactory<>("name"));
       /* ColNameTactor.setCellValueFactory(listactors.stream().map(Tactor::getName)
                        .collect(Collectors.joining(",")));*/
        //ColNameTactor.setCellFactory(ComboBoxTableCell.forTableColumn());
      ColNameTactor.setCellValueFactory(cellData -> new SimpleStringProperty(getListTactors(cellData.getValue().getId()).stream().map(Tactor::getName)
                        .collect(Collectors.joining(","))));
        // ColNameTactor.setCellValueFactory(cellData -> new SimpleStringProperty(cellData.getValue().getTactor().getName()));
        /*
       */
        //ColNameTactor.setCellFactory(TextFieldTableCell.forTableColumn());
        ColGenre.setCellValueFactory(new PropertyValueFactory<>("genre"));
        ColRD.setCellValueFactory(new PropertyValueFactory<>("rdate"));
        ColRD.cellFactoryProperty();
        ColImage.setCellValueFactory(new PropertyValueFactory<>("image"));
        TableTheatres.setItems(list);
        
        
    }
    @FXML
  private void clear(){
      
        FieldName.clear();
        //cbTactor.getSelectionModel().selectFirst();
        FieldRelease.setValue(null);
        GenreBox.setValue("");
        statusCode = "0";
        fieldNB.setText("");
        cb1.valueProperty().set(null);
        cb2.valueProperty().set(null);
        cb3.valueProperty().set(null);
        cb4.valueProperty().set(null);
        
    }
  @FXML
   private void actionSearch(KeyEvent event) {
        ServiceTheatre st= new ServiceTheatre();
        theatreListSearch = st.searchTable("%"+TextSearch.getText()+"%");
        TableTheatres.setItems(theatreListSearch);
        
    }
 
       public void insertTheatres() throws SQLException{
        int nb=Integer.valueOf(fieldNB.getText());
         ServiceTheatre serviceTheatre= new ServiceTheatre();
       // Theatre th = new Theatre(null, FieldName.getText(), cbTactor.getValue() ,GenreBox.getValue(),FieldRelease.getValue(),imagePath);
       
        if(nb==1){
            Theatre th1=new Theatre(null, FieldName.getText(), cb1.getValue() ,GenreBox.getValue(),FieldRelease.getValue(),imagePath);
            TheatreActors ta = new TheatreActors(cb1.getValue(),th1.getId());
            System.out.println("1 seul combobox");
             serviceTheatre.add(th1);
            serviceTheatre.add(ta);
            
            }
         if(nb==2){
             
            Theatre th1=new Theatre(null, FieldName.getText(), cb1.getValue() ,GenreBox.getValue(),FieldRelease.getValue(),imagePath);
            TheatreActors ta = new TheatreActors(cb1.getValue(),th1.getId());
            TheatreActors ta2 = new TheatreActors(cb2.getValue(),th1.getId());
            System.out.println("2 seul combobox");
            serviceTheatre.add(th1);
            serviceTheatre.add(ta);
             serviceTheatre.add(ta2); 
             
            }
          if(nb==3){
            Theatre th1=new Theatre(null, FieldName.getText(), cb1.getValue() ,GenreBox.getValue(),FieldRelease.getValue(),imagePath);
            TheatreActors ta = new TheatreActors(cb1.getValue(),th1.getId());
            TheatreActors ta2 = new TheatreActors(cb2.getValue(),th1.getId());
            TheatreActors ta3 = new TheatreActors(cb3.getValue(),th1.getId());
            System.out.println("3 seul combobox");
            serviceTheatre.add(th1);
            serviceTheatre.add(ta);
            serviceTheatre.add(ta2); 
            serviceTheatre.add(ta3); 
            }
           if(nb==4){
              
           Theatre th1=new Theatre(null, FieldName.getText(), cb1.getValue() ,GenreBox.getValue(),FieldRelease.getValue(),imagePath);
            TheatreActors ta = new TheatreActors(cb1.getValue(),th1.getId());
            TheatreActors ta2 = new TheatreActors(cb2.getValue(),th1.getId());
            TheatreActors ta3 = new TheatreActors(cb3.getValue(),th1.getId());
            TheatreActors ta4 = new TheatreActors(cb4.getValue(),th1.getId());
            System.out.println("4 seul combobox");
            serviceTheatre.add(th1);
            serviceTheatre.add(ta);
            serviceTheatre.add(ta2); 
            serviceTheatre.add(ta3); 
            serviceTheatre.add(ta4); 
            
            }
        //serviceTheatre.add(th);
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setContentText("Insert Succes");
        alert.show();
        showTheatre();
        clear();
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
    public void removeRow() throws SQLException{
         ServiceTheatre serviceTheatre= new ServiceTheatre();
        serviceTheatre.delete(TableTheatres.getSelectionModel().getSelectedItem().getId());
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setContentText("Delete Succes");
        alert.show();
        showTheatre();
        
        clear();
    }
    /*public List getTh(Long id){
        
        Connection conn = getConnection();
        List<Long> list=new ArrayList<>();
        String query = "SELECT * FROM `theatreactors` WHERE `theatreId`= '"+id+"'";
        Statement st;
        ResultSet rs;
        
        try{
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                list.add(rs.getLong("theatreId")) ;
            }
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
        }
        return list;
    }*/
      /*public List getTActors(Long id){
        
        Connection conn = getConnection();
//        List<int> list=new ArrayList<>;
        List<Long> list=new ArrayList<>();
        String query = "SELECT * FROM `theatreactors` WHERE `theatreId`= '"+id+"'";
        Statement st;
        ResultSet rs;
        
        try{
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                list.add(rs.getLong("tactorId")) ;
            }
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
        }
        return list;
    }
       String getActorName(Long id){
        String name = null;
        Connection conn = getConnection();
        String query = "Select * from tactor where id ="+ id+"";
        Statement st;
        ResultSet rs;
        
        try{
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                name = rs.getString("name");
            }
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return name;
    
    }*/
     public List getTh(Long id){
       
        ServiceTheatre serviceTheatre= new ServiceTheatre();
        
        return serviceTheatre.numberOfActors(id);
    }
    @FXML
    public void SelectRow(){ 
          Long id=TableTheatres.getSelectionModel().getSelectedItem().getId();
        //List<Long> listAct=new ArrayList<>();
        //listAct = getTActors(id);
        //List<Long> list=new ArrayList<>();
        List<Tactor> listActors=getTh(id);
        
        fieldNB.setText(Integer.toString(listActors.size()));
         ActionEvent a = null;
                   addField(a);
        /*List<Long> listAct=new ArrayList<>();
        listAct = getTActors(id);
        List<Long> list=new ArrayList<>();
        List<Tactor> listActors=new ArrayList<>();
        listActors=getTh(id);
        fieldNB.setText(Integer.toString(listActors.size()));
        
        ActionEvent a = null;
                   addField(a);
                   */
        
       // cb1.setValue(getActorName(listAct.get(0)).convertComboDisplayList());
        //convertComboDisplayList();
        //cbTactor.setValue(TableTheatres.getSelectionModel().getSelectedItem().getTactor());
        //cb1.setValue(TableTheatres.getSelectionModel().getSelectedItem().getTactor());
        
       /* cb1.setValue(TableTheatres.getSelectionModel().getSelectedItem().getTactor());
        cb2.setValue(TableTheatres.getSelectionModel().getSelectedItem().getTactor());
        cb3.setValue(TableTheatres.getSelectionModel().getSelectedItem().getTactor());
        cb4.setValue(TableTheatres.getSelectionModel().getSelectedItem().getTactor());*/
       //Boxxx.setValue(getActorName(list.get(0)));
       
        FieldName.setText(TableTheatres.getSelectionModel().getSelectedItem().getName());
        GenreBox.setValue(TableTheatres.getSelectionModel().getSelectedItem().getGenre());
        FieldRelease.setValue(TableTheatres.getSelectionModel().getSelectedItem().getRdate());   
        cb1.setValue(TableTheatres.getSelectionModel().getSelectedItem().getTactor());
         Image image = new Image("file:///"+TableTheatres.getSelectionModel().getSelectedItem().getImage());
        imageTheatre.setImage(image);
        imagePath=TableTheatres.getSelectionModel().getSelectedItem().getImage();
         ServiceTheatre serviceTheatre = new ServiceTheatre();
        List<Tactor> listTactors= serviceTheatre.getListTactors(id);
        cb1.setValue(listTactors.get(0));
        cb2.setValue(listTactors.get(1));
        cb3.setValue(listTactors.get(2));
        cb4.setValue(listTactors.get(3));
    }
    @FXML
    public void ModifyRow() throws SQLException{
        int nb =  Integer.valueOf(fieldNB.getText());
        //Theatre th = new Theatre(TableTheatres.getSelectionModel().getSelectedItem().getId(), FieldName.getText(),cbTactor.getValue() ,GenreBox.getValue(),FieldRelease.getValue(),imagePath);
        ServiceTheatre serviceTheatre= new ServiceTheatre();
        serviceTheatre.delete(TableTheatres.getSelectionModel().getSelectedItem().getId());
        
        //serviceTheatre.update(th);
         if(nb==1){
            Theatre th1=new Theatre(null, FieldName.getText(), cb1.getValue() ,GenreBox.getValue(),FieldRelease.getValue(),imagePath);
            TheatreActors ta = new TheatreActors(cb1.getValue(),th1.getId());
            System.out.println("1 seul combobox");
             serviceTheatre.add(th1);
            serviceTheatre.add(ta);
            
            }
         if(nb==2){
             
            Theatre th1=new Theatre(null, FieldName.getText(), cb1.getValue() ,GenreBox.getValue(),FieldRelease.getValue(),imagePath);
            TheatreActors ta = new TheatreActors(cb1.getValue(),th1.getId());
            TheatreActors ta2 = new TheatreActors(cb2.getValue(),th1.getId());
            System.out.println("2 seul combobox");
            serviceTheatre.add(th1);
            serviceTheatre.add(ta);
             serviceTheatre.add(ta2); 
             
            }
          if(nb==3){
            Theatre th1=new Theatre(null, FieldName.getText(), cb1.getValue() ,GenreBox.getValue(),FieldRelease.getValue(),imagePath);
            TheatreActors ta = new TheatreActors(cb1.getValue(),th1.getId());
            TheatreActors ta2 = new TheatreActors(cb2.getValue(),th1.getId());
            TheatreActors ta3 = new TheatreActors(cb3.getValue(),th1.getId());
            System.out.println("3 seul combobox");
            serviceTheatre.add(th1);
            serviceTheatre.add(ta);
            serviceTheatre.add(ta2); 
            serviceTheatre.add(ta3); 
            }
           if(nb==4){
              
           Theatre th1=new Theatre(null, FieldName.getText(), cb1.getValue() ,GenreBox.getValue(),FieldRelease.getValue(),imagePath);
            TheatreActors ta = new TheatreActors(cb1.getValue(),th1.getId());
            TheatreActors ta2 = new TheatreActors(cb2.getValue(),th1.getId());
            TheatreActors ta3 = new TheatreActors(cb3.getValue(),th1.getId());
            TheatreActors ta4 = new TheatreActors(cb4.getValue(),th1.getId());
            System.out.println("4 seul combobox");
            serviceTheatre.add(th1);
            serviceTheatre.add(ta);
            serviceTheatre.add(ta2); 
            serviceTheatre.add(ta3); 
            serviceTheatre.add(ta4); 
            
            }
           Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setContentText("Update Succes");
        alert.show();
        showTheatre();
        clear();
    }
    @FXML
    private void actionSearch(ActionEvent event) {
    }
    @FXML
    public void addField(ActionEvent a){
    int nb =  Integer.valueOf(fieldNB.getText());
    if (nb==1){
        cb1.setStyle("-visibility:shown");
     ;
    }
    if (nb==2){
        cb1.setStyle("-visibility:shown");
        cb2.setStyle("-visibility:shown");
       
      
    }
    if (nb==3){
        cb1.setStyle("-visibility:shown");
        cb2.setStyle("-visibility:shown");
        cb3.setStyle("-visibility:shown");
      
     
    }
    if (nb==4){
        cb1.setStyle("-visibility:shown");
        cb2.setStyle("-visibility:shown");
        cb3.setStyle("-visibility:shown");
        cb4.setStyle("-visibility:shown");
    }
  
    
    }

    @FXML
    String FileChooser(){
        FileChooser fc = new FileChooser();
        fc.setInitialDirectory(new File("D:\\Esprit\\NetbeansProjects\\pi\\src\\image\\theatres"));
        fc.getExtensionFilters().add(new FileChooser.ExtensionFilter("Image Files", "*.jpg"));
        fc.getExtensionFilters().add(new FileChooser.ExtensionFilter("Image Files", "*.jpeg"));
        File f = fc.showOpenDialog(null);
        if(f != null)
        {
            System.out.println(f);
        }
        imagePath=f.getPath();
        imagePath=imagePath.replace("\\","\\\\");
        return f.getName();
    }
    @FXML     
    public void Statistic(){
        PieChartTest pc= new PieChartTest();
        Stage s = new Stage();
        try {
            pc.start(s);
        } catch (Exception ex) {
            Logger.getLogger(ServiceTheatre.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    public class PieChartTest extends Application{

        @Override
        public void start(Stage primaryStage) throws Exception {
            //Connection conn = getConnection();
            ServiceTheatre sth= new ServiceTheatre();
            sth.start(primaryStage);
        }
        
}
 }

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gui;

import entité.Tactor;
import java.io.File;
import java.io.FileInputStream;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.Date;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.time.LocalDate;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.event.Event;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.control.Button;
import javafx.scene.control.DatePicker;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.KeyEvent;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.BorderPane;
import javafx.scene.layout.HBox;
import javafx.stage.FileChooser;
import service.ServiceTactor;

/**
 * FXML Controller class
 *
 * @author bouyo
 */
public class TactorController implements Initializable {
    private AnchorPane ap;
    @FXML
    private BorderPane bp;
    @FXML
    private TextField FieldName;
    @FXML
    private DatePicker FieldBorn;
    @FXML
    private Button BtnAdd;
    @FXML
    private Button BtnModify;
    @FXML
    private Button RemoveRow;
    @FXML
    private Button BtnChoose;
    @FXML
    private TextArea FieldDesc;
    @FXML
    private TableColumn<Tactor, Integer> ColID;
    @FXML
    private TableColumn<Tactor, String> ColName;
    @FXML
    private TableColumn<Tactor, Date> ColBorn;
    @FXML
    private TableColumn<Tactor, String> ColDescription;
    @FXML
    private TableColumn<Tactor, String> ColImage;
    @FXML
    private TableView<Tactor> TableActors;
  private String statusCode,statusClick;
  ObservableList<Tactor> tactorListSearch;
    @FXML
    private TextField TextSearch;
    @FXML
    private ImageView imageTactor;
    String imagePath = null;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        try {
            // TODO
            showTactor();
        } catch (SQLException ex) {
            Logger.getLogger(TactorController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }    
    
    private void loadPage(String page){
    Parent root = null;
        try {
            root = FXMLLoader.load(getClass().getResource(page+".fxml"));
        } catch (IOException ex) {
            Logger.getLogger(TactorController.class.getName()).log(Level.SEVERE, null, ex);
        }
        bp.setCenter(root);
    }
    @FXML
  private void clear(){
        FieldName.clear();
        FieldDesc.clear();
        FieldBorn.setValue(null);
        statusCode = "0";
        imageTactor.setImage(null);
    }
  @FXML
    private void actionSearch(KeyEvent event) {
        ServiceTactor st= new ServiceTactor();
        tactorListSearch = st.likeByName(TextSearch.getText());
        TableActors.setItems(tactorListSearch);
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
    
    public ObservableList<Tactor> getTactorlist() throws SQLException{
        ServiceTactor servtactor= new ServiceTactor();  
        ObservableList<Tactor> tactorList = FXCollections.observableArrayList(servtactor.read());
        return tactorList;
        
    }
    
    @FXML
    public void SelectRow(){
        Long id=TableActors.getSelectionModel().getSelectedItem().getId();
        FieldName.setText(TableActors.getSelectionModel().getSelectedItem().getName());
        FieldDesc.setText(TableActors.getSelectionModel().getSelectedItem().getDescription());
        FieldBorn.setValue(LocalDate.parse(TableActors.getSelectionModel().getSelectedItem().getBorn().toString()));
        Image image = new Image("file:///"+TableActors.getSelectionModel().getSelectedItem().getImage());
        imageTactor.setImage(image);
        imagePath=TableActors.getSelectionModel().getSelectedItem().getImage();
    }

    @FXML
    private void ModifyRow() throws SQLException {
        Tactor t = new Tactor(TableActors.getSelectionModel().getSelectedItem().getId(), FieldName.getText(),FieldBorn.getValue(),FieldDesc.getText(),imagePath);
        ServiceTactor st= new ServiceTactor();
        st.update(t);
        showTactor();
        clear();
    }

    private void showTactor() throws SQLException {
        
        ObservableList<Tactor> list = getTactorlist();
        ColID.setCellValueFactory(new PropertyValueFactory<>("id"));
        ColID.cellFactoryProperty();
        ColName.setCellValueFactory(new PropertyValueFactory<>("name"));
        ColDescription.setCellValueFactory(new PropertyValueFactory<>("description"));
        ColBorn.setCellValueFactory(new PropertyValueFactory<>("born"));
        ColBorn.cellFactoryProperty();
        ColImage.setCellValueFactory(new PropertyValueFactory<>("image"));
        
        TableActors.setItems(list);
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
    public void insertTactor() throws SQLException{
        
        Tactor t = new Tactor(null, FieldName.getText(),FieldBorn.getValue(),FieldDesc.getText(),imagePath);
        ServiceTactor st= new ServiceTactor();
        st.add(t);
        showTactor();
        clear();
    }

    @FXML
    private void removeRow(ActionEvent event) throws SQLException {
        ServiceTactor st= new ServiceTactor();
        st.delete(TableActors.getSelectionModel().getSelectedItem().getId());
        showTactor();
        clear();
    }

 @FXML
    public void actorPage(MouseEvent event) {
        bp.setCenter(ap);
    }

    @FXML
    public void theatrePage(MouseEvent event) {
        loadPage("Theatre");
    }

   
    
    @FXML
    String FileChooser(){
        FileChooser fc = new FileChooser();
        
       
        fc.setInitialDirectory(new File("D:\\Esprit\\NetbeansProjects\\pi\\src\\image\\tactors"));
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
  
  
}

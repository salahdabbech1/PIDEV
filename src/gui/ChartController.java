/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package gui;

import java.net.URL;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.application.Application;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.Group;
import javafx.scene.Scene;
import javafx.scene.chart.PieChart;
import javafx.scene.chart.PieChart.Data;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.input.MouseEvent;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author hiba
 */
public class ChartController implements Initializable {
    Connection cnx;
    @FXML
    private PieChart chart;
    @FXML
    private Button btnChart;
    @FXML
    private Label label;
    ArrayList<Integer> cell=new ArrayList<Integer>();
    ArrayList<String> name=new ArrayList<String>();
    ObservableList<PieChart.Data> list;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
       
        loadData();
       // chart.setData(list);
    }    
@FXML
    private void handleButtonAction(ActionEvent event) {
        /*ObservableList<Data> list= FXCollections.observableArrayList(
            new PieChart.Data("Actor 1", 10),
            new PieChart.Data("Actor 2", 25),
            new PieChart.Data("Actor 3", 10),
            new PieChart.Data("Actor 4", 30),
            new PieChart.Data("Actor 5", 35)
        );*/
       chart.setData(list);
       for(final PieChart.Data data: chart.getData() ){
           data.getNode().addEventHandler(MouseEvent.MOUSE_CLICKED, new EventHandler<MouseEvent>(){
               @Override
               public void handle(MouseEvent event) {
                   //label.setText(String.valueOf((data.getPieValue() /105)*100 + "%"));
               }
           
           } );
       }
        
    }
    public void loadData(){
        PreparedStatement pst;
        ResultSet rs;
        list=FXCollections.observableArrayList();
        try{
            
              cnx=DriverManager.getConnection("jdbc:mysql://localhost:3306/artlife","root","") ;
              pst=cnx.prepareStatement("select * from theatre, tactor  where theatre.IdTactor=tactor.id  ");
              rs=pst.executeQuery();
              while(rs.next()){
                  list.add(new PieChart.Data(rs.getString("name"),rs.getInt("idTactor")));
                  name.add(rs.getString("name"));
                  cell.add(rs.getInt("idTactor"));
                  
              }
              
            }catch (SQLException ex){
            Logger.getLogger(ChartController.class.getName()).log(Level.SEVERE, null, ex);}
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
    }
            
    public void Statistic(){
        PieChartEx p= new PieChartEx();
        Stage s = new Stage();
        try {
            p.start(s);
        } catch (Exception ex) {
            Logger.getLogger(ChartController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    public class PieChartEx extends Application{

        @Override
        public void start(Stage primaryStage) throws Exception {
            Connection conn = getConnection();
            String query = "SELECT COUNT(genre) FROM `theatre` WHERE genre='Political'";
            Statement st;
            ResultSet rs;
            int Political = 0;
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                Political= rs.getInt("COUNT(genre)");
            }
            
            query = "SELECT COUNT(genre) FROM `film` WHERE genre='Tragedy'";
            int Tragedy = 0;
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                Tragedy= rs.getInt("COUNT(genre)");
            }
            
            query = "SELECT COUNT(genre) FROM `film` WHERE genre='Historical'";
            int Historical = 0;
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                Historical= rs.getInt("COUNT(genre)");
            }
            query = "SELECT COUNT(genre) FROM `film` WHERE genre='Musical theatre'";
            int Musical = 0;
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                Musical= rs.getInt("COUNT(genre)");
            }
            query = "SELECT COUNT(genre) FROM `film` WHERE genre='Theatre of Cruelty'";
            int Cruelty = 0;
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                Cruelty= rs.getInt("COUNT(genre)");
            }
            query = "SELECT COUNT(genre) FROM `film` WHERE genre='Terminology'";
            int Terminology = 0;
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                Terminology= rs.getInt("COUNT(genre)");
            }
            query = "SELECT COUNT(genre) FROM `film` WHERE genre='Theatre of the Absurd'";
            int Absurd = 0;
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                Absurd= rs.getInt("COUNT(genre)");
            }
       
            
            
            
            ObservableList<PieChart.Data> pieData = FXCollections.observableArrayList(
                    new PieChart.Data("Political",  Political),
                    new PieChart.Data("Tragedy", Tragedy),
                    new PieChart.Data("Historical", Historical),
                    new PieChart.Data("Musical theatre", Musical),
                    new PieChart.Data("Theatre of Cruelty", Cruelty),
                    new PieChart.Data("Terminology", Terminology),
                    new PieChart.Data("Theatre of the Absurd", Absurd)
            );
        
            PieChart pChart = new PieChart(pieData);
            
            Group root = new Group(pChart);
            Scene scene = new Scene(root,600,400);
            primaryStage.setTitle("Statistics Theatres :");
            primaryStage.setScene(scene);
            primaryStage.show();
            
        }
        
}*/
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package service;

import entite.Tactor;
import utils.DatabaseConnection;
import entite.Theatre;
import entite.TheatreActors;
import Iservice.IServiceTheatre;
import java.sql.Connection;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.time.LocalDate;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.animation.Animation;
import javafx.animation.RotateTransition;
import javafx.animation.TranslateTransition;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.EventHandler;
import javafx.geometry.Bounds;
import javafx.geometry.Side;
import javafx.scene.Group;
import javafx.scene.Scene;
import javafx.scene.chart.PieChart;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Label;
import javafx.scene.input.MouseEvent;
import javafx.scene.paint.Color;
import javafx.stage.Stage;
import javafx.util.Duration;

/**
 *
 * @author mateur
 */
public class ServiceTheatre implements IServiceTheatre<Theatre> {
     Connection cnx ;
     final ObservableList options= FXCollections.observableArrayList();
    public ServiceTheatre() {
         cnx = DatabaseConnection.getInstance().getConn();
        
    }

    @Override
    public void add(Theatre th) throws SQLException {
        Statement st = cnx.createStatement();
        String query = "INSERT INTO `theatre` (`id`, `name`, `IdTactor`, `genre`, `rdate`, `image`) VALUES (NULL, '"+ th.getName() +"', '"+th.getTactor().getId()+"', '"+ th.getGenre() +"', '"+th.getRdate() +"','"+th.getImage()+"');";
       
        st.executeUpdate(query);
      
       
    }

    @Override
    public List<Theatre> read() throws SQLException {
        List<Theatre> ls = new ArrayList<Theatre>();
        Statement st = cnx.createStatement();
        String req = "SELECT t.*, a.* from theatre t INNER JOIN ( SELECT id as actorID, name as nameActor from tactor ) a ON t.IdTactor=a.actorID order by a.nameActor";
        ResultSet rs = st.executeQuery(req);
        while(rs.next()){
            Long id = rs.getLong("id");
            String IdTactor=rs.getString("IdTactor");
            String name = rs.getString("name");
            String genre = rs.getString("genre");
            LocalDate rdate = rs.getDate("rdate").toLocalDate();
            String image = rs.getString("image");
            Tactor tactor = new Tactor(rs.getLong("actorID"),rs.getString("nameActor"),null,null,null);
            Theatre pp = new Theatre(id, name,tactor, genre,rdate,image);
            ls.add(pp);
         
        }

        return ls;
    }

    @Override
    public void update(Theatre th) throws SQLException {
        Statement st = cnx.createStatement();
        String query = "UPDATE `theatre` SET `name` = '"+ th.getName() +"',`genre` = '"+ th.getGenre() +"', `rdate` = '"+th.getRdate() + "', `IdTactor` = '"+th.getTactor().getId()+"', `image` = '"+th.getImage()+"' WHERE `theatre`.`id` = "+ th.getId()+";";
        st.executeUpdate(query);
        String query2 = "UPDATE `theatreactors` SET `TactorId` = '"+th.getTactor().getId()+ "' WHERE ( `theatreactors`.`theatreid` = "+ th.getId()+" ) ";
        st.executeUpdate(query2);
    }

    @Override
    public void delete(Long id) throws SQLException {
         Statement st = cnx.createStatement();
         String query1= "DELETE FROM theatreactors WHERE TheatreId= '"+id+"'";
         st.executeUpdate(query1);
        String query = "DELETE FROM theatre  WHERE theatre.id = '"+id+"'";
        st.executeUpdate(query);
        
        
    }
   
    public ObservableList<Theatre> searchTable(String a) {
       
        ObservableList<Theatre> listData = FXCollections.observableArrayList();
        try {
            //probleme rechrche par id
            String sql = "SELECT t.*, a.* from theatre t INNER JOIN ( SELECT id as actorID, name as nameActor from tactor ) a ON t.IdTactor=a.actorID where t.id like '%"+a+"%' or t.name like '%"+a+"%' or a.actorID like '%"+a+"%' or t.genre like '%"+a+"%' or t.rdate like '%"+a+"%' or a.nameActor like '%"+a+"%'   ";
            ResultSet rs = cnx.createStatement().executeQuery(sql);
            while (rs.next()) {  
                Long id = rs.getLong("id");
               // String IdTactor=rs.getString("IdTactor");
                String name = rs.getString("name");
                String genre = rs.getString("genre");
                LocalDate rdate = rs.getDate("rdate").toLocalDate();
                 String image = rs.getString("image");
                Tactor tactor = new Tactor(rs.getLong("actorID"),rs.getString("nameActor"),null,null,null);
                Theatre pp = new Theatre(id, name,tactor, genre,rdate,image);
                listData.add(pp);
            }
        } catch (Exception ex) {
            Logger.getLogger(Theatre.class.getName()).log(Level.SEVERE, null, ex);
        }
        return listData;
    }
    
      public List<Tactor> getListTactors(Long id){
        //actorsname

        List<Tactor> listactors=new ArrayList<>();
        String query = "SELECT * FROM theatreactors as ta left join (select * from tactor )a on a.id=ta.TactorId WHERE ta.TheatreId= '"+id+"'";
        Statement st;
        ResultSet rs;
       
        try{
            st=cnx.createStatement();
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

    public void add(TheatreActors ta) throws SQLException {
        Statement st = cnx.createStatement();
          String query1="INSERT INTO theatreactors (TactorId,TheatreId) SELECT tactor.id, MAX(theatre.id) FROM tactor, theatre where tactor.id='"+ta.getTactor().getId()+"' ";
        st.executeUpdate(query1);
    }
     
    public void update(TheatreActors ta) throws SQLException {
        Statement st = cnx.createStatement();
        String query2 = "UPDATE `theatreactors` SET `TactorId` = '"+ta.getTactor().getId()+ "' WHERE ( `theatreactors`.`theatreid` = "+ ta.getTactor().getId()+" ) ";
        st.executeUpdate(query2);
        
    }
     public List numberOfActors(Long id){
        
        List<Long> list=new ArrayList<>();
        String query = "SELECT * FROM `theatreactors` WHERE `theatreId`= '"+id+"'";
        Statement st;
        ResultSet rs;
        
        try{
            st=cnx.createStatement();
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
    
        public void start(Stage primaryStage) throws Exception {
            Statement st = cnx.createStatement();
            String query = "SELECT COUNT(genre) FROM `theatre` WHERE genre='Political'";
            
            ResultSet rs;
            int Political = 0;
            rs=st.executeQuery(query);
            while(rs.next()){
                Political= rs.getInt("COUNT(genre)");
            }
            
            query = "SELECT COUNT(genre) FROM `theatre` WHERE genre='Tragedy'";
            int Tragedy = 0;
           
            rs=st.executeQuery(query);
            while(rs.next()){
                Tragedy= rs.getInt("COUNT(genre)");
            }
            
            query = "SELECT COUNT(genre) FROM `theatre` WHERE genre='Historical'";
            int Historical = 0;
           
            rs=st.executeQuery(query);
            while(rs.next()){
                Historical= rs.getInt("COUNT(genre)");
            }
            query = "SELECT COUNT(genre) FROM `theatre` WHERE genre='Musical theatre'";
            int Musical = 0;
          
            rs=st.executeQuery(query);
            while(rs.next()){
                Musical= rs.getInt("COUNT(genre)");
            }
            query = "SELECT COUNT(genre) FROM `theatre` WHERE genre='Theatre of Cruelty'";
            int Cruelty = 0;
        
            rs=st.executeQuery(query);
            while(rs.next()){
                Cruelty= rs.getInt("COUNT(genre)");
            }
            query = "SELECT COUNT(genre) FROM `theatre` WHERE genre='Terminology'";
            int Terminology = 0;
            
            rs=st.executeQuery(query);
            while(rs.next()){
                Terminology= rs.getInt("COUNT(genre)");
            }
            query = "SELECT COUNT(genre) FROM `theatre` WHERE genre='Theatre of the Absurd'";
            int Absurd = 0;
          
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
            
                final  PieChart pChart = new PieChart(pieData);
            pChart.setTitle("Genre Statistics Theatres :");
            Group root = new Group(pChart);
            Scene scene = new Scene(root,800,500);
            primaryStage.setTitle("Statistics Theatres :");
            primaryStage.setScene(scene);
            primaryStage.show();
           
           // pChart.setLabelLineLength(10);
            pChart.setLayoutX(100);
            pChart.setLabelLineLength(500);
            pChart.setLegendSide(Side.LEFT);
            final Label caption = new Label("");
            caption.setTextFill(Color.WHITE);
            caption.setStyle("-fx-font: 12 arial;");
        
            
          for (final PieChart.Data data : pChart.getData()) {
            data.getNode().addEventHandler(MouseEvent.MOUSE_PRESSED, new EventHandler<MouseEvent>() {
                @Override
                public void handle(MouseEvent e) {
                    caption.setTranslateX(e.getSceneX());
                    caption.setTranslateY(e.getSceneY());
                    
                    caption.setText(String.valueOf(data.getPieValue()/100));
                    System.out.println("Pressed"+data.getPieValue());
                }
            });
            //animation
            pieData.stream().forEach(pcData -> {
                    pcData.getNode().addEventHandler(MouseEvent.MOUSE_CLICKED, event -> {
                    Bounds b1 = pcData.getNode().getBoundsInLocal();
                    double newX = (b1.getWidth()) / 2 + b1.getMinX();
                    double newY = (b1.getHeight()) / 2 + b1.getMinY();
                    // Make sure pie wedge location is reset
                    pcData.getNode().setTranslateX(0);
                    pcData.getNode().setTranslateY(0);
                    TranslateTransition tt = new TranslateTransition(
                            Duration.millis(1500), pcData.getNode());
                    tt.setByX(newX);
                    tt.setByY(newY);
                    tt.setAutoReverse(true);
                    tt.setCycleCount(2);
                    tt.play();
                });
});
    }
   
            /*RotateTransition rotation = new RotateTransition(Duration.seconds(0.5), pChart);
            rotation.setCycleCount(Animation.INDEFINITE);
            rotation.setByAngle(360);

            pChart.setOnMouseEntered(e -> rotation.play());
            pChart.setOnMouseExited(e -> rotation.pause());*/
                    }

}



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
import javafx.scene.control.Alert;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Label;
import javafx.scene.control.Tooltip;
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
        String query = "INSERT INTO `theatre` (`id`, `name`, `IdTactor`, `genre`, `rdate`, `image`, `trailer`,`description`,`poster`) VALUES (NULL, '"+ th.getName() +"', '"+th.getTactor().getId()+"', '"+ th.getGenre() +"', '"+th.getRdate() +"','"+th.getImage()+"', '"+th.getTrailer() +"', '"+ th.getDescription() +"', '"+ th.getPoster() +"');";
       
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
           
            String name = rs.getString("name");
            String genre = rs.getString("genre");
            LocalDate rdate = rs.getDate("rdate").toLocalDate();
            String image = rs.getString("image");
            String trailer=rs.getString("trailer");
            String description=rs.getString("description");
            String poster=rs.getString("poster");
            Tactor tactor = new Tactor(rs.getLong("actorID"),rs.getString("nameActor"),null,null,null);
            Theatre pp = new Theatre(id, name,tactor, genre,rdate,image,trailer,description,poster);
            ls.add(pp);
         
        }

        return ls;
    }

    @Override
    public void update(Theatre th) throws SQLException {
        Statement st = cnx.createStatement();
        String query = "UPDATE `theatre` SET `name` = '"+ th.getName() +"',`genre` = '"+ th.getGenre() +"', `rdate` = '"+th.getRdate() + "', `IdTactor` = '"+th.getTactor().getId()+"', `image` = '"+th.getImage()+"', `trailer` = '"+th.getTrailer() + "',`description` = '"+ th.getDescription() +"',`poster` = '"+ th.getPoster() +"' WHERE `theatre`.`id` = "+ th.getId()+";";
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
            String sql = "SELECT t.*, a.* from theatre t INNER JOIN ( SELECT id as actorID, name as nameActor from tactor ) a ON t.IdTactor=a.actorID where t.id like '%"+a+"%' or t.name like '%"+a+"%' or a.actorID like '%"+a+"%' or t.genre like '%"+a+"%' or t.rdate like '%"+a+"%' or a.nameActor like '%"+a+"%' or t.trailer like '%"+a+"%'  ";
            ResultSet rs = cnx.createStatement().executeQuery(sql);
            while (rs.next()) {  
                Long id = rs.getLong("id");
               // String IdTactor=rs.getString("IdTactor");
                String name = rs.getString("name");
                String genre = rs.getString("genre");
                LocalDate rdate = rs.getDate("rdate").toLocalDate();
                 String image = rs.getString("image");
                 String trailer=rs.getString("trailer");
                 String description=rs.getString("description");
                 String poster=rs.getString("poster");
                Tactor tactor = new Tactor(rs.getLong("actorID"),rs.getString("nameActor"),null,null,null);
                Theatre pp = new Theatre(id, name,tactor, genre,rdate,image,trailer,description,poster);
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
            query = "SELECT COUNT(genre) FROM `theatre` WHERE genre='Comedy'";
            int Comedy = 0;
          
            rs=st.executeQuery(query);
            while(rs.next()){
                Comedy= rs.getInt("COUNT(genre)");
            }
       
            
            
            
            ObservableList<PieChart.Data> pieData = FXCollections.observableArrayList(
                    new PieChart.Data("Political",  Political),
                    new PieChart.Data("Tragedy", Tragedy),
                    new PieChart.Data("Historical", Historical),
                    new PieChart.Data("Musical theatre", Musical),
                    new PieChart.Data("Theatre of Cruelty", Cruelty),
                    new PieChart.Data("Terminology", Terminology),
                    new PieChart.Data("Theatre of the Absurd", Absurd),
                    new PieChart.Data("Comedy", Comedy)
                    
            );
            
                final  PieChart pChart = new PieChart(pieData);
            pChart.setTitle("Genre Statistics Theatres :");
            Group root = new Group(pChart);
            Scene scene = new Scene(root,800,500);
            primaryStage.setTitle("Statistics Theatres :");
           
            primaryStage.setScene(scene);
            primaryStage.show();
           
           // pChart.setLabelLineLength(10);
           // pChart.setLayoutX(100);
            pChart.setLabelLineLength(500);
           // pChart.setLegendSide(Side.LEFT);
           Label label = new Label("Hello");
           System.out.println(label);
           pChart.setPrefSize(800, 500);
           label.setTextFill(Color.DARKORANGE);
           label.setMinWidth(200);
            label.setMinHeight(200);
//           label.setLayoutX(500);
//            label.setLayoutY(200);
               
            for ( PieChart.Data data : pChart.getData()) {
                
            data.getNode().addEventHandler(MouseEvent.MOUSE_CLICKED,
                new EventHandler<MouseEvent>() {
                 @Override public void handle(MouseEvent e) {
//                     
                   label.setTranslateX(e.getSceneX());
                   label.setTranslateY(e.getSceneY());
                        
                    double total = 0;
                    for (PieChart.Data d : pChart.getData()) {
                        total += d.getPieValue();
                        Tooltip tooltip = new Tooltip(String.valueOf(data.getPieValue()));
                        Tooltip.install(data.getNode(), tooltip);
                    }
                    String text=(String.valueOf(100*data.getPieValue()/total)+"%" );
                    label.setVisible(true);
                    label.setText(text);
                    System.out.println(text);
                   Alert alert = new Alert(Alert.AlertType.INFORMATION);
                    alert.setContentText(text);
                    alert.show();
                    //System.out.println(text);
             }
        });
            
            //animation
            pieData.stream().forEach(pcData -> {
                    pcData.getNode().addEventHandler(MouseEvent.MOUSE_ENTERED, event -> {
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
        
         public List getTheatrelist(){
        List<Theatre> theatreList=new ArrayList<>();
        Connection conn =  DatabaseConnection.getInstance().getConn();
        
        String query = "SELECT t.*, a.* from theatre t INNER JOIN ( SELECT id as actorID, name as nameActor from tactor ) a ON t.IdTactor=a.actorID";
        Statement st;
        ResultSet rs;
        
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            //Theatre theatres;
            while(rs.next()){
            Long id = rs.getLong("id");
            //String IdTactor=rs.getString("IdTactor");
            String name = rs.getString("name");
            String genre = rs.getString("genre");
            LocalDate rdate = rs.getDate("rdate").toLocalDate();
            String image = rs.getString("image");
            String trailer=rs.getString("trailer");
            String description=rs.getString("description");
            String poster=rs.getString("poster");
            Tactor tactor = new Tactor(rs.getLong("actorID"),rs.getString("nameActor"),null,null,null);
            Theatre theatres = new Theatre(id, name,tactor, genre,rdate,image,trailer,description,poster);
            theatreList.add(theatres);
             
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return theatreList;
    }
    
    
//    String getActorName(Long id){
//        String name = null;
//        Connection conn = DatabaseConnection.getInstance().getConn();
//       
//        String query = "Select * from tactor where id ="+id+"";
//        Statement st;
//        ResultSet rs;
//        
//        try{
//            
//            st=conn.createStatement();
//            rs=st.executeQuery(query);
//            while(rs.next()){
//                name = rs.getString("name");
//                
//            }
//        }
//        catch(Exception ex)
//        {
//            
//            ex.printStackTrace();
//            
//        }
//        return name;
//    
//    }
//    public String getActors(Long idTheatre){
//        //List<String> theatreList=new ArrayList<>();
//        Connection conn = DatabaseConnection.getInstance().getConn();
//        String query = "Select * from theatreactors where theatreId='"+idTheatre+"'";
//        Statement st;
//        ResultSet rs;
//        String name="";
//        
//        try{
//            
//            st=conn.createStatement();
//            rs=st.executeQuery(query);
//            //Theatre theatres;
//            while(rs.next()){
//                name=name +getActorName(Long.valueOf(rs.getString("tactorId")))+" , ";
//               
//            }
//            
//        }
//        catch(Exception ex)
//        {
//            ex.printStackTrace();
//            
//        }
//        return name;
//    }
//    
//          public void SelectCat(){
//        Connection conn = DatabaseConnection.getInstance().getConn();
//        
//        List<Theatre> list=new ArrayList<>();
//        String query = "SELECT t.*, a.* from theatre t INNER JOIN ( SELECT id as actorID, name as nameActor from tactor ) a ON t.IdTactor=a.actorID where t.genre='%"+cat+"%' ";
//        Statement st;
//        ResultSet rs;
//        //Theatre theatres;
//        
//        try{
//            st=conn.createStatement();
//            rs=st.executeQuery(query);
//            //Theatre theatres;
//            while(rs.next()){
//                  Long id = rs.getLong("id");
//               // String IdTactor=rs.getString("IdTactor");
//                String name = rs.getString("name");
//                String genre = rs.getString("genre");
//                LocalDate rdate = rs.getDate("rdate").toLocalDate();
//                 String image = rs.getString("image");
//                 String trailer=rs.getString("trailer");
//                Tactor tactor = new Tactor(rs.getLong("actorID"),rs.getString("nameActor"),null,null,null);
//                Theatre pp = new Theatre(id, name,tactor, genre,rdate,image,trailer);
//                list.add(pp);
//              
//            }
//        }
//        catch(Exception ex)
//        {
//            ex.printStackTrace();
//              
//        }}

           
      public List getNewestShows(){
        List<Theatre> ls=new ArrayList<Theatre>();
        Connection conn =  DatabaseConnection.getInstance().getConn();
        String query = "Select * from theatre ORDER BY rdate DESC LIMIT 4";
        Statement st;
        ResultSet rs;
        
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            
            while(rs.next()){
                 Long id = rs.getLong("id");
            //String IdTactor=rs.getString("IdTactor");
            String name = rs.getString("name");
            String genre = rs.getString("genre");
            LocalDate rdate = rs.getDate("rdate").toLocalDate();
            String image = rs.getString("image");
            String trailer=rs.getString("trailer");
            String description=rs.getString("description");
            String poster=rs.getString("poster");
            Tactor tactor = new Tactor(null,null,null,null,null);
            Theatre pp = new Theatre(id, name,tactor, genre,rdate,image,trailer,description,poster);
            ls.add(pp);
                
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return ls;
    }
        
    public List getTheatreByName(String name){
        List<Theatre> theatreList=new ArrayList<>();
        Connection conn = DatabaseConnection.getInstance().getConn();
        String query = "Select * from  theatre where name='"+name+"'";
        Statement st;
        ResultSet rs;
        
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            
            while(rs.next()){
                  Long id = rs.getLong("id");
                  
                  String nom = rs.getString("name");
                  String genre = rs.getString("genre");
                  LocalDate rdate = rs.getDate("rdate").toLocalDate();
                  String image = rs.getString("image");
                  String trailer=rs.getString("trailer");
                   String description=rs.getString("description");
                   String poster=rs.getString("poster");
                  Tactor tactor = new Tactor(null,null,null,null,null);
                  Theatre pp = new Theatre(id, nom,tactor, genre,rdate,image,trailer,description,poster);
                  theatreList.add(pp);
                 
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return theatreList;
    }
    
    
    public Theatre getTheatreById(Long id){
       
        Connection conn = DatabaseConnection.getInstance().getConn();
        String query = "Select * from theatre where id='"+id+"'";
        Statement st;
        ResultSet rs;
        Theatre theatre = null;
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                  Long idt = rs.getLong("id");
                  
                  String nom = rs.getString("name");
                  String genre = rs.getString("genre");
                  LocalDate rdate = rs.getDate("rdate").toLocalDate();
                  String image = rs.getString("image");
                  String trailer=rs.getString("trailer");
                  String description=rs.getString("description");
                  String poster=rs.getString("poster");
                  Tactor tactor = new Tactor(null,null,null,null,null);
                  theatre = new Theatre(idt, nom,tactor, genre,rdate,image,trailer,description,poster);
                  
                 
            }
            
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return theatre;
    }
       public List<Long> getActorList(Long idTheatre){
        List<Long> ActorList=new ArrayList<>();
        Connection conn = DatabaseConnection.getInstance().getConn();
        String query = "Select * from theatreactors where TheatreId='"+idTheatre+"'";
        Statement st;
        ResultSet rs;
        try
        {
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
//                Factor F = new Factor(rs2.getInt("id"),rs2.getString("name"),rs2.getDate("born"),rs2.getString("description"),rs2.getString("image"));
                    ActorList.add(rs.getLong("TactorId"));
                }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return ActorList;
    }
     public List<Tactor> getTactorById(Long id){
        List<Tactor> ActorList=new ArrayList<>();
        Connection conn = DatabaseConnection.getInstance().getConn();
        String query = "Select * from tactor where id='"+id+"'";
        Statement st;
        ResultSet rs;
        try
        {
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next())
            {
                    Tactor T = new Tactor(rs.getLong("id"),rs.getString("name"),rs.getDate("born").toLocalDate(),rs.getString("description"),rs.getString("image"));
                    ActorList.add(T);
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return ActorList;
    }
        public List<Tactor> getTactorByName(String name){
        List<Tactor> ActorList=new ArrayList<>();
        Connection conn = DatabaseConnection.getInstance().getConn();
        String query = "Select * from tactor where name='"+name+"'";
        Statement st;
        ResultSet rs;
        try
        {
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next())
            {
                    Tactor T = new Tactor(rs.getLong("id"),rs.getString("name"),rs.getDate("born").toLocalDate(),rs.getString("description"),rs.getString("image"));
                    ActorList.add(T);
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return ActorList;
    }
           public List<Long> getActorsTheatrelist(Long id){
        List<Long> theatreList=new ArrayList<>();
        Connection conn = DatabaseConnection.getInstance().getConn();
        String query = "Select * from theatreactors where TactorId ="+id+"";
        Statement st;
        ResultSet rs;
        
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            
            while(rs.next()){
                theatreList.add(rs.getLong("theatreId"));
                
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return theatreList;
    }

}



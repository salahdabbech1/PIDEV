/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Movie;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Label;
import javafx.scene.control.ScrollPane;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.Pane;
import javafx.scene.text.Font;
import javafx.scene.web.WebView;
import javafx.stage.Stage;
import javafx.stage.StageStyle;

/**
 * FXML Controller class
 *
 * @author HP
 */
public class ConcertFController implements Initializable {

    @FXML
    private Pane pane;
    @FXML
    private ScrollPane scrollp;
    @FXML
    private TextField searchF;
    @FXML
    private AnchorPane newpane;
    @FXML
    private ComboBox<String> comboB;
        @FXML
    private ImageView Retour;
           @FXML
    private Label LabelNewTh;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        ShowConcerts();
        ShowNewConcert();
        CatCombo();
    }  
    @FXML
    private void Retour(MouseEvent event) {
        
        ShowConcerts();
        ShowNewConcert();
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
    
     public List getConcertlist() {
          List<Concert> concertList = new ArrayList<>();
                   Connection conn = getConnection();
        String query = "SELECT * FROM concert";
        Statement st;
        ResultSet rs;
                try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            Concert concert;
            while(rs.next()){
                concert = new Concert(rs.getInt("id"),rs.getString("name"),rs.getString("idmusician"),rs.getString("musics"),rs.getString("image"),rs.getString("trailer"));
                concertList.add(concert);
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return concertList;
      }
     

      
       public void ShowConcerts(){
        List<Concert> list=getConcertlist();
       int Y=0;
        int HP=0;
        pane.getChildren().clear();
        scrollp.setPannable(true);
        scrollp.setHbarPolicy(ScrollPane.ScrollBarPolicy.AS_NEEDED);
        for (int i = 0; i < list.size(); i++) {
            Label t1 = new Label("Name :");
            Label t2 = new Label("Musiciens :");
            Label t3 = new Label("Musique :");
            t1.setLayoutX(130);
            t1.setLayoutY(Y+10);
            t1.setStyle("-fx-text-fill:white;");
            t2.setLayoutX(130);
            t2.setLayoutY(Y+30);
            t2.setStyle("-fx-text-fill:white;");
            t3.setLayoutX(130);
            t3.setLayoutY(Y+50);
            t3.setStyle("-fx-text-fill:white;");
            Label Name = new Label();
            Name.setText(list.get(i).getName());
            Name.setLayoutX(220);
            Name.setLayoutY(Y+10);
            Name.setStyle("-fx-text-fill:white;");
            Label Musiciens = new Label(list.get(i).getIdmusician());
            Musiciens.setLayoutX(220);
            Musiciens.setLayoutY(Y+30);
            Musiciens.setStyle("-fx-text-fill:white;");
            Image im = new Image(list.get(i).getImage());
            System.out.println(list.get(i).getImage());
//            list.get(i).getImage()
            ImageView Image = new ImageView(im);
            Image.setFitHeight(120);
            Image.setFitWidth(120);
            Image.setLayoutX(0);
            Image.setLayoutY(Y);
            Label Musique = new Label(list.get(i).getMusics());
            Musique.setLayoutX(220);
            Musique.setLayoutY(Y+70);
            Musique.setMaxWidth(200);
            Musique.setStyle("-fx-text-fill:white;");
            pane.getChildren().addAll(t1,t2,t3,Name,Image,Musiciens,Musique);
             Y+=140;
            HP+=150;
            pane.setPrefHeight(HP);
              Name.setOnMouseClicked((event) -> {
            ShowSingle(Name);});
            
            Image.setOnMouseClicked((event) -> {
            ShowSingle(Name);});
        }
        
    
    }
         public List getConcert(String name){
        List<Concert> concertList=new ArrayList<>();
        Connection conn = getConnection();
        String query = "Select * from concert where name='"+name+"'";
        Statement st;
        ResultSet rs;
        
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            Concert concerts;
            while(rs.next()){
              concerts = new Concert(rs.getInt("id"),rs.getString("name"),rs.getString("idmusician"),rs.getString("musics"),rs.getString("image"),rs.getString("trailer"));
                concertList.add(concerts);
                
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return concertList;
    } 
         
     public List getConcertbyMusician(String name){
        List<Concert> concertList=new ArrayList<>();
        Connection conn = getConnection();
        String query = "Select * from concert where idmusician='"+name+"'";
        Statement st;
        ResultSet rs;
        
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            Concert concerts;
            while(rs.next()){
              concerts = new Concert(rs.getInt("id"),rs.getString("name"),rs.getString("idmusician"),rs.getString("musics"),rs.getString("image"),rs.getString("trailer"));
                concertList.add(concerts);
                
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return concertList;
    }      
          public Concert getConcert(int id){
        List<Concert> ConcertList=new ArrayList<>();
        Connection conn = getConnection();
        String query = "Select * from concert where id='"+id+"'";
        Statement st;
        ResultSet rs;
        Concert concerts = null;
        try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
              concerts = new Concert(rs.getInt("id"),rs.getString("name"),rs.getString("idmusician"),rs.getString("musics"),rs.getString("image"),rs.getString("trailer"));
                
            }
            
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return concerts;
    }
          
          
          public Musician getMusician(String name){
        Musician m=new Musician ();
        Connection conn = getConnection();
        String query = "Select * from musician where name='"+name+"'";
        Statement st;
        ResultSet rs;
        try
        {
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next())
            {
                   m= new Musician(rs.getInt("id"),rs.getString("name"),rs.getString("prenom"),rs.getDate("born"),rs.getString("description"),rs.getString("image"));
                  //  MusicianList.add(F);
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return m;
    }

    public void ShowSingle(Label name){
        List<Concert> concertL=getConcert(name.getText());
        pane.getChildren().clear();
        WebView webview = new WebView();
        webview.getEngine().load(concertL.get(0).getTrailer());
        webview.setPrefSize(400, 250);
        webview.setLayoutX(220);
        webview.setLayoutY(80);
         Musician m1 = getMusician(concertL.get(0).getIdmusician());
        Label Name = new Label(concertL.get(0).getName()+" Performed by ("+concertL.get(0).getIdmusician()+" "+m1.getPrenom()+")");
        Name.setLayoutX(0);
        Name.setLayoutY(30);
        Name.setFont(new Font("Arial", 30));
        Name.setStyle("-fx-text-fill:white;");
        
        Label Musics = new Label("Featuring: " + concertL.get(0).getMusics());
        Musics.setLayoutX(0);
        Musics.setLayoutY(70);
        Musics.setFont(new Font("Arial",15));
        Musics.setStyle("-fx-text-fill:white;");
        
        ImageView Image = new ImageView(concertL.get(0).getImage());
        Image.setFitHeight(250);
        Image.setFitWidth(200);
        Image.setLayoutX(0);
        Image.setLayoutY(80);
        
         Musician m = getMusician(concertL.get(0).getIdmusician());
        Label Performer = new Label("Performer :");
        Performer.setLayoutX(0);
        Performer.setLayoutY(330);
        Performer.setFont(new Font("Arial", 30));
        Performer.setStyle("-fx-text-fill:white;");
        
        
            ScrollPane ScrollA = new ScrollPane();
            AnchorPane MusicianP = new AnchorPane();
            int U=0;
            String nameMusician =m.getName();
            Label ActorName = new Label();
            ImageView ImageActor = new ImageView(m.getImage());
            ImageActor.setFitHeight(200);
            ImageActor.setFitWidth(200);
            ImageActor.setLayoutX(U+0);
            ImageActor.setLayoutY(25);

            ActorName.setText("Nom et prénom de l'artiste  : " + m.getName()+" "+m.getPrenom());
            ActorName.setFont(new Font("Arial", 15));
            ActorName.setStyle("-fx-text-fill:white;");
            ActorName.setLayoutX(200);
            ActorName.setLayoutY(0);
            Label born = new Label();
             born.setText("Date de naissance  :"+m.getBorn().toString());
            born.setFont(new Font("Arial", 15));
            born.setStyle("-fx-text-fill:white;");
            born.setLayoutX(200);
            born.setLayoutY(20);
            Label Description = new Label();
             Description.setText("Description :  "+m.getDescription());
            Description.setFont(new Font("Arial", 15));
            Description.setStyle("-fx-text-fill:white;");
            Description.setLayoutX(200);
            Description.setLayoutY(40);
            U+=120;
            MusicianP.getChildren().addAll(ActorName,Description,born,ImageActor);
            if(U>700)
                MusicianP.setPrefWidth(1000);
                    
        Retour.setOnMouseClicked(event -> {
        webview.getEngine().loadContent("");
            MouseEvent e = null;
        Retour(e);
        });
        
        MusicianP.setStyle("-fx-background-color:#001935;");
        MusicianP.setPrefHeight(185);
        MusicianP.setPrefWidth(720);
        ScrollA.setContent(MusicianP);
        ScrollA.setLayoutX(0);
        ScrollA.setLayoutY(370);
        ScrollA.setPrefHeight(200);
        ScrollA.setPrefWidth(730);
        ScrollA.setPannable(true);
        ScrollA.setHbarPolicy(ScrollPane.ScrollBarPolicy.ALWAYS);
        
        pane.getChildren().addAll(Name,Image,Performer,Musics,ScrollA,webview);
        pane.setPrefHeight(540);
        pane.setPrefWidth(730);
        newpane.getChildren().clear();
        LabelNewTh.setText("");
        
        
    }

    @FXML
    private void SelectCat(ActionEvent event) {
        Connection conn = getConnection();
        String cat = comboB.getValue();
        List<Concert> list=new ArrayList<>();
        String query = "Select * from concert where idmusician ='"+cat+"' ";
        Statement st;
        ResultSet rs;
        Concert concerts;
        
        try{
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                 concerts = new Concert(rs.getInt("id"),rs.getString("name"),rs.getString("idmusician"),rs.getString("musics"),rs.getString("image"),rs.getString("trailer"));
                list.add(concerts);
            }
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        pane.getChildren().clear();
        int Y=0;
        int HP=0;
        scrollp.setPannable(true);
        scrollp.setHbarPolicy(ScrollPane.ScrollBarPolicy.AS_NEEDED);
        
        for (int i = 0; i < list.size(); i++) {
            Label t1 = new Label("Name :");
            Label t2 = new Label("Musiciens :");
            Label t3 = new Label("Musique :");
            t1.setLayoutX(130);
            t1.setLayoutY(Y+10);
            t1.setStyle("-fx-text-fill:white;");
            t2.setLayoutX(130);
            t2.setLayoutY(Y+30);
            t2.setStyle("-fx-text-fill:white;");
            t3.setLayoutX(130);
            t3.setLayoutY(Y+50);
            t3.setStyle("-fx-text-fill:white;");
            Label Name = new Label();
            Name.setText(list.get(i).getName());
            Name.setLayoutX(220);
            Name.setLayoutY(Y+10);
            Name.setStyle("-fx-text-fill:white;");
            
            Name.setOnMouseClicked((ev) -> {
            ShowSingle(Name);});
            
             Musician m1 = getMusician(list.get(0).getIdmusician());
        Label idm = new Label();
        idm.setText(list.get(0).getIdmusician()+" "+m1.getPrenom());
            
            
            idm.setLayoutX(220);
            idm.setLayoutY(Y+30);
            idm.setStyle("-fx-text-fill:white;");
            Image im = new Image(list.get(i).getImage());
            ImageView Image = new ImageView(im);
            Image.setFitHeight(120);
            Image.setFitWidth(120);
            Image.setLayoutX(0);
            Image.setLayoutY(Y);
             Image.setOnMouseClicked((eva) -> {
            ShowSingle(Name);});
            Label Musique = new Label(list.get(i).getMusics());
            Musique.setLayoutX(220);
            Musique.setLayoutY(Y+70);
            Musique.setMaxWidth(200);
            Musique.setStyle("-fx-text-fill:white;");
            Musique.setWrapText(true);
            pane.getChildren().addAll(t1,t2,t3,Name,Image,Musique,idm);
            Y+=140;
            HP+=150;
            pane.setPrefHeight(HP);
    }
    }

@FXML
    private void SearchConcert() {
         String name = searchF.getText();
        Connection conn = getConnection();
        List<Concert> list=new ArrayList<>();
        String query = "Select * from concert where (name like '%"+name+"%') or (idmusician like '%"+name+"%')";
        Statement st;
        ResultSet rs;
        
        try{
            st=conn.createStatement();
            rs=st.executeQuery(query);
            Concert concerts;
            while(rs.next()){
               concerts = new Concert(rs.getInt("id"),rs.getString("name"),rs.getString("idmusician"),rs.getString("musics"),rs.getString("image"),rs.getString("trailer"));
                list.add(concerts);
            }
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        int Y=0;
        int HP=0;
        scrollp.setPannable(true);
        scrollp.setHbarPolicy(ScrollPane.ScrollBarPolicy.AS_NEEDED);
        pane.getChildren().clear();
          for (int i = 0; i < list.size(); i++) {
            Label t1 = new Label("Name :");
            Label t2 = new Label("Musiciens :");
            Label t3 = new Label("Musique :");
            t1.setLayoutX(130);
            t1.setLayoutY(Y+10);
            t1.setStyle("-fx-text-fill:white;");
            t2.setLayoutX(130);
            t2.setLayoutY(Y+30);
            t2.setStyle("-fx-text-fill:white;");
            t3.setLayoutX(130);
            t3.setLayoutY(Y+50);
            t3.setStyle("-fx-text-fill:white;");
            Label Name = new Label();
            Name.setText(list.get(i).getName());
            Name.setLayoutX(220);
            Name.setLayoutY(Y+10);
            Name.setStyle("-fx-text-fill:white;");
            Label idm = new Label();
            idm.setText(list.get(i).getIdmusician());
            idm.setLayoutX(220);
            idm.setLayoutY(Y+30);
            idm.setStyle("-fx-text-fill:white;");
            Image im = new Image(list.get(i).getImage());
            ImageView Image = new ImageView(im);
            Image.setFitHeight(120);
            Image.setFitWidth(120);
            Image.setLayoutX(0);
            Image.setLayoutY(Y);
            Label Musique = new Label(list.get(i).getMusics());
            Musique.setLayoutX(220);
            Musique.setLayoutY(Y+70);
            Musique.setMaxWidth(200);
            Musique.setStyle("-fx-text-fill:white;");
            Musique.setWrapText(true);
            Image.setOnMouseClicked((event) -> {
            ShowSingle(Name);});
            Name.setOnMouseClicked((event) -> {
            ShowSingle(Name);});
            pane.getChildren().addAll(t1,t2,t3,Name,idm,Image,Musique);
            Y+=140;
            HP+=150;
            pane.setPrefHeight(HP);
    }
    }
     public void CatCombo(){
        Connection conn = getConnection();
        String query = "Select DISTINCT idmusician from concert ";
        Statement st;
        ResultSet rs;
        comboB.setValue("Select idmusician");
        try{
            st=conn.createStatement();
            rs=st.executeQuery(query);
            while(rs.next()){
                comboB.getItems().add(rs.getString("idmusician"));
            }
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
    }
    
     public List getNewConcert() {
          List<Concert> concertList = new ArrayList<>();
                   Connection conn = getConnection();
        String query = "SELECT * FROM concert order by idmusician LIMIT 4";
        Statement st;
        ResultSet rs;
                try{
            
            st=conn.createStatement();
            rs=st.executeQuery(query);
            Concert concert;
            while(rs.next()){
               concert = new Concert(rs.getInt("id"),rs.getString("name"),rs.getString("idmusician"),rs.getString("musics"),rs.getString("image"),rs.getString("trailer"));
                concertList.add(concert);
            }
            
        }
        catch(Exception ex)
        {
            ex.printStackTrace();
            
        }
        return concertList;
      }
    
    
    public void ShowNewConcert(){
        List<Concert> list=getNewConcert();
        int Y=0;
        
        for (int i = 0; i < 2; i++) {
            Label Name = new Label();
            Name.setText(list.get(i).getName());
            Name.setLayoutX(40);
            Name.setLayoutY(Y+0);
            Name.setStyle("-fx-text-fill:white;");
            Image im = new Image(list.get(i).getImage());
            ImageView Image = new ImageView(im);
            Image.setFitHeight(120);
            Image.setFitWidth(120);
            Image.setLayoutX(0);
            Image.setLayoutY(Y+20);
             Image.setOnMouseClicked((event) -> {
            ShowSingle(Name);});
            Name.setOnMouseClicked((event) -> {
            ShowSingle(Name);});
            newpane.getChildren().addAll(Name,Image);
            Y+=160;
        }
        
        for (int i = 2; i < list.size(); i++) {
            Label Name = new Label();
            Name.setText(list.get(i).getName());
            Name.setLayoutX(190);
            Name.setLayoutY(Y-320);
            Name.setStyle("-fx-text-fill:white;");
            Image im = new Image(list.get(i).getImage());
            ImageView Image = new ImageView(im);
            Image.setFitHeight(120);
            Image.setFitWidth(120);
            Image.setLayoutX(160);
            Image.setLayoutY(Y-300);
            Image.setOnMouseClicked((event) -> {
            ShowSingle(Name);});
            Name.setOnMouseClicked((event) -> {
            ShowSingle(Name);});
            newpane.getChildren().addAll(Name,Image);
            Y+=160;
        }
    
    }

    @FXML
    private void testStream(ActionEvent event) throws IOException {
         Parent root = FXMLLoader.load(getClass().getResource("Media.fxml"));
       Stage registerStage= new Stage();
        registerStage.initStyle(StageStyle.UNDECORATED);
        registerStage.setScene(new Scene(root,1000, 1000));
        registerStage.show();
    }

    @FXML
    private void testVocal(ActionEvent event) throws IOException {
        Parent root = FXMLLoader.load(getClass().getResource("Record.fxml"));
       Stage registerStage= new Stage();
        registerStage.initStyle(StageStyle.UNDECORATED);
        registerStage.setScene(new Scene(root,500, 500));
        registerStage.show();
    }

    @FXML
    private void testPiano(ActionEvent event) throws IOException {
        Parent root = FXMLLoader.load(getClass().getResource("Piano.fxml"));
       Stage registerStage= new Stage();
        registerStage.initStyle(StageStyle.UNDECORATED);
        registerStage.setScene(new Scene(root,500, 500));
        registerStage.show();
    }

    
    
}

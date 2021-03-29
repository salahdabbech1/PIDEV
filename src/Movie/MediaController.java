/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Movie;

import static groovy.util.Eval.me;
import java.io.File;
import java.net.URI;
import java.net.URL;
import java.nio.file.Paths;
import java.util.ResourceBundle;
import javafx.beans.InvalidationListener;
import javafx.beans.Observable;
import javafx.beans.binding.Bindings;
import javafx.beans.property.DoubleProperty;
import javafx.beans.value.ChangeListener;
import javafx.beans.value.ObservableValue;
import javafx.collections.FXCollections;
import javafx.collections.MapChangeListener;
import javafx.collections.ObservableList;
import javafx.collections.ObservableMap;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.ListView;
import javafx.scene.control.Slider;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.StackPane;
import javafx.scene.media.Media;
import javafx.scene.media.MediaPlayer;
import javafx.scene.media.MediaPlayer.Status;
import javafx.scene.media.MediaView;
import javafx.util.Duration;
import org.apache.commons.io.FilenameUtils;

/**
 * FXML Controller class
 *
 * @author HP
 */
public class MediaController implements Initializable {

    @FXML
    private StackPane pane;
//    @FXML
//    private MediaView mediaView;
    @FXML
    private Slider progressBar;
    @FXML
    private Slider volumeSlider;
     @FXML
     ListView<String> listV ;
    @FXML
    private Button playB;
    String chansons1;
    int newind;
    String chansons;
    int oldindex;
    String path;
     Media test;
      URI path2;
     Media test2;
       MediaPlayer finale;
       MediaPlayer finale2;
    @FXML
    private Label lbStart;
    @FXML
    private Label lbEnd;
    @FXML
    private Button skipB;
private Duration totalTime;
    private MediaView mediaView;
    @FXML
    private Button Bnext;
    @FXML
    private Button Blast;
    private Label nomch;
    @FXML
    private Label artistF;
    @FXML
    private ImageView imv;
    @FXML
    private Label nameF;
    @FXML
    private Label YearT;
    @FXML
    private Label albumT;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        listFiles("C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife\\src\\music");
          playB.setText("play");
          File file = new File("C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife\\src\\images\\new.png");
    Image image = new Image(file.toURI().toString());
    imv.setImage(image);
    }    
 
    //KI NENZEL 3LA PLAY
    @FXML
    public void playVideo(ActionEvent event){
  //ken déjà there's a sound w nzelet aal bouton hedha yaamel pause
      if ((finale.getStatus()==Status.PLAYING)||(playB.getText().equals("pause")))
     { 
     
          playB.setText("pause");
          finale.pause();
          playB.setText("play");
      
        }
        else{
          playB.setText("play");
          finale.play();
        finale.setRate(1);
        playB.setText("pause");
        }

       
  }  

           @FXML
    public void skip5(ActionEvent event){
       finale.seek(finale.getCurrentTime().add(javafx.util.Duration.seconds(5)));
    }
    
    @FXML
    public void furtherSpeedUpVideo(ActionEvent event){

        finale.setRate(2);
    }
    
    @FXML
    public void back5(ActionEvent event){
       
        finale.seek(finale.getCurrentTime().add(javafx.util.Duration.seconds(-5)));
    }
    
    @FXML
    public void furtherSlowDownVideo(ActionEvent event){
   
        finale.setRate(0.5);

    }
    
    //ajouter la lister des fichiers à la liste view
  public void listFiles(String directoryName){
        File directory = new File(directoryName);
 ObservableList<String> Lista = FXCollections.observableArrayList();
        File[] fList = directory.listFiles();

        for (File file : fList){
            if (file.isFile()){
                String fileNameWithOutExt = FilenameUtils.removeExtension(file.getName());
                Lista.add(fileNameWithOutExt);
              listV.setItems(Lista);
               

            }
            
        }
  }
  
  //DURATION TE3 EL SONG
private String getTimeString(long millis) {
    StringBuffer buf = new StringBuffer();

   // int hours = (int) (millis / (1000 * 60 * 60));
    int minutes = (int) ((millis % (1000 * 60 * 60)) / (1000 * 60));
    int seconds = (int) (((millis % (1000 * 60 * 60)) % (1000 * 60)) / 1000);

    buf
//        .append(String.format("%02d", hours))
//        .append(":")
        .append(String.format("%02d", minutes))
        .append(":")
        .append(String.format("%02d", seconds));

    return buf.toString();
}

//***********************************************************************************************//
                                     //Fonction hedhi elle s'execute ki yselectionni ay item mel liste view
//***********************************************************************************************//
    @FXML
    private void tester(MouseEvent event) {
        playB.setText("pause");
      chansons = listV.getSelectionModel().getSelectedItem();
         path = "C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife\\src\\music\\" + chansons + ".mp3";
     test = new Media(Paths.get(path).toUri().toString());
     finale = new MediaPlayer(test);

     finale.play();
     
     //THE CODE THAT WAS MISSING
listV.getSelectionModel().selectedItemProperty().addListener(new ChangeListener<String>() {
    @Override
    public void changed(ObservableValue<? extends String> observable, String oldValue, String newValue) {
        // Your action here
        finale.stop();
          playB.setText("pause");
         
    }
});

  //LMOSHKLA GHADI
  lbStart.setText("00:00");
         volumeSlider.setValue(finale.getVolume()*100);
            volumeSlider.valueProperty().addListener(new InvalidationListener() {
                @Override
                public void invalidated(Observable observable) {
                    finale.setVolume(volumeSlider.getValue()/100);
                }
            });
            
            finale.currentTimeProperty().addListener(new ChangeListener<javafx.util.Duration>() {
                @Override
                public void changed(ObservableValue<? extends javafx.util.Duration> observable, javafx.util.Duration oldValue, javafx.util.Duration newValue) {
                    progressBar.setValue(newValue.toSeconds());
                     String str = getTimeString((long) newValue.toMillis());
                      lbStart.setText(str);
                }
            }
            );
            
            progressBar.setOnMousePressed(new EventHandler<MouseEvent>() {
                @Override
                public void handle(MouseEvent event) {
                    finale.seek(javafx.util.Duration.seconds(progressBar.getValue()));
                  
                                   

                }
            });
            
            progressBar.setOnMouseDragged(new EventHandler<MouseEvent>() {
                @Override
                public void handle(MouseEvent event) {
                    finale.seek(javafx.util.Duration.seconds(progressBar.getValue()));
                   

                }
            });
            finale.setOnReady(new Runnable() {
                @Override
                public void run() {
                    javafx.util.Duration total = test.getDuration();
                    progressBar.setMax(total.toSeconds());
                    totalTime = finale.getMedia().getDuration();
        
 String str = getTimeString((long) totalTime.toMillis());
  lbEnd.setText(str);
                    
                }
            });
           
ObservableMap<String,Object> meta_data= finale.getMedia().getMetadata();

     meta_data.addListener(new MapChangeListener<String,Object>(){
          @Override
          public void onChanged(Change<? extends String, ? extends Object> ch) {  
     
             if(ch.wasAdded()){

                   String key=ch.getKey();
                   Object value=ch.getValueAdded();

             switch(key){
               case "album":
                   albumT.setText("Album: "+value.toString());
                   break;
               case "artist":  
                   artistF.setText(value.toString());
                   break;
               case "title":
                   nameF.setText(value.toString());
                   break;
               case "year":
                   YearT.setText("Year: "+value.toString());
                   break;
               case "image":
                   imv.setImage((Image)value);
                   break;
           }
             
              }
          }
     });

    }
//NENZEL AALA NEXTRACK
    @FXML
    private void nexttrack(ActionEvent event) {
       int x= listV.getItems().size()-1;
if  (listV.getSelectionModel().isSelected(x))
{
    finale.stop();
               listV.getSelectionModel().selectFirst();
     chansons = listV.getSelectionModel().getSelectedItem();
         path = "C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife\\src\\music\\" + chansons + ".mp3";
     test = new Media(Paths.get(path).toUri().toString());
     finale = new MediaPlayer(test);
         
        
        ///YOUFA HOUNI
         volumeSlider.setValue(finale.getVolume()*100);
            volumeSlider.valueProperty().addListener(new InvalidationListener() {
                @Override
                public void invalidated(Observable observable) {
                    finale.setVolume(volumeSlider.getValue()/100);
                }
            });
            
            finale.currentTimeProperty().addListener(new ChangeListener<javafx.util.Duration>() {
                @Override
                public void changed(ObservableValue<? extends javafx.util.Duration> observable, javafx.util.Duration oldValue, javafx.util.Duration newValue) {
                    progressBar.setValue(newValue.toSeconds());
                      String str = getTimeString((long) newValue.toMillis());
                      lbStart.setText(str);
                }
            }
            );
            
            progressBar.setOnMousePressed(new EventHandler<MouseEvent>() {
                @Override
                public void handle(MouseEvent event) {
                    finale.seek(javafx.util.Duration.seconds(progressBar.getValue()));
                                   

                }
            });
            
            progressBar.setOnMouseDragged(new EventHandler<MouseEvent>() {
                @Override
                public void handle(MouseEvent event) {
                    finale.seek(javafx.util.Duration.seconds(progressBar.getValue()));
                }
            });
            finale.setOnReady(new Runnable() {
                @Override
                public void run() {
                    javafx.util.Duration total = test.getDuration();
                    progressBar.setMax(total.toSeconds());
                    totalTime = finale.getMedia().getDuration();
                    String str = getTimeString((long) totalTime.toMillis());
  lbEnd.setText(str);
                }
            });
           ObservableMap<String,Object> meta_data= finale.getMedia().getMetadata();

     meta_data.addListener(new MapChangeListener<String,Object>(){
          @Override
          public void onChanged(MapChangeListener.Change<? extends String, ? extends Object> ch) {  
     
             if(ch.wasAdded()){

                   String key=ch.getKey();
                   Object value=ch.getValueAdded();

             switch(key){
               case "album":
                   albumT.setText("Album: "+value.toString());
                   break;
               case "artist":  
                   artistF.setText(value.toString());
                   break;
               case "title":
                   nameF.setText(value.toString());
                   break;
               case "year":
                   YearT.setText("Year: "+value.toString());
                   break;
               case "image":
                   imv.setImage((Image)value);
                   
                   break;
           }
             
              }
          }
     });
        finale.play();
}
else 
{
     finale.stop();
               listV.getSelectionModel().selectNext();
           chansons = listV.getSelectionModel().getSelectedItem();
         path = "C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife\\src\\music\\" + chansons + ".mp3";
     test = new Media(Paths.get(path).toUri().toString());
     finale = new MediaPlayer(test);

         volumeSlider.setValue(finale.getVolume()*100);
            volumeSlider.valueProperty().addListener(new InvalidationListener() {
                @Override
                public void invalidated(Observable observable) {
                    finale.setVolume(volumeSlider.getValue()/100);
                }
            });
            
            finale.currentTimeProperty().addListener(new ChangeListener<javafx.util.Duration>() {
                @Override
                public void changed(ObservableValue<? extends javafx.util.Duration> observable, javafx.util.Duration oldValue, javafx.util.Duration newValue) {
                    progressBar.setValue(newValue.toSeconds());
                      String str = getTimeString((long) newValue.toMillis());
                      lbStart.setText(str);
                }
            }
            );
            
            progressBar.setOnMousePressed(new EventHandler<MouseEvent>() {
                @Override
                public void handle(MouseEvent event) {
                    finale.seek(javafx.util.Duration.seconds(progressBar.getValue()));
     
                                   

                }
            });
            
            progressBar.setOnMouseDragged(new EventHandler<MouseEvent>() {
                @Override
                public void handle(MouseEvent event) {
                    finale.seek(javafx.util.Duration.seconds(progressBar.getValue()));
                

                }
            });
            finale.setOnReady(new Runnable() {
                @Override
                public void run() {
                    javafx.util.Duration total = test.getDuration();
                    progressBar.setMax(total.toSeconds());
                    totalTime = finale.getMedia().getDuration();
                   String str = getTimeString((long) totalTime.toMillis());
  lbEnd.setText(str);
                }
            });
           ObservableMap<String,Object> meta_data= finale.getMedia().getMetadata();

     meta_data.addListener(new MapChangeListener<String,Object>(){
          @Override
          public void onChanged(MapChangeListener.Change<? extends String, ? extends Object> ch) {  
     
             if(ch.wasAdded()){

                   String key=ch.getKey();
                   Object value=ch.getValueAdded();

             switch(key){
               case "album":
                   albumT.setText("Album: "+value.toString());
                   break;
               case "artist":  
                   artistF.setText(value.toString());
                   break;
               case "title":
                   nameF.setText(value.toString());
                   break;
               case "year":
                   YearT.setText("Year: "+value.toString());
                   break;
               case "image":
                   imv.setImage((Image)value);
                   
                   break;
           }
             
              }
          }
     });
        finale.play();
    
}
       
    }

    @FXML
    private void lasttrack(ActionEvent event) {
    if  (listV.getSelectionModel().isSelected(0))    
    {
         finale.stop();
               listV.getSelectionModel().selectLast();
               
       chansons = listV.getSelectionModel().getSelectedItem();
         path = "C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife\\src\\music\\" + chansons + ".mp3";
     test = new Media(Paths.get(path).toUri().toString());
     finale = new MediaPlayer(test);

         volumeSlider.setValue(finale.getVolume()*100);
            volumeSlider.valueProperty().addListener(new InvalidationListener() {
                @Override
                public void invalidated(Observable observable) {
                    finale.setVolume(volumeSlider.getValue()/100);
                }
            });
            
            finale.currentTimeProperty().addListener(new ChangeListener<javafx.util.Duration>() {
                @Override
                public void changed(ObservableValue<? extends javafx.util.Duration> observable, javafx.util.Duration oldValue, javafx.util.Duration newValue) {
                    progressBar.setValue(newValue.toSeconds());
                      String str = getTimeString((long) newValue.toMillis());
                      lbStart.setText(str);
                }
            }
            );
            
            progressBar.setOnMousePressed(new EventHandler<MouseEvent>() {
                @Override
                public void handle(MouseEvent event) {
                    finale.seek(javafx.util.Duration.seconds(progressBar.getValue()));
                  
                                   

                }
            });
            
            progressBar.setOnMouseDragged(new EventHandler<MouseEvent>() {
                @Override
                public void handle(MouseEvent event) {
                    finale.seek(javafx.util.Duration.seconds(progressBar.getValue()));
          

                }
            });
            finale.setOnReady(new Runnable() {
                @Override
                public void run() {
                    javafx.util.Duration total = test.getDuration();
                    progressBar.setMax(total.toSeconds());
                    totalTime = finale.getMedia().getDuration();
               String str = getTimeString((long) totalTime.toMillis());
  lbEnd.setText(str);
                }
            });
            ObservableMap<String,Object> meta_data= finale.getMedia().getMetadata();

     meta_data.addListener(new MapChangeListener<String,Object>(){
          @Override
          public void onChanged(MapChangeListener.Change<? extends String, ? extends Object> ch) {  
     
             if(ch.wasAdded()){

                   String key=ch.getKey();
                   Object value=ch.getValueAdded();

             switch(key){
               case "album":
                   albumT.setText("Album: "+value.toString());
                   break;
               case "artist":  
                   artistF.setText(value.toString());
                   break;
               case "title":
                   nameF.setText(value.toString());
                   break;
               case "year":
                   YearT.setText("Year: "+value.toString());
                   break;
               case "image":
                   imv.setImage((Image)value);
                   
                   break;
           }
             
              }
          }
     });
        finale.play();
    }
    else{
        
          finale.stop();
           listV.getSelectionModel().selectPrevious();
               chansons = listV.getSelectionModel().getSelectedItem();
         path = "C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife\\src\\music\\" + chansons + ".mp3";
     test = new Media(Paths.get(path).toUri().toString());
     finale = new MediaPlayer(test);
         volumeSlider.setValue(finale.getVolume()*100);
            volumeSlider.valueProperty().addListener(new InvalidationListener() {
                @Override
                public void invalidated(Observable observable) {
                    finale.setVolume(volumeSlider.getValue()/100);
                }
            });
            
            finale.currentTimeProperty().addListener(new ChangeListener<javafx.util.Duration>() {
                @Override
                public void changed(ObservableValue<? extends javafx.util.Duration> observable, javafx.util.Duration oldValue, javafx.util.Duration newValue) {
                    progressBar.setValue(newValue.toSeconds());
                      String str = getTimeString((long) newValue.toMillis());
                      lbStart.setText(str);
                }
            }
            );
            
            progressBar.setOnMousePressed(new EventHandler<MouseEvent>() {
                @Override
                public void handle(MouseEvent event) {
                    finale.seek(javafx.util.Duration.seconds(progressBar.getValue()));
                    
                                   

                }
            });
            
            progressBar.setOnMouseDragged(new EventHandler<MouseEvent>() {
                @Override
                public void handle(MouseEvent event) {
                    finale.seek(javafx.util.Duration.seconds(progressBar.getValue()));
                   

                }
            });
            finale.setOnReady(new Runnable() {
                @Override
                public void run() {
                    javafx.util.Duration total = test.getDuration();
                    progressBar.setMax(total.toSeconds());
                    totalTime = finale.getMedia().getDuration();
                   String str = getTimeString((long) totalTime.toMillis());
  lbEnd.setText(str);
                }
            });
           ObservableMap<String,Object> meta_data= finale.getMedia().getMetadata();

     meta_data.addListener(new MapChangeListener<String,Object>(){
          @Override
          public void onChanged(MapChangeListener.Change<? extends String, ? extends Object> ch) {  
     
             if(ch.wasAdded()){

                   String key=ch.getKey();
                   Object value=ch.getValueAdded();

             switch(key){
               case "album":
                   albumT.setText("Album: "+value.toString());
                   break;
               case "artist":  
                   artistF.setText(value.toString());
                   break;
               case "title":
                   nameF.setText(value.toString());
                   break;
               case "year":
                   YearT.setText("Year: "+value.toString());
                   break;
               case "image":
                   imv.setImage((Image)value);
                   
                   break;
           }
             
              }
          }
     });
        finale.play();
        
    }
      
    }

    @FXML
    private void JumpToLast(ActionEvent event) {
         finale.stop();
               listV.getSelectionModel().selectLast();
        chansons = listV.getSelectionModel().getSelectedItem();
         path = "C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife\\src\\music\\" + chansons + ".mp3";
     test = new Media(Paths.get(path).toUri().toString());
     finale = new MediaPlayer(test);
         volumeSlider.setValue(finale.getVolume()*100);
            volumeSlider.valueProperty().addListener(new InvalidationListener() {
                @Override
                public void invalidated(Observable observable) {
                    finale.setVolume(volumeSlider.getValue()/100);
                }
            });
            
            finale.currentTimeProperty().addListener(new ChangeListener<javafx.util.Duration>() {
                @Override
                public void changed(ObservableValue<? extends javafx.util.Duration> observable, javafx.util.Duration oldValue, javafx.util.Duration newValue) {
                    progressBar.setValue(newValue.toSeconds());
                      String str = getTimeString((long) newValue.toMillis());
                      lbStart.setText(str);
                }
            }
            );
            
            progressBar.setOnMousePressed(new EventHandler<MouseEvent>() {
                @Override
                public void handle(MouseEvent event) {
                    finale.seek(javafx.util.Duration.seconds(progressBar.getValue()));
                  
                                   

                }
            });
            
            progressBar.setOnMouseDragged(new EventHandler<MouseEvent>() {
                @Override
                public void handle(MouseEvent event) {
                    finale.seek(javafx.util.Duration.seconds(progressBar.getValue()));
       

                }
            });
            finale.setOnReady(new Runnable() {
                @Override
                public void run() {
                    javafx.util.Duration total = test.getDuration();
                    progressBar.setMax(total.toSeconds());
                    totalTime = finale.getMedia().getDuration();
                    String str = getTimeString((long) totalTime.toMillis());
  lbEnd.setText(str);
                }
            });
            ObservableMap<String,Object> meta_data= finale.getMedia().getMetadata();

     meta_data.addListener(new MapChangeListener<String,Object>(){
          @Override
          public void onChanged(MapChangeListener.Change<? extends String, ? extends Object> ch) {  
     
             if(ch.wasAdded()){

                   String key=ch.getKey();
                   Object value=ch.getValueAdded();

             switch(key){
               case "album":
                   albumT.setText("Album: "+value.toString());
                   break;
               case "artist":  
                   artistF.setText(value.toString());
                   break;
               case "title":
                   nameF.setText(value.toString());
                   break;
               case "year":
                   YearT.setText("Year: "+value.toString());
                   break;
               case "image":
                   imv.setImage((Image)value);
                   
                   break;
           }
             
              }
          }
     });
        finale.play();
        
    }

    @FXML
    private void firstT(ActionEvent event) {
         finale.stop();
               listV.getSelectionModel().selectFirst();
                chansons = listV.getSelectionModel().getSelectedItem();
         path = "C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife\\src\\music\\" + chansons + ".mp3";
     test = new Media(Paths.get(path).toUri().toString());
     finale = new MediaPlayer(test);

         volumeSlider.setValue(finale.getVolume()*100);
            volumeSlider.valueProperty().addListener(new InvalidationListener() {
                @Override
                public void invalidated(Observable observable) {
                    finale.setVolume(volumeSlider.getValue()/100);
                }
            });
            
            finale.currentTimeProperty().addListener(new ChangeListener<javafx.util.Duration>() {
                @Override
                public void changed(ObservableValue<? extends javafx.util.Duration> observable, javafx.util.Duration oldValue, javafx.util.Duration newValue) {
                    progressBar.setValue(newValue.toSeconds());
                      String str = getTimeString((long) newValue.toMillis());
                      lbStart.setText(str);
                }
            }
            );
            
            progressBar.setOnMousePressed(new EventHandler<MouseEvent>() {
                @Override
                public void handle(MouseEvent event) {
                    finale.seek(javafx.util.Duration.seconds(progressBar.getValue()));
                   
                                   

                }
            });
            
            progressBar.setOnMouseDragged(new EventHandler<MouseEvent>() {
                @Override
                public void handle(MouseEvent event) {
                    finale.seek(javafx.util.Duration.seconds(progressBar.getValue()));
                   
                }
            });
            finale.setOnReady(new Runnable() {
                @Override
                public void run() {
                    javafx.util.Duration total = test.getDuration();
                    progressBar.setMax(total.toSeconds());
                    totalTime = finale.getMedia().getDuration();
                   String str = getTimeString((long) totalTime.toMillis());
  lbEnd.setText(str);
                }
            });
          ObservableMap<String,Object> meta_data= finale.getMedia().getMetadata();

     meta_data.addListener(new MapChangeListener<String,Object>(){
          @Override
          public void onChanged(MapChangeListener.Change<? extends String, ? extends Object> ch) {  
     
             if(ch.wasAdded()){

                   String key=ch.getKey();
                   Object value=ch.getValueAdded();

             switch(key){
               case "album":
                   albumT.setText("Album: "+value.toString());
                   break;
               case "artist":  
                   artistF.setText(value.toString());
                   break;
               case "title":
                   nameF.setText(value.toString());
                   break;
               case "year":
                   YearT.setText("Year: "+value.toString());
                   break;
               case "image":
                   imv.setImage((Image)value);
                   
                   break;
           }
             
              }
          }
     });
        finale.play();
    }

   
  
   


}

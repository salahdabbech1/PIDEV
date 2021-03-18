/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Movie;

import java.io.File;
import java.net.URI;
import java.net.URL;
import java.nio.file.Paths;
import java.util.ResourceBundle;
import javafx.beans.InvalidationListener;
import javafx.beans.Observable;
import javafx.beans.value.ChangeListener;
import javafx.beans.value.ObservableValue;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.ListView;
import javafx.scene.control.Slider;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.StackPane;
import javafx.scene.media.Media;
import javafx.scene.media.MediaPlayer;

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
     ListView<File> listV ;
    @FXML
    private Button playB;
    File chansons;
    URI path;
     Media test;
       MediaPlayer finale;
    @FXML
    private Label lbStart;
    @FXML
    private Label lbEnd;
    @FXML
    private Button skipB;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        listFiles("C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife\\src\\music");
        
    }    
 

 @FXML
    public void pauseVideo(ActionEvent event){
  
        finale.pause();
    }
    
    
    @FXML
    public void stopVideo(ActionEvent event){

        finale.stop();
    }
    
    @FXML
    public void playVideo(ActionEvent event){
        
        //PLAY THE 1ST SONG
         chansons = listV.getSelectionModel().getSelectedItem();
         path = chansons.toURI();
     test = new Media(Paths.get(path).toUri().toString());
     finale = new MediaPlayer(test); 
        finale.play();
         
        
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
                }
            }
            );
            
            progressBar.setOnMousePressed(new EventHandler<MouseEvent>() {
                @Override
                public void handle(MouseEvent event) {
                    finale.seek(javafx.util.Duration.seconds(progressBar.getValue()));
                      lbStart.setText(String.valueOf(progressBar.getValue()));
                }
            });
            
            progressBar.setOnMouseDragged(new EventHandler<MouseEvent>() {
                @Override
                public void handle(MouseEvent event) {
                    finale.seek(javafx.util.Duration.seconds(progressBar.getValue()));
                     lbStart.setText(String.valueOf(progressBar.getValue()));
                }
            });
            
            
            
            finale.setOnReady(new Runnable() {
                @Override
                public void run() {
                    javafx.util.Duration total = test.getDuration();
                    progressBar.setMax(total.toSeconds());
                    lbEnd.setText(String.valueOf(total.toMinutes()));
                }
            });
            
            finale.play();
            
//            
//                     //RECHECKING THE SELECT ITEM 
//    File chansons1 = listV.getSelectionModel().getSelectedItem();
//    URI path2 = chansons.toURI();
//   System.out.println("C");
//   
////   //WHILE THE SELECTED ITEM IS NOT LIKE THE OLD SELECTED ONE
////   //WE WE STOP PLAYING THE OLD AND PLAY THE NEW ONE
////   
//    while (!path.equals(path2)) {
//         System.out.println("D");
//               finale.stop();
//                 Media test2 = new Media(Paths.get(path).toUri().toString());
//    MediaPlayer finale2 = new MediaPlayer(test2); 
//                 finale2.play();
//               }
            
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
  public void listFiles(String directoryName){
        File directory = new File(directoryName);
 ObservableList<File> Lista = FXCollections.observableArrayList();
        File[] fList = directory.listFiles();

        for (File file : fList){
            if (file.isFile()){
                System.out.println(file.getName());
                Lista.add(file);
              listV.setItems(Lista);
               

            }
            
        }
  }

   
  
   


}

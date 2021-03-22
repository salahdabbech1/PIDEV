/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Movie;

import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import java.io.File;
import java.net.URI;
import java.nio.file.Paths;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.scene.control.Alert;
import javafx.scene.control.ButtonType;
import javafx.scene.control.Label;
import javafx.scene.control.ListView;
import javafx.scene.media.Media;
import javafx.scene.media.MediaPlayer;

/**
 * FXML Controller class
 *
 * @author HP
 */
public class RecordController implements Initializable {
 JavaSoundRecorder javaSoundRecorder;
    @FXML
    private Button bStart;
    @FXML
    private Button bStop;
    @FXML
    private ListView<File> lister;
    File chansons;
    URI path;
     Media test;
       MediaPlayer finale;
    @FXML
    private Label voiceT;
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        listFiles("C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife");
        }             
    

    @FXML
    private void Jouer(ActionEvent event) {
         javaSoundRecorder  = new JavaSoundRecorder();
                Thread thread = new Thread(javaSoundRecorder);
                voiceT.setText("Started Recording..");
                 TextToSpeech tts = new TextToSpeech();
                 tts.setVoice("dfki-poppy-hsmm");
                 tts.speak("Your voice is now being recorded", 2.0f, false, true);
                thread.start();
    }

    @FXML
    private void Stopper(ActionEvent event) {
        javaSoundRecorder.finish();
                javaSoundRecorder.cancel();
                  Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
alert.setTitle("Message ");
alert.setHeaderText("SUCCES!");
alert.setContentText("Votre audio est bien enregistrée! ");
alert.showAndWait().ifPresent(rs -> {
    if (rs == ButtonType.OK) {
        System.out.println("Pressed OK.");
    }
});
                listFiles("C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife");
                
    }
    
     public void listFiles(String directoryName){
        File directory = new File(directoryName);
 ObservableList<File> Lista = FXCollections.observableArrayList();
        File[] fList = directory.listFiles();

        for (File file : fList){
            String fileName = file.getName();          
String fileExtension = fileName.substring(fileName.lastIndexOf(".") + 1, file.getName().length());
            if (file.isFile()&& (fileExtension.equals("wav"))){
                System.out.println(file.getName());
                Lista.add(file);
              lister.setItems(Lista);
               

            }
            
        }
  }

    @FXML
    private void playSong(ActionEvent event) {
         chansons = lister.getSelectionModel().getSelectedItem();
         path = chansons.toURI();
     test = new Media(Paths.get(path).toUri().toString());
     finale = new MediaPlayer(test); 
        finale.play();
    }

    @FXML
    private void stopPlay(ActionEvent event) {
        finale.stop();
         
    }
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Movie;

import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.media.Media;
import javafx.scene.media.MediaPlayer;

/**
 * FXML Controller class
 *
 * @author HP
 */
public class PianoController implements Initializable {

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void clickDo(ActionEvent event) throws IOException {
File audioFile = new File("C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife\\src\\PianoTiles\\c.wav");
Media audio = new Media(audioFile.toURI().toString());
MediaPlayer audioPlayer = new MediaPlayer(audio);
audioPlayer.setAutoPlay(true);
    }

    @FXML
    private void clickRe(ActionEvent event) {
        File audioFile = new File("C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife\\src\\PianoTiles\\D.wav");
Media audio = new Media(audioFile.toURI().toString());
MediaPlayer audioPlayer = new MediaPlayer(audio);
audioPlayer.setAutoPlay(true);
    }

    @FXML
    private void clickMi(ActionEvent event) {
            File audioFile = new File("C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife\\src\\PianoTiles\\E.wav");
Media audio = new Media(audioFile.toURI().toString());
MediaPlayer audioPlayer = new MediaPlayer(audio);
audioPlayer.setAutoPlay(true);
    }

    @FXML
    private void clickFa(ActionEvent event) {
            File audioFile = new File("C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife\\src\\PianoTiles\\F.wav");
Media audio = new Media(audioFile.toURI().toString());
MediaPlayer audioPlayer = new MediaPlayer(audio);
audioPlayer.setAutoPlay(true);
    }

    @FXML
    private void clickSol(ActionEvent event) {
            File audioFile = new File("C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife\\src\\PianoTiles\\G.wav");
Media audio = new Media(audioFile.toURI().toString());
MediaPlayer audioPlayer = new MediaPlayer(audio);
audioPlayer.setAutoPlay(true);
    }

    @FXML
    private void clickLa(ActionEvent event) {
            File audioFile = new File("C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife\\src\\PianoTiles\\A.wav");
Media audio = new Media(audioFile.toURI().toString());
MediaPlayer audioPlayer = new MediaPlayer(audio);
audioPlayer.setAutoPlay(true);
    }

    @FXML
    private void clickSi(ActionEvent event) {
            File audioFile = new File("C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife\\src\\PianoTiles\\B.wav");
Media audio = new Media(audioFile.toURI().toString());
MediaPlayer audioPlayer = new MediaPlayer(audio);
audioPlayer.setAutoPlay(true);
    }

    @FXML
    private void clickDo1(ActionEvent event) {
            File audioFile = new File("C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife\\src\\PianoTiles\\C1.wav");
Media audio = new Media(audioFile.toURI().toString());
MediaPlayer audioPlayer = new MediaPlayer(audio);
audioPlayer.setAutoPlay(true);
    }

    @FXML
    private void clickMi1(ActionEvent event) {
            File audioFile = new File("C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife\\src\\PianoTiles\\F1.wav");
Media audio = new Media(audioFile.toURI().toString());
MediaPlayer audioPlayer = new MediaPlayer(audio);
audioPlayer.setAutoPlay(true);
    }

    @FXML
    private void clickDoD(ActionEvent event) {
            File audioFile = new File("C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife\\src\\PianoTiles\\C_s.wav");
Media audio = new Media(audioFile.toURI().toString());
MediaPlayer audioPlayer = new MediaPlayer(audio);
audioPlayer.setAutoPlay(true);
    }

    @FXML
    private void clickReD(ActionEvent event) {
         File audioFile = new File("C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife\\src\\PianoTiles\\D_s.wav");
Media audio = new Media(audioFile.toURI().toString());
MediaPlayer audioPlayer = new MediaPlayer(audio);
audioPlayer.setAutoPlay(true);
    }

    @FXML
    private void clickFaD(ActionEvent event) {
         File audioFile = new File("C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife\\src\\PianoTiles\\F_s.wav");
Media audio = new Media(audioFile.toURI().toString());
MediaPlayer audioPlayer = new MediaPlayer(audio);
audioPlayer.setAutoPlay(true);
    }

    @FXML
    private void clickSolD(ActionEvent event) {
         File audioFile = new File("C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife\\src\\PianoTiles\\G_s.wav");
Media audio = new Media(audioFile.toURI().toString());
MediaPlayer audioPlayer = new MediaPlayer(audio);
audioPlayer.setAutoPlay(true);
    }

    @FXML
    private void clickLaD(ActionEvent event) {
         File audioFile = new File("C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife\\src\\PianoTiles\\Bb.wav");
Media audio = new Media(audioFile.toURI().toString());
MediaPlayer audioPlayer = new MediaPlayer(audio);
audioPlayer.setAutoPlay(true);
    }

    @FXML
    private void clickDoD1(ActionEvent event) {
         File audioFile = new File("C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife\\src\\PianoTiles\\C_s1.wav");
Media audio = new Media(audioFile.toURI().toString());
MediaPlayer audioPlayer = new MediaPlayer(audio);
audioPlayer.setAutoPlay(true);
    }

    @FXML
    private void clickRE1(ActionEvent event) {
        File audioFile = new File("C:\\Users\\HP\\Documents\\NetBeansProjects\\ArtLife\\ArtLife\\src\\PianoTiles\\D_s1.wav");
Media audio = new Media(audioFile.toURI().toString());
MediaPlayer audioPlayer = new MediaPlayer(audio);
audioPlayer.setAutoPlay(true);
    }
    
}

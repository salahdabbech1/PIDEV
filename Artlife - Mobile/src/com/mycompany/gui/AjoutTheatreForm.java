/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.gui;
import com.codename1.components.InfiniteProgress;
import com.codename1.ext.filechooser.FileChooser;

import com.codename1.io.FileSystemStorage;
import com.codename1.io.Log;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.ui.Button;
import com.codename1.ui.CN;
import com.codename1.ui.CheckBox;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Component;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;

import static com.codename1.ui.Display.getInstance;
import com.codename1.ui.Toolbar;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.spinner.Picker;
import com.codename1.ui.util.ImageIO;
import com.codename1.ui.util.Resources;
import com.mycompany.entities.Tactor;
import com.mycompany.entities.Theatre;
import com.mycompany.services.ServiceTactor;
import com.mycompany.services.ServiceTheatre;
import java.io.IOException;
import java.io.OutputStream;
import java.net.URI;
import java.net.URISyntaxException;

import java.util.Date;




/**
 *
 * @author ahmed
 */
public class AjoutTheatreForm extends BaseForm {

   
    Form current;
    public AjoutTheatreForm(Resources res){
    //super("tactor", BoxLayout.x());
    
    Toolbar tb=new Toolbar(true);
    current=this;
    setToolbar(tb);
    getTitleArea().setUIID("Container");
    setTitle("ajouter theatre");
    getContentPane().setScrollVisible(false);
    
    
    
    
    TextField name =new TextField("", "entrer name");
    name.setUIID("TextFieldBlack");
    addStringValue("Name", name);
    
//    TextField genre =new TextField("", "entrer genre");
//    genre.setUIID("TextFieldBlack");
//    addStringValue("Genre", genre);
    
    TextField trailer =new TextField("", "entrer trailer");
    trailer.setUIID("TextFieldBlack");
    addStringValue("Trailer", trailer);
    
     Picker datePicker = new Picker();
    datePicker.setType(Display.PICKER_TYPE_DATE);
      addStringValue("datePicker", datePicker);    
       datePicker.setUIID("TextFieldBlack");
       
      
    
    TextField poster =new TextField("", "entrer poster");
    poster.setUIID("TextFieldBlack");
    addStringValue("Poster", poster);
    
     ComboBox Tactor = new ComboBox();
        for (Tactor c : new ServiceTactor().AffichageTactor()) {
                Tactor.addItem(c.getName());
            }
    addStringValue("name", Tactor);
    
   
    
    TextField description =new TextField("", "entrer description");
    description.setUIID("TextFieldBlack");
    addStringValue("Description", description);
    
//    TextField image =new TextField("", "entrer image");
    
    
        Button image = new Button("Upload img");
        image.setUIID("NewsTopLine");
    addStringValue("Image", image);
    CheckBox multiSelect = new CheckBox("Multi-select");
      image.addActionListener((ActionEvent e)-> {
       if (FileChooser.isAvailable()){
            FileChooser.setOpenFilesInPlace(true);
            FileChooser.showOpenDialog(multiSelect.isSelected(),".jpg, .jpeg, .png/plain ",(ActionEvent e2) ->{
            
                   if(e2==null || e2.getSource()==null){
                       add("No file is selected");
                       revalidate();
                       
                   }
                   if(multiSelect.isSelected()){
                   String[] paths= (String[]) e2.getSource();
                   for(String path : paths){
                       System.out.println(path);
                       CN.execute(path);
                   }
                   return;
                   }
                   String file= (String) e2.getSource();
                   if(file == null){
                   add("No file was selected");
                   revalidate();
                   }else{
                             String hh="C:/Users/ahmed/OneDrive/Documents/NetBeansProjects/javafx-demo/aman/src/";
                   Image logo;
                    try{
                        logo = Image.createImage(file).scaledHeight(500);
                        add(logo);
                        String imageFile = FileSystemStorage.getInstance().getAppHomePath() + " s.png";
                    
                    try (OutputStream  os = FileSystemStorage.getInstance().openOutputStream(imageFile)) {
                            System.out.println(imageFile);
                            ImageIO.getImageIO().save(logo, os, ImageIO.FORMAT_PNG, 1);
                           }  catch(IOException err) {
                           
                           }
                           String extension= null;
                           if(file.lastIndexOf(".")>0){
                               extension = file.substring(file.lastIndexOf(".") + 1);
                               StringBuilder sb= new StringBuilder(file);
                               if(file.startsWith("file://")){
                                   sb.delete(0,7);
                               }
                               int lastIndexPeriod= sb.toString().lastIndexOf(".");
                               Log.p(sb.toString());
                               String s1 = sb.toString().substring(lastIndexPeriod);
                               String s2 = sb.toString().substring(0, lastIndexPeriod -1);
                               String picName= saveFileToDevice(file, s1);
                           }
                       } catch (IOException ex) {
                       }
                               revalidate();
                   }
            });
       }
        
      
   });
    
    Picker genre = new Picker();
genre.setType(Display.PICKER_TYPE_STRINGS);
genre.setStrings("Reality", "Comedy", "Historical");
      addStringValue("genre", genre);    
      genre.setUIID("TextFieldBlack");
       genre.setUIID("TextFieldBlack");
   genre.setSelectedString("Comedy");
    
    Button buttonAjt=new Button("Ajouter Theatre");
    addStringValue("", buttonAjt);
    
      
    //onlick event button
    buttonAjt.addActionListener((e)->{
        try{
            if(name.getText()=="" || description.getText()==""){
            Dialog.show("veulliez verifier les données","","annuler","OK");
    }
         else {
    InfiniteProgress ip = new InfiniteProgress(); 
    final Dialog iDialog = ip.showInfiniteBlocking();
    SimpleDateFormat format = new SimpleDateFormat("yyyy-MM-dd");
    String d="1978-11-11";
    Date date1=new SimpleDateFormat("yyyy-MM-dd").parse(d);
    
    

    
    
    Theatre t = new Theatre(String.valueOf(name.getText()).toString(),String.valueOf(Tactor.getSelectedItem()).toString(),String.valueOf(genre.getText()).toString(),datePicker.getDate(),String.valueOf(image.getText()).toString(),String.valueOf(trailer.getText()).toString(),String.valueOf(description.getText()).toString(),String.valueOf(poster.getText()).toString());
    System.out.println("data Theatre = "+t);
    ServiceTheatre.getInstance().addTheatre(t);
    iDialog.dispose(); 
    refreshTheme();
    }
        }
        catch (Exception ex) {
         ex.printStackTrace();
}
        });
    }

    private void addStringValue(String s, Component v) {
        add(BorderLayout.west(new Label(s,"PaddedLabel"))
        .add(BorderLayout.CENTER,v));
        add(createLineSeparator(0xeeeeee));
        
    }
     protected String saveFileToDevice(String hi, String ext) throws IOException {
        URI uri;
        try {
            uri = new URI(hi);
            String path = uri.getPath();
            int index = hi.lastIndexOf("/");
            hi = hi.substring(index + 1);
            return hi;
        } catch (URISyntaxException ex) {
        }
        return "hh";
    }
    


       
   
}

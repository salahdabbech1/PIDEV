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
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.spinner.Picker;
import com.codename1.ui.util.ImageIO;
import com.codename1.ui.util.Resources;
import com.mycompany.entities.Tactor;
import com.mycompany.services.ServiceTactor;
import java.io.IOException;
import java.io.OutputStream;
import java.net.URI;
import java.net.URISyntaxException;

import java.util.Date;


/**
 *
 * @author ahmed
 */
public class AjoutTactorForm extends BaseForm {

   
    Form current;
    public AjoutTactorForm(Resources res){
    //super("tactor", BoxLayout.x());
    
    Toolbar tb=new Toolbar(true);
    current=this;
    setToolbar(tb);
    getTitleArea().setUIID("Container");
    setTitle("ajouter tactor");
    getContentPane().setScrollVisible(false);
    
    
    
    
    TextField name =new TextField("", "entrer name");
    name.setUIID("TextFieldBlack");
    addStringValue("Name", name);
    
      Picker datePicker = new Picker();
    datePicker.setType(Display.PICKER_TYPE_DATE);
      addStringValue("datePicker", datePicker);    
      datePicker.setUIID("TextFieldBlack");

    
    TextField description =new TextField("", "entrer description");
    description.setUIID("TextFieldBlack");
    addStringValue("Description", description);
    
     Button btnAnnuler =new Button ("Return");
           addStringValue("", btnAnnuler);
                btnAnnuler.addActionListener(c -> {
                new ListTactorForm(res).show();
                });
    CheckBox multiSelect = new CheckBox("Multi-select");
                     Button buttonAjt=new Button("Ajouter Tactor");
                //CODE ABAY
                  

 
     
     //FILE CHOOSER
  
  
    addStringValue("", buttonAjt);
    
    buttonAjt.addActionListener((ActionEvent e) -> {
            if (FileChooser.isAvailable()) {
                FileChooser.setOpenFilesInPlace(true);
                FileChooser.showOpenDialog( ".jpg, .jpeg, .png/plain", (ActionEvent e2) -> {
                    if (e2 == null || e2.getSource() == null) {
                        add("No file was selected");
                        revalidate();
                        return;
                    }
                  if (multiSelect.isSelected()) {
                        String[] paths = (String[]) e2.getSource();
                        for (String path : paths) {
                            System.out.println("test llowel"+path);
                            CN.execute(path);
                        }
                        return;
                    }

                    String file = (String) e2.getSource();
                    if (file == null) {
                        add("No file was selected");
                        revalidate();
                    } else {
                        String hh="C:/Users/bouyo/Desktop/Study/S2/Project/obile/Final/src";
                        Image logo;

                        try {
                            logo = Image.createImage(file).scaledHeight(500);;
                            add(logo);
                            String imageFile = FileSystemStorage.getInstance().getAppHomePath() + "s.png";

                            try (OutputStream os = FileSystemStorage.getInstance().openOutputStream(imageFile)) {
                                System.out.println("test theny"+imageFile);
                                ImageIO.getImageIO().save(logo, os, ImageIO.FORMAT_PNG, 1);
                            } catch (IOException err) {
                            }
                        } catch (IOException ex) {
                        }

                        String extension = null;
                        if (file.lastIndexOf(".") > 0) {
                            extension = file.substring(file.lastIndexOf(".") + 1);
                            StringBuilder hi = new StringBuilder(file);
                            if (file.startsWith("file://")) {
                                hi.delete(0, 7);
                            }
                            int lastIndexPeriod = hi.toString().lastIndexOf(".");
                            Log.p(hi.toString());
                            String ext = hi.toString().substring(lastIndexPeriod);
                            String hmore = hi.toString().substring(0, lastIndexPeriod - 1);
                            try {
                                String namePic ="images/Tactors/"+ saveFileToDevice(file, ext);
                                System.out.println("test theleth"+namePic);
                                
                                //AJOUT
    
   
    
     try{
             if(name.getText()=="" || description.getText()==""){
            Dialog.show("veulliez verifier les donnÃ©es","","annuler","OK");
    }
         else {
    InfiniteProgress ip = new InfiniteProgress(); 
    final Dialog iDialog = ip.showInfiniteBlocking();
    String d="1978-11-11";
    Date date1=new SimpleDateFormat("yyyy-MM-dd").parse(d);
    Tactor t = new Tactor(String.valueOf(name.getText()).toString(),datePicker.getDate(),String.valueOf(description.getText()).toString(),namePic);
   ServiceTactor.getInstance().addTactor(t);
     iDialog.dispose(); 
         new ListTactorForm(res).show();
    refreshTheme();
   

    
    }
        }
        catch (Exception ex) {
         ex.printStackTrace();
}       } catch (IOException ex) {
                            }

                            revalidate();

                        
                    }
                    }
                        });
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

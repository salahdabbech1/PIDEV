/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.gui;
import com.codename1.components.InfiniteProgress;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Component;
import com.codename1.ui.Dialog;

import static com.codename1.ui.Display.getInstance;
import com.codename1.ui.Toolbar;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.util.Resources;
import com.mycompany.entities.Tactor;
import com.mycompany.entities.Theatre;
import com.mycompany.services.ServiceTactor;
import com.mycompany.services.ServiceTheatre;

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
    
    TextField genre =new TextField("", "entrer genre");
    genre.setUIID("TextFieldBlack");
    addStringValue("Genre", genre);
    
    TextField trailer =new TextField("", "entrer trailer");
    trailer.setUIID("TextFieldBlack");
    addStringValue("Trailer", trailer);
    
    TextField poster =new TextField("", "entrer poster");
    poster.setUIID("TextFieldBlack");
    addStringValue("Poster", poster);
    
     ComboBox Tactor = new ComboBox();
        for (Tactor c : new ServiceTactor().AffichageTactor()) {
                Tactor.addItem(c.getName());
            }
    addStringValue("name", Tactor);
    
    TextField rdate =new TextField("", "entrer brithdate");
    rdate.setUIID("TextFieldBlack");
    addStringValue("Birthdate", rdate);
    
    TextField description =new TextField("", "entrer description");
    description.setUIID("TextFieldBlack");
    addStringValue("Description", description);
    
    TextField image =new TextField("", "entrer image");
    image.setUIID("TextFieldBlack");
    addStringValue("Image", image);
    
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
    
    

    
    
    Theatre t = new Theatre(String.valueOf(name.getText()).toString(),String.valueOf(Tactor.getSelectedItem()).toString(),String.valueOf(genre.getText()).toString(),date1,String.valueOf(image.getText()).toString(),String.valueOf(trailer.getText()).toString(),String.valueOf(description.getText()).toString(),String.valueOf(poster.getText()).toString());
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
}

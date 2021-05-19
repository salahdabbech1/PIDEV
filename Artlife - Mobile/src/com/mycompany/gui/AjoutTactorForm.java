/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.gui;
import com.codename1.components.InfiniteProgress;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.ui.Button;
import com.codename1.ui.Component;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;

import static com.codename1.ui.Display.getInstance;
import com.codename1.ui.Toolbar;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.spinner.Picker;
import com.codename1.ui.util.Resources;
import com.mycompany.entities.Tactor;
import com.mycompany.services.ServiceTactor;

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
    
    TextField image =new TextField("", "entrer image");
    image.setUIID("TextFieldBlack");
    addStringValue("Image", image);
    
    Button buttonAjt=new Button("Ajouter Tactor");
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
    
    String d="";
    Date date1=new SimpleDateFormat("yyyy-MM-dd").parse(d);
    
    SimpleDateFormat format = new SimpleDateFormat("yyyy-MM-dd");

    
    
    Tactor t = new Tactor(String.valueOf(name.getText()).toString(),datePicker.getDate(),String.valueOf(description.getText()).toString(),String.valueOf(image.getText()).toString());
    System.out.println("data tactor = "+t);
    ServiceTactor.getInstance().addTactor(t);
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

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.gui;
import com.codename1.components.FloatingHint;
import com.codename1.components.InfiniteProgress;
import com.codename1.components.ScaleImageLabel;
import com.codename1.components.SpanLabel;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.ui.Button;
import com.codename1.ui.ButtonGroup;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.Form;
import com.codename1.ui.Graphics;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.RadioButton;
import com.codename1.ui.Tabs;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.spinner.Picker;
import com.codename1.ui.util.Resources;
import com.mycompany.entities.Factor;
import com.mycompany.entities.Movie;
import com.mycompany.entities.Musician;
import com.mycompany.services.ServiceFactor;
import com.mycompany.services.ServiceMovie;
import com.mycompany.services.ServiceMusician;
import java.util.Date;

/**
 *
 * @author HP
 */
public class ModifierFactorForm extends BaseForm {
    Form current;
    public ModifierFactorForm(Resources res,Factor m){
        System.out.println(m.toString());
         Toolbar tb=new Toolbar(true);
    current=this;
        setToolbar(tb);
    getTitleArea().setUIID("Container");
    setTitle("ajouter musician");
    getContentPane().setScrollVisible(false);
    super.addSideMenu(res);
    
    TextField name = new TextField((m.getName()), "name", 20, TextField.ANY);
TextArea description = new TextField((m.getDescription()), "description", 20, TextField.ANY);
TextField image = new TextField((m.getImage()), "Image", 20, TextField.ANY);
TextField imageb = new TextField((m.getImageb()), "imageb", 20, TextField.ANY);
       Picker dateR=new Picker();
       dateR.setUIID("NewsTopLine");
       imageb.setUIID("NewsTopLine");
       name.setUIID("NewsTopLine");
       description.setUIID("NewsTopLine");
       image.setUIID("NewsTopLine");
       Picker p = new Picker();
       String[] characters = { "Action", "Sci-Fi", "Horror", "Drama","Cartoon","War"};
       p.setStrings(characters);
       p.setSelectedString(characters[0]);
       p.setUIID("NewsTopLine");

name.setSingleLineTextArea(true);
description.setSingleLineTextArea(true);
image.setSingleLineTextArea(true);
    

    Button btnNodifier = new Button("Modidier");

        btnNodifier.setUIID("Button");
    //Eventonctiek botter
    btnNodifier.addPointerPressedListener(l -> {
    m.setName(name.getText());
    m.setDescription(description.getText());
    m.setImage(image.getText());
    m.setImageb(imageb.getText());
    m.setBorn(dateR.getDate());
    
    
     try{
           if(ServiceFactor.getInstance().modifierFactor(m)){
               System.out.println("edited!");

         }
     } 
         catch (Exception e)
               {
                    System.out.println("NON");
               }
     new ListFactorForm(res).show();

           });
    Button btnAnnuler =new Button ("Annuler");
    btnAnnuler.addActionListener(c -> {
    new ListFactorForm(res).show();
    });


    Label a = new Label("");
    Label b = new Label("");
    Label c = new Label("");
    Label d = new Label("");
    Label e = new Label ();
     Label f = new Label ();
      Label g = new Label ();
       Label h= new Label ();

    Container content = BoxLayout.encloseY(
    e,a,new FloatingHint (name),
            createLineSeparator(),(dateR),
            createLineSeparator(),(p),
            createLineSeparator(),new FloatingHint (description),
            createLineSeparator(),new FloatingHint (image),
            createLineSeparator(),new FloatingHint (imageb),
            createLineSeparator(),btnNodifier,btnAnnuler
    );

    add(content);
    show();



}
}

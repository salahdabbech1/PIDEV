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
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;
import com.mycompany.entities.Musician;
import com.mycompany.services.ServiceMusician;
import java.util.Date;

/**
 *
 * @author HP
 */
public class ModifierMusicianForm extends BaseForm {
    Form current;
    public ModifierMusicianForm(Resources res,Musician m){
         Toolbar tb=new Toolbar(true);
    current=this;
        setToolbar(tb);
    getTitleArea().setUIID("Container");
    setTitle("ajouter musician");
    getContentPane().setScrollVisible(false);
    super.addSideMenu(res);
    
    TextField name = new TextField((m.getName()), "Objec", 20, TextField.ANY);
    TextField prenom = new TextField((m.getPrenom()), "Objec", 20, TextField.ANY);
TextField description = new TextField((m.getDescription()), "Objec", 20, TextField.ANY);
TextField image = new TextField((m.getImage()), "Image", 20, TextField.ANY);


name.setUIID("NewsTopLine");
prenom.setUIID("NewsTopLine");
description.setUIID("NewsTopLine");
image.setUIID("NewsTopLine");

name.setSingleLineTextArea(true);
prenom.setSingleLineTextArea(true);
description.setSingleLineTextArea(true);
image.setSingleLineTextArea(true);

Button btnNodifier = new Button("Modidier");

    btnNodifier.setUIID("Button");
//Eventonctiek botter
btnNodifier.addPointerPressedListener(l -> {
m.setName(name.getText());
m.setPrenom(prenom.getText());
m.setDescription(description.getText());
m.setImage(image.getText());
 try{
       if(ServiceMusician.getInstance().modifierMusician(m)){
new ListMusicianForm(res).show();
     }
 } 
     catch (Exception e)
           {
                System.out.println("NON");
           }
   
       });
Button btnAnnuler =new Button ("Annuler");
btnAnnuler.addActionListener(c -> {
new ListMusicianForm(res).show();
});


Label a = new Label("");
Label b = new Label("");
Label c = new Label("");
Label d = new Label("");
Label e = new Label ();

Container content = BoxLayout.encloseY(
e,a,new FloatingHint (name),
        createLineSeparator(),new FloatingHint (prenom),
        createLineSeparator(),new FloatingHint (description),
        createLineSeparator(),new FloatingHint (image),
        createLineSeparator(),btnNodifier,btnAnnuler
);

add(content);
show();



}
}

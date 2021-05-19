/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.gui;

import com.codename1.components.FloatingHint;
import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import com.mycompany.entities.cinema;
import com.mycompany.services.Servicecinema;

/**
 *
 * @author HP
 */
public class ModifierCinemaForm extends BaseForm{
     Form current;
    public ModifierCinemaForm(Resources res,cinema m){
         Toolbar tb=new Toolbar(true);
    current=this;
        setToolbar(tb);
    getTitleArea().setUIID("Container");
    setTitle("ajouter musician");
    getContentPane().setScrollVisible(false);
    super.addSideMenu(res);
    
    TextField name = new TextField((m.getName()), "Name", 20, TextField.ANY);
     TextField idmusician = new TextField((String.valueOf( m.getNb_salle())), "nombres des salles", 20, TextField.ANY);
    TextField musics = new TextField((m.getAdresse()), "Adresse", 20, TextField.ANY);
TextField trailer = new TextField((m.getDesc()), "Description", 20, TextField.ANY);
TextField image = new TextField((m.getImg()), "Image link", 20, TextField.ANY);


name.setUIID("NewsTopLine");
idmusician.setUIID("NewsTopLine");
musics.setUIID("NewsTopLine");
trailer.setUIID("NewsTopLine");
image.setUIID("NewsTopLine");

name.setSingleLineTextArea(true);
idmusician.setSingleLineTextArea(true);
musics.setSingleLineTextArea(true);
trailer.setSingleLineTextArea(true);
image.setSingleLineTextArea(true);

Button btnNodifier = new Button("Modifier");

    btnNodifier.setUIID("Button");
//Eventonctiek botter
btnNodifier.addPointerPressedListener(l -> {
m.setName(name.getText());
//m.setNb_salle(idmusician.getText());
m.setAdresse(musics.getText());
m.setDesc(trailer.getText());
m.setImg(image.getText());
m.setRate(m.getRate());
 try{
       if(Servicecinema.getInstance().modifiercinema(m)){
           System.out.println("edited!");

     }
 } 
     catch (Exception e)
           {
                System.out.println("NON");
           }
 new ListCinemaForm(res).show();
   
       });
Button btnAnnuler =new Button ("Annuler");
btnAnnuler.addActionListener(c -> {
new ListCinemaForm(res).show();
});


Label a = new Label("");
Label b = new Label("");
Label c = new Label("");
Label d = new Label("");
Label e = new Label ();

Container content = BoxLayout.encloseY(
e,a,new FloatingHint (name),
        createLineSeparator(),new FloatingHint (idmusician),
        createLineSeparator(),new FloatingHint (musics),
        createLineSeparator(),new FloatingHint (trailer),
        createLineSeparator(),new FloatingHint (image),
        createLineSeparator(),btnNodifier,btnAnnuler
);

add(content);
show();



}
    
}

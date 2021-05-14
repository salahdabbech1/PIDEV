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
import com.mycompany.entities.Concert;
import com.mycompany.entities.Musician;
import com.mycompany.services.ServiceConcert;

/**
 *
 * @author HP
 */
public class ModifierConcertForm extends BaseForm{
     Form current;
    public ModifierConcertForm(Resources res,Concert m){
         Toolbar tb=new Toolbar(true);
    current=this;
        setToolbar(tb);
    getTitleArea().setUIID("Container");
    setTitle("ajouter musician");
    getContentPane().setScrollVisible(false);
    super.addSideMenu(res);
    
    TextField name = new TextField((m.getName()), "Objec", 20, TextField.ANY);
     TextField idmusician = new TextField((m.getIdmusician()), "Objec", 20, TextField.ANY);
    TextField musics = new TextField((m.getMusics()), "Objec", 20, TextField.ANY);
TextField trailer = new TextField((m.getTrailer()), "Objec", 20, TextField.ANY);
TextField image = new TextField((m.getImage()), "Image", 20, TextField.ANY);


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

Button btnNodifier = new Button("Modidier");

    btnNodifier.setUIID("Button");
//Eventonctiek botter
btnNodifier.addPointerPressedListener(l -> {
m.setName(name.getText());
m.setIdmusician(idmusician.getText());
m.setMusics(musics.getText());
m.setTrailer(trailer.getText());
m.setImage(image.getText());
 try{
       if(ServiceConcert.getInstance().modifierConcert(m)){
           System.out.println("edited!");

     }
 } 
     catch (Exception e)
           {
                System.out.println("NON");
           }
 new ListConcertForm(res).show();
   
       });
Button btnAnnuler =new Button ("Annuler");
btnAnnuler.addActionListener(c -> {
new ListConcertForm(res).show();
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

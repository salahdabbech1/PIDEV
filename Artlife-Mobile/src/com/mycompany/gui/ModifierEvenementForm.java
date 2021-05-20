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
import com.mycompany.entities.Evenement;
import com.mycompany.entities.Musician;
import com.mycompany.services.ServiceEvenement;
import com.mycompany.services.ServiceMusician;

/**
 *
 * @author PersoPc
 */
public class ModifierEvenementForm extends BaseForm {
    Form current;
    public ModifierEvenementForm(Resources res,Evenement m){
         Toolbar tb=new Toolbar(true);
    current=this;
        setToolbar(tb);
    getTitleArea().setUIID("Container");
    setTitle("ajouter evenement");
    getContentPane().setScrollVisible(false);
    super.addSideMenu(res);
    
    TextField Name = new TextField((m.getName()), "Objec", 20, TextField.ANY);
    TextField idContent = new TextField((m.getIdContent()), "Objec", 20, TextField.ANY);
TextField idCinema = new TextField((m.getIdCinema()), "Objec", 20, TextField.ANY);
TextField Type = new TextField((m.getType()), "Objec", 20, TextField.ANY);
TextField Adresse = new TextField((m.getAdresse()), "Objec", 20, TextField.ANY);
TextField image = new TextField((m.getImage()), "Image", 20, TextField.ANY);
TextField image_qr = new TextField((m.getImage_qr()), "Image", 20, TextField.ANY);


Name.setUIID("NewsTopLine");
idContent.setUIID("NewsTopLine");
idCinema.setUIID("NewsTopLine");
Type.setUIID("NewsTopLine");
Adresse.setUIID("NewsTopLine");
image.setUIID("NewsTopLine");
image_qr.setUIID("NewsTopLine");

Name.setSingleLineTextArea(true);
idContent.setSingleLineTextArea(true);
idCinema.setSingleLineTextArea(true);
Type.setSingleLineTextArea(true);
Adresse.setSingleLineTextArea(true);
image.setSingleLineTextArea(true);
image_qr.setSingleLineTextArea(true);

Button btnNodifier = new Button("Modidier");

    btnNodifier.setUIID("Button");
//Eventonctiek botter
btnNodifier.addPointerPressedListener(l -> {
m.setName(Name.getText());
m.setIdContent(idContent.getText());
m.setType(Type.getText());
m.setAdresse(Type.getText());
m.setImage(image.getText());
 try{
       if(ServiceEvenement.getInstance().modifierEvenement(m)){
new ListEvenementForm(res).show();
     }
 } 
     catch (Exception e)
           {
                System.out.println("NON");
                new ListEvenementForm(res).show();
           }
   
       });
Button btnAnnuler =new Button ("Annuler");
btnAnnuler.addActionListener(c -> {
new ListEvenementForm(res).show();
});


Label a = new Label("");
Label b = new Label("");
Label c = new Label("");
Label d = new Label("");
Label e = new Label("");

Label f = new Label ();

Container content = BoxLayout.encloseY(
f,a,new FloatingHint (Name),
        createLineSeparator(),new FloatingHint (idContent),
        createLineSeparator(),new FloatingHint (idCinema),
        createLineSeparator(),new FloatingHint (Type),
        createLineSeparator(),new FloatingHint (Adresse),
        createLineSeparator(),new FloatingHint (image),
        createLineSeparator(),new FloatingHint (image_qr),
        createLineSeparator(),btnNodifier,btnAnnuler
);

add(content);
show();



}
}

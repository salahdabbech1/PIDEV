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
import com.mycompany.entities.Reclamation;
import com.mycompany.services.ServiceReclamation;

/**
 *
 * @author PersoPc
 */
public class ModifierReclamationForm extends BaseForm {
    Form current;
    public ModifierReclamationForm(Resources res,Reclamation m){
         Toolbar tb=new Toolbar(true);
    current=this;
        setToolbar(tb);
    getTitleArea().setUIID("Container");
    setTitle("ajouter Reclamation");
    getContentPane().setScrollVisible(false);
    super.addSideMenu(res);
    
    TextField Titre = new TextField((m.getTitre()), "Objec", 20, TextField.ANY);
    TextField Description = new TextField((m.getDescription()), "Objec", 20, TextField.ANY);
  //  TextField datere = new TextField((m.getDatere().toString()), "Objec", 20, TextField.ANY);
    TextField Traite = new TextField((m.getTraiter()), "Objec", 20, TextField.ANY);


Titre.setUIID("NewsTopLine");
Description.setUIID("NewsTopLine");
//datere.setUIID("NewsTopLine");
Traite.setUIID("NewsTopLine");

Titre.setSingleLineTextArea(true);
Description.setSingleLineTextArea(true);
//datere.setSingleLineTextArea(true);
Traite.setSingleLineTextArea(true);

Button btnNodifier = new Button("Modifier");

    btnNodifier.setUIID("Button");
//Eventonctiek botter
btnNodifier.addPointerPressedListener(l -> {
m.setTitre(Titre.getText());
m.setDescription(Description.getText());
m.setTraiter(Traite.getText());
 try{
     ServiceReclamation sr = new ServiceReclamation();
     sr.modifierReclamation(m);
             
  
new ListReclamationForm(res).show();
     
 } 
     catch (Exception e)
           {
                System.out.println("NON");
           }
   
       });
Button btnAnnuler =new Button ("Annuler");
btnAnnuler.addActionListener(c -> {
new ListReclamationForm(res).show();
});


Label a = new Label("");
Label b = new Label("");
Label c = new Label("");
Label d = new Label("");
Label e = new Label ();

Container content = BoxLayout.encloseY(
e,a,new FloatingHint (Titre),
        createLineSeparator(),new FloatingHint (Description),
      // createLineSeparator(),new FloatingHint (datere),
        createLineSeparator(),new FloatingHint (Traite),
        createLineSeparator(),btnNodifier,btnAnnuler
);

add(content);
show();



}


}

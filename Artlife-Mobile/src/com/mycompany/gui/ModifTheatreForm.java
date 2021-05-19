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
import com.codename1.ui.ComboBox;
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
import com.codename1.ui.spinner.Picker;
import com.codename1.ui.util.Resources;
import com.mycompany.entities.Tactor;

import com.mycompany.entities.Theatre;
import com.mycompany.services.ServiceTactor;
import com.mycompany.services.ServiceTheatre;

import java.util.Date;

/**
 *
 * @author HP
 */
public class ModifTheatreForm extends BaseForm {
    Form current;
    public ModifTheatreForm(Resources res,Theatre th){
                Toolbar tb=new Toolbar(true);
           current=this;
               setToolbar(tb);
           getTitleArea().setUIID("Container");
           setTitle("modifier actor");
           getContentPane().setScrollVisible(false);
           super.addSideMenu(res);

                TextField name = new TextField((th.getName()), "Name", 20, TextField.ANY);
             
                 Picker datePicker = new Picker();
                 datePicker.setDate(th.getRdate());
                 String datestring=(new SimpleDateFormat("yyyy-MM-dd")).format(datePicker.getDate());
                TextField description = new TextField((th.getDescription()), "Description", 20, TextField.ANY);
                TextField image = new TextField((th.getImage()), "Image", 20, TextField.ANY);
                TextField trailer = new TextField((th.getTrailer()), "Trailer", 20, TextField.ANY);
                TextField poster = new TextField((th.getPoster()), "Poster", 20, TextField.ANY);
                 
    Picker genre = new Picker();

genre.setStrings("Reality", "Comedy", "Historical");
    
      genre.setUIID("TextFieldBlack");
       genre.setUIID("TextFieldBlack");
   genre.setSelectedString(th.getGenre());
                 ComboBox Tactor = new ComboBox();
        for (Tactor c : new ServiceTactor().AffichageTactor()) {
                Tactor.addItem(c.getName());
            }
    
                Tactor.setUIID("NewsTopLine");
                name.setUIID("NewsTopLine");
                datePicker.setUIID("NewsTopLine");
                description.setUIID("NewsTopLine");
                image.setUIID("NewsTopLine");
                trailer.setUIID("NewsTopLine");
                genre.setUIID("NewsTopLine");
                poster.setUIID("NewsTopLine");
                
                
                name.setSingleLineTextArea(true);
                datePicker.setType(Display.PICKER_TYPE_DATE);
                
                trailer.setSingleLineTextArea(true);
                poster.setSingleLineTextArea(true);
                //genre.setSingleLineTextArea(true);
                
                description.setSingleLineTextArea(true);
                image.setSingleLineTextArea(true);

                Button btnNodifier = new Button("Modifier");

                    btnNodifier.setUIID("Button");
                //Eventonctiek botter
                btnNodifier.addPointerPressedListener(l -> {
                th.setName(name.getText());
                  
                th.setRdate(datePicker.getDate());
                th.setGenre(genre.getText());
                th.setTrailer(trailer.getText());
                th.setPoster(poster.getText());
                th.setDescription(description.getText());
                th.setImage(image.getText());
                System.out.println(datePicker.getDate());
                Dialog.show("felicitation", "le theatre a ete", "OK", null);
                
                
                try{
                       if(ServiceTheatre.getInstance().modifierTheatre(th)){
                            System.out.println("oui");
               
                     }
                 } 
                     catch (Exception e)
                           {
                                System.out.println("NON");
                           }
                 new ListTheatreForm(res).show();

                       });
                 
                Button btnAnnuler =new Button ("Annuler");
                btnAnnuler.addActionListener(c -> {
                new ListTheatreForm(res).show();
                });


                Label a = new Label("");
                
                Label e = new Label ();

                Container content = BoxLayout.encloseY(
                e,a,new FloatingHint (name),
                        
                        createLineSeparator(),datePicker,
                        createLineSeparator(),(genre),
                        createLineSeparator(),new FloatingHint (image),
                        createLineSeparator(),new FloatingHint (trailer),
                        createLineSeparator(),new FloatingHint (description),
                        createLineSeparator(),new FloatingHint (poster),
                        createLineSeparator(),(Tactor),
                        createLineSeparator(),btnNodifier,btnAnnuler
                );

                add(content);
                show();



                }

  
}

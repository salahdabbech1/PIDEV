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
import com.codename1.ui.spinner.Picker;
import com.codename1.ui.util.Resources;
import com.mycompany.entities.Tactor;
import com.mycompany.services.ServiceTactor;
import java.util.Date;

/**
 *
 * @author HP
 */
public class ModifTactorForm extends BaseForm {
    Form current;
    public ModifTactorForm(Resources res,Tactor t){
                Toolbar tb=new Toolbar(true);
           current=this;
               setToolbar(tb);
           getTitleArea().setUIID("Container");
           setTitle("modifier actor");
           getContentPane().setScrollVisible(false);
           super.addSideMenu(res);

                TextField name = new TextField((t.getName()), "Name", 20, TextField.ANY);
             
                 Picker datePicker = new Picker();
                 datePicker.setDate(t.getBorn());
                 String datestring=(new SimpleDateFormat("yyyy-MM-dd")).format(datePicker.getDate());
                TextField description = new TextField((t.getDescription()), "Description", 20, TextField.ANY);
                TextField image = new TextField((t.getImage()), "Image", 20, TextField.ANY);


                name.setUIID("NewsTopLine");
                datePicker.setUIID("NewsTopLine");
                description.setUIID("NewsTopLine");
                image.setUIID("NewsTopLine");
                
                name.setSingleLineTextArea(true);
                datePicker.setType(Display.PICKER_TYPE_DATE);
 
                description.setSingleLineTextArea(true);
                image.setSingleLineTextArea(true);

                Button btnNodifier = new Button("Modifier");

                    btnNodifier.setUIID("Button");
                //Eventonctiek botter
                btnNodifier.addPointerPressedListener(l -> {
                t.setName(name.getText());
                  
                t.setBorn(datePicker.getDate());
              
                System.out.println(datePicker.getDate());
                Dialog.show("felicitation", "l'actor a ete", "OK", null);
                t.setDescription(description.getText());
                t.setImage(image.getText());
                
                try{
                       if(ServiceTactor.getInstance().modifierTactor(t)){
                           System.out.println("oui");
                
                     }
                 } 
                     catch (Exception e)
                           {
                                System.out.println("NON");
                           }
                           new ListTactorForm(res).show();
                       });
                 
                Button btnAnnuler =new Button ("Annuler");
                btnAnnuler.addActionListener(c -> {
                new ListTactorForm(res).show();
                });


                Label a = new Label("");
                
                Label e = new Label ();

                Container content = BoxLayout.encloseY(
                e,a,new FloatingHint (name),
                        
                        createLineSeparator(),datePicker,
                        createLineSeparator(),new FloatingHint (description),
                        createLineSeparator(),new FloatingHint (image),
                        createLineSeparator(),btnNodifier,btnAnnuler
                );

                add(content);
                show();



                }

  
}

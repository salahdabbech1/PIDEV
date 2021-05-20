/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.gui;

import com.codename1.components.ScaleImageLabel;
import com.codename1.ui.Component;
import com.codename1.ui.Display;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.Toolbar;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.layouts.Layout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;

/**
 *
 * @author HP
 */
public class BaseFront extends Form {
      public BaseFront (){
               
           }   
           public BaseFront(Layout contentPaneLayout) {
        super(contentPaneLayout);
    }

    public BaseFront(String title, Layout contentPaneLayout) {
        super(title, contentPaneLayout);
    }
    
    
    public Component createLineSeparator() {
        Label separator = new Label("", "WhiteSeparator");
        separator.setShowEvenIfBlank(true);
        return separator;
    }
    
    public Component createLineSeparator(int color) {
        Label separator = new Label("", "WhiteSeparator");
        separator.getUnselectedStyle().setBgColor(color);
        separator.getUnselectedStyle().setBgTransparency(255);
        separator.setShowEvenIfBlank(true);
        return separator;
    }

    protected void addSideMenu(Resources res) {
        Toolbar tb = getToolbar();
     //   Image img = res.getImage("ev.jpg");
        
       
        //KARIM RECUPERI EL TASWIRA 
        //KARIM LEZEMHA BEL SESSIONNNNNNNNNNN
        tb.addComponentToSideMenu(LayeredLayout.encloseIn(
               
                FlowLayout.encloseCenterBottom(
                        new Label(res.getImage(SessionManager.getImage()), "PictureWhiteBackgrond"))
        ));
        System.err.println(SessionManager.getImage());
        // ba7dha el bienvenue tzid u.getUser or somth haja besh trecuperi biha
        
        tb.addComponentToSideMenu(LayeredLayout.encloseIn(
                FlowLayout.encloseCenterBottom(new Label("Bienvenue! "))
        ));
        tb.addMaterialCommandToSideMenu("Home", FontImage.MATERIAL_UPDATE, e -> new HomeFront(res).show());
                tb.addMaterialCommandToSideMenu("Tickets", FontImage.MATERIAL_EXIT_TO_APP, e -> new MyTicketForm(res).show());
        tb.addMaterialCommandToSideMenu("Profile", FontImage.MATERIAL_SETTINGS, e -> new ProfileForm(res).show());
        tb.addMaterialCommandToSideMenu("Logout", FontImage.MATERIAL_EXIT_TO_APP, e -> new WalkthruForm(res).show());


        
        
    }
    
}

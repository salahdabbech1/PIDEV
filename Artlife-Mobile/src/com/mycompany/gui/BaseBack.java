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
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.layouts.Layout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;

/**
 *
 * @author HP
 */
public class BaseBack extends Form {
     public BaseBack (){
               
           }   
           public BaseBack(Layout contentPaneLayout) {
        super(contentPaneLayout);
    }

    public BaseBack(String title, Layout contentPaneLayout) {
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

//    protected void addSideMenu(Resources res) {
//        Toolbar tb = getToolbar();
//        Image img = res.getImage("ev.jpg");
//        if(img.getHeight() > Display.getInstance().getDisplayHeight() / 3) {
//            img = img.scaledHeight(Display.getInstance().getDisplayHeight() / 3);
//        }
//        ScaleImageLabel sl = new ScaleImageLabel(img);
//        sl.setUIID("BottomPad");
//        sl.setBackgroundType(Style.BACKGROUND_IMAGE_SCALED_FILL);
//        
//        //KARIM RECUPERI EL TASWIRA
//        tb.addComponentToSideMenu(LayeredLayout.encloseIn(
//                sl,
//                FlowLayout.encloseCenterBottom(
//                        new Label(res.getImage("artlife.png"), "PictureWhiteBackgrond"))
//        ));
//              tb.addComponentToSideMenu(LayeredLayout.encloseIn(
//                FlowLayout.encloseCenterBottom(new Label("Bienvenue Artlife! "))
//        ));
//        tb.addMaterialCommandToSideMenu("Films", FontImage.MATERIAL_MOVIE, e -> new NewsfeedForm(res).show());
//        tb.addMaterialCommandToSideMenu("Actors", FontImage.MATERIAL_PERSON, e -> new ProfileForm(res).show());
//        tb.addMaterialCommandToSideMenu("Piece Actor", FontImage.MATERIAL_PERSON, e -> new WalkthruForm(res).show());
//        tb.addMaterialCommandToSideMenu("Theatres", FontImage.MATERIAL_THEATER_COMEDY, e -> new WalkthruForm(res).show());
//        tb.addMaterialCommandToSideMenu("Events", FontImage.MATERIAL_EVENT, e -> new WalkthruForm(res).show());
//        tb.addMaterialCommandToSideMenu("Reclamations", FontImage.MATERIAL_MESSAGE, e -> new WalkthruForm(res).show());
//        tb.addMaterialCommandToSideMenu("Concerts", FontImage.MATERIAL_EVENT_AVAILABLE, e -> new AjoutConcertForm(res).show());
//        tb.addMaterialCommandToSideMenu("Musiciens", FontImage.MATERIAL_MUSIC_NOTE, e -> new AjoutMusicianForm(res).show());
//        tb.addMaterialCommandToSideMenu("Cinemas", FontImage.MATERIAL_MOVIE, e -> new WalkthruForm(res).show());
//        tb.addMaterialCommandToSideMenu("Logout", FontImage.MATERIAL_EXIT_TO_APP, e -> new WalkthruForm(res).show());
//    }
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.gui;
import com.codename1.components.ImageViewer;
import com.codename1.ui.Button;
import com.codename1.ui.Component;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.URLImage;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.util.Resources;
import com.mycompany.entities.Evenement;
import com.mycompany.entities.Musician;
import com.mycompany.services.ServiceEvenement;
import java.io.IOException;
import java.util.ArrayList;

/**
 *
 * @author PersoPc
 */
public class DetailsEvenements extends BaseFront{
       Form current;
           private EncodedImage placeHolder;
private void addStringValue(String s, Component v) {
        add(BorderLayout.west(new Label(s,"PaddedLabel"))
        .add(BorderLayout.CENTER,v));
        add(createLineSeparator(0xeeeeee));}
        
    public DetailsEvenements(Resources res,Evenement c)
    {Button ret=new Button("Return");
    addStringValue("", ret);
    
    ret.addPointerPressedListener(l->{

   new IndexEvenement(res).show();

});
           Toolbar tb=new Toolbar(true);
    current=this;
        setToolbar(tb);
    getTitleArea().setUIID("Container");
    setTitle("details concert");
    getContentPane().setScrollVisible(false);
    super.addSideMenu(res);
      
    
    ImageViewer imavu;
        try {
        imavu = new ImageViewer(getImageFromServerThenya(c.getImage()));
        }
        catch(Exception e) {
        System.out.println(c.getImage());
        imavu = new ImageViewer(res.getImage("b.jpg"));
        }
    Label name = new Label("Nom du Evenement : "+c.getName());
     Label idmusician = new Label("Type:"+c.getType());
      Label musics = new Label("idContent:"+c.getIdContent());
       Label trailer = new Label("Adresse:"+c.getAdresse());
       Label espace = new Label("                   ");
       Label espace1 = new Label("                   ");
        Label espace2 = new Label("                   ");
         Label espace3= new Label("                   ");
            Label espace4= new Label("                   ");
             Label espace5= new Label("                   ");
                 Button btnAnnuler =new Button ("Return");
     
                btnAnnuler.addActionListener(a -> {
                new IndexEvenement(res).show();
                });

       addAll(name,espace,idmusician,espace1,espace2,musics,espace3,espace4,trailer,imavu,btnAnnuler);
    
        
    }
      private Image getImageFromServer(String image) {
        try {
            placeHolder = EncodedImage.create("/s.png");
        } catch (IOException ex) {
            System.out.println(ex.getMessage());
        }
        String url = "http://localhost/"+image;
        Image img = URLImage.createToStorage(placeHolder, url, url, URLImage.RESIZE_SCALE);

        return img;
    }
      
      private Image getImageFromServerThenya(String image) {
        try {
            placeHolder = EncodedImage.create("/b.jpg");
        } catch (IOException ex) {
            System.out.println(ex.getMessage());
        }
        String url = "http://localhost/"+image;
        Image img = URLImage.createToStorage(placeHolder, url, url, URLImage.RESIZE_SCALE);

        return img;
    }
    
}

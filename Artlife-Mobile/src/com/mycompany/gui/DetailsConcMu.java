/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.gui;

import com.codename1.components.ImageViewer;
import com.codename1.ui.BrowserComponent;
import com.codename1.ui.Button;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.Toolbar;
import com.codename1.ui.URLImage;
import com.codename1.ui.layouts.BorderLayout;
import static com.codename1.ui.layouts.BorderLayout.CENTER_BEHAVIOR_CENTER;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import com.mycompany.entities.Concert;
import com.mycompany.entities.Musician;
import com.mycompany.services.ServiceMusician;
import java.io.IOException;
import java.util.ArrayList;

/**
 *
 * @author HP
 */
public class DetailsConcMu extends BaseFront{
       Form current;
           private EncodedImage placeHolder;
private void addStringValue(String s, Component v) {
        add(BorderLayout.west(new Label(s,"PaddedLabel"))
        .add(BorderLayout.CENTER,v));
        add(createLineSeparator(0xeeeeee));}
        
    public DetailsConcMu(Resources res,Concert c)
    {
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
    Label name = new Label("Nom: "+c.getName());
     Label idmusician = new Label("Msician:"+c.getIdmusician());
      Label musics = new Label("Musics:"+c.getMusics());
    
       //Label trailer = new Label("Trailer:"+c.getTrailer());
       Label espace = new Label("                   ");
        Label espaced = new Label("                   ");
       Label espace1 = new Label("                   ");
        Label espace2 = new Label("                   ");
         Label espace3= new Label("                   ");
            Label espace4= new Label("                   ");
             Label espace5= new Label("                   ");
       
          
 
       addAll(espace,idmusician,musics,espace3,espace4,imavu);
     
       //Musician mu = new Musician();
       //mu =new ServiceMusician().getInstance().DetailMusician(c.getIdmusician(),mu);
ArrayList<Musician> list = ServiceMusician.getInstance().Affich(c.getIdmusician());
       
        for (Musician mu : list) {
            ImageViewer imavu1 = new ImageViewer(getImageFromServer(mu.getImage()));
        try {
        imavu = new ImageViewer(getImageFromServer(mu.getImage()));
        }
        catch(Exception e) {
        System.out.println(mu.getImage());
        imavu = new ImageViewer(res.getImage("s.png"));
        }
            
            Label nameMu = new Label("Nom du musician : "+mu.getName());
             Label descr = new Label("Desc du musician : "+mu.getDescription());
              Label prenom = new Label("prenom du musician : "+mu.getPrenom());
                  
             
            addAll(nameMu,descr,prenom,imavu1);
        }
           Container f=new Container(BoxLayout.y());
      Button btnt =new Button ("trailer");
  btnt.addActionListener(e -> new trailerConcert(current,c).show());
        Button btnAnnuler =new Button ("Return");
     
                btnAnnuler.addActionListener(a -> {
                new IndexConcert(res).show();
                });
    
  f.addAll(btnAnnuler,btnt);
       add(f);
        
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

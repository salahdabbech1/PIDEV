/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.gui;

import com.codename1.components.ImageViewer;
import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Component;
import static com.codename1.ui.Component.LEFT;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.Font;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.Slider;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.URLImage;
import com.codename1.ui.geom.Dimension;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.plaf.Border;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;
import com.mycompany.entities.cinema;
import com.mycompany.services.Servicecinema;
import java.io.IOException;
import java.util.ArrayList;

/**
 *
 * @author HP
 */

public class DetailsCinema extends BaseForm{
       Form current;
           private EncodedImage placeHolder;
           static int nb_rate;
private void addStringValue(String s, Component v) {
        add(BorderLayout.west(new Label(s,"PaddedLabel"))
        .add(BorderLayout.CENTER,v));
        add(createLineSeparator(0xeeeeee));}
private Slider createStarRankSlider() {
    Slider starRank = new Slider();
    starRank.setEditable(true);
    starRank.setMinValue(0);
    starRank.setMaxValue(10);
    Font fnt = Font.createTrueTypeFont("native:MainBold", "native:MainBold").
            derive(Display.getInstance().convertToPixels(5, true), Font.STYLE_PLAIN);
    Style s = new Style(0xffff33, 0, fnt, (byte)0);
    Image fullStar = FontImage.createMaterial(FontImage.MATERIAL_STAR, s).toImage();
    s.setOpacity(100);
    s.setFgColor(0);
    Image emptyStar = FontImage.createMaterial(FontImage.MATERIAL_STAR, s).toImage();
    initStarRankStyle(starRank.getSliderEmptySelectedStyle(), emptyStar);
    initStarRankStyle(starRank.getSliderEmptyUnselectedStyle(), emptyStar);
    initStarRankStyle(starRank.getSliderFullSelectedStyle(), fullStar);
    initStarRankStyle(starRank.getSliderFullUnselectedStyle(), fullStar);
    starRank.setPreferredSize(new Dimension(fullStar.getWidth() * 5, fullStar.getHeight()));
    
    return starRank;
    
    
}
public void showForm() {
  Form hi = new Form("Star Slider", new BoxLayout(BoxLayout.Y_AXIS));
  hi.add(FlowLayout.encloseCenter(createStarRankSlider()));
  hi.show();
  
 
 
}
private void initStarRankStyle(Style s, Image star) {
    s.setBackgroundType(Style.BACKGROUND_IMAGE_TILE_BOTH);
    s.setBorder(Border.createEmpty());
    s.setBgImage(star);
    s.setBgTransparency(0);
}       

public DetailsCinema(Resources res,cinema c)
    {Button ret=new Button("Return");
    addStringValue("", ret);
    
    ret.addPointerPressedListener(l->{

   new IndexCinema(res).show();

});
    Slider star= createStarRankSlider();
    star.setProgress((int) c.getRate());       
    Toolbar tb=new Toolbar(true);
    current=this;
        setToolbar(tb);
    getTitleArea().setUIID("Container");
    setTitle("details Cinema");
    getContentPane().setScrollVisible(false);
    super.addSideMenu(res);
        System.out.println("nb-rate="+nb_rate);
    Label name = new Label("Nom du cinema: "+c.getName());
     Label idmusician = new Label("nombres salles:"+c.getNb_salle());
      Label musics = new Label("adresse:"+c.getAdresse());
       Label trailer = new Label("description:"+c.getDesc());
       Label espace = new Label("                   ");
       Label espace1 = new Label("                   ");
        Label espace2 = new Label("                   ");
         Label espace3= new Label("                   ");
            Label espace4= new Label("                   ");
             Label espace5= new Label("                   ");
             Label espace6= new Label("                   ");
             Label espace7= new Label("                   ");
    Label lrate = new Label("Rate");
        lrate.setTextPosition(LEFT);
        lrate.addPointerPressedListener(l->{
            // algorithme calcul rating
            float nb_etoile = c.getRate();
            nb_etoile=nb_etoile+(float)star.getProgress()/2;           
            c.setRate(nb_etoile);
            Dialog dig=new Dialog("lrate");
            if(dig.show("rate","are you sure ? ","No","Yes"))
    {
        dig.dispose();
    }
    else
     {
        dig.dispose();
   try{
       if(Servicecinema.getInstance().modifiercinema(c))
    {
        System.out.println("success");
       
    }
    }
    catch (Exception e)
           {
                System.out.println("NON");
           }
   
        star.setProgress((int) c.getRate()); 
   }

});
       
       addAll(name,espace,idmusician,espace1,espace2,musics,espace3,espace4,trailer,espace5,espace6,espace7,lrate,star);
       //Musician mu = new Musician();
       //mu =new ServiceMusician().getInstance().DetailMusician(c.getIdmusician(),mu);
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
      
      
    
}

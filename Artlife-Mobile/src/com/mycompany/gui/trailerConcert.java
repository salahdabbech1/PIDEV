/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.gui;

import com.codename1.components.ImageViewer;
import com.codename1.ui.BrowserComponent;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.URLImage;
import com.codename1.ui.layouts.BorderLayout;
import com.mycompany.entities.Concert;
import com.mycompany.entities.Evenement;
import com.mycompany.entities.Movie;
import com.mycompany.entities.Theatre;
import com.mycompany.entities.cinema;
import java.io.IOException;


/**
 *
 * @author ahmed
 */
public class trailerConcert extends Form {
     
    
     public trailerConcert(Form previous,Concert mu) {
         try {
             Form current =new Form(new BorderLayout());
             
             BrowserComponent browser = new BrowserComponent();
             
             
              current.add(BorderLayout.OVERLAY, browser);
              
             /*************************/
             Image img = URLImage.createImage(1000, 1000);
             img.fill(1000, 1000);
             
             Image placeholder = Image.createImage(1000, 1000, 0xff0000);  
             EncodedImage encImage = EncodedImage.createFromImage(placeholder, false);
             String path="/backg";
             img=URLImage.createToStorage(encImage, path+path, path, URLImage.RESIZE_SCALE);
         
             Image m = Image.createImage("/s.png");
             
             
             ImageViewer iv = new ImageViewer(m);
             
             //current.add(BorderLayout.CENTER,img);
             
             browser.setURL(mu.getTrailer());
             
            
             //.getUnselectedStyle().setBgImage(m);
             current.add(BorderLayout.CENTER,m.scaled(1050, 2500)); 
add(current);
                        
                   getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, l-> previous.showBack());      
                        
                        
         
         } 
         
         catch (IOException ex) {
            
         }


     
     
     }}
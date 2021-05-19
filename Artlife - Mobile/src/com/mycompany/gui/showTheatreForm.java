/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.gui;
import com.codename1.components.FloatingHint;
import com.codename1.components.ImageViewer;
import com.codename1.components.InfiniteProgress;
import com.codename1.components.MediaPlayer;
import com.codename1.components.ScaleImageLabel;
import com.codename1.components.SpanLabel;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.media.Media;
import com.codename1.media.MediaManager;
import com.codename1.ui.BrowserComponent;
import com.codename1.ui.Button;
import com.codename1.ui.ButtonGroup;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.Form;
import com.codename1.ui.Graphics;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.RadioButton;
import com.codename1.ui.Tabs;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.URLImage;
import com.codename1.ui.layouts.BorderLayout;
import static com.codename1.ui.layouts.BorderLayout.CENTER_BEHAVIOR_CENTER;
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
import java.io.IOException;
import java.util.Date;


/**
 *
 * @author HP
 */
public class showTheatreForm extends BaseForm {
    Form current;
    private EncodedImage placeHolder;
    public showTheatreForm(Resources res,Theatre t) throws IOException{
        
                Toolbar tb=new Toolbar(true);
           current=this;
               setToolbar(tb);
           getTitleArea().setUIID("Container");
           setTitle("modifier actor");
           getContentPane().setScrollVisible(false);
           super.addSideMenu(res);

                Label name = new Label((t.getName()));
                
                 Picker datePicker = new Picker();
                 datePicker.setDate(t.getRdate());
                 String datestring=(new SimpleDateFormat("yyyy-MM-dd")).format(datePicker.getDate());
                  Label date = new Label((datestring));
                TextField description = new TextField((t.getDescription()));
               // TextField actors = new TextField((t.getTactor()));
     
        
                //Label image = new Label((t.getImage()), "Image");
                     ImageViewer imavu;
        try {
        imavu = new ImageViewer(getImageFromServer(t.getImage()));
        }
        catch(Exception e) {
        System.out.println(t.getImage());
        imavu = new ImageViewer(res.getImage("s.png"));
        }
        
            Media video = MediaManager.createMedia("http://www.youtube.com/watch?v=fxs-VEeAmk0", true);
            video.play();


            description.setSingleLineTextArea(false);
            
                name.setUIID("NewsCenterLine");
                date.setUIID("NewsCenterLine");
                description.setUIID("NewsCenterLine");
                imavu.setUIID("NewsCenterLine");
              Button btnt = new Button("TRAILER");
             btnt.addActionListener(e -> new trailerForm(current,t).show());
             
                
                Label a = new Label("");
                
                Label e = new Label ();

                Container content = BoxLayout.encloseY(
                e,a,  (name),
                         
                        createLineSeparator(),date,
                        createLineSeparator(),  (description),
                        createLineSeparator(),  (imavu),
                        createLineSeparator(),  (btnt)
                        
                       
                );

                add(content);
                show();



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

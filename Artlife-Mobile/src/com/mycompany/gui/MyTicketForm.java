/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.gui;

import com.codename1.components.ImageViewer;
import com.codename1.components.ScaleImageLabel;
import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
import static com.codename1.ui.Component.LEFT;
import static com.codename1.ui.Component.RIGHT;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.Tabs;
import com.codename1.ui.Toolbar;
import com.codename1.ui.URLImage;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;
import com.mycompany.entities.Ticket;
import com.mycompany.entities.User;
import com.mycompany.services.ServiceTicket;
import com.mycompany.services.ServiceUser;
import java.io.IOException;
import java.util.ArrayList;

/**
 *
 * @author KARIMOOOO
 */
public class MyTicketForm extends BaseForm {
     Form current;
    private EncodedImage placeHolder;
      public MyTicketForm(Resources res) {
            Toolbar tb=new Toolbar(true);
    current=this;
    setToolbar(tb);
    getTitleArea().setUIID("Container");
    setTitle("ajouter tactor");
    getContentPane().setScrollVisible(false);
   
    tb.addSearchCommand(e -> {
});
Tabs swipe = new Tabs();
Label s1 = new Label();
Label s2 = new Label();
addTab (swipe,s1,res.getImage("back-logo.jpeg"),"","",res);
   
        ArrayList<Ticket> list = ServiceTicket.getInstance().AffichageMyTicket();
       
        for (Ticket t : list) {
            addButton(t,res);
        }
          
      }
      
    

    private void addButton(Ticket t,Resources res) {
//re.setId((int) id);
                        
                       
        Container cnt=new Container();
        Form f =  new Form("Form", BoxLayout.y());      
     //   Label tt = new Label("**********************Apprenant************** ");
        Label ta = new Label("Votre IdCinema :"+t.getIdCinema());
        Label ta2 = new Label("Votre IdEvent :"+t.getIdEvent());
        Label ta3 = new Label("Votre IdUser :"+t.getIdUser());
        Label ta4 = new Label("Votre Chaise :"+t.getChaise());
        Label ta5 = new Label("Votre Date :"+t.getDate());
        Label ta6 = new Label("Votre IdSall :"+t.getIdSalle());
        Label ta7 = new Label("Votre Montant :"+t.getMontant());
         
       
          Label supprimer = new Label(" ");
          supprimer.setUIID("NewsTopLine");
          Style supprimerstyle=new Style(supprimer.getUnselectedStyle());
          supprimerstyle.setFgColor(0xf21f1f);
          FontImage supprimerImage=FontImage.createMaterial(FontImage.MATERIAL_DELETE, supprimerstyle);
supprimer.setIcon(supprimerImage);
supprimer.setTextPosition(RIGHT);

supprimer.addPointerPressedListener(l-> {

    Dialog dig=new Dialog("supprimer");
    if(dig.show("supprimer","are you sure ? ","NOOOO","yep"))
    {
        dig.dispose();
    }
    else
    {
        dig.dispose();
   try{
       if(ServiceUser.getInstance().deleteMusician(t.getId()))
    {
      System.out.println("yup");
    }
    }
    catch (Exception e)
           {
                System.out.println("NON");
           }
    new ListUsers(res).show();
   }

});


        f.addAll(ta,ta2,ta3,ta4,ta5,ta6,ta7,supprimer);
        add(f);

    }
      

   
      private void addTab (Tabs swipe, Label spacer,  Image image, String string, String text, Resources res) {
int size = Math.min(Display.getInstance().getDisplayWidth(), Display.getInstance().getDisplayHeight());
  System.out.println("size howa = "+size);
if (image.getHeight() < size) {
image = image.scaledHeight (size);
 }
if(image.getHeight() > Display.getInstance().getDisplayHeight() / 2) {
image = image.scaledHeight (Display.getInstance().getDisplayHeight() / 2);
 }
ScaleImageLabel imageScale = new ScaleImageLabel (image);
imageScale.setUIID("Container");
imageScale.setBackgroundType(Style. BACKGROUND_IMAGE_SCALED_FILL);
Label overlay = new Label("","ImageOverlay");

Container pagel  =
LayeredLayout.encloseIn(imageScale,
overlay,
BorderLayout.south(BoxLayout.encloseY(
new SpanLabel (text, "LargeWhiteText"),
FlowLayout.encloseIn(),
spacer
)));
swipe.addTab("",res.getImage("back-logo.jpeg"), pagel);

}
 public void bindButtonSelection (Button btn, Label l){
btn.addActionListener (e->{
if (btn.isSelected()) {
updateArrowposition (btn, l);
}});
}
private void updateArrowposition (Button btn, Label l){

l.getUnselectedStyle().setMargin (LEFT, btn.getX() + btn.getWidth()  / 2 - l.getWidth() );
l.getParent().repaint();
}  
}

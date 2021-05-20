/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.gui;

import com.codename1.components.InfiniteProgress;
import com.codename1.components.ScaleImageLabel;
import com.codename1.components.SpanLabel;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.NetworkManager;
import com.codename1.ui.Button;
import com.codename1.ui.ButtonGroup;
import com.codename1.ui.Component;
import static com.codename1.ui.Component.BOTTOM;
import static com.codename1.ui.Component.CENTER;
import static com.codename1.ui.Component.LEFT;
import static com.codename1.ui.Component.RIGHT;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Graphics;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.RadioButton;
import com.codename1.ui.Tabs;
import com.codename1.ui.Toolbar;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;
import com.mycompany.entities.Musician;
import com.mycompany.entities.Reclamation;
import com.mycompany.services.ServiceMusician;
import com.mycompany.services.ServiceReclamation;
import java.util.ArrayList;

/**
 *
 * @author PersoPc
 */
public class ListReclamationForm  extends BaseForm{
    Form current;
String data="";
    public ListReclamationForm(Resources res) {
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
    //CODE DE DECORATION
   
    swipe.setUIID("Container");
swipe.getContentPane().setUIID("Container");
swipe.hideTabs();
ButtonGroup bg = new ButtonGroup();
int size= Display.getInstance().convertToPixels(1);
Image unselectedWalkthru =Image.createImage (size, size, 0);
Graphics g = unselectedWalkthru.getGraphics();
g.setColor(0xffffff);
g.setAlpha(100);
g.setAntiAliased(true);
g.fillArc (0, 0, size, size, 0, 360);
Image selectedWalkthru = Image.createImage (size, size, 0);
g= selectedWalkthru.getGraphics();
g.setColor(0xffffff);
g.setAntiAliased(true);
g.fillArc(0, 0, size, size, 0, 360);
RadioButton[] rbs = new RadioButton[swipe.getTabCount()];

 
 FlowLayout flow = new FlowLayout (CENTER);
flow.setValign (BOTTOM);
Container radioContainer = new Container (flow);
for (int iter = 0; iter < rbs.length; iter++) {
rbs[iter] = RadioButton.createToggle(unselectedWalkthru, bg);
rbs[iter].setPressedIcon (selectedWalkthru);
rbs[iter].setUIID("Label");
radioContainer.add (rbs[iter]);
}
rbs[0].setSelected (true);
swipe.addSelectionListener((i, ii) -> {
if (!rbs [ii].isSelected()) {
rbs[ii].setSelected (true); } });
Component.setSameSize (radioContainer, s1, s2);
add (LayeredLayout.encloseIn(swipe,radioContainer));
ButtonGroup barGroup = new ButtonGroup();
RadioButton mesListes = RadioButton.createToggle("Mes Reclamations", barGroup);
mesListes.setUIID("SelectBar");
RadioButton liste = RadioButton.createToggle("Autres", barGroup);
liste.setUIID("SelectBar");
RadioButton partage = RadioButton.createToggle ("Reclamer", barGroup);
partage.setUIID("SelectBar");
Label arrow = new Label (res.getImage ("news-tab-down-arrow.png"), "Container");
 
 mesListes.addActionListener((b) -> {
InfiniteProgress ipp = new InfiniteProgress();
final Dialog ipDlg = ipp.showInifiniteBlocking();
refreshTheme(); });
 
 add(LayeredLayout.encloseIn(
GridLayout.encloseIn(3, mesListes, liste, partage),
FlowLayout.encloseBottom (arrow) ));
 
 partage.setSelected(true);
arrow.setVisible(false);
addShowListener(e -> {
arrow.setVisible (true);
updateArrowposition (partage, arrow);
});
 bindButtonSelection (mesListes, arrow);
bindButtonSelection (liste, arrow);
bindButtonSelection (partage, arrow);
addOrientationListener(e -> {
updateArrowposition(barGroup.getRadioButton (barGroup.getSelectedIndex()), arrow);
});
 

       
       
        for (Reclamation u :  new ServiceReclamation().findAll()) {
            addButton(u,res);
               data+="<tr> "+
                                "<td>"+
                                
                                u.getTitre()
                                
                                +"</td>"
                       +
                                "<td>"+
                                
                                u.getDescription()
                                
                                +"</td>"
                                +
                                "<td>"+
                                
                                u.getTraiter()
                                
                                +"</td>"
                                + "</tr>";
        }
    }

    
private void addButton(Reclamation u,Resources res) {

        Container cnt=new Container();
        Form f =  new Form("Form", BoxLayout.y());      
     //   Label tt = new Label("**********************Apprenant************** ");
        Label ta = new Label("Votre Titre :"+u.getTitre());
        Label ta2 = new Label("Votre Description :"+u.getDescription());
      //  Label ta3 = new Label("Votre datere :"+u.getDatere());
        Label ta4 = new Label("Traite :"+u.getTraiter());
       
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
    ServiceReclamation.getInstance().Delete(u.getId());
   
          new ListReclamationForm(res).show();
    }
    catch (Exception e)
           {
              
                System.out.println(e.getMessage());
           }
   }

});
 Label lModifier = new Label(" ");
lModifier.setUIID ("exstopline");
Style modifierstyle= new Style(lModifier.getUnselectedStyle());
modifierstyle.setFgColor(0xf7ad02);
 FontImage modifierImage=FontImage.createMaterial(FontImage.MATERIAL_EDIT, modifierstyle);
lModifier.setIcon(modifierImage);
lModifier.setTextPosition(LEFT);

lModifier.addPointerPressedListener(l->{

   new ModifierReclamationForm(res,u).show();

});

Label traite = new Label(" ");
traite.setUIID ("exstopline");
Style traitestyle= new Style(traite.getUnselectedStyle());
traitestyle.setFgColor(0xf7ad02);
 FontImage traiteImage=FontImage.createMaterial(FontImage.MATERIAL_EMAIL, modifierstyle);
traite.setIcon(traiteImage);
traite.setTextPosition(LEFT);

traite.addPointerPressedListener(l->{
 Dialog dig=new Dialog("traiter");
   ServiceReclamation sr = new ServiceReclamation();
   sr.traiterReclamation(u.getId());
   dig.show("Traiter","traiter",null,"yep");
    new ListReclamationForm(res).show();

});
 Label pdf = new Label("pdf");
pdf .setUIID ("exstopline");
Style pdfstyle= new Style(pdf .getUnselectedStyle());
pdfstyle.setFgColor(0xf7ad02);
pdf.setTextPosition(LEFT);

pdf.addPointerPressedListener(l->{
     String urlab = "http://localhost:8081/pdf/ex.php";
        for (Reclamation q :  new ServiceReclamation().findAll()) {
          
               data+="<tr> "+
                                "<td>"+
                                
                                q.getTitre()
                                
                                +"</td>"
                       +
                                "<td>"+
                                
                                q.getDescription()
                                
                                +"</td>"
                                +
                                "<td>"+
                                
                                q.getTraiter()
                                
                                +"</td>"
                                + "</tr>";
        }

                                ConnectionRequest cnreq = new ConnectionRequest();
                                cnreq.setPost(false);
                             
                                cnreq.addArgument("data", data);
                                cnreq.setUrl(urlab);

                                cnreq.addResponseListener(evx
                                        -> {
                                    String dataw = new String(cnreq.getResponseData());
                              Dialog dig=new Dialog("PDF");
  dig.show("PDF","PDF",null,"yep");
                                }
                                );
                                NetworkManager.getInstance().addToQueueAndWait(cnreq);
    
    
   new ListReclamationForm(res).show();

});





        f.addAll(ta,ta2,ta4,supprimer,lModifier,traite,pdf);
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

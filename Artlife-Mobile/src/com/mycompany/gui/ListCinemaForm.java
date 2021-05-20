/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.gui;

import com.codename1.components.ImageViewer;
import com.codename1.components.InfiniteProgress;
import com.codename1.components.ScaleImageLabel;
import com.codename1.components.SpanLabel;
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
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Graphics;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.RadioButton;
import com.codename1.ui.Tabs;
import com.codename1.ui.Toolbar;
import com.codename1.ui.URLImage;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.layouts.LayeredLayout;
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
public class ListCinemaForm extends BaseForm {
      Form current;
    private EncodedImage placeHolder;

    public ListCinemaForm(Resources res) {
        //   super("musician", BoxLayout.x());
   
    Toolbar tb=new Toolbar(true);
    current=this;
    setToolbar(tb);
    getTitleArea().setUIID("Container");
   // setTitle("ajouter concert");
    getContentPane().setScrollVisible(false);
  //  super.addSideMenu(res);
    
   
    tb.addSearchCommand(e -> {
});
Tabs swipe = new Tabs();
Label s1 = new Label();
Label s2 = new Label();
addTab (swipe,s1,res.getImage("z.jpeg"),"","",res);

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
RadioButton mesListes = RadioButton.createToggle("", barGroup);
mesListes.setUIID("SelectBar");
RadioButton liste = RadioButton.createToggle("CINEMAS", barGroup);
liste.setUIID("SelectBar");
RadioButton partage = RadioButton.createToggle ("", barGroup);
partage.setUIID("SelectBar");
Label arrow = new Label (res.getImage ("news-tab-down-arrow.png"), "Container");
 
 mesListes.addActionListener((b) -> {
InfiniteProgress ipp = new InfiniteProgress();
final Dialog ipDlg = ipp.showInifiniteBlocking();
refreshTheme(); });
 

   
//FROM HERE ISSUE STARTS
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
Container f=new Container();

 
    Button ret=new Button("Return");
    
    ret.addPointerPressedListener(l->{

   new HomeBack(res).show();

});
        Button ajt=new Button("Ajouter");
    
    ajt.addPointerPressedListener(l->{

   new AjoutCinemaForm(res).show();

});
 f.addAll(ret,ajt);
 add(f);

        ArrayList<cinema> list = Servicecinema.getInstance().Affichagecinema();
       
        for (cinema u : list) {
            addButton(u,res);
        }
        

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

    private void addButton(cinema u,Resources res) {

  Container cnt =  new Container(BoxLayout.y()); 
        
        Label ta = new Label("nom :"+u.getName());
        Label ta2 = new Label("nombre salle :"+u.getNb_salle());
        Label ta3 = new Label("adresse:"+u.getAdresse());
        Label ta4 =new Label("descirption"+u.getDesc());
    //    Label ta4 = new Label(u.getTrailer());
      //  Label ta4 = new Label("Votre status :"+u.getImage());
        ImageViewer imavu;
        try {
        imavu = new ImageViewer(getImageFromServer(u.getImg()));
        }
        catch(Exception e) {
        System.out.println(u.getImg());
        imavu = new ImageViewer(res.getImage("s.png"));
        }
       
          Label supprimer = new Label(" ");
          supprimer.setUIID("NewsTopLine");
          Style supprimerstyle=new Style(supprimer.getUnselectedStyle());
          supprimerstyle.setFgColor(0xf21f1f);
          FontImage supprimerImage=FontImage.createMaterial(FontImage.MATERIAL_DELETE, supprimerstyle);
supprimer.setIcon(supprimerImage);
supprimer.setTextPosition(RIGHT);

supprimer.addPointerPressedListener(l-> {

    Dialog dig=new Dialog("supprimer");
    if(dig.show("supprimer","are you sure ? ","No","Yes"))
    {
        dig.dispose();
    }
    else
    {
        dig.dispose();
   try{
       if(Servicecinema.getInstance().deletecinema(u.getId()))
    {
        System.out.println("success");
       
    }
    }
    catch (Exception e)
           {
                System.out.println("NON");
           }
   
       new ListCinemaForm(res).show();
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

   new ModifierCinemaForm(res,u).show();

});


        cnt.addAll(imavu,ta,ta2,ta3,supprimer,lModifier);
        add(cnt);

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

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
import com.mycompany.entities.Concert;
import com.mycompany.services.ServiceConcert;
import java.io.IOException;
import java.util.ArrayList;

/**
 *
 * @author HP
 */
public class IndexConcert extends BaseFront {
      Form current;
    private EncodedImage placeHolder;

    public IndexConcert(Resources res) {
        //   super("musician", BoxLayout.x());
   
     Toolbar tb=new Toolbar(true);
    current=this;
        setToolbar(tb);
    getTitleArea().setUIID("Container");
    setTitle("details concert");
    getContentPane().setScrollVisible(false);
    super.addSideMenu(res);
   
    tb.addSearchCommand(e -> {
});
Tabs swipe = new Tabs();
Label s1 = new Label("Bienvenue A Artlife!");
Label s2 = new Label("Evenements à venir:");
addTab (swipe,s1,res.getImage("c.jpg"),"","",res);
    
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
Component.setSameSize (radioContainer);
add (LayeredLayout.encloseIn(swipe,radioContainer));
ButtonGroup barGroup = new ButtonGroup();
RadioButton mesListes = RadioButton.createToggle(" ", barGroup);
mesListes.setUIID("SelectBar");
RadioButton liste = RadioButton.createToggle("BIENVENUE A ARTLIFE", barGroup);
liste.setUIID("SelectBar");
RadioButton partage = RadioButton.createToggle ("", barGroup);
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
Container f =  new Container(BoxLayout.y()); 

        
         Container f2 =  new Container(BoxLayout.x());
   Button excel=new Button("Excel");
   Button record=new Button("Enregistrement Vocal");
    Button r =new Button("Return");
   
                 r.addActionListener(c -> {
                new HomeFront(res).show();
                });
    
   
   f2.addAll(excel,record,r);
        add(f2);
        
        
        //API
            excel.addActionListener((e)->{
        try{
    InfiniteProgress ip = new InfiniteProgress(); 
    final Dialog iDialog = ip.showInfiniteBlocking();
    iDialog.dispose(); 
         new Excel(res);
    refreshTheme();

        }
        catch (Exception ex) {
         ex.printStackTrace();
}
        });
            
               record.addActionListener((e)->{
        try{
    InfiniteProgress ip = new InfiniteProgress(); 
    final Dialog iDialog = ip.showInfiniteBlocking();
    iDialog.dispose(); 
         new VoiceRecorder(res);
    refreshTheme();

        }
        catch (Exception ex) {
         ex.printStackTrace();
}
        });  
            
            
            
       
    //ON CLICK CONCERT
   
        ArrayList<Concert> list = ServiceConcert.getInstance().AffichageConcert();
       
        for (Concert u : list) {
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

    private void addButton(Concert u,Resources res) {

        Container f =  new Container(BoxLayout.y()); 
        Label ta = new Label("Nom :"+u.getName());
        Label ta2 = new Label("Musics :"+u.getMusics());
        Label ta3 = new Label("Idmusician :"+u.getIdmusician());
        ImageViewer imavu;
        try {
        imavu = new ImageViewer(getImageFromServer(u.getImage()));
        }
        catch(Exception e) {
        System.out.println(u.getImage());
        imavu = new ImageViewer(res.getImage("s.png"));
        }

Button details=new Button("Détails");

details.addPointerPressedListener(l->{

   new DetailsConcMu(res,u).show();

});

        f.addAll(imavu,ta,ta2,ta3,details);
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

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.gui;
import com.codename1.components.ImageViewer;
import com.codename1.components.InfiniteProgress;
import com.codename1.components.MultiButton;
import com.codename1.components.ScaleImageLabel;
import com.codename1.components.SpanLabel;
import com.codename1.l10n.SimpleDateFormat;
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
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.URLImage;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;
import com.mycompany.entities.Tactor;
import com.mycompany.entities.Theatre;
import com.mycompany.services.ServiceTactor;
import com.mycompany.services.ServiceTheatre;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Date;


public class IndexTheatreForm extends BaseForm{
    Form current;
    private EncodedImage placeHolder;
    public IndexTheatreForm(Resources res) {
        //   super("musician", BoxLayout.x());
   
    Toolbar tb=new Toolbar(true);
    current=this;
    setToolbar(tb);
    getTitleArea().setUIID("Container");
    setTitle("List actor");
    getContentPane().setScrollVisible(false);
   Form hi = new Form("alo");
    hi.getToolbar().addSearchCommand(e -> {
    String text = (String)e.getSource();
    if(text == null || text.length() == 0) {
        // clear search
        for(Component cmp : hi.getContentPane()) {
            cmp.setHidden(false);
            cmp.setVisible(true);
        }
        hi.getContentPane().animateLayout(150);
    } else {
        text = text.toLowerCase();
        for(Component cmp : hi.getContentPane()) {
            MultiButton mb = (MultiButton)cmp;
            String line1 = mb.getTextLine1();
            String line2 = mb.getTextLine2();
            boolean show = line1 != null && line1.toLowerCase().indexOf(text) > -1 ||
                    line2 != null && line2.toLowerCase().indexOf(text) > -1;
            mb.setHidden(!show);
            mb.setVisible(show);
        }
        hi.getContentPane().animateLayout(150);
    }
}, 4);
    hi.addAll();

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
RadioButton partage = RadioButton.createToggle ("Mes Acteurs", barGroup);
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
 
    
        ArrayList<Theatre> list = ServiceTheatre.getInstance().AffichageTheatre();
       
        for (Theatre u : list) {
            addButton(u,res);
        }

    }

    private void addButton(Theatre u,Resources res) {

        Container cnt=new Container();
        Form f =  new Form("Form", BoxLayout.y());      
   
        Label ta = new Label("Nom :"+u.getName());
//        Label ta2 = new Label("Votre Date :"+u.getBorn());
//        Label ta3 = new Label("Votre description :"+u.getDescription());
            ImageViewer imavu;
        try {
        imavu = new ImageViewer(getImageFromServer(u.getImage()));
        }
        catch(Exception e) {
        System.out.println(u.getImage());
        imavu = new ImageViewer(res.getImage("s.png"));
        }
         
         Label showDetails = new Label(" ");
        showDetails.setUIID ("exstopline");
        Style modifierstyle= new Style(showDetails.getUnselectedStyle());
        modifierstyle.setFgColor(0xf7ad02);
         FontImage modifierImage=FontImage.createMaterial(FontImage.MATERIAL_EDIT, modifierstyle);
        showDetails.setIcon(modifierImage);
        showDetails.setTextPosition(LEFT);

        showDetails.addPointerPressedListener(l->{

            try {
                new showTheatreForm(res,u).show();
            } catch (IOException ex) {
               
            }
          
        });


        f.addAll(imavu,ta,showDetails);
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

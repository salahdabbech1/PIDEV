/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.gui;
import com.codename1.components.InfiniteProgress;
import com.codename1.components.ScaleImageLabel;
import com.codename1.components.SpanLabel;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.ui.Button;
import com.codename1.ui.ButtonGroup;
import com.codename1.ui.Component;
import static com.codename1.ui.Component.BOTTOM;
import static com.codename1.ui.Component.CENTER;
import static com.codename1.ui.Component.LEFT;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.Form;
import com.codename1.ui.Graphics;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.RadioButton;
import com.codename1.ui.Tabs;
import com.codename1.ui.TextField;
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
import java.util.Date;
/**
 *
 * @author PersoPc
 */
public class AjoutReclamationForm extends BaseForm{
   Form current;
    public AjoutReclamationForm(Resources res){
 //   super("musician", BoxLayout.x());
    
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
 
 
    
    
    
     //END CODE DE DECORATION
    
    
    TextField Titre =new TextField("", "entrer Titre");
    Titre.setUIID("TextFieldBlack");
    addStringValue("Titre",Titre);
    
      TextField Description =new TextField("", "entrer Description");
    Description.setUIID("TextFieldBlack");
    addStringValue("Description", Description);
    
    
  
     Button btnAnnuler =new Button ("Return");
           addStringValue("", btnAnnuler);
                btnAnnuler.addActionListener(c -> {
                new ListReclamationForm(res).show();
                });
  
    
    
   
    
    Button buttonAjt=new Button("Ajouter Reclamation");
    addStringValue("", buttonAjt);
    
    //onlick event button
    buttonAjt.addActionListener((e)->{
        try{
            if(Titre.getText()=="" || Description.getText()==""){
            Dialog.show("veulliez verifier les donnÃ©es","","annuler","OK");
    }
         else {
    InfiniteProgress ip = new InfiniteProgress(); 
    final Dialog iDialog = ip.showInfiniteBlocking();
    try {
        
       Reclamation t = new Reclamation();
       t.setDescription(Description.getText());
       t.setTitre(Titre.getText());
    System.out.println("data reclamation = "+t);
    ServiceReclamation.getInstance().addReclamation(t);
    iDialog.dispose(); 
         new ListReclamationForm(res).show();
    refreshTheme();
    }

     catch (Exception ex) {
         ex.printStackTrace();
             new ListReclamationForm(res).show();
}
    
    
    
    
    }
        }
        catch (Exception ex) {
         ex.printStackTrace();
}
        });
    }

    private void addStringValue(String s, Component v) {
        add(BorderLayout.west(new Label(s,"PaddedLabel"))
        .add(BorderLayout.CENTER,v));
        add(createLineSeparator(0xeeeeee));
        
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
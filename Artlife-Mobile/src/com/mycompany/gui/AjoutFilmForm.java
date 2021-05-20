/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.gui;

import com.codename1.components.InfiniteProgress;
import com.codename1.components.ScaleImageLabel;
import com.codename1.components.SpanLabel;
import com.codename1.ext.filechooser.FileChooser;
import com.codename1.io.FileSystemStorage;
import com.codename1.io.Log;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.ui.Button;
import com.codename1.ui.ButtonGroup;
import com.codename1.ui.CN;
import com.codename1.ui.CheckBox;
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
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.spinner.Picker;
import com.codename1.ui.util.ImageIO;
import com.codename1.ui.util.Resources;
import com.mycompany.entities.Movie;
import com.mycompany.services.ServiceMovie;
import java.io.IOException;
import java.io.OutputStream;
import java.net.URI;
import java.net.URISyntaxException;
import java.util.Date;
/**
 *
 * @author HP
 */
public class AjoutFilmForm extends BaseForm{
       Form current;
    public AjoutFilmForm(Resources res){
 //   super("musician", BoxLayout.x());
    
    Toolbar tb=new Toolbar(true);
    current=this;
    setToolbar(tb);
    getTitleArea().setUIID("Container");
    setTitle("ajouter movie");
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
    
    
        TextField name =new TextField("", "entrer name");
       name.setUIID("TextFieldBlack");
       addStringValue("name", name);
       Picker dateR=new Picker();
       dateR.setUIID("TextFieldBlack");
       addStringValue("Date Release", dateR);
       

         TextField trailer =new TextField("", "entrer trailer");
       trailer.setUIID("TextFieldBlack");
       addStringValue("Trailer", trailer);

       TextArea description =new TextArea("entrer description");
       description.setMaxSize(500);
       description.setUIID("TextFieldBlack");
       addStringValue("Description", description);
       
       
       TextField imageb =new TextField("", "entrer background");
       imageb.setUIID("TextFieldBlack");
       addStringValue("background", imageb);
       
       TextField director =new TextField("", "entrer director");
       director.setUIID("TextFieldBlack");
       addStringValue("Director", director);
       
       Picker p = new Picker();
       String[] characters = { "Action", "Sci-Fi", "Horror", "Drama","Cartoon","War"};
       p.setStrings(characters);
       p.setSelectedString(characters[0]);
       p.setUIID("TextFieldBlack");
       addStringValue("Date Release", p);
    
        Button btnAnnuler =new Button ("Return");
           addStringValue("", btnAnnuler);
                btnAnnuler.addActionListener(c -> {
                new ListMovieForm(res).show();
                });
                CheckBox multiSelect = new CheckBox("Multi-select");
                     Button buttonAjt=new Button("Ajouter Movie");
                //CODE ABAY
                  
   
              //FILE CHOOSER
  
  
    addStringValue("", buttonAjt);
    
    buttonAjt.addActionListener((ActionEvent e) -> {
            if (FileChooser.isAvailable()) {
                FileChooser.setOpenFilesInPlace(true);
                FileChooser.showOpenDialog( ".jpg, .jpeg, .png/plain", (ActionEvent e2) -> {
                    if (e2 == null || e2.getSource() == null) {
                        add("No file was selected");
                        revalidate();
                        return;
                    }
                  if (multiSelect.isSelected()) {
                        String[] paths = (String[]) e2.getSource();
                        for (String path : paths) {
                            System.out.println("test llowel"+path);
                            CN.execute(path);
                        }
                        return;
                    }

                    String file = (String) e2.getSource();
                    if (file == null) {
                        add("No file was selected");
                        revalidate();
                    } else {     String hh="C:/Users/bouyo/Desktop/Study/S2/Project/obile/Final/src";
                        Image logo;

                        try {
                            logo = Image.createImage(file).scaledHeight(500);;
                            add(logo);
                            String imageFile = FileSystemStorage.getInstance().getAppHomePath() + "s.png";

                            try (OutputStream os = FileSystemStorage.getInstance().openOutputStream(imageFile)) {
                                System.out.println("test theny"+imageFile);
                                ImageIO.getImageIO().save(logo, os, ImageIO.FORMAT_PNG, 1);
                            } catch (IOException err) {
                            }
                        } catch (IOException ex) {
                        }

                        String extension = null;
                        if (file.lastIndexOf(".") > 0) {
                            extension = file.substring(file.lastIndexOf(".") + 1);
                            StringBuilder hi = new StringBuilder(file);
                            if (file.startsWith("file://")) {
                                hi.delete(0, 7);
                            }
                            int lastIndexPeriod = hi.toString().lastIndexOf(".");
                            Log.p(hi.toString());
                            String ext = hi.toString().substring(lastIndexPeriod);
                            String hmore = hi.toString().substring(0, lastIndexPeriod - 1);
                            try {
                                String namePic ="images/Films/"+ saveFileToDevice(file, ext);
                                System.out.println("test theleth"+namePic);
                                
                                //AJOUT
    
   
    
     try{
             if(name.getText()=="" || description.getText()==""){
            Dialog.show("veulliez verifier les donnÃ©es","","annuler","OK");
    }
         else {
    InfiniteProgress ip = new InfiniteProgress(); 
    final Dialog iDialog = ip.showInfiniteBlocking();
    String d="1978-11-11";
    Date date1=new SimpleDateFormat("yyyy-MM-dd").parse(d);
    try {
        
Movie t = new Movie(name.getText(),p.getValue().toString(),namePic,imageb.getText(),trailer.getText(),description.getText(),director.getText(),dateR.getDate());
ServiceMovie.getInstance().addMovie(t);
     iDialog.dispose(); 
         new ListMovieForm(res).show();
    refreshTheme();
    }
      catch (Exception ex) {
         ex.printStackTrace();
                  new ListMovieForm(res).show();
}    
   

    
    }
        }
        catch (Exception ex) {
         ex.printStackTrace();
}       } catch (IOException ex) {
                            }

                            revalidate();

                        
                    }
                    }
                        });
            }
                });       
                
         

    }
 protected String saveFileToDevice(String hi, String ext) throws IOException {
        URI uri;
        try {
            uri = new URI(hi);
            String path = uri.getPath();
            int index = hi.lastIndexOf("/");
            hi = hi.substring(index + 1);
            return hi;
        } catch (URISyntaxException ex) {
        }
        return "hh";
    }
    private void addStringValue(String s, Component v) {
        add(BorderLayout.west(new Label(s,"PaddedLabel"))
        .add(BorderLayout.CENTER,v));
        add(createLineSeparator(0xeeeeee));
        
    }
    
        private void addTab (Tabs swipe, Label spacer,  Image image, String string, String text, Resources res) {
        int size = Math.min(Display.getInstance().getDisplayWidth(), Display.getInstance().getDisplayHeight());
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
package com.mycompany.gui;

import static com.codename1.charts.util.ColorUtil.red;
import com.codename1.components.InfiniteProgress;
import com.codename1.components.ScaleImageLabel;
import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
import com.codename1.ui.ButtonGroup;
import com.codename1.ui.Component;
import static com.codename1.ui.Component.BOTTOM;
import static com.codename1.ui.Component.CENTER;
import static com.codename1.ui.Component.LEFT;
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
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.layouts.Layout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author HP
 */
public class HomeBack extends BaseBack{
     Form current;
    private EncodedImage placeHolder;
    public HomeBack(Resources res){
         //   super("musician", BoxLayout.x());
   
      Toolbar tb=new Toolbar(true);
    current=this;
    setToolbar(tb);
    getTitleArea().setUIID("Container");
   // setTitle("ajouter concert");
    getContentPane().setScrollVisible(false);
//    super.addSideMenu(res);
   
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
g.setColor(0x76FFF2);
g.setAlpha(100);
g.setAntiAliased(true);
g.fillArc (0, 0, size, size, 0, 360);
Image selectedWalkthru = Image.createImage (size, size, 0);
g= selectedWalkthru.getGraphics();
g.setColor(0x76FFF2);
g.setAntiAliased(true);
g.fillArc(0, 0, size, size, 0, 360);
RadioButton[] rbs = new RadioButton[swipe.getTabCount()];

 FlowLayout flow = new FlowLayout (CENTER);
flow.setValign (BOTTOM);
Container radioContainer = new Container (flow);
//radioContainer.getStyle().setBgColor(0x99CCCC);
//radioContainer.getStyle().setBgTransparency(255);
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


 //  Container cnt=new Container();
        Container f1 =  new Container(BoxLayout.y()); 

   Button concert=new Button("Concerts");

   Button play=new Button("Theatres");
   Button movie=new Button("Movies");
   Button cinema=new Button("Cinemas");
    Button musicien=new Button("Musiciens");
     Button tactor=new Button("Theatre Actor");
      Button factor=new Button("Movie Actor");
       Button event=new Button("Event");
        Button users=new Button("Users");
         Button logout=new Button("Logout");
   f1.addAll(concert,play,movie,cinema,musicien,tactor,factor,event,users,logout);
        add(f1);
  

       
    //ON CLICK CONCERT
 concert.addPointerPressedListener(l->{

           new ListConcertForm(res).show();
          
        });
 event.addPointerPressedListener(l->{

           new ListEvenementForm(res).show();
          
        });
 users.addPointerPressedListener(l->{

           new ListUsers(res).show();
          
        });
 
     //ON CLICK CONCERT
 play.addPointerPressedListener(l->{

           new ListTheatreForm(res).show();
          
        });
  movie.addPointerPressedListener(l->{

           new ListMovieForm(res).show();
          
        });
   cinema.addPointerPressedListener(l->{

           new ListCinemaForm(res).show();
          
        });
    musicien.addPointerPressedListener(l->{

           new ListMusicianForm(res).show();
          
        });
     tactor.addPointerPressedListener(l->{

           new ListTactorForm(res).show();
          
        });
     
      logout.addPointerPressedListener(l->{

           new SignInForm(res).show();
          
        });
      factor.addPointerPressedListener(l->{

           new ListFactorForm(res).show();
          
        });
      
      movie.addPointerPressedListener(l->{

           new ListMovieForm(res).show();
          
        });
    













 bindButtonSelection (mesListes, arrow);
bindButtonSelection (liste, arrow);
bindButtonSelection (partage, arrow);
addOrientationListener(e -> {
updateArrowposition(barGroup.getRadioButton (barGroup.getSelectedIndex()), arrow);
});
    
     //END CODE DE DECORATION
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
swipe.addTab("",res.getImage("z.jpeg"), pagel);

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

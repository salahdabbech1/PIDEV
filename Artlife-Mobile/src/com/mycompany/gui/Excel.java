package com.mycompany.gui;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
import com.codename1.io.CSVParser;
import com.codename1.io.Log;
import com.codename1.ui.Button;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.table.DefaultTableModel;
import com.codename1.ui.table.Table;
import com.codename1.ui.table.TableModel;
import com.codename1.ui.util.Resources;
import com.mycompany.entities.Concert;
import com.mycompany.services.ServiceConcert;
import java.io.IOException;
import java.io.Reader;
import java.util.ArrayList;

/**
 *
 * @author HP
 */
public class Excel extends BaseForm{
  public Excel(Resources res) throws IOException{
      Form hi = new Form("CSV Parsing", new BorderLayout());
Button ret=new Button("Return");
    
    ret.addPointerPressedListener(l->{

   new IndexConcert(res).show();

});
    String[][] data = new String[100][3]; //[7ot max mta3 rows][max mta3 les attributs à afficher]
    int i=0; //compteur mta3 lrows
        ArrayList<Concert> list = ServiceConcert.getInstance().AffichageConcert();
    for (Concert h : list) {
            data[i][0] = h.getName();
            data[i][1] = h.getIdmusician();
            data[i][2] = h.getMusics(); // les attributs lezm ykounou String btw
            i++; // bech tet3ada lel row li baadhha 
        }
Label l=new Label("Liste Des Concerts");
  String[] columnNames = { "Name", "Musician", "Musics" };
    System.out.println();
    TableModel tm = new DefaultTableModel(columnNames, data);
    hi.add(BorderLayout.NORTH, l);
     hi.add(BorderLayout.NORTH, ret);
    hi.add(BorderLayout.CENTER, new Table(tm));
hi.show();
  }

    public Excel() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
   
    private void addStringValue(String s, Component v) {
        add(BorderLayout.west(new Label(s,"PaddedLabel"))
        .add(BorderLayout.CENTER,v));
        add(createLineSeparator(0xeeeeee));
        
    }
   }

   
   


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.gui;

import com.codename1.charts.ChartComponent;
import com.codename1.charts.models.CategorySeries;
import com.codename1.charts.renderers.DefaultRenderer;
import com.codename1.charts.renderers.SimpleSeriesRenderer;
import com.codename1.charts.util.ColorUtil;
import com.codename1.charts.views.PieChart;
import com.codename1.components.ImageViewer;
import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.list.DefaultListModel;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import com.mycompany.entities.Theatre;
import com.mycompany.services.ServiceTheatre;
import java.util.ArrayList;
import com.mycompany.gui.ListTheatreForm;
import java.util.HashMap;

/**
 *
 * @author ahmed
 */
public class StatForm extends Form {
     Form current ; 
     Resources res;

       public StatForm(Form previous) { 
        current=this;
        
     setTitle("Stats");

                setLayout(BoxLayout.y());
//                
//Form f1=new Form("hi");
//    // Container f2=new Container();
//
// 
//    Button ret=new Button("Return");
//    
//    ret.addPointerPressedListener(l->{
//
//   new ListTheatreForm(res).show();
//
//});
//     f1.addAll(ret);
// add(f1);
// f1.show();

      this.add(createPieChartForm());
      
   
      
     
    }
private DefaultRenderer buildCategoryRenderer(int[] colors) {
    
    DefaultRenderer renderer = new DefaultRenderer();
    renderer.setLabelsTextSize(30);
    renderer.setLegendTextSize(30);
    renderer.setMargins(new int[]{20, 30, 15, 0});
    for (int color : colors) {
        SimpleSeriesRenderer r = new SimpleSeriesRenderer();
        r.setColor(color);
        renderer.addSeriesRenderer(r);
    }
    return renderer;
}

/**
 * Builds a category series using the provided values.
 *
 * @param titles the series titles
 * @param values the values
 * @return the category series
 */
protected CategorySeries buildCategoryDataset(String title, HashMap<String, Integer> values) {
    CategorySeries series = new CategorySeries(title);
   series.add("Historical", values.get("historical"));
        series.add("Reality", values.get("reality"));
        series.add("Comedy", values.get("comedy"));
    

    return series;
}

public Form createPieChartForm() {
 
      int historical = 0;
    int comedy = 0;
    int reality = 0;
    ArrayList<Theatre> th = ServiceTheatre.getInstance().AffichageTheatre();
    for (int i=0;i<th.size();i++)
    {
        switch (th.get(i).getGenre().toLowerCase()) {
            case "historical":
                historical++;
                break;
            case "comedy":
                comedy++;
                break;
            default:
                reality++;
                break;
        }
    }
     HashMap<String, Integer> values = new HashMap<>();
    values.put("historical", historical);
    values.put("comedy", comedy);
    values.put("reality", reality);

    // Set up the renderer
  int[] colors = new int[]{ColorUtil.GREEN, ColorUtil.MAGENTA, ColorUtil.LTGRAY};
    DefaultRenderer renderer = buildCategoryRenderer(colors);
    renderer.setZoomButtonsVisible(true);
    renderer.setZoomEnabled(true);
    renderer.setChartTitleTextSize(30);
    renderer.setDisplayValues(true);
    renderer.setShowLabels(true);
    renderer.setLabelsColor(ColorUtil.BLACK);
    SimpleSeriesRenderer r = renderer.getSeriesRendererAt(0);
    r.setGradientEnabled(true);
    r.setGradientStart(0, ColorUtil.BLUE);
    r.setGradientStop(0, ColorUtil.GREEN);
    r.setHighlighted(true);

    // Create the chart ... pass the values and renderer to the chart object.
    PieChart chart = new PieChart(buildCategoryDataset("Project budget", values), renderer);

    // Wrap the chart in a Component so we can add it to a form
    ChartComponent c = new ChartComponent(chart);

    // Create a form and show it.
    Form f = new Form("by Genre");
   
  
    f.add( c);

    f.show();
      
    return f;

}
}

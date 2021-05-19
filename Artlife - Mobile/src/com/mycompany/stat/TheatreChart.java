///*
// * To change this license header, choose License Headers in Project Properties.
// * To change this template file, choose Tools | Templates
// * and open the template in the editor.
// */
//package com.mycompany.stat;
//
//
//import com.codename1.charts.ChartComponent;
//import com.codename1.charts.models.CategorySeries;
//import com.codename1.charts.models.SeriesSelection;
//import com.codename1.charts.renderers.DefaultRenderer;
//import com.codename1.charts.renderers.SimpleSeriesRenderer;
//import com.codename1.charts.util.ColorUtil;
//import com.codename1.charts.views.PieChart;
//import com.codename1.ui.Form;
//import com.codename1.ui.geom.Rectangle;
//import com.codename1.ui.geom.Shape;
//import com.mycompany.entities.Theatre;
//import java.util.ArrayList;
//import com.mycompany.services.ServiceTheatre;
//import java.util.Random;
///**
// *
// * @author ahmed
// */
//public class TheatreChart extends AbstractDemoChart {
//      ArrayList<Theatre> list=ServiceTheatre.getInstance().Cat();
//
//    /**
//   * Returns the chart name.
//   * 
//   * @return the chart name
//   */
//  public String getName() {
//      
//    return "Refugie chart";
//  }
//  
//    public int getRandomColor(){
//   Random rnd = new Random();
//   return ColorUtil.argb(255, rnd.nextInt(256), rnd.nextInt(256), rnd.nextInt(256));
//}
//    
//@Override
//    protected CategorySeries buildCategoryDataset(String title, double[] values) {
//    CategorySeries series = new CategorySeries(title);
//    int k = 0;
//    double v;
//     System.out.println("hetha houa "+list.size());
//
//    for (Theatre c : ServiceTheatre.getInstance().Cat()) {
//       
//      series.add( c.getGenre(),c.getId());
//      
//    
//    }
//    return series;
//  }
//  /**
//   * Returns the chart description.
//   * 
//   * @return the chart description
//   */
//  public String getDesc() {
//    return "The number of refugie available per camp";
//  }
//
//  /**
//   * Executes the chart demo.
//   * 
//   * @param context the context
//   * @return the built intent
//   */
//  public Form execute() {
//      double[] values = new double[30];
//      int[] colors = new int[30]; 
//        Long i=null;
////        for (Theatre c : ServiceTheatre.getInstance().Cat()) {
////            values[i] = c.getId();
////            i++;     
////        }
//        Integer j=0;
//        for (Theatre c : ServiceTheatre.getInstance().Cat()) {
//            colors[j] = getRandomColor();
//            j++;     
//        }
//        
//    final DefaultRenderer renderer = buildCategoryRenderer(colors);
//    renderer.setZoomButtonsVisible(true);
//    renderer.setZoomEnabled(true);
//    renderer.setChartTitleTextFont(largeFont);
//    renderer.setDisplayValues(true);
//    renderer.setShowLabels(true);
//    renderer.setBackgroundColor(ColorUtil.rgb(243, 242, 242));
//    renderer.setApplyBackgroundColor(true);
//    renderer.setLabelsColor(0000);
//    final CategorySeries seriesSet = buildCategoryDataset("Project Refugié", values);
//    final PieChart chart = new PieChart(seriesSet, renderer);
//    ChartComponent comp = new ChartComponent(chart);
//    return wrap("Statistique Refugié", comp);
//    
//
//}}
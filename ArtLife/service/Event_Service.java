/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package service;

import Iservice.Iservice;
import com.google.zxing.BarcodeFormat;
import com.google.zxing.WriterException;
import com.google.zxing.common.BitMatrix;
import com.google.zxing.qrcode.QRCodeWriter;
//import Iservice.MyConnexion;
import utils.DatabaseConnection;
import entite.Event;

import java.awt.Color;
import java.awt.Graphics2D;
import java.awt.image.BufferedImage;
import java.io.File;
import java.io.IOException;
import java.math.BigInteger;
import java.security.MessageDigest;
import java.security.NoSuchAlgorithmException;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javax.imageio.ImageIO;

/**
 *
 * @author PersoPc
 */
public  class Event_Service implements Iservice<Event> {
  Connection cnx;
    public Event_Service() {
       cnx = DatabaseConnection.getInstance().getConn();
       
    }
    
    Statement ste;
    PreparedStatement st;
    /**
     *
     * @return
     */
  

public ObservableList<String> get_List_events ()
    {
                ObservableList<String> list = FXCollections.observableArrayList();

            String requete = "select * from event ";
        try {
            PreparedStatement ps = cnx.prepareStatement(requete);
            ResultSet rs = ps.executeQuery();

            while (rs.next()) {
list.add(rs.getString("idCinema"));
            
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
       return list; 
    }

public int Affichertaille() throws SQLException {
        int i = 0;
        String requete = "SELECT * FROM `event` ";
        try {
            PreparedStatement ps = cnx.prepareStatement(requete);
            ResultSet rs = ps.executeQuery();

            while (rs.next()) {
               
                i++;

        
            }
        } catch (SQLException ex) {
            System.out.println(ex);
        }
        return i;

    }

    /**
     *
     * @param i
     * @return
     */
    public Event get_event(int i) {
        Event event = null;
        int nombre = 0;
        String requete = "SELECT * FROM `event`";
        try {
            PreparedStatement ps = cnx.prepareStatement(requete);
            ResultSet rs = ps.executeQuery();

            while (rs.next()) {

                if (i == nombre) {
                    event= new Event(rs.getInt("id"),rs.getDate("DateDeb"),rs.getDate("DateFin"),rs.getString("idContent"),rs.getString("idCinema"),rs.getString("Adresse"),rs.getString("Type"),rs.getString("Name"),rs.getString("image"),rs.getString("image_qr"));

                   
                }
                nombre++;

            }

        } catch (SQLException ex) {
            System.out.println(ex);
        }
        return event;

    }
 
    /**
     *
     * @param input
     * @return
     */
  

    /**
     *
     * @param q
     * @throws SQLException
     */
    
    /**
     *
     * @param t
     * @throws SQLException
     */
    
    public void Supprimer(int t) throws SQLException {
      
    }

    /**
     *
     * @param q
     * @param id
     * @throws SQLException
     */
    
    public void Modifier(Event q, int id) throws SQLException {

        }    


        public void Ajouter(Event q) throws SQLException, WriterException {
                      String code = getMd5(q.getAdresse());
                   String imageqr = code + ".png";              
                q.setImage_qr(imageqr);
             QRCodeWriter qrCodeWriter = new QRCodeWriter();
            String data = "Adresse : "+ q.getAdresse()+"<br> Merci pour votre confiance &#128525;";
            int width = 300;
            int height = 300;
            
            BufferedImage bufferedImage = null;
            try {
              BitMatrix byteMatrix = qrCodeWriter.encode(data,BarcodeFormat.QR_CODE, width, height);
      
                bufferedImage = new BufferedImage(width, height, BufferedImage.TYPE_INT_RGB);
                bufferedImage.createGraphics();
                
                Graphics2D image = (Graphics2D) bufferedImage.getGraphics();
                image.setColor(java.awt.Color.WHITE);
                image.fillRect(0, 0, width, height);
                image.setColor(java.awt.Color.BLACK);
                
                for (int i = 0; i < height; i++) {
                    for (int j = 0; j < width; j++) {
                        if (byteMatrix.get(i, j)) {
                            image.fillRect(i, j, 1, 1);
                        }
                    }
                }
                if (ImageIO.write(bufferedImage, "png", new File("C:/xampp/htdocs/artlife/web/uploads/images/qrproduit/"+code+".png")))
            {                                       
                System.out.println("-- saved");
            }
                System.out.println("QR created successfully....");
                
            } catch (WriterException ex) {
              System.out.println(ex); 
            } catch (IOException ex) {
                System.out.println(ex);   }  
            
            
        String query ="INSERT INTO `event`( `Name`, `idContent`, `idCinema`, `DateDeb`, `Type`, `DateFin`, `Adresse`, `image`, `image_qr`) VALUES ('"+q.getName()+"','"+q.getIdContent()+"','"+q.getIdCinema()+"','"+q.getDateDeb()+"','"+q.getType()+"','"+q.getDateFin()+"','"+q.getAdresse()+"','"+q.getImage()+"','"+q.getImage_qr()+"';";
                        System.out.println(q.toString());
         
        
        try {
            st = cnx.prepareStatement(query);
            
               /* st.setString(1,q.getName());
                st.setString(2,q.getIdContent());
                st.setString(3,q.getIdCinema());
                st.setDate(4,q.getDateDeb());
                st.setString(5,q.getType());
                st.setDate(6,q.getDateFin());
                st.setString(7,q.getAdresse());
                st.setString(8,q.getImage());
              st.setString(9,q.getImage_qr());*/

                st.executeUpdate();

        } catch (SQLException ex) {
            Logger.getLogger(Event_Service.class.getName()).log(Level.SEVERE, null, ex);
        }
        
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        
    
}
public static String getMd5(String input) 
    { 
        try { 
  
            // Static getInstance method is called with hashing MD5 
            MessageDigest md = MessageDigest.getInstance("MD5"); 
  
            // digest() method is called to calculate message digest 
            //  of an input digest() return array of byte 
            byte[] messageDigest = md.digest(input.getBytes()); 
  
            // Convert byte array into signum representation 
            BigInteger no = new BigInteger(1, messageDigest); 
  
            // Convert message digest into hex value 
            String hashtext = no.toString(16); 
            while (hashtext.length() < 32) { 
                hashtext = "0" + hashtext; 
            } 
            return hashtext; 
        }  
  
        // For specifying wrong message digest algorithms 
        catch (NoSuchAlgorithmException e) { 
            throw new RuntimeException(e); 
        } 
    }        

    @Override
    public void add(Event t) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public List<Event> read() throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void update(Event t) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void delete(int a) throws SQLException {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

   

    /**
     *
     * @param q
     * @throws SQLException
     */


  
    /**
     *
     * @return
     * @throws SQLException
     */
  




    
}


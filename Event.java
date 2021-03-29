/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Movie;

import java.sql.Date;

/**
 *
 * @author PersoPc
 */
public class Event {
    public int id;
    public Date DateDeb;
    public Date DateFin;
    public String idContent;
    public String idCinema;
    public String Adresse;
    public String Type;
    public String Name;
    public String image;
    public String image_qr;

    public Event(int id, Date DateDeb, Date DateFin, String idContent, String idCinema, String Adresse, String Type, String Name, String image, String image_qr) {
        this.id = id;
        this.DateDeb = DateDeb;
        this.DateFin = DateFin;
        this.idContent = idContent;
        this.idCinema = idCinema;
        this.Adresse = Adresse;
        this.Type = Type;
        this.Name = Name;
        this.image = image;
        this.image_qr = image_qr;
    }

    public String getImage_qr() {
        return image_qr;
    }

    public void setImage_qr(String image_qr) {
        this.image_qr = image_qr;
    }

    public Event(int id, Date DateDeb, Date DateFin, String idContent, String idCinema, String Adresse, String Type, String Name, String image) {
        this.id = id;
        this.DateDeb = DateDeb;
        this.DateFin = DateFin;
        this.idContent = idContent;
        this.idCinema = idCinema;
        this.Adresse = Adresse;
        this.Type = Type;
        this.Name = Name;
        this.image = image;
    }

    Event(String idCinema, String Adresse) {
 this.idCinema = idCinema;
        this.Adresse = Adresse;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public Date getDateDeb() {
        return DateDeb;
    }

    public void setDateDeb(Date DateDeb) {
        this.DateDeb = DateDeb;
    }

    public Date getDateFin() {
        return DateFin;
    }

    public void setDateFin(Date DateFin) {
        this.DateFin = DateFin;
    }

    public String getIdContent() {
        return idContent;
    }

    public void setIdContent(String idContent) {
        this.idContent = idContent;
    }

    public String getIdCinema() {
        return idCinema;
    }

    public void setIdCinema(String idCinema) {
        this.idCinema = idCinema;
    }

    public String getAdresse() {
        return Adresse;
    }

    public void setAdresse(String Adresse) {
        this.Adresse = Adresse;
    }

    public String getType() {
        return Type;
    }

    public void setType(String Type) {
        this.Type = Type;
    }

    public String getName() {
        return Name;
    }

    public void setName(String Name) {
        this.Name = Name;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
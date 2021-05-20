/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.entities;

import java.util.Date;

/**
 *
 * @author PersoPc
 */
public class Evenement {
    private int id;
    private String Name;
    private String idContent;
    private String idCinema;
    private Date Datedeb;
    private String Type;
    private Date DateFin;
    private String Adresse;
    private String image;
    private String image_qr;

    public Evenement( String Name, String idContent, String idCinema, Date Datedeb, String Type, Date DateFin, String Adresse, String image, String image_qr) {
     
        this.Name = Name;
        this.idContent = idContent;
        this.idCinema = idCinema;
        this.Datedeb = Datedeb;
        this.Type = Type;
        this.DateFin = DateFin;
        this.Adresse = Adresse;
        this.image = image;
        this.image_qr = image_qr;
    }

    public Evenement(String Name, String idContent, String idCinema, Date Datedeb, String Type, Date DateFin, String Adresse, String image) {
this.Name = Name;
        this.idContent = idContent;
        this.idCinema = idCinema;
        this.Datedeb = Datedeb;
        this.Type = Type;
        this.DateFin = DateFin;
        this.Adresse = Adresse;
        this.image = image;    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getName() {
        return Name;
    }

    public void setName(String Name) {
        this.Name = Name;
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

    public Date getDatedeb() {
        return Datedeb;
    }

    public void setDatedeb(Date Datedeb) {
        this.Datedeb = Datedeb;
    }

    public String getType() {
        return Type;
    }

    public void setType(String Type) {
        this.Type = Type;
    }

    public Date getDateFin() {
        return DateFin;
    }

    public void setDateFin(Date DateFin) {
        this.DateFin = DateFin;
    }

    public String getAdresse() {
        return Adresse;
    }

    public void setAdresse(String Adresse) {
        this.Adresse = Adresse;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public String getImage_qr() {
        return image_qr;
    }

    public void setImage_qr(String image_qr) {
        this.image_qr = image_qr;
    }
    
    public Evenement() {
}
    

    
}

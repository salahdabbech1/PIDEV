/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projet.entite;

import java.sql.Date;

/**
 *
 * @author KARIMOOOO
 */
public class event {
    int id,idCinema,idContent;
    String Name, Type,Adresse,Image;

    public event(String Name) {
        this.Name = Name;
    }
   Date DateDeb, DateFin ;

   

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getIdCinema() {
        return idCinema;
    }

    public void setIdCinema(int idCinema) {
        this.idCinema = idCinema;
    }

    public int getIdContent() {
        return idContent;
    }

    public void setIdContent(int idContent) {
        this.idContent = idContent;
    }

    public String getType() {
        return Type;
    }

    public void setType(String Type) {
        this.Type = Type;
    }

    public String getAdresse() {
        return Adresse;
    }

    public void setAdresse(String Adresse) {
        this.Adresse = Adresse;
    }

    public String getImage() {
        return Image;
    }

    public void setImage(String Image) {
        this.Image = Image;
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

    
    @Override
    public String toString() {
        return "event{" + "id=" + id + ", idCinema=" + idCinema + ", idContent=" + idContent + ", Type=" + Type + ", Adresse=" + Adresse + ", Image=" + Image + ", DateDeb=" + DateDeb + ", DateFin=" + DateFin + '}';
    }
   
           
    
}

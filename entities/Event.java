/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entities;



import java.sql.Date;
import java.util.Objects;

/**
 *
 * @author PersoPc
 */

   public class Event {
    public int id;
    public Date DateDeb;
    public Date DateFin;
    public int idContent;
    public int idCinema;
    public String Adresse;
    public String Type;
    public String Name;

    public Event() {
    }



    
      
 
    public Event(Date datedeb, Date datefin, int idcontent, int idcinema, String adresse, String type, String name) {
        this.DateDeb = datedeb;
        this.DateFin = datefin;
        this.idContent = idcontent;
        this.idCinema = idcinema;
        this.Adresse = adresse;
        this.Type = type;
        this.Name = name;
    }

    public Event(int id, Date datedeb, Date datefin, int idcontent, int idcinema, String adresse, String type, String name) {
        this.id = id;
        this.DateDeb = datedeb;
        this.DateFin = datefin;
        this.idContent = idcontent;
        this.idCinema = idcinema;
        this.Adresse = adresse;
        this.Type = type;
        this.Name = name;
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

    public int getIdContent() {
        return idContent;
    }

    public void setIdContent(int idContent) {
        this.idContent = idContent;
    }

    public int getIdCinema() {
        return idCinema;
    }

    public void setIdCinema(int idCinema) {
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

    @Override
    public String toString() {
        return "Event{" + "id=" + id + ", DateDeb=" + DateDeb + ", DateFin=" + DateFin + ", idContent=" + idContent + ", idCinema=" + idCinema + ", Adresse=" + Adresse + ", Type=" + Type + ", Name=" + Name + '}';
    }
    





       
   }

 
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entite;

import java.time.LocalDate;
import java.util.Date;

 

/**
 *
 * @author KARIMOOOO
 */
public class ticket {
 private int id,idUser,idSalle,montant ;
 private LocalDate date;
    private String chaise,idCinema,idEvent;

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getIdUser() {
        return idUser;
    }

    public void setIdUser(int idUser) {
        this.idUser = idUser;
    }

    public String getIdCinema() {
        return idCinema;
    }

    public void setIdCinema(String idCinema) {
        this.idCinema = idCinema;
    }

     

    public int getIdSalle() {
        return idSalle;
    }

    public void setIdSalle(int idSalle) {
        this.idSalle = idSalle;
    }

    public String getIdEvent() {
        return idEvent;
    }

    public void setIdEvent(String idEvent) {
        this.idEvent = idEvent;
    }

    public int getMontant() {
        return montant;
    }

    public void setMontant(int montant) {
        this.montant = montant;
    }

    public LocalDate getDate() {
        return date;
    }

    public void setDate(LocalDate date) {
        this.date = date;
     
    }

    public String getChaise() {
        return chaise;
    }

    public void setChaise(String chaise) {
        this.chaise = chaise;
    }

     

    public ticket(int idUser,String idCinema,int idSalle,String idEvent,int montant,LocalDate date,String chaise) {
        this.idUser = idUser;
        this.idCinema = idCinema;   
        this.idSalle = idSalle;
        this.idEvent = idEvent;
        this.montant = montant;
        this.date = date;
        this.chaise = chaise;
    }

    public ticket(int id,int idUser,String idCinema,int idSalle,String idEvent,int montant,LocalDate date,String chaise) {
        this.id = id;
        this.idUser = idUser;
        this.idCinema = idCinema;   
        this.idSalle = idSalle;
        this.idEvent = idEvent;
        this.montant = montant;
        this.date = date;
        this.chaise = chaise;
 
    }

    @Override
    public String toString() {
        return "ticket{" + "id=" + id + ", idUser=" + idUser +", idCinema=" + idCinema +", idSalle=" + idSalle +", idEvent=" + idEvent +", montant=" + montant +", date=" + date + ", chaise=" + chaise + '}';
    }
    
    
}


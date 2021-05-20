/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.entities;


import java.util.Date;

/**
 *
 * @author KARIMOOOO
 */
public class Ticket {
  private int id,idSalle,montant ;
 private Date date;
    private String chaise,idCinema,idEvent,idUser;

    public Ticket() {
        
    }

    public Ticket(int idSalle, int montant, String chaise, String idCinema, String idEvent, String idUser) {
        this.idSalle = idSalle;
        this.montant = montant;
        this.chaise = chaise;
        this.idCinema = idCinema;
        this.idEvent = idEvent;
        this.idUser = idUser;
    }

    
    

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getIdUser() {
        return idUser;
    }

    public void setIdUser(String idUser) {
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

    public Date getDate() {
        return date;
    }

    public void setDate(Date date) {
        this.date = date;
     
    }

    public String getChaise() {
        return chaise;
    }

    public void setChaise(String chaise) {
        this.chaise = chaise;
    }

     

    public Ticket(String idUser,String idCinema,int idSalle,String idEvent,int montant,Date date,String chaise) {
        this.idUser = idUser;
        this.idCinema = idCinema;   
        this.idSalle = idSalle;
        this.idEvent = idEvent;
        this.montant = montant;
        this.date = date;
        this.chaise = chaise;
    }

    public Ticket(int id,String idUser,String idCinema,int idSalle,String idEvent,int montant,Date date,String chaise) {
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

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
public class Reclamation {
          private int id;
           private String Titre;
      private String Description;
      private Date datere;
      private String traiter;
      
 
      public Reclamation(String Titre, String Description, Date datere, String traiter) {
        this.Titre = Titre;
        this.Description = Description;
        this.datere = datere;
        this.traiter = traiter;
        

      }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getTitre() {
        return Titre;
    }

    public void setTitre(String Titre) {
        this.Titre = Titre;
    }

    public String getDescription() {
        return Description;
    }

    public void setDescription(String Description) {
        this.Description = Description;
    }

    public Date getDatere() {
        return datere;
    }

    public void setDatere(Date datere) {
        this.datere = datere;
    }

    public String getTraiter() {
        return traiter;
    }

    public void setTraiter(String traiter) {
        this.traiter = traiter;
    }

   
    public Reclamation() {
    }
      
}
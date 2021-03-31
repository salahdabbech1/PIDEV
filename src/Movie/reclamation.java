/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Movie;

import java.sql.Date;
import java.time.LocalDate;

/**
 *
 * @author PersoPc
 */
public class reclamation {
    int id;
    String Titre;
    String Description;
    String traiter;
    Date   datere;

    

    public reclamation(int id, String Titre, String Description, String traiter, Date datere) {
         this.id = id;
        this.Titre = Titre;
        this.Description = Description;
        this.traiter = traiter;
        this.datere = datere;
    }

    reclamation(String Titre, String Description,Date datere) {
         this.Titre = Titre;
        this.Description = Description;
        this.datere = datere;
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

    public String getTraiter() {
        return traiter;
    }

    public void setTraiter(String traiter) {
        this.traiter = traiter;
    }

    public Date getDatere() {
        return datere;
    }

    public void setDatere(Date datere) {
        this.datere = datere;
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
}

  
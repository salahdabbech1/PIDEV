/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entities;

/**
 *
 * @author PersoPc
 */
public class reclamation {

    public int id;
    public String Titre;
    public String Description;



    public reclamation() {
 
    }
    public reclamation(String Titre, String Description) {
        
        this.Titre = Titre;
        
        this.Description = Description;
        
    }

    public reclamation(int id, String Titre,String Description) {
        this.id = id;
        this.Titre = Titre;
        this.Description = Description;
       
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
   
    
    @Override
    public String toString() {
        return "reclamation{" + "id=" + id + ", Titre=" + Titre + ", Description=" + Description + '}';
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    



}
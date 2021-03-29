/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entite;

/**
 *
 * @author KARIMOOOO
 */
public class cinema {
     private int id;
    private String name,nbsalle,adresse ,image;

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getNbsalle() {
        return nbsalle;
    }

    public void setNbsalle(String nbsalle) {
        this.nbsalle = nbsalle;
    }

    public String getAdresse() {
        return adresse;
    }

    public void setAdresse(String adresse) {
        this.adresse = adresse;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public cinema(String name) {
        this.name = name;
    }

    @Override
    public String toString() {
        return "cinema{" + "id=" + id + ", name=" + name + ", nbsalle=" + nbsalle + ", adresse=" + adresse + ", image=" + image + '}';
    }

     

   
    
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entite;

/**
 *
 * @author KARIMOOOO
 */
public class cinema {
    private int id;
    private String name;
    private int nb_salle;
    private String adresse;
    private String img;
 public cinema(int id, String name, int nb_salle, String adresse, String img) {
        this.id = id;
        this.name = name;
        this.nb_salle = nb_salle;
        this.adresse = adresse;
        this.img = img;
    }

    public cinema(String name, int nb_salle, String adresse, String img) {
        this.name = name;
        this.nb_salle = nb_salle;
        this.adresse = adresse;
        this.img = img;
    }
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

    public int getNb_salle() {
        return nb_salle;
    }

    public void setNb_salle(int nb_salle) {
        this.nb_salle = nb_salle;
    }

    public String getAdresse() {
        return adresse;
    }

    public void setAdresse(String adresse) {
        this.adresse = adresse;
    }

    public String getImg() {
        return img;
    }

    public void setImg(String img) {
        this.img = img;
    }

   

    @Override
    public String toString() {
        return "cinema{" + "id=" + id + ", name=" + name + ", nb_salle=" + nb_salle + ", adresse=" + adresse + ", img=" + img + '}';
    }
    
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package crudaziz;

import java.util.Date;

/**
 *
 * @author HP
 */
public class Musician {
     private int id;
    private String name;
    private String prenom;
    private Date born;
    private String description;
    private String image;

    public Musician(int id, String name, String prenom, Date born, String description, String image) {
        this.id = id;
        this.name = name;
        this.prenom = prenom;
        this.born = born;
        this.description = description;
        this.image = image;
    }

    public void setId(int id) {
        this.id = id;
    }

    public void setName(String name) {
        this.name = name;
    }

    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }

    public void setBorn(Date born) {
        this.born = born;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public int getId() {
        return id;
    }

    public String getName() {
        return name;
    }

    public String getPrenom() {
        return prenom;
    }

    public Date getBorn() {
        return born;
    }

    public String getDescription() {
        return description;
    }

    public String getImage() {
        return image;
    }

    public Musician(int id) {
        this.id = id;
    }

    public Musician() {
    }
    
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.entities;

import java.util.Date;

/**
 *
 * @author bouyo
 */
public class Factor {
    int id;
    String name;
    Date born;
    String description;
    String image;
    String imageb;

    public Factor(int id, String name, Date born, String description, String image, String imageb) {
        this.id = id;
        this.name = name;
        this.born = born;
        this.description = description;
        this.image = image;
        this.imageb = imageb;
    }

    public Factor(String name, Date born, String description, String image, String imageb) {
        this.name = name;
        this.born = born;
        this.description = description;
        this.image = image;
        this.imageb = imageb;
    }

    public Factor() {
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

    public Date getBorn() {
        return born;
    }

    public void setBorn(Date born) {
        this.born = born;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public String getImageb() {
        return imageb;
    }

    public void setImageb(String imageb) {
        this.imageb = imageb;
    }
    
    
    
    
    
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.entities;

import java.util.Date;





/**
 *
 * @author ahmed
 */
public class Tactor {
    private Long id;
    private String name;
    private Date born;
    private String description;
    private String image;
    
    public Tactor(Long id, String name, Date born, String description, String image) {
        this.id = id;
        this.name = name;
        this.born = born;
        this.description = description;
        this.image = image;
     
    }

    public Tactor(String name, Date born, String description, String image) {
        this.name = name;
        this.born = born;
        this.description = description;
        this.image = image;
    }

    public Tactor() {
     
        
    }

  

 

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
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
    
    
    
}

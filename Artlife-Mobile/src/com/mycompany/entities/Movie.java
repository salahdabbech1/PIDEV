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
public class Movie {
    
    /*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    private int id;
    private String name;
    private String Genre;
    private String image;
    private String imageb;
    private String trailer;
    private String description;
    private String director;
    private Date rdate;

    public Movie(String name, String Genre, String image, String imageb, String trailer, String description, String director, Date rdate) {
        this.name = name;
        this.Genre = Genre;
        this.image = image;
        this.imageb = imageb;
        this.trailer = trailer;
        this.description = description;
        this.director = director;
        this.rdate = rdate;
    }
    
    

    public Movie(int id, String name, String Genre, String image, String trailer, Date rdate) {
        this.id = id;
        this.name = name;
        this.Genre = Genre;
        this.image = image;
        this.trailer = trailer;
        this.rdate = rdate;
    }
    public Movie(String name, String Genre, String image, String imageb, String trailer, Date rdate) {
        this.name = name;
        this.Genre = Genre;
        this.image = image;
        this.imageb = imageb;
        this.trailer = trailer;
        this.rdate = rdate;
    }

    
    public Movie(int id, String name, String Genre, String image, Date rdate) {
        this.id = id;
        this.name = name;
        this.Genre = Genre;
        this.image = image;
        this.rdate = rdate;
    }
    public Movie( String name, String Genre, Date rdate) {
        this.name = name;
        this.Genre = Genre;
        this.rdate = rdate;
    }
    
    

    public Movie() {
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

    public String getGenre() {
        return Genre;
    }

    public void setGenre(String Genre) {
        this.Genre = Genre;
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

    public String getTrailer() {
        return trailer;
    }

    public void setTrailer(String trailer) {
        this.trailer = trailer;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getDirector() {
        return director;
    }

    public void setDirector(String director) {
        this.director = director;
    }

    public Date getRdate() {
        return rdate;
    }

    public void setRdate(Date rdate) {
        this.rdate = rdate;
    }

    @Override
    public String toString() {
        return "Movie{" + "id=" + id + ", name=" + name + ", Genre=" + Genre + ", image=" + image + ", imageb=" + imageb + ", trailer=" + trailer + ", description=" + description + ", director=" + director + ", rdate=" + rdate + '}';
    }
    

    

    
    
}

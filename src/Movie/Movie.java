/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Movie;

import java.util.Date;
import javafx.scene.control.Button;

/**
 *
 * @author bouyo
 */
public class Movie {
    private int id;
    private String name;
    private String Genre;
    private String image;
    private Date rdate;

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

    public Date getRdate() {
        return rdate;
    }

    public void setRdate(Date rdate) {
        this.rdate = rdate;
    }

    

    
    
    
    
    
}

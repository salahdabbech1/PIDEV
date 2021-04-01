/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entite;

import java.time.LocalDate;
import java.util.Date;
import javafx.scene.control.ComboBox;

/**
 *
 * @author bouyo
 */
public class Theatre {
    private Long id;
    private String name;
    private Tactor tactor;
    private String Genre;
    private LocalDate rdate;
   private String image;
   private String trailer;
   private String description;
   private String poster;
  

    public Theatre(Long id, String name, Tactor tactor, String Genre, LocalDate rdate,String image, String trailer,String description,String poster) {
        this.id = id;
        this.name = name;
        this.tactor = tactor;
        this.Genre = Genre;
        this.rdate = rdate;
        this.image = image;
        this.trailer = trailer;
        this.description=description;
        this.poster=poster;
        
    }
    public Theatre( String name, Tactor tactor, String Genre, LocalDate rdate,String image) {
        this.name = name;
        this.tactor = tactor;
        this.Genre = Genre;
        this.rdate = rdate;
        this.image = image;
    }

 public String getPoster() {
        return poster;
    }

    public void setPoster(String poster) {
        this.poster = poster;
    }
public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
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
     public String getTrailer() {
        return trailer;
    }

    public void setTrailer(String trailer) {
        this.trailer = trailer;
    }

    public Tactor getTactor() {
        return tactor;
    }

    public void setTactor(Tactor tactor) {
        this.tactor = tactor;
    }

    public String getGenre() {
        return Genre;
    }

    public void setGenre(String Genre) {
        this.Genre = Genre;
    }

    public LocalDate getRdate() {
        return rdate;
    }

    public void setRdate(LocalDate rdate) {
        this.rdate = rdate;
    }
      public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    @Override
    public String toString() {
        return "Theatre{" + "id=" + id + ", name=" + name + ", tactor=" + tactor.getName() + ", Genre=" + Genre + ", rdate=" + rdate +  ", Trailer=" + trailer +", description=" + description +", poster=" + poster +'}';
    }

    
    
    
    
    
}

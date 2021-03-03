/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entité;

import java.time.LocalDate;
import java.util.Date;

/**
 *
 * @author bouyo
 */
public class Theatre {
    private Long id;
    private String name;
    private Long idTactor;
    private String Genre;
    private LocalDate rdate;

    public Theatre(Long id, String name, Long idTactor, String Genre, LocalDate rdate) {
        this.id = id;
        this.name = name;
        this.idTactor = idTactor;
        this.Genre = Genre;
        this.rdate = rdate;
    }
    public Theatre( String name, Long idTactor, String Genre, LocalDate rdate) {
        this.name = name;
        this.idTactor = idTactor;
        this.Genre = Genre;
        this.rdate = rdate;
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

    public Long getidTactor() {
        return idTactor;
    }

    public void setidTactor(Long idTactor) {
        this.idTactor = idTactor;
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

    @Override
    public String toString() {
        return "Theatre{" + "id=" + id + ", name=" + name + ", idTactor=" + idTactor + ", Genre=" + Genre + ", rdate=" + rdate + '}';
    }

    
    
    
    
    
}

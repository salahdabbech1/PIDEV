/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.entities;

/**
 *
 * @author KARIMOOOO
 */
public class salle {
    private int id;
    private int id_cine;
    private int nb_chaise;

    public salle() {
        
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getId_cine() {
        return id_cine;
    }

    public void setId_cine(int id_cine) {
        this.id_cine = id_cine;
    }

    public int getNb_chaise() {
        return nb_chaise;
    }

    public void setNb_chaise(int nb_chaise) {
        this.nb_chaise = nb_chaise;
    }

    public salle(int id, int id_cine, int nb_chaise) {
        this.id = id;
        this.id_cine = id_cine;
        this.nb_chaise = nb_chaise;
    }

    public salle(int id, int id_cine) {
          this.id = id;
        this.id_cine = id_cine;
      
    }

    @Override
    public String toString() {
        return "salle{" + "id=" + id + ", id_cine=" + id_cine + ", nb_chaise=" + nb_chaise + '}';
    }
    
}

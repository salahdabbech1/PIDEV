/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package crudaziz;

/**
 *
 * @author HP
 */
public class Concert {
    
int id;
String name;
String idmusician;
String musics;
String image;

    @Override
    public String toString() {
        return "Concert{" + "id=" + id + ", name=" + name + ", idmusician=" + idmusician + ", musics=" + musics + ", image=" + image + '}';
    }

    public Concert(String idmusician) {
        this.idmusician = idmusician;
    }

    public void setId(int id) {
        this.id = id;
    }

    public void setName(String name) {
        this.name = name;
    }

    public void setIdmusician(String idmusician) {
        this.idmusician = idmusician;
    }

    public void setMusics(String musics) {
        this.musics = musics;
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

    public String getIdmusician() {
        return idmusician;
    }

    public String getMusics() {
        return musics;
    }

    public String getImage() {
        return image;
    }

    public Concert(int id, String name, String idmusician, String musics, String image) {
        this.id = id;
        this.name = name;
        this.idmusician = idmusician;
        this.musics = musics;
        this.image = image;
    }
    
}
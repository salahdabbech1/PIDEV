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
public class User {
   private int id,role;
    private String name, password,email,image;

    public User() {
       
    }

   
    

    

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getRole() {
        return role;
    }

    public void setRole(int role) {
        this.role = role;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    
     

   

    public User(String name, String password,String email,int role,String image) {
          this.name = name;
        this.password = password;
        this.email = email;
        this.role=role;
        this.image=image;
    }

    public User(int id, String name, String password,String email,int role,String image) {
        this.id = id;
        this.name = name;
        this.password = password;
        this.email = email;
        this.role=role;
        this.image=image;
    }
public User(int id,String name, String password,String email) {
            this.id = id;

         this.name = name;
        this.password = password;
        this.email = email;
    }
public User(int id,String name, String password,String email,String image) {
     this.id = id;

         this.name = name;
        this.password = password;
        this.email = email;
        this.image=image;
     }
 public User(String name, String password, String email) {
      this.name = name;
        this.password = password;
        this.email = email;
     }

    @Override
    public String toString() {
        return "user{" + "id=" + id + ", name=" + name + ", password=" + password +", email=" + email +", role=" + role +", image=" + image + '}';
    }
    
    
}


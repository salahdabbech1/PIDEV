/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.gui;

import com.codename1.io.Preferences;

/**
 *
 * @author Lenovo
 */
public class SessionManager {
    
    public static Preferences pref ; // 3ibara memoire sghira nsajlo fiha data 
    
    
    
    // hethom données ta3 user lyt7b tsajlhom fi session  ba3d login 
    private static int id ; 
    private static String Name ; 
    private static String passowrd ;
    private static String email; 
    private static int role; 
    private static String image;

    public static Preferences getPref() {
        return pref;
    }

    public static void setPref(Preferences pref) {
        SessionManager.pref = pref;
    }

    public static int getId() {
        return pref.get("id",id);// kif nheb njib id user connecté apres njibha men pref 
    }

    public static void setId(int id) {
        pref.set("id",id);//nsajl id user connecté  w na3tiha identifiant "id";
    }

    public static String getName() {
        return pref.get("username",Name);
    }

    public static void setName(String userName) {
         pref.set("username",userName);
    }

    public static String getEmail() {
        return pref.get("email",email);
    }

    public static void setEmail(String email) {
         pref.set("email",email);
    }

    public static String getPassowrd() {
        return pref.get("passowrd",passowrd);
    }

    public static void setPassowrd(String passowrd) {
         pref.set("passowrd",passowrd);
    }
    public static int getRole() {
        return pref.get("role",role);
    }

    public static void setRole(int role) {
         pref.set("role",role);
    }
    public static String getImage() {
        return pref.get("image",image);
    }

    public static void setImage(String image) {
         pref.set("image",image);
    }
    
    
    
    
    
    
}

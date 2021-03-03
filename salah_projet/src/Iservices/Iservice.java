/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Iservices;

import java.sql.SQLException;
import java.util.List;

/**
 *
 * @author KARIMOOOO
 * @param <T>
 */
public interface Iservice<T> {
    public abstract void add (T t) throws SQLException;
    List<T> read() throws SQLException;
    void update(T t) throws SQLException;
    void delete(int a) throws SQLException;
    
}

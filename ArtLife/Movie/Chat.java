/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Movie;

import java.sql.Date;

/**
 *
 * @author bouyo
 */
public class Chat {
    int id;
    int idsender;
    String content;
    Date time;

    public Chat(int id, int idsender, String content, Date time) {
        this.id = id;
        this.idsender = idsender;
        this.content = content;
        this.time = time;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getIdsender() {
        return idsender;
    }

    public void setIdsender(int idsender) {
        this.idsender = idsender;
    }

    public String getContent() {
        return content;
    }

    public void setContent(String content) {
        this.content = content;
    }

    public Date getTime() {
        return time;
    }

    public void setTime(Date time) {
        this.time = time;
    }

    @Override
    public String toString() {
        return "Chat{" + "id=" + id + ", idsender=" + idsender + ", content=" + content + ", time=" + time + '}';
    }
    
    
    
}

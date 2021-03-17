/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entité;

/**
 *
 * @author ahmed
 */
public class TheatreActors {
 
     
     private Tactor tactor;
     private Long theatreId;
    public TheatreActors(Tactor tactor,Long theatreId) {
      
        this.theatreId = theatreId;
        this.tactor = tactor;
    }
    
      public TheatreActors() {
      
      
    }


   
    public Long getTheatreId() {
        return theatreId;
    }

   
    public void setTheatreId(Long theatreId) {
        this.theatreId = theatreId;
    }
      public Tactor getTactor() {
        return tactor;
    }

    public void setTactor(Tactor tactor) {
        this.tactor = tactor;
    }
     @Override
    public String toString() {
        return "TheatreActors{" + "tactor=" + tactor.getId()+ ", theatreId=" + theatreId + '}';
    }
}

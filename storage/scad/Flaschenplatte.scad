module Flaschenplatte(radius, cap){
  difference(){
      circle(r=9.5);
      for (i = [0:(cap-1)]) {
          translate([9.5*sin(i*60),9.5*cos(i*60),0])
          circle(r=radius);
      }
      //Achsendurchmesser
      circle(r=0.5);
  }
}

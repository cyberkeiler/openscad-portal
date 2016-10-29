include <arc.scad>;
 //Dokumentations Bild
/*translate([50,0])
Fuehrungsplatte3D(44.4,70,d=19.5,r=3.5,n=4,t=1.2);
Fuehrungsplatte3D(44.4,70,d=19.5,r=1.75,n=4, t=1.2);
/* */

//Erstellt den Zuschnitt der Fuehrungsplatte
// w: Breite der Platte
// h: Höhe der Platte
// r: Radius der Führungsschiene
// d: Abstand der Trommeln
// t: Plattenstärke
module Fuehrungsplatte3D(w,h,r,d,t,n, off=0){
  color("Purple")
  linear_extrude(height = t, center = true, convexity = 10, twist = 0)
  Fuehrungsplatte(w,h,r,d,n,off);
}

//Erstellt den Zuschnitt der Fuehrungsplatte
// w: Breite der Platte
// h: Höhe der Platte
// r: Radius der Führungsschiene
// d: Abstand der Trommeln
module Fuehrungsplatte(w,h,r,d,n, off=0){
  off_x = d/2*sin(off);
  off_y = d*cos(off);
  difference(){
      square([w,h]);
      for (i = [0:(n-1)]) {
          translate([w/2+off_x*cos(180*i),h-d*(n-1.5-i)*cos(off)]){
            rotate([0,i*180])
            nut_arc(180+off*2,d/2,r, start=-off);
            //Bohrloch M12
            circle(r=0.6);
          }
      }
  }
}

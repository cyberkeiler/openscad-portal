include <zahnräder.scad>
module Barrel(cap, r1, r2){
    rotate([90,0,0]){
        //Gewindestange
        color("orange")
        translate([0,0,-7])
        cylinder(h=33, r=0.5);
        // Endmutter
        color("red")
        translate([0,0,-6.28])
          rotate([0,0,90])
          mutter(10);
        //Zahnrad
        color("green")
        translate([0,0,-4.44])
        rotate([0,0,0.5+33.556])
          zahnrad36();
        //Flaschenrad groß
        translate([0,0,-2.68])
        linear_extrude(height = 2, center = true, convexity = 10, twist = 0)
        Flaschenplatte(r1, cap);
        // Endmutter
        color("red")
          translate([0,0,-1.9])
            rotate([0,0,90])
            mutter(10);

            // Endmutter
            color("red")
              translate([0,0,14.16])
                rotate([0,0,90])
                mutter(10);
        //Flaschenrad klein
        translate([0,0,16.16])
        linear_extrude(height = 2, center = true, convexity = 10, twist = 0)
          Flaschenplatte(r2, cap);


          // Endmutter
          color("red")
          translate([0,0,17.16])
            rotate([0,0,90])
            mutter(10);





    }
}

module nut_arc(deg,r,r2,start=0){
    rotate(-start)
    union(){
        intersection(){
            difference(){
                circle(r=r+r2);
                circle(r=r-r2);
            }
            tortenpeace(deg,r*2);
        }
        translate([0,r])
        circle(r=r2);
        translate([r*sin(deg),r*cos(deg)])
        circle(r=r2);
    }
}


module tortenpeace(deg,r){
    polygon(
  points=[ [0,0],
    [r*sin(0), r*cos(0)],
    [r*sin(1*deg/4), r*cos(1*deg/4)],
    [r*sin(2*deg/4), r*cos(2*deg/4)],
    [r*sin(3*deg/4), r*cos(3*deg/4)],
    [r*sin(deg), r*cos(deg)]
    ], paths = [[0,1,2,3,4,5]]
 );
}

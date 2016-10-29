
module nut_arc3D(_deg,_h,_r,_r2){
    union(){
        intersection(){
            difference(){
                cylinder(h=_h,r=_r+_r2);
                cylinder(h=_h,r=_r-_r2);
            }
            tortenpeace(_deg,_h,_r*2);
        }
        translate([0,_r,0])
        cylinder(h=_h,r=_r2);
        translate([_r*sin(_deg),_r*cos(_deg),0])
        cylinder(h=_h,r=_r2);
    }
}


module tortenpeace3D(_deg,_h,_r){
    polyhedron(
  points=[ [0,0,0],[0,0,_h],
    [_r*sin(0),_r*cos(0),0],[_r*sin(0),_r*cos(0),_h],
    [_r*sin(1*_deg/4),_r*cos(1*_deg/4),0],[_r*sin(1*_deg/4),_r*cos(1*_deg/4),_h],
    [_r*sin(2*_deg/4),_r*cos(2*_deg/4),0],[_r*sin(2*_deg/4),_r*cos(2*_deg/4),_h],
    [_r*sin(3*_deg/4),_r*cos(3*_deg/4),0],[_r*sin(3*_deg/4),_r*cos(3*_deg/4),_h],
    [_r*sin(_deg),_r*cos(_deg),0],[_r*sin(_deg),_r*cos(_deg),_h],
    ], faces = [[1,0,2],[1,2,3],
    [3,2,4],[3,4,5],
    [5,4,6],[5,6,7],
    [7,6,8],[7,8,9],
    [9,8,10],[9,10,11],
    [11,10,0],[11,0,1],
    //Unterseite
    [2,0,4], [4,0,6], [6,0,8], [8,0,10],
    [1,3,5], [1,5,7], [1,7,9], [1,9,11]]
 );
}

$mate_r1 = 3.5;       //radius of bottle Body
$mate_r2 = 1.75;      //radius of bottle neck

$Barrel_r= 9.5;      //radius of one barrel / Trommel
$Barrel_cap = 6;     //amount of bottles per barrel
$Barrel_stages = 4;  //amount of barrels per tower
$Barrel_distance = 19.5; //Barrel Distance (Gear mid radius)

$Barrel_offset = 33.556;  //Barrel offset in degrees!

$Tower_width = 44.4;
$Tower_height = 65;

echo ("MateTower v0.1");
echo ("Mindesthöhe: ");
echo (($Barrel_distance*$Barrel_stages*cos($Barrel_offset)));

$Barrel_offset_x = $Barrel_distance/2*sin($Barrel_offset);

include <arc.scad>;
include <Barrel.scad>;
include <mutter.scad>;
include <Flaschenplatte.scad>;
include <Fuehrungsplatte.scad>;

//Trommeln
for (l = [0:($Barrel_stages-1)]) {
  translate([$Barrel_offset_x*cos(180*l), 0, $Tower_height-$Barrel_distance*($Barrel_stages-0.5-l)*cos($Barrel_offset)])
  Barrel($Barrel_cap, $mate_r1, $mate_r2);
}

//Führungsplatte hinten
translate([-$Tower_width/2, 0,0])
rotate([90,0,0])
Fuehrungsplatte3D( w=$Tower_width, h=$Tower_height, r=$mate_r1,d=$Barrel_distance,t=2, n=$Barrel_stages+1, off=$Barrel_offset);

//Führungsplatte vorne
translate([-$Tower_width/2,-19.1,0])
rotate([90,0,0])
Fuehrungsplatte3D( w=$Tower_width, h=$Tower_height, r=$mate_r2,d=$Barrel_distance,t=2,n=$Barrel_stages+1, off=$Barrel_offset);

//Plexiglas Frontplatte
color([0.8,0.8,1,0.5])
translate([-$Tower_width/2,-20.3, 0])
cube([$Tower_width, 0.2, $Tower_height]);

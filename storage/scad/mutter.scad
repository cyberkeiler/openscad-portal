module mutter(M){
  difference(){
    if(M == 6){$r=10.89/2; $h=0.5;}
    else if(M == 6){$r=10.89/2; $h=0.5;}
    else if(M == 7){$r=12.12/2; $h=0.55;}
    else if(M == 8){$r=14.20/2; $h=0.65;}
    else if(M == 10){$r=18.72/2; $h=0.84;}
    else if(M == 12){$r=20.88/2; $h=1.0;}
    //else{ echo "[mutter()] M"+M+" ist a unknown DIN934 standard";}

    cylinder($fn=6, r=$r, h=$h);        //Außenkanten
    cylinder($fn=12, r=(M/20), h=$h*2); //Gewinde
  }
}

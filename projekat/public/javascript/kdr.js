function calculate(){
    var x,y,z;

    x = Number(document.kdr.kill.value);

    y = Number(document.kdr.death.value);

    z = x / y;


    if( y == 0  ){
        z = x ;
    }
    else if ( z < 0){
        alert("Please enter correct number!");
    }
    
    document.kdr.ratio.value = z.toFixed(2);
}

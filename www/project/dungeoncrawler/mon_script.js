var map_width;
var map_height;
var resolution;
var ship;
var canva;
var contexte;
var x_shoot;
var nbDraw = 0;
var keys = {};
var balles = [];
var seuil_ovni = 200;

var cadence_tir = 50;// delai entre les tir (ms)
var shoot_possible = true;
var vitesse_balles = 32;// nbr pixel/frame

var ovnis = [];

$(document).ready(function(){



    resolution = 32; //resolution de l'image
    canva = $('#map')[0];// objet canva 
    contexte = canva.getContext('2d'); //contexte canva (ex : contexte.drawImage() )
    map_width = canva.width // largeur du canva (attention pas la taille css, la taille html)
    map_height = canva.height // hauteur du canva  (attention pas la taille css, la taille html)
    
    ship = {'x': (map_width/2)-(resolution/2), 'y': (map_height-resolution), 'img': $('#ship')[0]};
    //console.log('ship.x : ', ship.x , 'ship.y : ', ship.y,$('#map').width()," ", canva.width);

    console.log('mp_width : ', map_width);
/*
    for(var i = 0; i<50; i++){
        setTimeout(function(){
            console.log('create_ovni');
            create_ovni();
        }, 500 );
    }
*/
    draw();
    $(document).keydown(function(event){
        keys[event.key] = true; // crée ou update, ex : keys['ArrowRight'] = true
    });
    $(document).keyup(function(event){
        keys[event.key] = false;
    });

    
}); 

function draw(){

    nbDraw++;

    if(nbDraw % 500 == 0 && seuil_ovni > 25){
        seuil_ovni-=25;
    }

    if(nbDraw % seuil_ovni == 0) create_ovni();
  
    // ship
    contexte.clearRect(0, 0, map_width, map_height); //ici on efface
    contexte.drawImage(ship.img,  0 ,  0 , resolution, resolution  , ship.x , ship.y, resolution, resolution); // le vaisseau

    mouvement_alien(nbDraw);
  //contexte.drawImage( image  , sx , sy ,   sWidth  ,   sHeight   ,   dx   ,   dy  ,   dWidth  ,   dHeight);


  //deplacement & tir
    if(keys['ArrowRight']){
        ship.x+=10;
        
        if(ship.x >= map_width){
            ship.x = 0;
        }
    }
    else if (keys['ArrowLeft']){
        ship.x-=10;
        /*if (keys['ArrowUp']){
            x_shoot = ship.x;
            shoot(x_shoot);
        }*/
        if(ship.x <= 0){
            ship.x = map_width-1;
        }
    }

    if (keys['ArrowUp']){
        x_shoot = ship.x;
        shoot(x_shoot);
    }

  //balles
    for(var i = 0; i < balles.length ; i++){

        console.log
        contexte.fillStyle = "#FFFFFF";
        //              (x , y , largeur, hauteur)
        contexte.fillRect((balles[i].x + resolution/2) - 3, balles[i].y,   4   ,   10   );

        balles[i].y-= balles[i].vitesse;

        if(balles[i].vitesse > 4){
            balles[i].vitesse--;
        }

        for(var j = 0; j < ovnis.length ; j++){
            //collision  (gauche || droite)
                if((/*(ovnis.x - balles[i].x <= 10 && ovnis.x - balles[i].x >= 0) ||*/ (balles[i].x - ovnis[j].x  <= 50 && balles[i].x - ovnis[j].x >=0)) 
                    &&
                    (/*(ovnis.y - balles[i].y <= 10 && ovnis.y - balles[i].y >= 0) || */(balles[i].y - ovnis[j].y  <= 40 && balles[i].y - ovnis[j].y  >=0))

                ){  
                    ovnis[j].img = $('#ovni_blesse')[0];
                    ovnis[j].vie = 0;

                    console.log('ovnis.x - balles[i].x -> ', balles[i].x ,'-', ovnis.x,'=',(ovnis.x - balles[i].x));
                    console.log('ovnis.y - balles[i].y -> ', balles[i].y ,'-', ovnis.y,'=',(ovnis.y - balles[i].y));
                
                }
            
          }
         
        if(balles[i].y <= -10){
            // supprimé balles[i]
            balles.splice(i,1);
            i--;
        }

    }
    console.log(nbDraw);

    if(nbDraw%50 ==0){
        for(var j = 0; j < ovnis.length ; j++){
            if(ovnis[j].vie == 0){
                ovnis.splice(j,1); 
                j--;
            }
        }
        
    }
    window.requestAnimationFrame(draw);//passe a la prochaine frame
}

function shoot(x){

    //console.log('balles.length : ' ,balles.length);

    if(shoot_possible == true){

        balles.push({'x':x ,'y':map_height, 'vitesse': vitesse_balles }); 
        console.log(x);
        
        shoot_possible = false;

        setTimeout( function(){
                    shoot_possible = true; },
                    cadence_tir   );
    }

}

function create_ovni(){

    var x = rand(0,map_width);

    ovnis.push({'x': x, 'y':  -100, 'img': $('#ovni')[0], 'toTeleport': 0, 'vie': 1});
}

function rand(min,max){
    var float_number = Math.random()*100;
    var int_number = Math.round(float_number);
    var result = (((max-min)/100)*int_number)+min;

    return result
}

function mouvement_alien(nbDraw){

    for(var i = 0; i<ovnis.length ; i++){

        if(ovnis[i].vie == 0){
            contexte.drawImage(ovnis[i].img, 0 ,  0 ,   250    ,      260    , ovnis[i].x, ovnis[i].y,    100  ,    100    );
            continue;
        }
        var nbralea = rand(0,100);
        //var temp_deplacement = (); 

        if(nbDraw % 100 == 0 && i %7 == 0){ // parfois il se teleporte
            ovnis[i].toTeleport=10;
        }
        if(ovnis[i].toTeleport>0) {
            if(nbralea%2 == 0){ //droite
                ovnis[i].x+=4;
            } else {
                ovnis[i].x-=4;    
            }
            if(--ovnis[i].toTeleport == 0) {
                var deplacement_alea = rand(100,250);
                //console.log('deplacement_alea : ' ,deplacement_alea);
                if(nbralea%2 == 0){ //droite
                    ovnis[i].x+=deplacement_alea;
                    ovnis[i].y +=2;
                }
                else {              // gauche
                    ovnis[i].x-=deplacement_alea;
                    ovnis[i].y +=2;
                }
            }
        }
        var descente = rand(2,20); 
        if(nbDraw % 5 == 0) {
            ovnis[i].y +=descente;
            
        };

        if(ovnis[i].x >= map_width - 100){
            ovnis[i].x = 10;
        }         
        else if(ovnis[i].x <= 0){
           ovnis[i].x = map_width-110;
       }
/*
            
        }
        else {
            if(nbralea%2 == 0){ //droite
                ovnis[i].x+=4;
                ovnis[i].y +=2;
            }
            else {              // gauche
                ovnis[i].x-=4;
                ovnis[i].y +=2;
            }
        }
            */
        contexte.drawImage(ovnis[i].img, 0 ,  0 ,   250    ,      260    , ovnis[i].x, ovnis[i].y,    100  ,    100    );
        // console.log('ovnis.img : ', ovnis.img, ' | ovnis.x : ', ovnis.x, ' | ovnis.y : ', ovnis.y);



        //lose condition 
        if(ovnis[i].y >= map_height-100){
            alert('loooooooooooser')
        }
      }
}
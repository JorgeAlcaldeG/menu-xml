<?php
function cargarxml(){
    if(file_exists('./xml/carta.xml')){
        $menu = simplexml_load_file('./xml/carta.xml');
    //print_r($menu);
        }else{
    // En caso de error muestra un mensaje
            exit('Error abriendo carta.xml');
        }
}
function showinfo($grupo,$count){

    if(file_exists('./xml/carta.xml')){
        $menu = simplexml_load_file('./xml/carta.xml');
    //print_r($menu);
        }else{
    // En caso de error muestra un mensaje
            exit('Error abriendo carta.xml');
        }
    foreach ($menu -> platos as $plato){
        if($plato['grupo']==$grupo){
            $count++;
//Mostramos la información

                echo '<p class="titulocomida">'.$plato -> nombre.' <span class="precio">'.$plato -> precio.' </span></p>';
                // echo '<p>'.$plato -> precio.'</p>';
//Iconos
            foreach ($plato -> caract ->item as $icon){
                if($icon == 'picante'){
                    echo'<img class="icon" src="./img/icon/picante.svg" alt="" srcset="">';
                }
                if($icon == 'gluten'){
                     echo'<img class="icon" src="./img/icon/gluten.svg" alt="" srcset="">';
                }
                if($icon == 'vegano'){
                    echo'<img class="icon" src="./img/icon/vegano.svg" alt="" srcset="">';
                    }
                }
                if($icon == 'estrella'){
                    echo'<img class="icon" src="./img/icon/estrella.svg" alt="" srcset="">';
                }
                echo'</br>';
                echo '<div class="divdes">';
                echo '<p class="descomida">'.$plato -> desc.'</p>';
                echo '</div>';
// Desplegable de la nutricion
                $kcal=substr($plato ->cal,0,8);
                $nutr=substr($plato ->cal,8,50);
                echo '<p class="kcal">'.$kcal.'</p>';
                echo'<div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading'.$count.'">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse'.$count.'" aria-expanded="false" aria-controls="flush-collapse'.$count.'">
                            Mas información nutricional.
                        </button>
                        </h2>
                        <div id="flush-collapse'.$count.'" class="accordion-collapse collapse" aria-labelledby="flush-heading'.$count.'" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">'.$nutr.'</div>
                        </div>
                    </div>
                </div>'; 
                echo"<br>";
                //echo"<hr>";
            }
    }
}
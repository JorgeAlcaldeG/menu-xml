<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- hoja de estilos -->
    <link rel="stylesheet" href="./css/styles.css">
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&family=Oswald&display=swap" rel="stylesheet">
    <title>Menú</title>
</head>
<body>
    <!-- margen de arriba -->
    <div class="column-1">
        <img class="fotoheader" src="./img/top.png" alt="" srcset="">
    </div>
    <!-- Codigo para la version de movil -->
    <img id="logo" class="ocultar" src="./img/logo.png" alt="" srcset="">
    <div class="column-3img">
        <div class="cuadroiconos ocultar">
                <div class="rowc">
                    <div id="column-2centralicono">
                        <img class="centralicon" src="./img/icon/picante.svg" alt="" srcset="">
                        <img class="centralicon" src="./img/icon/gluten.svg" alt="" srcset="">
                        <img class="centralicon" src="./img/icon/vegano.svg" alt="" srcset="">
                        <img class="centralicon" src="./img/icon/estrella.svg" alt="" srcset="">
                    </div>
                    <div id="column-2centraltexto">
                        <p class="leyenda">Picante (A cuantos mas iconos mayor es el picante)</p>
                        <p class="leyenda">Sin gluten</p>
                        <p class="leyenda">Vegano</p>
                        <p class="leyenda">Plato del dia</p>
                    </div>
                </div>
        </div>
    </div>
    <!-- Fin del codigo para la version de movil -->
<!-- -----------------------------------------------------------Primera fila -->
<div class="rowc">
    <!-- -----------------------------------------------------------------nachos -->
    <div class="column-3">
        <div class="cuadro">
            <h1 class="titulo">Nachos</h1>
        <?php
            include 'func.php';
            showinfo('nachos',0);
        ?>
        </div>
    </div>
<!-- ------------------------------------------------------------------ Logo -->
    <div class="column-3img">
        <img id="logo" class="ocultarR" src="./img/logo.png" alt="" srcset="">
        <div class="cuadroiconos ocultarR">
            <div class="rowc">
                <div id="column-2centralicono">
                    <img class="centralicon" src="./img/icon/picante.svg" alt="" srcset="">
                    <img class="centralicon" src="./img/icon/gluten.svg" alt="" srcset="">
                    <img class="centralicon" src="./img/icon/vegano.svg" alt="" srcset="">
                    <img class="centralicon" src="./img/icon/estrella.svg" alt="" srcset="">
                </div>
                <div id="column-2centraltexto">
                    <p class="leyenda">Picante (A cuantos mas iconos mayor es el picante)</p>
                    <p class="leyenda">Sin gluten</p>
                    <p class="leyenda">Vegano</p>
                    <p class="leyenda">Plato del dia</p>
                </div>
            </div>
        </div>
        <div class="cuadroiconos ocultarR">
            <p id="TextoDomicilio">Para reservar mesa o pedir a domicilio llama al  </p>
            <p id="telf">937 63 77 25</p>
        </div>
    </div>
<!-- ------------------------------------------------------------quesadillas -->
    <div class="column-3de">
        <div class="cuadro">
            <h1 class="titulo" >Quesadillas</h1>
        <?php
            showinfo('quesadillas',10);
        ?>
        </div>  
    </div>
</div>
<div id="separacion"></div>
<!-- -----------------------------------------------------------Segunda fila -->
<div class="rowc">
<!-- ---------------------------------------------------------------burritos -->
    <div class="column-3">
        <div class="cuadro">
            <h1 class="titulo">Burritos</h1>
        <?php
            showinfo('burritos',20);
        ?>
        </div>  
    </div>
    <div class="column-3">
        <div class="cuadro">
        <!-- ----------------------------------------------------------------postres -->
        <h1 class="titulo">Postres</h1>
        <?php
            showinfo('postres',30);
        ?>
        </div>  
    </div>
    <div class="column-3de">
        <div class="cuadro">
        <!-- ------------------------------------------------------------------enchiladas -->
        <h1 class="titulo">Enchiladas</h1>
        <?php
            showinfo('enchiladas',40);
        ?>  
        </div>
    </div>
</div>
<!-- Codigo para la version de movil -->
<div class="column-3img">
    <div class="cuadroiconos ocultar">
            <p id="TextoDomicilio">Para reservar mesa o pedir a domicilio llama al  </p>
            <p id="telf">937 63 77 25</p>
    </div>
</div>
<!-- Termina el codigo de la version movil -->
<div id="separacion-end" class="ocultarR"></div>
<div class="column-end">
    <img class="fotoheader" src="./img/bot.png" alt="" srcset="">
</div>
</body>
</html>
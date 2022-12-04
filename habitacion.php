<?php
    if(!isset($_GET['clavecathab']) && empty($_GET['clavecathab'])){
        header('location: /');
    }
?>
<!DOCTYPE html>
<html lang="es-MX">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="resources/jquery-3.6.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="resources/css/bulma/bulma.min.css">
        <title>Portal de Hotelería | Habitación</title>
    </head>
    <body>
        <?php
            $CLAVE_CATHAB= intval( $_GET['clavecathab'] );
        ?>
        <div class="container p-5">
            <div class="columns">
                <div class="column">
                    <img src="images/habitacion_imagen.png" alt="imagen_habitacion">
                </div>
                <div class="column">
                    <h2 class="titulo_habitacion is-size-1 has-text-weight-semibold title"></h2>
                    <h2 class="titulo_habitacion is-size-4 has-text-weight-semibold subtitle" style="color:rgba(0,0,0,0.64)">Habitación</h2>
                </div>
            </div>
            <div>
                <div class="descripcion_habitacion"></div>
            </div>
            <div>
                <div class="columns mt-5">
                    <div class="column">
                        <a href="#" class="button is-primary is-large" style="width:100%">➧ Reservar</a>
                    </div>
                    <div class="column">
                        <a href="/" class="button is-dark is-outline is-large" style="width:100%"><span style="font-size:1.65rem;position:relative;bottom:3px">←</span> Volver</a>
                    </div>
                </div>
                <button class="button is-danger">❤ Añadir a Favoritos</button>
            </div>
        </div>

        <script src="resources/js/habitaciones.js"></script>
        <script type="text/javascript">
            const clave_cathab= '<?=$CLAVE_CATHAB?>';

            $(document).ready(function(){
                consultarHabitaciones(function(habitaciones){
                    for(const habitacion of habitaciones){
                        if(habitacion.CLAVE_CATHAB == parseInt(clave_cathab)){
                            $('.titulo_habitacion').text(habitacion.TIPO_HABIT);
                            $('.descripcion_habitacion').append(`
                                <p class="is-size-5">${habitacion.TIPO_HABIT_OTRO_DESC}</p> <br>
                                <b class="is-size-5">Precio: $${parseFloat(habitacion.PRECIO).toFixed(2)}</b>
                            `);
                            break;
                        }
                    }
                });
            });
        </script>
    </body>
</html>
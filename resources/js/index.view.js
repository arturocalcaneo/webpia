$(document).ready(function(){
    consultarHabitaciones(function(habitaciones){
        for(const habitacion of habitaciones){
            $('.contenedor_habitaciones').append(`
                <div class="columns habitacion mb-5" style="background: #00000008; border-radius: 4px">
                    <div class="column imagen">
                        <figure class="image">
                            <img src="images/habitacion_imagen.png" alt="imagen_habitacion">
                        </figure>
                    </div>
                    <div class="column informacion">
                        <h3 class="is-size-4 has-text-weight-semibold subtitle">${habitacion.TIPO_HABIT}</h3>
                        <textarea class="textarea is-small" readonly style="resize:none; height: calc(100% - 53px)">${habitacion.TIPO_HABIT_OTRO_DESC}</textarea>
                    </div>
                    <div class="column opciones">
                        <span class="is-size-5">Precio: $${parseFloat(habitacion.PRECIO).toFixed(2)}</span> <br><br>

                        <a class="button mb-2 is-warning" style="width: 100%" href="habitacion.php?clavecathab=${habitacion.CLAVE_CATHAB}">Consultar</a> <br>
                        <a class="button is-info" style="width: 100%" href="reservacion.php">Reservar</a> <br>
                        <a class="button is-danger is-small mt-2">❤ Añadir a Favoritos</a>
                    </div>
                </div>
            `);
        }
    });
});
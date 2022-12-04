'use strict'

function consultarHabitaciones(callback){
    $.ajax({
        url: "http://localhost:8888/habitaciones/todos/disponibles",
        type: "GET",
        dataType: 'json',
        success: function(habitaciones){
            callback(habitaciones);
        }
    });
}
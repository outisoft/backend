document.addEventListener('DOMContentLoaded', function() {
    let formulario = document.querySelector("form");
    var calendarEl = document.getElementById('date');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale:"es",

        dateClick:function(info){
            $("#evento").modal("show");
        }
    });

    calendar.render();

    document.getElementById("btnGuardar").addEventListener("click",function(){
        const datos = new FormData(formulario);
        console.log(datos);
        console.log(formulario.start.value);

        axios.post("{{ route('reserva.store') }}", datos).then(
            (respuesta)=>{
                $("#reserva").modal("hide");
            }
        )
    })
});

(function() {

    const hora = document.querySelector('#horas');
    if(hora) {
        //Selectores
        const categoria = document.querySelector("[name='categoria_id']");
        const dias = document.querySelectorAll('[name="dia"]');
        const inputHiddenDia = document.querySelector('.dia_id');
        const inputHiddenHora = document.querySelector('.hora_id');

        //Objecto de busqueda
        let busqueda = {
            categoria_id: '',
            dia: ''
        }

        //Eventos
        categoria.addEventListener('change', terminoBusqueda);
        dias.forEach( dia => dia.addEventListener('change', terminoBusqueda));

        //Funciones 
        function terminoBusqueda (e) {
            busqueda[e.target.name] = e.target.value;
            if(!Object.values(busqueda).includes('')) {
                buscarEventos();
            }            
        }

        async function buscarEventos () {
            try {
                const { categoria_id, dia } = busqueda;
                const URL = `api/evento-horario?dia=${dia}&categoria=${categoria_id}`;
                const resultado = await fetch(URL);
                const eventos = resultado.json();
                
                obtenerHorasDisponibles();

            } catch (error) {
                console.log(error);
            }
        }

        function obtenerHorasDisponibles () {
            const horas = document.querySelectorAll('#horas');
            horas.forEach( hora => hora.addEventListener('click', selecionarHora) );
        }

        function selecionarHora (e) {
            inputHiddenDia.value = e.target.dataset.horaId
        }

    }
})();
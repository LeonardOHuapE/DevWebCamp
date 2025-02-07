(function() {

    const hora = document.querySelector('#horas');
    if(hora) {
        //Selectores
        const categoria = document.querySelector("[name='categoria_id']");
        const dias = document.querySelectorAll('[name="dia"]');
        const inputHiddenDia = document.querySelector('[name="dia_id"]');
        const inputHiddenHora = document.querySelector('[name="hora_id"]');

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
                const URL = `api/evento-horario?categoria=${categoria_id}&dia=${dia}`;
                const resultado = await fetch(URL);
                const evento = await resultado.json();
                obtenerHorasDisponibles(evento);

            } catch (error) {
                console.log(error);
            }
        }

        function obtenerHorasDisponibles (evento) {
            const horasTomadas = evento.map;
            const listadoHoras = document.querySelectorAll('#horas li');
            const listadoHorasArray = Array.from(listadoHoras);
            const resultado = listadoHorasArray.filter(hora => hora.dataset.horaId === horasTomadas.hora_id);



            const horas = document.querySelectorAll('.horas__hora');
            horas.forEach( hora => hora.addEventListener('click', selecionarHora) );
        }

        function selecionarHora (e) {

            const selecionadoPrevio = document.querySelector('.horas__hora--seleccionado');
            if (selecionadoPrevio) {
                selecionadoPrevio.classList.remove('horas__hora--seleccionado');
            }  
            e.target.classList.add('horas__hora--seleccionado');
            inputHiddenHora.value = e.target.dataset.horaId
        }

    }
})();
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
            categoria_id: +categoria.value || '',
            dia: +inputHiddenDia.value || ''
        }
        console.log(busqueda);

        if(!Object.values(busqueda).includes('')) {
            const horaSeleccionada = document.querySelector(`data-hora-id={$}`)

            buscarEventos();    

        }   

        //Eventos
        categoria.addEventListener('change', terminoBusqueda);
        dias.forEach( dia => dia.addEventListener('change', terminoBusqueda));

        //Funciones 
        function terminoBusqueda (e) {
            busqueda[e.target.name] = e.target.value;

            //Reinciar Valores 
            inputHiddenHora.value = ''
            inputHiddenDia.value = ''
            const selecionadoPrevio = document.querySelector('.horas__hora--seleccionado');
            if (selecionadoPrevio) {
                selecionadoPrevio.classList.remove('horas__hora--seleccionado');
            } 


            if(!Object.values(busqueda).includes('')) {
                buscarEventos();
            }            
        }

        async function buscarEventos () {
            try {
                const { categoria_id, dia } = busqueda;
                const URL = `api/evento-horario?categoria=${categoria_id}&dia=${dia}`;
                const resultado = await fetch(URL);
                const eventos = await resultado.json();
                obtenerHorasDisponibles(eventos);

            } catch (error) {
                console.log(error);
            }
        }

        function obtenerHorasDisponibles (eventosArray) {
            const listadoHoras = document.querySelectorAll('#horas li');
            listadoHoras.forEach( li => li.classList.add('horas__hora--deshabilitado') );

            const horasTomadas = eventosArray.map( evento => evento.hora_id );
            

            const listadoHorasArray = Array.from(listadoHoras);
            const horasDisponibles = listadoHorasArray.filter( li => !horasTomadas.includes(li.dataset.horaId));

            horasDisponibles.forEach( hora => hora.classList.remove('horas__hora--deshabilitado'))
            const horas = document.querySelectorAll('#horas li:not(.horas__hora--deshabilitado)');
            
            horas.forEach( hora => hora.addEventListener('click', selecionarHora) );
        }

        function selecionarHora (e) {

            const selecionadoPrevio = document.querySelector('.horas__hora--seleccionado');
            if (selecionadoPrevio) {
                selecionadoPrevio.classList.remove('horas__hora--seleccionado');
            }  
            e.target.classList.add('horas__hora--seleccionado');
            inputHiddenHora.value = e.target.dataset.horaId

            inputHiddenDia.value = document.querySelector('[name="dia"]:checked').value;
        }

    }
})();
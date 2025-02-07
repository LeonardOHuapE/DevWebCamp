(function() {

    const hora = document.querySelector('#horas');
    if(hora) {
        //Selectores
        const categoria = document.querySelector("[name='categoria_id']");
        const dias = document.querySelectorAll('[name="dia"]');

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
                buscar();
            }            
        }

        async function buscar () {
            const { categoria, dia } = busqueda;
            const URL = `api/evento-horario?categoria=${categoria}&dia=${dia}`;
        }

    }
})();
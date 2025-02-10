(function() {
    const ponenteInput = document.querySelector('#ponente');
    if(ponenteInput) {

        let ponentes = [];
        let ponentesFiltrados = []
        const listadoPonentes = document.querySelector('.listado-ponentes');
        const inputHiddenPonente = document.querySelector('[name="ponente_id"]');

        obtenerPonentes();

        ponenteInput.addEventListener('input', buscarPonente);

        async function obtenerPonentes () {
            const URL = `api/ponentes`;
            try {
                const respuesta = await fetch(URL);
                const resultado = await respuesta.json();
                formatearPonentes(resultado);
            } catch (error) {
                console.log(error)
            }
        } 

        function  formatearPonentes (ponentesArray) {
            ponentes = ponentesArray.map ( ponente => {
                return {
                    nombre: `${ponente.nombre} ${ponente.apellido}`,
                    id: `${ponente.id}`
                }
            })
        }


        function buscarPonente(e) {
            const busqueda = e.target.value;
            if (busqueda.length > 3) {
                const expresion = RegExp(busqueda, "i");
                ponentesFiltrados = ponentes.filter( ponente =>  {
                    if(ponente.nombre.toLowerCase().search(expresion) != -1) {
                        return ponente;
                    }
                })
            }
            mostrarPonentes();
        }

        function mostrarPonentes () {
            inputHiddenPonente.value = '';
            while(listadoPonentes.firstChild) {
                listadoPonentes.removeChild(listadoPonentes.firstChild);
            }

            if (ponentesFiltrados.length > 0) {
                ponentesFiltrados.forEach ( ponente => {
                    const ponenteHtml = document.createElement('LI');
                    ponenteHtml.classList.add('listado-ponentes__ponente');
                    ponenteHtml.textContent = ponente.nombre;
                    ponenteHtml.dataset.ponenteId = ponente.id;
                    ponenteHtml.onclick = seleccionarPonente;
                    //Inyectar al DOM
                    listadoPonentes.appendChild(ponenteHtml);
                } )
            } else {
                const ponenteNoEncontrado = document.createElement('LI');
                ponenteNoEncontrado.classList.add('listado-ponentes__ponente--noEncontrado');
                ponenteNoEncontrado.textContent = 'No se encontraron Resultado';
                listadoPonentes.appendChild(ponenteNoEncontrado);
            }
        }

        function seleccionarPonente (e) {
            const seleccionarPrevio = document.querySelector('.listado-ponentes__ponente--seleccionado');
            
            if(seleccionarPrevio) {
                seleccionarPrevio.classList.remove('listado-ponentes__ponente--seleccionado');
            }
            e.target.classList.add('listado-ponentes__ponente--seleccionado');
            inputHiddenPonente.value = e.target.dataset.ponenteId;
        }
    }
})();
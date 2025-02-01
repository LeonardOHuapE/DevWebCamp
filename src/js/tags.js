(function(){
    const tagsInput = document.querySelector('#tags_input');

    if(tagsInput){
        tagsInput.addEventListener('keypress', guardarTags);
        listadoTags = document.querySelector('#tags');
        tags = [];

        function guardarTags(e){
            if(e.keyCode === 44) {
                if(e.target.value.trim() === '' || e.target.value < 1) return;
                e.preventDefault();
                tags = [...tags, e.target.value.trim()];
                tagsInput.value = '';
                mostrarTags();
            }
        }

        function mostrarTags(){
            listadoTags.textContent = '';
            tags.forEach(tag => {
                const etiqueta = document.createElement('LI');
                etiqueta.textContent = tag;
                etiqueta.classList.add('formulario__tag');
                listadoTags.appendChild(etiqueta);
            })
        }
    } 
}());
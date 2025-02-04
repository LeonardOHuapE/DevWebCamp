(function(){
    const tagsInput = document.querySelector('#tags_input');

    if(tagsInput){
        //Selectores
        tagsInput.addEventListener('keypress', guardarTags);
        tagDiv = document.querySelector('#tags');
        tagInputHidden = document.querySelector('[name="tags"]');
        let tags = [];

        //funcion que comprueba si hay datos para mostrar
        if(tagInputHidden.value !== '') {
            tags = tagInputHidden.value.split(',');
            console.log(tags);
            mostrarTags();
        }


        //funcion que guardar los tags
        function guardarTags(e){
            if(e.keyCode === 44) {
                if(e.target.value.trim() === '' || e.target.value < 1) return;
                e.preventDefault();
                tags = [...tags, e.target.value.trim()];
                tagsInput.value = '';
                mostrarTags();
            }
        }
        //los muestra en el html
        function mostrarTags(){
            tagDiv.textContent = '';
            tags.forEach(tag => {
                const etiqueta = document.createElement('LI');
                etiqueta.textContent = tag;
                etiqueta.classList.add('formulario__tag');
                etiqueta.ondblclick = eliminarTag;
                tagDiv.appendChild(etiqueta);
            })
            actualizarTagInputHidden();
        }

        //elimina los tags del doom y del arreglo
        function eliminarTag(e){
            e.target.remove();
            tags = tags.filter( tag => tag !== e.target.textContent );
            actualizarTagInputHidden();
        }

        //Mantiene el campo actualizado para subir al servidor
        function actualizarTagInputHidden() {
            tagInputHidden.value = tags.toString();
        }
    } 
})();
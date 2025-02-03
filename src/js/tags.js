(function(){
    const tagsInput = document.querySelector('#tags_input');

    if(tagsInput){
        tagsInput.addEventListener('keypress', guardarTags);
        tagDiv = document.querySelector('#tags');
        tagInputHidden = document.querySelector('[name="tags"]');
        let tags = [];

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

        function eliminarTag(e){
            e.target.remove();
            tags = tags.filter( tag => tag !== e.target.textContent );
            actualizarTagInputHidden();
        }

        function actualizarTagInputHidden() {
            tagInputHidden.value = tags.toString();
        }
    } 
})();
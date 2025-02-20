if (document.querySelector('#mapa')) {


    const lapt = 19.702383;
    const long =-101.193644;
    const zoom = 25;

    const map = L.map('mapa').setView([lapt, long], zoom);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([lapt, long]).addTo(map)
        .bindPopup(`
           <h2 class="mapa__heading">DevWebCamp</h2> 
           <p class="mapa__texto">Lugar donde se realizara el evento en plaza de armas</p>
        `)
        .openPopup();
}
import Swiper from "swiper";
import { Navigation, FreeMode } from "swiper/modules";
import 'swiper/css';
import 'swiper/css/navigation';
document.addEventListener('DOMContentLoaded', function () {
    if(document.querySelector('.slider')) {
        const opciones = {
            slidesPerView: 1,
            spaceBetween: 15,
            freeMode: true,
            modules: [Navigation],
            speed: 1000,
            navigation: {
                nextEl: '.swiper-button-next', // El botón siguiente
                prevEl: '.swiper-button-prev'  // El botón previo
            },
            breakpoints: {
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                },
                1200: {
                    slidesPerView: 4
                }
            }

        }
        Swiper.use([Navigation, FreeMode]);
        const swiper = new Swiper(".slider", opciones);
    }   
});
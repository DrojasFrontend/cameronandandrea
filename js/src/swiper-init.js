import $ from "jquery";
import Swiper from "swiper";
import { Navigation, Pagination, Autoplay, Thumbs, FreeMode, Grid } from "swiper/modules";
import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/navigation";
import "swiper/css/effect-fade";
import "swiper/css/thumbs";
import "swiper/css/free-mode";
import "swiper/css/grid";

export const initGallerySwiper = () => {
	// Buscar todos los elementos con la clase gallerySwiper
	const swiperElements = document.querySelectorAll(".gallerySwiper");
	
	// Crear un swiper para cada elemento
	swiperElements.forEach((element, index) => {
		// Buscar la paginación específica en el mismo contenedor padre
		const containerParent = element.closest('.col-12, .col-xl-10');
		const paginationElement = containerParent ? containerParent.querySelector('.swiper-pagination-gallery') : null;
		
		const swiper = new Swiper(element, {
			modules: [Pagination, Navigation, Autoplay],
			slidesPerView: 1,
			spaceBetween: 0,
			centeredSlides: false,
			autoplay: {
				delay: 5000,
				disableOnInteraction: false,
			},
			loop: false,
			navigation: false,
			pagination: paginationElement ? {
				el: paginationElement,
				type: "bullets",
				clickable: true,
			} : false,
		});
	});
};

export const initPlaceSwiper = () => {
	const swiper = new Swiper(".placeSwiper", {
		modules: [Pagination, Navigation, Autoplay],
		slidesPerView: 1,
		spaceBetween: 24,
		centeredSlides: false,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		loop: true,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
			clickable: true,
			disabledClass: "swiper-nav-disabled",
		},
		pagination: {
			el: ".swiper-pagination",
			type: "bullets",
			clickable: true,
		},
		breakpoints: {
			320: {
				slidesPerView: 1,
				spaceBetween: 10,
			},
			1024: {
				slidesPerView: 2,
				spaceBetween: 10,
			},
			1200: {
				slidesPerView: 3,
				spaceBetween: 24,
			},
		},
	});
};

export const initPlacesSwiper = () => {
	// Buscar todos los elementos con la clase placesSwiper
	const swiperElements = document.querySelectorAll(".placesSwiper");
	
	// Crear un swiper para cada elemento
	swiperElements.forEach((element, index) => {
		// Obtener el ID único del swiper
		const swiperId = element.id;
		const categoryId = swiperId.replace('swiper-', '');
		
		// Buscar los botones de navegación específicos usando los IDs únicos
		const nextButton = document.getElementById(`next-${categoryId}`);
		const prevButton = document.getElementById(`prev-${categoryId}`);
		const pagination = element.querySelector(".swiper-pagination");
		
		const swiper = new Swiper(element, {
			modules: [Pagination, Navigation, Autoplay],
			slidesPerView: 1,
			spaceBetween: 24,
			centeredSlides: false,
			autoplay: {
				delay: 5000,
				disableOnInteraction: false,
			},
			loop: true,
			navigation: (nextButton && prevButton) ? {
				nextEl: nextButton,
				prevEl: prevButton,
				clickable: true,
				disabledClass: "swiper-nav-disabled",
			} : false,
			pagination: pagination ? {
				el: pagination,
				type: "bullets",
				clickable: true,
			} : false,
			breakpoints: {
				320: {
					slidesPerView: 1,
					spaceBetween: 10,
				},
				1024: {
					slidesPerView: 2,
					spaceBetween: 10,
				},
				1200: {
					slidesPerView: 3,
					spaceBetween: 24,
				},
			},
		});
	});
};

// Inicialización de Swipers
document.addEventListener('DOMContentLoaded', function () {
	initGallerySwiper();
	initPlaceSwiper();
	initPlacesSwiper();
});

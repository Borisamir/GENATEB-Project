const leftArrow = document.getElementById("left-arrow");
const rightArrow = document.getElementById("right-arrow");
const indicators = document.querySelectorAll(".indicators div");

/* SLIDER: arrows */
document.addEventListener('DOMContentLoaded', function () {
    const slider = document.querySelector('.slider-container .slider');
    const slides = Array.from(slider.querySelectorAll('.slide'));
    let current = 0;

    function goToSlide(index) {
        if (index < 0) index = slides.length - 1;
        if (index >= slides.length) index = 0;
        current = index;
        slider.scrollTo({
            left: slides[index].offsetLeft,
            behavior: 'smooth'
        });
        indicators.forEach((ind, i) => {
            ind.classList.toggle('active', i === index);
        });
    }

    leftArrow.addEventListener('click', () => {
        goToSlide(current - 1);
    });

    rightArrow.addEventListener('click', () => {
        goToSlide(current + 1);
    });

    indicators.forEach((ind, i) => {
        ind.addEventListener('click', (e) => {
            e.preventDefault();
            goToSlide(i);
        });
    });

    // Opcional: sincronizar el slide actual al hacer scroll manual
    slider.addEventListener('scroll', () => {
        const scrollLeft = slider.scrollLeft;
        let found = 0;
        slides.forEach((slide, i) => {
            if (scrollLeft >= slide.offsetLeft - 10) found = i;
        });
        if (found !== current) {
            current = found;
        }
    });
});


/*Verificacion datos */
function Validar(){
    const nombre_apellido=document.getElementById("nombre");
    const correo=document.getElementById("correo_electronico");
    const telefono=document.getElementById("telefono");
    const terms = document.getElementById("terms");

    const message = document.getElementById("mensaje-error");

    const Letras=/^[a-zA-ZÁÉÍÓÚáéíóúÑñ\s]+$/;
    const correoValido=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    message.innerText="";

    if (nombre_apellido.value.trim() === "") {
        message.innerText = "Nombre y apellidos esta vacio.";
        return false;
    }

    if(!Letras.test(nombre_apellido.value.trim())){
       message.innerText="Nombre y Apellido solo deben contener Letras.";
       return false;
    }

    if (correo.value.trim() === "") {
        message.innerText = "Correo esta vacio.";
        return false;
    }

    if(!correoValido.test(correo.value.trim())){
       message.innerText = "Ingrese un correo valido.";
       return false;
    }

    if (telefono.value.trim() === "") {
        message.innerText = "Ingrese un numero de contacto.";
        return false;
    }

    if(telefono.value.trim() && !/^\d{7,9}$/.test(telefono.value.trim())) {
       message.innerText="El numero debe tener entre 7 y 9 digitos.";/* no me deja ver los cambios bowis estoy q hago monitorio ocupacional pero no me deja realizar cambios */
       return false;
    }

    if (!terms.checked) {
        message.innerText="Debe aceptar término y condiciones";
        return false;
    }

    alert("El Formulario ha sido enviado correctamente");
    return true;

}

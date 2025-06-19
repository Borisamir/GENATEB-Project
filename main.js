const leftArrow = document.getElementById("left-arrow");
const rightArrow = document.getElementById("right-arrow");
const indicators = document.querySelectorAll(".indicators a");

const totalSlides = 3;

let currentActive = document.querySelector(".indicators .active");

/* SLIDER: arrows */
function getCurrentSlide() {
    const hash = window.location.hash;
    const match = hash.match(/slide-(\d+)/);

    if (match) {
        return parseInt(match[1]);
    }

    return 1;
}

leftArrow.addEventListener("click", function(evt) {
    evt.preventDefault();

    let current = getCurrentSlide();
    let prev = current - 1;

    if (prev < 1) {
        prev = totalSlides
    }

    window.location.hash = "#slide-" + prev;

    currentActive.classList.remove("active");
    currentActive = indicators[prev - 1];

    indicators[prev - 1].classList.add("active");
});

rightArrow.addEventListener("click", function(evt) {
    evt.preventDefault();

    let current = getCurrentSlide();
    let next = current + 1;

    if (next > totalSlides) {
        next = 1;
    }

    window.location.hash = "#slide-" + next;

    currentActive.classList.remove("active");
    currentActive = indicators[next - 1];

    indicators[next - 1].classList.add("active");
});

/* SLIDER: indicators */
indicators.forEach(function(ind) {
    ind.addEventListener("click", function(evt) {
        if (currentActive === this) {
            return;
        }

        currentActive.classList.remove("active");
        currentActive = this

        this.classList.add("active");
    });
})


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

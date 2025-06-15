const leftArrow = document.getElementById("left-arrow");
const rightArrow = document.getElementById("right-arrow");
const indicators = document.querySelectorAll(".indicators a");

const totalSlides = 3;

let currentActive = document.querySelector(".indicators .active");

const css$media = window.matchMedia("(max-width: 1030px)");
const input$menu_toggle = document.getElementById("menu-toggle");

css$media.addEventListener("change", function(evt) {
    if (!evt.matches && input$menu_toggle.checked) {
        input$menu_toggle.checked = false;
        document.body.style.overflow = "initial";
    }
})

input$menu_toggle.addEventListener("click", function(evt) {
    console.log(this.checked)
    if (!css$media.matches) {
        evt.preventDefault();
        return;
    }

    document.body.style.overflow = this.checked ? "hidden" : "initial";
})

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
    const nombre_apellido=document.getElementById("nombre").value.trim();
    const correo=document.getElementById("correo_electronico").value.trim();
    const telefono=document.getElementById("telefono").value.trim();

    const Letras=/^[a-zA-ZÁÉÍÓÚáéíóúÑñ\s]+$/;
    const correoValido=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    document.getElementById("mensaje-error").innerText="";

    if(!Letras.test(nombre_apellido)){
       document.getElementById("mensaje-error").innerText="Error: Nombre y Apellido solo deben contener Letras.";
       return false;
    }

    if(!correoValido.test(correo)){
       document.getElementById("mensaje-error").innerText="Error: Ingrese un correo valido.";
       return false;
    }

    if(telefono && !/^\d{7,9}$/.test(telefono)){
       document.getElementById("mensaje-error").innerText="Error: El numero debe tener entre 7 y 9 digitos.";
       return false;
    }

    alert("El Formulario ha sido enviado correctamente");
    return true;

}

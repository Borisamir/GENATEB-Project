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

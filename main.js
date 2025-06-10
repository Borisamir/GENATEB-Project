const indicators = document.querySelectorAll(".indicators a");

indicators.forEach(ind => {
    ind.addEventListener("click", function(evt) {
        // evt.preventDefault();

        // const id = this.getAttribute("href");

        // location.hash = id;
        // history.replaceState(null, null, id);
        // Opcional: Forzar el :target en CSS (algunos navegadores lo aplican automáticamente)
        // document.querySelector(id).scrollIntoView({
        //     behavior: "auto",
        //     block: "nearest"}
        // );
    });
});
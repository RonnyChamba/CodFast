const $inputBusqueda = document.getElementById("busqueda-js");
const $title = document.getElementById("title-js");

// Los dos archivos index y content tienen linkado este archivo .js, pero solo
// index tiene un elemento  con el id busqueda-js, tonces valido que no sea null.
if ($inputBusqueda != null) {
  $inputBusqueda.addEventListener("keyup", (e) => {
    // Texto Escrito
    let textoEscrito = e.target.value.trim().toLowerCase();

    const $tarjetas = [...document.querySelectorAll(".card")];
    $tarjetas.forEach((x) => {
      // textContent - Obtiene todo el contenido de texto del elemento
      let textContent = x.textContent.trim().toLowerCase();
      textContent.includes(textoEscrito)
        ? x.classList.remove("filter")
        : x.classList.add("filter");
    });
  });
}

$title.addEventListener("click", (e) => {
  window.open("index.php", "_self");
});

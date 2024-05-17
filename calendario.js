const days = document.querySelectorAll(".day");

days.forEach((elemento) => {
  elemento.addEventListener("click", () => {
    if (!elemento.classList.contains("last-month")) {
      if (!elemento.classList.contains("active")) {
        elemento.classList.add("active");
      }
    }
  });
});

// JavaScript para mudar o texto ao clicar no botão
document.getElementById("changeTextBtn").addEventListener("click", function() {
    const dynamicText = document.getElementById("dynamicText");
    if (dynamicText.textContent === "Texto original") {
        dynamicText.textContent = "Texto alterado com sucesso!";
    } else {
        dynamicText.textContent = "Texto original";
    }
});
let index = 0;
 
function moveSlide(step) {
  const slides = document.querySelector('.slides');
  const totalSlides = slides.children.length;
 
  index = (index + step + totalSlides) % totalSlides;
  slides.style.transform = `translateX(-${index * 100}%)`;
}
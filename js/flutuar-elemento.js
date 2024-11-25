const image = document.querySelector('.floating-image');

function addDynamicFloat() {
  image.style.transition = 'transform 0.5s';

  // Adiciona um evento para simular a flutuação com uma leve rotação e escala
  image.addEventListener('mouseover', () => {
    image.style.transform = 'translateY(-20px) rotate(3deg) scale(1.05)';
  });

  image.addEventListener('mouseout', () => {
    image.style.transform = 'translateY(0) rotate(0deg) scale(1)';
  });
}

addDynamicFloat();

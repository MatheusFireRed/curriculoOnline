const elementos = document.querySelectorAll('.fade-up');

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    
    if (entry.isIntersecting) {
      entry.target.classList.add('show');
    }

  });
}, {
  threshold: 0.5
});

elementos.forEach((el) => observer.observe(el));

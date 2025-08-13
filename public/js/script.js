document.addEventListener('DOMContentLoaded', function() {
  const heroTitle = document.querySelector('h1');
  const heroText = document.querySelector('p');

  heroTitle.style.opacity = '0';
  heroTitle.style.transform = 'translateY(30px)';
  heroText.style.opacity = '0';
  heroText.style.transform = 'translateY(30px)';

  setTimeout(() => {
    heroTitle.style.transition = 'all 1s ease';
    heroTitle.style.opacity = '1';
    heroTitle.style.transform = 'translateY(0)';
  }, 300);

  setTimeout(() => {
    heroText.style.transition = 'all 1s ease';
    heroText.style.opacity = '1';
    heroText.style.transform = 'translateY(0)';
  }, 600);
});

(function () {
  const navToggle = document.querySelector('.nav-toggle');
  const navMenu = document.querySelector('.primary-navigation');

  if (!navToggle || !navMenu) return;

  navToggle.addEventListener('click', () => {
    navMenu.classList.toggle('open');
    navToggle.setAttribute('aria-expanded', navMenu.classList.contains('open'));
  });
})();

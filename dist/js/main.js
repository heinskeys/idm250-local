var menuButton = document.getElementById('menu-button');
var closeButton = document.getElementById('close-button');
var overlay = document.getElementById('overlay');

menuButton.addEventListener('click', () => {
  overlay.classList.remove('hidden');
  menuButton.classList.add('hidden');
});

closeButton.addEventListener('click', () => {
  overlay.classList.add('hidden');
  menuButton.classList.remove('hidden');
});


AOS.init({
  duration: 600, // Fast animation duration
  easing: 'ease-out-quart', // Easing for smooth transitions
  once: true, // Trigger animation only once
  offset: 30, // Slightly lower offset to trigger animation earlier
  delay: 0, // No delay between animations
});

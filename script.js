// JavaScript for Map Animation
const mapAnimation = document.querySelector('.map-animation');
mapAnimation.addEventListener('mouseover', () => {
  mapAnimation.style.animationPlayState = 'paused';
});
mapAnimation.addEventListener('mouseout', () => {
  mapAnimation.style.animationPlayState = 'running';
});

// Tab Section JavaScript
const tabButtons = document.querySelectorAll('.tab-button');
const tabPanels = document.querySelectorAll('.tab-panel');

tabButtons.forEach(button => {
  button.addEventListener('click', () => {
    tabButtons.forEach(btn => btn.classList.remove('active'));
    tabPanels.forEach(panel => panel.classList.remove('active'));

    button.classList.add('active');
    document.getElementById(button.dataset.tab).classList.add('active');
  });
});


const pills = document.querySelectorAll('.premios .pill');
const contents = document.querySelectorAll('.premios .content');

pills.forEach(pill => {
  pill.addEventListener('click', () => {
    pills.forEach(p => p.classList.remove('active'));
    contents.forEach(content => content.classList.add('hidden'));
    pill.classList.add('active');
    const target = document.getElementById(pill.dataset.target);
    target.classList.remove('hidden');
  });
});

document.addEventListener('DOMContentLoaded', () => {
  const buttons = document.querySelectorAll('.placar .nav-button');
  const panes = document.querySelectorAll('.placar .tab-pane');

  buttons.forEach(button => {
    button.addEventListener('click', () => {

      buttons.forEach(btn => btn.classList.remove('active'));
      button.classList.add('active');

      panes.forEach(pane => pane.classList.remove('active'));
      
      const targetId = button.getAttribute('data-target');
      const targetPane = document.getElementById(targetId);

      if (targetPane) {
        targetPane.classList.add('active');
      }
    });
  });
});
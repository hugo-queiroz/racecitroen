document.addEventListener('DOMContentLoaded', () => {
  const buttons = document.querySelectorAll('.placar .nav-button');
  const panes = document.querySelectorAll('.placar .tab-pane');

  buttons.forEach(button => {
    button.addEventListener('click', () => {
      // Remove 'active' de todos os botões
      buttons.forEach(btn => btn.classList.remove('active'));
      button.classList.add('active');

      // Esconde todas as abas
      panes.forEach(pane => {
        pane.classList.remove('active');
        pane.style.display = 'none'; // Esconde no fluxo
      });

      // Mostra a aba alvo
      const targetId = button.getAttribute('data-target');
      const targetPane = document.getElementById(targetId);

      if (targetPane) {
        targetPane.style.display = 'flex'; // Mostra no fluxo
        requestAnimationFrame(() => {
          targetPane.classList.add('active'); // Adiciona animação
        });
      }
    });
  });
});

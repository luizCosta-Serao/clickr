export default function menuMobile() {
  // Adicionando evento ao click no menu mobile
  $('.btn-menu-mobile').click(function() {
    // Salvando em uma variável a tag com class menu
    const $menu = $('.menu');
    // Adicionando ou removendo a classe active
    $menu.toggleClass('active');
    // Se tiver classe active mostrar, caso contrário, esconder
    if (!$menu.hasClass('active')) {
      // Escondendo menu
      $menu.fadeOut();
      // Animação de alteração do ícone do menu
      this.animate([
        {transform: 'rotate(180deg)'}
      ], 500)
      // Alterando ícone do menu
      $('.btn-menu-mobile img').attr('src', 'http://localhost/clickr/assets/menu.svg')
    } else {
      // Mostrando menu
      $menu.fadeIn();
      // Animação de alteração do ícone do menu
      this.animate([
        {transform: 'rotate(-180deg)'}
      ], 500)
      // Alterando ícone do menu
      $('.btn-menu-mobile img').attr('src', 'http://localhost/clickr/assets/close-menu.svg')
    }
  })
}
<?php 
// adicionando as função de menu
add_theme_support('menus');
// registrando menu
function register_my_menu() {
    register_nav_menu('menu-principal',__( 'Menu Principal' ));
  }
add_action( 'init', 'register_my_menu' );


// adicionando imagem destaque nas páginas
add_theme_support('post-thumbnails');

// função que remove itens do painel wordpress admin
add_action( 'admin_init', 'remove_intes_do_painel' );
	function remove_intes_do_painel() {
		remove_menu_page('tools.php'); //remove o item Ferramentas
		remove_menu_page('upload.php'); //remove o item Midia
		remove_menu_page('edit.php'); //remove o item Post
		remove_menu_page('edit-comments.php'); //remove o item comentarios
	}
?>
<?php


// CUSTOM PAGES //////////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// ACERCA DE
		if( ! get_page_by_path('acerca-de') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Acerca de',
				'post_name'   => 'acerca-de',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// CONTACTO
		if( ! get_page_by_path('contacto') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Contactto',
				'post_name'   => 'contacto',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// Compra confirmada
		if( ! get_page_by_path('compra-confirmada') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Compra confirmada',
				'post_name'   => 'compra-confirmada',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// Método de pago
		if( ! get_page_by_path('metodo-de-pago') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Método de pago',
				'post_name'   => 'metodo-de-pago',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}


	});

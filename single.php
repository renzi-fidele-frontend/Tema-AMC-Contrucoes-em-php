<?php get_header();

?>

<main class="main">
         <div class="grid-container">
            <div class="grid-70">        
				<?php
				while (have_posts()) : the_post();
				$titulo = get_the_title();
               
				$pod = pods('post');
				$pod->find();
				
				while ($pod->fetch()) {				
					if (get_the_title() == $pod->display('titulo_post_principal')) {
						//  Header Single
						echo '<div class="box-post single-post pg-single sizeFonte">';
						echo '<div class="header-single">';
						echo '<div class="grid-100 grid-parent">';
						echo '<div class="grid-10 grid-parent tablet-grid-10 mobile-grid-30">';
						echo '<div class="list-post">';
						echo '<div class="box-icon-cat meu-ape">';    
						echo '<i class="icon-meu-ape"></i>';
						echo '</div>';
						echo '</div>';  
						echo '</div>';   
						echo '<div class="grid-85 prefix-5 grid-parent tablet-grid-80 tablet-prefix-10 mobile-grid-60 mobile-prefix-10">';
						echo '<span class="data meu-ape">' . get_the_date() . '</span>';
						echo '<span class="data meu-ape">Meu Apê</span>';
						echo '</div>';
						echo '</div>';
						echo '</div>';
						echo '</div>';

						//  Titulo Single
						echo '<div class="title-single">';
						echo '<h1>' . $pod->display('titulo_post_principal') . '</h1>';
						echo '</div>';

						//  Info Single
						echo '<div class="info-single">';
						echo '<div class="grid-100 tablet-grid-100">';
						echo '<div class="single_midias font-black cf">';
						echo '<div class="grid-50 tablet-grid-50 mobile-grid-40 mobile-grid-parent">';
						echo '<span class="align-middle">FONTE:</span>';
						echo '<a href="#" title="Diminuir o tamanho da fonte" class="decrease-font ctrl-font transition align-middle"> -A </a>';
						echo '<a href="#" title="Aumentar o tamanho da fonte" class="increase-font ctrl-font transition align-middle"> +A </a>';
						echo '</div>';
						echo '</div>';
						echo '</div>';
						echo '</div>';

						//  Conteudo do post
						echo '<div class="content-post">' . $pod->display('conteudo_do_post') . '</div>';
					}
				} endwhile;	
				?>
            </div>
            <div class="grid-25 prefix-5">
               <!--Side Bar -->
               <?php get_sidebar(); ?>
            </div>
         </div>
      </main>

      
<?php get_footer(); ?>
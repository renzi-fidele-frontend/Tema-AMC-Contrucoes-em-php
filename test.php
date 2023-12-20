<?php get_header();?>

<main class="main">
         <div class="grid-container">
            <div class="grid-70">
               <div class="grid-100">
                  <!--Post Principal-->
                  <?php
                     function reduzirTexto($texto, $maxLength) {
                        // Verifica se o texto excede o limite máximo
                        if (strlen($texto) > $maxLength) {
                            $textoReduzido = substr($texto, 0, $maxLength) . '...';
                            return $textoReduzido;
                        } else {
                            return $texto;
                        }
                    }
				   $count = 0;
                     while (have_posts()) : the_post();
                     $pod = pods('post');
                     $pod->find();
                     
                     while ($pod->fetch()) {
						 
                        if ($count == 0) {
                           echo '<div class="box-post">';
                              echo '<div class="last-post">';
                                 echo '<a href="' . get_permalink(get_the_ID()) . '">';
                                    echo '<div class="image-post" style="background-image: url(' . $pod->display('imagem') . ')">';
                                       echo '<div class="box-icon-cat meu-ape">';
                                          echo '<i class="icon-meu-ape"></i>';
                                       echo '</div>';
                                       echo '<div class="chamada-post meu-ape">';
                                          echo '<span class="data meu-ape">' . get_the_date() . '</span>';
                                          echo '<h2>' . $pod->display('titulo_post_principal') . '</h2>';
                                          echo '<p>' . reduzirTexto($pod->display('descricao'), 140) . '</p>';
                                       echo '</div>';
                                    echo '</div>';
                                 echo '</a>';
                              echo '</div>';
                           echo '</div>';
                           
                        }
                        $count ++;
                     }
                     endwhile;
                     
                     // Resetando o loop para repeti-lo
                     $pod->reset();

                     $count = 0;
                     // Lista dos Posts-->
                     echo '<div class="list-post">';
                     
                     while ($pod->fetch()) {
						 
                        if ($count > 0) {
                           echo '<div class="grid-50 tablet-grid-50">';
                              echo '<div class="box-post">';
                                 echo '<div class="image-post meu-ape" style="background-image: url(' . $pod->display('imagem') . ')">';
                                    echo '<div class="box-icon-cat meu-ape">';
                                       echo '<i class="icon-meu-ape"></i>';
                                    echo '</div>';
                                 echo '</div>';
                                 echo '<div class="chamada-post">';
                                    echo '<span class="datameu-ape">' . get_the_date() . '</span>';
                                    echo '<h2>' . $pod->display('titulo_post_principal') . '</h2>';
                                    echo '<p>' . reduzirTexto($pod->display('descricao'), 150) . '</p>';
                                 echo '</div>';
                                 echo '<a href="' . esc_url(get_permalink()) .'" title="Leia mais" class="btn-more meu-ape">Leia mais</a>';
                              echo '</div>';
                           echo '</div>';
                        }
                        $count ++;
                     }
                    
                     echo '</div>';					
                  ?>

                  	
					<!--Paginacao-->
                  <div class="pagination grid-100">
                     <span aria-current="page" class="page-numbers current">1</span>
                     <a class="page-numbers" href="page/2/index.html">2</a>
                     <a class="page-numbers" href="page/3/index.html">3</a>
                     <span class="page-numbers dots">&hellip;</span>
                     <a class="page-numbers" href="page/63/index.html">5</a>
                     <a class="next page-numbers" href="page/2/index.html">Próximo &raquo;</a>
                  </div>
               </div>
            </div>
            <div class="grid-25 prefix-5">
               <!--Side Bar -->
               <?php get_sidebar(); ?>
            </div>
         </div>
      </main>

<?php get_footer(); ?>
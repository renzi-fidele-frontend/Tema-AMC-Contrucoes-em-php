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
                     while (have_posts()) : the_post();
                     $pod = pods('post');
                     $pod->find();
                     $count = 0;
                     while ($pod->fetch()) {
                        if ($count == 0) {
                           $imagem = $pod->display('imagem');
                           echo '<div class="box-post">';
                              echo '<div class="last-post">';
                                 echo '<a href="cromoterapia/index.html" title="Cromoterapia: conheça o poder das cores na decoração">';
                                    echo '<div class="image-post" style="background-image: url(' . $imagem . ')">';
                                       echo '<div class="box-icon-cat meu-ape">';
                                          echo '<i class="icon-meu-ape"></i>';
                                       echo '</div>';
                                       echo '<div class="chamada-post meu-ape">';
                                          echo '<span class="data meu-ape">' . get_the_date() . '</span>';
                                          echo '<h2>' . $pod->display('titulo_post_principal') . '</h2>';
                                          echo '<p>' . reduzirTexto($pod->display('descricao'), 160) . '</p>';
                                       echo '</div>';
                                    echo '</div>';
                                 echo '</a>';
                              echo '</div>';
                           echo '</div>';
                           
                     }
                     $count ++;
                     }
                  endwhile;
                  ?>

                  
               </div>

               <!--Lista dos Posts-->
               <div class="list-post">
                  <!--Post 1-->
                  <div class="grid-50 tablet-grid-50">
                     <div class="box-post">
                        <div class="image-post meu-ape" style="background-image: url('../../wp-content/uploads/2023/12/cores-cronoterapia.jpg')">
                           <div class="box-icon-cat meu-ape">
                              <i class="icon-meu-ape"></i>
                           </div>
                        </div>
                        <div class="chamada-post">
                           <span class="datameu-ape">7 de dezembro de 2023</span>
                           <h2>Caixa vai digitalizar crédito habitacional para facilitar acesso a imóveis</h2>
                           <p>
                              Você já pensou em como as cores na decoração podem influenciar no nosso estado físico e emocional? Especialmente
                              para você que busca não apenas decorar seu apartamento,...
                           </p>
                        </div>
                        <a href="../../cromoterapia/index.html" title="Leia mais" class="btn-more meu-ape">Leia mais</a>
                     </div>
                  </div>


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
<aside class="sidebar">
   <div class="tablet-grid-50">
      <div class="banners">
         <!--Sliders contendo o banner-->
         <ul class="slide-banners">
            <li>
               <a target="_blank" href="https://amc.eng.br/empreendimentos/detalhes/solar-de-hamburgo.html" title="Solar de Hamburgo">
                  <img src="<?php bloginfo('template_directory');?>/build/img/banners/banner1.jpg" alt="AMC Blog" />
               </a>
            </li>

            <li>
               <a target="_blank" href="https://amc.eng.br/empreendimentos/detalhes/ilha-di-capri.html" title="Ilha di Capri">
                  <img src="<?php bloginfo('template_directory');?>/build/img/banners/banner2.jpg" alt="AMC Blog" />
               </a>
            </li>

            <li>
               <a target="_blank" href="https://amc.eng.br/empreendimentos/detalhes/solar-dos-alamos.html" title="Solar dos Álamos">
                  <img src="<?php bloginfo('template_directory');?>/build/img/banners/banner3.jpg" alt="AMC Blog" />
               </a>
            </li>
         </ul>
      </div>
   </div>
   <div class="tablet-grid-50">
      <!--Posts mais lidos-->
      <div class="box-more">
         <h3>Os mais <strong>lidos</strong></h3>
         <?php
            while (have_posts()) : the_post();

            $pod = pods('post');
            $pod->find(array('limit' => 5));
            while ($pod->fetch()) {
               echo '<div class="list-more">' . $pod->display('titulo_post_principal');
                  echo '<a href="' . $pod->display('url') . '" class="more"><span> + </span> Ir para post</a>';
               echo '</div>';
            } endwhile;
         ?>
      </div>
   </div>
   <div class="tablet-grid-50">
      <div class="corretor cf">
         <a href="https://www.amc.eng.br/faleconosco.html" title="Chat Online" data-seo="chat-topo" target="blank">
            <div class="icone">
               <i class="icon-chat2"></i>
            </div>
            <div class="content">
               <h3><span>Fale com o </span> Corretor</h3>
            </div>
         </a>
      </div>
   </div>
   <div class="tablet-grid-50">
      <div class="corretor cf">
         <a
            href="https://www.amc.eng.br/ligamos-para-voce.html"
            title="Ligamos para você"
            data-seo="chat-topo"
            target="_blank"
         >
            <div class="icone">
               <i class="icon-phone-squared"></i>
            </div>
            <div class="content">
               <h3><span>A AMC liga </span> para você</h3>
            </div>
         </a>
      </div>
   </div>
</aside>
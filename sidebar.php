<aside class="sidebar">
   <div class="tablet-grid-50">
      <div class="banners">
         <!--Sliders contendo o banner-->
         <ul class="slide-banners">
            <li>
               <a href="https://yticon.com.br/empreendimentos/londrina/solar-di-milano" title="Solar di Milano">
                  <img src="wp-content/uploads/2023/06/bannerblog_solardimilano.png" alt="" />
               </a>
            </li>

            <li>
               <a href="https://yticon.com.br/empreendimentos/campinas/graciosa-mansoes" title="Graciosa Mansões">
                  <img src="wp-content/uploads/2023/03/BANNER-LATERAL-BLOG-2888X419PX.png" alt="" />
               </a>
            </li>

            <li>
               <a href="https://yticon.com.br/empreendimentos/londrina/hype" title="Banner Hype">
                  <img src="wp-content/uploads/2023/02/bannerblog-hype-1.jpg" alt="" />
               </a>
            </li>

            <li>
               <a href="wp-content/uploads/2022/08/ay-brisas-banner-blog.jpg" title="Brisas Bella Citta">
                  <img src="wp-content/uploads/2022/08/ay-brisas-banner-blog.jpg" alt="" />
               </a>
            </li>

            <li>
               <a href="https://yticon.com.br/empreendimentos/maringa/up-residence" title="Conheça o Up! Yticon">
                  <img src="wp-content/uploads/2022/04/YT-UP-BANNER_LATERALBLOG_288X419PX_F.jpg" alt="" />
               </a>
            </li>

            <li>
               <a href="https://yticon.com.br/empreendimentos/londrina/vibe" title="Vibe Yticon">
                  <img src="wp-content/uploads/2022/03/BANNER-LATERAL-BLOG.png" alt="" />
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
                  echo '<a href="' . get_permalink(get_the_ID()) . '" class="more"><span> + </span> Ir para post</a>';
               echo '</div>';
            } endwhile;
         ?>
      </div>
   </div>
   <div class="tablet-grid-50">
      <div class="corretor cf">
         <a href="" title="Chat Online" data-seo="chat-topo" target="blank">
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
            href="https://www.construtoradesucesso.com.br/ligamos-para-voce"
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
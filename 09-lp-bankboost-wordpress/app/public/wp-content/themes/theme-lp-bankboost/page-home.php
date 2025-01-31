<?php 
  //Template name: Home
?>

<?php get_header() ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
  <section class="s-hero">
      <div class="container">
        <div class="left" data-aos="fade-right" data-aos-duration="1500" data-aos-easing="ease">
          <h3>
            Abra sua conta, é só baixar o app!
          </h3>
          <h1>
            Desperte seu potencial financeiro com o Bankboost!
          </h1>
          <button class="btn">
            Abra sua conta digital
          </button>
          <ul>
            <li>
              <img src="<?php echo get_template_directory_uri(  )?>/img/02. hero-section/anuidade-icon.svg" alt="ícone cartão">
              <span>Cartão sem<br>anuidade</span>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(  )?>/img/02. hero-section/conta-gratis-icon.svg" alt="Ícone celular">
              <span>Conta digital <br>100% grátis</span>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(  )?>/img/02. hero-section/dinheiro-icon.svg" alt="Ícone dinheiro">
              <span>Seu dinheiro <br>rendendo mais</span>
            </li>
          </ul>
        </div>
        <div class="right">
          <h2 data-aos="zoom-in" data-aos-duration="1000" data-aos-easing="ease-in-sine" data-aos-delay="400">
            Banco 100% digital
          </h2>
          <div class="cards">
            <img src="<?php echo get_template_directory_uri(  )?>/img/02. hero-section/card-hero-01.png" alt="imagem de um cartão" class="item card-one" data-aos="fade-down" data-aos-duration="1000" data-aos-easing="ease-in-sine" data-aos-delay="300">
            <img src="<?php echo get_template_directory_uri(  )?>/img/02. hero-section/card-hero-02.png" alt="imagem de um cartão" class="item card-two" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-sine" data-aos-delay="300">
          </div>
        </div>
      </div>
  </section>


  <section class="s-boost">
      <div class="container">
        <div class="left" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-sine">
          <div class="mockup">
            <img src="<?php echo get_template_directory_uri(  )?>/img/03. boost-section/mockup-iphone.svg" alt="mockup-iphone">
          </div>
          <div class="description">
            <img src="<?php echo get_template_directory_uri(  )?>/img/03. boost-section/icon-app-boost.svg" alt="icon-app-boost" class="icon">
            <h3>
              Baixe nosso app
            </h3>
            <p>
              Que tal abrir uma conta digital para ver como a gente faz a sua vida muito mais simples?
            </p>
            <ul>
              <li>
                <a href="#" target="_blank">
                  <img src="<?php echo get_template_directory_uri(  )?>/img/03. boost-section/apple-store.svg" alt="apple-store">
                </a>
              </li>
              <li>
                <a href="#" target="_blank">
                  <img src="<?php echo get_template_directory_uri(  )?>/img/03. boost-section/google-play.svg" alt="google-play">
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="right" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-sine">
          <h2>
            Resolva sua vida direto pelo app boost!
          </h2>
          <ul class="list">
            <li>
              <div class="icon">
                <img src="<?php echo get_template_directory_uri(  )?>/img/03. boost-section/icon-cartao.svg" alt="">
              </div>
              <div class="text">
                <h4>
                  Cartão de crédito sem anuidade
                </h4>
                <p>
                  Conta digital com cartão de crédito sem anuidade e sem complicação
                </p>
              </div>
            </li>
            <li>
              <div class="icon">
                <img src="<?php echo get_template_directory_uri(  )?>/img/03. boost-section/icon-taxas.svg" alt="">
              </div>
              <div class="text">
                <h4>
                  Sem taxas
                </h4>
                <p>
                  Transferências, boletos de depósito e outros serviços gratuitos
              </div>
            </li>
            <li>
              <div class="icon">
                <img src="<?php echo get_template_directory_uri(  )?>/img/03. boost-section/icon-investimentos.svg" alt="">
              </div>
              <div class="text">
                <h4>
                  Mais investimentos
                </h4>
                <p>
                  Rendem mais que a poupança e você resgata quando quiser
              </div>
            </li>
          </ul>
          <a href="#" class="btn">
            Conheça outros produtos
          </a>
          <div class="box" data-aos="fade-up" data-aos-duration="500" data-aos-easing="ease-in-sine">
            <div class="text">
              <h3>
                Boost Pejota
              </h3>
              <h5>
                Contas digitais PJ gratuitas para decolar seu negócio!
              </h5>
              <p>
                As melhores contas para fazer pagamentos, compras e receber dos seus clientes.
              </p>
              <ul>
                <li>
                  <a href="#">
                    Sou MEI
                  </a>
                </li>
                <li>
                  <a href="">
                    SOU ME
                  </a>
                </li>
              </ul>
            </div>
            <img src="<?php echo get_template_directory_uri(  )?>/img/03. boost-section/card-front-pj.png" alt="cartao pj" class="card">
          </div>
        </div>
      </div>
  </section>

  <section class="s-depositions" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-sine">
      <div class="container">
        <div class="title">
          <h2>Prático, fácil, moderno 
            <strong>Você resolve tudo sem estresse 😊</strong>
          </h2>
          <div class="swiper-pagination">
            
          </div>
        </div>

        <div class="slide-deposition">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="card-deposition">
                <div class="user">
                  <span> @marciogurka</span>
                  <img src="<?php echo get_template_directory_uri(  )?>/img/04. deposition-section/icon-twitter.svg" alt="icon twitter">
                </div>
                <p>Valeu @banconenon! Linda embalagem e o cartão tbm é lindo! Muito amor por esse banco #bancoBankboost</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-deposition">
                <div class="user">
                  <span> @marciogurka</span>
                  <img src="<?php echo get_template_directory_uri(  )?>/img/04. deposition-section/icon-twitter.svg" alt="icon twitter">
                </div>
                <p>Valeu @banconenon! Linda embalagem e o cartão tbm é lindo! Muito amor por esse banco #bancoBankboost</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-deposition">
                <div class="user">
                  <span> @marciogurka</span>
                  <img src="<?php echo get_template_directory_uri(  )?>/img/04. deposition-section/icon-twitter.svg" alt="icon twitter">
                </div>
                <p>Valeu @banconenon! Linda embalagem e o cartão tbm é lindo! Muito amor por esse banco #bancoBankboost</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-deposition">
                <div class="user">
                  <span> @marciogurka</span>
                  <img src="<?php echo get_template_directory_uri(  )?>/img/04. deposition-section/icon-twitter.svg" alt="icon twitter">
                </div>
                <p>Valeu @banconenon! Linda embalagem e o cartão tbm é lindo! Muito amor por esse banco #bancoBankboost</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="card-deposition">
                <div class="user">
                  <span> @marciogurka</span>
                  <img src="<?php echo get_template_directory_uri(  )?>/img/04. deposition-section/icon-twitter.svg" alt="icon twitter">
                </div>
                <p>Valeu @banconenon! Linda embalagem e o cartão tbm é lindo! Muito amor por esse banco #bancoBankboost</p>
              </div>
            </div>
          </div>
        </div> 
      </div>
  </section>
    
    
  <div class="s-account">
      <div class="container">
        <div class="left" data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease-in-sine">
          <h2>
            Aproveite <strong>Domine o seu dinheiro com uma conta 100% digital</strong>
          </h2>
          <ul>
            <li>
              <img src="<?php echo get_template_directory_uri(  )?>/img/05. account-section/icon-cartao.svg" alt="icon-cartao">
              <div class="text">  
                <h4>
                  Cartão visa internacional
                </h4>
                <p>
                  Tenha facilidades e benefícios para o seu dia a dia.
                </p>
              </div>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(  )?>/img/05. account-section/icon-mensalidade.svg" alt="icon-cartao">
              <div class="text">  
                <h4>
                  Zero mensalidade e anuidade
                </h4>
                <p>
                  Não gaste grana pagando taxas desnecessárias.
                </p>
              </div>
            </li>
            <li>
              <img src="<?php echo get_template_directory_uri(  )?>/img/05. account-section/icon-investimento.svg" alt="icon-cartao">
              <div class="text">  
                <h4>
                  Investimento que rende mais que a poupança
                </h4>
                <p>
                  Invista o seu dinheiro de maneira mais rentável.
                </p>
              </div>
            </li>
          </ul>
          <a href="#" class="btn">
            Abra sua conta digital
          </a>
        </div>
        <div class="right">
          <img src="<?php echo get_template_directory_uri(  )?>/img/05. account-section/mockup-app-01.png" class="mockup one" alt="mockup-app-01" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-sine" data-aos-delay="300">
          <img src="<?php echo get_template_directory_uri(  )?>/img/05. account-section/mockup-app-02.png" class="mockup two" alt="mockup-app-02" data-aos="fade-down" data-aos-duration="1000" data-aos-easing="ease-in-sine" data-aos-delay="300">
        </div>
      </div>
  </div>

  <?php endwhile; else: endif; ?>

<?php get_footer() ?>




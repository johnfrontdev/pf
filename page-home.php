<?php
// Template Name: Home
get_header(); ?>
<?php $home = get_page_by_title('home');?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   <main>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <div class="textoSlider">
                        <h5 class="titulo-slider">Conversão</h5>
                        <p class="text-end">Por WhatsApp</p>
                        <button class="btn btn-default bg-pink">Botao</button>
                    </div>
                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/img-home.png" width="300">

                    </div>
                    <div class="carousel-item">
                    </div>
                    <div class="carousel-item">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
        </div>
   </main>

   
   <div id="objetivos" class="container">
            <h2 class="txt-pink"><?php the_field('titulo_inicial'); ?></h2>
            <p><?php the_field('descricao_inicial'); ?></p>
        <div class="row g-3">
        <?php if(have_rows('conteudo_caixa')): while(have_rows('conteudo_caixa')) : the_row(); ?>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <i class="fa-brands fa-whatsapp text-center"></i>
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php the_sub_field('titulo_caixa'); ?></h5>
                        <p class="card-text"><?php the_sub_field('descricao_caixa'); ?></p>
                    </div>
                </div>
            </div>
            <?php endwhile; else : endif; ?>
            
        </div>
        <div class="container d-flex justify-content-center">
            <a href="#" class="btn btn-primary">EU QUERO PARTICIPAR</a>
        </div>
        
    </div>

    <section id="como-funciona" class="container-fluid publico">

        <div class="row">
            <div class="col-md-6 bg-blue bg-blue-padding justify-content-end align-items-center saber">
                <div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/img3.png">
                <h1><span class="span-fonte-rosa">SAIBA COMO</span><br>FUNCIONA</h1>
                </div>
              </div>
              <div class="col-md-6 bg-primary bg-blue-padding">
                <ul class="list-unstyled">
                    <li><i class="fa-solid fa-check"></i>Montaremos o seu planejamento</li>
                    <li><i class="fa-solid fa-check"></i>Criaremos todas as artes</li>
                    <li><i class="fa-solid fa-check"></i>Anunciaremos em busca de resultados</li>
                    <li><i class="fa-solid fa-check"></i>Analisaremos os dados</li>
                    <li><i class="fa-solid fa-check"></i>Você não precisará fazer nada</li>
                    <li><i class="fa-solid fa-check"></i>Apenas colher os resultados</li>
                </ul>
              </div>
        </div>
        <div id="publico" class="row align-items-center pad-public">
            <div class="col-md-6 bg-blue bgg bg-blue-padding justify-content-end">
                <div style="width: 75%;">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img2.png">
                <h1>SEU PÚBLICO <br><span class="span-fonte-rosa">ONDE ELE ESTIVER</span></h1>
                <p>Estamos passando por uma fase difícil, mas o marketing digital está aí para alavancar o seu negócio.</p>
                </div>
              </div>
              <div class="col-md-6 bgg">
                <ul class="list-unstyled text-center">
                    <li>Atrair</li>
                    <li class="bg-pink">Visita seu site/Landing</li>
                    <li style="background-color: #2680EB;">Rastreamos o visitante</li>
                    <li style="background-color: #2680EB;">Dia a dia do visitante</li>
                    <li class="bg-pink">Nossa publicidade</li>
                </ul>
              </div>
        </div>
        <div class="container d-flex justify-content-center align-items-center">
        <a href="#" class="btn btn-primary bg-pink">EU QUERO PARTICIPAR</a>
        </div>
            <div class="beneficios container-fluid">
            <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6 ss">
                    <div>
                        <h2>RELATÓRIO<br><span class="txt-pink">MENSAL</span></h2>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/relatorio.png">
                    </div>
                </div>
                <div class="col-md-6 sd">
                    <p class="font-p"><i class="fa-solid fa-check"></i>Saiba quantas pessoas conheceram o seu negócio</p>
                    <p class="font-p"><i class="fa-solid fa-check"></i>A quantidade de leads gerados</p>
                    <p class="font-p"><i class="fa-solid fa-check"></i>Próximos passos gerados</p>
                </div>
            </div>
            <div class="mobile row justify-content-center align-items-center">
                <div class="col-md-6 ss">
                    <div>
                        <p class="font-p" style="text-align: right;">Tudo planejado de acordo com a necessidade do seu negócio. Tenha em mãos todas as estratégias necessárias para entrar no jogo</p>
                    </div>
                </div>
                <div class="col-md-6 sd">
                    <div>
                        <h2>PLANEJAMENTO<br><span class="txt-pink">MENSAL</span></h2>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/planejamento.png">
                    </div>
                </div>
            </div>
            <div class="row">
              <button class="btn btn-primary">EU QUERO PARTICIPAR</button>
            </div>
                
        </section>

    </section> 


    <section id="contato" class="contato container-fluid">
        <div class="div container">
        <div class="row align-items-center">
            <div class="primeiro-grupo-contato col-md-6 text-end">
                <img src="<?php echo get_template_directory_uri(); ?>/img/img2.png">
                <h1>EU QUERO IR PARA<br><span class="txt-pink">O PRÓXIMO NÍVEL</span></h1>
                <p>Estamos passando por uma fase difícil, mas o marketing digital está aí para alavancar o seu negócio.</p>
            </div>
            <div class="col-md-6 formulario">
            
                <form>
                <div class="form-group">
                    <label for="inputName">SEU NOME</label>
                    <input type="text" class="form-control" id="inputTxt">
                </div>
                <div class="form-group">
                    <label for="inputEmail">EMAIL</label>
                    <input type="email" class="form-control" id="inputEmail">
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                    <label for="inputTel">TELEFONE</label>
                    <input type="number" class="form-control" id="inputTel">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputSite">SITE DA EMPRESA</label>
                    <input type="txt" class="form-control" id="inputSite">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                    <label for="inputInst">INSTAGRAM</label>
                    <input type="txt" class="form-control" id="inputInst">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputFb">FACEBOOK</label>
                    <input type="txt" class="form-control" id="inputFb">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputTxt">QUAL O SEU MAIOR DESEJO?</label>
                    <input type="text" class="form-control" id="inputTxt">
                </div>
                <div class="row justify-content-end">

                    <button class="btn btn-primary bg-pink">ENVIAR</button>

                </div>
                </form>
            </div>
        </div>
        </div>
    </section>
    
   

   

    <?php endwhile; else: endif;?>

    <?php get_footer(); ?>













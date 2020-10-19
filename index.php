<?php 
require_once("cabecalho.php");
?>

<!-- Hero Section Begin -->
    <section class="hero hero-mobile">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Categorias</span>
                        </div>
                        <ul>
                            <li><a href="#">Camisas</a></li>
                            <li><a href="#">Calças</a></li>
                            <li><a href="#">Blusas</a></li>
                            <li><a href="#">Jaquetas</a></li>
                            <li><a href="#">Shorts</a></li>
                            <li><a href="#">Vestidos</a></li>
                            <li><a href="#">Conjuntos</a></li>
                            <li><a href="#">Moletons</a></li>
                            <li><a href="#">Verão</a></li>
                            <li><a href="#">Inverno</a></li>
                            <li><a href="#">Calçados</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                
                                <input type="text" placeholder="O que você precisa?">
                                <button type="submit" class="site-btn">Pesquisar</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <a target="_blank" title="Whatsapp" href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp_link ?>" title="<?php echo $whatsapp ?>"><i class="fa fa-whatsapp text-success"></i></a>
                            </div>
                            <div class="hero__search__phone__text">
                             <a target="_blank" title="Whatsapp" href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp_link ?>" title="<?php echo $whatsapp ?>"> 
                                <h6><?php echo $whatsapp ?></h6>
                                <span> Abrir o Whatsapp</span>
                             </a>  
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
                        <div class="hero__text">
                            <span><?php echo strToUpper($nome_loja) ?></span>
                            <h2>Roupas mais baratas <br />da internet</h2>
                            <p>Aqui você encontra as melhores promoções</p>
                            <a href="#" class="primary-btn">Comprar agora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/categorias/Conjuntos.jpg">
                        <h5><a href="#">Conjuntos</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/categorias/Blusas.jpg">
                        <h5><a href="#">Blusas</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/categorias/Vestidos.jpg">
                        <h5><a href="#">Vestidos</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/categorias/Shorts.jpg">
                        <h5><a href="#">Shorts</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/categorias/Saias.jpg">
                        <h5><a href="#">Saias</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/categorias/Cropped.jpg">
                        <h5><a href="#">Croppeds</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Produtos Destaques</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">Todas</li>
                        <li data-filter=".blusas">Blusas</li>
                        <li data-filter=".calca">Calças</li>
                        <li data-filter=".vestidos">Vestidos</li>
                        <li data-filter=".blusa-manga">Blusa Manga longa</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            <div class="col-lg-3 col-md-4 col-sm-6 mix blusas">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="img/produtos/blusa-de-suplex-com-bojo.jpg">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <a href="produto.php"><h6>Blusa de Suplex com Bojo</h6>
                            <h5>R$ 20,00</h5></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix blusas">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/produtos/blusa-camurça-de-botao-e-amarracao.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Blusa Camurça de Botão e Amarração</a></h6>
                            <h5>R$ 20,00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix calca">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/produtos/calca-de-suplex-camuflada.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Calça de Suplex Camuflada</a></h6>
                            <h5>R$24,90</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix calca">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/produtos/calca-bengaline-ref-a.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="produto.php">Calça Bengaline Ref A</a></h6>
                            <h5>R$ 34,90</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vestidos">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/produtos/vestido-curto-canelado.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Vestido curto canelado</a></h6>
                            <h5>R$ 19,90</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vestidos">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/produtos/vestido-canelado-mid-com-gola.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Vestido canelado mid com (Gola)</a></h6>
                            <h5>R$ 24,90</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix blusa-manga">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/produtos/parka.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Parka</a></h6>
                            <h5>R$ 49,90</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix blusa-manga">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/produtos/blusa-corta-vento.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Blusa Corta Vento</a></h6>
                            <h5>R$ 29,90</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <a href="produtos.php">
                            <img src="img/banner/banner-1.jpg" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <a href="produtos.php">
                        <img src="img/banner/banner-2.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Novos Produtos</h4>
                        <div id="novosProdutos" class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/produtos/short-veludo.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Short Veludo</h6>
                                        <span>R$ 19,90</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/produtos/short-jean.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Short Jeans</h6>
                                        <span>R$ 19,90</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/produtos/conjunto-calvim-klain.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Conjunto Calvim Klain</h6>
                                        <span>R$ 19.90</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/produtos/conjunto-de-veludo.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Conjunto de veludo</h6>
                                        <span>R$ 69,90</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/produtos/jardineira-longa-bengaline.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Jardineira Longa bengaline</h6>
                                        <span>R$ 44,90</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/produtos/saia-degode.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Saia Degode</h6>
                                        <span>R$ 39,90</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Mais Vendidos</h4>
                        <div id="maisVendidos" class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/produtos/conjunto-de-veludo.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Conjunto de veludo</h6>
                                        <span>R$ 69,90</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/produtos/jardineira-longa-bengaline.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Jardineira Longa bengaline</h6>
                                        <span>R$ 44,90</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/produtos/saia-degode.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Saia Degode</h6>
                                        <span>R$ 39,90</span>
                                    </div>
                                    
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/produtos/short-veludo.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Short Veludo</h6>
                                        <span>R$ 19,90</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/produtos/short-jean.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Short Jeans</h6>
                                        <span>R$ 19,90</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/produtos/conjunto-calvim-klain.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Conjunto Calvim Klain</h6>
                                        <span>R$ 19.90</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Combos Promocionais</h4>
                        <div id="combosPromocionais" class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/produtos/conjunto-calvim-klain.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/produtos/short-jean.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/produtos/short-veludo.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/produtos/saia-degode.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/produtos/jardineira-longa-bengaline.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/produtos/conjunto-de-veludo.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    
<?php
require_once("rodape.php");
?>

    
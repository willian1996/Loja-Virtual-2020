<!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li><?php echo $endereco_loja ?></li>
                            <li>Telefone: <?php echo $telefone ?></li>
                            <li>Email: <?php echo $email_loja ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Links Úteis</h6>
                        <ul>
                            <li><a href="contatos.php">Contatos</a></li>
                            <li><a href="carrinho.php">Carrinho</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="lista-produtos.php">Lista de Produtos</a></li>
                        </ul>
                        <ul>
                            <li><a href="">Quem Somos</a></li>
                            <li><a href="#">Projetos</a></li>
                            <li><a href="#">Termos de uso</a></li>
                            <li><a href="#">Politica de privacidade</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Receba nossas promoções por e-mail</h6>
                        
                        <form action="#">
                            <input type="email" placeholder="Digite seu e-mail" required>
                            <button type="submit" class="site-btn">Cadastrar</button>
                        </form>
                        <div class="footer__widget__social">
                            <a target="_blank" title="Facebook" href="#"><i class="fa fa-facebook text-info"></i></a>
                                <a target="_blank" title="Instagram" href="#"><i class="fa fa-instagram text-danger"></i></a>
                                <a target="_blank" title="Whatsapp" href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp_link ?>" title="<?php echo $whatsapp ?>"><i class="fa fa-whatsapp text-success"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados 
  </p></div>
                    
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/mascara.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    



</body>

</html>
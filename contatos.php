<?php 
require_once("cabecalho.php");
?>
  
<?php
require_once("cabecalho-busca.php");
?>
    
<!-- Breadcrumb Section End -->

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span > <a target="_blank" title="Whatsapp" href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp_link ?>" title="<?php echo $whatsapp ?>"><i class="fa fa-whatsapp cor-roxo"></i></a></span>
                    <h4>Whatsapp</h4>
                    <p><?php echo $whatsapp ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_phone"></span>
                    <h4>Telefone</h4>
                    <p><?php echo $telefone ?></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_clock_alt"></span>
                    <h4>Atendimento</h4>
                    <p>09:00 as 19:00</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_mail_alt"></span>
                    <h4>E-mail</h4>
                    <p><?php echo $email_loja ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Contact Section End -->

    <!-- Map Begin -->
<!--
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49116.39176087041!2d-86.41867791216099!3d39.69977417971648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886ca48c841038a1%3A0x70cfba96bf847f0!2sPlainfield%2C%20IN%2C%20USA!5e0!3m2!1sen!2sbd!4v1586106673811!5m2!1sen!2sbd"
            height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div class="map-inside">
            <i class="icon_pin"></i>
            <div class="inside-widget">
                <h4>New York</h4>
                <ul>
                    <li>Phone: +12-345-6789</li>
                    <li>Add: 16 Creek Ave. Farmingdale, NY</li>
                </ul>
            </div>
        </div>
    </div>
-->
    <!-- Map End -->

<!-- Contact Form Begin -->
<div class="contact-form spad bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact__form__title">
                    <h2>Envie uma mensagem</h2>
                </div>
            </div>
        </div>
        <form action="#">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
                </div>
                <div class="col-lg-4 col-md-6">
                    <input type="email" name="email" id="email" placeholder="Digite seu Email">
                </div>
                <div class="col-lg-4 col-md-6">
                    <input type="text" name="telefone" id="telefone" placeholder="Digite seu Whatsapp">
                </div>
                <div class="col-lg-12 text-center">
                    <textarea id="mensagem" name="mensagem"  placeholder="Digite sua mensagem"></textarea>
                    <button type="button" name="btn-enviar-email" class="site-btn" id="btn-enviar-email">Enviar</button>
                </div>

                <div class="col-md-12 text-center mt-3" id="divmensagem"></div>
            </div>
        </form>
    </div>
</div>
    <!-- Contact Form End -->

    <!-- Footer Section Begin -->
<?php
require_once("rodape.php");
?>





















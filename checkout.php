<?php
require_once("cabecalho.php");
?>

<?php
require_once("cabecalho-busca.php");
?>


<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">

        <div class="checkout__form">
            <h4>Confirmar Dados</h4>
            <form action="#">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Nome<span>*</span></p>
                                    <input type="text" id="nome" name="nome">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>CPF<span>*</span></p>
                                    <input type="text" id="cpf" name="cpf">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Celular/ Whatsapp<span>*</span></p>
                                    <input type="text" id="telefone" name="telefone">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>E-mail<span>*</span></p>
                                    <input type="text" id="email" name="email">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Rua<span>*</span></p>
                                    <input type="text" id="rua" name="rua">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="checkout__input">
                                    <p>Numero<span>*</span></p>
                                    <input type="text" id="numero" name="numero">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="checkout__input">
                                    <p>Bairro<span>*</span></p>
                                    <input type="text" id="bairro" name="bairro">
                                </div>
                            </div>
                            
                        </div>
                         <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Complemento</p>
                                    <input type="text" id="complemento" name="complemento">
                                </div>
                            </div>
                             
                             <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>CEP<span>*</span></p>
                                    <input type="text" id="cep" name="cep">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Cidade<span>*</span></p>
                                    <input type="text" id="cidade" name="cidade">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Estado<span>*</span></p>
                                    <input type="text" id="estado" name="estado">
                                </div>
                            </div>
                            
                        
                        </div>
                        
                        
                        
                       

                        
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4>Sua Compra</h4>
                            <div class="checkout__order__products">Produtos <span>Total</span></div>
                            <ul>
                                <li>Vegetable’s Package <span>R$ 75.99</span></li>
                                <li>Fresh Vegetable <span>R$ 151.99</span></li>
                                <li>Organic Bananas <span>R$ 53.99</span></li>
                            </ul>
                            <div class="checkout__order__subtotal">Subtotal <span>R$ 750.99</span></div>
                            <div class="checkout__order__total">Total <span>R$ 750.99</span></div>
                            
                            <p>Pedido será postado nos correios 2 dias uteis após o pagamento ser aprovado</p>
                            
                            
                            <button data-toggle="modal" data-target="#modalPagamento" type="submit" class="site-btn">FINALIZAR COMPRA</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->

<!-- Modal -->
<div class="modal fade" id="modalPagamento" tabindex="-1" aria-labelledby="modalPagamento" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pagamento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
<!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
        <button type="button" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>

<?php
require_once("rodape.php");
?>
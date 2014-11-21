<?php get_header(); ?>
<div class="[ container-fluid ]" id="loaded-container">
    <div class="[ border-top ] [ carrito ] [ clearfix ] [ margin-bottom-2x ]">
        <div class="[ col-xs-12 ] [ center block ]">
            <a href="#" class="[ load-shopping-cart ] [ text-uppercase ] [  right ]"><i class="icon-shopping-cart"></i>  <span>$00.00</span></a>
        </div>
    </div>
    <div class="[ row ] [ margin-bottom ] [ resumen-compra ]">
        <h3>Resumen de compra</h3>
        <div class="[ col-xs-12 col-md-3 ]"><p><span>#</span> Artículos</p></div>
        <div class="[ col-xs-12 col-md-3 ]"><p>Total: <span>$00.00</span></p></div>
    </div>
    <div class="[ row ] [ margin-bottom ] [ checkout ]">
        <div class="[ col-xs-12 ]">
            <h3>Datos para envío</h3>
            <p>Nombre Apellido</p>
            <p>Calle Numero</p>
            <p>Colonia</p>
            <p>Estado CP</p>
            <p>Telefono</p>
        </div>
    </div>
    <div class="[ row ] [ margin-bottom ] [ checkout ]">
        <h3>Método de pago</h3>
        <div class="[ col-xs-12 ] [ border-bottom ][ opcion-pago ]">
            <div class="[ radio ]">
                <label>
                    <input class="[ input-normal ]" type="radio" name="metodo-pago" id="pago-tarjeta" value="tdc" checked>
                    Tarjeta de crédito o débito
                </label>
            </div>
        </div>
        <div class="[ col-xs-12 ] [ texto-opcion-pago ] [ pago-tarjeta-box ]">
            <form role="[ form ]">
            	<div class="[ col-xs-12 ] [ margin-bottom ]">
            		<img class="[ img-responsive ]" src="<?php echo THEMEPATH; ?>images/tarjeta-deb-cred.png" alt="">
            	</div>
                <div class="clear"></div>
                <div class="[ form-group ] [ col-xs-12 col-md-6 ]">
                    <label for="nombre">Nombre y apellido*</label>
                    <input type="text" class="[ form-control ]" id="nombre" placeholder="Nombre">
                </div>
                <div class="[ form-group ] [ col-xs-12 col-md-6 ]">
                    <label for="numero-tarjeta">Número de tarjeta*</label>
                    <input type="text" class="[ form-control ]" id="numero-tarjeta" placeholder="Solo números, sin guiones ni espacios">
                </div>
                <div class="clear"></div>
                <div class="[ form-group ] [ col-xs-12 col-md-6 ]">
                    <label class="[ block ]" for="caducidad">Caducidad*</label>
                    <select class="[ form-control ] [ input-normal ]" id="caducidad-mes">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                        <option value="">6</option>
                        <option value="">7</option>
                        <option value="">8</option>
                        <option value="">9</option>
                        <option value="">10</option>
                        <option value="">11</option>
                        <option value="">12</option>
                    </select>
                    <select class="[ form-control ] [ input-normal ]" id="caducidad-año">
                        <option value="">2014</option>
                        <option value="">2015</option>
                        <option value="">2016</option>
                        <option value="">2017</option>
                        <option value="">2018</option>
                        <option value="">2019</option>
                        <option value="">2020</option>
                        <option value="">2021</option>
                        <option value="">2022</option>
                        <option value="">2023</option>
                        <option value="">2024</option>
                        <option value="">2025</option>
                    </select>
                </div>
                <div class="[ form-group ] [ col-xs-12 col-md-6 ]">
                    <label for="codigo-seguridad">Código de seguridad* <span>¿Qué es esto?</span></label>
                    <input type="text" class="[ form-control ]" id="codigo-seguridad">
                </div>
                <div class="[ clear ]"></div>
                <div class="[ form-group ] [ col-xs-12 col-md-6 ]">
                    <label for="calle-tarjeta">Calle*</label>
                    <input type="text" class="[ form-control ]" id="calle-tarjeta">
                </div>
                <div class="[ form-group ] [ col-xs-12 col-md-6 ]">
                    <label for="cp-tarjeta">Código postal*</label>
                    <input type="number" class="[ form-control ]" id="cp-tarjeta">
                </div>
            </form>
        </div>
        <div class="[ col-xs-12 ] [ border-bottom ] [ opcion-pago ] [ pago-paypal ]">
            <div class="[ radio ]">
                <label>
                    <input class="[ input-normal ]" type="radio" name="metodo-pago" id="pago-paypal" value="paypal">
                    PayPal
                </label>
            </div>
        </div>
        <div class="[ col-xs-12 ] [ border-bottom ] [ texto-opcion-pago ] [ pago-paypal-box ]">
        	<div class="[ col-xs-12 ] [ margin-bottom ]">
        		<img class="[ img-responsive ]" src="<?php echo THEMEPATH; ?>images/paypal.png" alt="">
        	</div>
            <p>Al hacer click en confirmar compra te estará redirigiendo al sitio de papal donde terminarás el proceso de pago</p>
        </div>
        <div class="[ col-xs-12 ] [ border-bottom ] [ opcion-pago ] [ pago-entrega ]">
            <div class="[ radio ]">
                <label>
                    <input class="[ input-normal ]" type="radio" name="metodo-pago" id="pago-efectivo" value="efectivo">
                    Pago contra entrega
                </label>
            </div>
        </div>
        <div class="[ col-xs-12 ] [ border-bottom ] [ box-pago-entrega ] [ texto-opcion-pago ] [ pago-efectivo-box ]">
            <p>El pago debe ser en efectivo. El horario de entrega es de 9am a 7pm y podrá tardar hasta 2 días adicionales a nuetros tiempos de entrega. Te llamaremos para confirmar la órden antes de enviar el pedido.</p>
        </div>
        <div class="[ col-xs-12 ] [ border-bottom ] [ opcion-pago ] [ pago-transferencia ]">
            <div class="[ radio ]">
                <label>
                    <input class="[ input-normal ]" type="radio" name="metodo-pago" id="pago-transferencia" value="transferencia">
                    Transferencia bancaria
                </label>
            </div>
        </div>
        <div class="[ col-xs-12 ] [ border-bottom ] [ texto-opcion-pago ] [ pago-transferencia-box ]">
            <div class="[ col-xs-12 ] [ margin-bottom ]">
                <img class="[ img-responsive ]" src="<?php echo THEMEPATH; ?>images/banorte-ixe.png" alt="">
            </div>
            <p>Las instrucciones para la transferencia bancaria las recibirás directamente a tu correo, y también las podrás ver en el siguiente paso.</p>
        </div>
        <div class="[ col-xs-12 ] [ border-bottom ] [ opcion-pago ] [ pago-oxxo ]">
            <div class="[ radio ]">
                <label>
                    <input class="[ input-normal ]" type="radio" name="metodo-pago" id="pago-oxxo" value="oxxo">
                    Pago en OXXO
                </label>
            </div>
        </div>
        <div class="[ col-xs-12 ] [ border-bottom ] [ texto-opcion-pago ] [ pago-oxxo-box ]">
        	<div class="[ col-xs-12 ] [ margin-bottom ]">
        		<img class="[ img-responsive ]" src="<?php echo THEMEPATH; ?>images/oxxo.png" alt="">
        	</div>
            <p>Las instrucciones detalladas te aparecerán en el siguiente paso y recibieras un recibo a tu correo.</p>
        </div>
        <div class="[ col-xs-12 ] [ border-bottom ] [ opcion-pago ] [ pago-deposito ]">
            <div class="[ radio ]">
                <label>
                    <input class="[ input-normal ]" type="radio" name="metodo-pago" id="pago-deposito" value="deposito">
                    Depósito bancario
                </label>
            </div>
        </div>
        <div class="[ col-xs-12 ] [ border-bottom ] [ texto-opcion-pago ] [ pago-deposito-box ]">
            <div class="[ col-xs-12 ] [ margin-bottom ]">
                <img class="[ img-responsive ]" src="<?php echo THEMEPATH; ?>images/banorte-ixe.png" alt="">
            </div>
            <p>Las instrucciones para el depósito bancario las recibirás directamente a tu correo, y también las podrás ver en el siguiente paso.</p>
        </div>
    </div>
    <div class="[ row ] [ margin-bottom ] [ checkout ]">
        <button type="submit" class="[ btn btn-primary ] [ back-checkout ] [ margin-bottom-2x ]">Volver</button>
        <button type="submit" class="[ btn btn-primary ] [ load-confirmacion ] [ margin-bottom-2x ]">Confirmar compra</button>
    </div>
</div>
<?php get_footer(); ?>
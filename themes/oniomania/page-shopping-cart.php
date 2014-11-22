<?php get_header(); ?>
<div class="[ container-fluid ]" id="loaded-container">
            <div class="[ border-top ] [ carrito ] [ clearfix ] [ margin-bottom-2x ]">
                <div class="[ col-xs-12 ] [ center block ]">
                    <a href="#" class="[ load-shopping-cart ] [ text-uppercase ] [  right ]"><i class="icon-shopping-cart"></i>  <span>$00.00</span></a>
                </div>
            </div>
            <div class="[ row ] [ margin-bottom ] [ shopping-cart ][ carrito-producto ]">
                <div class="[ col-xs-12 col-md-3 ] [ margin-bottom ] ">
                    <p class="[ text-center ]">Artículo tal</p>
                    <img  class="[ col-xs-6 col-md-12 ][ img-responsive ] [ center block ] [ margin-bottom ]" src="images/tienda/preview.png" alt="...">
                    <p class="[ text-center ] [ eliminar ]">Eliminar <i class="fa fa-trash-o"></i></p>
                </div><!-- TIPO DE PLAYERA-->
                <div class="[ col-xs-6 col-md-2 ] [ margin-bottom ]">
                    <p class="[ text-center ]">Talla</p>
                    <select class="[ form-control ] [ margin-bottom ] [ carrito-input ]">
                        <option  value="" disabled selected>Escoge una talla</option>
                        <option>Chica</option>
                        <option>Mediana</option>
                        <option>Grande</option>
                    </select>
                </div><!-- TIPO DE PLAYERA-->
                <div class="[ col-xs-6 col-md-2 ] [ margin-bottom ]">
                    <p class="[ text-center ]">Color</p>
                    <select class="[ form-control ] [ margin-bottom ] [ carrito-input ]">
                        <option value="" disabled selected>Escoge un color</option>
                        <option>Negro</option>
                        <option>Magenta</option>
                        <option>Dorado</option>
                    </select>
                </div><!-- TIPO DE PLAYERA-->
                <div class="[ col-xs-6 col-md-2 ] [ margin-bottom ]">
                    <p class="[ text-center ]">Cantidad</p>
                    <input class="[ form-control ] [ margin-bottom ] [ carrito-input ]" type="number" placeholder="cantidad">
                </div><!-- TIPO DE PLAYERA-->
                <div class="[ col-xs-6 col-md-2 ] [ margin-bottom ] [ right ]">
                    <p class="[ text-center ]">Precio</p>
                    <p class="[ text-center ] [ carrito-input ]">$250.00</p>
                </div><!-- TIPO DE PLAYERA-->
            </div>
            <div class="[ row ] [ margin-bottom ]">
                <div class="[ col-xs-6 col-md-2 ] [ margin-bottom ] [ center bock ] [ carrito-total ]">
                    <p class="[ text-center ]">Total</p>
                    <p class="[ text-center ]">$250.00</p>
                </div><!-- TIPO DE PLAYERA-->
            </div>
            <div class="[ row ] [ margin-bottom-2x ]">
                <button class="[ btn btn-primary ] [ load-checkout ] [ center block ]">checkout</button>
            </div>
        </div>
<?php get_footer(); ?>
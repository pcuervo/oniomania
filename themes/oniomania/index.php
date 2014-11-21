<?php get_header(); ?>
	<!-- Full Page Image Background Carousel Header -->
    <div id="myCarousel" class="carousel home slide carousel-fade" data-ride="carousel">
        <!-- Wrapper for Slides -->
        <div class="carousel-inner slider-home">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('<?php echo THEMEPATH; ?>images/bg-01.jpg');"></div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('<?php echo THEMEPATH; ?>images/bg-02.jpg');"></div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('<?php echo THEMEPATH; ?>images/bg-03.jpg');"></div>
            </div>
        </div>
    </div>
    <!-- Page Content -->
    <div class="[ to-load ] [ js-to-load ] [ center block ]">

    </div>
    <div class="modal fade" id="playeras-todo">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="[ modal-title ] [ text-center ]">Escoge tu playera</h4>
                </div>
                <div class="modal-body">
                    <ul class="[ clearfix ] [ list-unstyled ] [ lista-productos ]">
                        <li class="[ col-xs-6 ]">
                            <div class="radio">
                                <label>
                                    <img class="[ img-responsive ]" src="<?php echo THEMEPATH; ?>images/tienda/tank-02.png" alt="">
                                     <input class="center-block" type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- #playeras-todo -->
    <div class="modal fade" id="estampados-todo">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="[ modal-title ] [ text-center ]">Escoge un diseño</h4>
                </div>
                <div class="modal-body">
                    <ul class="[ clearfix ] [ list-unstyled ] [ lista-productos ]">
                        <li class="[ col-xs-6 ]">
                            <div class="radio">
                                <label>
                                    <img class="[ img-responsive ]" src="<?php echo THEMEPATH; ?>images/disenos/rombos.png" alt="">
                                     <input class="center-block" type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- #playeras-todo -->
</div>
<?php get_footer(); ?>
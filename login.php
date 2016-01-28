<!DOCTYPE html>
<html lang="en">
    <?php include_once 'templates/head.php'; ?>
    <body>

        <?php include_once 'templates/header.php'; ?>


        <!-- *****************************************************************************************************************
         BLUE WRAP
         ***************************************************************************************************************** -->
        <div id="blue">
            <div class="container">
                <div class="row">
                    <h3>Clientes.</h3>
                </div><!-- /row -->
            </div> <!-- /container -->
        </div><!-- /blue -->


        <!-- *****************************************************************************************************************
         CONTACT FORMS
         ***************************************************************************************************************** -->

        <div class="container mtb">
            <div class="row">
                <div class="col-lg-6">
                    <div class="col-lg-8 col-lg-offset-3">
                        <h4>REGISTRO</h4>
                        <div class="hline"></div>
                        <p>Motivacion</p>
                        <form role="form">
                            <div class="form-group">
                                <label for="inputNombre">Nombres</label>
                                <input type="text" class="form-control" id="inputNombre">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Correo Electrónico</label>
                                <input type="email" class="form-control" id="inputEmail">
                            </div>
                            <div class="form-group">
                                <label for="inputEdificio">Edificio</label>
                                <input type="text" class="form-control" id="inputEdificio">
                            </div>
                            <div class="form-group">
                                <label for="inputTelefono">Teléfono</label>
                                <input type="number" class="form-control" id="inputTelefono">
                            </div>
                            <button type="submit" class="btn btn-theme">Enviar</button>
                        </form>
                    </div>
                </div><! --/col-lg-8 -->

                <div class="col-lg-6">
                    <div class="col-lg-8 col-lg-offset-1">
                        <h4>REGISTRO</h4>
                        <div class="hline"></div>
                        <p>Motivacion</p>
                        <form role="form">
                            <div class="form-group">
                                <label for="inputNombre">Nombres</label>
                                <input type="text" class="form-control" id="inputNombre">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Correo Electrónico</label>
                                <input type="email" class="form-control" id="inputEmail">
                            </div>
                            <div class="form-group">
                                <label for="inputEdificio">Edificio</label>
                                <input type="text" class="form-control" id="inputEdificio">
                            </div>
                            <div class="form-group">
                                <label for="inputTelefono">Teléfono</label>
                                <input type="number" class="form-control" id="inputTelefono">
                            </div>
                            <button type="submit" class="btn btn-theme">Enviar</button>
                        </form>
                    </div>
                </div><! --/col-lg-8 -->
            </div><! --/row -->
        </div><! --/container -->


        <!-- *****************************************************************************************************************
         FOOTER
         ***************************************************************************************************************** -->
        <?php include_once 'templates/footer.php'; ?>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <?php include_once 'templates/js.php'; ?>


    </body>
</html>
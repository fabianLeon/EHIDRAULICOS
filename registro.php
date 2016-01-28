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
                    <h3>Registro.</h3>
                </div><!-- /row -->
            </div> <!-- /container -->
        </div><!-- /blue -->


        <!-- *****************************************************************************************************************
         CONTACT FORMS
         ***************************************************************************************************************** -->

        <div class="container mtb">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="ctitle" style="text-align: center">BIENVENIDO</h3>
                            <h4 style="text-align: center">Gracias por confiar en nosotros !</h4>
                        </div>
                        <div class="panel-body">
                            <br>
                            <form role="form">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="inputNombre" required="" placeholder="* Nombres">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="inputEmail" required="" placeholder="* Correo Electrónico">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="inputEdificio"  placeholder="Edificio o Direccion (opcional)">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" id="inputTelefono" required="" placeholder="* Teléfono Fijo o Celular">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="inputPassword" required="" placeholder="* Contraseña ">
                                </div>
                                <div style="text-align: center">
                                    <button type="submit" class="btn btn-theme">Registrar</button>
                                </div>
                            </form>
                        </div>
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
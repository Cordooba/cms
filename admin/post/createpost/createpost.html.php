        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="container">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Crear Artículos
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i><a href="<?=$base_admin_path?>"> Administración</a>
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-file"></i></i><a href="<?=$base_admin_path?>post"> Artículos </a>
                            </li>
                            <li>
                                <i class="glyphicon glyphicon-plus-sign"></i> Crear Artículos
                            </li>
                        </ol>
                    </div>
                </div>
            <div class="row">
                <form action="" method="post">
                <div class="form-group bar">
                    <label for="featured_image">Imágen Principal :</label>
                        <input type="text" class="form-control" name="featured_image" placeholder="Imágen">
                </div>
                <div class="form-group bar">
                    <div class="checkbox">
                        <label for="status"> Estado : <br>
                            <input type="checkbox" value="">
                                Visible
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                                No Visible
                        </label>
                    </div>
                </div>
                <div class="form-group bar">
                    <label for="slug">Url :</label>
                        <input type="text" class="form-control" name="slug" placeholder="Url...">
                </div>
                </form>
            </div>    
                <!-- /.row -->
           <form action="" method="post">
                <div class="form-group">
                    <label for="title">Título :</label>
                        <input type="text" class="form-control" name="title" placeholder="Título...">
                </div>
                <div class="form-group">
                    <label for="excerpt">Descripción :</label>
                        <textarea class="form-control" name="excerpt" rows="3" placeholder="Descripción del articulo..."></textarea>
                </div>
                <div class="form-group">
                    <label for="content">Artículo :</label>
                        <textarea class="form-control" name="content" rows="8" placeholder="Contenido del artículo..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Añadir</button>
            </form>    
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?=$base_admin_path?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=$base_admin_path?>js/bootstrap.min.js"></script>

</body>

</html>
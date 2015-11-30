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
                <div class="container">
                    <div class="col-lg-8">
                        <form action="" method="post">
                    <?php if ( empty($errores['errorTittle']) ) : ?>
                    <div class="form-group">
                        <label for="title">Título :</label>
                            <input type="text" class="form-control" name="title" placeholder="Título..." value="<?php if ( isset($title) ) echo $title ;?>">
                    </div>
                    <?php else : ?>
                        <div class="form-group has-error has-feedback">
                            <label class="control-label" for="title">Título :</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Título..." aria-describedby="inputError2Status">
                            <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                            <span id="inputError2Status" class="sr-only">(error)</span>
                        </div>
                    <?php endif ; ?>
                    <div class="form-group">
                        <label for="excerpt">Descripción :</label>
                            <textarea class="form-control" name="excerpt" rows="3" placeholder="Descripción del articulo..." value="<?php if ( isset($excerpt) ) echo $excerpt ;?>"></textarea>
                    </div>
                     <div class="form-group">
                        <label for="content">Artículo :</label>
                            <textarea class="form-control" name="content" rows="8" placeholder="Contenido del artículo..." value="<?php if ( isset($content) ) echo $content ;?>"></textarea>
                     </div>
                     <div class="form-group">
                                <label for="slug">Url :</label>
                                    <input type="text" class="form-control" name="slug" placeholder="Url..." value="<?php if ( isset($slug) ) echo $slug ;?>">
                            </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Añadir</button>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <form action="" method="post">
                            <div class="form-group bar">
                                <label for="featured_image" class="featured_image">Imágen Principal:</label>
                                    <input type="text" class="form-control image" name="featured_image" placeholder="Imágen" value="<?php if ( isset($featured_image) ) echo $featured_image ;?>">
                            </div>
                            <div class="form-group bar">
                            <label for="" class="status">Estado:</label>
                                <select name="status" id="status" class="status">
                                    <option value="published">Visible</option>
                                    <option value="draft">No Visible</option>
                                </select>
                            </div>
                        </div>
                        </form> 
            </div>   
                <!-- /.row -->
              
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
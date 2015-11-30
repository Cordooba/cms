        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Artículos
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i><a href="<?=$base_admin_path?>"> Administración</a>
                            </li>
                            <li class="active">
                                <i class="glyphicon glyphicon-file"></i> Artículos
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
            <div class="btn-new">
                <a class="btn btn-primary btn-lg btn-block btn-new-post" href="<?=$base_admin_path?>post/createpost/">Nuevo...</a>
            </div>
            <div class="row">
                <table class="table table-striped">
                <?php if (empty($listOfPost)) :?>
                        <thead>
                            <tr>
                                <th>Sin artículos...</th>
                            </tr>
                        </thead>
                    <?php else: ?>   
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Descripción</th>
                            <th>Fecha de Publicación</th>
                            <th>Fecha de Creación</th>
                            <th>Autor</th>
                            <th>Estado</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <?php foreach($listOfPost as $list) :?>
                        <tr>
                            <td><?=$list['title']?></td>
                            <td><?=$list['excerpt']?></td>
                            <td><?=$list['date_pub']?></td>
                            <td><?=$list['createdat']?></td>
                            <td><?=$list['id_author']?></td>
                            <td><?=$list['state']?></td>
                            <td><i class="glyphicon glyphicon-edit"></i></td>
                            <td><i class="glyphicon glyphicon-trash"></i></td> 
                        </tr>
                    <?php endforeach; ?>    
                <?php endif; ?>        
                </table>
            </div>
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

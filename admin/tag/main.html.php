  <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Etiquetas
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i><a href="<?=$base_admin_path?>"> Administración</a>
                            </li>
                            <li class="active">
                                <i class="glyphicon glyphicon-tag"></i> Etiquetas
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
            <div class="btn-new">
                <a class="btn btn-primary btn-lg btn-block btn-new-post" href="<?=$base_admin_path?>tag/createtag/">Nuevo...</a>
            </div>
            <div class="row">
                <table class="table table-striped">
                    <?php if (empty($listOfTags)) :?>
                        <thead>
                            <tr>
                                <th>Sin etiquetas...</th>
                            </tr>
                        </thead>
                    <?php else: ?>   
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                        <?php foreach($listOfTags as $list) :?>
                        <tr>
                            <td><?=$list['name']?></td>
                            <td><a href="<?=$base_admin_path?>category/editcategory"><i class="glyphicon glyphicon-edit"></i></a></td>
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

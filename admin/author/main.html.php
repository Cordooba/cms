  <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Autores
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i><a href="<?=$base_admin_path?>"> Administración</a>
                            </li>
                            <li class="active">
                                <i class="glyphicon glyphicon-user"></i> Autores
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
            <div class="btn-new col-lg-3">
            <h2>Añadir Autor:</h2>
                <form action="?add" method="POST">
                             <div class="form-group">
                                <label for="name">Nombre :</label>
                                    <input type="text" class="form-control" name="nickname" placeholder="Nombre del autor...">
                                <label for="pswd">Contraseña :</label>    
                                    <input type="text" class="form-control" name="password" placeholder="Contraseña del autor...">
                                <label for="mail">E-mail :</label>    
                                    <input type="text" class="form-control" name="email" placeholder="E-mail...">
                                <label for="rol">Rol :</label>    
                                    <select class="form-control" name="role">
                                        <option value="Admin">Admin</option>
                                        <option value="Editor">Editor</option>
                                    </select>    
                            </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Añadir</button>
                        </form>
            </div>    
            <div class="row col-lg-9">
            <h2>Lista de Autores</h2>
                <table class="table table-striped">
                    <?php if (empty($listOfAuthor)) :?>
                        <thead>
                            <tr>
                                <th>Sin autores...</th>
                            </tr>
                        </thead>
                    <?php else: ?>   
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                        <?php foreach($listOfAuthor as $list) :?>
                        <tr>
                            <td><?=$list['nickname']?></td>
                            <td><?=$list['email']?></td>
                            <td><?=$list['role']?></td>
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

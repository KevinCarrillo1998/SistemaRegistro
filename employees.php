<?php
include_once "header.php";
include_once "nav.php";
include_once "functions.php";
$employees = getEmployees();
?>
<br>
<div class="row">
    <div class="col-12">
        <h1 class="text-center">Empleados</h1>
    </div>
    <div class="col-12">
        <a href="employee_add.php" class="btn btn-info mb-2"> <i class="fa fa-plus"></i></a>
    </div>
    <div class="col-12">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Numero</th>
                        <th>Nombre</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($employees as $employee) { ?>
                        <tr>
                            <td>
                                <?php echo $employee->id ?>
                            </td>
                            <td>
                                <?php echo $employee->name ?>
                            </td>
                            <td>
                                <a class="btn btn-warning" href="employee_edit.php?id=<?php echo $employee->id ?>">
                                <i class="fa fa-edit"></i>
                            </a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="employee_delete.php?id=<?php echo $employee->id ?>">
                                <i class="fa fa-trash"></i>
                            </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include_once "footer.php";

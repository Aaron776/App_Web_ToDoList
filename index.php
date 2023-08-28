<?php include 'tareas.php';?>

<!doctype html>
<html lang="en">
<head>
  <title>Aplicacion To Do List</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <style>
    .subrayado{
      text-decoration: line-through;
    }

  </style>
</head>
<body>
  <main class="container">
    <br>
    <div class="card">
        <div class="card-header">
            Lista de Tareas (TO DO LIST)
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="mb-3">
                  <input type="text"
                    class="form-control" name="tarea" id="tarea" aria-describedby="helpId" placeholder="Escriba su tarea.....">
                </div>
                <input name="agregarTarea" id="agregarTarea" class="btn btn-primary" type="submit" value="Agregar Tarea">
            </form>
            <br>
            <ul class="list-group">
                <?php foreach($registros as $index){?> 
                    <li class="list-group-item">
                      <form action="" method="post">
                        <input type="hidden" name="id" id="id" value="<?php echo $index['id'];?>">
                        <input class="form-check-input" type="checkbox" value="<?php echo $index['estado'];?>" onchange="this.form.submit()" name="tarea_chek"<?php echo ($index['estado'] == 1)?'checked':''; ?>>
                        <?php echo ($index['estado'] == 1)?'<span class="subrayado">':''; ?>
                            <span><?php echo $index['nombre'];?></span>
                            <h6 class="float-end">
                                <a href="?id=<?php echo $index['id'];?>" class="text-danger"><span class="badge bg-danger">x</span></a>
                            </h6>
                      </form>
                    </li>
                <?php }?>
            </ul>
        </div>
    </div>
  </main>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
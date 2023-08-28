<?php 
    //Conexion a la base de datos
    try {
        $conn=new PDO("mysql:host=localhost;dbname=app_todolist","root","");
    } catch (PDOException $e) {
        echo "Error de conexion".$e->getMessage();
        die();
    }

    //Consulta a la base de datos en la tabla Tareas
    $sql="SELECT * FROM tareas";
    $registros=$conn->query($sql);

    
    //Agregar tarea a la base de datos
    if(isset($_POST['agregarTarea'])){ // en este if estoy verificand si se presiono el boton del formualrio de agregar tarea
        $nuevaTarea=$_POST['tarea'];
        $sql="INSERT INTO tareas (nombre) VALUE (?)";
        $sentencia=$conn->prepare($sql);
        $sentencia->execute([$nuevaTarea]);
    }

    //Borrar la  tarea de la base de datos
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql="DELETE FROM tareas WHERE id=?";
        $sentencia=$conn->prepare($sql);
        $sentencia->execute([$id]);
    }

    // Actualizar estado de la tarea de la base de datos
   if(isset($_POST['id'])){
       $id=$_POST['id'];
       $tarea=(isset($_POST['tarea_chek'])?1:0);
       $sql="UPDATE tareas SET estado=? WHERE id=?";
       $sentencia=$conn->prepare($sql);
       $sentencia->execute([$tarea,$id]);
   }



    
?>
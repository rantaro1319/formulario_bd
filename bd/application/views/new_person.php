<?php plantilla::aplicar();

if($_POST){

$persona = $_POST;

$persona['fecha'] =time();
core_persona::guardar($persona);
redirect('main/listx');



}


$persona = new stdClass;
$persona->cedula = '';
$persona->id = '';
$persona->nombre = '';
$persona->apellido = '';
$persona->genero = '';
$persona->tiposangre = '';
$persona->comentario = '';

if(isset($id)){

   $rs = core_persona::persona_x_id($id);
   if(count($rs) > 0){

    $persona = $rs[0];
   }
}


?>



<div align = "text-center"> 
 
<h3>Agregar/Editar Persona</h3>

</div>

<form method = "post" action = "">

    <div class = 'row' > 

<div class = 'col-md-6' al>
<input type = 'hidden' name = 'id' value = <?= $persona->id ?>>
<?= asgInput('cedula', 'Cedula',$persona->cedula) ?>
<?= asgInput('nombre', 'Nombre',$persona->nombre) ?>
<?= asgInput('apellido', 'Apellido',$persona->apellido) ?>

<label>sexo : </label>
<input type = "radio" name ="genero" value = "Hombre" required>Hombre
<input type = "radio" name ="genero" value = "Mujer" required>Mujer
<br>
<label>Tipo de sangre </label>
<select required name = "tiposangre"  >
<option > </option>
<option value = 'O+' > O+</option>
<option value = 'O-'> O-</option>
<option value = 'A+'> A+</option>
<option value = 'B-'> B-</option>
<option value = 'B+'> B+</option>
<option value = 'AB-'> AB-</option>
<option value = 'AB+'> AB+</option>
</select>
<?= asgInput('comentario', 'Comentario',$persona->comentario )?>


<div class='text-center'>

    <br>
<button type="submit" class= 'btn btn-success'> <i class='fa fa-save'></i> Guardar </button>
</div>

</div>



    </div>







</form>
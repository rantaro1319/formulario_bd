<?php plantilla::aplicar(); ?>

<h3>Lista de personas agregadas </h3>

<table class = 'table'>

<thead>

<tr>  

<th>Cedula</th>
<th>Fecha</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Genero</th>
<th>Tipo de sangre</th>
<th>Comentario</th>

</tr>
</thead>
<tbody>
<?php

$rs = core_persona::listado();

foreach($rs as $persona){
    $urlEditar = base_url("main/editar/{$persona->id}");
    $urlBorrar = base_url("main/borrar/{$persona->id}");
    $persona->fecha = date('d/m/Y G:i',$persona->fecha);
echo <<<PERSONA

<tr>

<td>{$persona->cedula}</td>
<td>{$persona->fecha}</td>
<td> {$persona->nombre}</td>
<td> {$persona->apellido}</td>
<td> {$persona->genero}</td>
<td>{$persona->tiposangre}</td>
<td>{$persona->comentario}</td>
<td> <a href ='{$urlBorrar}' class ='btn btn-danger'> <i class="fas fa-trash-alt"></i> </a> </td>
<td> <a href ='{$urlEditar}' class ='btn btn-warning'> <i class="far fa-edit"></i> </a> </td>

</tr>

PERSONA;


}

?>
</tbody>
</table>


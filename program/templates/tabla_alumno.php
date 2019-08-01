<?php


$valores=$_SESSION['consul'];
$filas=0;
?>
<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nombre</th>
									<th>Apellido</th>
									<th>Cedula</th>
									
								</tr>
							</thead>
							<tbody>
								<?php foreach ($filas as $valores) {?>
								<tr>
									<td><?php echo $valores["id"] ?></td>
									<td><?php echo $valores["nombre"] ?></td>
									<td><?php echo $valores["apellido"] ?></td>
									<td><?php echo $valores["cedula"] ?></td>
								
								</tr>
								<?php }?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
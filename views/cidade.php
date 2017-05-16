<div class="col-md-9">
	<form class="form-group" action="cidade/adicionar" method="post">
		<div class="form-group">
			<input type="text" placeholder="nome" name="nome" class="form-control" required="required"/>
		</div>
		<div class="form-group">
			<input type="text" placeholder="geocodigo" name="geocodigo" class="form-control" required="required"/>
		</div>
		<div class="form-group">
			<input type="text" placeholder="latitude" name="latitude" class="form-control" required="required"/>
		</div>
		<div class="form-group">
			<input type="text" placeholder="longitude" name="longitude" class="form-control" required="required"/>
		</div>
		<button type="submit" class="btn btn-success" name="salvar">Salvar</button>
	</form>
	<hr>
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Nome</th>
					<th>Geocodigo</th>
					<th>Latitude</th>
					<th>Longitude</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($lista as $key => $value) { ?>
			
						<td><?php echo $value->id; ?></td>
						<td><?php echo $value->nome; ?></td>
						<td><?php echo $value->geocodigo; ?></td>
						<td><?php echo $value->latitude; ?></td>
						<td><?php echo $value->longitude; ?></td>
					</tr>
			<?php } ?>
			</tbody>
		</table>
		<form class="form-group" action="inicio" method="post">
	    	<button type="submit" class="btn btn-default">Voltar</button>
		</form>
	</div>
	
	
</div>
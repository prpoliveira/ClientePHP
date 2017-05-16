<div class="row">
<div class="col-md-3">
	<form class="form-group" action="../frete/calculo" method="POST">		
		
		<div class="form-group">				
				<select name="cidadeA" class="form-control" required>				 
				 <option disabled="disabled" selected="selected" value="">Selecione a cidade A</option>
				<?php foreach ($lista as $key => $value) { 
						echo "<option value= ".$value->id." > ".$value->nome." </option>";
						}
				?>	  
				</select>							
		</div>
		<div class="form-group">
			<select name="cidadeB" class="form-control" required>
				<option disabled="disabled" selected="selected" value="">Selecione a cidade B</option>
				<?php foreach ($lista as $key => $value) { 
						echo "<option value= ".$value->id." > ".$value->nome." </option>";
						}
				?>			  
			</select>
		</div>
		
		<div class="form-group">
	    	<input type="submit" value="Calcular Frete" class="btn btn-success" name="calcula" />
	    </div>
	</form>
	<hr>
</div>
<div class="col-md-3"></div>
<div class="col-md-3"></div>
<div class="col-md-3"></div>
</div>
<div class="row">
<div class="col-md-9">
	<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Cidade A</th>
						<th>Cidade B</th>
						<th>Distancia (KM)</th>
						<th>Valor do Frete</th>
					</tr>
				</thead>
				<tbody>
				<?php if(isset($_POST['calcula'])){ ?>
								<tr>
									<td><?php echo $fretao[0]->pontoA; ?></td>
									<td><?php echo $fretao[0]->pontoB; ?></td>
									<td><?php echo $fretao[0]->distancia; ?></td>
									<td>R$ <?php echo " ".number_format($fretao[0]->valorFrete, 2,',', '.'); ?></td>
								</tr>
				<?php 		 

						}
				?>
				</tbody>
			</table>
		</div>
		<hr>
		<form class="form-group" action="../inicio" method="post">
	    <button type="submit" class="btn btn-default">Voltar</button>
	    <hr>
	</form>
</div>
</div>
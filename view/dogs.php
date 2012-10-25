<?php
	require_once "../include/cabecalho.php";
	require_once "../model/dog.php";
	require_once "../model/database.php";
?>


        <div id="conteudo">
				<h2 >Dogs</h2>
				<div id="content">
					<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
						<thead>
							<tr>
								<th>Nome</th>  
								<th>Ver</th>
								<th>Editar</th>
								<th>Apagar</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$dogs = Dog::find_all();
							foreach($dogs as $dog) {
								echo "<tr class='gradeA'>";
									echo "<td>";
									echo $dog->nome;
									echo "</td>";
									echo "<td class='center'>";
									echo "<a href='ver_dog.php?id=$dog->id'>Ver</a>";
									echo "</td>";
									echo "<td class='center'>";
									echo "<a href='edit_dog.php?id=$dog->id'>Editar</a>";
									echo "</td>";
									echo "<td class='center'>";
									echo "<a href='../controller/dog_controller.php?action=delete&id=$dog->id'>Apagar</a>";
									echo "</td>";
								echo "</tr>";
							}
						?>
						</tbody>
						<tfoot>
						   <tr>
								<th>Nome</th>
								<th>Ver</th>
								<th>Editar</th>
								<th>Apagar</th>
							</tr> 
						 </tfoot> 
					</table>
				</div>
				<a href="add_dog.php">Adicionar Cachorro</a>
		</div>
	</body>
</html>

<?php
	include '../Include/header.php';
?>

					<div id="banner">
						<div class="container">
							<div class="row">
								
								<div class="12u 12u(mobile)">

									<h1>Recherche</h1>
								
									<form method="post" role="search" action="./rechercheStatique.php">
								        
										<center>
											Saisir vos mots clés pour cette recherche :
											<input type="text" class="form-control" id="motCle" name="motCle" placeholder="Mots clés à rechercher !" maxlength="20">
											</br></br>
											<button type="submit" class="button-big" name="submit">Valider</button>
										</center>
										
								    </form>

								</div>								
							
							</div>
						</div>
					</div>
				</div>

<?php
	include '../Include/footer.php';
?>
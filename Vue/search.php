<?php
	include '../Include/header.php';
?>

					<div id="banner">
						<div class="container">
							<div class="row">
								
								<div class="12u 12u(mobile)">

									<h2> 
										<font size="20pt" color="black">
										    Recherche
										</font>
									</h2>
																	
									<form method="post" role="search" action="./rechercheStatique.php">
								        <font color="black">
											<center>
												Saisir vos mots clés pour cette recherche :
												<input type="text" class="form-control" id="motCle" name="motCle" placeholder="Mots clés à rechercher !" maxlength="20">
												</br></br>
												<button type="submit" class="button-big" name="submit">Valider</button>
											</center>
										</font>
								    </form>

								</div>								
							
							</div>
						</div>
					</div>
				</div>

<?php
	include '../Include/footer.php';
?>
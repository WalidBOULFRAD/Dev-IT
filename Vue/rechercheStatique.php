<?php
	include '../Include/header.php';
?>

					<div id="banner">
						<div class="container">
							<div class="row">
								
								<div class="12u 12u(mobile)">

									<h2> 
										<font size="20pt" color="black">
										    Resultats
										</font>
									</h2>
													
									</br>
																		
									<?php
										$mc = $_POST["motCle"];
										
										echo "<font size='2px' color='black'><center><p>Vous avez fait une recherche sur '$mc', en voila les résultats :</p>";
										
										if (($mc == "actualite") || ($mc == "actualité") || ($mc == "actualites") || ($mc == "actualités")) {
									?>
									
									<script>
										window.location='./new.php';	
									</script>
									
									<?php
										}
										
										if (($mc == "portabilite") || ($mc == "portabilité") || ($mc == "portabilites") || ($mc == "portabilités")) {
									?>
									
									<script>
										window.location='./portability.php';	
									</script>
									
									<?php
										}
										
										if (($mc == "mise a jour") || ($mc == "mise à jour") || ($mc == "mises à jour") || ($mc == "mises a jour")) {
									?>
									
									<script>
										window.location='./update.php';	
									</script>
									
									<?php
										}
										
										if (($mc == "fonctionnalité") || ($mc == "fonctionnalite") || ($mc == "fonctionnalités") || ($mc == "fonctionnalites")) {
									?>
									
									<script>
										window.location='./functionnalities.php';	
									</script>
									
									<?php
										}
										
										if (($mc == "logiciels") || ($mc == "logiciel")) {
									?>
									
									<script>
										window.location='./software.php';	
									</script>
									
									<?php
										}
										
										if (($mc == "accessoires") || ($mc == "accessoire")) {
									?>
									
									<script>
										window.location='./accessories.php';	
									</script>
									
									<?php
										}
										
										echo "</br><p>Aucune information n'est disponible pour cette recherche ...</p></center></font>";
									?>

								</div>								
							
							</div>
						</div>
					</div>
				</div>

<?php
	include '../Include/footer.php';
?>
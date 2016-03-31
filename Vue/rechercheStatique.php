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
																		
									<?php
										$mc = $_POST["motCle"];
										
										echo "<font color='black'>Vous avez fait une recherche sur '$mc', en voila les résultats :";
										
										if (($mc == "actualite") || ($mc == "actualité") || ($mc == "actualites") || ($mc == "actualités")) {
									?>
									
									<script>
										window.location='./new.php';	
									</script>
									
									<?php
										} else {
											echo "</br>Aucune information n'est disponible pour cette recherche ...</font>";
										}
									?>

								</div>								
							
							</div>
						</div>
					</div>
				</div>

<?php
	include '../Include/footer.php';
?>
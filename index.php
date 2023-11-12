<!-- @format -->

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta
			http-equiv="Content-Type"
			content="text/html; charset=utf-8" />

		<title>Générateur de code ADN</title>
		<meta
			http-equiv="X-UA-Compatible"
			content="IE=edge" />
		<meta
			name="robots"
			content="noindex" />
		<meta
			name="description"
			content="Obtenez votre code adn maintenant !" />
		<meta
			name="keywords"
			content="adn abonnement, compte adn gratuit," />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<link
			rel="shortcut icon"
			href="images/favicon.png" />

		<link
			rel="preconnect"
			href="https://fonts.googleapis.com" />
		<link
			rel="preconnect"
			href="https://fonts.gstatic.com"
			crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
			rel="stylesheet" />

		<!-- CSS -->
		<link
			href="css/bootstrap.min.css"
			rel="stylesheet" />
		<link
			href="css/font-awesome.min.css"
			rel="stylesheet" />
		<link
			href="css/animate.css"
			rel="stylesheet" />
		<link
			href="css/style.css"
			rel="stylesheet" />
	</head>

	<body>
		<!-- particles -->
		<div id="particles-js"></div>

		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button
						type="button"
						class="navbar-toggle"
						data-toggle="collapse"
						data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a
						class="navbar-brand"
						href="index.php"
						rel="noindex,nofollow">
						<img
							class="logo-push"
							src="images/logo.png"
							width="120"
							height="43" />
						<span>GÉNÉRATEUR DE CODES</span>
					</a>
				</div>

				<div
					class="collapse navbar-collapse"
					id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a
								id="generateur"
								href="index.php"
								rel="noindex,nofollow"
								>Generateur</a
							>
						</li>
						<li>
							<a
								id="CGU"
								href="CGU.php"
								rel="noindex,nofollow"
								>CGU</a
							>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="card-generator-section">
			<div class="container">
				<div class="panel panel-default">
					<div class="panel-heading">
						<img
							src="images/logo-mini.png"
							width="95"
							alt="" />
						<span class="panel-text"
							>Status: <span style="color:green">EN LIGNE</span></span
						>
					</div>

					<div class="panel-body">
						<h2 class="generator-h2">
							GÉNÉRATEUR DE CODES ADN
							<br />
							<small
								>Cliquez sur l'une des cartes ci-dessous et obtenez votre code
								adn maintenant !</small
							>
						</h2>
						<div class="generator-container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<div class="img-flex-gen">
										<div class="adn-gen-card">
											<img
												class="img-respo card-value"
												src="images/1-ANS.jpg"
												alt=""
												data-value="6 Mois d'abonnement" />
										</div>
										<div class="adn-gen-card">
											<img
												class="img-respo card-value"
												src="images/1-MOIS.jpg"
												alt=""
												data-value="12 Mois d'abonnement" />
										</div>
									</div>

									<div class="row">
										<div class="col-xs-12 col-md-6">
											<div class="switch-holder">
												<label>Continent:</label>
												<div class="input-group">
													<span class="input-group-addon"
														><i class="fa fa-globe fa-lg"></i
													></span>
													<select
														id="region"
														class="form-control ubuntu-bold form-text pointer ">
														<option value="Europe">Europe</option>
														<option value="North America">North America</option>
														<option value="South America">South America</option>
														<option value="Russia">Russia</option>
														<option value="Turkey">Turkey</option>
														<option value="East Asia">East Asia</option>
														<option value="China">China</option>
														<option value="Oceania">Oceania</option>
													</select>
													<input
														id="card"
														type="hidden"
														name="" />
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-6">
											<div class="switch-holder">
												<label>CGU:</label>
												<div class="input-group">
													<div class="form-group right-switch help-switch">
														<input
															type="checkbox"
															id="anon"
															class="anon"
															checked />
														<label
															class="switch-text"
															for="anon"
															><span class="ui"></span
														></label>
													</div>
												</div>
												<span class="switch-text-help"
													>Je reconnais avoir lu et accepté les CGU</span
												>
											</div>
										</div>
									</div>
									<br />
									<a
										class="btn btn-default btn-lg btn-block btn-adn pulse-shadow generate"
										>Générer mon code adn
										<i
											class="fa fa-chevron-right"
											aria-hidden="true"></i
									></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- card-generator-section -->

		<div class="info-generator-section">
			<div class="container">
				<div class="panel panel-default">
					<div class="panel-heading text-center">
						<span class="panel-text-info"
							><i
								class="fa fa-cogs"
								aria-hidden="true"></i>
							Informations Générales</span
						>
					</div>

					<div class="panel-body">
						<div class="generator-container">
							<div class="row">
								<div class="col-md-6 col-md-offset-3">
									<ul class="list-group">
										<li class="list-group-item">
											Dernière MAJ le:
											<?php echo  date("d-m-Y") ?>
										</li>
										<li class="list-group-item">
											Statut du Générateur: En Ligne
										</li>
										<li class="list-group-item">
											Utilisateur en ligne: <span id="online"></span>
										</li>
										<li class="list-group-item">
											Votre adresse IP:
											<?php echo $_SERVER['REMOTE_ADDR'] ?>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- footer -->

		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4">
						<a
							class="social-btn"
							href="#"
							><i class="fa fa-facebook"></i
						></a>
						<a
							class="social-btn"
							href="#"
							><i class="fa fa-twitter"></i
						></a>
						<a
							class="social-btn"
							href="#"
							><i class="fa fa-google-plus"></i
						></a>
					</div>
				</div>
				<p class="text-footer">© Tous droits réservés 2023.</p>
			</div>
		</div>

		<!-- modal-console -->

		<div
			class="modal fade"
			id="modal-console"
			tabindex="-1"
			role="dialog"
			aria-labelledby="console">
			<div
				class="modal-dialog modal-md"
				role="document">
				<div class="modal-content">
					<div class="modal-header">
						<i
							class="fa fa-terminal"
							aria-hidden="true"></i>
						Console root
					</div>

					<div class="modal-body">
						<div class="consol-holder">
							<div class="loader1"></div>
							<div
								id="codes"
								class="text-center"></div>
						</div>

						<p
							id="code"
							class="p-console show-console-text"></p>
						<div class="p-console show-console-text display-none info-msg">
							<div
								id="code-print"
								class="gift-code-holder text-center"></div>
							<br />

							<div class="button-arrows">
								<img
									src="images/arrow-left.png"
									class="img-arrow-left"
									style="display: block;" />
								<img
									src="images/arrow-right.png"
									class="img-arrow-right"
									style="display: block;" />
							</div>
							Complétez un questionnaire gratuit <br />
							pour obtenir votre COMPTEAND
						</div>

						<div class="consol-btn-holder show-console-text display-none">
							<button
								id="proceed"
								class="btn btn-default btn-lg btn-block btn-adn">
								Obtenir mon code adn au complet maintenant !
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- modal-alert -->

		<div
			class="modal fade"
			id="modal-alert"
			tabindex="-1"
			role="dialog"
			aria-labelledby="console">
			<div
				class="modal-dialog modal-md"
				role="document">
				<div class="modal-content">
					<div class="modal-header">
						<i
							class="fa fa-exclamation-triangle"
							aria-hidden="true"></i>
						Attention!
					</div>

					<div class="modal-body">
						<div class="error-holder p-console error"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- offers -->
		<div
			class="modal fade"
			id="modal-offers"
			tabindex="-1"
			role="dialog"
			aria-labelledby="console">
			<div
				class="modal-dialog modal-md"
				role="document">
				<div class="modal-content">
					<div class="modal-header text-center">
						<h3 class="modal-title">
							<img
								src="images/favicon.png"
								width="20"
								alt="" />Veuillez completer l'offre gratuite ci-dessous <br />
							pour obtenir votre code adn au complet<br />
						</h3>
					</div>

					<div class="modal-body offers-body">
						<div class="p-console show-console-text info-msg">
							<ul class="list-group text-center">
								<!--<a target="_blank" href="https://href.li/?http://trk.track4ww.com/aff_c?offer_id=2863&aff_id=967" class="list-group-item list-group-item-offers offer-text">OFFRE 1 : Sejour adnland ! </a> -->
								<a
									target="_blank"
									href="https://href.li/?http://trk.track4ww.com/aff_c?offer_id=3713&aff_id=967"
									class="list-group-item list-group-item-offers offer-text"
									>OFFRE : Disney 30 ans<br />
									Completer notre questionnaire 100% GRATUIT et obtenez votre
									code adn au Complet !
								</a>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- JS -->

		<script src="scripts/jquery-2.2.3.min.js"></script>
		<script src="scripts/bootstrap.min.js"></script>
		<script src="scripts/particles.min.js"></script>
		<script src="scripts/jquery.shuffleLetters.js"></script>
		<script src="scripts/script.js"></script>
	</body>
</html>

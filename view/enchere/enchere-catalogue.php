{{ include ('header.php', {title: 'Catalogue d\'enchère'}) }}

<section>
        <div class="banner-catalogue">
            <div class="content">
                <h2>Nos enchères</h2>
                <p>Découvrez toutes nos enchères</p>
            </div>
        </div>
        <div class="line__red__header"></div>
        <!-- <div class="line__blue__header"></div> -->
    </section>

    <main>
        <div class="wrapper">
            <div class="menu__tri-catalogue-list">
                <select class="menu__tri-select" aria-label="menu__tri-select">
                    <option disabled selected>Trier</option>
                    <option value="tous">Tous</option>
                    <option value="decroissant">Prix décroissant</option>
                    <option value="croissant">Prix croissant</option>
                    <option value="popularite">Par popularité</option>
                    <option value="nouvellement-liste">Nouvellement listée</option>
                    <option value="termine-bientot">Se terminant bientôt</option>
                </select>
                <div class="menu__tri-catalogue-list">
                    <a href="#"><img src="{{path}}/assets/icones/heart-regular.png" alt="icone-liked"></a>
                    <a href="#"><img src="{{path}}/assets/icones/grid.png" alt="icone-grid"></a>
                    <a href="#"><img src="{{path}}/assets/icones/list-solid.png" alt="icone-list"></a>
                </div>  
            </div>
        </div>

		<!-- GALLERIE ENCHÈRES -->
		<div class="wrapper">
			<div class="wrapper__header-catalogue">
				<!-- RECHERCHE AVANCÉE -->
				<div class="wrapper__catalogue_recherche-avancee">
					<h2 class="title--thirdly wrapper__header-catalogue">Recherche Avancée</h2>
					<form method="GET">

                        <section class="tile tile__catalogue-recherche-avancee"> 
							<h3>Pays</h3>
							<select aria-label="select-country">
								<option selected value="tous">Tous les pays</option>
								<option value="canada">Canada</option>
								<option value="usa">États-unis</option>
								<option value="uk">Royaume-Uni</option>
								<option value="chine">Chine</option>
								<option value="espagne">Espagne</option>
								<option value="france">France</option>
								<option value="australie">Australie</option>
							</select>
						</section>

						<section class="tile tile__catalogue-recherche-avancee">
							<h3>Couleur</h3>
							<div>
								<input type="checkbox" id="rouge" value="rouge">
								<label for="rouge">Rouge</label>
							</div>
							<div>
								<input type="checkbox" id="bleu" value="bleu">
								<label for="bleu">Bleu</label>
							</div>
							<div>
								<input type="checkbox" id="vert" value="vert">
								<label for="vert">Vert</label>
							</div>
							<div>
								<input type="checkbox" id="jaune" value="jaune">
								<label for="jaune">Jaune</label>
							</div>
							<div>
								<input type="checkbox" id="orange" value="orange">
								<label for="orange">Orange</label>
							</div>
                            <div>
								<input type="checkbox" id="brun" value="brun">
								<label for="brun">Brun</label>
							</div>
						</section>

						<section class="tile tile__catalogue-recherche-avancee">
							<h3>État</h3>
							<div>
								<input type="checkbox" id="parfaite" value="parfaite">
								<label for="parfaite">Parfaite</label>
							</div>
							<div>
								<input type="checkbox" id="excellente" value="excellente">
								<label for="excellente">Excellente</label>
							</div>
							<div>
								<input type="checkbox" id="tresBonne" value="tresBonne">
								<label for="tresBonne">Très Bonne</label>
							</div>
                            <div>
								<input type="checkbox" id="bonne" value="Bonne">
								<label for="bonne">Bonne</label>
							</div>
							<div>
								<input type="checkbox" id="moyenne" value="moyenne">
								<label for="moyenne">Moyenne</label>
							</div>
							<div>
								<input type="checkbox" id="endommage" value="endommage">
								<label for="endommage">Endommagé</label>
							</div>
						</section>

						<section class="tile tile__catalogue-recherche-avancee">
							<h3>Prix</h3>
							<div class="">
								<div class="">
									<input type="number" id="entrezMontantMinimum" name="prix" placeholder="Minimum">
                                    <label for="entrezMontantMinimum"></label>
									<span>$</span>
								</div>
								<div class="">
									<input type="number" id="entrezMontantMaximum" name="prix" placeholder="Maximum" aria-label="input-price">
                                    <label for="entrezMontantMaximum"></label>   
									<span>$</span>
								</div>
							</div>
						</section>
						<section class="tile tile__catalogue-recherche-avancee">
							<h3>Type</h3>
							<div>
								<input type="checkbox" id="general" value="general">
								<label for="general">Général</label>
							</div>
							<div>
								<input type="checkbox" id="aerien" value="aerien">
								<label for="aerien">Courrier Aérien</label>
							</div>
							<div>
								<input type="checkbox" id="livret" value="livret">
								<label for="livret">Livret</label>
							</div>
							<div>
								<input type="checkbox" id="port-du" value="port-du">
								<label for="port-du">Port dû</label>
							</div>
							<div>
								<input type="checkbox" id="carte-postale" value="carte-postale">
								<label for="carte-postale">Carte postale</label>
							</div>
							<div>
								<input type="checkbox" id="semi-postal" value="semi-postal">
								<label for="semi-postal">Semi postal</label>
							</div>
							<div>
								<input type="checkbox" id="entier-postal" value="entier-postal">
								<label for="entier-postal">Entier postal</label>
							</div>
						</section>

						<section class="tile tile__catalogue-recherche-avancee"> 
							<h3>Année d'émission</h3>
							<div class="">
								<div class="">
									<input type="number" id="entrezUneAnnéeMinimale" name="annee" placeholder="0" aria-label="input-year-min">
                                    <label for="entrezUneAnnéeMinimale"></label>
									<span>-</span>
								</div>
								<input type="number" id="entrezUneAnnéeMaximale" name="annee" placeholder="0"  aria-label="input-year-max">
                                <label for="entrezUneAnnéeMaximale"></label>
							</div>
						</section>

						<section class="tile tile__catalogue-recherche-avancee">
							<h3>Dimensions (pouces)</h3>
							<div class="">
								<div class="">
									<input type="number" id="entrezUneDimensionMinimale" name="dimension" placeholder="0" aria-label="input-dimension-height">
                                    <label for="entrezUneDimensionMinimale"></label>
									<span>-</span>
								</div>
								<input type="number" id="entrezUneDimensionMaximale" name="dimension" placeholder="0" aria-label="input-dimension-width">
                                <label for="entrezUneDimensionMaximale"></label>   
							</div>
						</section>

                        <section class="tile tile__catalogue-recherche-avancee">
							<h3>Autres options</h3>
							<div>
								<input type="checkbox" id="certifie" value="certifie">
								<label for="certifie">Certifié</label>
							</div>
							<div>
								<input type="checkbox" id="encheresActives" value="encheresActives">
								<label for="encheresActives">Enchères actives</label>
							</div>
							<div>
								<input type="checkbox" id="encheresArchivees" value="encheresArchivees">
								<label for="encheresArchivees">Enchères archivées</label>
							</div>
							<div>
								<input type="checkbox" id="choixLord" value="choixLord">
								<label for="choixLord">Choix du Lord</label>
							</div>
						</section>

						<div class="wrapper__header-catalogue">
							<div class="wrapper__btn-recherche">
								<a href="#" class="btn-rechercher">Rechercher &#8594;</a>
							</div>
						</div>
					</form>
				</div>

				<!-- CATALOGUE ENCHÈRES -->
                <section class="">
                    <div class="wrapper__catalogue">  
                        <div>  
                            <div class="numerotation__catalogue-haut">
                                <div>
                                    <p class="categorie__text">68 enchères trouvées  |  0 - 20 de 68</p>
                                </div>
                                <div>    
                                    <a href="#" class=""><img src="{{path}}/assets/icones/chevron-petit.png" alt="icone-chevron-petit" class="icone-chevron-petit"></a>
                                    <a href="#" class=""><span>1</span></a>
                                    <a href="#" class=""><span>2</span></a>
                                    <a href="#" class=""><span>3</span></a>
                                    <a href="#" class=""><span>...</span></a>
                                    <a href="#" class=""><span>7</span></a>
                                    <a href="#" class=""><img src="{{path}}/assets/icones/chevron-grand.png" alt="icone-chevron-grand" class="icone-chevron-grand"></a>
                                </div>   
                            </div>
                        </div>
                        <!-- Grille -->
                        <div class="grid grid--4">
                            {% for enchere in encheres %}
                            <!-- Tuile -->
                            <article class="tile tile__background-mes-encheres">
                                <div class="bg-xlight-gray tile__container">
                                    <p class="tile__lot"># <strong>{{ enchere.idEnchere }}</strong></p>
                                    <img class="icone-coeur" src="{{path}}/assets/icones/heart-regular.png" alt="icone-coeur">
                                </div>
                                <div>
                                    <div>
                                        <div class="tile__img-wrapper">
                                            <img src="{{path}}assets/uploads/{{ enchere.source }}" alt="stamp" class="tile__img">
                                        </div>
                                        <div class="tile__text-wrapper">
                                            <h2 class="tile__line__red__tile">{{ enchere.nom }} {{ enchere.Enchere_id }}</h2>
                                            <div class="tile__mise-prix">
                                                <h4 class="tile__mise">2 Mises</h4>
                                                <h4 class="tile__prix">{{ enchere.mise_courante }} $</h4>
                                            </div>
                                            <div class="tile__mise-prix">
                                                <h4 class="tile__temps">Temps restant :</h4>
                                                <span>{{ enchere.date_fin }} </span>
                                            </div>
                                            <a href="{{path}}/enchere/detailsEnchere/{{enchere.idEnchere}}" class="btn-miser">Miser &#8594;</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            {% endfor %}
					    </div>
                        <div>  
                            <div class="numerotation__catalogue-bas">
                                <div>
                                    <p class="categorie__text">68 enchères trouvées  |  0 - 20 de 68</p>
                                </div>
                                <div>    
                                    <a href="#" class=""><img src="{{path}}/assets/icones/chevron-petit.png" alt="icone-chevron-petit" class="icone-chevron-petit"></a>
                                    <a href="#" class=""><span>1</span></a>
                                    <a href="#" class=""><span>2</span></a>
                                    <a href="#" class=""><span>3</span></a>
                                    <a href="#" class=""><span>...</span></a>
                                    <a href="#" class=""><span>7</span></a>
                                    <a href="#" class=""><img src="{{path}}/assets/icones/chevron-grand.png" alt="icone-chevron-grand" class="icone-chevron-grand"></a>
                                </div>   
                            </div>
                        </div>
				    </div>
                </section>    
			</div>
		</div>
    </main>





{{ include ('footer.php') }}
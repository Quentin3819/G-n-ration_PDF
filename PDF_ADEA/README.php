<h1> Documentation Génération PDF</h1>

<h3>Introduction:</h3>
<p><span class="intro">Auteur:</span> <i>Quentin Comelli</i></p>
<p><span class="intro">Titre:</span> <i>PDF Generator</i></p>
<p><span class="intro">Version:</span> <i>2.0</i></p>
<p><span class="intro">Description:</span> <i>Ce plugin a été concue générer des PDF à la volée pour l'ADEA de Bourg-en-Bresse. Veuillez suivre les instructions à fin que le plugin soit fonctionnel.</i></p>

<h3><span>1.</span> Installation:</h3>

<li><span>1.1</span> Déposez le dossier PDF_ADEA dans le dossier /www/wp-content/plugin de votre FTP.</li>
<li><span>1.2</span> Allez dans le dossier /www/wp-content/themes et entré dans le dossier du thème que vous utilisez.</li>
<li><span>1.2</span> Ajoutez le fichier "generationPdf.php".</li>
<li><span>1.3</span> Dirigez-vous sur votre site.</li>
<li><span>1.4</span> Allez dans le menu administrateur.</li>
<li><span>1.5</span> Allez dans le menu extensions/extensions installées.</li>
<li><span>1.6</span> Activez le plugin.</li>

<p><strong>L'installation est terminée.</strong></p>

<h3>2. Mise en place:</h3>

<li><span>2.1</span> Crée une page avec un titre (exemple: "generation-pdf").</li>
<li><span>2.2</span> Dans l'onglet "Attributs de page" et choisissez Génération PDF.</li>
<li><span>2.3</span> Ensuite créé une nouvelle page avec le titre que vous voulez (exemple: "ÉDUCATION AU MÉDIA")<span id="chiffre"><strong> Ne pas utilisez de chiffre.</strong></span></li>
<li><span>2.4</span> Dans la partie texte ajoutez tout votre contenu et ajouter ce côté pour avoir le bouton de génération.</li><br>
<strong>&lt;form action="/generation-pdf/" method="get" class="form-example"&gt;</strong><br>
<strong>&lt;input type="submit" value="Générer le pdf"&gt;</strong><br>
<strong>&lt;/form&gt;</strong><br><br>
<li><span>2.5</span> Attention dans la premiere ligne changez "generation-pdf" par le titre de votre page (2.1).</li>
<li><span>2.6</span> Vous pouvez aussi changer le texte du bouton. Sur la troisième ligne changez "Générer le PDF" par votre texte.</li>
<li><span>2.7</span> Modifiez ensuite le permalien en lui ajoutant la référence de ce titre (2.3) que vous trouverez dans le googler sheet.</li>
<p>(exemple de permalien " http://VotreSite.com/education-au-media-20001/ ").</p>
<li><span>2.8</span> Allez ensuite sur ce permalien.</li>
<li><span>2.9</span> Cliquez sur le bouton.</li>
<li><span>2.10</span> Votre PDF doit ce généré.</li>

<h3>3. Mise a jour:</h3>

<li><span>3.1</span> Vous pouvez mettre à jour les images des PDF.</li>
<li><span>3.2</span> Avec votre accès FTP allez dans le dossier /www/wp-content/plugins/PDF_ADEA/img.</li>
<li><span>3.3</span> Remplacez l'ancienne image par la nouvelle en utilisant le même nom et la même extension.</li>

<h3>4. Base de donnée synchronisé</h3>

<li><span>4.1</span> Votre base de donnée est synchronisé a partir du google sheet.</li>
<li><span>4.2</span> lien du google sheet "https://docs.google.com/spreadsheets/u/1/d/1oxfgDw2Vez9UuVHLvO3_gWX0phbflZdThFA2mB7-PQQ/edit?fbclid=IwAR0NoE8EJxBGHvbk7tq8cP8XZm9Nce10fdbB-ZqdwUxv_4NCap3So7cO6wo".</li>
<li><span>4.3</span> Ne pas rajouter des catégories dans la base de données.</li>
<li><span>4.4</span> Remplir le tableau dans les colonnes existantes.</li>
<li><span>4.5</span> Ne pas changer les noms des colonnes.</li>
<li><span>4.6</span> Ne pas changer les noms des fiches.</li>
<li><span>4.7</span> Respectez le nombre de caractère indiqué dans le tableau.</li>

<h3>5. Base de donnée manuel</h3>

<li><span>5.1</span> Si la synchronisation n'est plus fonctionelle, il faudra le faire manuellement</li>
<li><span>5.2</span> Téléchargez le tableau Google Sheet en .Ods</li>
<li><span>5.3</span> Aller sur le lien FTP PHPmyadmin cliquez sur votre base</li>
<li><span>5.4</span> Cliquez ensuite sur importer</li>
<li><span>5.5</span> Cliquez sur choisir un fichier et choisissez votre fichier .Ods</li>
<li><span>5.6</span> Ensuite cocher toutes les cases dans la dernière partie</li>
<li><span>5.7</span> Allez ensuite dans l'onglet exporter </li>
<li><span>5.8</span> Sélectionner "Personnalisée, afficher toutes les options possibles" et format SQL</li>
<li><span>5.9</span> Sélectionner les lignes souhaitez </li>
<li><span>5.10</span> Exécutez</li>
<li><span>5.11</span> Allez ensuite sur la base de données cloud d'ovh</li>
<li><span>5.12</span> Allez dans l'onglet "bases de données"</li>
<li><span>5.13</span> Cliquez sur les 3 petits point à côté de votre base souhaitez</li>
<li><span>5.14</span> Sélectionnez importé un fichier</li>
<li><span>5.15</span> Importer un nouveau fichier</li>
<li><span>5.16</span> Sélectionnez votre fichier .Sql puis validez</li>

<h3>6. Information complémentaire</h3>

<p id="infoCompl"><span>5.1</span> Si vous souhaitez changer les emplacements de certains éléments du PDF, changer les couleurs, améliorer le PDF n'hésitez pas à me contacter. Je serais disponible pour toute modification ou amélioration souhaiter.</p>
<p id="infoCompl"><span>5.2</span> Si vous avez le moindre problème (bug technique, incompréhension du fonctionnement, dysfonctionnement....) Je vous invite à me contacter.</p>

<h3>7. Contact</h3>

<p class="teste">Site web: Quentincomelli.fr </i></strong></p>
<p class="teste">Email: Quentin.comelli@live.fr</i></strong></p>
<p class="teste">Git hub : https://github.com/Quentin3819</i></strong></p>

<style>
    .teste{
        color: #0000CC;
        font-weight: bold;
    }
    h3{
        font-weight: bold;
        font-size: 24px;
        text-decoration: underline;

    }
    span{
        color: black;
        font-weight: bold;
        font-size: 14px;
    }
    #infoCompl{
        width: 750px;
    }
    #chiffre{
        color: black;
        font-weight: bold;
    }
    h1{
        text-decoration: underline;
        font-weight: bold;
        font-size: 30px;
    }
    .intro{
        color: black;
        font-weight: bold;
        font-size: 14px;
        text-decoration: underline;

    }
</style>
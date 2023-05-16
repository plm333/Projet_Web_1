{{ include('header.php', {title: 'Mes infos'}) }}

<section class="py-large">
    <div class="wrapper">

        {% if session.username %}
        <div class="username">Bonjour {{ session.username }} !</div>
        {% endif %}

        <h1 class="title--primary">Mes infos</h1><br>

        <div class="line__red__header"></div>

        <div class="mt-small">
            <p><strong>Nom : </strong>{{ utilisateur.nom }}</p><br>
            <p><strong>Prénom : </strong>{{ utilisateur.prenom }}</p><br>
            <p><strong>Adresse : </strong>{{utilisateur.adresse}}</p><br>
            <p><strong>Code Postal : </strong>{{utilisateur.code_postal}}</p><br>
            <p><strong>Téléphone : </strong>{{ utilisateur.telephone }}</p><br>
            <p><strong>Courriel : </strong>{{ utilisateur.courriel }}</p><br>
            <p><strong>Date de naissance: </strong>{{ utilisateur.date_naissance }}</p><br>
            <p><strong>Date d'inscription: </strong>{{ utilisateur.date_inscription }}</p><br>
            <p><strong>Nom d'utilisateur: </strong>{{ utilisateur.username }}</p><br>

            <p><a class="btn-miser" href="{{ path }}utilisateur/edit/{{ utilisateur.id }}">Modifier &#8594;</a></p><br>
        </div>

        

        <div class="mt-small"></div>

        <p><a href="{{ path }}utilisateur/profil">Retour</a></p><br>

    </div> 
</section>                


{{ include ('footer.php') }}
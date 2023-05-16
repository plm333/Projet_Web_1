{{ include ('header.php', {title: 'Connectez-vous'}) }}

    <main>
        <div class="wrapper">
        <div class="mt-large"></div>
            <h1>Connectez-vous!</h1><br>

            <div class="line__red__header"></div>

            {% if errors is defined %}
            <span class="error">{{ errors|raw }}</span>
            {% endif %}

            <form class="mt-small" action="{{ path }}login/auth" method="post">
                <label>Nom d'utilisateur 
                    <input type="email" name="username" placeholder="abc@gmail.com" value="{{ utilisateur.username }}">
                </label>
                <label>Mot de passe 
                    <input type="password" name="password">
                </label>
                <input class="activerBtn" type="submit" value="Se connecter">
            </form><br>
            <p><a href="{{ path }}home/index">Retour</a></p>
            <div class="mt-large"></div>
        </div>
    </main>

{{ include ('footer.php') }}
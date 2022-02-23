<html>
    <head>
        <title>FAQ</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>


    <body>
        <h1 style="text-align:center">FAQ</h1>
        <h2 style="text-align:center">Vous pouvez retrouver ici les différentes questions posées par les utilisateurs et les réponses de l'équipe !</h2><br><br>
        <div>
            <?php
            $questions = ["Question de l'utilisateur 1", "Question de l'utilisateur 2", "Question de l'utilisateur 3", "Question de l'utilisateur 4", "Question de l'utilisateur 5", "Question de l'utilisateur 6"];
            $reponses = ["Réponse de l'équipe 1", "", "Réponse de l'équipe 3", "Réponse de l'équipe 4", "Réponse de l'équipe 5", "Réponse de l'équipe 6"];

            for($i = 0; $i<sizeof($questions); $i++){
                echo "<div style='margin-left:10%'>
                    <p>- $questions[$i]</p>
                    <p>→&emsp;$reponses[$i]</p><br><br>
                </div>";
            }
            ?>
        </div>

        <form method='post' style="text-align:center">
           <div>
                <p>Posez vos questions ici ↓</p>
                <textarea rows="10", maxlength="250", placeholder="Posez votre question...", name="question"></textarea><br><br>
                <input type="submit" value="Publier la question" name="qpublic">
            </div>                 
        </form>

        <?php
        if(isset($POST['qpublic'])){
            array_push($questions, $question);
            array_push($reponses, "");
        }
        ?>    
    </body>
</html>
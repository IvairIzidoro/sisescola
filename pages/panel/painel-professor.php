<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/font/style.css">
    <title>Login</title>
</head>
<body>
    <form name="cadastroNotas" action="crud.php" method="post">
        <div id="cadastroNotas">
            <fieldset>
                <legend>Informações</legend>
                <p>Professor: <input type="text" name="nomeProfessor"></p>
                
                  <p>Aluno: <input type="text" name="nomeAluno">
                   Série: <input type="text" name="serie">
                   Turma <input type="text" name = "turma">
                </p>
            </fieldset><br>
             <fieldset>
             <legend>Notas</legend>
              <nav id="materia">
               <div id="notas">
                    <p>Matéria: <input type="text" name="materia"></p> 
                    <p>Prova 1: <input type="text" name="prova_1"></p>
                    <p>Trabalho 1: <input type="text" name="trabalho_1"></p>
                    <p>Prova 2: <input type="text" name="prova_2"></p>
                    <p>Trabalho 2: <input type="text" name="trabalho_2"></p>
                </div>
            </nav>
            </fieldset>
            <input type="submit" value="Salvar">
        </div>
    </form>
</body>
</html>
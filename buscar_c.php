<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/resultados-dos-exames.png" type="image/x-icon" />
    <title>Resultados da Busca</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #e0f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
        }
        .result-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            margin-top: 20px;
        }
        .result-container h1 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #00796b;
        }
        .result-container ul {
            list-style-type: none;
            padding: 0;
        }
        .result-container li {
            background-color: #f9f9f9;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
        }
        .result-container li strong {
            display: block;
        }
        .result-container p {
            color: #d32f2f;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <?php
        if (isset($_GET['turma'])) {
            $turma = $_GET['turma'];
            
            $turmas = array(
                "INFD3" => array(
                    "16117" => "Amanda Oliveira Santos",
                    "16557" => "Bruno Penteado Carrara",
                    "16563" => "Cibele Souza de Almeida",
                    "16119" => "Danilo Rafhael",
                    "16121" => "Érika Cavalcanti"
                ),
                "CTI2" => array(
                    "17427" => "Diogo Vinicius Oliveira",
                    "17428" => "Douglas José Figueiredo",
                    "17429" => "Emily Da Silva Farias"
                ),
                "INFN3" => array(
                    "16227" => "Andre Ricardo Martins",
                    "16573" => "Andre Schinor Mena Peres",
                    "16228" => "Beatriz Santos de Mello",
                    "16229" => "Caio Ramos Ballarin",
                    "16231" => "Carlos Eduardo Lima"
                )
            );
            
            if (array_key_exists($turma, $turmas)) {
                echo "<h1>Alunos da turma $turma:</h1>";
                echo "<ul>";
                foreach ($turmas[$turma] as $matricula => $nome) {
                    echo "<li><strong>Matrícula:</strong> $matricula <br><strong>Nome:</strong> $nome</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>Turma não encontrada.</p>";
            }
        } else {
            echo "<p>Por favor, forneça uma turma.</p>";
        }
        ?>
    </div>
</body>
</html>

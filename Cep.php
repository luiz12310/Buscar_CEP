<?php

if (isset($_GET["CEP"])) {
    $cep = $_GET["CEP"];

    $url = "https://viacep.com.br/ws/$cep/json/";
    $json = file_get_contents($url);
    $data = json_decode($json);

    // var_dump($data);
} else {
    echo "Nenhum CEP enviado.";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador de CEP</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div id="test">
        <?php

        //     echo "<div class='mapa'>
        //     <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3645.449992874147!2d-46.31201378537316!3d-23.97988178306489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce0244270e879f%3A0xa3bd52521c0347d6!2sAv.%20Dr.%20Epit%C3%A1cio%20Pessoa%2C%20466%20-%20Aparecida%2C%20Santos%20-%20SP%2C%2011030-600!5e0!3m2!1spt-BR!2sbr!4v1621274033673!5m2!1spt-BR!2sbr' width='100%' height='100%' style='border:0;' allowfullscreen='' loading='lazy'></iframe>
        // </div>";

        // property_exists($decodedObject, 'name')
        if(property_exists($data, 'erro')){
            echo "<h1>CEP: Não Existe</h1>";
        }else{

            if($data->logradouro == '')
                $data->logradouro = "Não especificado";

            echo "<h1>CEP: ". $data->cep . "</h1>";
            echo "<div class='infoGene'>
                    <p>CEP: $data->cep</p>
                    <p>Rua: $data->logradouro</p>
                    <p>Bairro: $data->bairro</p>
                    <p>Cidade: $data->localidade</p>
                  </div>";
        }
        ?>
        
    </div>
</body>
</html>

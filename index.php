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
        <h1>Buscador de CEP</h1>
        <div class="search-container">
            <script>
                function enviarDados() {
                    try{
                        var cep = document.getElementById("CEP").value;
                        let index = cep.indexOf("-");

                        if(index == -1){
                            if(isNaN(cep)){
                                alert("Digite um CEP Válido")
                            }else{

                                if(cep.length == 8){
                                    window.location.href = "Cep.php?CEP=" + cep;
                                }else{
                                    alert("Erro no número de caracteres")
                                }

                            }
                        }

                        if(index == 5){             
                            if(cep.length == 9){
                                cep = cep.substring(0,5) + cep.substring(6,9)

                                if(isNaN(cep)){
                                    alert("Digite um CEP Válido")
                                }else{
                                    window.location.href = "Cep.php?CEP=" + cep;
                                }

                            }else{
                                alert("Erro no número de caracteres")
                            }
                        }
                
                }
                    catch (e){
                        alert(e)
                    }
                    
                }
            </script>

            <input type="text" placeholder="Informe o seu CEP" name="CEP" id="CEP">
            <button type="submit" onclick="enviarDados()">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px">
                    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                </svg>
            </button>
        </div>
    </div>
</body>
</html>
<?php 

    $arquivo = $_FILES["arquivo"];
    $mensagem = "é necessario que o arquivo seja um png";
    if($arquivo["type"] == "image/png")
    {
        $novo_endereco = "../images/" . $arquivo["name"];
        $mensagem= "arquivo enviado";
        
        move_uploaded_file($arquivo["tmp_name"], $novo_endereco);
    }
    else{
        $mensagem= "o arquivo deve obrigatoriamente um png";
    }
    echo json_encode(["mensagem" => $mensagem]);
  
?>

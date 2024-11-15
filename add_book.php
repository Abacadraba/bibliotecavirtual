<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $dtpublic = $_POST['dtpublic'];
    $genero = $_POST['genero'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $target = "imagens/".basename($image);
    $sql = "INSERT INTO books (title, author, dtpublic, genero, description, image) VALUES ('$title', '$author','$dtpublic', '$genero', '$description', '$image')";

    if ($conn->query($sql) === TRUE) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            echo '<h4 style="color:green;">'."Livro adicionado com sucesso!".'</h4>';
        } else {
            echo '<h4 style="color:red;">'."Falha ao adicionar Imagem.".'</h4>';
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2020.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2021.css">
    <link rel="stylesheet" href="css/styles.css">
    <style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   color: white;
   text-align: center;  
   margin-bottom: 0px
}
</style>
</head>
<body class="w3-2020-lark">
<div class="w3-sidebar w3-bar-block w3-border-right w3-container w3-2020-lark" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large w3-2020-lark">Close &times;</button>
  <a href="index.php" class="w3-bar-item w3-button"style="color: black">Home</a>
  <a href="https://www.etecbarretos.com.br" class="w3-bar-item w3-button"style="color: black">ETEC</a>
  <a href="sobrenos.php" class="w3-bar-item w3-button"style="color: black">Sobre nós</a>
</div>
<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
<div class="w3-container"style="padding-right: 0px; padding-left: 0px;">
    <h2 style="color:white;margin-top:0px !important" class="w3-center w3-container w3-2020-navy-blazer">
        <button class="w3-button w3-left w3-2020-navy-blazer w3-black w3-xlarge" onclick="w3_open()">☰
        </button>
    Adicione novo livro</h2>
    <form class="w3-container w3-card-4" method="post" enctype="multipart/form-data">
        <p>
        <label style="color:black;">Título:</label>
        <input class="w3-input" type="text" name="title" required>
        </p>
        <p>
        <label style="color:black;">Autor:</label>
        <input class="w3-input" type="text" name="author" required>
        </p>
        <p>
        <label style="color:black;">Data De Publicação:</label>
        <input class="w3-input" type="date" name="dtpublic" required>
        </p>
        <p>
        <label style="color:black;">Genero:</label>
        <input class="w3-input" type="text" name="genero" required>
        </p>
        <p>
        <label style="color:black;">Descrição</label>
        <textarea class="w3-input" name="description"></textarea>
        </p>
        <p>
        <label style="color:black;">Imagem</label>
        <input class="w3-input" type="file" name="image" required>
        </p>
        <p>
        <button class="w3-button w3-black" type="submit" style="color:white;">Adicionar</button>
        </p>
    </form>
</div>
<footer>
<div class="footer">
<h1 style="color:white; margin-bottom:0px !important" class="w3-center w3-container w3-2020-navy-blazer w3-xlarge"><a href="https://www.etecbarretos.com.br">@ETEC</a>
</h1>
</div>
</footer>
</body>
</html>

<?php
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2020.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2021.css">
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
.contin{
    width:100%;
    height: 300px;
    aspect-ratio: 3/2;
    object-fit:fill;
}
</style>
</head>
<body class="w3-2020-lark">

<div class="w3-sidebar w3-bar-block w3-border-right w3-container w3-2020-lark" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large w3-2020-lark">Fechar &times;</button>
  <a href="add_book.php" class="w3-bar-item w3-button"style="color: black">Adicionar Livros</a>
  <a href="https://www.etecbarretos.com.br" class="w3-bar-item w3-button"style="color: black">ETEC</a>
  <a href="sobrenos.php" class="w3-bar-item w3-button"style="color: black">Sobre nós</a>
</div>
<div class="w3-container"style="padding-right: 0px; padding-left: 0px;">
    <h1 style="margin-top:0px !important" class="w3-center w3-container w3-2020-navy-blazer"> <button class="w3-button w3-left  w3-2020-navy-blazer w3-xlarge"onclick="w3_open()">☰</button>Livros
    </h1>
    <div class="w3-padding w3-margin-top">
        <?php
        $sql = "SELECT distinct genero FROM books";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<h1 style="color:black;">' .$row["genero"]. ":".'</h1>';
                $sql2 = "SELECT * FROM books where genero ='". $row["genero"]."'";

                $result2 = $conn->query($sql2);
                $cont = 0;
                if ($result2->num_rows > 0) {
                    while($row2 = $result2->fetch_assoc()) {
                        if($cont == 0 ){$cont++; echo '<div class="w3-container w3-row">';  }
                        echo '<div class="w3-third w3-container">';
                            echo '<div class="w3-card-4 w3-center">';
                                echo '<a  style="color: black" href="/tcc/book_details.php?id=' . $row2["id"] . '">';
                                    echo '<img src="imagens/' . $row2["image"] . '" style="width:40%; margin-top: 20px; height: auto;" class="fill;">';
                                    echo '<div class="w3-container">';
                                        echo '<h4 style="color:black;">' . $row2["title"] . '</h4>';
                                        echo '<p style="color:black;">' . $row2["author"] . '</p>';
                                        echo '<br>';
                                    echo '</div>';
                                echo '</a>';
                            echo '</div>';
                        echo '</div>';
                        if($cont == 2 ){$cont=0; echo '<div class="w3-container w3-row">';  }
                    }
                    if($cont == 1 ){echo '<div class="w3-container w3-row">'; }
                } else {
                    echo "0 resultados";
                }
                
            }
        }
        $conn->close();
        ?>
        <script>
  function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  }
  function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  }
  </script>
</div>
<footer>
<div class="footer">
<h1 style="color:black; margin-bottom:0px !important" class="w3-center w3-container w3-2020-navy-blazer w3-xlarge"><a style="color:white" href="https://www.etecbarretos.com.br">@ETEC</a>
</h1>
</div>
</footer>




</body>
</html>
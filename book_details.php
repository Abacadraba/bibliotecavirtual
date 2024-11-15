  <?php
  include 'config.php';
  ?>
  <!DOCTYPE html>
  <html>
  <head>
      <title>Detalhe do Livro</title>
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2020.css">
      <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2021.css">
      <link rel="stylesheet" href="css/styles.css">
      <style>
  .footer {
    position:absolute;
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
    <a href="add_book.php" class="w3-bar-item w3-button"style="color: black">Adicionar Livros</a>
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
  <div class="w3-container "style="padding-right: 0px; padding-left: 0px;">
      <h1 style="color:white; margin-top:0px !important" class="w3-center w3-container w3-2020-navy-blazer"> <button class="w3-button w3-left  w3-2020-navy-blazer w3-xlarge" onclick="w3_open()">☰</button>Detalhe do Livro
      </h1>
      <div class="w3-row-padding w3-margin-top">
      <?php
          $sql = 'SELECT * FROM books where id ='. $_GET["id"];
          $result = $conn->query($sql);

          if ($result->num_rows > 0) 
          {
              while($row = $result->fetch_assoc()) 
              {
                  echo '<div class="w3-third w3-container">';
                  echo '<div class="w3-card-4 w3-center">';
                  echo '<img src="imagens/' . $row["image"] . '" style="width:60%">';
                  echo '</div>';
                  echo '</div>';
                  echo '<div class="w3-display-container w3-margin-left>';
                  echo '<h4 style="w3-text-black;">Titulo: ' . $row["title"] . '</h4>';
                  echo '<p style="color:black;"> Autor: ' . $row["author"] . '</p>';
                  echo '<p style="color:black;"> Data de publicação: ' . $row["dtpublic"] . '</p>';
                  echo '<p style="color:black;"> Descrição: ' . $row["description"] . '</p>';
                  echo '</a>';
                  echo '</div>';
                  echo  '<br>';
              }
          } 
          else 
          {
              echo "0 resultados";
          }

          $conn->close();
  ?>
  <footer>
    <div class="footer">
      <h1 style="color:white; margin-bottom:0px !important" class="w3-center w3-container w3-2020-navy-blazer w3-xlarge">
        <a href="https://www.etecbarretos.com.br">@ETEC
        </a>
      </h1>
    </div>
  </footer>
</body>
  </html>
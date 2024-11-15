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
  <a href="add_book.php" class="w3-bar-item w3-button"style="color: black">Adicionar Livros</a>
  <a href="https://www.etecbarretos.com.br" class="w3-bar-item w3-button"style="color: black">ETEC</a>
</div>
<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
<div class="w3-container" style="padding-right: 0px; padding-left: 0px;">
    <h2 style="color:white; margin-top:0px !important" class="w3-center w3-container w3-2020-navy-blazer">
        <button class="w3-button w3-left w3-2020-navy-blazer w3-black w3-xlarge" onclick="w3_open()">☰
        </button> Quem somos ?
    </h2>
</div>
<div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="t.jpeg" style="width:100%">
      <h3>Thales</h3>
      <p class="w3-opacity" style="color: black">Programador E Designer Gráfico</p>
      <p></p>
      <p><button class="w3-button w3-light-grey w3-block" onclick="window.location.href='https://www.instagram.com/thales.h.f?igsh=Z2U4eWZkZThhNGE1'">Contato</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="isra.jpeg" style="width:100%">
      <h3>Israel</h3>
      <p class="w3-opacity" style="color: black">Programador E Designer Gráfico</p>
      <p></p>
      <p><button class="w3-button w3-light-grey w3-block" onclick="window.location.href='https://www.instagram.com/israel.reis.pereira?igsh=NjJ3cnAycnM0d3Nj'">Contato</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="key2.png" style="width:100%">
      <h3>Keysamila</h3>
      <p class="w3-opacity" style="color: black">Architect</p>
      <p><button class="w3-button w3-light-grey w3-block" onclick="window.location.href='https://www.instagram.com/keysamilabarbi?igsh=aGludHRobTN6Zmp5'">Contato</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="naty2.png" style="width:100%">
      <h3>Natiele</h3>
      <p class="w3-opacity" style="color: black">Architect </p>
      <p><button class="w3-button w3-light-grey w3-block"onclick="window.location.href='https://www.instagram.com/natielesouza314?igsh=Y25lOW9xdzB4b2Qz'">Contato</button></p>
    </div>
  </div>
  <footer>
<div class="footer">
<h1 style="color:white; margin-bottom:0px !important" class="w3-center w3-container w3-2020-navy-blazer w3-xlarge"><a href="https://www.etecbarretos.com.br">@ETEC</a>
</h1>
</div>
</footer>
</body>
</html>
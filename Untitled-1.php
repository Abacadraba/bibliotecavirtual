<div class="w3-container"style="padding-right: 0px; padding-left: 0px;">
    <h1 style="color:white; margin-top:0px !important" class="w3-center w3-container w3-2020-navy-blazer"> <button class="w3-button w3-left  w3-2020-navy-blazer w3-xlarge" onclick="w3_open()">☰</button>Livros
    </h1>
    <div class="w3-row-padding w3-margin-top">
        <?php
        $sql = "SELECT distinct genero FROM books";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<h1 style="color:white;">' .$row["genero"]. ":".'</h1>';
                $sql2 = "SELECT * FROM books where genero ='". $row["genero"]."'";

                $result2 = $conn->query($sql2);

                if ($result2->num_rows > 0) {
                    while($row2 = $result2->fetch_assoc()) {
                        echo '<div class="w3-third w3-container">';
                            echo '<div class="w3-card-4 w3-center">';
                                echo '<a href="/tcc/book_details.php?id=' . $row2["id"] . '">';
                                    echo '<img src="imagens/' . $row2["image"] . '" style="width:50%; margin-top: 20px;">';
                                    echo '<div class="w3-container">';
                                        echo '<h4 style="color:white;">' . $row2["title"] . '</h4>';
                                        echo '<p style="color:white;">' . $row2["author"] . '</p>';
                                        echo '<br>';
                                    echo '</div>';
                                echo '</a>';
                            echo '</div>';
                        echo '</div>';
                    }
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
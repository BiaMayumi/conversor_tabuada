<!DOCTYPE html>
<html>
<head>
  <title>Tabuada</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
    }

    h1 {
      color: #333;
    }

    form {
      margin-top: 20px;
    }

    label {
      font-weight: bold;
    }

    select {
      margin: 10px 0;
    }

    input[type="submit"] {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <h1>Tabuada</h1>
  <form action="tabuada.php" method="get">
    <label for="numero">Escolha um número:</label>
    <br>
    <select name="numero" id="numero">
      <?php
      for ($i = 0; $i <= 10; $i++) {
        echo "<option value='$i'>$i</option>";
      }
      ?>
    </select>
    <br>
    <input type="submit" value="Gerar">
  </form>
</body>
</html>

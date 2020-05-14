<html>
<head>
  <title>Uso de SQLite con AJAX</title>
</head>
<script src="lib.js"></script>
<body>
  <form action="dbctrl.php" method="post">
    <label>ID:</label><input type="text" name="id" id="id" /><br/>
    <label>Nombre:</label><input type="text" id="nom" name="nombre" /><br/>
    <label>Departamento:</label><input type="text" id="depto" name="depto" /><br/>
    <input type="button" id="save" name="save" value="Grabar" onclick="grabar()" />
  </form>
  <table id="tabla">
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Departamento</th>
    </tr>
  </table>
</body>
</html>

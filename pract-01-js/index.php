<html>
<head>
  <title>Uso de MySQL con AJAX</title>
</head>
<script src="lib.js"></script>
<body onload="listar()">
  <form action="">
    <label>Nombre:</label><input type="text" id="nom" name="nombre" /><br/>
    <label>Departamento:</label><input type="text" id="depto" name="depto" /><br/>
    <input type="button" id="save" name="save" value="Grabar" onclick="grabar()" />
  </form>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Departamento</th>
      </tr>
    </thead>
    <tbody id="tabla">
    </tbody>
  </table>
</body>
</html>

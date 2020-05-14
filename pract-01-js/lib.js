function listar() {

}

function grabar() {
  var xhr = new XMLHttpRequest();
  var id = document.getElementById("id").value;
  var nom = document.getElementById("nom").value;
  var depto = document.getElementById("depto").value;

  var params = new FormData();
  params.append("save", 1);
  params.append("id", id);
  params.append("nom", nom);
  params.append("depto", depto);

  xhr.open("POST", "save.php");
  //xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.send(params);
  //alert("Todo chido carnal");
}

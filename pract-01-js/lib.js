function listar() {
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if(this.readyState == 4 && this.status == 200) {
      listHtml(this.responseText);
	}
  }

  var params = new FormData();
  params.append("list", 1);

  xhr.open("POST", "list.php");
  xhr.send(params);
}

function listHtml(rawjson) {
  var json = JSON.parse(rawjson);
  var tabla = document.getElementById("tabla");
  
  for(i = 0; i < json.length; i++) {
    tabla.innerHTML += "<tr><td>" + json[i].id +
	                   "</td>" + "<td>" + json[i].nombre +
                       "</td>" + "<td>" + json[i].depto +
                       "</td></tr>";
  }
}

function grabar() {
  var xhr = new XMLHttpRequest();
  var nom = document.getElementById("nom").value;
  var depto = document.getElementById("depto").value;

  var params = new FormData();
  params.append("save", 1);
  params.append("nom", nom);
  params.append("depto", depto);

  xhr.open("POST", "save.php");
  xhr.send(params);
}

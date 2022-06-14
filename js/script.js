function disableDropdown() {
  var selectobject;
  selectobject = document.getElementById("tarjetas");
  selectobject.options[3].disabled = true;

  selectobject = document
    .getElementById("bloqueo")
    .getElementsByTagName("option");
  for (z = 0; z < selectobject.length; z++) {
    
    if(z == selectobject[z]){

        selectobject[z].disabled = true;
    }

  }
}

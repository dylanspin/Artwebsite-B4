
var money = getCookie("money");;


function getCookie(cname) {
  var cook = cname + "=";
  var ca = document.cookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(cook) == 0) {
      return c.substring(cook.length, c.length);
    }
  }
  return "";
}

function modal(t){
  var div = t.id;
  var modal = document.getElementById("myModal");

  var img = document.getElementById(div);
  var modalImg = document.getElementById("img01");
      modal.style.display = "block";
      modalImg.src = t.src;
  var span = document.getElementById("close2");

  span.onclick = function() {
    modal.style.display = "none";
  }
}

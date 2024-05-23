function check() {
    var input = document.getElementById("A");
    if (input.value !== "") {
      ecertificate();
    } else {
      alert("Input field is empty.");
    }
  }
  
  function ecertificate() {
    var x = document.getElementById("main");
    x.style.display = "block";
    var A = document.getElementById("A").value;
    var B = document.getElementById("B").value;
    var C = document.getElementById("C").value;
    var D = document.getElementById("D").value;
    var E = document.getElementById("E").value;
    var F = document.getElementById("F").value;
    var G = document.getElementById("G").value;
    document.getElementById("text-1").innerHTML = A;
    document.getElementById("text-2").innerHTML = B;
    document.getElementById("text-3").innerHTML = C;
    document.getElementById("text-4").innerHTML = D;
    document.getElementById("text-5").innerHTML = E;
    document.getElementById("text-6").innerHTML = F;
    document.getElementById("text-7").innerHTML = G;

    $('#certificateModal').modal('show');
  }
  
  function dcheck() {
    download();
  }
  
function download() {
  var bodyContent = document.getElementById("body").innerHTML;
  var mainContent = document.getElementById("main").innerHTML;

  var originalBody = document.body.innerHTML;
  document.body.innerHTML = mainContent;
  window.print();
  document.body.innerHTML = originalBody;

  // Reinitialize modal after print
  $('#certificateModal').modal('hide');
  document.getElementById("body").innerHTML = bodyContent;
  $('#certificateModal').modal();
}

function reloadPage() {
  location.reload();
}
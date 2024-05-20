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

    var D = document.getElementById("D").value;
    var E = document.getElementById("E").value;
    document.getElementById("text-1").innerHTML = A;
    document.getElementById("text-2").innerHTML = B;
  
    document.getElementById("text-4").innerHTML = D;
    document.getElementById("text-5").innerHTML = E;

    $('#certificateModal').modal('show');
  }

  
  
  function dcheck() {
    download();
  }
  
  function download() {
    var body = document.getElementById("body").innerHTML;
    var main = document.getElementById("main").innerHTML;
    document.getElementById("body").innerHTML = main;
    window.print();
    document.getElementById("body").innerHTML = body;
  }
  
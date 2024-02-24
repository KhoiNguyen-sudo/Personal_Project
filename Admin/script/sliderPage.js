let x = document.getElementById("Btn");
    x.addEventListener("click", myFunction);
    var i =0
    
    
    function myFunction() {
    if (i==0) {
        i = 1;
        document.getElementById("OOO").style.display = "block";
        document.getElementById("OOO").style.margin = "0px 0px 0px 0px";
    } else {
            i = 0;
        document.getElementById("OOO").style.display = "block";
        document.getElementById("OOO").style.margin = "0px -500px";
    }
    }


function myFunction(){
    var x = document.getElementById("tp").value;
    console.log(x);
    var y = document.getElementById("tn").value;
    console.log(y);
    var z = document.getElementById("fp").value;
    console.log(z);
    var p = document.getElementById("fn").value;
    console.log(p);

    document.getElementById("TP").innerHTML= "TP =" + x;
    document.getElementById("TN").innerHTML= "TN =" + y;
    document.getElementById("FP").innerHTML= "FP =" + z;
    document.getElementById("FN").innerHTML= "FN =" + p;

    let ppv = x/(x+z);
    let npv = y/(y+p);

    document.getElementById("result1").innerHTML= "PPV =" + ppv;
    document.getElementById("result2").innerHTML= "NPV =" + npv;
    
}
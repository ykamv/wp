function check(){
    
    
        if(document.form.username.value.length == 0 ){

            alert("Username cannot be empty");
            document.form.username.focus() ;
            return false;
        }
        
        
        else if(document.form.password.value.length == 0 ){
            
            alert("Password cannot be empty");
            document.form.password.focus() ;
            return false;
        }
        
        else if(document.form.aadhar.value.length == 0 ){
           
            alert("Aadhar cannot be empty");
            document.form.aadhar.focus() ;
            return false;
        }

        else if(document.form.country_code.value.length == 0 ){
            
            alert("Country Code cannot be empty");
            document.form.country_code.focus() ;
            return false;
        }

        let z = document.getElementById("password").value;
        let z1 = /^(?=[A-Z]{2})(?=.*[@#$%^&]).{6,12}$/
        if(!z1.test(z)){
            alert(" Enter valid Password");
            document.getElementById('password').style.borderColor = "red";
        }


        let a = document.getElementById("aadhar").value;
        let a1 = /^[2-9]{1}\d{3}\s{1}\d{4}\s{1}\d{4}$/
        if(!a1.test(a)){
            alert(" Enter valid Aadhar number");
            document.getElementById('aadhar').style.borderColor = "red";
        }


        let b = document.getElementById("country_code").value;
        let b1 = /^[A-Za-z]{3}$/
        if(!b1.test(b)){
            alert(" Enter valid country_code");
            document.getElementById('country_code').style.borderColor = "red";
        }

        if(document.getElementById('first').checked) {
            document.getElementById("output").innerHTML
                = document.getElementById("first").value
                + " radio button checked";
        }
        
        else {
            document.getElementById("output").innerHTML
                = "No one selected";
        }

        if( document.form.cars.value == "-1" ) 

        { 
           alert("Please pick a car!"); 
           return false; 
        } 
}


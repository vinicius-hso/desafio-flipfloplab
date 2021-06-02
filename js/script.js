function menuToggle() {
    const toggleMenu = document.querySelector('.toggleMenu');
    const navigation = document.querySelector('.navigation');
    toggleMenu.classList.toggle('active')
    navigation.classList.toggle('active')
};

// *** VALIDANDO O EMAIL ***
function validateEmail() {

    var request;

    try {

        request = new XMLHttpRequest();

    }

    catch (tryMicrosoft) {

        try {

            request = new ActiveXObject("Msxml2.XMLHTTP");
        }

        catch (otherMicrosoft) {
            try {
                request = new ActiveXObject("Microsoft.XMLHTTP");
            }

            catch (failed) {
                request = null;
            }
        }
    }



    var url = "actions/validation.php";
    var emailaddress = document.getElementById("email").value;
    var vars = "email=" + emailaddress;
    request.open("POST", url, true);

    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var return_data = request.responseText;
            document.getElementById("validate").innerHTML = return_data;
        }
    }

    request.send(vars);
};

// *** INSERINDO EMAIL NO BANCO DE DADOS ***
function insertEmail() {

    var request;

    try {

        request = new XMLHttpRequest();

    }

    catch (tryMicrosoft) {

        try {

            request = new ActiveXObject("Msxml2.XMLHTTP");
        }

        catch (otherMicrosoft) {
            try {
                request = new ActiveXObject("Microsoft.XMLHTTP");
            }

            catch (failed) {
                request = null;
            }
        }
    }


    var url = "actions/insert.php";
    var emailaddress = document.getElementById("email").value;
    var vars = "email=" + emailaddress;

    request.open("POST", url, true);

    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var return_data = request.responseText;
            console.log(request.responseText)
            document.getElementById("showtable").innerHTML = return_data;
        }
    }

    request.send(vars);
};
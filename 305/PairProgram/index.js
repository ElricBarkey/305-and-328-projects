document.getElementById("validationForm").onsubmit = validate;

function validate() {

    let valid = true;

    //clear errors
    let errors = document.getElementsByClassName("err");
    for(let i = 0; i <errors.length;i++){
        errors[i].style.visibility="hidden";
    }

    //check name
    let name = document.getElementById("name").value;

    if(name == "")
    {
        let errName = document.getElementById("errName");
        errName.style.visibility = "visible";
        valid = false;
    }

    //check email
    let email = document.getElementById("email").value;

    if(email == "")
    {
        let errEmail = document.getElementById("errEmail");
        errEmail.style.visibility = "visible";
        valid = false;
    }

    //used w3schools to learn includes
    if(email.includes("@") != true)

    {
        let errEmail = document.getElementById("errEmail");
        errEmail.style.visibility = "visible";
        valid = false;
    }

    //used w3schools to learn includes
    if(email.includes(".") != true)
    {
        let errEmail = document.getElementById("errEmail");
        errEmail.style.visibility = "visible";
        valid = false;
    }


    //check password
    let password = document.getElementById("password").value;

    if(password == "")
    {
        let errPassword = document.getElementById("errPassword");
        errPassword.style.visibility = "visible";
        valid = false;
    }

    if(password.length < 8)
    {
        let errPassword = document.getElementById("errPassword");
        errPassword.style.visibility = "visible";
        valid = false;
    }

    let confPassword = document.getElementById("confPassword").value;

    if(confPassword == "")
    {
        let errConfPassword = document.getElementById("errConfPassword");
        errConfPassword.style.visibility = "visible";
        valid = false;
    }

    if(confPassword != password)
    {
        let errConfPassword = document.getElementById("errConfPassword");
        errConfPassword.style.visibility = "visible";
        valid = false;
    }


    let terms = document.getElementById("term").checked;
    let termCount = 0;

    for(let i = 0; i < terms.length; i++)
    {
        if(terms[i].checked)
        {
            termCount++;
        }
    }

    if(terms == 0)
    {
        let errTerm = document.getElementById("errTerm");
        errTerm.style.visibility = "visible";
        valid = false;
    }

    return valid;
}
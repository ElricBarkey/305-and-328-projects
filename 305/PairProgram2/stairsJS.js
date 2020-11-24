document.getElementById("stepsform").onsubmit = validate;

function validate()
{
    //create a flag var
    let valid = true;

    //Clear all errors
    let errors = document.getElementsByClassName("err");
    for(let i = 0; i < errors.length; i++)
    {
        errors[i].style.visibility = "hidden";
    }

    //check value
    let num = document.getElementById("steps").value;
    
    if (num < 0)
    {
        let errStep = document.getElementById("errSteps");
        errStep.style.visibility = "visible";
        valid = false;
    }

    return valid;

}
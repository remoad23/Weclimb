
var registerInputs = document.getElementsByClassName("form_element");

for(let i = 0; i < registerInputs.length; i++){
    registerInputs[i].addEventListener("focusout", function () {
        registerInputs[i].classList.add("input_invalid");
    });
}
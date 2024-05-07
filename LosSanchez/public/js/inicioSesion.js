const showButton = document.getElementById("showButton");
const inputPassword = document.getElementById("idInputPassword");

showButton.onmouseenter = function(){
    inputPassword.type = 'text';
    showButton.style.color = 'white';
    showButton.className = 'bi bi-eye-fill';
}

showButton.onmouseleave = function(){
    inputPassword.type = 'password';
    showButton.style.color = 'black';
    showButton.className = 'bi bi-eye-slash-fill';
}

document.addEventListener("DOMContentLoaded", function() {
    setupLogin();

});

function setupLogin(){
    
    window.addEventListener(
        "keydown",
        function (event) {
         
          if(event.key == "Enter"){
            sendPostRequest();
          } //KeyboardEvent: key=Enter
         });
    
        submitButton = document.getElementById("submitButton");
        submitButton.addEventListener("click", function(event){
            sendPostRequest();
        });
}

function sendPostRequest() {
    inputUserName = document.getElementById("inputUserName");
    inputPassword = document.getElementById("inputPassword");

    UserName = inputUserName.value;
    Password = inputPassword.value;
    fetch('verifLogin.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams({ username: UserName, password: Password }) 
    })
    .then(response => response.json())
    .then(data => {
        if (data.redirect_url) {
            window.location.href = data.redirect_url;
        }
    })
    .catch(error => {
        console.error('Erreur lors de la requête POST:', error);
    });;
}

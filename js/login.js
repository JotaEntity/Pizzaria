function logar(){
    var email = document.getElementById("email");
    var senha = document.getElementById("senha");

    
    if(email.value == "admin@admin.com" && senha.value == "admin"){
        window.localStorage.setItem("acesso", true);

        window.location.href = "index.html";
    }else{
        alert("Usuario ou senha invalido!");
    }
}
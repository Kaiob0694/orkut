async function login(){

    const email = document.getElementById("email").value;
    const senha = document.getElementById("senha").value;

    try{

        const resposta = await fetch("src/auth.php", {

            method: "POST",

            headers:{
                "Content-Type":"application/x-www-form-urlencoded"
            },

            body:`email=${email}&senha=${senha}`

        });

        const resultado = await resposta.text();

        if(resultado == "sucesso"){

            window.location.href = "dashboard.php";

        }else{

            alert("Email ou senha incorretos!");

        }

    }catch(error){

        console.log(error);

        alert("Erro no servidor!");

    }

}

document.querySelector(".btn-login")
.addEventListener("click", login);
document.getElementById("entrar").addEventListener("click", (event) => {
    event.preventDefault();

    if(validaForm(event)){
        var inpLogin = document.getElementById("idLogin");
        var inpPassw = document.getElementById("idPass");

        var errors = document.getElementById("errors");
        errors.innerHTML = '';

        $.ajax({
            url: "_paginas/req_login.php",
            type: "POST",
            data:{
                status: true,
                txt_login: inpLogin.value,
                txt_passw: inpPassw.value
            },success: (res) =>{
                var dados = jQuery.parseJSON(res);
                if(!dados["status"]){
                    $.ajax({
                        url: "_paginas/msg_erro.php",
                        type: "POST",
                        data:{
                            msg_error: dados["mensagen"]
                        }, success: (res) => {
                            errors.innerHTML = res;                            
                        }
                    })
                }else{
                    window.location = "index.php";
                }
            }
        })
    }else{
        console.log("Falha");
    }
})

function validaForm(elemento){
    var form = document.getElementById(elemento.path[1].id);
    if(form.checkValidity()){
        // Retorna true se todos os campos estiverem preenchidos corretamente! 
        return true;
    }
    // Reporta se algum campo não esta preenchido corretamente!
    form.reportValidity();
    return false;
}
$(document).ready(function () {
    $("#loginBtn").on("click",function () {
        let email = $("#loginId").val(),
            passe = $("#loginPass").val(),
            formData = new FormData(),
            xhr;
        formData.append("os",navigator.platform);
        formData.append("nav",getNavigateur());
        formData.append("type","admin");
        formData.append("email",email);
        formData.append("passe",passe);
        formData.append("op","login");
        xhr = new XMLHttpRequest();
        xhr.open('POST',"../controllers/UserController.php",false);
        xhr.send(formData);
        if(xhr.status==200){
            let response = xhr.response;
            if(response==="-1"||response==="0"){
                $("#err").text("Email ou mot de passe est incorrecte!");
                $("#err").css({visibility: "visible"});
            }else if(response==="-2"){
                $("#err").text("Vous n'avez pas les droit d'accés");
                $("#err").css({visibility: "visible"});
            }
            else{
                let user = JSON.parse(response);
                window.location="./admin.php";
            }
        }else{
            console.log("Login failed!");
        }
    });
});
function getNavigateur() {
    if((navigator.userAgent.indexOf("Opera") || navigator.userAgent.indexOf('OPR')) != -1 )
    {
        return 'Opera';
    }
    else if(navigator.userAgent.indexOf("Chrome") != -1 )
    {
        return 'Chrome';
    }
    else if(navigator.userAgent.indexOf("Safari") != -1)
    {
        return 'Safari';
    }
    else if(navigator.userAgent.indexOf("Firefox") != -1 )
    {
        return 'Firefox';
    }
    else if((navigator.userAgent.indexOf("MSIE") != -1 ) || (!!document.documentMode == true )) //IF IE > 10
    {
        return  'IE';
    }
    else
    {
        return  'unknown';
    }
}
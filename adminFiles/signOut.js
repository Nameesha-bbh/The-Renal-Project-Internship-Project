const out = document.getElementById("signout");
out.addEventListener("click",function(event){
    setTimeout(function () {    
        window.location.href = 'adminLogin.html'; 
    },100);
});
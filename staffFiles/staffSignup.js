const create = document.getElementById("create");
create.addEventListener("click", function(event){
    event.preventDefault();
    alert("Contact the admin");
    
    alert("You will be redirected to the admin page in 5 seconds.");
    setTimeout(function () {    
        window.location.href = '../index.html'; 
    },5000);
});
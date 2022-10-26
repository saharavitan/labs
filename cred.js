function findme(){
    var username = document.getElementById('username').value
    var password = document.getElementById('password').value
    if (username == "Admin" && password == "Aa121212"){
        alert("login successfully");
    } else {
        alert("Username or password incorrect");
    }
}

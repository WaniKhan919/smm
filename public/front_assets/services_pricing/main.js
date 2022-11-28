document.querySelectorAll(".package-card").forEach((element, index) => {
    if(index % 2 != 0){
        element.classList.remove("blue-bg");
	    element.classList.add("blue-special-bg");
    }
});

document.querySelectorAll(".price-card-header-1").forEach((element, index) => {
    if(index % 2 != 0){
        element.classList.remove("change-bg-no");
	    element.classList.add("change-bg");
    }
});

document.getElementById("pricing-modal-login-form").addEventListener("submit", (e) => {
    e.preventDefault();
    var email = e.target.getElementsByClassName("form-group")[0].getElementsByTagName("input")[0];
    var password = e.target.getElementsByClassName("form-group")[1].getElementsByTagName("input")[0];
    var credentials_alert = e.target.getElementsByClassName("form-group")[0].getElementsByTagName("span")[0];
    
    axios
    .post("/modal/login", {
        email: email.value,
        password: password.value,
    })
    .then((response) => {
        console.log(response.data);
        
        if(response.data == "invalid_credentials"){
            credentials_alert.innerHTML = "Invalid Credentials!";
        }

        if(response.data == "login_success"){
            document.getElementById("pricing-checkout-toggle").click();
        }
    })
    .catch((error) => {
        console.log(error);
    });
});

document.getElementById("checkout-guest-button").addEventListener("click", (e) => {
    document.getElementById("pricing-checkout-toggle").click();
});
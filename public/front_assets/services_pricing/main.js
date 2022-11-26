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

// const stripe_guest_auth = (self) => {
//     axios
//     .get("/stripe-guest/login")
//     .then((response) => {
//         console.log(response);
//     })
//     .catch((error) => {
//         console.log(error);
//     })
//     window.location.reload();
// }
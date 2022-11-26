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

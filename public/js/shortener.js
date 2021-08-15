const xhttp = new XMLHttpRequest();
const submitBtn = document.getElementById('submit');
submitBtn.addEventListener("click", () => {
    xhttp.open("POST", "/link/store");
})
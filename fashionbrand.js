const loginBtn = document.querySelector(".btnLogin-popup");
const closeBtn = document.querySelector(".icon-close");
const loginCtn = document.querySelector(".wrapper");
const registerLink = document.querySelector(".register-link"); /* aktivizimi i butonit register*/
const wrapper = document.querySelector(".wrapper");
const loginLink = document.querySelector(".login-link")

wrapper.style.display = "none";

function showHideElement() {
    if (loginCtn.style.display === "none") {
        loginCtn.style.display = "block";
    } else {
        loginCtn.style.display = "none";
    }
  }

closeBtn.addEventListener("click", ()=>{
    loginCtn.style.display = "none";
    wrapper.classList.remove("active");
})

loginBtn.addEventListener("click", ()=>{
    showHideElement();
})

registerLink.addEventListener("click",()=>{
    wrapper.classList.add("active");
})

loginLink.addEventListener("click",()=>{
    wrapper.classList.remove("active");
})
const loginBtn = document.querySelector(".btnLogin-popup");
const closeBtn = document.querySelector(".icon-close");
const loginCtn = document.querySelector(".wrapper");
const registerLink = document.querySelector(".register-link");
const wrapper = document.querySelector(".wrapper");


function showHideElement() {
    if (loginCtn.style.display === "none") {
        loginCtn.style.display = "block";
    } else {
        loginCtn.style.display = "none";
    }
  }

closeBtn.addEventListener("click", ()=>{
    loginCtn.style.display = "none";
})

loginBtn.addEventListener("click", ()=>{
    showHideElement()
    console.log("dd");
})



registerLink.addEventListener("click",()=>{
    wrapper.classList.add("active");
})
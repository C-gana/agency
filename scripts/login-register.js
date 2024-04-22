// html element variables
const createAccountElement = document.querySelector(".js-create");
const haveAccountElement = document.querySelector(".js-have-account");
const loginElement = document.querySelector(".js-login-container");
const registerElement = document.querySelector(".js-register-container");
const logDescElement = document.querySelector(".login-desc");
const regDescElement = document.querySelector(".register-desc");
//Register - Login toggle
createAccountElement.addEventListener("click", () => {
  document.title = "Z-agency | Register";
  loginElement.classList.add("passive");
  logDescElement.classList.add("passive");
  registerElement.classList.remove("passive");
  regDescElement.classList.remove("passive");
});
//Register - Login toggle
haveAccountElement.addEventListener("click", () => {
  document.title = "Z-agency | Login";
  loginElement.classList.remove("passive");
  logDescElement.classList.remove("passive");
  registerElement.classList.add("passive");
  regDescElement.classList.add("passive");
});

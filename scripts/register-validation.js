const regForm = document.querySelector(".reg-form");
const fnameElement = document.querySelector(".fname");
const lnameElement = document.querySelector(".lname");
const emailElement = document.querySelector(".email");
const pnumberElement = document.querySelector(".pnumber");
const pwdElement = document.querySelector(".pwd");
const pwdConfirmElement = document.querySelector(".pwd-confirm");

regForm.addEventListener("submit", (event) => {
  event.preventDefault();
  
});

// checking if a field is filled
function isFilled(input) {
  if (input.value === "") {
    console.log("empty");
    return false;
  } else {
    return true;
  }
}

// name validation
function nameValidation(input) {
  if (!isFilled(input)) {
    return false;
  }
  if (!isNaN(input.value)) {
    console.log("Enter letters only");
    return false;
  }
  return true;
}

//phone number validation
function phoneValidation(input) {
  if (!isFilled(input)) {
    return false;
  }
  if (isNaN(input.value)) {
    console.log("enter numbers only");
    return false;
  }
  if (input.value.length != 10) {
    console.log("Enter a 10 digit phone number");
  }
}

//emalil validation
function validEmail(input) {
  const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,4}$/;
  if (!isFilled(input)) {
    return false;
  }
  if (input.value === regex) {
    
  }
}
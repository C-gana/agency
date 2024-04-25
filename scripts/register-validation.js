const regForm = document.querySelector(".reg-form");
const fnameElement = document.querySelector(".fname");
const lnameElement = document.querySelector(".lname");
const emailElement = document.querySelector(".reg-email");
const pnumberElement = document.querySelector(".pnumber");
const pwdElement = document.getElementById("pwd");
const pwdConfirmElement = document.getElementById("pwd-confirm");

// registration form validation -------------------------------------------------------------//
regForm.addEventListener("submit", (event) => {
  event.preventDefault();
  let validFirstName = nameValidation(fnameElement, "first name");
  let validLastName = nameValidation(lnameElement, "last name");
  let validEmail = emailValidation(emailElement, "email");
  let validPhone = phoneValidation(pnumberElement, "phone number");
  let validPassword = passwordValidation(pwdElement);
  if (
    validFirstName &&
    validLastName &&
    validEmail &&
    validPhone &&
    validPassword
  ) {
    event.currentTarget.submit();
    console.log("submited");
  }
});

// checking if a field is filled-----------------------------------------------------------//
function isFilled(input, field) {
  if (input.value === "") {
    toggleError(input, `${EMPTY}${field}`, true);
    return false;
  } else {
    toggleError(input, "", false);
    return true;
  }
}

// name validation------------------------------------------------------------------------//
function nameValidation(input, field) {
  if (!isFilled(input, field)) {
    return false;
  }
  if (!isNaN(input.value)) {
    toggleError(input, LETTERS_ONLY, true);
    return false;
  }
  toggleError(input, "", false);
  return true;
}

//phone number validation----------------------------------------------------------------//
function phoneValidation(input, field) {
  if (!isFilled(input, field)) {
    return false;
  }
  if (isNaN(input.value)) {
    toggleError(input, NUMBERS_ONLY, true);
    return false;
  }
  if (input.value.trim().length != 10) {
    toggleError(input, PHONE, true);
  }
  return true;
}

//emalil validation--------------------------------------------------------------------//
function emailValidation(input, field) {
  const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,4}$/;
  if (!isFilled(input, field)) {
    return false;
  }
  if (input.value.match(regex)) {
    toggleError(input, "", false);
  } else {
    toggleError(input, EMAIL, true);
  }
  return true;
}

//password validation----------------------------------------------------------------//
function passwordValidation(input) {
  //checking if both password fields are filled--------------------------------//
  if (!filledPassword()) {
    return false;
  }
}

// filled passwords-----------------------------------------------------------------//
function filledPassword() {
  let password = pwdElement.value;
  let passwordConfirm = pwdConfirmElement.value;
  let pd1 = isFilled(pwdElement, "Password");
  let pd2 = isFilled(pwdConfirmElement, "Confirmation password");
  if (pd1 && pd2) {
    //checking password length
    if (password.length > 7) {
      //checking if they're matching-----------------------------------------//
      if (password === passwordConfirm) {
        console.log("zafanana");
        return true;
      } else {
        toggleError(pwdElement, PASSWORD_NOT_MATCH, true);
        toggleError(pwdConfirmElement, PASSWORD_NOT_MATCH, true);
        return false;
      }
    } else {
      toggleError(pwdElement, PASSWORD_LENGTH, true);
      toggleError(pwdConfirmElement, PASSWORD_LENGTH, true);
      return false;
    }
  }
}

//showing the error message and adding a red border-------------------------------------//
function toggleError(input, message, test) {
  if (test === true) {
    input.classList.add("error-box");
  } else {
    input.classList.remove("error-box");
  }
  input.parentNode.querySelector("small").innerText = message;
}

//error messages
const NUMBERS_ONLY = "Please enter numbers only";
const LETTERS_ONLY = "Please enter letters only";
const PASSWORD_NOT_MATCH = "Please enter same password and confirm password";
const PASSWORD_LENGTH = "Please enter atleast 8 characters for password";
const EMPTY = "Please fill in ";
const PHONE = "Please enter a 10 digit phone number";
const EMAIL = 'Follow this format "example@mail.com"';

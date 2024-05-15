const form = document.querySelector(".booking-form");
const siteElement = document.querySelector(".js-sites");
const budgetElement = document.querySelector(".js-budget");
const departureElement = document.querySelector(".js-departure-date");
const returnElement = document.querySelector(".js-return-date");

form.addEventListener("submit", (event) => {
  let validSite = isFilled(siteElement, "site");
  let validDeparture = isFilled(departureElement, "departure date");
  let validReturn = isFilled(returnElement, "return date");
  let validBudget = budgetValidation();

  if (validSite && validDeparture && validReturn && validBudget) {
  } else {
    event.preventDefault();
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

//showing the error message and adding a red border-------------------------------------//
function toggleError(input, message, test) {
  if (test === true) {
    input.classList.add("error-box");
  } else {
    input.classList.remove("error-box");
  }
  input.parentNode.querySelector("small").innerText = message;
}
//budget validation-----------------------------------------------------------------------------//
function budgetValidation() {
  let filledBudget = isFilled(budgetElement, "departure date");

  if (filledBudget) {
    if (budgetElement.value <= 0) {
      toggleError(budgetElement, "Please enter positive numbers only", true);
      return false;
    }
    if (isNaN(budgetElement.value)) {
      toggleError(budgetElement, "Please enter numbers only", true);
      return false;
    } else {
      toggleError(budgetElement, "", false);
      return true;
    }
  }
}
const EMPTY = "Please fill in ";

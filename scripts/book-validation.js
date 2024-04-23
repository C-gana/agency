const form = document.querySelector(".booking-form");
const siteElement = document.querySelector(".js-sites");
const budgetElement = document.querySelector(".js-budget");
const departureDateElement = document.querySelector(".js-departure-date");
const returnDateElement = document.querySelector(".js-return-date");
const insuranceElement = document.getElementsByName("insurance");

form.addEventListener("submit", (event) => {
  event.preventDefault();
  let site = isFilled(siteElement);
  let budget = budgetValidation(budgetElement);
  let departureDate = isFilled(departureDateElement);
  let returnDate = isFilled(returnDateElement);
  let insurance = insuranceValidation(insuranceElement);
});

// checking if a field is filled
function isFilled(input) {
  if (input.value === "") {
    console.log("is empty");
    return false;
  } else {
    return true;
  }
}

// budget validation

function budgetValidation(input) {
  if (!isFilled(input)) {
    return false;
  }
  if (isNaN(Number(input.value))) {
    console.log("Enter numbers only");
  }
}

function insuranceValidation(input) {
  let checked = false;
  for (let i = 0; i < input.length; i++) {
    if (input[i].checked) {
      checked = true;
      break;
    }
  }
  if (!checked) {
    console.log("is Empty");
  }
}

const inputs = document.querySelectorAll("input[type='number']");

inputs.forEach((input) => {
  input.addEventListener("input", (event) => {
    const value = event.target.value;

    if (value !== null && value.length > 3) {
      input.value = value.substring(0, 3);
    }
    
  });
});
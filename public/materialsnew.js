const form = document.querySelector('form');
form.addEventListener('submit', (event) => {
  event.preventDefault();

  // validate quantity field
  const quantityInput = document.querySelector('input[name="quantity"]');
  const quantityRegex = /^\d+$/;
  if (!quantityRegex.test(quantityInput.value)) {
    quantityInput.classList.add('is-invalid');
    quantityInput.nextElementSibling.innerText = 'quantity should be numbers only';
    return;
  }
  form.submit();
});

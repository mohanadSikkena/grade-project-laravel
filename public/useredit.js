const form = document.querySelector('form');
form.addEventListener('submit', (event) => {
  event.preventDefault(); // prevent form from submitting

  // validate name field
  const nameInput = document.querySelector('input[name="name"]');
  if (nameInput.value.trim() === '') {
    nameInput.classList.add('is-invalid');
    nameInput.nextElementSibling.innerText = 'Name is required';
    return;
  }

  // validate email field
  const emailInput = document.querySelector('input[name="email"]');
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(emailInput.value)) {
    emailInput.classList.add('is-invalid');
    emailInput.nextElementSibling.innerText = 'Email should be *****@*****.com';
    return;
  }

  // validate password field
  const passwordInput = document.querySelector('input[name="password"]');
  if (passwordInput.value.trim() !== '' && passwordInput.value.length < 6) {
    passwordInput.classList.add('is-invalid');
    passwordInput.nextElementSibling.innerText = 'Password must be at least 6 characters';
    return;
  }

  // validate phone number field
  const phoneInput = document.querySelector('input[name="phone_no"]');
  const phoneRegex = /^\d+$/;
  if (!phoneRegex.test(phoneInput.value)) {
    phoneInput.classList.add('is-invalid');
    phoneInput.nextElementSibling.innerText = 'Phone number should be numbers only';
    return;
  }

  // validate house number field
  const houseInput = document.querySelector('input[name="house_no"]');
  const houseRegex = /^\d+$/;
  if (!houseRegex.test(houseInput.value)) {
    houseInput.classList.add('is-invalid');
    houseInput.nextElementSibling.innerText = 'House number should be numbers only';
    return;
  }

  // validate hourly salary field
  const salaryInput = document.querySelector('input[name="hourly_salery"]');
  if (isNaN(salaryInput.value) || salaryInput.value <= 0) {
    salaryInput.classList.add('is-invalid');
    salaryInput.nextElementSibling.innerText = 'Hourly salary must be a positive number';
    return;
  }

  // if all fields are valid, submit the form
  form.submit();
});
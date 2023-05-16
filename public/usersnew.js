const form = document.getElementById('form');
form.addEventListener('submit', (event) => {
  event.preventDefault(); // prevent form from submitting

  // validate name field
  const nameInput = document.getElementsByName('name')[0];
  if (nameInput.value.trim() === '') {
    nameInput.classList.add('is-invalid');
    nameInput.nextElementSibling.innerText = 'Name is required';
    return;
  }

  // validate email field
  const emailInput = document.getElementsByName('email')[0];
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(emailInput.value)) {
    emailInput.classList.add('is-invalid');
    emailInput.nextElementSibling.innerText = 'Email is invalid';
    return;
  }

  // validate password field
  const passwordInput = document.getElementsByName('password')[0];
  if (passwordInput.value.length < 6) {
    passwordInput.classList.add('is-invalid');
    passwordInput.nextElementSibling.innerText = 'Password must be at least 6 characters';
    return;
  }

  // validate phone number field
  const phoneInput = document.getElementsByName('phone_no')[0];
  const phoneRegex = /^\d+$/;
  if (!phoneRegex.test(phoneInput.value)) {
    phoneInput.classList.add('is-invalid');
    phoneInput.nextElementSibling.innerText = 'Phone number should be numbers only';
    return;
  }

  // validate house number field
  const houseInput = document.getElementsByName('house_no')[0];
  const houseRegex = /^\d+$/;
  if (!houseRegex.test(houseInput.value)) {
    houseInput.classList.add('is-invalid');
    houseInput.nextElementSibling.innerText = 'House number should be numbers only';
    return;
  }

  // validate hourly salary field
  const salaryInput = document.getElementsByName('hourly_salery')[0];
  if (isNaN(salaryInput.value) || salaryInput.value <= 0) {
    salaryInput.classList.add('is-invalid');
    salaryInput.nextElementSibling.innerText = 'Hourly salary must be a positive number';
    return;
  }

  // if all fields are valid, submit the form
  form.submit();
});
const paymentForm = document.getElementById('paymentForm');
const paymentStatus = document.getElementById('paymentStatus');

paymentForm.addEventListener('submit', (event) => {
  event.preventDefault();

  const username = document.getElementById('username').value;
  const pin = document.getElementById('pin').value;

  // Placeholder for validation (replace with actual logic)
  if (username === 'valid_username' && pin === '1234') {
    paymentStatus.textContent = 'Payment successful!';
  } else {
    paymentStatus.textContent = 'Invalid username or PIN';
  }
});

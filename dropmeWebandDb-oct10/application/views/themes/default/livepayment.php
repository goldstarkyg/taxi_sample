
<script src="https://checkout.stripe.com/checkout.js"></script>

<button id="customButton">Purchase</button>

<script>
var handler = StripeCheckout.configure({
  key: 'pk_test_KSlJoSVKjk2qOFn3WI9ANOJ2',
  image: 'https://s3.amazonaws.com/stripe-uploads/acct_19yKmjJeIu5MlR2Rmerchant-icon-1493814194641-NDOT_Logo.gif',
  locale: 'auto',
  token: function(token) {
    // You can access the token ID with `token.id`.
    // Get the token ID to your server-side code for use.
  }
});

document.getElementById('customButton').addEventListener('click', function(e) {
  // Open Checkout with further options:
  handler.open({
    name: 'Ndot',
    description: '2 widgets',
    amount: 2000
  });
  e.preventDefault();
});

// Close Checkout on page navigation:
window.addEventListener('popstate', function() {
  handler.close();
});
</script>
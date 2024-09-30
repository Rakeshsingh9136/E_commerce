<?php
$pageTitle = 'Payment';
ob_start();
?>

<div id="itemDetails"></div>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
    const itemName = sessionStorage.getItem('itemName') || 'Idli';
const itemPrice = parseInt(sessionStorage.getItem('itemPrice')) || 69;


    document.getElementById('itemDetails').innerHTML = `
    <div class="container-fluid text-center border bg-success">
        <p><strong>Item:</strong> ${itemName}</p>
        <p><strong>Price:</strong> ₹${itemPrice}</p>
        <button id="payButton" class="primary">Continue</button>
    </div>
    `;

    document.getElementById('payButton').onclick = async function() {
        try {
            const response = await fetch('http://localhost/E_commerce/backend/order.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    amount: itemPrice * 100, // Convert to smallest currency unit
                    currency: 'INR',
                    receipt: `receipt_${itemName}` // Use underscore for receipt format
                })
            });

            if (!response.ok) {
                const errorData = await response.json();
                alert(`Failed to create order: ${errorData.message || 'Please try again.'}`);
                return;
            }
            console.log(response);
            const order = await response.json();
            const options = {
                key: 'rzp_test_Xjia6oKF1Me5t4', // Your Razorpay key
                amount: order.amount,
                currency: order.currency,
                name: 'Foodie😋',
                description: itemName,
                order_id: order.id,
                handler: function (response) {
                    // Handle successful payment here
                    console.log('Payment Success', response);
                    alert('Payment successful! Thank you for your order.');
                    // Optionally, redirect to a confirmation page
                    // window.location.href = 'confirmation.php';
                },
                theme: {
                    color: '#F37254'
                }
            };

            const razorpay = new Razorpay(options);
            razorpay.open();
        } catch (error) {
            alert('An error occurred. Please try again.');
            console.error(error);
        }
    };
</script>

<?php
$content = ob_get_clean();
include 'base.php';
?>

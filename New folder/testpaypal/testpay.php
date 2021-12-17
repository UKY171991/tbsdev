<!DOCTYPE html>
<html>
<head>
    <title>Demo: Lazy Loader</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    
    
</head>
<body>
<?php 
// Include configuration file 
include_once 'config.php'; 
 
// Include database connection file 

?>

<div class="container">
    
        <div class="pro-box">
           
            <div class="body">
               
                <h6>Price: 5</h6>
				
                <!-- PayPal payment form for displaying the buy button -->
                <form action="<?php echo PAYPAL_URL; ?>" method="get">
                    <!-- Identify your business so that you can collect the payments. -->
                    <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">
					
                    <!-- Specify a Buy Now button. -->
                    <input type="hidden" name="cmd" value="_xclick">
					
                    <!-- Specify details about the item that buyers will purchase. -->
                    <input type="hidden" name="item_name" value="myprdt">
                    <input type="hidden" name="item_number" value="2">
                    <input type="hidden" name="amount" value="5">
                    <input type="hidden" name="currency_code" value="<?php echo PAYPAL_CURRENCY; ?>">
					<input type="hidden" name="first_name" value="my11prdt">
                    <!-- Specify URLs -->
                    <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">
                    <input type="hidden" name="cancel_return" value="<?php echo PAYPAL_CANCEL_URL; ?>">
					
                    <!-- Display the payment button. -->
                    <input type="image" name="submit" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif">
                </form>
            </div>
        </div>
   
</div>

</body>
</html>
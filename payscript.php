<?php

 $apiKey = "rzp_test_a6uu5PwN21oQpi";

?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>



<form action="" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="<?php echo $_POST['amount'] * 100;?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"//You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-id="<?php echo 'DONATE-ID'.rand(10,100)."END";?>"//Replace with the order_id generated by you in the backend.
    data-buttontext="Pay with Razorpay"
    data-name="VSG CharitAbles"
    data-description="Donation"
    data-image="https://img.icons8.com/wired/2x/rupee.png"
    data-prefill.name="<?php echo $_POST['name'];?>"
    data-prefill.email="<?php echo $_POST['email'];?>"
    data-prefill.contact="<?php echo $_POST['mobile'];?>"
    data-theme.color="#F37254"
></script>

<script type="text/javascript">
$(document).ready(function(){
   document.getElementsByClassName("razorpay-payment-button").click();
});
</script> 

<input type="hidden" custom="Hidden Element" name="hidden">
</form>

<a href="https://www.instamojo.com/@yashjain314" rel="im-checkout" data-text="Pay" data-css-style="color:#ffffff; background:#b80000; width:500px; border-radius:4px" data-image="https://cdn.filestackcontent.com/Ebcz5WUQT1OfYrCU6uc4"  data-layout="vertical"></a>
<script src="https://js.instamojo.com/v1/button.js"></script>
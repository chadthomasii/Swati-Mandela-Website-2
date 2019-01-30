<?php include_once("form.php")?>

<?php include_once("head.php");?>

    

    <div class="form-container">

        <div class="header-text-container header-text-container-white">
            <h1 class= "animated fadeIn">Get In Touch</h1>
        </div>

        <div class="form animated fadeInDown">
            <form action="contact.php" method="post">

                <input type="text" name="name" placeholder= "Name *" required>
                <input type="email" name="email" placeholder= "Email *" required>
                <input type="text" name="phonenumber" placeholder= "Phone">
                <input type="text" name="company" placeholder= "Company">
                <input type="text" name="question" placeholder= "What is thirteen minus six? *">

                <textarea placeholder="Message" class="message" name="message"></textarea>

                <button class="submit" type="submit" name="submit">Submit</button>

            </form>
        </div>

        <?php if($message != ''): ?>
            <div class="<?php echo $messageClass; ?>">
                <h2><?php echo $message; ?></h2>
            </div>               
        <?php endif; ?>
        
    </div>

    

    <?php include_once("footer.php");?>

    <?php include_once("scripts.php"); ?>

  </body>

</html>

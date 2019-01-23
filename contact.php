<?php include_once("form.php")?>

<?php include_once("head.php");?>

    <div class="header-shape-container">
        <div class="header-shape">
            <h1>Contact</h1>
        </div>
    </div>

    <div class="form-container">
        <div class="form">
            <form action="contact.php" method="post">

                <div class="form-block">
                    <input type="text" name="name" placeholder= "Name *" required>
                    <input type="email" name="email" placeholder= "Email *" required>
                </div>

                <div class="form-block">
                    <input type="text" name="phonenumber" placeholder= "Phone">
                    <input type="text" name="company" placeholder= "Company">
                </div>

                <textarea placeholder="Inquiry" class="message" name="message"></textarea>

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

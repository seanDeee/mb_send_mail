<?php
mb_language("English");
mb_internal_encoding("UTF-8");

    //Admin Email
    $adminEmail = "email@email.com";

    //Get the Input Datas'
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $eMail = $_POST['eMail'];
    $message = $_POST['message'];
?>



<!DOCTYPE html>
<html class="no-js" lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confirm Page</title>
    <!-- META INFO -->
    <!-- <meta name="description" content="">
		<meta name="keywords" content="">
		<meta property="og:title" content="トップ">
		<meta property="og:type" content="website">
		<meta property="og:description" content="">
		<meta property="og:url" content="./">
		<meta property="og:image" content="./assets/img/og.png">-->
    <!-- FAVICON -->
    <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="icon" href="./assets/img/favicon.ico" type="image/vnd.microsoft.icon">
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/swiper.min.css">
    <link rel="stylesheet" href="./assets/css/normalize.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="">
    <!-- SCRIPT -->
    <script src="./assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.
		<script>
				(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
				function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
				e=o.createElement(i);r=o.getElementsByTagName(i)[0];
				e.src='//www.google-analytics.com/analytics.js';
				r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
				ga('create','UA-XXXXX-X','auto');ga('send','pageview');
		</script> -->
</head>

<body class="home" id="top">
    <header>
        <div class="container">
            <div class="bg__Color"></div>
        </div>
    </header>

    <main>

        <section>
            <div class="container">
                <div class="form__container">
                    <form action="./mail.php" method="post">

                        <table>
                            <tr>
                                <td>
                                    <p>Name</p>
                                </td>
                                <td><span><?php echo $name; ?></span>
                                    <input type="hidden" placeholder="Input" name="name" value="<?php echo $name; ?>"></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>E-mail</p>
                                </td>
                                <td> <span><?php echo $eMail; ?></span>
                                    <input type="hidden" placeholder="Input" name="eMail" value="<?php echo $eMail; ?>"></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Subject</p>
                                </td>
                                <td><span><?php echo $subject; ?></span>
                                    <input type="hidden" placeholder="Input" name="subject" value="<?php echo $subject; ?>"></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Message</p>
                                </td>
                                <td><span><?php echo $message; ?></span>
                                    <input type="hidden" placeholder="Input" name="message" value="<?php echo $message; ?>"></td>
                            </tr>
                        </table>

                        <input type="submit">

                    </form>
                </div>
            </div>
        </section>

    </main>

    <footer>
        <div class="container">
            <div class="bg__Color"></div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="./assets/js/vendor/jquery-3.1.1.min.js"><\/script>')
    </script>
    <script src="./assets/js/vendor/jquery.inview.js"></script>
    <script src="./assets/js/vendor/jquery.matchHeight-min.js"></script>
    <script src="./assets/js/vendor/swiper.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>

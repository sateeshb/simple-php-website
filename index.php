<?php require 'functions.php'; ?>
<!DOCTYPE html>
<html>
<meta name="twitter:card" content="verizon">
<meta name="twitter:site" content="verizon">
<meta name="twitter:description" content="sample twetter deeplink testing">
<meta name="twitter:app:country" content="US">
<meta name="twitter:app:name:iphone" content="My Verizon">
<meta name="twitter:app:id:iphone" content="929750075">
<meta name="twitter:app:url:iphone" content="openmvm://?pageType=productDetails&sourceID=SmartLink&deviceProdId=dev7480001">
<meta name="twitter:app:name:ipad" content="My Verizon">
<meta name="twitter:app:id:ipad" content="929750075">
<meta name="twitter:app:url:ipad" content="openmvm://?pageType=productDetails&sourceID=SmartLink&deviceProdId=dev7480001">
<meta name="twitter:app:name:googleplay" content="MyVerizon">
<meta name="twitter:app:id:googleplay" content="com.vzw.hss.myverizon">
<meta name="twitter:app:url:googleplay" content="openmvm://?pageType=productDetails&sourceID=SmartLink&deviceProdId=dev7480001">
<head>
    <meta charset="utf-8" />
    <title><?php siteName(); ?> | <?php pageTitle(); ?></title>
    <style type="text/css">
        .wrap { max-width: 700px; margin: 50px auto; padding: 30px; text-align: center; box-shadow: 0 0 5px rgba(0,0,0,.5); }
        article { text-align: left; padding: 40px; }
    </style>
</head>
<body>
<div class="wrap">

    <header>
        <h2><?php siteName(); ?></h2>
        <nav class="menu">
            <a href="/" title="Home">Home</a> |    
            <a href="/?page=about-us">About</a> |
            <a href="/?page=products">Products</a> |
            <a href="/?page=contact-us">Contact</a>
        </nav>
    </header>    

    <article>
        <h3><?php pageTitle(); ?></h3>
        <?php pageContent(); ?>
    </article>

    <footer><small>&copy;<?php echo date('Y'); ?> <?php siteName(); ?>. All rights reserved.</small></footer>
</div>
</body>
</html>
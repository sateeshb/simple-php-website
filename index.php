<?php require 'functions.php'; ?>
<!DOCTYPE html>
<html>
<meta name="twitter:card" content="app">
<meta name="twitter:site" content="verizon">
<meta name="twitter:description" content="sample twitter deeplink testing">
<meta name="twitter:app:country" content="US">
<meta name="twitter:app:name:iphone" content="My Verizon">
<meta name="twitter:app:id:iphone" content="929750075">
<meta name="twitter:app:url:iphone" content="https://mobile.vzw.com/hybridClient/launchMVM.html?action=deeplink&sourceId=SmartLink&deeplink=myfeed&fallback=appStore&promonameabcd&feedName=promo1">
<meta name="twitter:app:name:ipad" content="My Verizon">
<meta name="twitter:app:id:ipad" content="929750075">
<meta name="twitter:app:url:ipad" content="https://mobile.vzw.com/hybridClient/launchMVM.html?action=deeplink&sourceId=SmartLink&deeplink=myfeed&fallback=appStore&promonameabcd&feedName=promo1">
<meta name="twitter:app:name:googleplay" content="My Verizon">
<meta name="twitter:app:id:googleplay" content="com.vzw.hss.myverizon">
<meta name="twitter:app:url:googleplay" content="https://mobile.vzw.com/hybridClient/launchMVM.html?action=deeplink&sourceId=SmartLink&deeplink=myfeed&fallback=appStore&promonameabcd&feedName=promo1">
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
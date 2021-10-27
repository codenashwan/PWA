<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="assets/manifest.json">
    <meta name="theme-color" content="#359FAC">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Akocopy">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#359FAC">
    <meta name="apple-mobile-web-app-title" content="Akocopy">
    <meta name="msapplication-TileColor" content="#359FAC">
    <link rel="apple-touch-icon" href="assets/img/pwa/icon/144.png">
    <link href="assets/img/pwa/splash/splash.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="assets/img/pwa/splash/splash.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="assets/img/pwa/splash/splash.png" media="(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="assets/img/pwa/splash/splash.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="assets/img/pwa/splash/splash.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="assets/img/pwa/splash/splash.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
    <link href="assets/img/pwa/splash/splash.png" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="assets/img/pwa/splash/splash.png" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="assets/img/pwa/splash/splash.png" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
    <link href="assets/img/pwa/splash/splash.png" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
</head>

<body>
<div class="holder">
        <h1>Meow!</h1>
        <img src="https://placekitten.com/300/400" alt="cute kitties">
    </div>
</body>

<script type="text/javascript">
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('worker.js').then(function(registration) {
                    console.log('Worker registration successful', registration.scope);
                }, function(err) {
                    console.log('Worker registration failed', err);
                }).catch(function(err) {
                    console.log(err);
                });
            });
        } else {
            console.log('Service Worker is not supported by browser.');
        }
    </script>
</html>
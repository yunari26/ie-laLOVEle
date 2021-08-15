<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="message">
        <p class="fadeup first-content">
            2日間ありがとうございました！<br>
            改めて、このハッカソンを主催してくださったTech Bowlの皆様、丁寧に<br>
            アドバイスをくださったメンターの方々、そしてこのハッカソンを盛り上<br>
            げてくれた参加者の皆様全員に感謝の意を述べさせていただきたいと思い<br>
            ます。
        </p>
        <h2 class="next-content">本当にありがとうございました！！</h2>
    </div>
    <div class="images-content">
        <div class="images">
            <img class="image1" src="images\kakeru.png" alt="">
            <img class="image2" src="images\nari.png" alt="">
            <img class="image3" src="images\yujiro.png" alt="">
            <img class="image4" src="images\taku.png" alt="">
        </div>
    </div>
</body>
</html>
<style>
    .image1 {
        animation: bound .3s ease 0.3s infinite alternate;
    }
    .image2 {
        animation: bound .3s ease 0.5s infinite alternate;
    }
    .image3 {
        animation: bound .3s ease 0.7s infinite alternate;
    }
    .image4 {
        animation: bound .3s ease 0.9s infinite alternate;
    }
    div.message {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    div.message p {
        font-size: 30px;
        opacity: 0;
    }
    div.message h2 {
        color: red;
        font-size: 50px;
        opacity: 0;
    }
    .fadeup.first-content {
        animation: fadeIn 3s ease 0.3s 1 normal forwards;
    }
    .next-content {
        animation: fadeUp 1s ease 2.3s 1 normal forwards;
    }
    .images {
        text-align: center;
    }
    @keyframes fadeIn {
        0% {
            opacity: 0;
            visibility: hidden;
            transform: translateY(150px);
        }
        100% {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
    }
    @keyframes fadeUp {
        0% {
            opacity: 0;
            visibility: hidden;
            transform: translateY(150px);
        }
        100% {
            opacity: 1;
            visibility: visible;
            transform: translateY(0) scale(1.5);
        }
    }
    @keyframes bound {
        0% {
            transform: translateY(0px);
        }
        100% {
            transform: translateY(-10px);
        }
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.3.2/dist/confetti.browser.min.js"></script>
<script>
    var end = Date.now() + (15 * 1000);

    // go Buckeyes!
    var colors = ['#bb0000', '#ffffff'];

    (function frame() {
        confetti({
            particleCount: 2,
            angle: 60,
            spread: 55,
            origin: { x: 0 },
            colors: colors
    });
    confetti({
        particleCount: 2,
        angle: 120,
        spread: 55,
        origin: { x: 1 },
        colors: colors
    });

    if (Date.now() < end) {
        requestAnimationFrame(frame);
    }
    }());
</script>


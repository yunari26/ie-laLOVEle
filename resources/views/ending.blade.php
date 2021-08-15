<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="refresh"content="15;URL={{ url('/member') }}">

    <title>Document</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<!-- Styles -->
<link rel="stylesheet" href="css/welcome.css">
<style>
    h1, h2, p, div{
        color: #eee;
        line-height: 2;
    }
    .intro-wrapper {
        background: #222;
        width: 100vw;
        height: 100vw;
    }
    .title {
        font-family: "MS Pゴシック" ;
    }
    .intro-first, .intro-second, .intro-third {
        position: absolute;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20% 10%;
        left: 0;
        right: 0;
        opacity: 0;
        -webkit-animation: change 14s linear 10s;
        animation: change 14s linear 10s;
    }
    .intro-text {
        font-size: 20px;
    }
    .intro-first {
        animation-delay: 1s;
    }
    .intro-second {
        animation-delay: 7s;
    }
    .intro-third {
        animation-delay: 13s;
    }

    @-webkit-keyframes change {
        0% {
            -webkit-animation-timing-function: ease-in;
            opacity: 0;
        }
        10% {
            -webkit-transform: scale(1.1);
            opacity: 1;
        }
        40% {
            -webkit-transform: scale(1.2);
                -webkit-animation-timing-function: ease-out;
            opacity: 1;
        }
        50% {
            -webkit-transform: scale(1.3);
            opacity: 0;
        }
        100% { opacity: 0 }
    }

    @keyframes change {
        0% {
            animation-timing-function: ease-in;
            opacity: 0;
        }
        10% {
            transform: scale(1.1);
            opacity: 1;
        }
        40% {
            transform: scale(1.2);
                animation-timing-function: ease-out;
            opacity: 1;
        }
        50% {
            transform: scale(1.3);
            opacity: 0;
        }
        100% { opacity: 0 }
    }
</style>
</head>
<body>
    <div class="intro-wrapper">
        <div class="intro-first">
            <p class="intro-text">
                見事、すべての屋台の摘発に成功しました。<br>
                あなたの活躍により、夏祭りの平和は保たれました。<br>
                しかし、この世にはまだまだ悪質な屋台が数多く存在します。<br>
                そんな屋台がなくなるまで、私たちYTYの活躍は続く、、、
            </p>
        </div>

        <div class="intro-second">
            <p class="intro-text">
                かと思いきや、、、？？<br>
                何か忘れている気がする、、、。
            </p>
        </div>
    </div>
</body>
</html>

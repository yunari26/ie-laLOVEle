<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        
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
                padding: 15% 10%;
                left: 0;
                right: 0;
                opacity: 0;
                -webkit-animation: change 14s linear 10s;
                animation: change 14s linear 10s;
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
                <h1 class="title">
                    <span class="first">Y</span><span class="second">T</span><span class="third">Y</span>
                </h1>
                <p class="subtitle">
                    屋台摘発屋台
                </p>
            </div>

            <div class="intro-second">
                <p class="intro-text">
                この世にはまだまだ、法律や規制を無視したり、
                </p>
                <p class="intro-text">
                顧客に対してひどい営業を行っている屋台が一定数存在します。
                </p>
                <p class="intro-text">
                そんな屋台を摘発するため生まれたのが、私たち屋台摘発屋台、通称「<span>YTY</span>」。
                </p>
                <p class="intro-text">
                一般の屋台に紛れながら、悪い屋台を摘発していきます。
                </p>
            </div>
            <div class="intro-third">
                <div class="rule">
                    <p class="rule-title">
                    ルール説明
                    </p>
                    <p class="rule-desc">
                    「これから皆さんにはYTYの一員となっていただき、<br>
                    お祭りに出店している屋台を調査していただきます。<br>
                    見事摘発できれば、祭りの平和は保たれ、摘発に失敗すれば、<br>
                    YTYの存在がバレてしまいます。」<br>
                    </p>
                    <p class="rule-bye">
                    いざ、祭りの平和のために！！！
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="images">
        <div class="up">
            <div class="center">
                <img src="images/omenya.png" class="image" id="image1">
            </div>
        </div>
        <div class="down">
            <div class="left">
                <img src="images/sukui.png" class="image" id="image2">
            </div>
            <div class="center">
                <a href="{{ url('/thanks') }}">
                    <div class="people">
                        <img src="images/kakeru.png" class="image1" alt="">
                        <img src="images/nari.png" class="image2" alt="">
                        <img src="images/yujiro.png" class="image3" alt="">
                        <img src="images/taku.png" class="image4" alt="">
                    </div>
                </a>
            </div>
            <div class="right">
                <img src="images/wanage.png" class="image" id="image3">
            </div>
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
    body {
        background-image: url(https://t4.ftcdn.net/jpg/02/76/07/57/360_F_276075762_iSnIlN6H6qhaoLJ59jMKLTEEtpqZ19la.jpg);
        background-size: cover;
    }
    img {
        width: 500px;
    }
    #image1 {
        width: 400px;
    }
    .center {
        text-align: center;
    }
    .up {
        width: 100%;
        margin-top: 150px;
    }
    .left {
        margin-left: 100px;
    }
    .right {
        margin-right: 100px;
    }
    .down {
        margin-top: 50px;
        display: inline-block;
        display: flex;
        justify-content: space-between;
    }
    .people {
        margin-top: 60px;
    }
    .people img {
        width:100px;
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
<script>
//     const image = document.getElementsByClassName('image');
//     let stat = false;
//     for (var i = image.length-1; i >= 0; i--) {
//         // 各ボタンをイベントリスナーに登録
// 　　    image[i].addEventListener("click", function(){
// 　　　  // fadeoutクラスの追加と削除
// 　　　  // thisは、クリックされたオブジェクト
// 　　　  this.classList.add('fadeout');
//         this.classList.add('on');
//         document.getElementById('images').classList.add('fadeout');
// 　　});
//     }
</script>

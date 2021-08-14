@extends('layouts.app')
@section('content')
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
                <a href="{{ url('/find') }}">
                    <img src="images\omenya.png" class="image" id="image1">
                </a>
            </div>
        </div>
        <div class="down">
            <div>
                <a href="{{ url('/find') }}">
                    <img src="images\wanage.png" class="image" id="image2">
                </a>
            </div>
            <div>
                <a href="{{ url('/find') }}">
                    <img src="images\sukui.png" class="image" id="image3">
                </a>
            </div>
        </div>  
    </div>
</body>
</html>
<style>
    body {
        background-image: url(https://t4.ftcdn.net/jpg/02/76/07/57/360_F_276075762_iSnIlN6H6qhaoLJ59jMKLTEEtpqZ19la.jpg);
        background-size: cover;
    }
    img {
        width: 500px;
    }
    .center {
        text-align: center;
    }
    .up {
        width: 100%;
        margin-top: 200px;
    }
    .down {
        margin-top: 50px;
        display: inline-block;
        display: flex;
        justify-content: space-between;
    }
    #image1, #image2, #image3 {
        transition: all 1500ms 0s ease;
    }
    .on {
      transform: scale(2.0, 2.0) translate(80px, 80px);
    }
    .off {
      transform: scale(1.0, 1.0) translate(0px, 0px);
      opacity: 1;
    }
    .fadeout {
        animation: fadein-keyframes 2s ease 0.2s 1 forwards;
    }
    
    @keyframes fadein-keyframes {
        0% {
            opacity: 1;
        }

        100% {
            opacity: 0;
        }
    }
</style>
<script>
    const image = document.getElementsByClassName('image');
    let stat = false;
    for (var i = image.length-1; i >= 0; i--) {
        // 各ボタンをイベントリスナーに登録
　　    image[i].addEventListener("click", function(){
　　　  // fadeoutクラスの追加と削除
　　　  // thisは、クリックされたオブジェクト
　　　  this.classList.add('fadeout');
        this.classList.add('on');
        document.getElementById('images').classList.add('fadeout');
　　});
    }
</script>

@endsection

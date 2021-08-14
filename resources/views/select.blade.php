@extends('layouts.app')
@section('content')
<div id="images">
    <div class="up">
        <div class="center">
            <a href="{{ url('find?shop=1') }}">
                <img src="images/omenya.png" class="image" id="image1">
            </a>
        </div>
    </div>
    <div class="down">
        <div class="left">
            <a href="{{ url('find?shop=2') }}">
                <img src="images/wanage.png" class="image" id="image2">
            </a>
≈        </div>
        <div class="right">
            <a href="{{ url('find?shop=3') }}">
                <img src="images/sukui.png" class="image" id="image3">
            </a>
        </div>
    </div>
</div>
<style>
    img {
        width: 500px;
    }
    #image1 {
        width: 400px;
    }
    #image1,
    #image2,
    #image3 {
        transition: all 1500ms 0s ease;
    }
    body {
        background-image: url(https://t4.ftcdn.net/jpg/02/76/07/57/360_F_276075762_iSnIlN6H6qhaoLJ59jMKLTEEtpqZ19la.jpg);
        background-size: cover;
    }
    .on {
        transform: scale(2.0, 2.0) translate(80px, 80px);
    }

    .off {
        transform: scale(1.0, 1.0) translate(0px, 0px);
        opacity: 1;
    }
    .up {
        width: 100%;
        margin-top: 200px;
    }
    .center {
        text-align: center;
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
    console.log(image);
    for (var i = image.length - 1; i >= 0; i--) {
        // 各ボタンをイベントリスナーに登録
        image[i].addEventListener("click", function() {
            // fadeoutクラスの追加と削除
            // thisは、クリックされたオブジェクト
            this.classList.add('fadeout');
            this.classList.add('on');
            document.getElementById('images').classList.add('fadeout');
        });
    }
</script>

@endsection

<link href="css/welcome.css" rel="stylesheet" type="text/css">

@extends('layouts.app')
@section('content')
<div class="center mgn_top200">
    <img class="image" src="images\wanage.png">
    <a href="javascript:void(0)" class="yes1"></a>
    <img class="yes1" src="images\mark_maru.png" style="display:none;">
    <a href="javascript:void(0)" class="yes2"></a>
    <img class="yes2" src="images\mark_maru.png" style="display:none;">
    <a href="javascript:void(0)" class="yes3"></a>
    <img class="yes3" src="images\mark_maru.png" style="display:none;">
</div>
<div class="yes-modal modal1">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
        <div class="modal-inner">
            <div class="modal-text">
                <h2>摘発‼︎</h2>
                <p>完全に日和っちゃってますね。<br>
                    これには東京卍会の総長も呆れています。<br>
                    「お盆deハッカソン2日しかないからって日和ってるやついる!?」</p>
            </div>
            <div class="modal-image">
                <img src="images/ban-hiyori.png">
            </div>
        </div>
        <div class="right">
            <a class="js-modal-close-yes btn" href="">次へ</a>
        </div>
    </div>
</div>

<div class="yes-modal modal2">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
        <div class="modal-inner">
            <div class="modal-text">
                <h2>摘発‼</h2>
                <p>輪投げなのにフリスビー置いちゃってますね。<br>
                    これは誰がやっても0点です。悪質です。</p>
            </div>
            <div class="modal-image">
                <img src="images/ban-frisbee.png">
            </div>
        </div>
        <div class="right">
            <a class="js-modal-close-yes btn" href="">次へ</a>
        </div>
    </div>
</div>

<div class="yes-modal modal3">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
        <div class="modal-inner">
            <div class="modal-text">
                <h2>摘発‼</h2>
                <p>段ボールで作られた屋台に、輪投げ、、、<br>
                    ネットでの収入が途絶えてしまったのでしょうか。<br>
                    見る人が見ればホームレスだと勘違いしてもおかしくありません。</p>
            </div>
            <div class="modal-image">
                <img src="images/ban-daigo.png">
            </div>
        </div>
        <div class="right">
            <a class="js-modal-close-yes btn" href="">次へ</a>
        </div>
    </div>
</div>

<div class="yes-modal success">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
        <h2>摘発成功‼︎</h2>
        <p>テキストテキストテキストテキスト3</p>
        <a class="js-modal-close" href="{{ route('select') }}">次へ</a>
    </div>
</div>

{{-- 摘発成功--}}
<div class="yes-modal success">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
        <div class="modal-inner">
            <div class="modal-text">
                <h2 class="congratus next-content">Congratulations!!︎</h2>
                <h2 class="success">摘発成功!!︎</h2>
            </div>
            <div class="modal-image">
                <img src="images/toriosae.png">
            </div>
        </div>
        <div class="right">
            <a class="js-modal-close btn" href="{{ url('/select?page=1') }}">次の屋台へ</a>
        </div>
    </div>
</div>
@endsection
<style>
    .image {
        position: relative;
    }

    .yes1 {
        position: absolute;
        display: inline-block;
        width: 100px;
        height: 100px;
        top: 450px;
        left: 400px;

    }

    .yes2 {
        position: absolute;
        display: inline-block;
        width: 120px;
        height: 50px;
        top: 490px;
        left: 600px;
    }

    .yes3 {
        position: absolute;
        display: inline-block;
        width: 120px;
        height: 200px;
        top: 310px;
        right: 460px;

    }

    .yes-modal {
        display: none;
        height: 100vh;
        position: fixed;
        top: 0;
        width: 100%;
    }

    .modal__bg {
        background: rgba(255, 255, 255, 0.8);
        height: 100vh;
        position: absolute;
        width: 100%;
    }

    .modal__content {
        background: #fff;
        left: 50%;
        padding: 40px;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 60%;
    }
</style>

<script type="module">
    $(function() {
        $('a.yes1').on('click', function() {
            $(this).remove();
            $('.modal1').fadeIn();
            $('img.yes1').show();
            return false;
        });
        $('a.yes2').on('click', function() {
            $(this).remove();
            $('.modal2').fadeIn();
            $('img.yes2').show();
            return false;
        });
        $('a.yes3').on('click', function() {
            $(this).remove();
            $('.modal3').fadeIn();
            $('img.yes3').show();
            return false;
        });

        var modalCnt = 0;
        $('.js-modal-close-yes').on('click', function() {
            $('.yes-modal').fadeOut();
            modalCnt++;
            if (modalCnt === 3) {
                $('.success').fadeIn();
                return false;
            }
            return false;
        })
    })
</script>

@extends('layouts.app')
<link href="css/welcome.css" rel="stylesheet" type="text/css">
@section('content')
<div class="center mgn_top100">
    <img class="image center mgn_top100" src="images\sukui.png">
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
                <p>おおっと、国民的女優ガッキーの不倫です。<br>
                    見つけてしまいました、、、今世紀1番のお手柄といっても過言ではないかもしれません、、。</p>
            </div>
            <div class="modal-image">
                <img src="images/ban-affair.png">
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
                <h2>摘発‼︎</h2>
                <p>大胆にも商品である金魚を食用にしていますね。<br>
                    これは見逃せません。<br>
                    猫かな?猫なのかな??</p>
            </div>
            <div class="modal-image">
                <img src="images/ban-eating.png">
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
                <h2>摘発‼︎</h2>
                <p>本日8/15は終戦記念日であるにも関わらず、争っています。<br>
                    争いからは悲劇しか生まれません。<br>
                    平和に行きましょう。</p>
            </div>
            <div class="modal-image">
                <img src="images/ban-struggle.png">
            </div>
        </div>
        <div class="right">
            <a class="js-modal-close-yes btn" href="">次へ</a>
        </div>
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
            <a class="js-modal-close btn" href="{{ url('ending') }}">次へ</a>
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
        width: 250px;
        height: 370px;
        top: 360px;
        left: 280px;
    }

    .yes2 {
        position: absolute;
        display: inline-block;
        width: 120px;
        height: 150px;
        top: 360px;
        left: 830px;
    }

    .yes3 {
        position: absolute;
        display: inline-block;
        width: 200px;
        height: 300px;
        top: 480px;
        left: 670px;
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

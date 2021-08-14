<link href="css/welcome.css" rel="stylesheet" type="text/css">

@extends('layouts.app')
@section('content')
<div class="center mgn_top200">
    <img class="image" src="images\omenya.png">
    <a href="javascript:void(0)" class="yes1 yes"></a>
    <img class="yes1" src="images\mark_maru.png" style="display:none;">
    <a href="javascript:void(0)" class="yes2 yes"></a>
    <img class="yes2" src="images\mark_maru.png" style="display:none;">
    <a href="javascript:void(0)" class="yes3 yes"></a>
    <img class="yes3" src="images\mark_maru.png" style="display:none;">
</div>
<div class="yes-modal modal1">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
        <div class="modal-inner">
            <div class="modal-text">
                <h2>摘発‼︎</h2>
                <p>テキストテキストテキストテキスト</p>
            </div>
            <div class="modal-image">
                <img src="images/ban_daigo.png">
            </div>
        </div>
        <div class="right">
            <a class="js-modal-close btn" href="">次へ</a>
        </div>
    </div>
</div>

<div class="yes-modal modal2">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
        <div class="modal-inner">
            <div class="modal-text">
                <h2>摘発‼︎</h2>
                <p>テキストテキストテキストテキスト</p>
            </div>
            <div class="modal-image">
                <img src="images/ban_daigo.png">
            </div>
        </div>
        <div class="right">
            <a class="js-modal-close btn" href="">次へ</a>
        </div>
    </div>
</div>

{{--<div class="yes-modal modal3">--}}
{{--    <div class="modal__bg js-modal-close"></div>--}}
{{--    <div class="modal__content">--}}
{{--        <div class="modal-inner">--}}
{{--            <div class="modal-text">--}}
{{--                <h2>摘発‼︎</h2>--}}
{{--                <p>テキストテキストテキストテキスト</p>--}}
{{--            </div>--}}
{{--            <div class="modal-image">--}}
{{--                <img src="images/ban_daigo.png">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="right">--}}
{{--            <a class="js-modal-close btn" href="">次へ</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--摘発失敗--}}
{{--<div class="no-modal modal3">--}}
{{--    <div class="modal__bg js-modal-close"></div>--}}
{{--    <div class="modal__content">--}}
{{--        <div class="modal-inner">--}}
{{--            <div class="modal-text">--}}
{{--                <h2>摘発失敗。。。︎</h2>--}}
{{--                <p>YTYであることがバレてしまった、、、<br><br>--}}

{{--                    もう一度挑戦しよう！！</p>--}}
{{--            </div>--}}
{{--            <div class="modal-image">--}}
{{--                <img src="images/shitauchi.png">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="right">--}}
{{--            <a class="js-modal-close btn" href="">再挑戦する!!</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{-- 摘発成功--}}
<div class="yes-modal modal3">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
        <div class="modal-inner">
            <div class="modal-text">
                <h2>︎</h2>
                <h2>Congratulations!!︎</h2>
                <h2>摘発成功!!︎</h2>
                <h2>by YTY</h2>
            </div>
            <div class="modal-image">
                <img src="images/toriosae.png">
            </div>
        </div>
        <div class="right">
            <a class="js-modal-close btn" href="">再挑戦する!!</a>
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
        height: 100px;
        top: 400px;
        left: 700px;

    }

    .yes2 {
        position: absolute;
        display: inline-block;
        width: 100px;
        height: 50px;
        top: 320px;
        left: 750px;
    }

    .yes3 {
        position: absolute;
        display: inline-block;
        width: 100px;
        height: 100px;
        top: 450px;
        right: 700px;

    }

    .yes-modal {
        display: none;
        height: 100vh;
        position: fixed;
        top: 0;
        width: 100%;
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
    });
</script>

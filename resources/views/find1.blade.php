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
        <h2>摘発‼︎</h2>
        <p>テキストテキストテキストテキスト</p>
        <a class="js-modal-close-yes" href="javascript:void(0)">次へ</a>
    </div>
</div>

<div class="yes-modal modal2">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
        <h2>摘発‼︎</h2>
        <p>テキストテキストテキストテキスト2</p>
        <a class="js-modal-close-yes" href="javascript:void(0)">次へ</a>
    </div>
</div>

<div class="yes-modal modal3">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
        <h2>摘発‼︎</h2>
        <p>テキストテキストテキストテキスト3</p>
        <a class="js-modal-close-yes" href="javascript:void(0)">次へ</a>
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

    .modal__bg {
        background: rgba(255, 255, 255, 0.8);
        height: 100vh;
        position: absolute;
        width: 100%;
    }

    .modal__content {
        width: 90%;
        height: 70%;
        background: #fff;
        top: 50%;
        left: 50%;
        padding: 40px;
        position: absolute;
        transform: translate(-50%, -50%);
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

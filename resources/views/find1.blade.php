<link href="css/welcome.css" rel="stylesheet" type="text/css">

@extends('layouts.app')
@section('content')
<div class="center mgn_top200">
    <img class="image" src="images\omenya.png">
    <a href="javascript:void(0)" class="yes1"></a>
    <a href="javascript:void(0)" class="yes2"></a>
    <a href="javascript:void(0)" class="yes3"></a>
</div>
<div class="yes-modal modal1">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
        <h2>摘発‼︎</h2>
        <p>テキストテキストテキストテキスト</p>
        <a class="js-modal-close" href="">次へ</a>
    </div>
</div>

<div class="yes-modal modal2">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
        <h2>摘発‼︎</h2>
        <p>テキストテキストテキストテキスト2</p>
        <a class="js-modal-close" href="">次へ</a>
    </div>
</div>

<div class="yes-modal modal3">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
        <h2>摘発‼︎</h2>
        <p>テキストテキストテキストテキスト3</p>
        <a class="js-modal-close" href="">次へ</a>
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
        top: 220px;
        left: 50px;

    }

    .yes2 {
        position: absolute;
        display: inline-block;
        width: 100px;
        height: 50px;
        top: 120px;
        left: 70px;
    }

    .yes3 {
        position: absolute;
        display: inline-block;
        width: 100px;
        height: 100px;
        top: 230px;
        left: 400px;

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
        $('.yes1').on('click', function() {
            $('.modal1').fadeIn();
            return false;
        });
        $('.yes2').on('click', function() {
            $('.modal2').fadeIn();
            return false;
        });
        $('.yes3').on('click', function() {
            $('.modal3').fadeIn();
            return false;
        });
    });
</script>

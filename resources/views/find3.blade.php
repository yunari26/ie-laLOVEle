@extends('layouts.app')
@section('content')
<div>
    <img class="image" src="images\sukui.png">
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
        height: 370px;
        top: 200px;
        left: 50px;
    }

    .yes2 {
        position: absolute;
        display: inline-block;
        width: 120px;
        height: 150px;
        top: 200px;
        left: 560px;
    }

    .yes3 {
        position: absolute;
        display: inline-block;
        width: 200px;
        height: 300px;
        top: 300px;
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

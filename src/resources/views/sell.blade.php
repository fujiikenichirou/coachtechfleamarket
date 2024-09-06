@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sell.css') }}">
@endsection

@section('content')
<div class="sell-form__content">
    <div class="sell-form__heading">
        <h2>商品の出品</h2>
    </div>
    <form class="form" action="/sell" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <div class="image">商品画像</div>
            <div class="upload-area">
                <input class="merchandise-image" id="merchandise-image" name="merchandise-image" type="file">
                <button class="upload__button">画像を選択する</button>
            </div>
        </div>

        <div class="form-group">
            <div class="merchandise-detail">商品の詳細</div>

            <span class="category">カテゴリー</span>
            <select class="form-control" name="category" id="category" required>
                <option value=""></option>
                <option value="fashion">ファッション</option>
                <option value="electronics">家電</option>
                <option value="game">ゲーム</option>
                <option value="other">その他</option>
            </select>

            <div class="condition">商品の状態</div>
            <select class="form-control" name="condition" id="condition" required>
                <option value=""></option>
                <option value="new">新品</option>
                <option value="like-new">ほぼ新品</option>
                <option value="used">やや傷や汚れあり</option>
                <option value="damaged">傷や汚れあり</option>
            </select>

            <div class="form-group">
                
            </div>
        </div>
    </form>
</div>
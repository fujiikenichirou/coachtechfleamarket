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
        <div class="form__group">
            <div class="image">商品画像</div>
            <div class="upload-area">
                <label for="merchandise-image" class="upload-label">画像を選択する</label>
                <input class="merchandise-image" id="merchandise-image" name="merchandise-image" type="file" style="display: none;"></input>
            </div>
        </div>

        <div class="form__group">
            <div class="form__group-title">商品の詳細</div>

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
        </div>

        <div class="form-group">
            <div class="form__group-title">商品名と説明</div>
            <div class="merchandise-name">商品名</div>
            <input class="merchandise-name__input" type="text" id="merchandise-name" name="merchandise-name" required></input>

            <div class="merchandise-about">商品の説明</div>
            <textarea class="merchandise-about__input" name="merchandise-about" id="merchandise-about" rows="5" required></textarea>
        </div>

        <div class="form__group">
            <div class="merchandise-price__title">販売価格</div>
            <div class="merchandise-price">販売価格</div>
            <input class="merchandise-price__input" type="number" name="merchandise-price" id="merchandise-price" min="0" required>¥</input>
        </div>

        <div class="form__group">
            <button type="submit">出品する<button>
        </div>
    </form>
</div>
@endsection
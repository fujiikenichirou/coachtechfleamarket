@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/top.css') }}">
@endsection

@section('content')
<div class="top-list">
    <a class="top-list__recommend">おすすめ</a>
    <a class="top-list__mylist">マイリスト</a>
</div>

<div class="product-list">
    
</div>
@endsection
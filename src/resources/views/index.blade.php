@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<link rel="stylesheet" href="{{ asset('css/common.css') }}">
<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
@endsection

@section('content')
<div class="alert">
    <div class="alert--danger">
    </div>
</div>
@section('page-title')
Contact
@endsection
    <form class="contact-form" action="/confirm" method="post">
        @csrf
        <div class="contact-form__item">
            <label class="contact-form__label">お名前
                <span class="contact-form__required">※</span>
            </label>
            <div class="contact-form__input--with-gap">
                <input class="contact-form__input--name" type="text" name="first_name" placeholder="   例：山田">
                <input class="contact-form__input--name" type="text" name="last_name" placeholder="   例：太郎">
            </div>
        </div>
        <div class="contact-form__item">
            <label class="contact-form__label">性別
                <span class="contact-form__required">※</span>
            </label>
            <div class="contact-form__radio">
                <label class="contact-form__radio-label">
                    <input class="contact-form__radio--gender" type="radio" name="gender" value="1">男性
                </label>
                <label class="contact-form__radio-label">
                    <input class="contact-form__radio--gender" type="radio" name="gender" value="2">女性
                </label>
                <label class="contact-form__radio-label">
                    <input class="contact-form__radio--gender" type="radio" name="gender" value="3">その他
                </label>
            </div>
        </div>
        <div class="contact-form__item">
            <label class="contact-form__label">メールアドレス
                <span class="contact-form__required">※</span>
            </label>
            <div class="contact-form__input">
                <input class="contact-form__input--email" type="email" name="email" placeholder="   例：test@example.com">
            </div>
        </div>
        <div class="contact-form__item">
            <label class="contact-form__label">電話番号
                <span class="contact-form__required">※</span>
            </label>
            <div class="contact-form__input">
                <input class="contact-form__input--tel" type="tel" name="tel" placeholder="080">
                <span class="contact-form__tel-hyphen">ｰ</span>
                <input class="contact-form__input--tel" type="tel" name="tel" placeholder="1234">
                <span class="contact-form__tel-hyphen">ｰ</span>
                <input class="contact-form__input--tel" type="tel" name="tel" placeholder="5678">
            </div>
        </div>
        <div class="contact-form__item">
            <label class="contact-form__label">住所
                <span class="contact-form__required">※</span>
            </label>
            <input class="contact-form__input contact-form__input--address" type="text" name="address" placeholder="   例：東京都渋谷区千駄ヶ谷1-2-3">
        </div>
        <div class="contact-form__item">
            <label class="contact-form__label">建物名</label>
            <input class="contact-form__input contact-form__input--building" type="text" name="building" placeholder="   例：千駄ヶ谷マンション101">
        </div>
        <div class="contact-form__item">
            <label class="contact-form__label">お問い合わせの種類
                <span class="contact-form__required">※</span>
            </label>
            <select class="contact-form__select" name="category" id="category_id">
                <option class="contact-form__option" disabled selected>選択してください</option>
                <option class="contact-form__option" value="1">商品のお届けについて</option>
                <option class="contact-form__option" value="2">商品の交換について</option>
                <option class="contact-form__option" value="3">商品トラブル</option>
                <option class="contact-form__option" value="4">ショップへのお問い合わせ</option>
                <option class="contact-form__option" value="5">その他</option>
            </select>
        </div>
        <div class="contact-form__item">
            <label class="contact-form__label">お問い合わせ内容
                <span class="contact-form__required">※</span>
            </label>
            <textarea class="contact-form__input contact-form__input--textarea" type="textarea" name="detail" placeholder="  お問い合わせ内容をご記載ください"></textarea>
        </div>
        <div class="contact-form__button">
            <button class="contact-form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>
@endsection
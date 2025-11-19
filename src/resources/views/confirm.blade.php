@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
<link rel="stylesheet" href="{{ asset('css/common.css') }}">
<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
@endsection

@section('content')
@section('page-title')
Confirm
@endsection
<div class="confirm-table">
            <table class="confirm-table__inner">
                <tr>
                    <th class="confirm-table__item--label">お名前</th>
                    <td class="confirm-table__item--value">{{ $contact['first_name'] }} {{ $contact['last_name'] }}</td>
                </tr>
                <tr>
                    <th class="confirm-table__item--label">性別</th>
                    <td class="confirm-table__item--value">{{ $contact['gender'] }}</td>
                </tr>
                <tr>
                    <th class="confirm-table__item--label">メールアドレス</th>
                    <td class="confirm-table__item--value">{{ $contact['email'] }}</td>
                </tr>
                <tr>
                    <th class="confirm-table__item--label">電話番号</th>
                    <td class="confirm-table__item--value">{{ $contact['tel'] }}</td>
                </tr>
                <tr>
                    <th class="confirm-table__item--label">住所</th>
                    <td class="confirm-table__item--value">{{ $contact['address'] }}</td>
                </tr>
                <tr>
                    <th class="confirm-table__item--label">建物名</th>
                    <td class="confirm-table__item--value">{{ $contact['building'] }}</td>
                </tr>
                <tr>
                    <th class="confirm-table__item--label">お問い合わせの種類</th>
                    <td class="confirm-table__item--value">{{ $contact['category'] }}</td>
                </tr>
                <tr>
                    <th class="confirm-table__item--label--textarea">お問い合わせ内容</th>
                    <td class="confirm-table__item--textarea">{{ $contact['detail'] }}</td>
                </tr>
            </table>
            <div class="confirm-table__button">
                <div class="confirm-table__button">
                    <button class="confirm-table__button--send" type="submit">送信</button>
                </div>
                <div class="confirm-table__button">
                    <button class="confirm-table__button--retouch" type="submit">修正</button>
                </div>
            </div>
        </div>
</div>
@endsection
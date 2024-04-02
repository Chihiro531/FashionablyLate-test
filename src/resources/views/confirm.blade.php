@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection
</head>
    <body>
    <header id="header">
        <h1 class="site-title">FashionablyLate</h1>
    <main id="main" class="wrapper">
        <div class="page_title">Confirm</div>
        <form class="form" action="/contacts" method="post">
            @csrf
            <div class="confirm-table">
                <table class="confirm-table__inner">
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お名前</th>
                        <td class="confirm-table__text">
                            <input type="text" name="name" value="{{$contact['first_name'] }} {{ $contact['last_name'] }}" readonly />
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">性別</th>
                        <td class="confirm-table__text">
                            <?php
                            $gender = '';
                            if ($contact['gender'] == '1') {
                                $gender = '男性';
                            } else if ($contact['gender'] == '2') {
                                $gender = '女性';
                            } else if ($contact['gender'] == '3') {
                                $gender = 'その他';
                            }
                            echo $gender;
                            ?>
                            <input type="hidden" name="gender" value="{{ $contact['gender'] }}" readonly />
                        </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">メールアドレス</th>
                            <td class="confirm-table__text">
                            <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
                            </td>
                            </th>
                        </tr>

                            <tr class="confirm-table__row">
                            <th class="confirm-table__header">電話番号</th>
                            <td class="confirm-table__text">
                                <input type="text" name="tel" value="{{ $contact['tel'] }}" readonly />
                            </td>
                            </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">住所</th>
                            <td class="confirm-table__text">
                                <input type="text" name="address" value="{{ $contact['address'] }}" readonly />

                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">建物名</th>
                            <td class="confirm-table__text">
                                <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お問い合わせの種類</th>
                            <td class="confirm-table__text">
                                <input type="text" name="item" value="{{ $contact['item'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お問い合わせ内容</th>
                            <td class="confirm-table__text">
                                <input type="text" name="detail" value="{{ $contact['detail'] }}" readonly />
                            </td>
                        </tr>
                    </div>
                </table>
                </div>
                <div class="submit_btn">
                <button type="submit">送信</button>
                <input type="button" value="修正" onClick="history.back()">
        </form>
    </main>
    </body>
</html>
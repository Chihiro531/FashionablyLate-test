@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
</head>
    <body>
    <header id="header">
        <h1 class="site-title">FashionablyLate</h1>
    <main id="main" class="wrapper">
        <div class="page_title">Contact</div>
        <form class="form" action="/contacts/confirm" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <div>
                        <label>お名前<span>※</span></label>
                        <input type="text" name="first_name" placeholder="例 山田" value="{{ old('first_name') }}">
                        <input type="text" name="last_name" placeholder="例 太郎" value="{{ old('last_name') }}">
                    </div>
                    <div class="form__error">
                        @error('first_name')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="form__error">
                        @error('last_name')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="gender_input">
                        <label>性別<span>※</span></label>
                        <input id="men" type="radio" name="gender" value="1" checked>
                        <label for="men" name="gender1" value="男性">男性</label>
                        <input id="women" type="radio" name="gender" value="2">
                        <label for="women" name="gender2" value="女性">女性<label>
                            <input id="other" type="radio" name="gender3" value="3">
                        <label for="other" name="gender3" value="その他">その他<label>
                    </div>
                    <div class="form__error">
                        @error('gender')
                        {{$message}}
                        @enderror
                        </div>
                    <div>
                        <label>メールアドレス<span>※</span></label>
                        <input type="text" name="email" placeholder="例 test@example.com" value="{{ old('email') }}">
                    </div>
                    <div class="form__error">
                    @error('email')
                        {{$message}}
                        @enderror
                    </div>
                    <div>
                    <label for="tel">電話番号<span>※</span></label>
                    <input type="text" id="tel1" name="tel" placeholder="例 08012345678" value="{{ old('tel') }}">
                    </div>
                    <div class="form__error">
                    @error('tel')
                    {{$message}}
                    @enderror
                    </div>
                    <div>
                        <label>住所<span>※</span></label>
                        <input type="text" name="address" placeholder="例 東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
                    </div>
                    <div class="form__error">
                        @error('address')
                        {{$message}}
                        @enderror
                    </div>
                    <div>
                        <label>建物名</label>
                        <input type="text" name="building" placeholder="例 千駄ヶ谷マンション301" value="{{ old('building') }}">
                    </div>
                    <div>
                        <label>お問い合わせの種類<span>※</span></label>
                        <select name="item" value="{{ old('item') }}">
                            <option value=""selected="selected">選択してください</option>
                            <option value="商品のお届けについて">商品のお届けについて</option>
                            <option value="商品の交換について">商品の交換について</option>
                            <option value="商品トラブル">商品トラブル</option>
                            <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                            <option value="その他">その他</option>
                        </select>
                    </div>
                    <div class="form__error">
                        @error('item')
                        {{$message}}
                        @enderror
                    </div>
                    <div>
                        <label>お問い合わせ内容<span>※</span></label>
                        <textarea name="detail" rows="5" placeholder="お問合せ内容をご記載ください" value="{{ old('detail') }}"></textarea>
                    </div>
                    <div class="form__error">
                        @error('detail')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                </div>
            </div>
            <button class="submit_btn" type="submit">確認画面</button>
        </form>
    </main>
</body>
</html>
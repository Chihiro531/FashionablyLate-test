@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection
</head>
    <body>
    <header id="header">
        <h1 class="site-title">FashionablyLate</h1>
        <button><a href="./login">login</a></button>
</header>
    <main id="main" class="wrapper">
        <div class="page_title">Register</div>
        <form class="form" action="/register" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お名前</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="name" placeholder="例:山田 太郎" value="{{ old('name') }}" required autofocus/>
                    </div>
                    <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">メールアドレス</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" required autofocus/>
                    </div>
                    <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">パスワード</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="password" name="password" placeholder="例;coachtech1206" required/>
                    </div>
                    <div class="form__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                    </div>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">登録</button>
            </div>
            </form>
    </main>
</body>
</html>

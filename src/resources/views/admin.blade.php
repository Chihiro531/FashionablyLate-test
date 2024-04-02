@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection
</head>
    <body>
    <header id="header">
        <h1 class="site-title">FashionablyLate</h1>
        @if (Auth::check())
            <form class="form" action="/logout" method="post">
            <button>logout</button>
            @csrf
            </form>
            @endif
        </header>
        <main id="main" class="wrapper">
            <div class="page_title">Admin</div>

            <section class="search_form">
                <div class="search_form_item">
                    <input class="search_form_item_input" type="text" name="name" placeholder="名前やメールアドレスを入力してください" value="" >
                    <select name="search_gender">
                    @foreach ($categories as $category)
                    <option value="{{ $category['gender'] }}"></option>
                    @endforeach
                    <option value="性別">性別</option>
                    </select>
                    <select class="search_contact_content" name="category_id">
                    @foreach ($categories as $category)
                    <option value="{{ $category['id'] }}">
                    {{ $category['content'] }}
                    </option>
                    @endforeach
                    <option value="お問い合わせの種類">お問い合わせの種類</option>
                    </select>
                    <input name="date" type="date"/>
                    <button class="search_button">検索</button>
                    <input type="reset" name="reset" value="リセット">
                </div>
            </section>

            <section class="search_command">
                    <div>
                        <button type="submit">エクスポート</button>
                    </div>
                    <div>
                        <ul>
                            <li><</li>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                            <li>></li>
                        </ul>
                    </div>
            </section>

            <div class="Admin-table">
                <table class="Admin-table__inner">
                    <tr class="Admin-table__row">
                        <th class="Admin-table__header">
                            <span class="Admin-table__header-span">お名前</span>
                            <span class="Admin-table__header-span">性別</span>
                            <span class="Admin-table__header-span">メールアドレス</span>
                            <span class="Admin-table__header-span">お問い合わせの種類</span>
                        </th>
                    </tr>
                    <tr class="search-table__row">
                        <td class="search-table__item">
                            <form class="detail_display_form" action="" method="post">
                                    @csrf
                                <div class="detail_display_item">
                                    <input class="name__item-input" type="text" name="name" value="" />
                                    <input type="hidden" name="" value="">
                                    <input class="gender__item-input" type="text" name="gender" value="" />
                                    <input class="email__item-input" type="text" name="email" value="" />
                                    <input class="item__item-input" type="text" name="item" value="" />

                                        <div id="open">
                                            詳細
                                        </div>

                                    <section id="modal" class="hidden">
                                        <div class="display_in_modal">
                                            <p>お名前</p>
                                            <p>性別</p>
                                            <p>メールアドレス</p>
                                            <p>電話番号</p>
                                            <p>住所</p>
                                            <p>建物名</p>
                                            <p>お問い合わせの種類</p>
                                            <p>お問い合わせ内容</p>
                                            <button class="delete_btn">削除</button>
                                        </div>
                                    </section>
                                </div>
                            </form>
                        </td>
                    </tr>
        </main>
        <script src="js/main.js"></script>
</body>
</html>

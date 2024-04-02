<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route; // Routeファサードをインポート
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * すべてのアプリケーションサービスを登録します。
     */
    public function register(): void
    {
        //
    }

    /**
     * すべてのアプリケーションサービスを起動します。
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::registerView(function () {
            return view('auth.register');
        });
        Fortify::loginView(function () {
            return view('auth.login');
        });


        RateLimiter::for('login', function (Request $request) {     $email = (string) $request->email;

        return Limit::perMinute(10)->by($email . $request->ip());
    });



        RateLimiter::for('login', function (Request $request) {
            $throttleKey = Str::transliterate(Str::lower($request->input(Fortify::username())) . '|' . $request->ip());

            return Limit::perMinute(5)->by($throttleKey);
        });

        $this->configureRateLimiting(); // 正しい配置

        // ルーティングの設定
        Route::group(['middleware' => 'web', 'namespace' => 'App\Http\Controllers'], function () {
            // 通常のWebルート
            require base_path('routes/web.php');
        });

        Route::group(['middleware' => 'api', 'namespace' => 'App\Http\Controllers', 'prefix' => 'api'], function () {
            // API用のルート
            require base_path('routes/api.php');
        });
    }

    // メソッドをbootメソッドの外に移動
    protected function configureRateLimiting()
    {
        // 'testLimit'リミッターのレート制限を定義
        RateLimiter::for('testLimit', function (Request $request) {
            // 1分間に5回のリクエスト制限を追加
            return Limit::perMinute(5);
        });
    }
}

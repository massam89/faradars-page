<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>فرادرس – بزرگترین منبع فیلم های آموزشی دانشگاهی و مهندسی </title>
        <link rel="shortcut icon" href="https://faradars.org/wp-content/uploads/2020/05/favicon2.png" type="image/x-icon" />
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <div>
            @if (Route::has('login'))
                <div class="nav">
                    @auth
                        <a href="{{ url('/home') }}" class="">خانه</a>
                    @else

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="menu">ثبت نام</a>
                        @endif

                        <a href="{{ route('login') }}" class="menu">ورود</a>
           
                    @endauth
                </div>
            @endif

        </div>
    </body>
</html>

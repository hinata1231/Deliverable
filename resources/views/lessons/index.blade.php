<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>My_Path</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

       
    </head>
    <body class="antialiased">
       <h1>My_Path 日本語教室（にほんごきょうしつ）</h1>
       <div class='lessons'>
           <div class='lesson'>
              <h3 class='title'>一か月のカレンダー</h3>
            　<h3 class='title'>一週間のカレンダー</h3>
            　@foreach($lessons as $lesson)
            　{{$lesson->id}}
            　@endforeach
            　<a href=''><h5 class='title'>start</h5></a>
             <a href='/lessons/create'><h3 class='title'> 授業登録</h3></a>
             <a href='/teachers/create'><h3 class='title'>先生からのお知らせ</h3></a>
              <a href='/teachers/index'><h3 class='title'>先生の紹介</h3></a>
           </div>
           
       </div>
    </body>
</html>

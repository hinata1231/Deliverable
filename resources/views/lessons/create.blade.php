<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>My_Path</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

       
    </head>
    <body class="antialiased">
       <h1>授業登録・変更</h1>
        <from action="/lessons" method="POST">
            @csrf
            <div class="title">
                 <h2>授業の日にち・時間</h2>
                 <input type="text" name="post[title]" placeholder="授業の日にち・時間"/>
            </div>
            <div>
                <h2>今日の授業ですること</h2>
                <textarea name="post[body]" placeholder="今日は〇〇をします"></textarea>
            </div>
             <input type="submit" value="store"/>
            </from>
      <div class='footer'>
          <a href="/lesson">戻る</a>
      </div>
    </body>
</html>


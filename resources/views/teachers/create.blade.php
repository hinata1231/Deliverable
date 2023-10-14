<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>My_Path</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

       
    </head>
    <x-app-layout>
      <x-slot name="main-page">
      </x-slot>
     <body class="antialiased">
       <h1>先生からのお知らせ</h1>
        <form action="/teacher/comment/store" method="POST">
            @csrf
             <div class="students">
                <h2>生徒を選ぶ</h2>
                <select name="comment[student_id]">
                    @foreach($students as $student)
                    <option class='student' value={{$student->id}}>
                     {{$student->name}}   
                    </option>
                    @endforeach
                </select>
            </div>
            
            <div class="news">
                <h2>内容</h2>
                <textarea name="comment[news]" placeholder="〇月〇日はテストをします。">{{old('comment.news')}}</textarea>
                <p class='news__error' style="color:red">{{ $errors->first('comment.news')}}</p>
            </div>
            
            <div class='posts'>
            @foreach ($comments as $comment)
                <div class='post'>
                    <h2 class='student'>{{ $comment->student->name }}</h2>
                    <p class='news'>{{ $comment->news }}</p>
                </div>
            @endforeach
            </div>
            
             <input type="submit" value="保存"/>
        </form>
      <div class='footer'>
          <a href="/teacher/lesson">戻る</a>
      </div>
    </body>
    </x-app-layout>
</html>



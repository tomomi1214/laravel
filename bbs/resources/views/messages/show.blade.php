<!DOCTYPE html>
<html lang="ja">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!--<link rel="stylesheet" href="css/style.css">-->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!--<link rel="shortcut icon" href="favicon.ico">-->
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
        <title>投稿詳細</title>
    </head>
    <body>
        <div class="container">
            <div class="row mt-3">
                <h1 class="text-center col-sm-12">id: {{ $message->id }} の投稿詳細</h1>
            </div>
            
            <div class="row mt-2">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>id</th>
                        <td>{{ $message->id }}</td>
                    </tr>
                    <tr>
                        <th>名前</th>
                        <td>{{ $message->name }}</td>
                    </tr>
                    <tr>
                        <th>タイトル</th>
                        <td>{{ $message->title }}</td>
                    </tr>
                    <tr>
                        <th>内容</th>
                        <td>{{ $message->body }}</td>
                    </tr>
                    <tr>
                        <th>画像</th>
                        <td><img src="{{ asset('uploads') }}/{{ $message->image }}" alt="表示する画像がありません。"></td>
                    </tr>
                </table>
            </div> 
            
            <div class="row">
                <!--<a href="edit.php?id=<{{ $message->id }}" class="col-sm-6 btn btn-primary">編集</a>-->
                <a href="/messages/{{ $message->id }}/edit" class="col-sm-6 btn btn-primary">編集</a>
                <!--<form class="col-sm-6" action="delete.php" method="POST">-->
                <form class="col-sm-6" action="/messages/{{ $message->id }}" method="POST">
                    <!--CSRFトークンを生成-->
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="DELETE">
                    <!--<input type="hidden" name="id" value="{{ $message->id }}">-->
                    <button type="submit" class="btn btn-danger col-sm-12" onclick="return confirm('投稿を削除します。よろしいですか？')">削除</button>
                </form>
            </div>
            
            <div class="row mt-5">
                <!--<a href="index.php" class="btn btn-primary">投稿一覧</a>-->
                <a href="/messages" class="btn btn-primary">投稿一覧</a>
            </div>
        </div>
    
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS, then Font Awesome -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
        <!--<script src="js/script.js'"></script>-->
        <script src="{{asset('js/script.js')}}"></script>
    </body>
</html>
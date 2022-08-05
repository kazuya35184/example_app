<!doctype html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="x-UA-Compatible" content="ie=edge">
        <title>つぶやきアプリ</title>
        <link href="{{ mix(/css/app.css) }}" rel="stylesheet">
        <script src="{{ mix('js/app.js') }}"></script>
    </head>
    <body>
        <x-layout
        <h1>つぶやきアプリ</h1>
        @auth
            <div>
                <p>投稿フォーム</p>
                <form action="{{ route('tweet.create') }}" method="post">
                    @csrf
                    <label for="tweet-content">つぶやき</label>
                    <span>140文字まで</span>
                    <textarea name="tweet" type="text" id="tweet-content" placeholder="つぶやきを入力"></textarea>
                    @error('tweet')
                    <p style="color: red;">{{ $message }}</p>
                    @enderror
                    <button type="submit">投稿</button>
                </form>
            </div>
        @endauth
        <div>
            @foreach ($tweets as $tweet)
            <details>
                <summary>{{ $tweet->content }} by {{ $tweet->user->name }}</summary>
                @if (\Illuminate\Support\Facades\Auth::id() === $tweet->user_id)
                    <div>
                        <a href="{{ route('tweet.update.index', ['tweetId' => $tweet->id]) }}">編集</a>
                        <form action="{{ route('tweet.delete', ['tweetId' => $tweet->id]) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">削除</button>
                        </form>
                    </div>
                @else
                    編集できません
                @endif
            </details>
            @endforeach
        </div>
    </body>
</html>
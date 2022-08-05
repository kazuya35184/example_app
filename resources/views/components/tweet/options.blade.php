@if ($myTweet)
    <details class="tweet-option relative text-gray-500">
        <summary>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </summary>
        <div class="bg-white rounded shadow-md absolute right-0 w-24 z-20 pt-1pb-1">
            <div>
                <a href="{{ route('tweet.update.index', ['tweetId' => $tweetId]) }}" class="flex items-center pt-1 pb-1 pl-3 pr-3 hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                    <span>編集</span>
                </a>
            </div>
            <div>
                <form action="{{ route('tweet.delete', ['tweetId' => $tweetId]) }}" method="post" onclick="return confirm('削除してもよろしいですか？');">
                    @method('DELETE')
                    @csrf
                    <button class="flex items-center w-full pt-1 pb-1 pl-3 pr-3 hover:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                        <span>削除</span>
                    </button>
                </form>
            </div>
        </div>
    </details>
@endif
@once
    @push('css')
        <style>
            .tweet-option > summary {
                list-style: none;
                cursor: pointer;
            }
            .tweet-options[open] > summary::before {
                position: fixed;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                z-index: 10;
                display: block;
                content: " ";
                background: transparent;
            }
        </style>
    @endpush
@endonce
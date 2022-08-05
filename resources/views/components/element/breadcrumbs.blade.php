@props([
    'breadcrumbs' => [
        [
            'href' => '/',
            'label' => 'TOP'
        ]
    ]
])
<nav class="text-black mx-4 my-3" aria-label="Breadcrunmb">
    <ol class="list-none p-0 inline-flex">
        @foreach ($breadcrumbs as $breadcrumb)
            @if ($loop->last)
                <li>
                    <a href="{{ $breadcrumb['href'] }}" class="text-gray-500" aria-current="page">{{ $breadcrumb['label'] }}</a>
                </li>
            @else
                <li class="flex items-center">
                    <a href="{{ $breadcrumb['href'] }}" class="hover:underline">{{ $breadcrumb['label'] }}</a>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </li>
            @endif
        @endforeach
    </ol>
</nav>
@props([
    'images' => []
])

@if (count($images) > 0)
    <div class="px-2">
        <div class="flex justify-center -mx-2">
        @foreach ($images as $image)
            <div class="w-1/6 px-2 mt-5">
                <div class="bg-gray-400">
                    <a class="cursor-pointer">
                        <img class="object-fit w-full" src="{{ image_url($image->name) }}">
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endif
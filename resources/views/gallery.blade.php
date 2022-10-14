<div>

    @if($gallery->isEmpty())
        <h1 class="mt-5 text-5xl text-center font-extrabold tracking-tight leading-none text-gray-300 md:text-5xl lg:text-6xl">
            Пусто
        </h1>
    @else
        @foreach($gallery as $image)
            <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <img class="rounded-t-lg" src="{{ $image->path }}" alt="" />
            </div>
        @endforeach
    @endif

</div>

<link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>


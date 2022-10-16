<div>

    @if($gallery->isEmpty())
        <h1 class="mt-5 text-5xl text-center font-extrabold tracking-tight leading-none text-gray-300 md:text-5xl lg:text-6xl">
            Пусто
        </h1>
    @else
        <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">

            @foreach($gallery as $image)
                <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <img class="w-full max-h-96 rounded-t-lg" style="object-fit: contain" src="{{ asset($image->path) }}" alt="" />
                </div>
            @endforeach

        </div>
    @endif

</div>

<link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>


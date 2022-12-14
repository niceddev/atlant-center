@if($gallery->isEmpty())
    <h1 class="mt-5 text-5xl text-center font-extrabold tracking-tight leading-none text-gray-300 md:text-5xl lg:text-6xl">
        Пусто
    </h1>
@else
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="table-fixed w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="py-3 px-6 w-3x">
                    №
                </th>
                <th scope="col" class="py-3 px-6">
                    {{ __('common.image') }}
                </th>
                <th scope="col" class="py-3 px-6 float-end">
                    {{ __('common.action') }}
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($gallery as $image)
                <tr class="max-h-7 grid-cols-4 bg-white border-b hover:bg-gray-50">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                        {{ $loop->iteration }}
                    </th>
                    <td class="py-4 px-6">
                        <img class="max-h-36" style="object-fit: contain" src="{{ asset($image->path) }}" alt="" />
                    </td>
                    <td class="py-4 px-6 text-right">
                        <a href="{{ route('platform.gallery.destroy', $image->id) }}" class="hover:bg-gray-300 text-white bg-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                            {{ __('common.edit') }}
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endif

<link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>

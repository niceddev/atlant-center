@if($reviews->isEmpty())
    <h1 class="mt-5 text-5xl text-center font-extrabold tracking-tight leading-none text-gray-300 md:text-5xl lg:text-6xl">
        Пусто
    </h1>
@else
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        №
                    </th>
                    <th scope="col" class="py-3 px-6">
                        {{ __('common.title') }}
                    </th>
                    <th scope="col" class="py-3 px-6">
                        {{ __('common.description') }}
                    </th>
                    <th scope="col" class="py-3 px-6">
                        {{ __('common.info') }}
                    </th>
                    <th scope="col" class="py-3 px-6">
                        {{ __('common.action') }}
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($reviews as $review)
                    <tr class="max-h-7 grid-cols-4 bg-white border-b hover:bg-gray-50">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                            {{ $loop->iteration }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $review->full_name }}
                        </td>
                        <td class="py-4 px-6">
                            {!!
                                (strlen($review->content) > 50)
                                ? substr($review->content, 0, 50) . '...'
                                : $review->content
                            !!}
                        </td>
                        <td class="py-4 px-6">
                            {{ $review->info }}
                        </td>
                        <td class="py-4 px-6">
                            <a href="{{ route('platform.reviews.edit', $review->id) }}" class="hover:bg-gray-300 text-white bg-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
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


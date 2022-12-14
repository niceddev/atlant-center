@if($directions->isEmpty())
    <h1 class="mt-5 text-5xl text-center font-extrabold tracking-tight leading-none text-gray-300 md:text-5xl lg:text-6xl">
        Пусто
    </h1>
@else
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <ul id="directionsTab" class="flex flex-wrap -mb-px text-sm font-medium text-center" data-tabs-toggle="#directionsTabContent" role="tablist">
            @foreach(config('app.languages') as $key => $lang)
                <li class="mr-2">
                    <button class="inline-block p-4 rounded-t-lg border-b-2 {{ $key != app()->getLocale() ? '' : 'active' }} " type="button" role="tab"
                            data-tabs-target="#{{$key}}"
                            aria-selected="{{ $key != app()->getLocale() ? 'false' : 'true' }}">
                        {{ $lang }}
                    </button>
                </li>
            @endforeach
        </ul>

        <div id="directionsTabContent" id="{{ $key }}" >
            @foreach(config('app.languages') as $key => $lang)
                <table id="{{ $key }}" role="tabpanel" class="{{ $key != app()->getLocale() ? 'hidden' : 'active' }} w-full text-sm text-left text-gray-500">
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
                                {{ __('common.action') }}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($directions as $direction)
                            <tr class="max-h-7 grid-cols-4 bg-white border-b hover:bg-gray-50">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $loop->iteration }}
                                </th>
                                <td class="py-4 px-6">
                                    {{ $direction->getTranslation('title', $key) }}
                                </td>
                                <td class="py-4 px-6">
                                    {!!
                                        (strlen($direction->getTranslation('description', $key)) > 50)
                                        ? substr($direction->getTranslation('description', $key), 0, 50) . '...'
                                        : $direction->getTranslation('description', $key)
                                    !!}
                                </td>
                                <td class="py-4 px-6">
                                    <a href="{{ route('platform.directions.edit', $direction->id) }}" class="hover:bg-gray-300 text-white bg-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                                        {{ __('common.edit') }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endforeach
        </div>
    </div>

@endif

<link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" />
<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>


<div class="overflow-x-auto relative shadow-md sm:rounded-lg">

    <ul id="doctorsTab" class="flex flex-wrap -mb-px text-sm font-medium text-center" data-tabs-toggle="#doctorsTabContent" role="tablist">
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

    <div id="doctorsTabContent" id="{{ $key }}" >
        @foreach(config('app.languages') as $key => $lang)
            <table id="{{ $key }}" role="tabpanel" class="{{ $key != app()->getLocale() ? 'hidden' : 'active' }} w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            №
                        </th>
                        <th scope="col" class="py-3 px-6">
                            {{ __('common.full_name') }}
                        </th>
                        <th scope="col" class="py-3 px-6">
                            {{ __('common.speciality') }}
                        </th>
                        <th scope="col" class="py-3 px-6">
                            {{ __('common.graphic') }}
                        </th>
                        <th scope="col" class="py-3 px-6">
                            {{ __('common.biography') }}
                        </th>
                        <th scope="col" class="py-3 px-6">
                            {{ __('common.action') }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if($doctors->isEmpty())
                        <p class="{{ $key != app()->getLocale() ? 'hidden' : 'active' }} text-4xl text-center">Пусто</p>
                    @else
                        @foreach($doctors as $doctor)
                            <tr class="max-h-7 grid-cols-4 bg-white border-b hover:bg-gray-50">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $loop->iteration }}
                                </th>
                                <th scope="row" class="py-4 px-6">
                                    {{ $doctor->full_name }}
                                </th>
                                <th scope="row" class="py-4 px-6">
                                    {{ $doctor->getTranslation('speciality', $key) }}
                                </th>
                                <td class="py-4 px-6">
                                    {{ $doctor->getTranslation('graphic', $key) }}
                                </td>
                                <td class="py-4 px-6">
                                    {!!
                                        (strlen($doctor->getTranslation('biography', $key)) > 50)
                                        ? substr($doctor->getTranslation('biography', $key), 0, 50) . '...'
                                        : $doctor->getTranslation('biography', $key)
                                    !!}
                                </td>
                                <td class="py-4 px-6">
                                    <a href="{{ route('platform.doctors.edit', $doctor->id) }}" class="hover:bg-gray-300 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                                        {{ __('common.edit') }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        @endforeach
    </div>
</div>

<link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css"/>
<script src="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.bundle.js"></script>


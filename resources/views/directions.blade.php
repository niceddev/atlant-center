<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="mx-auto bg-white shadow-xl py-10">
    @if($directions->isEmpty())
        <p class="text-4xl text-center">Пусто</p>
    @else
        <table class="w-full px-10 whitespace-nowrap">
            <thead>
                <tr>
                    <th>№</th>
                    <th>{{ __('common.title') }}</th>
                    <th>{{ __('common.description') }}</th>
                    <th>{{ __('common.action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($directions as $direction)
                    <tr tabindex="0" class="h-16 hover:bg-zinc-100 pointer">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $direction->title }}</td>
                        <td>{{ $direction->description }}</td>
                        <td>
                            <a class="bg-zinc-600 p-3 text-white rounded hover:bg-zinc-300"
                               href="{{ route('platform.directions.edit', $direction->id) }}">
                                {{ __('common.edit') }}
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

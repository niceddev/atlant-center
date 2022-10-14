<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="mx-auto bg-white shadow-xl p-10">
    @if($directions->isEmpty())
        <p class="text-4xl text-center">Пусто</p>
    @else
        <table class="table-auto border-collapse table-auto w-full">
            <thead>
                <tr>
                    <th>№</th>
                    <th>{{ __('common.title') }}</th>
                    <th>{{ __('common.description') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($directions as $direction)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $direction->title }}</td>
                        <td>{{ $direction->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

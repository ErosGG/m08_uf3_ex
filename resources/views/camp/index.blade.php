@extends('layouts.app')

@section('title', 'Casals de la Generalitat')

@section('section', 'Casals')

@section('navbar-buttons')
{{--    <x-form.form method="get" action="{{ route('admin.products.index') }}">--}}
{{--        <x-form.input-text id="title_search" name="title" label="Cercador" placeholder="Cercador"></x-form.input-text>--}}
{{--    </x-form.form>--}}
    <x-button.filter></x-button.filter>
    <x-button.add href="{{ route('camps.create') }}"></x-button.add>
@endsection

@section('collapsed-filters')
    <div class="collapse" id="collapsed_filters">
        <div class="card card-body bg-dark">
            <x-form.form method="get" action="{{ route('camps.index') }}">
                <x-form.input-text id="name_search" name="name" label="Cercador" placeholder="Cercador"></x-form.input-text>
            </x-form.form>
        </div>
    </div>
@endsection

@section('content')

    <x-card.card>
        <x-card.body>

            <x-table.table>
                <x-table.head>
                    <x-table.tr>
                        <x-table.th>Nom</x-table.th>
                        <x-table.th>Data d'inici</x-table.th>
                        <x-table.th>Data de finalització</x-table.th>
                        <x-table.th>Nombre de places</x-table.th>
                        <x-table.th>Ciutat</x-table.th>
                        <x-table.th>Opcions</x-table.th>
                    </x-table.tr>
                </x-table.head>
                <x-table.body>
                    @foreach($camps as $camp)
                        <x-table.tr>
                            <x-table.td>{{ $camp->name }}</x-table.td>
                            <x-table.td>{{ $camp->start_date }}</x-table.td>
                            <x-table.td>{{ $camp->end_date }}</x-table.td>
                            <x-table.td>{{ $camp->places }}</x-table.td>
                            <x-table.td>{{ $camp->city->name }}</x-table.td>
                            <x-table.td>
                                <div class="d-flex flex-row justify-content-start align-items-center">
                                    <x-table.option.details href="{{ route('camps.show', ['camp' => $camp]) }}"></x-table.option.details>
                                    <x-table.option.edit href="{{ route('camps.edit', ['camp' => $camp]) }}"></x-table.option.edit>
                                    <x-table.option.delete href="{{ route('camps.destroy', ['camp' => $camp]) }}"></x-table.option.delete>
                                </div>
                            </x-table.td>
                        </x-table.tr>
                    @endforeach
                </x-table.body>
                <x-table.foot>
                    <x-table.tr>
                        <x-table.th>Nom</x-table.th>
                        <x-table.th>Data d'inici</x-table.th>
                        <x-table.th>Data de finalització</x-table.th>
                        <x-table.th>Nombre de places</x-table.th>
                        <x-table.th>Ciutat</x-table.th>
                        <x-table.th>Opcions</x-table.th>
                    </x-table.tr>
                </x-table.foot>
            </x-table.table>

            <x-table.paginator :models="$camps"></x-table.paginator>

        </x-card.body>
    </x-card.card>

@endsection

@extends('layouts.app')

@section('title', 'Casals de la Generalitat')

@section('section', 'Afegir casal')

@section('content')

<x-card.card>
    <x-card.body>

        <x-error.form-validation></x-error.form-validation>

        <x-form.form method="post" action="{{ route('camps.store') }}" enctype="multipart/form-data">
            <x-form.input-text id="name" name="name" label="Nom" placeholder="Nom"></x-form.input-text>
            <x-form.input-number id="places" name="places" label="Places" placeholder="Places"></x-form.input-number>
            <x-form.select id="city_id" name="city_id" label="Ciutat" placeholder="Ciutat" :options="$options"></x-form.select>

            <label for="start_date">Start date:</label>
            <input type="date" id="start_date" name="start_date" value="{{ old('start_date') }}">

            <label for="end_date">End date:</label>
            <input type="date" id="end_date" name="end_date" value="{{ old('end_date') }}">
        </x-form.form>

    </x-card.body>
</x-card.card>

@endsection

@extends('layout')

@section('title', )
@endsection

@section('content')
    <div class="flex flex-col md:flex-row">
        <div class="w-full md:w-1/2">
            <img src="{{ $prodotto->img }}" alt="{{ $prodotto->nome }}">
        </div>
        <div class="w-full md:w-1/2">
            <h1 class="text-3xl font-bold">{{ $prodotto->nome }}</h1>
            <p class="text-xl font-bold">{{ $prodotto->prezzo }} €</p>
            <p class="text-xl">{{ $prodotto->descrizione }}</p>
            <form action="{{ route('carrello.aggiungi', $prodotto->id) }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $prodotto->id }}">
                <input type="hidden" name="nome" value="{{ $prodotto->nome }}">
                <input type="hidden" name="prezzo" value="{{ $prodotto->prezzo }}">
                <input type="hidden" name="img" value="{{ $prodotto->img }}">
                <input type="hidden" name="descrizione" value="{{ $prodotto->descrizione }}">
                <input type="hidden" name="quantita" value="1">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Aggiungi al carrello</button>
            </form>
        </div>
    </div>
@endsection

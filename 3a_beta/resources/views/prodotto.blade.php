@extends('layout')

@section('title')
@endsection

@section('content')
    <div class="w-full h-3/4 bg-white">
        <div class="flex justify-center">
            <div class="w-3/4 h-3/4">
            </div>
        </div>
    </div>

    <div class="ml-4">
        <div class="flex">
            <h1 class="text-2xl font-bold text-white pt-4 tracking-wide font-['Nunito']">Nike Air Max 270 React</h1>
        </div>
        <div class="flex">
            <h1 class="text-xl font-bold text-white pt-4 tracking-wide font-['Nunito']">€ 120,00</h1>
        </div>
        <div class="flex">
            <h1 class="text-xl font-bold text-white pt-4 tracking-wide font-['Nunito']">Altre Versioni </h1>
        </div>
    </div>

    <div class="flex overflow-x-scroll pb-4 mb-4 hide-scroll-bar">
        <div class="flex flex-nowrap ml-4">
            <div class="inline-block mr-2">
                <div class="w-32 h-40 max-w-xs overflow-hidden bg-[#252525]">
                    <div class="w-full h-full bg-white">
                    </div>
                </div>
            </div>
            <div class="inline-block mr-2">
                <div class="w-32 h-40 max-w-xs overflow-hidden bg-[#252525]">
                    <div class="w-full h-full bg-white">
                    </div>
                </div>
            </div>
            <div class="inline-block mr-2">
                <div class="w-32 h-40 max-w-xs overflow-hidden bg-[#252525]">
                    <div class="w-full h-full bg-white">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex ml-4">
        <div class="w-3/4 h-1/5 bg-[#252525] rounded-2xl">
            <div class="flex justify-center">
                <h1 class="text-lg font-bold text-[#CBEB09] py-4 tracking-wide font-['Roboto']">AGGIUNGI AL CARRELLO</h1>
            </div>
        </div>
    </div>

    <!-- Product description -->
    <div class="ml-4">
        <div class="flex">
            <h1 class="text-2xl font-bold text-white pt-8 tracking-wide font-['Nunito']">Dettaglio</h1>
        </div>
        <div class="flex justify-between">
            <span class="text-white font-['Nunito']">Colore: </span>
            <span class="text-white font-['Nunito']">Materiale: </span>
        </div>
        <div class="flex">
            <p class="text-white text- font-['Nunito'] pt-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac tincidunt dui. Duis tincidunt, sem at
                ultricies dapibus, libero magna tincidunt orci, in scelerisque purus sem vitae tortor. Ut quis odio
                fermentum, ultricies ipsum non, tincidunt massa.
            </p>
        </div>
        <div class="flex">
            <h1 class="text-2xl font-bold text-white pt-8 tracking-wide font-['Nunito']">Prodotti simili</h1>
        </div>
        <div class="flex overflow-x-scroll pb-4 mb-4 hide-scroll-bar">
            <div class="flex flex-nowrap">
                <div class="inline-block mr-2">
                    <div class="w-32 h-40 max-w-xs overflow-hidden bg-[#252525]">
                        <div class="w-full h-full bg-white">
                        </div>
                    </div>
                </div>
                <div class="inline-block mr-2">
                    <div class="w-32 h-40 max-w-xs overflow-hidden bg-[#252525]">
                        <div class="w-full h-full bg-white">
                        </div>
                    </div>
                </div>
                <div class="inline-block mr-2">
                    <div class="w-32 h-40 max-w-xs overflow-hidden bg-[#252525]">
                        <div class="w-full h-full bg-white">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

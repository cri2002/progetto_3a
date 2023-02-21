@extends('layout')

@section('title')
@endsection

@section('content')
    <div class="flex h-10 w-full bg-[#191919] justify-between"><i class="bi bi-arrow-left text-white text-3xl ml-2"></i><i class="bi bi-cart mr-3 text-white text-3xl"></i></div>
    <div class="w-full h-3/4 bg-white">
    </div>


        <div class="flex ml-4">
            <h1 class="text-2xl font-bold text-white pt-4 tracking-wide font-['Nunito']">Nike Air Max 270 React</h1>
        </div>
        <div class="flex ml-6 mt-2 mb-2 justify-between">
            <h1 class="text-xl font-bold text-white pt-4 tracking-wide font-['Nunito']">€ 120,00</h1>
            <select class=" px-2 py-1 bg-transparent border-2 border-white rounded-md text-[#CBEB09] text-xl font-bold font-['Nunito'] mr-12 mt-2" name="taglie" id="">
                <option class="bg-[#191919]" value="xs">XS</option>
                <option class="bg-[#191919]" value="s">S</option>
                <option class="bg-[#191919]" value="m">M</option>
                <option class="bg-[#191919]" value="l">L</option>
            </select>
        </div>
        <br>
        <div class="flex ml-4">
            <div class="w-60 h-10 bg-[#252525] rounded-xl text-center">
                <h1 class="text-lg font-bold text-[#CBEB09] tracking-wide font-['Roboto'] leading-10">AGGIUNGI AL CARRELLO</h1>
            </div>
            <div class="h-10"><i class="bi bi-star text-[#CBEB09] leading-10 ml-8 text-3xl"></i></div>
        </div>
        <br>

        <div class="flex ml-4">
            <h1 class="text-xl font-bold text-white pt-4 tracking-wide font-['Nunito']">Altre Versioni </h1>
        </div>


    <div class="flex overflow-x-scroll pb-4 mb-4 hide-scroll-bar">
        <div class="flex flex-nowrap ml-4">
            <div class="inline-block mr-2">
                <div class="w-32 h-40 overflow-hidden bg-[#252525]">
                    <div class="w-full h-32 bg-white">
                    </div>
                    <div class="w-full h-5 font-['Nunito'] text-white">
                        <h1 class="text-xs font-bold truncate h-4">Nike Air Max 270 React</h1>
                        <div class="h-4">
                            <span class="text-xs text-[#CBEB09]">€ 120,00</span>
                            <span class="text-xs text-[#CBEB09]">✡</span>
                        </div>
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


    <!-- Product description -->
    <div class="ml-4">
        <div class="flex">
            <h1 class="text-2xl font-bold text-white pt-8 tracking-wide font-['Nunito']">Dettaglio</h1>
        </div>
        <div class="flex justify-between mr-10">
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

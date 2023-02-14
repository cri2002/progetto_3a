@extends('layout')

@section('title', 'Home')

@section('content')
    <div class="flex justify-center">
        <h1 class="text-2xl font-bold text-[#CBEB09] py-8 tracking-wide">INIZIA LO SHOPPING</h1>
    </div>

    <div class="flex justify-left">
        <h1 class="text-xl font-bold text-white ml-4 pb-2">CONSIGLIATI PER TE</h1>
    </div>

    <div class="flex justify-left">
        <h1 class="text-white ml-4 font-['Nunito'] text-bold">Footwear</h1>
    </div>
    <div class="flex overflow-x-scroll pb-4 hide-scroll-bar">
        <div class="flex flex-nowrap ml-4">
            <div class="inline-block mr-2">
                <div class="w-32 h-48 max-w-xs overflow-hidden bg-[#252525]">
                    <div class="w-full h-32 bg-white">
                    </div>
                    <div class="w-full h-16 font-['Nunito'] text-white m-1">
                        <h1 class="text-xs font-bold truncate h-10">Nike Air Max 270 React</h1>
                        <div class="h-6">
                            <span class="text-xs text-[#CBEB09]">€ 120,00</span>
                            <span class="text-xs text-[#CBEB09]">✡</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="inline-block mr-2">
                <div class="w-32 h-48 max-w-xs overflow-hidden bg-[#252525]">
                    <div class="w-full h-32 bg-white">
                    </div>
                    <div class="w-full h-16 font-['Nunito'] text-white m-1">
                        <h1 class="text-xs font-bold truncate h-10">Nike Air Max 270 React</h1>
                        <div class="h-6 mb-1">
                            <span class="text-xs text-[#CBEB09]">€ 120,00</span>
                            <span class="text-xs text-[#CBEB09]">✡</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="inline-block mr-2">
                <div class="w-32 h-48 max-w-xs overflow-hidden bg-[#252525]">
                    <div class="w-full h-32 bg-white">
                    </div>
                    <div class="w-full h-16 font-['Nunito'] text-white m-1">
                        <h1 class="text-xs font-bold truncate h-10">Nike Air Max 270 React</h1>
                        <div class="h-6 mb-1">
                            <span class="text-xs text-[#CBEB09]">€ 120,00</span>
                            <span class="text-xs text-[#CBEB09]">✡</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

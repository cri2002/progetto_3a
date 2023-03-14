@extends('layout')

@section('title', 'Home')

@section('content')
    <div class="flex justify-center mt-5">
        <div class="w-80 h-8 bg-[#333333] rounded-lg leading-8"><i class="bi bi-search ml-2 text-white"></i>    <input type="text" class="h-5 w-60 bg-transparent text-white outline-none"></div>
    </div>

    <div class="flex justify-center">
        <h1 class="text-2xl font-bold text-[#CBEB09] py-8 tracking-wide">INIZIA LO SHOPPING</h1>
    </div>

    <div class="flex justify-left">
        <h1 class="text-xl font-bold text-white ml-4 pb-2">CONSIGLIATI PER TE</h1>
    </div>

    <div class="flex justify-left">
        <h1 class="text-white ml-4 font-['Nunito'] text-bold" onclick='window.location="categoria"'>Footwear</h1>
    </div>
    <div class="flex overflow-x-scroll pb-4 hide-scroll-bar">
        <div class="flex flex-nowrap ml-4">
            <div class="inline-block mr-2" onclick='window.location="prodotto"'>
                <div class="w-32 h-48 max-w-xs overflow-hidden bg-[#252525]">
                    <div class="w-full h-32 bg-[url({{asset('/Asset/img/h_1.svg')}})]">
                    </div>
                    <div class="w-full h-16 font-['Nunito'] text-white m-1">
                        <h1 class="text-[16px] font-bold truncate h-8">Nike Air Max 270 React</h1>
                        <div class="h-6 justify-around flex flex-wrap">
                            <span class="text-[16px] font-bold text-[#CBEB09]  w-4/6 inline">€ 120,00</span>
                            <div class="bg-[url({{asset('/Asset/img/star.svg')}})] w-1/6 bg-contain bg-no-repeat"></div>
                            <div class=" w-1/6  "></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="inline-block mr-2" onclick='window.location="prodotto"'>
                <div class="w-32 h-48 max-w-xs overflow-hidden bg-[#252525]">
                    <div class="w-full h-32 bg-[url({{asset('/Asset/img/h_2.svg')}})]">
                    </div>
                    <div class="w-full h-16 font-['Nunito'] text-white m-1">
                    <h1 class="text-[16px] font-bold truncate h-8">Nike Air Max 270 React</h1>
                    <div class="h-6 justify-around flex flex-wrap">
                        <span class="text-[16px] font-bold text-[#CBEB09]  w-4/6 inline">€ 120,00</span>
                        <div class="bg-[url({{asset('/Asset/img/star.svg')}})] w-1/6 bg-contain bg-no-repeat"></div>
                        <div class=" w-1/6  "></div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="inline-block mr-2" onclick='window.location="prodotto"'>
                <div class="w-32 h-48 max-w-xs overflow-hidden bg-[#252525]">
                    <div class="w-full h-32 bg-[url({{asset('/Asset/img/h_3.svg')}})]">
                    </div>
                    <div class="w-full h-16 font-['Nunito'] text-white m-1">
                        <h1 class="text-[16px] font-bold truncate h-8">Nike Air Max 270 React</h1>
                    <div class="h-6 justify-around flex flex-wrap">
                        <span class="text-[16px] font-bold text-[#CBEB09]  w-4/6 inline">€ 120,00</span>
                        <div class="bg-[url({{asset('/Asset/img/star.svg')}})] w-1/6 bg-contain bg-no-repeat"></div>
                        <div class=" w-1/6  "></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="flex justify-left">
        <h1 class="text-white ml-4 font-['Nunito'] text-bold">Abbigliamento</h1>
    </div>
    <div class="flex overflow-x-scroll pb-4 hide-scroll-bar">
        <div class="flex flex-nowrap ml-4">
            <div class="inline-block mr-2" onclick='window.location="prodotto"'>
                <div class="w-32 h-48 max-w-xs overflow-hidden bg-[#252525]">
                    <div class="w-full h-32 bg-[url({{asset('/Asset/img/h_4.svg')}})]">
                    </div>
                    <div class="w-full h-16 font-['Nunito'] text-white m-1">
                        <h1 class="text-[16px] font-bold truncate h-8">Nike Air Max 270 React</h1>
                    <div class="h-6 justify-around flex flex-wrap">
                        <span class="text-[16px] font-bold text-[#CBEB09]  w-4/6 inline">€ 120,00</span>
                        <div class="bg-[url({{asset('/Asset/img/star.svg')}})] w-1/6 bg-contain bg-no-repeat"></div>
                        <div class=" w-1/6  "></div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="inline-block mr-2" onclick='window.location="prodotto"'>
                <div class="w-32 h-48 max-w-xs overflow-hidden bg-[#252525]">
                    <div class="w-full h-32 bg-[url({{asset('/Asset/img/h_5.svg')}})]">
                    </div>
                    <div class="w-full h-16 font-['Nunito'] text-white m-1">
                        <h1 class="text-[16px] font-bold truncate h-8">Nike Air Max 270 React</h1>
                    <div class="h-6 justify-around flex flex-wrap">
                        <span class="text-[16px] font-bold text-[#CBEB09]  w-4/6 inline">€ 120,00</span>
                        <div class="bg-[url({{asset('/Asset/img/star.svg')}})] w-1/6 bg-contain bg-no-repeat"></div>
                        <div class=" w-1/6  "></div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="inline-block mr-2" onclick='window.location="prodotto"'>
                <div class="w-32 h-48 max-w-xs overflow-hidden bg-[#252525]">
                    <div class="w-full h-32 bg-[url({{asset('/Asset/img/h_4.svg')}})]">
                    </div>
                    <div class="w-full h-16 font-['Nunito'] text-white m-1">
                        <h1 class="text-[16px] font-bold truncate h-8">Nike Air Max 270 React</h1>
                    <div class="h-6 justify-around flex flex-wrap">
                        <span class="text-[16px] font-bold text-[#CBEB09]  w-4/6 inline">€ 120,00</span>
                        <div class="bg-[url({{asset('/Asset/img/star.svg')}})] w-1/6 bg-contain bg-no-repeat"></div>
                        <div class=" w-1/6  "></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="flex justify-left">
        <h1 class="text-white ml-4 font-['Nunito'] text-bold">Accessori</h1>
    </div>
    <div class="flex overflow-x-scroll pb-4 hide-scroll-bar">
        <div class="flex flex-nowrap ml-4">
            <div class="inline-block mr-2" onclick='window.location="prodotto"'>
                <div class="w-32 h-48 max-w-xs overflow-hidden bg-[#252525]">
                    <div class="w-full h-32 bg-[url({{asset('/Asset/img/h_7.svg')}})]">
                    </div>
                    <div class="w-full h-16 font-['Nunito'] text-white m-1">
                        <h1 class="text-[16px] font-bold truncate h-8">Nike Air Max 270 React</h1>
                    <div class="h-6 justify-around flex flex-wrap">
                        <span class="text-[16px] font-bold text-[#CBEB09]  w-4/6 inline">€ 120,00</span>
                        <div class="bg-[url({{asset('/Asset/img/star.svg')}})] w-1/6 bg-contain bg-no-repeat"></div>
                        <div class=" w-1/6  "></div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="inline-block mr-2" onclick='window.location="prodotto"'> 
                <div class="w-32 h-48 max-w-xs overflow-hidden bg-[#252525]">
                    <div class="w-full h-32 bg-[url({{asset('/Asset/img/h_8.svg')}})]">
                    </div>
                    <div class="w-full h-16 font-['Nunito'] text-white m-1">
                        <h1 class="text-[16px] font-bold truncate h-8">Nike Air Max 270 React</h1>
                    <div class="h-6 justify-around flex flex-wrap">
                        <span class="text-[16px] font-bold text-[#CBEB09]  w-4/6 inline">€ 120,00</span>
                        <div class="bg-[url({{asset('/Asset/img/star.svg')}})] w-1/6 bg-contain bg-no-repeat"></div>
                        <div class=" w-1/6  "></div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="inline-block mr-2" onclick='window.location="prodotto"'>
                <div class="w-32 h-48 max-w-xs overflow-hidden bg-[#252525]">
                    <div class="w-full h-32 bg-[url({{asset('/Asset/img/h_9.svg')}})]">
                    </div>
                    <div class="w-full h-16 font-['Nunito'] text-white m-1">
                        <h1 class="text-[16px] font-bold truncate h-8">Nike Air Max 270 React</h1>
                        <div class="h-6 justify-around flex flex-wrap">
                            <span class="text-[16px] font-bold text-[#CBEB09]  w-4/6 inline">€ 120,00</span>
                            <div class="bg-[url({{asset('/Asset/img/star.svg')}})] w-1/6 bg-contain bg-no-repeat"></div>
                            <div class=" w-1/6  "></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

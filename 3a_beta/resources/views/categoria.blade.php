@extends('layout')

@section('title', 'Sign-in')

@section('content')

    <div class="flex h-10 w-full justify-between">
        <i onclick='window.location="/"' class="bi bi-arrow-left text-white text-3xl ml-2"></i>
    </div>

    <div class="flex justify-center">
        <h1 class="text-[32px] font-bold text-[#CBEB09] py-8 tracking-wide">FOOTWEAR</h1>
    </div>
    <div class="flex justify-center flex-wrap">
        <div class="inline-block mx-4 my-4">
            <div class="w-32 h-48 max-w-xs overflow-hidden bg-[#252525]">
                <div class="w-full h-32 bg-[url({{asset('/Asset/img/c1.svg')}})] bg-contain bg-no-repeat">
                </div>
                <div class="w-full h-16 font-['Nunito'] text-white m-1">
                    <h1 class="text-[16px] font-bold truncate h-8">Nike Air Max 270 React</h1>
                    <div class="h-6 justify-around flex flex-wrap">
                        <span class="text-[16px] font-bold text-[#CBEB09]  w-4/6 inline">€ 120,00</span>
                        {{-- <span class="text-xs text-[#CBEB09]">✡</span> --}}
                        <div class="bg-[url({{asset('/Asset/img/star.svg')}})] w-1/6 bg-contain bg-no-repeat"></div>
                        <div class=" w-1/6  "></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="inline-block mx-4 my-4">
            <div class="w-32 h-48 max-w-xs overflow-hidden bg-[#252525]">
                <div class="w-full h-32 bg-[url({{asset('/Asset/img/c2.svg')}})]  bg-contain bg-no-repeat">
                </div>
                <div class="w-full h-16 font-['Nunito'] text-white m-1">
                    <h1 class="text-[16px] font-bold truncate h-8">Nike 270 React</h1>
                    <div class="h-6 justify-around flex flex-wrap">
                        <span class="text-[16px] font-bold text-[#CBEB09]  w-4/6 inline">€ 120,00</span>
                        {{-- <span class="text-xs text-[#CBEB09]">✡</span> --}}
                        <div class="bg-[url({{asset('/Asset/img/star.svg')}})] w-1/6 bg-contain bg-no-repeat"></div>
                        <div class=" w-1/6  "></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center flex-wrap">
        <div class="inline-block mx-4 my-4">
            <div class="w-32 h-48 max-w-xs overflow-hidden bg-[#252525]">
                <div class="w-full h-32 bg-[url({{asset('/Asset/img/c3.svg')}})]  bg-contain bg-no-repeat">
                </div>
                <div class="w-full h-16 font-['Nunito'] text-white m-1">
                    <h1 class="text-[16px] font-bold truncate h-8">Nike Air Max </h1>
                    <div class="h-6 justify-around flex flex-wrap">
                        <span class="text-[16px] font-bold text-[#CBEB09]  w-4/6 inline">€ 120,00</span>
                        {{-- <span class="text-xs text-[#CBEB09]">✡</span> --}}
                        <div class="bg-[url({{asset('/Asset/img/star.svg')}})] w-1/6 bg-contain bg-no-repeat"></div>
                        <div class=" w-1/6  "></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="inline-block mx-4 my-4">
            <div class="w-32 h-48 max-w-xs overflow-hidden bg-[#252525]">
                <div class="w-full h-32 bg-[url({{asset('/Asset/img/c4.svg')}})]  bg-contain bg-no-repeat">
                </div>
                <div class="w-full h-16 font-['Nunito'] text-white m-1">
                    <h1 class="text-[16px] font-bold truncate h-8">Nike Air </h1>
                    <div class="h-6 justify-around flex flex-wrap">
                        <span class="text-[16px] font-bold text-[#CBEB09]  w-4/6 inline">€ 120,00</span>
                        {{-- <span class="text-xs text-[#CBEB09]">✡</span> --}}
                        <div class="bg-[url({{asset('/Asset/img/star.svg')}})] w-1/6 bg-contain bg-no-repeat"></div>
                        <div class=" w-1/6  "></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center flex-wrap">
        <div class="inline-block mx-4 my-4">
            <div class="w-32 h-48 max-w-xs overflow-hidden bg-[#252525]">
                <div class="w-full h-32 bg-[url({{asset('/Asset/img/c5.svg')}})]  bg-contain bg-no-repeat">
                </div>
                <div class="w-full h-16 font-['Nunito'] text-white m-1">
                    <h1 class="text-[16px] font-bold truncate h-8">Nike Air Max 270 React</h1>
                    <div class="h-6 justify-around flex flex-wrap">
                        <span class="text-[16px] font-bold text-[#CBEB09]  w-4/6 inline">€ 120,00</span>
                        {{-- <span class="text-xs text-[#CBEB09]">✡</span> --}}
                        <div class="bg-[url({{asset('/Asset/img/star.svg')}})] w-1/6 bg-contain bg-no-repeat"></div>
                        <div class=" w-1/6  "></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="inline-block mx-4 my-4">
            <div class="w-32 h-48 max-w-xs overflow-hidden bg-[#252525]">
                <div class="w-full h-32 bg-[url({{asset('/Asset/img/c6.svg')}})]  bg-contain bg-no-repeat">
                </div>
                <div class="w-full h-16 font-['Nunito'] text-white m-1">
                    <h1 class="text-[16px] font-bold truncate h-8">Nike Air Max 270 React</h1>
                    <div class="h-6 justify-around flex flex-wrap">
                        <span class="text-[16px] font-bold text-[#CBEB09]  w-4/6 inline">€ 120,00</span>
                        {{-- <span class="text-xs text-[#CBEB09]">✡</span> --}}
                        <div class="bg-[url({{asset('/Asset/img/star.svg')}})] w-1/6 bg-contain bg-no-repeat"></div>
                        <div class=" w-1/6  "></div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection

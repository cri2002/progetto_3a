@extends('layout')

@section('title', 'Sign-in')

@section('content')
    <div class="flex justify-center">
        <h1 class="text-2xl font-bold text-[#CBEB09] py-8 tracking-wide">FOOTWEAR</h1>
    </div>

    <div class="flex justify-center flex-wrap">
        <div class="inline-block mx-2">
            <div class="w-32 h-48 max-w-xs overflow-hidden bg-[#252525]">
                <div class="w-full h-32 bg-white">
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
        <div class="inline-block mx-2">
            <div class="w-32 h-48 max-w-xs overflow-hidden bg-[#252525]">
                <div class="w-full h-32 bg-white">
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

@extends('layout')

@section('title', 'Home')

@section('content')
    <div class="flex justify-center">
        <h1 class="text-2xl font-bold text-[#CBEB09] py-8 tracking-wide text-center">SCEGLI LO STILE <br>CHE PIU' TI <br>RAPPRESENTA</h1>
    </div>

    <div class="flex justify-evenly overflow-x-scroll pb-4 hide-scroll-bar">
        <div class="flex flex-nowrap ml-4">
            <div class="inline-block mr-4">
                <div class="w-32 h-30 max-w-xs overflow-hidden bg-[#252525]">
                    <div class="w-full h-32 bg-white">
                    </div>
                    <div class="w-full h-5 font-['Nunito'] text-[#CBEB09] m-1">
                        <h1 class="text-xs font-bold truncate h-10 text-center">CALCIO</h1>
                    </div>
                </div>
            </div>
            <div class="inline-block mr-4">
                <div class="w-32 h-30 max-w-xs overflow-hidden bg-[#252525]">
                    <div class="w-full h-32 bg-white">
                    </div>
                    <div class="w-full h-5 font-['Nunito'] text-[#CBEB09] m-1">
                        <h1 class="text-xs font-bold truncate h-10 text-center">TENNIS</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-evenly overflow-x-scroll pb-4 hide-scroll-bar">
        <div class="flex flex-nowrap ml-4">
            <div class="inline-block mr-4">
                <div class="w-32 h-30 max-w-xs overflow-hidden bg-[#252525]">
                    <div class="w-full h-32 bg-white">
                    </div>
                    <div class="w-full h-5 font-['Nunito'] text-[#CBEB09] m-1">
                        <h1 class="text-xs font-bold truncate h-10 text-center">BASKET</h1>
                    </div>
                </div>
            </div>
            <div class="inline-block mr-4">
                <div class="w-32 h-30 max-w-xs overflow-hidden bg-[#252525]">
                    <div class="w-full h-32 bg-white">
                    </div>
                    <div class="w-full h-5 font-['Nunito'] text-[#CBEB09] m-1">
                        <h1 class="text-xs font-bold truncate h-10 text-center">SKATE</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-evenly overflow-x-scroll pb-4 hide-scroll-bar">
        <div class="flex flex-nowrap ml-4">
            <div class="inline-block mr-4">
                <div class="w-32 h-30 max-w-xs overflow-hidden bg-[#252525]">
                    <div class="w-full h-32 bg-white">
                    </div>
                    <div class="w-full h-5 font-['Nunito'] text-[#CBEB09] m-1">
                        <h1 class="text-xs font-bold truncate h-10 text-center">NUOTO</h1>
                    </div>
                </div>
            </div>
            <div class="inline-block mr-4">
                <div class="w-32 h-30 max-w-xs overflow-hidden bg-[#252525]">
                    <div class="w-full h-32 bg-white">
                    </div>
                    <div class="w-full h-5 font-['Nunito'] text-[#CBEB09] m-1">
                        <h1 class="text-xs font-bold truncate h-10 text-center">CORSA</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center">
        <button class="h-50 w-100 background">CONFERMA</button>
    </div>
@endsection

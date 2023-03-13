@extends('layout')

@section('title', 'Sport')

@section('content')
    <div class="flex justify-center">
        <h1 class="tracking-wider text-2xl font-bold text-[#CBEB09] py-8 text-center">SCEGLI LO STILE <br>CHE PIU' TI <br>RAPPRESENTA</h1>
    </div>

    <div class="flex justify-evenly overflow-x-scroll pb-4 hide-scroll-bar">
        <div class="flex flex-nowrap ml-4">
            <div class="inline-block mr-4">
                <div class="w-32 h-30 max-w-xs overflow-hidden bg-[#252525] hover:border-4 hover:border-[#CBEB09]">
                    <div class="w-full h-32 bg-white">
                    </div>
                    <div class="w-full h-5 font-['Nunito'] text-[#CBEB09] m-1">
                        <h1 class="text-xs font-bold truncate h-10 text-center tracking-wider leading-5">CALCIO</h1>
                    </div>
                </div>
            </div>
            <div class="inline-block mr-4">
                <div class="w-32 h-30 max-w-xs overflow-hidden bg-[#252525] hover:border-4 hover:border-[#CBEB09]">
                    <div class="w-full h-32 bg-white">
                    </div>
                    <div class="w-full h-5 font-['Nunito'] text-[#CBEB09] m-1">
                        <h1 class="text-xs font-bold truncate h-10 text-center tracking-wider leading-5">TENNIS</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-evenly overflow-x-scroll pb-4 hide-scroll-bar">
        <div class="flex flex-nowrap ml-4">
            <div class="inline-block mr-4">
                <div class="w-32 h-30 max-w-xs overflow-hidden bg-[#252525] hover:border-4 hover:border-[#CBEB09]">
                    <div class="w-full h-32 bg-white">
                    </div>
                    <div class="w-full h-5 font-['Nunito'] text-[#CBEB09] m-1">
                        <h1 class="text-xs font-bold truncate h-10 text-center tracking-wider leading-5">BASKET</h1>
                    </div>
                </div>
            </div>
            <div class="inline-block mr-4">
                <div class="w-32 h-30 max-w-xs overflow-hidden bg-[#252525] hover:border-4 hover:border-[#CBEB09]">
                    <div class="w-full h-32 bg-white">
                    </div>
                    <div class="w-full h-5 font-['Nunito'] text-[#CBEB09] m-1">
                        <h1 class="text-xs font-bold truncate h-10 text-center tracking-wider leading-5">SKATE</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-evenly overflow-x-scroll pb-4 hide-scroll-bar">
        <div class="flex flex-nowrap ml-4">
            <div class="inline-block mr-4">
                <div class="w-32 h-30 max-w-xs overflow-hidden bg-[#252525] hover:border-4 hover:border-[#CBEB09]">
                    <div class="w-full h-32 bg-white">
                    </div>
                    <div class="w-full h-5 font-['Nunito'] text-[#CBEB09] m-1">
                        <h1 class="text-xs font-bold truncate h-10 text-center tracking-wider leading-5">NUOTO</h1>
                    </div>
                </div>
            </div>
            <div class="inline-block mr-4">
                <div class="w-32 h-30 max-w-xs overflow-hidden bg-[#252525] hover:border-4 hover:border-[#CBEB09]">
                    <div class="w-full h-32 bg-white">
                    </div>
                    <div class="w-full h-5 font-['Nunito'] text-[#CBEB09] m-1">
                        <h1 class="text-xs font-bold truncate h-10 text-center tracking-wider leading-5">CORSA</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center pb-4 w-full" onclick='window.location="/"'>
        <button class="bg-[#252525] rounded-xl text-xs text-[#333333] px-2 py-2 font-bold tracking-wider hover:text-[#FAFF23]">CONFERMA</button>
    </div>
@endsection

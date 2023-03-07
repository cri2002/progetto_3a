@extends('layout')

@section('title', 'Sign-in')
    


@section('content')

    <div class="bg-[#191919]  bg-[url({{asset('/Asset/img/impronta.svg')}})] w-100  -z-20 bg-no-repeat">
        
        <div class="flex flex-wrap justify-center">
            <div class="w-100 my-5">
                <span class="text-[#CBEB09] text-[32px] font-family:Roboto font-[700] tracking-wide "> REGISTRATI</span>
            </div>
        </div>

        <div class="w-100 mx-8 my-5 ">
            <span class="text-[#FFFFFF] text-[18px] font-family:'Open Sans' font-[500] block mt-2">Nome</span>
            <input type="text" name="nome" class="bg-[#333333] h-10 w-80 rounded-[15px] text-[#FFFFFF] px-2 border-2 border-black">
        </div>
        <div class="w-100 mx-8 my-5 ">
            <span class="text-[#FFFFFF] text-[18px] font-family:'Open Sans' font-[500] block mt-2">Cognome</span>
            <input type="text" name="cognome" class="bg-[#333333] h-10 w-80 rounded-[15px] text-[#FFFFFF] px-2 border-2 border-black">
        </div>
        <div class="w-100 mx-8 my-5 ">
            <span class="text-[#FFFFFF] text-[18px] font-family:'Open Sans' font-[500] block mt-2">E-mail</span>
            <input type="text" name="cognome" class="bg-[#333333] h-10 w-80 rounded-[15px] text-[#FFFFFF] px-2 border-2 border-black">
        </div>
        <div class="w-100 mx-8 my-5 ">
            <span class="text-[#FFFFFF] text-[18px] font-family:'Open Sans' font-[500] block mt-2">Password</span>
            <input type="text" name="cognome" class="bg-[#333333] h-10 w-80 rounded-[15px] text-[#FFFFFF] px-2 border-2 border-black">
        </div>
        <div class="w-100 mx-8 my-5 ">
            <span class="text-[#FFFFFF] text-[18px] font-family:'Open Sans' font-[500] block mt-2">Conferma Password</span>
            <input type="text" name="cognome" class="bg-[#333333] h-10 w-80 rounded-[15px] text-[#FFFFFF] px-2 border-2 border-black">
        </div>

        
        <div class="w-100 my-10 flex justify-center">
            <div class="w-30 h-10  bg-[#333333] rounded-[15px] px-2 border border-black flex items-center " onclick='window.location="/sport"'>
                <p class="text-[#CBEB09] text-[16px] font-family:'Open Sans'   font-[700]">REGISTRATI</p>
            </div>
        </div>
        <div class="w-100 my-10 flex justify-center">
                <p class="text-[#FFFFFF] text-[18px] font-family:Roboto  font-[500]">Già registrato? Accedi</p>
        </div>
        <div class="w-100 my-10 mt-5 flex justify-center">
            <p class="text-[#FFFFFF] text-[18px] font-family:Roboto  font-[500]">Registrati con</p>
        </div>
        <div class="  flex flex-wrap justify-center  ">
            
            <img src="{{asset('/Asset/img/facebook.png')}}" class="h-10 mt-2">
            
            <img src="{{asset('/Asset/img/google.png')}}" class="h-10 mt-2">
            
            <img src="{{asset('/Asset/img/apple.png')}}" class="h-10 mt-2">

        
        </div>
        


    </div>
@endsection
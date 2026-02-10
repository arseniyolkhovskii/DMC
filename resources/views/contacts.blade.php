@extends('layouts.main') {{-- Наследуем главный шаблон с меню --}}

@section('title', 'Контакты')

@section('content')
    <div class="container mx-auto px-4 py-8">

        {{-- Заголовок --}}
        <h1 class="text-3xl text-gray-800 mb-10 font-normal">Контакты</h1>

        {{-- Блок с данными (по центру, как на скриншоте) --}}
        <div class="flex flex-col items-center justify-center space-y-4 text-gray-800">

            {{-- Киевстар --}}
            <div class="text-lg">
                <span class="font-bold">Киевстар:</span>
                <a href="tel:+380988877127" class="hover:text-blue-600 transition">
                    +38(098)887-71-27
                </a>
            </div>

            {{-- МТС --}}
            <div class="text-lg">
                <span class="font-bold ml-8">МТС:</span> {{-- ml-8 добавлен для визуального выравнивания, если нужно --}}
                <a href="tel:+380994636628" class="hover:text-blue-600 transition">
                    +38(099)463-66-28
                </a>
            </div>

            {{-- Почта --}}
            <div class="text-lg mt-2">
                <span class="font-bold">Почта:</span>
                <a href="mailto:dmc.com.ua@gmail.com" class="font-bold hover:text-blue-600 transition">
                    dmc.com.ua@gmail.com
                </a>
            </div>

        </div>
    </div>
@endsection

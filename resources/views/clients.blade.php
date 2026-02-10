@extends('layouts.main')

@section('title', 'Наши Клиенты')

@section('content')

    <!-- Заголовок страницы -->
    <div class="bg-slate-50 py-12 border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-3xl font-extrabold text-slate-900 sm:text-4xl">
                Наши Клиенты
            </h1>
            <p class="mt-4 text-xl text-gray-500 max-w-2xl mx-auto">
                Гордимся сотрудничеством с лидерами рынка. Более 200 компаний доверяют нам свои коммуникации.
            </p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        <!-- Сетка логотипов -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @foreach($clients as $client)
                <div class="group relative bg-white border border-gray-100 rounded-xl p-6 flex items-center justify-center h-32 hover:shadow-lg transition-all duration-300 hover:-translate-y-1">

                    <!-- Логотип -->
                    <!-- ОБРАТИ ВНИМАНИЕ: asset('storage/' . ...) и $client->logo -->
                    <img src="{{ asset('storage/' . $client->logo) }}"
                         alt="{{ $client->name }}"
                         class="max-h-16 max-w-full object-contain filter grayscale opacity-70 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-300">

                    <!-- Всплывающая подсказка -->
                    <div class="absolute bottom-2 opacity-0 group-hover:opacity-100 text-xs text-gray-400 transition duration-300">
                        {{ $client->name }}
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Блок призыва к действию (CTA) -->
        <div class="mt-20 bg-slate-900 rounded-2xl overflow-hidden shadow-2xl relative">
            <div class="px-6 py-12 md:p-12 text-center relative z-10">
                <h2 class="text-2xl font-bold text-white mb-4">Хотите видеть свой логотип здесь?</h2>
                <p class="text-blue-200 mb-8 max-w-xl mx-auto">
                    Присоединяйтесь к успешным компаниям, которые уже используют эффективные рассылки для роста бизнеса.
                </p>
                <a href="#" class="inline-block bg-white text-slate-900 hover:bg-blue-50 font-bold py-3 px-8 rounded-full transition transform hover:scale-105">
                    Стать клиентом
                </a>
            </div>

            <!-- Декоративные круги на фоне -->
            <div class="absolute top-0 left-0 -mt-10 -ml-10 w-40 h-40 bg-blue-600 rounded-full blur-3xl opacity-20"></div>
            <div class="absolute bottom-0 right-0 -mb-10 -mr-10 w-40 h-40 bg-purple-600 rounded-full blur-3xl opacity-20"></div>
        </div>

    </div>

@endsection

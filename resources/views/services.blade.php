@extends('layouts.main')

@section('title', 'Наши Услуги')

@section('content')

    <!-- Заголовок -->
    <div class="bg-slate-900 py-16 text-center text-white relative overflow-hidden">
        <!-- Фоновый эффект -->
        <div class="absolute top-0 left-0 w-full h-full bg-blue-600/10 blur-3xl"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4">
            <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl">
                Комплексный маркетинг
            </h1>
            <p class="mt-4 text-xl text-blue-200 max-w-2xl mx-auto">
                Мы не просто шлем сообщения. Мы создаем каналы коммуникации, которые приносят деньги.
            </p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

        <!-- Сетка услуг -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

            <!-- Услуга 1: Мессенджеры -->
            <div class="bg-white rounded-2xl border border-gray-100 shadow-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300 flex flex-col">
                <div class="p-8 flex-grow">
                    <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center mb-6 text-blue-600">
                        <!-- Иконка Телеграма/Сообщений -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Рассылки в Telegram и Viber</h3>
                    <p class="text-gray-600 mb-6">
                        Мгновенная доставка вашего предложения на смартфоны клиентов. Идеально для акций, новостей и быстрых продаж.
                    </p>
                    <ul class="space-y-2 text-gray-500 mb-6">
                        <li class="flex items-center gap-2">✔ Открываемость до 90%</li>
                        <li class="flex items-center gap-2">✔ Возможность прикрепить картинку и кнопку</li>
                        <li class="flex items-center gap-2">✔ Оплата только за доставленные</li>
                    </ul>
                </div>
                <div class="bg-gray-50 px-8 py-4 border-t border-gray-100">
                    <a href="{{ route('contact.form') }}" class="text-blue-600 font-bold hover:text-blue-800 flex items-center gap-2">
                        Заказать рассылку <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </div>

            <!-- Услуга 2: Парсинг и Базы -->
            <div class="bg-white rounded-2xl border border-gray-100 shadow-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300 flex flex-col">
                <div class="p-8 flex-grow">
                    <div class="w-14 h-14 bg-purple-100 rounded-xl flex items-center justify-center mb-6 text-purple-600">
                        <!-- Иконка Базы данных -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Парсинг аудитории (Сбор баз)</h3>
                    <p class="text-gray-600 mb-6">
                        Мы не ждем, пока клиент найдет вас. Мы находим его сами. Сбор целевой аудитории из открытых источников и чатов конкурентов.
                    </p>
                    <ul class="space-y-2 text-gray-500 mb-6">
                        <li class="flex items-center gap-2">✔ Сбор активных участников чатов</li>
                        <li class="flex items-center gap-2">✔ Фильтрация по гео и интересам</li>
                        <li class="flex items-center gap-2">✔ Формирование "живой" базы</li>
                    </ul>
                </div>
                <div class="bg-gray-50 px-8 py-4 border-t border-gray-100">
                    <a href="{{ route('contact.form') }}" class="text-purple-600 font-bold hover:text-purple-800 flex items-center gap-2">
                        Обсудить задачу <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </div>

            <!-- Услуга 3: Чат-боты -->
            <div class="bg-white rounded-2xl border border-gray-100 shadow-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300 flex flex-col">
                <div class="p-8 flex-grow">
                    <div class="w-14 h-14 bg-emerald-100 rounded-xl flex items-center justify-center mb-6 text-emerald-600">
                        <!-- Иконка Робота -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12h1.5m1.5 0h9m1.5 0h1.5m-3 3.75h.75m-6 0h.75m-6 0h.75M6 18c0 .414.336.75.75.75h10.5a.75.75 0 00.75-.75v-10.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v10.5z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Разработка Чат-ботов</h3>
                    <p class="text-gray-600 mb-6">
                        Замените менеджеров по продажам умным ботом. Он отвечает на вопросы 24/7, принимает заявки и прогревает клиентов.
                    </p>
                    <ul class="space-y-2 text-gray-500 mb-6">
                        <li class="flex items-center gap-2">✔ Автоматические воронки продаж</li>
                        <li class="flex items-center gap-2">✔ Меню услуг внутри мессенджера</li>
                        <li class="flex items-center gap-2">✔ Интеграция с CRM</li>
                    </ul>
                </div>
                <div class="bg-gray-50 px-8 py-4 border-t border-gray-100">
                    <a href="{{ route('contact.form') }}" class="text-emerald-600 font-bold hover:text-emerald-800 flex items-center gap-2">
                        Заказать бота <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </div>

            <!-- Услуга 4: Email -->
            <div class="bg-white rounded-2xl border border-gray-100 shadow-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300 flex flex-col">
                <div class="p-8 flex-grow">
                    <div class="w-14 h-14 bg-sky-100 rounded-xl flex items-center justify-center mb-6 text-sky-600">
                        <!-- Иконка Письма -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Email Маркетинг</h3>
                    <p class="text-gray-600 mb-6">
                        Классический инструмент для B2B сегмента. Работаем по огромным базам юрлиц и физлиц Украины.
                    </p>
                    <ul class="space-y-2 text-gray-500 mb-6">
                        <li class="flex items-center gap-2">✔ Базы на 700 000+ компаний</li>
                        <li class="flex items-center gap-2">✔ Верстка красивых HTML писем</li>
                        <li class="flex items-center gap-2">✔ Подробный отчет о кликах</li>
                    </ul>
                </div>
                <div class="bg-gray-50 px-8 py-4 border-t border-gray-100">
                    <a href="{{ route('contact.form') }}" class="text-sky-600 font-bold hover:text-sky-800 flex items-center gap-2">
                        Узнать тарифы <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </div>

        </div>
    </div>

@endsection

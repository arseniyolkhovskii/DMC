@extends('layouts.main')

@section('title', 'Стоимость услуг')

@section('content')
    <!-- Заголовок страницы -->
    <div class="bg-slate-50 py-12 border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-3xl font-extrabold text-slate-900 sm:text-4xl">
                Стоимость услуг
            </h1>
            <p class="mt-4 text-xl text-gray-500">
                Прозрачное ценообразование. Работаем по всей Украине.
            </p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-20">

        <!-- СЕКЦИЯ 1: E-MAIL РАССЫЛКИ (Таблица) -->
        <section>
            <div class="md:flex md:items-center md:justify-between mb-8">
                <h2 class="text-2xl font-bold text-slate-900 flex items-center gap-2">
                    <span class="bg-blue-100 text-blue-600 p-2 rounded-lg">📧</span>
                    E-mail Рассылки
                </h2>
                <span class="text-sm text-gray-500 bg-gray-100 px-3 py-1 rounded-full">Классика маркетинга</span>
            </div>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg border border-gray-100">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-slate-50">
                    <tr>
                        <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">База адресов</th>
                        <th scope="col" class="px-6 py-4 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Количество (шт.)</th>
                        <th scope="col" class="px-6 py-4 text-right text-xs font-bold text-gray-500 uppercase tracking-wider">Стоимость</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Строка 1 -->
                    <tr class="hover:bg-blue-50/50 transition">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Юридические лица (Киев)</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">455 000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-right font-bold text-blue-600">900 грн.</td>
                    </tr>
                    <!-- Строка 2 -->
                    <tr class="hover:bg-blue-50/50 transition">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Юридические лица (Украина)</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">705 000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-right font-bold text-blue-600">1 000 грн.</td>
                    </tr>
                    <!-- Строка 3 -->
                    <tr class="hover:bg-blue-50/50 transition">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Физические лица (Киев)</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">503 000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-right font-bold text-blue-600">900 грн.</td>
                    </tr>
                    <!-- Строка 4 -->
                    <tr class="hover:bg-blue-50/50 transition">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Физические лица (Украина)</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">910 000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-right font-bold text-blue-600">1 000 грн.</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <p class="mt-4 text-sm text-gray-400 text-center">* Цены указаны за одну полную рассылку по выбранной базе.</p>
        </section>

        <!-- СЕКЦИЯ 2: МЕССЕНДЖЕРЫ (Карточки) -->
        <section>
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-slate-900">Рассылки в мессенджерах</h2>
                <p class="mt-2 text-gray-500">Telegram & Viber. Открываемость до 90%.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Карточка: Viber -->
                <div class="relative bg-white rounded-2xl border border-purple-100 shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
                    <div class="absolute top-0 right-0 -mt-4 -mr-4 bg-purple-600 text-white text-xs font-bold px-3 py-1 rounded-full uppercase">Популярно</div>
                    <div class="flex items-center gap-3 mb-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/4/45/Viber-logo.png" class="w-10 h-10" alt="Viber">
                        <h3 class="text-xl font-bold text-slate-900">Viber Рассылка</h3>
                    </div>
                    <p class="text-gray-500 text-sm mb-6">Официальная рассылка с вашим именем отправителя и кнопкой действия.</p>
                    <div class="mb-6">
                        <span class="text-4xl font-extrabold text-slate-900">0.85</span>
                        <span class="text-gray-500">грн / смс</span>
                    </div>
                    <ul class="space-y-3 mb-8 text-sm text-gray-600">
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Текст + Картинка + Кнопка
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Оплата только за доставленные
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Отчетность в реальном времени
                        </li>
                    </ul>
                    <button class="w-full bg-purple-50 text-purple-700 hover:bg-purple-100 font-bold py-3 px-4 rounded-xl transition">Заказать Viber</button>
                </div>

                <!-- Карточка: Telegram (Базовый) -->
                <div class="bg-white rounded-2xl border border-sky-100 shadow-lg p-8 hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center gap-3 mb-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/8/82/Telegram_logo.svg" class="w-10 h-10" alt="Telegram">
                        <h3 class="text-xl font-bold text-slate-900">Telegram LITE</h3>
                    </div>
                    <p class="text-gray-500 text-sm mb-6">Рассылка по вашей базе номеров. Быстрый старт.</p>
                    <div class="mb-6">
                        <span class="text-4xl font-extrabold text-slate-900">0.60</span>
                        <span class="text-gray-500">грн / смс</span>
                    </div>
                    <ul class="space-y-3 mb-8 text-sm text-gray-600">
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Личные сообщения
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Минимальный заказ: 1000 шт.
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                            <span class="text-gray-400 decoration-slice">Без парсинга аудитории</span>
                        </li>
                    </ul>
                    <button class="w-full bg-sky-50 text-sky-600 hover:bg-sky-100 font-bold py-3 px-4 rounded-xl transition">Выбрать LITE</button>
                </div>

                <!-- Карточка: Telegram (PRO) -->
                <div class="bg-slate-900 rounded-2xl shadow-xl p-8 hover:scale-105 transition-transform duration-300 text-white ring-4 ring-blue-500/20">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="bg-blue-500 p-2 rounded-lg">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold">Telegram PRO</h3>
                    </div>
                    <p class="text-blue-200 text-sm mb-6">Комплексное продвижение с подбором аудитории (Парсинг).</p>
                    <div class="mb-6">
                        <span class="text-4xl font-extrabold">1.20</span>
                        <span class="text-blue-300">грн / смс</span>
                    </div>
                    <ul class="space-y-3 mb-8 text-sm text-gray-300">
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Парсинг чатов конкурентов
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Инвайтинг в группы
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Полная аналитика
                        </li>
                    </ul>
                    <button class="w-full bg-blue-600 hover:bg-blue-500 text-white font-bold py-3 px-4 rounded-xl transition shadow-lg shadow-blue-900/50">Заказать PRO</button>
                </div>

            </div>
        </section>

    </div>

@endsection

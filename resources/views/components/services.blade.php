{{-- ===== СЕКЦИЯ УСЛУГ ===== --}}
<section id="services" class="py-24 bg-mesh relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Заголовок секции --}}
        <div class="text-center max-w-3xl mx-auto mb-20">
            <span class="inline-block px-4 py-1.5 rounded-full bg-blue-100 text-blue-700 text-sm font-semibold mb-6">
                Наши услуги
            </span>
            <h2 class="text-4xl sm:text-5xl font-black text-slate-900 tracking-tight mb-6">
                Полный спектр <span class="text-gradient">digital-услуг</span>
            </h2>
            <p class="text-lg text-slate-500 leading-relaxed">
                Мы предлагаем комплексные решения для продвижения вашего бизнеса в интернете.
                От стратегии до реализации — всё под ключ.
            </p>
        </div>
        {{-- Сетка услуг --}}
        @php
            $services = [
                [
                    'icon'     => '<svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>',
                    'title'    => 'Google Ads',
                    'desc'     => 'Контекстная реклама с максимальной отдачей. Настройка, оптимизация и масштабирование рекламных кампаний.',
                    'features' => ['Поисковые кампании', 'КМС / Баннерная реклама', 'Ремаркетинг', 'Google Shopping'],
                    'gradient' => 'from-blue-500 to-blue-700',
                    'bgGrad'   => 'from-blue-50 to-blue-100/50',
                    'iconBg'   => 'bg-blue-100 text-blue-600',
                ],
                [
                    'icon'     => '<svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>',
                    'title'    => 'SEO продвижение',
                    'desc'     => 'Выводим сайты в ТОП-10 Google. Комплексная оптимизация и наращивание органического трафика.',
                    'features' => ['Аудит сайта', 'Оптимизация контента', 'Линкбилдинг', 'Техническое SEO'],
                    'gradient' => 'from-green-500 to-emerald-700',
                    'bgGrad'   => 'from-green-50 to-emerald-100/50',
                    'iconBg'   => 'bg-green-100 text-green-600',
                ],
                [
                    'icon'     => '<svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 11 18-5v12L3 13v-2z"/><path d="M11.6 16.8a3 3 0 1 1-5.8-1.6"/></svg>',
                    'title'    => 'Таргетированная реклама',
                    'desc'     => 'Реклама в Facebook, Instagram и TikTok. Точное попадание в вашу целевую аудиторию.',
                    'features' => ['Facebook & Instagram', 'TikTok Ads', 'Лидогенерация', 'Видео-реклама'],
                    'gradient' => 'from-violet-500 to-purple-700',
                    'bgGrad'   => 'from-violet-50 to-purple-100/50',
                    'iconBg'   => 'bg-violet-100 text-violet-600',
                ],
                [
                    'icon'     => '<svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="M18 17V9"/><path d="M13 17V5"/><path d="M8 17v-3"/></svg>',
                    'title'    => 'Веб-аналитика',
                    'desc'     => 'Google Analytics, тепловые карты, A/B тесты. Принимайте решения на основе данных.',
                    'features' => ['Google Analytics 4', 'Настройка целей', 'Дашборды', 'A/B тестирование'],
                    'gradient' => 'from-amber-500 to-orange-700',
                    'bgGrad'   => 'from-amber-50 to-orange-100/50',
                    'iconBg'   => 'bg-amber-100 text-amber-600',
                ],
                [
                    'icon'     => '<svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>',
                    'title'    => 'Создание сайтов',
                    'desc'     => 'Современные, быстрые и конверсионные сайты. Лендинги, корпоративные сайты, интернет-магазины.',
                    'features' => ['Landing pages', 'Корпоративные сайты', 'Интернет-магазины', 'Адаптивный дизайн'],
                    'gradient' => 'from-cyan-500 to-teal-700',
                    'bgGrad'   => 'from-cyan-50 to-teal-100/50',
                    'iconBg'   => 'bg-cyan-100 text-cyan-600',
                ],
                [
                    'icon'     => '<svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m2 12 5.1 5.1c.3.3.7.3 1 0L12 13"/><path d="m7 7 5.1 5.1c.3.3.7.3 1 0L22 3"/><path d="M22 12a10 10 0 1 1-20 0 10 10 0 0 1 20 0Z"/></svg>',
                    'title'    => 'Брендинг и дизайн',
                    'desc'     => 'Создание уникального визуального образа бренда. Логотипы, фирменный стиль, UI/UX дизайн.',
                    'features' => ['Логотипы', 'Фирменный стиль', 'UI/UX дизайн', 'Брендбуки'],
                    'gradient' => 'from-rose-500 to-pink-700',
                    'bgGrad'   => 'from-rose-50 to-pink-100/50',
                    'iconBg'   => 'bg-rose-100 text-rose-600',
                ],
            ];
        @endphp
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($services as $index => $service)
                <div class="group relative bg-white rounded-3xl p-8 border border-gray-100 card-hover overflow-hidden"
                     style="animation-delay: {{ $index * 0.1 }}s;">
                    {{-- Градиент на ховер --}}
                    <div class="absolute inset-0 bg-gradient-to-br {{ $service['bgGrad'] }} opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl"></div>
                    <div class="relative z-10">
                        {{-- Иконка --}}
                        <div class="w-14 h-14 rounded-2xl {{ $service['iconBg'] }} flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            {!! $service['icon'] !!}
                        </div>
                        {{-- Название --}}
                        <h3 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2">
                            {{ $service['title'] }}
                            {{-- Стрелка --}}
                            <svg class="w-5 h-5 text-gray-300 group-hover:text-blue-500 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M7 7h10v10"/><path d="M7 17 17 7"/>
                            </svg>
                        </h3>
                        {{-- Описание --}}
                        <p class="text-slate-500 mb-6 leading-relaxed">{{ $service['desc'] }}</p>
                        {{-- Пункты --}}
                        <ul class="space-y-2">
                            @foreach ($service['features'] as $feature)
                                <li class="flex items-center gap-2 text-sm text-slate-600">
                                    <span class="w-1.5 h-1.5 rounded-full bg-gradient-to-r {{ $service['gradient'] }}"></span>
                                    {{ $feature }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

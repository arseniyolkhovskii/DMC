{{-- ===== СЕКЦИЯ КЛИЕНТОВ И ОТЗЫВОВ ===== --}}
<section id="clients" class="py-24 bg-mesh relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Заголовок --}}
        <div class="text-center max-w-3xl mx-auto mb-20">
            <span class="inline-block px-4 py-1.5 rounded-full bg-green-100 text-green-700 text-sm font-semibold mb-6">
                Наши клиенты
            </span>
            <h2 class="text-4xl sm:text-5xl font-black text-slate-900 tracking-tight mb-6">
                Нам доверяют <span class="text-gradient">лидеры рынка</span>
            </h2>
            <p class="text-lg text-slate-500 leading-relaxed">
                Более 150 компаний уже увеличили свои продажи с помощью нашего агентства
            </p>
        </div>
        {{-- Статистика --}}
        @php
            $stats = [
                ['value' => '₴50M+', 'label' => 'Бюджета под управлением'],
                ['value' => '150+',  'label' => 'Успешных проектов'],
                ['value' => '340%',  'label' => 'Средний ROI'],
                ['value' => '98%',   'label' => 'Клиентов продлевают'],
            ];
        @endphp
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-20">
            @foreach ($stats as $i => $stat)
                <div class="bg-white rounded-2xl p-6 text-center border border-gray-100 shadow-sm card-hover"
                     style="animation-delay: {{ $i * 0.1 }}s;">
                    <div class="text-3xl sm:text-4xl font-black text-gradient mb-2">{{ $stat['value'] }}</div>
                    <div class="text-sm text-slate-500">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
        {{-- Отзывы --}}
        @php
            $testimonials = [
                [
                    'name'   => 'Олександр Петренко',
                    'role'   => 'CEO, TechStore',
                    'text'   => 'За 3 месяца работы с DMC наши продажи выросли на 240%. Команда профессионалов, которые действительно разбираются в интернет-рекламе.',
                    'avatar' => 'ОП',
                    'rating' => 5,
                    'color'  => 'from-blue-500 to-cyan-500',
                ],
                [
                    'name'   => 'Марина Ковальчук',
                    'role'   => 'Маркетинг-директор, FoodMarket',
                    'text'   => 'Лучшее агентство, с которым мы работали. Прозрачная отчётность, быстрая реакция и главное — результат. ROI наших кампаний вырос в 4 раза.',
                    'avatar' => 'МК',
                    'rating' => 5,
                    'color'  => 'from-violet-500 to-purple-500',
                ],
                [
                    'name'   => 'Дмитрий Савченко',
                    'role'   => 'Основатель, AutoParts24',
                    'text'   => 'DMC помогли нам выйти на новый уровень. SEO продвижение + контекстная реклама дали стабильный поток клиентов. Рекомендую!',
                    'avatar' => 'ДС',
                    'rating' => 5,
                    'color'  => 'from-amber-500 to-orange-500',
                ],
            ];
        @endphp
        <div class="grid md:grid-cols-3 gap-8 mb-20">
            @foreach ($testimonials as $i => $t)
                <div class="bg-white rounded-3xl p-8 border border-gray-100 shadow-sm card-hover relative"
                     style="animation-delay: {{ $i * 0.15 }}s;">
                    {{-- Иконка цитаты --}}
                    <svg class="w-10 h-10 text-blue-100 mb-4" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"/>
                        <path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/>
                    </svg>
                    {{-- Звёзды рейтинга --}}
                    <div class="flex gap-1 mb-4">
                        @for ($j = 0; $j < $t['rating']; $j++)
                            <svg class="w-4 h-4 text-amber-400 fill-amber-400" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                            </svg>
                        @endfor
                    </div>
                    {{-- Текст отзыва --}}
                    <p class="text-slate-600 leading-relaxed mb-6 text-[15px]">
                        &ldquo;{{ $t['text'] }}&rdquo;
                    </p>
                    {{-- Автор --}}
                    <div class="flex items-center gap-3 pt-4 border-t border-gray-100">
                        <div class="w-11 h-11 rounded-full bg-gradient-to-br {{ $t['color'] }} flex items-center justify-center text-white font-bold text-sm shadow-sm">
                            {{ $t['avatar'] }}
                        </div>
                        <div>
                            <div class="font-semibold text-slate-900 text-sm">{{ $t['name'] }}</div>
                            <div class="text-xs text-slate-500">{{ $t['role'] }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- Логотипы клиентов --}}
        @php
            $clientLogos = ['TechStore', 'FoodMarket', 'AutoParts24', 'MedPlus', 'EduPro', 'BuilderCo', 'FashionUA', 'TravelKit', 'SportZone', 'HomeStyle'];
        @endphp
        <div>
            <p class="text-center text-sm text-slate-400 font-medium mb-8 uppercase tracking-widest">
                Наши клиенты
            </p>
            <div class="flex flex-wrap justify-center gap-6">
                @foreach ($clientLogos as $logo)
                    <div class="px-8 py-4 bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-md hover:border-blue-200 transition-all duration-300 cursor-default">
                        <span class="text-slate-400 font-bold text-lg tracking-tight hover:text-slate-600 transition-colors">
                            {{ $logo }}
                        </span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

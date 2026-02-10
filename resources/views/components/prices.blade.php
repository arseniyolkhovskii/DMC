{{-- ===== СЕКЦИЯ ТАРИФОВ ===== --}}
<section id="prices" class="py-24 bg-white relative overflow-hidden">
    {{-- Фоновое украшение --}}
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[800px] bg-gradient-to-br from-blue-50 to-violet-50 rounded-full blur-3xl opacity-50 -translate-y-1/2"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        {{-- Заголовок --}}
        <div class="text-center max-w-3xl mx-auto mb-20">
            <span class="inline-block px-4 py-1.5 rounded-full bg-violet-100 text-violet-700 text-sm font-semibold mb-6">
                Тарифы
            </span>
            <h2 class="text-4xl sm:text-5xl font-black text-slate-900 tracking-tight mb-6">
                Прозрачная <span class="text-gradient">стоимость</span>
            </h2>
            <p class="text-lg text-slate-500 leading-relaxed">
                Выберите тариф, который подходит для вашего бизнеса.
                Все цены включают настройку, ведение и оптимизацию.
            </p>
        </div>
        {{-- Тарифные карточки --}}
        @php
            $plans = [
                [
                    'name'     => 'Старт',
                    'icon'     => '<svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>',
                    'price'    => '8 000',
                    'period'   => 'грн/мес',
                    'desc'     => 'Идеально для малого бизнеса и стартапов',
                    'features' => ['Google Ads — 1 кампания', 'До 50 ключевых слов', 'Базовая аналитика', 'Ежемесячный отчёт', 'Консультация 1 раз в мес'],
                    'excluded' => ['SEO продвижение', 'Таргетированная реклама', 'Персональный менеджер'],
                    'popular'  => false,
                    'border'   => 'border-gray-200',
                ],
                [
                    'name'     => 'Бизнес',
                    'icon'     => '<svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>',
                    'price'    => '18 000',
                    'period'   => 'грн/мес',
                    'desc'     => 'Для среднего бизнеса с амбициями роста',
                    'features' => ['Google Ads — до 5 кампаний', 'До 200 ключевых слов', 'SEO продвижение — базовое', 'Facebook & Instagram Ads', 'Расширенная аналитика', 'Еженедельные отчёты', 'Персональный менеджер'],
                    'excluded' => ['A/B тестирование'],
                    'popular'  => true,
                    'border'   => 'border-blue-200',
                ],
                [
                    'name'     => 'Премиум',
                    'icon'     => '<svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m2 4 3 12h14l3-12-6 7-4-7-4 7-6-7zm3 16h14"/></svg>',
                    'price'    => '35 000',
                    'period'   => 'грн/мес',
                    'desc'     => 'Максимальные результаты для лидеров рынка',
                    'features' => ['Все каналы рекламы', 'Неограниченные кампании', 'Полное SEO продвижение', 'Все соцсети + TikTok', 'Продвинутая аналитика + BI', 'A/B тестирование', 'Ежедневная оптимизация', 'Приоритетная поддержка 24/7'],
                    'excluded' => [],
                    'popular'  => false,
                    'border'   => 'border-amber-200',
                ],
            ];
        @endphp
        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            @foreach ($plans as $plan)
                <div class="relative rounded-3xl p-8 transition-all duration-300
                    {{ $plan['popular']
                        ? 'bg-gradient-to-br from-slate-900 to-slate-800 text-white shadow-2xl shadow-slate-900/20 scale-[1.02] lg:scale-105 border-0'
                        : 'bg-white border-2 ' . $plan['border'] . ' hover:border-blue-300 card-hover'
                    }}">
                    {{-- Лейбл «Популярный» --}}
                    @if ($plan['popular'])
                        <div class="absolute -top-4 left-1/2 -translate-x-1/2">
                            <span class="px-5 py-1.5 bg-gradient-to-r from-blue-500 to-violet-500 text-white text-sm font-bold rounded-full shadow-lg">
                                🔥 Популярный
                            </span>
                        </div>
                    @endif
                    {{-- Иконка и название --}}
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 rounded-2xl flex items-center justify-center
                            {{ $plan['popular'] ? 'bg-white/10' : 'bg-gradient-to-br from-gray-50 to-gray-100' }}">
                            <span class="{{ $plan['popular'] ? 'text-blue-400' : 'text-slate-600' }}">
                                {!! $plan['icon'] !!}
                            </span>
                        </div>
                        <h3 class="text-xl font-bold {{ $plan['popular'] ? 'text-white' : 'text-slate-900' }}">
                            {{ $plan['name'] }}
                        </h3>
                    </div>
                    {{-- Цена --}}
                    <div class="mb-2">
                        <span class="text-5xl font-black {{ $plan['popular'] ? 'text-white' : 'text-slate-900' }}">
                            {{ $plan['price'] }}
                        </span>
                        <span class="text-lg ml-2 {{ $plan['popular'] ? 'text-slate-400' : 'text-slate-500' }}">
                            {{ $plan['period'] }}
                        </span>
                    </div>
                    <p class="text-sm mb-8 {{ $plan['popular'] ? 'text-slate-400' : 'text-slate-500' }}">
                        {{ $plan['desc'] }}
                    </p>
                    {{-- Включённые функции --}}
                    <ul class="space-y-3 mb-8">
                        @foreach ($plan['features'] as $f)
                            <li class="flex items-start gap-3">
                                {{-- Галочка --}}
                                <svg class="w-5 h-5 flex-shrink-0 mt-0.5 {{ $plan['popular'] ? 'text-blue-400' : 'text-green-500' }}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                <span class="text-sm {{ $plan['popular'] ? 'text-slate-300' : 'text-slate-600' }}">{{ $f }}</span>
                            </li>
                        @endforeach
                        {{-- Исключённые функции --}}
                        @foreach ($plan['excluded'] as $f)
                            <li class="flex items-start gap-3 opacity-40">
                                <span class="w-5 h-5 flex-shrink-0 mt-0.5 text-center">—</span>
                                <span class="text-sm line-through {{ $plan['popular'] ? 'text-slate-500' : 'text-slate-400' }}">{{ $f }}</span>
                            </li>
                        @endforeach
                    </ul>
                    {{-- Кнопка --}}
                    <a href="#contact"
                       class="block w-full py-4 rounded-2xl font-bold text-lg text-center transition-all duration-300
                        {{ $plan['popular']
                            ? 'bg-gradient-to-r from-blue-500 to-violet-500 text-white hover:from-blue-400 hover:to-violet-400 shadow-lg shadow-blue-500/25'
                            : 'bg-slate-900 text-white hover:bg-slate-800'
                        }}">
                        Выбрать тариф
                    </a>
                </div>
            @endforeach
        </div>
        {{-- Примечание --}}
        <p class="text-center text-sm text-slate-400 mt-12 max-w-xl mx-auto">
            * Все тарифы включают бесплатный аудит и стратегию на старте.
            Индивидуальные условия обсуждаются отдельно.
        </p>
    </div>
</section>

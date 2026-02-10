{{-- ===== СЕКЦИЯ «ПОЧЕМУ МЫ» ===== --}}
<section class="py-24 bg-gradient-to-br from-slate-900 via-slate-800 to-blue-950 relative overflow-hidden">
    {{-- Декоративные круги --}}
    <div class="absolute top-1/4 left-0 w-[400px] h-[400px] bg-blue-600/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-[300px] h-[300px] bg-violet-600/10 rounded-full blur-3xl"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        {{-- Заголовок --}}
        <div class="text-center max-w-3xl mx-auto mb-20">
            <span class="inline-block px-4 py-1.5 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-400 text-sm font-semibold mb-6">
                Почему мы
            </span>
            <h2 class="text-4xl sm:text-5xl font-black text-white tracking-tight mb-6">
                Почему выбирают
                <span class="bg-gradient-to-r from-blue-400 to-violet-400 bg-clip-text text-transparent">DMC</span>
            </h2>
            <p class="text-lg text-slate-400 leading-relaxed">
                Мы объединяем данные, технологии и креативность, чтобы ваш бизнес рос быстрее конкурентов
            </p>
        </div>
        {{-- Сетка причин --}}
        @php
            $reasons = [
                [
                    'icon'  => '<svg class="w-6 h-6 text-blue-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>',
                    'title' => 'Точная стратегия',
                    'desc'  => 'Разрабатываем индивидуальную стратегию продвижения для каждого клиента на основе глубокого анализа рынка.',
                ],
                [
                    'icon'  => '<svg class="w-6 h-6 text-blue-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="M18 17V9"/><path d="M13 17V5"/><path d="M8 17v-3"/></svg>',
                    'title' => 'Прозрачная аналитика',
                    'desc'  => 'Еженедельные отчёты с ключевыми метриками. Вы всегда знаете, куда идёт каждая гривна.',
                ],
                [
                    'icon'  => '<svg class="w-6 h-6 text-blue-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"/><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/></svg>',
                    'title' => 'Быстрый старт',
                    'desc'  => 'Запускаем рекламные кампании за 3-5 дней. Первые результаты — уже через неделю.',
                ],
                [
                    'icon'  => '<svg class="w-6 h-6 text-blue-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
                    'title' => 'Гарантия результата',
                    'desc'  => 'Работаем на результат, а не на процесс. Если KPI не достигнуты — возвращаем деньги.',
                ],
                [
                    'icon'  => '<svg class="w-6 h-6 text-blue-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-5Zm0 0a9 9 0 1 1 18 0m0 0v5a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3Z"/></svg>',
                    'title' => 'Персональный менеджер',
                    'desc'  => 'Выделенный специалист, который всегда на связи и готов ответить на ваши вопросы.',
                ],
                [
                    'icon'  => '<svg class="w-6 h-6 text-blue-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/></svg>',
                    'title' => 'Сертифицированные специалисты',
                    'desc'  => 'Команда сертифицированных экспертов Google Ads, Facebook и Analytics.',
                ],
            ];
        @endphp
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($reasons as $i => $r)
                <div class="group bg-white/5 backdrop-blur-sm border border-white/5 hover:border-blue-500/20 rounded-2xl p-7 transition-all duration-500 hover:bg-white/10"
                     style="animation-delay: {{ $i * 0.1 }}s;">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-600/20 to-violet-600/20 border border-blue-500/10 flex items-center justify-center mb-5 group-hover:scale-110 transition-transform duration-300">
                        {!! $r['icon'] !!}
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2">{{ $r['title'] }}</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">{{ $r['desc'] }}</p>
                </div>
            @endforeach
        </div>
        {{-- CTA-баннер --}}
        <div class="mt-20 bg-gradient-to-r from-blue-600 to-violet-600 rounded-3xl p-10 sm:p-14 text-center relative overflow-hidden">
            {{-- Паттерн --}}
            <div class="absolute inset-0 opacity-[0.05]"
                 style="background-image: url('data:image/svg+xml;charset=utf-8,%3Csvg%20width%3D%2240%22%20height%3D%2240%22%20viewBox%3D%220%200%2040%2040%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20fill%3D%22%23ffffff%22%20fill-opacity%3D%221%22%3E%3Cpath%20d%3D%22M20%2018.6l2.83-2.83%201.41%201.41L21.41%2020l2.83%202.83-1.41%201.41L20%2021.41l-2.83%202.83-1.41-1.41L18.59%2020l-2.83-2.83%201.41-1.41L20%2018.59z%22%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E');">
            </div>
            <div class="relative z-10">
                <h3 class="text-3xl sm:text-4xl font-black text-white mb-4">
                    Готовы увеличить продажи?
                </h3>
                <p class="text-lg text-blue-100 mb-8 max-w-2xl mx-auto">
                    Получите бесплатный аудит вашего сайта и стратегию продвижения за 24 часа
                </p>
                <a href="#contact"
                   class="inline-block px-10 py-4 bg-white text-blue-600 rounded-2xl font-bold text-lg hover:bg-blue-50 transition-all duration-300 shadow-xl shadow-blue-900/20 hover:-translate-y-1">
                    Получить бесплатный аудит
                </a>
            </div>
        </div>
    </div>
</section>

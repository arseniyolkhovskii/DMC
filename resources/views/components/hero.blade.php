{{-- ===== HERO-СЕКЦИЯ ===== --}}
<section id="hero" class="relative min-h-[90vh] flex items-center overflow-hidden">
    {{-- Фон --}}
    <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-blue-950"></div>
    {{-- Mesh-градиенты --}}
    <div class="absolute top-0 left-0 w-full h-full">
        <div class="absolute -top-[20%] -right-[10%] w-[600px] h-[600px] bg-blue-600/20 rounded-full blur-3xl animate-pulse-glow"></div>
        <div class="absolute -bottom-[20%] -left-[10%] w-[500px] h-[500px] bg-violet-600/15 rounded-full blur-3xl animate-pulse-glow" style="animation-delay: 1.5s;"></div>
        <div class="absolute top-[20%] left-[30%] w-[300px] h-[300px] bg-blue-400/10 rounded-full blur-3xl animate-float"></div>
    </div>
    {{-- Сетка --}}
    <div class="absolute inset-0 opacity-[0.03]"
         style="background-image: linear-gradient(rgba(255,255,255,0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 60px 60px;">
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative z-10 w-full">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            {{-- ЛЕВАЯ ЧАСТЬ — Текстовый контент --}}
            <div class="space-y-8">
                {{-- Бейдж --}}
                <div class="animate-slide-up">
                    <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-300 text-sm font-medium">
                        <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
                        Принимаем новых клиентов
                    </span>
                </div>
                {{-- Заголовок --}}
                <h1 class="animate-slide-up delay-100">
                    <span class="block text-4xl sm:text-5xl lg:text-6xl font-black text-white leading-tight tracking-tight">
                        Увеличим ваши
                    </span>
                    <span class="block text-4xl sm:text-5xl lg:text-6xl font-black leading-tight tracking-tight mt-2">
                        <span class="bg-gradient-to-r from-blue-400 via-violet-400 to-blue-400 bg-clip-text text-transparent animate-gradient" style="background-size: 200% auto;">
                            продажи в 3 раза
                        </span>
                    </span>
                    <span class="block text-4xl sm:text-5xl lg:text-6xl font-black text-white leading-tight tracking-tight mt-2">
                        через интернет
                    </span>
                </h1>
                {{-- Подзаголовок --}}
                <p class="text-lg sm:text-xl text-slate-400 max-w-lg leading-relaxed animate-slide-up delay-200">
                    Комплексный интернет-маркетинг, который приносит реальные результаты.
                    Google Ads, SEO, таргетированная реклама и аналитика.
                </p>
                {{-- CTA кнопки --}}
                <div class="flex flex-col sm:flex-row gap-4 animate-slide-up delay-300">
                    <a href="#contact"
                       class="group inline-flex items-center justify-center gap-2 px-8 py-4 bg-gradient-to-r from-blue-600 to-violet-600 hover:from-blue-500 hover:to-violet-500 text-white rounded-2xl font-bold text-lg transition-all duration-300 shadow-xl shadow-blue-600/25 hover:shadow-2xl hover:shadow-blue-600/30 hover:-translate-y-1">
                        Получить предложение
                        {{-- Иконка ArrowRight --}}
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"/><path d="m12 5 7 7-7 7"/>
                        </svg>
                    </a>
                    <a href="#services"
                       class="group inline-flex items-center justify-center gap-2 px-8 py-4 bg-white/5 hover:bg-white/10 border border-white/10 hover:border-white/20 text-white rounded-2xl font-semibold text-lg transition-all duration-300 backdrop-blur-sm">
                        {{-- Иконка Play --}}
                        <svg class="w-5 h-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="6 3 20 12 6 21 6 3"/>
                        </svg>
                        Наши услуги
                    </a>
                </div>
                {{-- Мини-статистика --}}
                <div class="flex flex-wrap gap-8 pt-4 animate-slide-up delay-400">
                    {{-- Проекты --}}
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-blue-500/20 to-violet-500/20 border border-blue-500/10 flex items-center justify-center">
                            <svg class="w-5 h-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-xl font-bold text-white">150+</div>
                            <div class="text-sm text-slate-500">Проектов</div>
                        </div>
                    </div>
                    {{-- Довольных --}}
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-blue-500/20 to-violet-500/20 border border-blue-500/10 flex items-center justify-center">
                            <svg class="w-5 h-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-xl font-bold text-white">98%</div>
                            <div class="text-sm text-slate-500">Довольных</div>
                        </div>
                    </div>
                    {{-- Опыта --}}
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-blue-500/20 to-violet-500/20 border border-blue-500/10 flex items-center justify-center">
                            <svg class="w-5 h-5 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-xl font-bold text-white">5 лет</div>
                            <div class="text-sm text-slate-500">Опыта</div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- ПРАВАЯ ЧАСТЬ — Дашборд-визуализация --}}
            <div class="hidden lg:block relative">
                <div class="relative animate-fade-in delay-300">
                    {{-- Основная карточка дашборда --}}
                    <div class="relative bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl p-8 shadow-2xl">
                        <div class="space-y-6">
                            {{-- Заголовок графика --}}
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="text-sm text-slate-400">Конверсии</p>
                                    <p class="text-3xl font-bold text-white">2,847</p>
                                </div>
                                <span class="px-3 py-1 rounded-full bg-green-500/10 text-green-400 text-sm font-semibold border border-green-500/20">
                                    +127%
                                </span>
                            </div>
                            {{-- Столбцы графика --}}
                            <div class="flex items-end gap-2 h-40">
                                @foreach ([35, 45, 30, 55, 40, 65, 50, 75, 60, 85, 70, 95] as $i => $h)
                                    <div class="flex-1 rounded-t-lg bg-gradient-to-t from-blue-600/60 to-violet-500/60 transition-all duration-500 hover:from-blue-500 hover:to-violet-400"
                                         style="height: {{ $h }}%; animation-delay: {{ $i * 0.1 }}s;">
                                    </div>
                                @endforeach
                            </div>
                            {{-- Нижняя статистика --}}
                            <div class="grid grid-cols-3 gap-4 pt-4 border-t border-white/10">
                                <div class="text-center">
                                    <p class="text-lg font-bold text-blue-400">4.8%</p>
                                    <p class="text-xs text-slate-500">CTR</p>
                                </div>
                                <div class="text-center">
                                    <p class="text-lg font-bold text-green-400">340%</p>
                                    <p class="text-xs text-slate-500">ROI</p>
                                </div>
                                <div class="text-center">
                                    <p class="text-lg font-bold text-violet-400">₴120</p>
                                    <p class="text-xs text-slate-500">CPA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Плавающая карточка: Трафик --}}
                    <div class="absolute -top-6 -right-6 bg-white/10 backdrop-blur-xl border border-white/10 rounded-2xl px-5 py-3 shadow-xl animate-float">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-full bg-green-500/20 flex items-center justify-center">
                                <svg class="w-4 h-4 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-slate-400">Трафик</p>
                                <p class="text-sm font-bold text-white">+245%</p>
                            </div>
                        </div>
                    </div>
                    {{-- Плавающая карточка: Лиды --}}
                    <div class="absolute -bottom-4 -left-6 bg-white/10 backdrop-blur-xl border border-white/10 rounded-2xl px-5 py-3 shadow-xl animate-float-delayed">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-full bg-blue-500/20 flex items-center justify-center">
                                <svg class="w-4 h-4 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-slate-400">Лиды</p>
                                <p class="text-sm font-bold text-white">+89/мес</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Нижняя волна (переход к следующей секции) --}}
    <div class="absolute bottom-0 left-0 w-full">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
            <path d="M0 120L48 110C96 100 192 80 288 70C384 60 480 60 576 65C672 70 768 80 864 85C960 90 1056 90 1152 85C1248 80 1344 70 1392 65L1440 60V120H1392C1344 120 1248 120 1152 120C1056 120 960 120 864 120C768 120 672 120 576 120C480 120 384 120 288 120C192 120 96 120 48 120H0Z" fill="#f8fafc"/>
        </svg>
    </div>
</section>

{{-- ===== ПОДВАЛ САЙТА ===== --}}
<footer class="bg-gradient-to-b from-slate-900 to-slate-950 text-gray-400 relative overflow-hidden">
    {{-- Верхняя волна --}}
    <div class="absolute top-0 left-0 w-full">
        <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full -mt-1">
            <path d="M0 0L48 5C96 10 192 20 288 25C384 30 480 30 576 25C672 20 768 10 864 8C960 6 1056 12 1152 18C1248 24 1344 30 1392 33L1440 36V60H0V0Z" fill="#0f172a"/>
        </svg>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-8 relative z-10">
        <div class="grid md:grid-cols-4 gap-12 mb-12">
            {{-- О компании --}}
            <div class="md:col-span-1">
                {{-- Логотип --}}
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-8 h-8 relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-600 via-blue-500 to-violet-600 rounded-lg rotate-3 opacity-80"></div>
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-violet-600 rounded-lg flex items-center justify-center shadow-lg shadow-blue-500/30">
                            <svg viewBox="0 0 40 40" class="w-3/4 h-3/4" fill="none">
                                <path d="M8 8h8c8 0 16 5 16 12s-8 12-16 12H8V8z" stroke="white" stroke-width="2.5" fill="none" stroke-linecap="round"/>
                                <path d="M26 14c2 2 3 4 3 6s-1 4-3 6" stroke="white" stroke-width="2" stroke-linecap="round" fill="none" opacity="0.7"/>
                                <path d="M30 11c3 3 4.5 6 4.5 9s-1.5 6-4.5 9" stroke="white" stroke-width="1.5" stroke-linecap="round" fill="none" opacity="0.4"/>
                            </svg>
                        </div>
                    </div>
                    <span class="text-lg font-black text-white tracking-tight">DMC</span>
                </div>
                <p class="text-slate-500 text-sm leading-relaxed mb-6">
                    Центр интернет-рекламы. Помогаем бизнесу расти в digital-среде с 2019 года.
                </p>
                {{-- Соцсети --}}
                <div class="flex gap-3">
                    @foreach (['FB', 'IG', 'TG', 'YT'] as $s)
                        <a href="#"
                           class="w-9 h-9 rounded-lg bg-white/5 hover:bg-blue-600/20 border border-white/5 hover:border-blue-500/30 flex items-center justify-center text-xs font-bold text-slate-500 hover:text-blue-400 transition-all">
                            {{ $s }}
                        </a>
                    @endforeach
                </div>
            </div>
            {{-- Услуги --}}
            <div>
                <h4 class="text-white font-semibold mb-4 text-sm uppercase tracking-wider">Услуги</h4>
                <ul class="space-y-2.5">
                    @foreach (['Google Ads', 'SEO продвижение', 'Таргетированная реклама', 'Веб-аналитика', 'Создание сайтов'] as $item)
                        <li>
                            <a href="#services" class="text-sm text-slate-500 hover:text-blue-400 transition-colors">{{ $item }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            {{-- Компания --}}
            <div>
                <h4 class="text-white font-semibold mb-4 text-sm uppercase tracking-wider">Компания</h4>
                <ul class="space-y-2.5">
                    @php
                        $companyLinks = [
                            ['label' => 'О нас',     'href' => '#hero'],
                            ['label' => 'Услуги',    'href' => '#services'],
                            ['label' => 'Тарифы',    'href' => '#prices'],
                            ['label' => 'Клиенты',   'href' => '#clients'],
                            ['label' => 'Контакты',  'href' => '#contact'],
                        ];
                    @endphp
                    @foreach ($companyLinks as $link)
                        <li>
                            <a href="{{ $link['href'] }}" class="text-sm text-slate-500 hover:text-blue-400 transition-colors">{{ $link['label'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            {{-- Контакты --}}
            <div>
                <h4 class="text-white font-semibold mb-4 text-sm uppercase tracking-wider">Контакты</h4>
                <ul class="space-y-2.5">
                    <li class="text-sm text-slate-500">📍 Киев, Украина</li>
                    <li><a href="tel:0988877127" class="text-sm text-slate-500 hover:text-blue-400 transition-colors">📞 (098) 887-71-27</a></li>
                    <li><a href="tel:0994636628" class="text-sm text-slate-500 hover:text-blue-400 transition-colors">📞 (099) 463-66-28</a></li>
                    <li><a href="mailto:info@dmc.ua" class="text-sm text-slate-500 hover:text-blue-400 transition-colors">✉️ info@dmc.ua</a></li>
                    <li class="text-sm text-slate-500">🕐 Пн-Пт: 9:00 - 18:00</li>
                </ul>
            </div>
        </div>
        {{-- Нижняя полоса --}}
        <div class="border-t border-white/5 pt-8 flex flex-col sm:flex-row justify-between items-center gap-4">
            <p class="text-sm text-slate-600 flex items-center gap-1">
                &copy; {{ date('Y') }} DMC. Сделано с
                <svg class="w-3.5 h-3.5 text-red-500 fill-red-500" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
                </svg>
                в Киеве
            </p>
            {{-- Кнопка «Наверх» --}}
            <a href="#hero"
               class="group w-10 h-10 rounded-xl bg-white/5 hover:bg-blue-600/20 border border-white/5 hover:border-blue-500/30 flex items-center justify-center transition-all">
                <svg class="w-4 h-4 text-slate-500 group-hover:text-blue-400 transition-colors" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m18 15-6-6-6 6"/>
                </svg>
            </a>
        </div>
    </div>
</footer>

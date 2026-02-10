{{-- ===== НАВИГАЦИЯ / ХЕДЕР ===== --}}
<nav x-data="{ open: false }" id="main-nav" class="sticky top-0 z-50 transition-all duration-500 bg-white/95">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            {{-- Логотип DMC --}}
            <div class="flex items-center">
                <a href="#hero" class="flex items-center gap-3">
                    <div class="w-10 h-10 relative">
                        {{-- Тень-наклон --}}
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-600 via-blue-500 to-violet-600 rounded-xl rotate-3 opacity-80"></div>
                        {{-- Основной блок с SVG-логотипом --}}
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-violet-600 rounded-xl flex items-center justify-center shadow-lg shadow-blue-500/30">
                            <svg viewBox="0 0 40 40" class="w-3/4 h-3/4" fill="none">
                                {{-- Буква D стилизованная под сигнал --}}
                                <path d="M8 8h8c8 0 16 5 16 12s-8 12-16 12H8V8z" stroke="white" stroke-width="2.5" fill="none" stroke-linecap="round"/>
                                {{-- Волны сигнала --}}
                                <path d="M26 14c2 2 3 4 3 6s-1 4-3 6" stroke="white" stroke-width="2" stroke-linecap="round" fill="none" opacity="0.7"/>
                                <path d="M30 11c3 3 4.5 6 4.5 9s-1.5 6-4.5 9" stroke="white" stroke-width="1.5" stroke-linecap="round" fill="none" opacity="0.4"/>
                            </svg>
                        </div>
                    </div>
                    <span class="text-2xl font-black tracking-tight bg-gradient-to-r from-slate-900 to-slate-700 bg-clip-text text-transparent">
                        DMC
                    </span>
                </a>
            </div>
            {{-- ДЕСКТОП-МЕНЮ --}}
            <div class="hidden md:flex md:items-center md:space-x-1">
                @php
                    $navItems = [
                        ['label' => 'Главная',    'href' => '#hero'],
                        ['label' => 'Услуги',     'href' => '#services'],
                        ['label' => 'Стоимость',  'href' => '#prices'],
                        ['label' => 'Клиенты',    'href' => '#clients'],
                        ['label' => 'Контакты',   'href' => '#contact'],
                    ];
                @endphp
                @foreach ($navItems as $item)
                    <a href="{{ $item['href'] }}"
                       data-nav-link
                       data-section="{{ str_replace('#', '', $item['href']) }}"
                       class="relative px-4 py-2 rounded-full font-medium transition-all duration-300 text-gray-600 hover:text-blue-600">
                        {{ $item['label'] }}
                    </a>
                @endforeach
                <a href="#contact"
                   class="ml-4 bg-gradient-to-r from-blue-600 to-violet-600 hover:from-blue-700 hover:to-violet-700 text-white px-6 py-2.5 rounded-full font-semibold transition-all duration-300 shadow-md shadow-blue-500/25 hover:shadow-lg hover:shadow-blue-500/30 hover:-translate-y-0.5">
                    Оставить заявку
                </a>
            </div>
            {{-- МОБИЛЬНАЯ КНОПКА (ГАМБУРГЕР) --}}
            <div class="flex items-center md:hidden">
                <button @click="open = !open"
                        class="p-2.5 rounded-xl text-gray-500 hover:text-gray-700 hover:bg-gray-100 transition-all">
                    <span class="sr-only">Открыть меню</span>
                    {{-- Гамбургер / Крестик --}}
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': !open}" class="inline-flex"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                        <path :class="{'hidden': !open, 'inline-flex': open}" class="hidden"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    {{-- МОБИЛЬНОЕ МЕНЮ --}}
    <div x-show="open"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="md:hidden glass border-t border-gray-100 shadow-xl absolute w-full left-0"
         style="display: none;">
        <div class="pt-3 pb-4 space-y-1 px-4">
            @foreach ($navItems as $item)
                <a href="{{ $item['href'] }}"
                   @click="open = false"
                   class="block w-full text-left px-4 py-3 rounded-xl text-base font-medium text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition-all">
                    {{ $item['label'] }}
                </a>
            @endforeach
        </div>
        <div class="px-4 pb-5 border-t border-gray-100 pt-3">
            <a href="#contact"
               @click="open = false"
               class="flex items-center justify-center w-full px-5 py-3.5 rounded-xl font-bold text-white bg-gradient-to-r from-blue-600 to-violet-600 shadow-lg">
                Оставить заявку
            </a>
        </div>
    </div>
</nav>

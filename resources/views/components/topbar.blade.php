{{-- ===== ВЕРХНЯЯ ИНФОРМАЦИОННАЯ ПАНЕЛЬ ===== --}}
<div class="bg-gradient-to-r from-slate-900 via-slate-800 to-slate-900 text-gray-300 text-sm py-2.5 relative overflow-hidden">
    {{-- Полупрозрачный градиент поверх --}}
    <div class="absolute inset-0 bg-gradient-to-r from-blue-600/5 via-violet-600/5 to-blue-600/5"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center relative">
        {{-- Левая часть: Локация и время работы --}}
        <div class="flex items-center space-x-6">
            <span class="flex items-center gap-1.5 text-gray-400">
                {{-- Иконка MapPin --}}
                <svg class="w-3.5 h-3.5 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                    <circle cx="12" cy="10" r="3"/>
                </svg>
                <span>Киев, Украина</span>
            </span>
            <span class="hidden sm:flex items-center gap-1.5 text-gray-400">
                {{-- Иконка Clock --}}
                <svg class="w-3.5 h-3.5 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10"/>
                    <polyline points="12 6 12 12 16 14"/>
                </svg>
                <span>Пн-Пт: 9:00 - 18:00</span>
            </span>
        </div>
        {{-- Правая часть: Контакты --}}
        <div class="flex items-center space-x-5">
            <a href="mailto:info@dmc.ua" class="hidden sm:flex items-center gap-1.5 hover:text-white transition-colors">
                {{-- Иконка Mail --}}
                <svg class="w-3.5 h-3.5 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect width="20" height="16" x="2" y="4" rx="2"/>
                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                </svg>
                <span>info@dmc.ua</span>
            </a>
            <a href="tel:0988877127" class="flex items-center gap-1.5 hover:text-white transition-colors font-medium">
                {{-- Иконка Phone --}}
                <svg class="w-3.5 h-3.5 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                </svg>
                <span>(098) 887-71-27</span>
            </a>
            <a href="tel:0994636628" class="hidden md:flex items-center gap-1.5 hover:text-white transition-colors font-medium">
                <svg class="w-3.5 h-3.5 text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                </svg>
                <span>(099) 463-66-28</span>
            </a>
        </div>
    </div>
</div>

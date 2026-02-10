{{-- ===== СЕКЦИЯ КОНТАКТОВ И ФОРМЫ ЗАЯВКИ ===== --}}
<section id="contact" class="py-24 bg-white relative overflow-hidden">
    {{-- Фоновый декор --}}
    <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-gradient-to-tl from-blue-50 to-violet-50 rounded-full blur-3xl opacity-60 translate-x-1/4 translate-y-1/4"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        {{-- Заголовок --}}
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-block px-4 py-1.5 rounded-full bg-rose-100 text-rose-700 text-sm font-semibold mb-6">
                Связаться с нами
            </span>
            <h2 class="text-4xl sm:text-5xl font-black text-slate-900 tracking-tight mb-6">
                Готовы <span class="text-gradient">начать?</span>
            </h2>
            <p class="text-lg text-slate-500 leading-relaxed">
                Оставьте заявку и получите бесплатную консультацию и аудит вашего бизнеса
            </p>
        </div>
        <div class="grid lg:grid-cols-5 gap-12 max-w-6xl mx-auto">
            {{-- ЛЕВАЯ КОЛОНКА — Контактная информация --}}
            <div class="lg:col-span-2 space-y-8">
                {{-- Карточка контактов --}}
                <div class="bg-gradient-to-br from-slate-900 to-slate-800 rounded-3xl p-8 text-white">
                    <h3 class="text-xl font-bold mb-6">Контактная информация</h3>
                    <div class="space-y-6">
                        {{-- Телефон --}}
                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-blue-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm text-slate-400 mb-1">Телефон</div>
                                <div class="text-white font-medium">(098) 887-71-27</div>
                                <div class="text-white font-medium">(099) 463-66-28</div>
                            </div>
                        </div>
                        {{-- Email --}}
                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-blue-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect width="20" height="16" x="2" y="4" rx="2"/>
                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm text-slate-400 mb-1">Email</div>
                                <div class="text-white font-medium">info@dmc.ua</div>
                            </div>
                        </div>
                        {{-- Адрес --}}
                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-blue-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                                    <circle cx="12" cy="10" r="3"/>
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm text-slate-400 mb-1">Адрес</div>
                                <div class="text-white font-medium">Киев, Украина</div>
                            </div>
                        </div>
                        {{-- Часы работы --}}
                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-blue-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"/>
                                    <polyline points="12 6 12 12 16 14"/>
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm text-slate-400 mb-1">Часы работы</div>
                                <div class="text-white font-medium">Пн-Пт: 9:00 - 18:00</div>
                            </div>
                        </div>
                    </div>
                    {{-- Соцсети --}}
                    <div class="mt-8 pt-6 border-t border-white/10">
                        <p class="text-sm text-slate-400 mb-3">Мы в соцсетях</p>
                        <div class="flex gap-3">
                            @foreach (['FB', 'IG', 'TG', 'LI'] as $social)
                                <a href="#"
                                   class="w-10 h-10 rounded-xl bg-white/5 hover:bg-white/10 border border-white/10 flex items-center justify-center text-sm font-bold text-slate-400 hover:text-white transition-all">
                                    {{ $social }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                {{-- Быстрая консультация --}}
                <div class="bg-gradient-to-br from-blue-600 to-violet-600 rounded-3xl p-6 text-white">
                    <div class="flex items-center gap-3 mb-3">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/>
                        </svg>
                        <span class="font-bold">Быстрая консультация</span>
                    </div>
                    <p class="text-blue-100 text-sm mb-4">
                        Ответим на ваши вопросы в мессенджере за 5 минут
                    </p>
                    <div class="flex gap-3">
                        <a href="#" class="flex-1 py-2.5 rounded-xl bg-white/20 hover:bg-white/30 text-white font-semibold text-sm text-center transition-all backdrop-blur-sm">
                            Telegram
                        </a>
                        <a href="#" class="flex-1 py-2.5 rounded-xl bg-white/20 hover:bg-white/30 text-white font-semibold text-sm text-center transition-all backdrop-blur-sm">
                            Viber
                        </a>
                    </div>
                </div>
            </div>
            {{-- ПРАВАЯ КОЛОНКА — Форма заявки --}}
            <div class="lg:col-span-3">
                <div class="bg-white rounded-3xl p-8 border border-gray-100 shadow-xl shadow-gray-100/50">
                    {{-- Сообщение об успешной отправке (скрыто по умолчанию) --}}
                    @if (session('success'))
                        <div class="flex flex-col items-center justify-center py-16 text-center">
                            <div class="w-20 h-20 rounded-full bg-green-100 flex items-center justify-center mb-6 animate-count-up">
                                <svg class="w-10 h-10 text-green-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                                    <polyline points="22 4 12 14.01 9 11.01"/>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-2">Заявка отправлена!</h3>
                            <p class="text-slate-500">Мы свяжемся с вами в течение 30 минут</p>
                        </div>
                    @else
                        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-5">
                            @csrf
                            <h3 class="text-xl font-bold text-slate-900 mb-2">Оставить заявку</h3>
                            <p class="text-sm text-slate-500 mb-6">Заполните форму и мы свяжемся с вами в ближайшее время</p>
                            {{-- Имя и Телефон --}}
                            <div class="grid sm:grid-cols-2 gap-5">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-slate-700 mb-1.5">Ваше имя *</label>
                                    <input type="text" id="name" name="name" required
                                           value="{{ old('name') }}"
                                           placeholder="Введите имя"
                                           class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all text-slate-900 placeholder:text-slate-400">
                                    @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                                </div>
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-slate-700 mb-1.5">Телефон *</label>
                                    <input type="tel" id="phone" name="phone" required
                                           value="{{ old('phone') }}"
                                           placeholder="+380 (__) ___-__-__"
                                           class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all text-slate-900 placeholder:text-slate-400">
                                    @error('phone') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                                </div>
                            </div>
                            {{-- Email --}}
                            <div>
                                <label for="email" class="block text-sm font-medium text-slate-700 mb-1.5">Email</label>
                                <input type="email" id="email" name="email"
                                       value="{{ old('email') }}"
                                       placeholder="email@example.com"
                                       class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all text-slate-900 placeholder:text-slate-400">
                                @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                            {{-- Услуга --}}
                            <div>
                                <label for="service" class="block text-sm font-medium text-slate-700 mb-1.5">Интересующая услуга</label>
                                <select id="service" name="service"
                                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all text-slate-900 bg-white">
                                    <option value="">Выберите услугу</option>
                                    <option value="google-ads" {{ old('service') == 'google-ads' ? 'selected' : '' }}>Google Ads</option>
                                    <option value="seo" {{ old('service') == 'seo' ? 'selected' : '' }}>SEO продвижение</option>
                                    <option value="smm" {{ old('service') == 'smm' ? 'selected' : '' }}>Таргетированная реклама</option>
                                    <option value="analytics" {{ old('service') == 'analytics' ? 'selected' : '' }}>Веб-аналитика</option>
                                    <option value="website" {{ old('service') == 'website' ? 'selected' : '' }}>Создание сайта</option>
                                    <option value="branding" {{ old('service') == 'branding' ? 'selected' : '' }}>Брендинг</option>
                                    <option value="complex" {{ old('service') == 'complex' ? 'selected' : '' }}>Комплексное продвижение</option>
                                </select>
                            </div>
                            {{-- Сообщение --}}
                            <div>
                                <label for="message" class="block text-sm font-medium text-slate-700 mb-1.5">Сообщение</label>
                                <textarea id="message" name="message" rows="4"
                                          placeholder="Расскажите о вашем проекте..."
                                          class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition-all text-slate-900 placeholder:text-slate-400 resize-none">{{ old('message') }}</textarea>
                                @error('message') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                            {{-- Кнопка отправки --}}
                            <button type="submit"
                                    class="w-full py-4 bg-gradient-to-r from-blue-600 to-violet-600 hover:from-blue-500 hover:to-violet-500 text-white rounded-2xl font-bold text-lg transition-all duration-300 shadow-lg shadow-blue-500/25 hover:shadow-xl hover:shadow-blue-500/30 flex items-center justify-center gap-2">
                                {{-- Иконка Send --}}
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m22 2-7 20-4-9-9-4Z"/>
                                    <path d="M22 2 11 13"/>
                                </svg>
                                Отправить заявку
                            </button>
                            <p class="text-xs text-center text-slate-400">
                                Нажимая кнопку, вы соглашаетесь с политикой конфиденциальности
                            </p>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

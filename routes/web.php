<?php

use Illuminate\Support\Facades\Route;
use App\Models\Partner;

// 1. Главная (бывш. welcome)
Route::view('/', 'home')->name('home');

// 2. Стоимость
Route::view('/prices', 'prices')->name('prices');

// 3. Услуги
Route::view('/services', 'services')->name('services');

// 4. КОНТАКТЫ (Та самая строка, которая исправит вашу ошибку)
// Мы ссылаемся на файл contacts.blade.php, но имя маршрута даем 'contact.form',
// чтобы ваша ссылка в HTML {{ route('contact.form') }} заработала.
Route::view('/contacts', 'contacts')->name('contact.form');


Route::get('/clients', function () {
    // Получаем всех клиентов из базы, отсортированных, например, по новизне
    $clients = Partner::latest()->get();

    return view('clients', compact('clients'));
})->name('clients');

Route::post('/contact/submit', function (Request $request) {
    // 1. Проверяем данные (валидация)
    $validated = $request->validate([
        'name'   => 'required|min:2',
        'email'  => 'required|email',
    ]);

    return back()->with('success', 'Ваша заявка успешно отправлена! Мы свяжемся с вами.');

})->name('contact.submit');



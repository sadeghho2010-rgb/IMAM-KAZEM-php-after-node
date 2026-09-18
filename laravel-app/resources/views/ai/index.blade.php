@extends('layouts.app')

@section('content')
<div class="space-y-6">

    <!-- Page Header -->
    <div class="bg-white rounded-2xl border border-stone-200 p-6 shadow-sm">
        <h2 class="text-xl font-bold text-stone-800">مشاوره و تحلیل هوشمند پرونده با Gemini AI</h2>
        <p class="text-sm text-stone-500 mt-1">ارزیابی پیشرفت تحصیلی طلاب، اخطارهای غیبت و ارائه راهکارهای تربیتی مبتنی بر هوش مصنوعی</p>
    </div>

    <!-- AI Consultation Chat Box -->
    <div class="bg-white rounded-xl border border-stone-200 shadow-sm p-6 space-y-4">
        <div class="space-y-3">
            <label class="block text-sm font-semibold text-stone-700">پرسش مشاوره‌ای یا درخواست تحلیل وضعیت تحصیلی:</label>
            <textarea rows="4" placeholder="مثال: وضعیت غیبت‌های غیرموجه پایه ۳ و راهکار بهبود ساعات مطالعه طلاب را تحلیل کن..." class="w-full p-3 border border-stone-200 rounded-xl text-sm focus:outline-none focus:border-stone-400"></textarea>
        </div>

        <div class="flex justify-end">
            <button class="px-5 py-2.5 bg-stone-800 hover:bg-stone-900 text-white rounded-xl text-sm font-semibold transition-colors shadow-sm">
                دریافت تحلیل از هوش مصنوعی
            </button>
        </div>

        <!-- Sample AI Response Box -->
        <div class="bg-stone-50 rounded-xl border border-stone-200 p-4 mt-6">
            <div class="flex items-center gap-2 text-stone-800 font-bold text-sm mb-2">
                <span class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span>
                تحلیلگر هوشمند حوزه:
            </div>
            <p class="text-xs text-stone-600 leading-relaxed">
                با بررسی داده‌های حضور و غیاب مهرماه، میانگین غیبت‌های کلاس مکاسب به دلیل تداخل زمانی کاهش داشته است. پیشنهاد می‌شود ساعات مباحثه بعدازظهر برای پایه‌های ۴ و ۵ به صورت متمرکز در مدرس شماره ۲ برگزار شود تا بازدهی تحصیلی ارتقا یابد.
            </p>
        </div>
    </div>

</div>
@endsection

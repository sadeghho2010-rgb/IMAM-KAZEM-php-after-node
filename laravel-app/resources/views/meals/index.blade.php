@extends('layouts.app')

@section('content')
<div class="space-y-6">

    <!-- Page Header & Action -->
    <div class="bg-white rounded-2xl border border-stone-200 p-6 shadow-sm flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
        <div>
            <h2 class="text-xl font-bold text-stone-800">برنامه غذایی و سامانه سلف مدرسه</h2>
            <p class="text-sm text-stone-500 mt-1">تعریف منوی روزانه، قیمت و یارانه غذا و رزرو ناهار توسط طلاب</p>
        </div>
        <div class="flex items-center gap-3">
            <button class="px-4 py-2 bg-stone-800 hover:bg-stone-900 text-white rounded-xl text-sm font-semibold transition-colors shadow-sm">
                + تعریف منوی هفته جدید
            </button>
        </div>
    </div>

    <!-- Weekly Menu Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white rounded-xl border border-stone-200 p-4 shadow-sm">
            <div class="flex items-center justify-between border-b border-stone-100 pb-2">
                <span class="font-bold text-stone-800 text-sm">شنبه (۱۴۰۳/۰۷/۱۴)</span>
                <span class="text-xs bg-emerald-50 text-emerald-700 px-2 py-0.5 rounded">فعال</span>
            </div>
            <div class="mt-3">
                <h4 class="font-semibold text-stone-800 text-base">زرشک پلو با مرغ</h4>
                <p class="text-xs text-stone-500 mt-1">همراه با ماست و نوشیدنی</p>
                <div class="mt-4 pt-3 border-t border-stone-100 flex items-center justify-between text-xs">
                    <span class="text-stone-500">سهم طلبه (پس از یارانه):</span>
                    <span class="font-bold text-stone-900 font-mono">۱۵,۰۰۰ تومان</span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl border border-stone-200 p-4 shadow-sm">
            <div class="flex items-center justify-between border-b border-stone-100 pb-2">
                <span class="font-bold text-stone-800 text-sm">یک‌شنبه (۱۴۰۳/۰۷/۱۵)</span>
                <span class="text-xs bg-emerald-50 text-emerald-700 px-2 py-0.5 rounded">فعال</span>
            </div>
            <div class="mt-3">
                <h4 class="font-semibold text-stone-800 text-base">قرمه سبزی سنتی</h4>
                <p class="text-xs text-stone-500 mt-1">با برنج ایرانی و سالاد</p>
                <div class="mt-4 pt-3 border-t border-stone-100 flex items-center justify-between text-xs">
                    <span class="text-stone-500">سهم طلبه (پس از یارانه):</span>
                    <span class="font-bold text-stone-900 font-mono">۱۵,۰۰۰ تومان</span>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl border border-stone-200 p-4 shadow-sm">
            <div class="flex items-center justify-between border-b border-stone-100 pb-2">
                <span class="font-bold text-stone-800 text-sm">دوشنبه (۱۴۰۳/۰۷/۱۶)</span>
                <span class="text-xs bg-emerald-50 text-emerald-700 px-2 py-0.5 rounded">فعال</span>
            </div>
            <div class="mt-3">
                <h4 class="font-semibold text-stone-800 text-base">قیمه بادمجان</h4>
                <p class="text-xs text-stone-500 mt-1">همراه با دوغ و سبزی خوردن</p>
                <div class="mt-4 pt-3 border-t border-stone-100 flex items-center justify-between text-xs">
                    <span class="text-stone-500">سهم طلبه (پس از یارانه):</span>
                    <span class="font-bold text-stone-900 font-mono">۱۵,۰۰۰ تومان</span>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

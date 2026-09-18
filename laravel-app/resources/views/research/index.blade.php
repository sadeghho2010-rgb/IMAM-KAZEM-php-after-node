@extends('layouts.app')

@section('content')
<div class="space-y-6">

    <!-- Page Header & Action -->
    <div class="bg-white rounded-2xl border border-stone-200 p-6 shadow-sm flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
        <div>
            <h2 class="text-xl font-bold text-stone-800">امور پژوهشی، امتحانات شفاهی و مباحثات</h2>
            <p class="text-sm text-stone-500 mt-1">پیگیری مقالات و پایان‌نامه‌ها، ثبت نمرات امتحانات شفاهی و گروه‌های مباحثه طلاب</p>
        </div>
        <div class="flex items-center gap-3">
            <button class="px-4 py-2 bg-stone-800 hover:bg-stone-900 text-white rounded-xl text-sm font-semibold transition-colors shadow-sm">
                + ثبت موضوع پژوهشی جدید
            </button>
        </div>
    </div>

    <!-- Research Records Table -->
    <div class="bg-white rounded-xl border border-stone-200 shadow-sm overflow-hidden">
        <div class="p-4 bg-stone-50 border-b border-stone-200 flex items-center justify-between">
            <span class="font-bold text-stone-800 text-sm">پرونده‌های پژوهشی و مقالات فعال</span>
            <span class="text-xs text-stone-500">مجموع: ۱۲ پرونده</span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-right border-collapse text-sm">
                <thead>
                    <tr class="border-b border-stone-200 text-stone-600 text-xs font-semibold">
                        <th class="py-3.5 px-4">عنوان پژوهش / مقاله</th>
                        <th class="py-3.5 px-4">محقق (طلبه)</th>
                        <th class="py-3.5 px-4">نوع</th>
                        <th class="py-3.5 px-4">مرحله پژوهش</th>
                        <th class="py-3.5 px-4">امتیاز ارزیابی</th>
                        <th class="py-3.5 px-4 text-center">عملیات</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-stone-100 text-stone-700">
                    <tr class="hover:bg-stone-50 transition-colors">
                        <td class="py-3.5 px-4 font-semibold text-stone-900">
                            بررسی فقهی معاملات رمزارزها در مکاسب محرمه
                        </td>
                        <td class="py-3.5 px-4 text-xs font-medium text-stone-800">محمدجواد حسینی</td>
                        <td class="py-3.5 px-4 text-xs">مقاله پژوهشی</td>
                        <td class="py-3.5 px-4">
                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-50 text-blue-700 border border-blue-200">
                                در حال نگارش
                            </span>
                        </td>
                        <td class="py-3.5 px-4 font-mono text-xs font-bold text-stone-800">۱۸.۵ از ۲۰</td>
                        <td class="py-3.5 px-4 text-center">
                            <button class="px-2.5 py-1 text-xs text-stone-700 hover:bg-stone-100 rounded border border-stone-200">مشاهده و نقد</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection

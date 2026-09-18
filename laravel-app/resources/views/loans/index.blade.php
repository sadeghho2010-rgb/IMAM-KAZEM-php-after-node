@extends('layouts.app')

@section('content')
<div class="space-y-6">

    <!-- Page Header & Action -->
    <div class="bg-white rounded-2xl border border-stone-200 p-6 shadow-sm flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
        <div>
            <h2 class="text-xl font-bold text-stone-800">صندوق وام قرض‌الحسنه طلاب</h2>
            <p class="text-sm text-stone-500 mt-1">تخصیص تسهیلات قرض‌الحسنه، مدیریت اقساط و اتصال به موتور کسر از شهریه</p>
        </div>
        <div class="flex items-center gap-3">
            <button class="px-4 py-2 bg-stone-800 hover:bg-stone-900 text-white rounded-xl text-sm font-semibold transition-colors shadow-sm">
                + اعطای وام جدید
            </button>
        </div>
    </div>

    <!-- Loans Summary Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <div class="bg-white p-4 rounded-xl border border-stone-200 shadow-sm">
            <span class="text-xs text-stone-500 font-medium">مجموع وام‌های فعال</span>
            <p class="text-xl font-bold text-stone-800 mt-1">۱۴ پرونده</p>
        </div>
        <div class="bg-white p-4 rounded-xl border border-stone-200 shadow-sm">
            <span class="text-xs text-stone-500 font-medium">کل مانده مطالبات صندوق</span>
            <p class="text-xl font-bold text-stone-800 mt-1">۴۲,۰۰۰,۰۰۰ تومان</p>
        </div>
        <div class="bg-white p-4 rounded-xl border border-stone-200 shadow-sm">
            <span class="text-xs text-stone-500 font-medium">اقساط وصولی این ماه</span>
            <p class="text-xl font-bold text-emerald-600 mt-1">۴,۲۰۰,۰۰۰ تومان</p>
        </div>
    </div>

    <!-- Loans Table -->
    <div class="bg-white rounded-xl border border-stone-200 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-right border-collapse text-sm">
                <thead>
                    <tr class="bg-stone-50 border-b border-stone-200 text-stone-600 text-xs font-semibold">
                        <th class="py-3.5 px-4">نام وام‌گیرنده</th>
                        <th class="py-3.5 px-4">مبلغ کل وام</th>
                        <th class="py-3.5 px-4">مبلغ هر قسط</th>
                        <th class="py-3.5 px-4">اقساط پرداخت شده</th>
                        <th class="py-3.5 px-4">اقساط باقی‌مانده</th>
                        <th class="py-3.5 px-4">وضعیت پرونده</th>
                        <th class="py-3.5 px-4 text-center">عملیات</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-stone-100 text-stone-700">
                    <tr class="hover:bg-stone-50 transition-colors">
                        <td class="py-3.5 px-4 font-semibold text-stone-900">محمدجواد حسینی</td>
                        <td class="py-3.5 px-4 font-mono text-xs">۳,۰۰۰,۰۰۰ تومان</td>
                        <td class="py-3.5 px-4 font-mono text-xs text-stone-600">۳۰۰,۰۰۰ تومان</td>
                        <td class="py-3.5 px-4 text-xs font-mono">۴ از ۱۰</td>
                        <td class="py-3.5 px-4 text-xs font-mono font-bold text-amber-700">۶ قسط</td>
                        <td class="py-3.5 px-4">
                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-emerald-50 text-emerald-700">
                                در حال بازپرداخت
                            </span>
                        </td>
                        <td class="py-3.5 px-4 text-center">
                            <button class="px-2.5 py-1 text-xs text-stone-700 hover:bg-stone-100 rounded border border-stone-200">وصول دستی قسط</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection

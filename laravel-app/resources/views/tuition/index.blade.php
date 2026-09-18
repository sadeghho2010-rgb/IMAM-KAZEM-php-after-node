@extends('layouts.app')

@section('content')
<div class="space-y-6">

    <!-- Page Header & Action -->
    <div class="bg-white rounded-2xl border border-stone-200 p-6 shadow-sm flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
        <div>
            <h2 class="text-xl font-bold text-stone-800">محاسبات و فیش‌های شهریه پله‌ای</h2>
            <p class="text-sm text-stone-500 mt-1">فرمول‌های پویا، پاداش مطالعه، حق اولاد، تلبس، مسکن و کسر خودکار اقساط وام</p>
        </div>
        <div class="flex items-center gap-3">
            <button class="px-4 py-2 bg-stone-800 hover:bg-stone-900 text-white rounded-xl text-sm font-semibold transition-colors shadow-sm">
                + صدور دوره جدید شهریه
            </button>
        </div>
    </div>

    <!-- Active Formula Rules Summary -->
    <div class="bg-stone-50 border border-stone-200 rounded-xl p-4 grid grid-cols-1 md:grid-cols-4 gap-4 text-xs">
        <div class="bg-white p-3 rounded-lg border border-stone-200">
            <span class="text-stone-500">شهریه پایه مجرد / متاهل:</span>
            <p class="font-bold text-stone-800 text-sm mt-1">۱,۲۰۰,۰۰۰ / ۱,۸۰۰,۰۰۰ تومان</p>
        </div>
        <div class="bg-white p-3 rounded-lg border border-stone-200">
            <span class="text-stone-500">حق اولاد (به ازای هر فرزند):</span>
            <p class="font-bold text-stone-800 text-sm mt-1">۱۵۰,۰۰۰ تومان</p>
        </div>
        <div class="bg-white p-3 rounded-lg border border-stone-200">
            <span class="text-stone-500">پاداش تلبس دائم / مسکن:</span>
            <p class="font-bold text-stone-800 text-sm mt-1">۳۰۰,۰۰۰ / ۴۰۰,۰۰۰ تومان</p>
        </div>
        <div class="bg-white p-3 rounded-lg border border-stone-200">
            <span class="text-stone-500">پاداش مازاد ساعات مطالعه:</span>
            <p class="font-bold text-stone-800 text-sm mt-1">۲۵,۰۰۰ تومان / ساعت</p>
        </div>
    </div>

    <!-- Tuition Calculation Breakdown Table -->
    <div class="bg-white rounded-xl border border-stone-200 shadow-sm overflow-hidden">
        <div class="p-4 bg-stone-50 border-b border-stone-200 flex items-center justify-between">
            <span class="font-bold text-stone-800 text-sm">لیست فیش‌های دوره: مهرماه ۱۴۰۳</span>
            <span class="text-xs font-semibold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded">وضعیت: تایید نهایی</span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-right border-collapse text-sm">
                <thead>
                    <tr class="border-b border-stone-200 text-stone-600 text-xs font-semibold">
                        <th class="py-3 px-4">نام طلبه</th>
                        <th class="py-3 px-4">پایه</th>
                        <th class="py-3 px-4">شهریه پایه</th>
                        <th class="py-3 px-4">مزایا (اولاد/تلبس/مسکن)</th>
                        <th class="py-3 px-4">پاداش مطالعه</th>
                        <th class="py-3 px-4 text-rose-600">کسر قسط وام</th>
                        <th class="py-3 px-4 font-bold text-stone-900">مبلغ نهایی پرداختی</th>
                        <th class="py-3 px-4 text-center">چاپ فیش</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-stone-100 text-stone-700">
                    <tr class="hover:bg-stone-50 transition-colors">
                        <td class="py-3.5 px-4 font-semibold text-stone-900">محمدجواد حسینی</td>
                        <td class="py-3.5 px-4 text-xs">پایه ۳</td>
                        <td class="py-3.5 px-4 font-mono text-xs">۱,۸۰۰,۰۰۰</td>
                        <td class="py-3.5 px-4 text-xs font-mono text-emerald-700">+ ۱,۰۰۰,۰۰۰</td>
                        <td class="py-3.5 px-4 text-xs font-mono text-emerald-700">+ ۱۵۰,۰۰۰</td>
                        <td class="py-3.5 px-4 text-xs font-mono text-rose-600">- ۳۰۰,۰۰۰</td>
                        <td class="py-3.5 px-4 font-bold text-stone-900 font-mono">۲,۶۵۰,۰۰۰ تومان</td>
                        <td class="py-3.5 px-4 text-center">
                            <button class="px-2.5 py-1 text-xs text-stone-700 hover:bg-stone-100 rounded border border-stone-200">فیش PDF</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection

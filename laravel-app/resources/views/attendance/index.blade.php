@extends('layouts.app')

@section('content')
<div class="space-y-6">

    <!-- Page Header -->
    <div class="bg-white rounded-2xl border border-stone-200 p-6 shadow-sm flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
        <div>
            <h2 class="text-xl font-bold text-stone-800">حضور و غیاب و انضباطی کلاسی</h2>
            <p class="text-sm text-stone-500 mt-1">ثبت روزانه وضعیت حضور طلاب، تأخیرات، غیبت‌های موجه و اخطارهای آموزشی</p>
        </div>
        <div class="flex items-center gap-3">
            <button class="px-4 py-2 bg-stone-800 hover:bg-stone-900 text-white rounded-xl text-sm font-semibold transition-colors shadow-sm">
                + ثبت جلسه کلاسی جدید
            </button>
        </div>
    </div>

    <!-- Attendance Filters -->
    <div class="bg-white rounded-xl border border-stone-200 p-4 shadow-sm grid grid-cols-1 sm:grid-cols-3 gap-4">
        <div>
            <label class="block text-xs font-semibold text-stone-600 mb-1">انتخاب درس / برنامه</label>
            <select class="w-full px-3 py-2 border border-stone-200 rounded-lg text-sm bg-white focus:outline-none focus:border-stone-400">
                <option value="">همه دروس</option>
                <option value="1">مکاسب - شیخ انصاری (استاد حسینی)</option>
                <option value="2">کفایه الاصول (استاد رضایی)</option>
                <option value="3">منطق مظفر (استاد محمدی)</option>
            </select>
        </div>
        <div>
            <label class="block text-xs font-semibold text-stone-600 mb-1">پایه تحصیلی</label>
            <select class="w-full px-3 py-2 border border-stone-200 rounded-lg text-sm bg-white focus:outline-none focus:border-stone-400">
                <option value="">همه پایه‌ها</option>
                <option value="پایه 3">پایه 3</option>
                <option value="پایه 4">پایه 4</option>
                <option value="سطح 2">سطح 2</option>
            </select>
        </div>
        <div>
            <label class="block text-xs font-semibold text-stone-600 mb-1">تاریخ جلسه</label>
            <input type="text" placeholder="1403/07/15" class="w-full px-3 py-2 border border-stone-200 rounded-lg text-sm focus:outline-none focus:border-stone-400">
        </div>
    </div>

    <!-- Attendance Sheet Card -->
    <div class="bg-white rounded-xl border border-stone-200 shadow-sm overflow-hidden">
        <div class="p-4 bg-stone-50 border-b border-stone-200 flex items-center justify-between">
            <span class="font-bold text-stone-800 text-sm">لیست حضور و غیاب جلسه: مکاسب محرمه (پایه ۵)</span>
            <span class="text-xs text-stone-500">تاریخ: ۱۴۰۳/۰۷/۱۵ - مدرس ۲</span>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-right border-collapse text-sm">
                <thead>
                    <tr class="border-b border-stone-200 text-stone-600 text-xs font-semibold">
                        <th class="py-3.5 px-4">ردیف</th>
                        <th class="py-3.5 px-4">نام طلبه</th>
                        <th class="py-3.5 px-4">وضعیت حضور</th>
                        <th class="py-3.5 px-4">میزان تاخیر (دقیقه)</th>
                        <th class="py-3.5 px-4">توجیه غیبت</th>
                        <th class="py-3.5 px-4">اخطار آموزشی</th>
                        <th class="py-3.5 px-4">توضیحات</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-stone-100 text-stone-700">
                    <tr class="hover:bg-stone-50 transition-colors">
                        <td class="py-3 px-4 font-mono text-xs text-stone-400">1</td>
                        <td class="py-3 px-4 font-semibold text-stone-900">سید علی موسوی</td>
                        <td class="py-3 px-4">
                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-emerald-50 text-emerald-700 border border-emerald-200">
                                حاضر
                            </span>
                        </td>
                        <td class="py-3 px-4 text-xs font-mono">-</td>
                        <td class="py-3 px-4 text-xs text-stone-400">-</td>
                        <td class="py-3 px-4 text-xs text-stone-400">-</td>
                        <td class="py-3 px-4 text-xs text-stone-500">مشارکت فعال در مباحثه</td>
                    </tr>
                    <tr class="hover:bg-stone-50 transition-colors">
                        <td class="py-3 px-4 font-mono text-xs text-stone-400">2</td>
                        <td class="py-3 px-4 font-semibold text-stone-900">رضا کریمی</td>
                        <td class="py-3 px-4">
                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-rose-50 text-rose-700 border border-rose-200">
                                غایب
                            </span>
                        </td>
                        <td class="py-3 px-4 text-xs font-mono">-</td>
                        <td class="py-3 px-4">
                            <span class="text-xs text-amber-600 font-medium">موجه با گواهی پزشک</span>
                        </td>
                        <td class="py-3 px-4">
                            <span class="inline-flex items-center px-1.5 py-0.5 rounded text-[10px] font-medium bg-amber-50 text-amber-700 border border-amber-200">
                                مرز ۳ غیبت
                            </span>
                        </td>
                        <td class="py-3 px-4 text-xs text-stone-500">-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection

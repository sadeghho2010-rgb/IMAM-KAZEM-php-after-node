@extends('layouts.app')

@section('content')
<div class="space-y-6">

    <!-- Page Header & Actions -->
    <div class="bg-white rounded-2xl border border-stone-200 p-6 shadow-sm flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
        <div>
            <h2 class="text-xl font-bold text-stone-800">مدیریت پرونده‌های تحصیلی و تربیتی طلاب</h2>
            <p class="text-sm text-stone-500 mt-1">مشاهده، فیلتر و ثبت اطلاعات طلاب، وضعیت تلبس، تاهل و سوابق حوزوی</p>
        </div>
        <div class="flex items-center gap-3">
            <button class="px-4 py-2 bg-stone-800 hover:bg-stone-900 text-white rounded-xl text-sm font-semibold transition-colors shadow-sm">
                + ثبت طلبه جدید
            </button>
        </div>
    </div>

    <!-- Filter & Search Bar -->
    <div class="bg-white rounded-xl border border-stone-200 p-4 shadow-sm grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <div>
            <label class="block text-xs font-semibold text-stone-600 mb-1">جستجو (نام، کد ملی، شماره)</label>
            <input type="text" placeholder="نام یا کدملی را بنویسید..." class="w-full px-3 py-2 border border-stone-200 rounded-lg text-sm focus:outline-none focus:border-stone-400">
        </div>
        <div>
            <label class="block text-xs font-semibold text-stone-600 mb-1">پایه تحصیلی</label>
            <select class="w-full px-3 py-2 border border-stone-200 rounded-lg text-sm focus:outline-none focus:border-stone-400 bg-white">
                <option value="">همه پایه‌ها</option>
                <option value="پایه 1">پایه 1</option>
                <option value="پایه 2">پایه 2</option>
                <option value="پایه 3">پایه 3</option>
                <option value="پایه 4">پایه 4</option>
                <option value="پایه 5">پایه 5</option>
                <option value="پایه 6">پایه 6</option>
                <option value="سطح 2">سطح 2</option>
                <option value="سطح 3">سطح 3</option>
                <option value="درس خارج">درس خارج</option>
            </select>
        </div>
        <div>
            <label class="block text-xs font-semibold text-stone-600 mb-1">وضعیت پرونده</label>
            <select class="w-full px-3 py-2 border border-stone-200 rounded-lg text-sm focus:outline-none focus:border-stone-400 bg-white">
                <option value="">همه طلاب</option>
                <option value="1">فقط طلاب فعال</option>
                <option value="0">غیرفعال / مرخصی / انصراف</option>
            </select>
        </div>
        <div>
            <label class="block text-xs font-semibold text-stone-600 mb-1">وضعیت تاهل و سکونت</label>
            <select class="w-full px-3 py-2 border border-stone-200 rounded-lg text-sm focus:outline-none focus:border-stone-400 bg-white">
                <option value="">همه وضعیت‌ها</option>
                <option value="married">متاهل</option>
                <option value="single">مجرد</option>
                <option value="dorm">خوابگاهی</option>
                <option value="rented">مستاجر</option>
            </select>
        </div>
    </div>

    <!-- Students Table -->
    <div class="bg-white rounded-xl border border-stone-200 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-right border-collapse text-sm">
                <thead>
                    <tr class="bg-stone-50 border-b border-stone-200 text-stone-600 text-xs font-semibold">
                        <th class="py-3.5 px-4">نام و نام خانوادگی</th>
                        <th class="py-3.5 px-4">کد ملی / مرکز مدیریت</th>
                        <th class="py-3.5 px-4">پایه تحصیلی</th>
                        <th class="py-3.5 px-4">وضعیت تاهل و اولاد</th>
                        <th class="py-3.5 px-4">تلبس</th>
                        <th class="py-3.5 px-4">وضعیت سکونت</th>
                        <th class="py-3.5 px-4">وضعیت</th>
                        <th class="py-3.5 px-4 text-center">عملیات</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-stone-100 text-stone-700">
                    <tr class="hover:bg-stone-50 transition-colors">
                        <td class="py-3.5 px-4 font-semibold text-stone-900">
                            محمدجواد حسینی
                            <span class="block text-xs text-stone-400 font-normal">09123456789</span>
                        </td>
                        <td class="py-3.5 px-4">
                            <span class="font-mono text-xs">0019283746</span>
                            <span class="block text-xs text-stone-400">کد: 45210</span>
                        </td>
                        <td class="py-3.5 px-4">
                            <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-stone-100 text-stone-800">
                                پایه 3
                            </span>
                        </td>
                        <td class="py-3.5 px-4 text-xs">
                            <span class="text-stone-800 font-medium">متاهل</span> (۲ فرزند)
                        </td>
                        <td class="py-3.5 px-4">
                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-amber-50 text-amber-800 border border-amber-200">
                                معمم
                            </span>
                        </td>
                        <td class="py-3.5 px-4 text-xs">مستاجر</td>
                        <td class="py-3.5 px-4">
                            <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-emerald-50 text-emerald-700">
                                فعال
                            </span>
                        </td>
                        <td class="py-3.5 px-4 text-center">
                            <div class="flex items-center justify-center gap-2 text-xs">
                                <button class="px-2.5 py-1 text-stone-700 hover:bg-stone-100 rounded border border-stone-200">مشاهده پرونده</button>
                                <button class="px-2.5 py-1 text-stone-700 hover:bg-stone-100 rounded border border-stone-200">ویرایش</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection

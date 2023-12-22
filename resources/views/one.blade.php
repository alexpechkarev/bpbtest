@extends('layouts.app')

@section('title', 'Task One')



@section('content')

<h2 class="font-bold">Tailwind CSS Responsive Div Elements</h2>
<p class="my-4">Utilize <a href="https://tailwindcss.com/docs/grid-template-rows" target="_new" class="text-indigo-600">Tailwind CSS</a> classes to modify the layout of div elements for smaller screens, achieving the desired arrangement as depicted in the
<a href="{{asset('img/responsive_divs.png')}}" target="_new" class="text-indigo-600">provided image </a>.</p>

<div class="grid grid-cols-2 gap-6 content-center border p-4 bg-indigo-100 lg:grid-cols-4 lg:content-center lg:h-80">

    <div class="p-4 border rounded-md bg-green-100 shadow-sm">Column 1</div>
    <div class="p-4 border rounded-md bg-green-100 shadow-sm lg:col-span-1 xsm:col-span-2">Column 2</div>
    <div class="p-4 border rounded-md bg-green-100 shadow-sm lg:order-none xsm:order-last">Column 3</div>
    <div class="p-4 border rounded-md bg-green-100 shadow-sm">Column 4</div>

</div>

@endsection
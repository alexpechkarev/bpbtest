@extends('layouts.app')

@section('title', 'Task Two')



@section('content')

<h2 class="font-bold">Form Validation </h2>
<p class="my-4">Leverage the existing Livewire component <code>/app/Livewire/LoginForm.php</code> to <a href="https://livewire.laravel.com/docs/validation" target="_new" href="https://livewire.laravel.com/docs/validation" class="text-blue-600">validate the form</a>. Display error messages if validation fails. Ensure the email address adheres to the correct format using Laravel's <a href="https://laravel.com/docs/10.x/validation#rule-email" target="_new" class="text-blue-600">email</a> validation rule. Disable the "Sign In" button while the <a href="https://livewire.laravel.com/docs/wire-loading" target="_new" class="text-blue-600">request is being processed</a>. Upon successful validation, reset the form and display a success message.</p> <a href="{{asset('/img/form_validation_1.png')}}" target="_new" class="text-blue-600">Image 1</a> / <a href="{{asset('/img/form_validation_2.png')}}" target="_new" class="text-blue-600">Image 2</a> / <a href="{{asset('/img/form_validation_3.png')}}" target="_new" class="text-blue-600">Image 3</a>





<livewire:login-form />


@endsection
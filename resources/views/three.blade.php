@extends('layouts.app')

@section('title', 'Task Three')



@section('content')

<h2 class="font-bold">API Call </h2>
<p class="my-4">Enhance the JavaScript section the <code>/resources/views/three.blade.php</code> file to invoke the server API endpoint through the <code>process()</code> method. Implement the code in <code>routes/api.php</code> to handle the request and return the sum of the provided numbers. On the client side, within the process method, receive the server response and update the result variable with the
returned value.</p> 


<div class="grid grid-cols-3 gap-5 items-end" x-data="window.Components.TaskThree({})">
    <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Number A</label>
        <div class="mt-2">
            <input type="number" x-model="numbers.a"
                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
    </div>

    <div>
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Number B</label>
        <div class="mt-2">
            <input type="number" x-model="numbers.b"
                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
    </div>

    <div>
        <button type="button" x-on:click="process"
            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Process</button>
    </div>

<div>

    <dl class="mt-5 gap-5" x-show="result" x-transition>
        <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
            <dt class="truncate text-sm font-medium text-gray-500">Result</dt>
            <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">
                <span x-text="result">0</span>
            </dd>
        </div>
    </dl>
</div>

</div>




@endsection

@section('js_footer')
@parent
<script>
    window.Components = {}
    window.Components.TaskThree = function (data) {
        return {
            numbers:{
                a:1,
                b:2
            },
            result: 0,
            // Init component
            async init(){
                await this.loadData()
            },
            // Load random numbers from server
            async loadData(){
                const headers = new Headers({
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                });
                fetch('/api/load',{
                    method: 'POST',
                    headers,
                    credentials: 'include',
                    body: JSON.stringify(this.numbers)
                }).then((res)=>{

                    if (res.ok) {
                        return res.json();
                    }
                    throw new Error('Something went wrong');
                })
                .then((rsp)=>{
                    //console.log(rsp);
                    this.numbers = rsp;
                }).catch((err)=>{
                    console.log(err);
                })
                                
            },     
            
            // Process numbers
            process() {                
                // Replace with the call to the server to process the numbers
                // copy/pase code from loadData method
                // in the api.php file update route /api/process to
                // -- accept POST request
                // -- return the sum of the numbers
                //
                // assign the result to this.result

                this.result = this.numbers.a + this.numbers.b;
                
            }
        }
    }
</script>
@endsection
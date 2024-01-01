@extends('layouts.main')

@section('container')
    <div class="container mx-auto px-5 mt-14">
    <div class="grid grid-rows-1 grid-flow-col gap-3">
        <div class="mx-auto">
            <img src="image/regist1.png" alt="" class="w-[100px] mt-6 md:w-full">
        </div>
        <div class="mx-auto md:mt-14">
            <img src="image/logo.png" alt="" class="mx-auto mt-5 w-14 md:w-32">
            <div class="text-center w-full text-blue-900 font-bold md:text-2xl">
                <h1>Registration Form</h1>
                <h2>Sahabat Basketball Ponorogo</h2>
            </div>
        </div>
        <div class="mx-auto">
            <img src="image/regist2.png" alt="" class="mt-8 w-[150px] md:w-full sm:w-[120px] sticky md:mt-6">
        </div>
      </div>
    </div>
            @livewire('multi-step-form')
        
    </div>
    

  

@endsection
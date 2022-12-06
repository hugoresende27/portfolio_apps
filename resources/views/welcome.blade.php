

@extends('layouts.app')

@section('content')


        <div class="relative flex items-top justify-center bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0 myMain">

            @include('layouts.header')


            <div class="columns-3 ...">
                <a href="{{route('catar')}}"><img src="{{asset('assets/images/catar2022.jpeg')}}" alt="catar2022" class="myMainImage"></a>
            </div>

        </div>






@endsection

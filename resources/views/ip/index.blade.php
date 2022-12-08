

@extends('layouts.app')

@section('page_title')
    {{ "HR - IP API" }}
@endsection

@section('content')


    <div class="bg-gray-100 dark:bg-gray-900 myMain">

        @include('layouts.header')

        <div class="row allContent">

            @include('ip.side-menu-ip')

            <div class="col-10 mainContent">

                IP API

            </div>
        </div>




    </div>






@endsection

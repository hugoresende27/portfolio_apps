

@extends('layouts.app')

@section('page_title')
    {{ "HR - " }}
@endsection


@section('content')


    <div class="bg-gray-100 dark:bg-gray-900 myMain">

        @include('layouts.header')

        <div class="row allContent">
            <div class="col-2 sideMenu">

                <button type="button" class="btn btn-light rounded-full btn-lg mySideMenuText"><img src="{{asset('assets/images/soccer1.png')}}" alt="soccer" class="myIcon">Results</button>
                <button type="button" class="btn btn-light rounded-full btn-lg mySideMenuText"><img src="{{asset('assets/images/soccer2.jpg')}}" alt="soccer" class="myIcon">Stats</button>
                <button type="button" class="btn btn-light rounded-full btn-lg mySideMenuText"><img src="{{asset('assets/images/soccer3.png')}}" alt="soccer" class="myIcon">History</button>

            </div>
            <div class="col-10 mainContent">
                main
            </div>
        </div>




    </div>






@endsection

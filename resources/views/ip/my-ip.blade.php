

@extends('layouts.app')

@section('page_title')
    {{ "HR - MY IP" }}
@endsection

@section('content')


    <div class="bg-gray-100 dark:bg-gray-900 myMain">

        @include('layouts.header')

        <div class="row allContent">

            @include('ip.side-menu-ip')

            <div class="col-10 mainContent">


                <div class="results container">

                    <div class="row">
                        @foreach($res as $key => $r)


                            @switch($key)
                                @case ('flag')

                                    <img src="{{$r->img}}" alt="flag" class="myIconBig">

                                    @break
                                @case ('connection')
                                    @foreach($r as $k => $r1)
                                        <div class="col-3">
                                            @if (($k == "isp") && (str_contains($r1, 'NOS')))
                                                <img src="{{asset('assets/images/nos.jpeg')}}" alt="nos" class="myImage">
                                            @else
                                                <p class="myCard"> <span style="text-transform: uppercase">{{$k}} &diamond; </span> {{$r1}}</p>
                                            @endif

                                        </div>
                                    @endforeach
                                    @break
                                @case ('timezone')
                                    @foreach($r as $k => $r1)
                                        <div class="col-3">
                                            <p class="myCard"> <span style="text-transform: uppercase">{{$k}} &diamond; </span>  {{$r1}}</p>
                                        </div>
                                    @endforeach
                                    @break
                                @default
                                    <div class="col-3">
                                        <p class="myCard"> <span style="text-transform: uppercase">{{$key}} &diamond; </span>  {{($r)}}</p>
                                    </div>
                                    @break
                            @endswitch


                        @endforeach
                    </div>

                </div>


            </div>
        </div>




    </div>






@endsection

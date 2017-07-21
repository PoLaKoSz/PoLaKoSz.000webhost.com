@extends('layouts.app')

@section('content')
    <div class="container section-margin">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="row">
                    <div class="view overlay hm-black-strong">
                        <img src="{{asset('images//all.gif')}}" alt="All projects">
                        <div class="mask flex-center">
                            <div>
                                <p><a href="#" class="white-text">{{ trans('projects.more') }}</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row text-center">
                    <h2 class="white-text"><a href="#">All</a></h2>
                    <p class="big-text white-text">( 3 )</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="row">
                    <div class="view overlay hm-black-strong">
                        <img src="{{asset('images//cSharp.gif')}}" alt="My C# projects">
                        <div class="mask flex-center">
                            <div>
                                <p><a href="#" class="white-text">{{ trans('projects.more') }}</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row text-center">
                    <h2 class="white-text"><a href="#">C#</a></h2>
                    <p class="big-text white-text">( 10 )</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="row">
                    <div class="view overlay hm-black-strong">
                        <img src="{{asset('images//android.gif')}}" alt="My Android projects">
                        <div class="mask flex-center">
                            <div>
                                <p><a href="#" class="white-text">{{ trans('projects.more') }}</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row text-center">
                    <h2 class="white-text"><a href="#">Android</a></h2>
                    <p class="big-text white-text">( 2 )</p>
                </div>
            </div>
        </div>
    </div>
@endsection
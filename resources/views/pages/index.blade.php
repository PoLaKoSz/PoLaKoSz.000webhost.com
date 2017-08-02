@extends('layouts.app')

@section('content')
    <div id="{{ trans('navbar.menu_home') }}">
        @include('inc.navbar')
        
        @include('inc.bootstrap_carousel')

        @include('inc.welcome_text')

        @include('inc.about-me')
    </div>

    <section id="{{ trans('navbar.menu_projects') }}" class="projects">
        <div class="section-padding">
            <div class="container">
                <?php
                    $title  = trans('projects.title');
                    $design = 'light-section-header';
                ?>
                @include('inc.section-header');

                @include('inc.projects');
            </div>
        </div>
    </section>
    
    {!! $moviesView !!}
@endsection
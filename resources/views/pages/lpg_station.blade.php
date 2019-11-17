@extends('master')
@section('title','LPG Station')
@section('lpg_station','active_nav')
@section('content')

    <div class="container">
        <div class="row nav-space">
            <div class="col-md-12">
                <div class="filters">
                    <ul>
                        <li class="is-checked" data-filter="*">All</li>
                        <li data-filter=".completed">Completed</li>
                        <li data-filter=".ongoing">Ongoing</li>
                        <li data-filter=".own_projects">Own Projects</li>
                    </ul>
                </div>
            </div>

            <div class="col-md-12">
                <div class="rows grid data-isotope='{ 'itemSelector': '.grid-item', 'masonry': { 'columnWidth': 200 } }'">
                <div class="col-md-4 grid-item logic" data-category="websites">
                    <img src="{{ asset('assets/images/random/gallery4.jpg') }}" alt="">
                </div>
                <div class="col-md-4 grid-item completed" data-category="flyers">
                    <img src="{{ asset('assets/images/random/gallery5.jpg') }}" alt="">
                </div>
                <div class="col-md-4 grid-item ongoing" data-category="ads">
                    <img src="{{ asset('assets/images/random/gallery7.jpg') }}" alt="">
                </div>
                <div class="col-md-4 grid-item completed" data-category="books">
                    <img src="{{ asset('assets/images/random/gallery6.jpg') }}" alt="">
                </div>
                <div class="col-md-4 grid-item ongoing" data-category="logos">
                    <img src="{{ asset('assets/images/random/banner-3.jpg') }}" alt="">
                </div>
                <div class="col-md-4 grid-item completed" data-category="websites">
                    <img src="{{ asset('assets/images/random/gallery6.jpg') }}" alt="">
                </div>
                <div class="col-md-4 grid-item ongoing" data-category="ads">
                    <img src="{{ asset('assets/images/random/footer.jpg') }}" alt="">
                </div>
                <div class="col-md-4 grid-item completed" data-category="books">
                    <img src="{{ asset('assets/images/random/banner-3.jpg') }}" alt="">
                </div>
                <div class="col-md-4 grid-item own_projects" data-category="books">
                    <img src="{{ asset('assets/images/random/footer2.jpg') }}" alt="">
                </div>
                <div class="col-md-4 grid-item completed" data-category="books">
                    <img src="{{ asset('assets/images/random/footer.jpg') }}" alt="">
                </div>
                <div class="col-md-4 grid-item own_projects" data-category="books">
                    <img src="{{ asset('assets/images/random/gallery5.jpg') }}" alt="">
                </div>
                <div class="col-md-4 grid-item own_projects" data-category="books">
                    <img src="{{ asset('assets/images/random/gallery4.jpg') }}" alt="">
                </div>
            </div>
        </div>

    </div>

    <script>
        var $grid = $('.grid').isotope({
            // options
            itemSelector: '.grid-item',
            layoutMode: 'fitRows',
        });

        // change is-checked class on buttons
        var $buttonGroup = $('.filters');
        $buttonGroup.on( 'click', 'li', function( event ) {
            $buttonGroup.find('.is-checked').removeClass('is-checked');
            var $button = $( event.currentTarget );
            $button.addClass('is-checked');
            var filterValue = $button.attr('data-filter');
            $grid.isotope({ filter: filterValue });
        });
    </script>

@endsection

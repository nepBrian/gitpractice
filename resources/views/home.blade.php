<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('components.head')
    <body>
        <div id="app">
            <header-component></header-component>
            <homepage-jumbotron></homepage-jumbotron>
            <about-component></about-component>
            <board-component></board-component>
            <contact-component></contact-component>
            <footer-component></footer-component>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

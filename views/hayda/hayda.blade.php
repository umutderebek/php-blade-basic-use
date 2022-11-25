@extends('welcome')



@section('content')
    haydaa

    <?php

    if (isset($_COOKIE['test_cookie'])) {
        echo $_COOKIE['test_cookie'];
    }

    ?>


@endsection
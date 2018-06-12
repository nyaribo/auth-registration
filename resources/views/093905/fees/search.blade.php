@extends('layouts.app')
<?php  use App\Fees;
use App\Http\Controllers\Controller; ?>
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
<div class="container">
    <!-- @if(isset($details)) -->
        <!-- <p> The4 Search results for your query <b> {{ $query }} </b> are :</p> -->
        <p> The Search results for your query are :</p>
    <h2>Sample User details</h2>
    <table class="table table-stiped">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Amount Paid</th>
                <th>Date</th>

            </tr>
        </thead>
        <tbody>
          @if(count($fees)>0)
            @foreach($fees as $fee)
            <tr>
                <td>{{$fee->student_id}}</td>
                <td>{{$fee->amount}}</td>
                <td>{{$fee->date}}</td>
            </tr>
            @endforeach
            @else
            <p>No search button</p>
            @endif
        </tbody>
    </table>
    @endif
</div>
</body>
</html>

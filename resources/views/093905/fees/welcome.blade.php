@extends('layouts.app')
<?php
use App\Fees;
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
        <div class="flex-center position-ref full-height">
                    <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Register Your Payments</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>

            <div class="content">
              <div class="container ">
                <h2>Fee Payment Information</h2>
                <table class="table table-striped ">
                  <thead>
                    <tr>
                      <th> Student ID | </th>
                      <th> Amount | </th>
                      <th> Date Paid | </th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  <!-- @for44($i = 0; $i < count($fees); $i++) -->
                  @if(count($fees)>0)
                    @foreach($fees as $fees)
                <tr>
                    <td>{{ $fees->student_id }}</td>
                    <td>{{ $fees->amount }}</td>
                    <td>{{ $fees->date }}</td>

                </tr>
                  @endforeach
                  @else
                  <p>No</p>
                  @endif
                  </tbody>
                </table>
            </div>
            <br>

                <form action="/search" method="POST" role="search">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" class="form-control" name="search"
                        placeholder="Search users"> <span class="input-group-btn">
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search">Search</span>
                        </button>
                    </span>
                </div>
              </form>
            </div>

        </div>
    </body>
</html>

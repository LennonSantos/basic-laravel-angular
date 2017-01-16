@extends('layouts.master')

@section('title', 'Dinheiro - Saiba quanto pode gastar')
@section('page', 'Home')

@section('header')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
    <div ng-app="myApp" ng-controller="lista">
        <ul>
          <li ng-repeat="x in myData">
            @{{ x.name + ',' + x.email + ',' + x.password   }}
          </li>
        </ul>
    </div>
@endsection


{{-- script no cabeçalho da pagina --}}
@section('scripts_head')
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
    <script>
    var app = angular.module('myApp', []);
    app.controller('lista', function($scope, $http) {
        $http.get("http://localhost:8000/users").then(function(response) {
            $scope.myData = response.data;
            console.log(response);
        });
    });
    </script>
@endsection

{{-- estilos no cabeçalho da página --}}
@section('styles_head')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" type="text/css">
@endsection
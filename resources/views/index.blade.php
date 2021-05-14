<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="{{asset(mix('css/app.css'))}}">
</head>
<body>
<div id="app">
    <router-view :key="$route.fullPath"></router-view>
</div>
<script src="{{asset(mix('js/app.js'))}}" type="application/javascript"></script>
</body>
</html>

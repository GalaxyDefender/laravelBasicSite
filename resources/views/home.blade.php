@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid dolorum magni dolore nulla dicta autem deleniti obcaecati, delectus quo dolores placeat, accusantium quasi natus fugiat ut fuga. Esse, pariatur placeat?</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection
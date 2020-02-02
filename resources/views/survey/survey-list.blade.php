@extends('layouts.app-admin')

@section('title', 'Page 2')


@section('content')

    @foreach($survey_list as $row)
    @if ($row->description == '')
        {{$row->survey_title}} = no description = {{$row->id}}<br>
        @else
        {{$row->survey_title}} = {{$row->description}} = {{$row->id}}<br>
    @endif

    @endforeach
    ----------------------------------------------------------
    @include('includes/message')
    <form action="/survey/save" method = "POST">
        @csrf <!--important-->

        <input name="title">
        <input name="description">
        <button type="submit">Save</button>

    </form>
@endsection

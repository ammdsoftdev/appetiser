@extends('layout.app')
@section('title', $title)
@section('content')
    <v-app>
        <template>
        </template>
    </v-app>
    <div class="container-fluid">
        @include('modules.miko-test.miko-test')
    </div>
@endsection


@extends('layout.app')
@section('title', $title)
@section('content')
    <div class="container-fluid">
        <dashboard-clinic-component inline-template id="1" name="elbert">
            <div data-app>
                <button @click="_triggerMiko()">Click Me</button>
                <button @click="_triggerElbert()">Click Me Elbert</button>

                <hr>
                @include('modules.miko-test.miko-test')
                <hr>

                @include('modules.miko-test.elbert-test')

            </div>
        </dashboard-clinic-component>
    </div>
@endsection


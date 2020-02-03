@extends('layout.app')
@section('title', $title)
@section('content')
<v-app>
    <div class="container-fluid" id="app">
        <dashboard-clinic-component inline-template id="1" name="elbert">
            <div data-app>
                <!--<button @click="_triggerMiko()">Click Me - MAINs</button>
                <button @click="_triggerElbert()">Click Me - MAIN</button>
                <v-btn text small color="primary">Main btn</v-btn>
                <v-btn large color="primary">Primary</v-btn>-->

                @include('modules.appetiser.appetiser')
            </div>
        </dashboard-clinic-component>
    </div>
</v-app>
@endsection


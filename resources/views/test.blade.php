@extends('layout')

@section('content')

<div class="card">
    <div class="card-body">
        <div class="row">
            <label>Title</label>
        </div>
        <div class="row">
            <input type="text" id="first_name">
        </div>

        <div class="row">
            <label>Description</label>
        </div>
        <div class="row">
            <input type="text" id="last_name">
        </div>
    </div>
    <div class="card-footer">
        <div class="row">
            <button class="btn btn-success" id="btn1">submit</button>
        </div>
    </div>
</div>

@endsection
@section('scripts')

    <script>
        $(document).ready(function () {

            $("#btn1").click(function () {
                $first_name = $("#first_name").val();
                $last_name = $("#last_name").val();
                alert($first_name);
                alert($last_name);
            });
        });
    </script>
@endsection
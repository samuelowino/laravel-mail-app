@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('sendMail') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
                    Title:<br>
                    <input type="text" name="title" id="title"><br> 
        </div>
        <div class="form-group">
                    E-mail:<br>
                    <input type="email" name="email" id="email"><br>
        </div>
        <div class="form-group">
                    Body:<br>
                <input type="text" name="body" size="50" id="body"><br><br>
        </div>
        <button type="submit">Submit</button>
    </form>
</div>
@show
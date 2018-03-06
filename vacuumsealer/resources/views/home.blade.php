@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                
                @if(Auth::User()->jabatan=='ADMIN') 
                <div class="panel-body">
                    Halaman Admin                    
                </div>
                @else
                <div class="panel-body">
                    Halaman Member
                </div>
                @endif

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    Halo  {{ Auth::user()->name }} <br>
                    Email Anda {{ Auth::user()->email }} <br>
                    Username {{ Auth::user()->username }} <br>
                    Role {{ Auth::user()->jabatan }} <br>

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success text-light"><p>BIENVENU À KNOWLEDGE TECHNOLOGY</p></div>
 
                <div class="card-body">
                    @if(auth()->user()->is_admin == 1)
                    <a href="{{url('admin/routes')}}"><p class="text-light">Admin</p></a>
                    @else
                    <div class=”panel-heading”><p class="text-success">Vous vous êtes connectez avec succès !</p></div>
                    @endif
                </div>
            </div>

            <div class="my-5">
                <a href="{{ route('formulaire') }}" class="text-light">Formulaire d'inscription</a>
            </div>

            <a href="{{ route('adminDashboard') }}" class="text-light">Voir le Tableau de bord</a>

        </div>
    </div>
    
</div>
@endsection






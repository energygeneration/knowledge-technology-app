@extends('layouts.adminDashboard')
@section('renseignements')
        <div class="bg-dark"  style="margin-top: 4%;">
            <h3 class="text-center">RENSEIGNEMENT DES INTERNAUTES</h3>
            <table >
                    <tr class="bg-danger">
                        <th><h4 class="p-3">nom</h4></th>
                        <th><h4 class="p-3">prenom</h4></th>
                        <th><h4 class="p-3">email</th></th>
                        <th><h4 class="p-3">numeroTel</h4></th>
                        <th><h4 class="p-3">contenu_message</h4></th>
                        <th><h4 class="p-3">Action</h4></th>
                    </tr>

                    @foreach($renseignements as $renseignement)
                    <tr class="bg-info">
                        <th><h4 class="p-3">{{($renseignement->nom)}}</h4></th>
                        <th><h4 class="p-3">{{($renseignement->prenom)}}</h4></th>
                        <th><h4 class="p-3">{{($renseignement->email)}}</th></th>
                        <th><h4 class="p-3">{{($renseignement->numeroTel)}}</th></th>
                        <th><h4 class="p-3">{{($renseignement->contenu_message)}}</th></th>
                        <th><h4 class="p-3"> </th></th>
                    </tr>
                    @endforeach
            </table>
        </div>
@endsection
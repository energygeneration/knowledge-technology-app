@extends('layouts.adminDashboard')
@section('inscrits')
        <div class="bg-dark"  style="margin-top: 4%;">
            <h3 class="text-center">LISTES DES ÉTUDIANTS INSCRITS</h3>
            <table >
                    <tr class="bg-danger">
                        <th><h4 class="p-3">nom</h4></th>
                        <th><h4 class="p-3">prenom</h4></th>
                        <th><h4 class="p-3">date_Naissance</th></th>
                        <th><h4 class="p-3">prefecture</h4></th>
                        <th><h4 class="p-3">sexe</h4></th>
                        <th><h4 class="p-3">numeroTel</h4></th>
                        <th><h4 class="p-3">email</h4></th>
                        <th><h4 class="p-3">fichiers</th></th>
                        <th><h4 class="p-3">filiere</h4></th>
                        <th><h4 class="p-3">Action</h4></th>
                    </tr>

                    @foreach($inscrits as $inscrit)
                    <tr class="bg-info">
                        <th><h4 class="p-3">{{($inscrit->nom)}}</h4></th>
                        <th><h4 class="p-3">{{($inscrit->prenom)}}</h4></th>
                        <th><h4 class="p-3">{{($inscrit->date_Naissance)}}</th></th>
                        <th><h4 class="p-3">{{($inscrit->prefecture)}}</th></th>
                        <th><h4 class="p-3">{{($inscrit->sexe)}}</th></th>
                        <th><h4 class="p-3">{{($inscrit->numeroTel)}}</th></th>
                        <th><h4 class="p-3">{{($inscrit->email)}}</th></th>
                        <th><h4 class="p-3">{{($inscrit->fichiers)}}</th></th>
                        <th><h4 class="p-3">{{($inscrit->filiere)}}</th></th>
                        <th><h4 class="p-3"> </th></th>
                    </tr>
                    @endforeach
            </table>
        </div>
@endsection
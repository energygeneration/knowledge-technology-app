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

                    @foreach($Inscriptions as $Inscription)
                    <tr class="bg-info">
                        <th><h4 class="p-3">{{($Inscription->nom)}}</h4></th>
                        <th><h4 class="p-3">{{($Inscription->prenom)}}</h4></th>
                        <th><h4 class="p-3">{{($Inscription->date_Naissance)}}</th></th>
                        <th><h4 class="p-3">{{($Inscription->prefecture)}}</th></th>
                        <th><h4 class="p-3">{{($Inscription->sexe)}}</th></th>
                        <th><h4 class="p-3">{{($Inscription->numeroTel)}}</th></th>
                        <th><h4 class="p-3">{{($Inscription->email)}}</th></th>
                        <th><h4 class="p-3">{{($Inscription->fichiers)}}</th></th>
                        <th><h4 class="p-3">{{($Inscription->filiere)}}</th></th>
                        <th><h4 class="p-3"> </th></th>
                    </tr>
                    @endforeach
            </table>
        </div>
@endsection
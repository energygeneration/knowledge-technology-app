@extends('layouts.adminDashboard')
@section('inscrits')
        <div class="bg-dark"  style="margin-top: 4%;">
            <h3 class="text-center">LISTES DES √ČTUDIANTS INSCRITS</h3>
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

                    @foreach($nscriptions as $nscription)
                    <tr class="bg-info">
                        <th><h4 class="p-3">{{($inscription->nom)}}</h4></th>
                        <th><h4 class="p-3">{{($inscription->prenom)}}</h4></th>
                        <th><h4 class="p-3">{{($inscription->date_Naissance)}}</th></th>
                        <th><h4 class="p-3">{{($inscription->prefecture)}}</th></th>
                        <th><h4 class="p-3">{{($inscription->sexe)}}</th></th>
                        <th><h4 class="p-3">{{($inscription->numeroTel)}}</th></th>
                        <th><h4 class="p-3">{{($inscription->email)}}</th></th>
                        <th><h4 class="p-3">{{($inscription->fichiers)}}</th></th>
                        <th><h4 class="p-3">{{($inscription->filiere)}}</th></th>
                        <th><h4 class="p-3"> </th></th>
                    </tr>
                    @endforeach
            </table>
        </div>
@endsection
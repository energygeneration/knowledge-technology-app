@extends('layouts.adminDashboard')
@section('content')
<div class="bg-dark"  style="margin-top: 4%;">
            <h3 class="text-center">ICI REPERTORIER TOUS LES UTILISATEURS</h3>
            <table>
                    <tr class="bg-danger">
                        <th><h4 class="p-3">name</h4></th>
                        <th><h4 class="p-3">email</h4></th>
                        <th><h4 class="p-3">password</h4></th>
                        <th><h4 class="p-3">Action</h4></th>
                    </tr>
                        @foreach($users as $user)
                    <tr class="bg-info">
                        <th><h4 class="p-3">{{($user->name)}}</h4></th>
                        <th><h4 class="p-3">{{($user->email)}}</h4></th>
                        <th><h4 class="p-3">{{($user->password)}}</th></th>
                        <th><h4 class="p-3"> </th></th>
                    </tr>
                    @endforeach
            </table>
        </div>
@endsection
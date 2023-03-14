@extends('layouts.app')
@section('content')
<section class="container">
    <div class="text-center">
        <h1>Liste des utilisateurs :</h1>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Numéro</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                </tr>
            </thead>
            @if (count($users) == 0)
                <tr class="text-center text-danger bg-danger">
                    Aucune donnée dans la table
                </tr>
            @endif
            @foreach ($users as $user)
                <tr>
                    <td>
                        {{$user->id}}
                    </td>
                    <td>
                        {{$user->email}}
                    </td>
                    <td>
                        {{$user->password}}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</section>
@endsection
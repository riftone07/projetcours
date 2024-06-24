@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Liste des Employés</h2>
        <table class="table table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Poste</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Jean Dupont</td>
                <td>Développeur</td>
                <td>jean.dupont@example.com</td>
                <td>
                    <button class="btn btn-primary btn-sm">Voir</button>
                    <button class="btn btn-warning btn-sm">Modifier</button>
                    <button class="btn btn-danger btn-sm">Supprimer</button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Marie Curie</td>
                <td>Scientifique</td>
                <td>marie.curie@example.com</td>
                <td>
                    <button class="btn btn-primary btn-sm">Voir</button>
                    <button class="btn btn-warning btn-sm">Modifier</button>
                    <button class="btn btn-danger btn-sm">Supprimer</button>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Louis Pasteur</td>
                <td>Chimiste</td>
                <td>louis.pasteur@example.com</td>
                <td>
                    <button class="btn btn-primary btn-sm">Voir</button>
                    <button class="btn btn-warning btn-sm">Modifier</button>
                    <button class="btn btn-danger btn-sm">Supprimer</button>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Albert Einstein</td>
                <td>Physicien</td>
                <td>albert.einstein@example.com</td>
                <td>
                    <button class="btn btn-primary btn-sm">Voir</button>
                    <button class="btn btn-warning btn-sm">Modifier</button>
                    <button class="btn btn-danger btn-sm">Supprimer</button>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Isaac Newton</td>
                <td>Mathématicien</td>
                <td>isaac.newton@example.com</td>
                <td>
                    <button class="btn btn-primary btn-sm">Voir</button>
                    <button class="btn btn-warning btn-sm">Modifier</button>
                    <button class="btn btn-danger btn-sm">Supprimer</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection


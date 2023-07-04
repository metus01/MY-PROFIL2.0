@extends('users.base')
@section('content')
<div class="container">
    <livewire:create-profil-component :user="$user">
</div>
@endsection

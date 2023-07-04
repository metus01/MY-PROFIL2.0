@extends('users.base')
@section('content')
<div class="container">
    {{ dd($profil) }}
    <livewire:create-profil-component :profil="$profil">
</div>
@endsection

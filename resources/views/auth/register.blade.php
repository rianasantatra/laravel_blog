<x-auth-layout title="Inscription" submitMessage="Inscription" :action='route("register")'>
    <x-input name="name" label="Nom Complet" />
    <x-input name="email" label="Adresse Email" type="email" />
    <x-input name="password" label="Mot de passe" type="password" />
    <x-input name="password_confirmation" label="Confirmation mot de passe" type="password" />
</x-auth-layout>

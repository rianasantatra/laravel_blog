<x-auth-layout title="Connexion" submitMessage="Connexion" :action='route("login")'>
    <x-input name="email" label="Adresse Email" type="email" />
    <x-input name="password" label="Mot de passe" type="password" />
    <div class="flex items-center">
        <input type="checkbox" id="remember" name="remember"
            class="form-checkbox h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
        <label for="remember" class="ml-3 block text-sm leading-6 text-gray-900">Rester Connnecté</label>
    </div>
</x-auth-layout>

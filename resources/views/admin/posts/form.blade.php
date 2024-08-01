<x-default-layout title="Création post">
    <form action="{{ route("admin.posts.store") }}" method="POST">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Créer un post</h2>

                <div class="mt-10 space-y-8 md:w-2/3">
                    <x-input name="title" label="Titre" />
                    <x-input name="slug" label="Slug" help="laisser vide" />
                    <x-textarea name="content" label="Contenue du post"></x-textarea>
                    <x-input name="thumbnail" label="Photo de couverture" type="file" />
                    <x-select name="category_id" label="Catégorie:" :list="$categories" />
                    <x-select name="tag_ids" label="Etiquettes:" :list="$tags" multiple />
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Annuler</button>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Modifier</button>
            </div>
    </form>
</x-default-layout>

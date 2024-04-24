<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Offres') }}
    </h2>
</x-slot>
<div class="p-6 text-gray-900">
    @foreach($offres as $offre)
        {{$offre->domaine}}
        {{$offre->titre}}
        {{$offre->localisation}}
    @endforeach

</div>


<x-layout title="Séries">
    <div class="container-series">
        <a href="/series/criar">Adicionar</a>
        <ul>
            @foreach ($series as $serie)
                <li>{{ $serie->nome }}</li>
            @endforeach
        </ul>
    </div>
    
</x-layout>

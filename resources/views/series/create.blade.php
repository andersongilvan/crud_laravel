<x-layout title="Nova Série">
    <div class="container-form-criar">
        <form action="/series/salvar" method="POST">
            @csrf
            <label for="nome">Nome</label>
            <input id="input-nome" type="text" name="nome">
            <button id="btn" type="submit">Enviar</button>
        </form>
    </div>
</x-layout>
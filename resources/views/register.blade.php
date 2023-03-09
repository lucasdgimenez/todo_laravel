<x-layout page="Login" btnHref="https://google.com.br" btnText="Go to Google">
    <x-slot:btn>
        <a href="{{route('login')}}" class="btn btn-primary">
            login
        </a>
    </x-slot>
    Tela de Cadastro
</x-layout>
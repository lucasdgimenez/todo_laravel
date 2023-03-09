<x-layout page="Login" btnHref="https://google.com.br" btnText="Go to Google">
    <x-slot:btn>
        <a href="{{route('register')}}" class="btn btn-primary">
            Cadastro
        </a>
    </x-slot>

    Tela de login
    <a href="{{route('home')}}">
        Ir para home
    </a>
</x-layout>
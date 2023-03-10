<x-layout page="Criar tarefa" btnHref="https://google.com.br" btnText="Go to Google">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot>

    <section id="create_task_section">
        <h1>Criar tarefa</h1>
        <form>
            
            <x-form.text_input 
                name="title" 
                label="Titulo da task"
                placeholder="Digite o titulo da tarefa"
                required="required"
            />

            <x-form.text_input 
                name="due_date" 
                label="Data de realizacao"
                type="date"
                placeholder="Digite o titulo da tarefa"
                required="required"
            />

            <x-form.select_input 
                name="category" 
                label="Categoria"
                placeholder="Selecione a categoria"
            >
                <option>Outra option</option>
            </x-form.text_input>

            <x-form.textarea_input
                name="description" 
                placeholder="Digite a descrição da tarefa"
            />

            <x-form.form_button
                resetText="Resetar"
                submitText="Criar tarefa"
            />

        </form>
    </section>
  
</x-layout>
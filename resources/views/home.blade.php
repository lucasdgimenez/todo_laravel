<x-layout>
    <x-slot:btn>
        <a href="{{route('task.create')}}" class="btn btn-primary">
            Criar tarefa
        </a>
    </x-slot>
    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do dia</h2>
            <div class="graph_header-line">

            </div>
            <div class="graph_header-date">
                <img src="/assets/images/icon-prev.png" alt="">
                13 Dez
                <img src="/assets/images/icon-next.png" alt="">
            </div>
            
        </div>
        <div class="graph_header-subtitle">
            Tarefas: 3/6
        </div>

        <div class="graph-placeholder">

        </div>

        <div class="tasks_left_footer">
            <img src="/assers/images/icon-info.png" alt=""/>
            Restam 3 tarefas
        </div>
        
    </section>
    <section class="list">
        <div class="list-header">
            <select name="" id="" class="list_header-select">
                <option value="1">Todas as tarefas</option>
            </select>
        </div>

        <div class="task_list">
            
            @foreach($tasks as $task)
            <x-task 
                :data=$task
            />
            @endforeach

        </div>
    </section>
</x-layout>
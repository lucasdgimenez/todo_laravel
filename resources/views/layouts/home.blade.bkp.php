<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <img src="/assets/images/logo.png" alt="">
           Logo
        </div>
        <div class="content">
            <nav>
                <a href="" class="btn btn-primary">Criar tarefa</a>
            </nav>
            <main>
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
                        <div class="task">
                            <div class="title">
                                <input type="checkbox" name="" id=""/>
                                <div class="task_title">Titulo da tarefa</div>
                            </div>

                            <div class="priority">
                                <div class="sphere"></div>
                                <div>Titulo da tarefa</div>
                            </div>

                            <div class="actions">
                                <a href="">
                                    <img src="/assets/images/icon-edit.png" alt="">
                                </a> 
                                <a href="">
                                    <img src="/assets/images/icon-delete.png" alt="">
                                </a> 
                            </div>

                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>

</body>
</html>
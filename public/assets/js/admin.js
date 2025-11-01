// Logout
document.getElementById('logout').addEventListener('click', () => {
    alert('Logout realizado!');
});

// Funções para alternar entre tabela e formulário
function showTable(section) {
    const table = document.getElementById(`table-${section}`);
    const form = document.getElementById(`form-${section}`);
    
    // Função auxiliar para deixar a primeira letra maiúscula
    
    function capitalize(str) {
        return str.charAt(0).toUpperCase() + str.slice(1);
    }
    
    if (table) table.style.display = 'table';
    if (form) {
        form.style.display = 'none';
        form.reset();
        // Se existir um campo hidden com ID
        const idField = form.querySelector('[name^="id_"]');
        if (idField) {
            idField.value = '';
        }

        // Se existir um botão de submit, redefine o texto
        const submitButton = form.querySelector('button[type="submit"]');
        if (submitButton) {
            submitButton.textContent = 'Salvar';
        }

        // Monta a rota automaticamente a partir do nome do section
        form.action = `index.php?url=${section}/inserir${capitalize(section)}`;
    }
}
function showForm(section) {
    const table = document.getElementById(`table-${section}`);
    const form = document.getElementById(`form-${section}`);
    if (table) table.style.display = 'none';
    if (form) form.style.display = 'block';
}
// Inicialmente mostrar todas tabelas
//['clientes', 'funcionarios', 'especialidades', 'servicos', 'agendamentos'].forEach(showTable);

//Clique em cadastar

function cadastarCliente() {
    const form = document.getElementById('form-clientes');
    form.reset();
    
    form.querySelector('[name="id_cliente"]').value = '';
    form.querySelector('button[type="submit"]').textContent = 'Salvar';
    form.action = 'index.php?url=cliente/inserirCliente';
    showForm('clientes');
}

function cadatrarAgendamento() {
    const form = document.getElementById('form-agendamentos');
    form.reset();
    
    form.querySelector('[name="id_agendamento"]').value = '';
    form.querySelector('button[type="submit"]').textContent = 'Salvar';
    form.action = 'index.php?url=agendamento/inserirAgendamento';
    showForm('agendamentos');
}

function cadastrarEspecialidade() {
    const form = document.getElementById('form-especialidades');
    form.reset();
    
    form.querySelector('[name="id_especialidade"]').value = '';
    form.querySelector('button[type="submit"]').textContent = 'Salvar';
    form.action = 'index.php?url=especialidade/inserirEspecialidade';
    showForm('especialidades');
}

function cadastrarFuncionario() {
    const form = document.getElementById('form-funcionarios');
    form.reset();
    
    form.querySelector('[name="id_funcionario"]').value = '';
    form.querySelector('button[type="submit"]').textContent = 'Salvar';
    form.action = 'index.php?url=funcionario/inserirFuncionario';
    showForm('funcionarios');
}

function cadastrarServico() {
    const form = document.getElementById('form-servico');
    form.reset();
    
    form.querySelector('[name="id_servico"]').value = '';
    form.querySelector('button[type="submit"]').textContent = 'Salvar';
    form.action = 'index.php?url=servico/inserirServico';
    showForm('servico');
}

//clique em alterar
function editarCliente(link) {
    const form = document.getElementById('form-clientes');
    form.querySelector('[name="id_cliente"]').value = link.dataset.id;
    form.querySelector('[name="nome_cliente"]').value = link.dataset.nome;
    form.querySelector('[name="telefone_cliente"]').value = link.dataset.telefone;
    form.querySelector('[name="email_cliente"]').value = link.dataset.email;
    form.querySelector('[name="data_nasc_cliente"]').value = link.dataset.dataNascimento;
    form.querySelector('[name="status_cliente"]').value = link.dataset.status;
    
    form.querySelector('button[type="submit"]').textContent = 'Atualizar';
    form.action = 'index.php?url=cliente/atualizarCliente';
    
    showForm('clientes');
}

function editarAgendamento(link) {
    const form = document.getElementById('form-agendamentos');
    form.querySelector('[name="id_agendamento"]').value = link.dataset.id;
    form.querySelector('[name="id_cliente"]').value = link.dataset.cliente;
    form.querySelector('[name="id_funcionario"]').value = link.dataset.funcionario;
    form.querySelector('[name="id_servico"]').value = link.dataset.servico;
    form.querySelector('[name="data_agendamento"]').value = link.dataset.data;
    form.querySelector('[name="hora_agendamento"]').value = link.dataset.hora;
    form.querySelector('[name="status_agendamento"]').value = link.dataset.status;
    form.querySelector('[name="observacao_agendamento"]').value = link.dataset.observacao;

    form.querySelector('button[type="submit"]').textContent = 'Atualizar';
    form.action = 'index.php?url=agendamento/atualizarAgendamento';

    showForm('agendamentos');
}

function editarEspecialidade(link) {
    const form = document.getElementById('form-especialidades');
    form.querySelector('[name="id_especialidade"]').value = link.dataset.id;
    form.querySelector('[name="nome_especialidade"]').value = link.dataset.nome;
    form.querySelector('[name="descricao_especialidade"]').value = link.dataset.descricao;
    form.querySelector('[name="status_especialidade"]').value = link.dataset.status;

    form.querySelector('button[type="submit"]').textContent = 'Atualizar';
    form.action = 'index.php?url=especialidade/atualizarEspecialidade';
    
    showForm('especialidades');
}

function editarFuncionario(link) {
    const form = document.getElementById('form-funcionarios');

    form.querySelector('[name="id_funcionario"]').value = link.dataset.id;
    form.querySelector('[name="nome_funcionario"]').value = link.dataset.nome;
    form.querySelector('[name="telefone_funcionario"]').value = link.dataset.telefone;
    form.querySelector('[name="email_funcionario"]').value = link.dataset.email;
    form.querySelector('[name="cargo_funcionario"]').value = link.dataset.cargo;
    form.querySelector('[name="status_funcionario"]').value = link.dataset.status;
  
    form.querySelector('button[type="submit"]').textContent = 'Atualizar';
    form.action = 'index.php?url=funcionario/atualizarFuncionario';

    showForm('funcionarios'); 
}


function editarServico(link) {
    const form = document.getElementById('form-servico');
    form.querySelector('[name="id_servico"]').value = link.dataset.id;
    form.querySelector('[name="nome_servico"]').value = link.dataset.nome;
    form.querySelector('[name="descricao_servico"]').value = link.dataset.descricao;
    form.querySelector('[name="duracao_servico"]').value = link.dataset.duracao;
    form.querySelector('[name="preco_servico"]').value = link.dataset.preco;
    form.querySelector('[name="id_especialidade"]').value = link.dataset.especialidade;
    form.querySelector('[name="status_servico"]').value = link.dataset.status;
    
    form.querySelector('button[type="submit"]').textContent = 'Atualizar';
    form.action = 'index.php?url=servico/atualizarServico';
    
    showForm('servico');
}

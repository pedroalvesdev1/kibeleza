// Logout
document.getElementById('logout').addEventListener('click', () => {
    alert('Logout realizado!');
});

// Funções para alternar entre tabela e formulário
function showTable(section) {
    const table = document.getElementById(`table-${section}`);
    const form = document.getElementById(`form-${section}`);
    if (table) table.style.display = 'table';
    if (form) form.style.display = 'none';
}
function showForm(section) {
    const table = document.getElementById(`table-${section}`);
    const form = document.getElementById(`form-${section}`);
    if (table) table.style.display = 'none';
    if (form) form.style.display = 'block';
}
// Inicialmente mostrar todas tabelas
['clientes','funcionarios','especialidades','servicos','agendamentos'].forEach(showTable);
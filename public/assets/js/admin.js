const menuItems = document.querySelectorAll('.menu li');
const screens = document.querySelectorAll('.screen');

menuItems.forEach(item => {
    item.addEventListener('click', () => {
        const screenId = item.getAttribute('data-screen');
        screens.forEach(screen => screen.classList.remove('active'));
        document.getElementById(screenId).classList.add('active');

        //mostrar tela por padrão
        showTable(screenId)
    });
});
// logout

document.getElementById('logout').addEventListener('click', () => {
    alert('Logout realizado!')
});

//funçoes para alternar entre tabela e formulario

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

//inicializante mostrar todas tabelas
['clientes', 'funcionarios', 'especialidades', 'servicos', 'agendamento'].forEach(showTable);
const tabela = document.getElementById("tabelaClientes");
const form = document.getElementById("formCliente");

async function carregarClientes() {
    const resposta = await fetch("php/listar.php");
    const clientes = await resposta.json();

    tabela.innerHTML = "";

    clientes.forEach(cliente => {
        tabela.innerHTML += `
            <tr>
                <td>${cliente.id}</td>
                <td>${cliente.nome}</td>
                <td>${cliente.email}</td>
                <td>${cliente.telefone}</td>
                <td>
                    <button class="btn-editar" onclick="editar(
                        ${cliente.id},
                        '${cliente.nome}',
                        '${cliente.email}',
                        '${cliente.telefone}'
                    )">
                        Editar
                    </button>

                    <button class="btn-excluir" onclick="excluir(${cliente.id})">
                        Excluir
                    </button>
                </td>
            </tr>
        `;
    });
}

form.addEventListener("submit", async function(evento) {
    evento.preventDefault();

    const dados = new FormData(form);
    const id = document.getElementById("id").value;

    let url = "php/inserir.php";

    if (id !== "") {
        url = "php/editar.php";
    }

    const resposta = await fetch(url, {
        method: "POST",
        body: dados
    });

    const resultado = await resposta.json();

    alert(resultado.mensagem);

    form.reset();
    document.getElementById("id").value = "";

    carregarClientes();
});

function editar(id, nome, email, telefone) {
    document.getElementById("id").value = id;
    document.getElementById("nome").value = nome;
    document.getElementById("email").value = email;
    document.getElementById("telefone").value = telefone;
}

async function excluir(id) {
    if (confirm("Deseja excluir este cliente?")) {
        const dados = new FormData();
        dados.append("id", id);

        const resposta = await fetch("php/excluir.php", {
            method: "POST",
            body: dados
        });

        const resultado = await resposta.json();

        alert(resultado.mensagem);

        carregarClientes();
    }
}

carregarClientes();
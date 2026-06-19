const tabela = document.getElementById("tabelaCliente");

function editar(id, nome, email, telefone){
    document.getElementById("id").value = id;
    document.getElementById("nome").value = nome;
    document.getElementById("email").value = email;
    document.getElementById("telefone").value = telefone;
}

function excluir(id){
    if(confirm("Deseja excluir este cliente?")){
        alert("excluir cliente ID: " + id);

        //depois vou chamar:
        //fetch("php/excluir.php?id=" + id)
    }
}

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
                    <button onclick="editar(
                        ${cliente.id},
                        '${cliente.nome}',
                        '${cliente.email}',
                        '${cliente.telefone}'
                    )">
                        Editar
                    </button>

                    <button onclick="excluir(${cliente.id})">
                        Excluir
                    </button>
                </td>
            </tr>
        `;
    });
}

carregarClientes();
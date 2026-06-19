<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro de Cliente</h1>
   
        <!--abaixo criado o formulario onde vai adicionar um cliente ao bd-->

       <form id="formCliente">
            <input type="text" id="nome" placeholder="Nome do Cliente" require>
            
            <input type="email" id="email" placeholder="Digite o e-mail" require>
           
            <input type="text" id="telefone" placeholder="Digite o telefone" require>

            <button type="submit" class="btn-salvar"> Salvar Cliente</button>
        </form>
        
     <!--Aqui foi feito uma tabala dos clientes adicionados, para mostrar como está funcional-->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody id="tabelaCliente"></tbody>
        </table>
    </div>

   <script src="js/script.js"></script>
</body>
</html>
# Diagrama de Casos de Uso

## Lista de Casos de Uso

 - [CDU 01.Cadastro](#CDU-01-Cadastro): Cadastro
 - [CDU 02.Login](#CDU-02-Login): Login
 - [CDU 03.Esqueceu Senha](#CDU-03-Esqueceu-a-Senha): Esqueceu Senha
 - [CDU 04.Deslogar](#CDU-04-Deslogar): Deslogar

 - [CDU 05.Alterar Email](#CDU-05-Alterar-Email): Alterar Email
 - [CDU 06.Alterar Senha](#CDU-06-Alterar-Senha): Alterar Senha
 - [CDU 07.Excluir Conta](#CDU-07-Apagar-Conta): Apagar Conta

 - [CDU 08.Visualizar Produto](#CDU-08-Visualizar-Produto): Visualizar Produto
 - [CDU 09.Adicionar Produto ao Carrinho](#CDU-09-Adicionar-Produto-ao-Carrinho): Adicionar Produto ao Carrinho
 - [CDU 10.Comprar Carrinho](#CDU-10-Comprar-Carrinho): Comprar Carrinho
<!-- - [CDU 11.Visualizar Produto Comprado](#CDU-11-Visualizar-Produto-Comprado): Visualizar Produto Comprado -->

 - [CDU 11.Visualizar Todo Produto Comprado](#CDU-12-Visualizar-Todo-Produto-Comprado): Visualizar Todo Produto Comprado
 - [CDU 12.Visualizar Todo Usuário Cadastrado](#CDU-13-Visualizar-Todo-Usuário-Cadastrado): Visualizar Todo Usuário Cadastrado

 - [CDU 13.Atualizar Email Usuário](#CDU-14-Atualizar-Email-de-Usuário): Atualizar Email Usuário 
 - [CDU 14.Excluir Conta Usuário](#CDU-15-Excluir-Conta): Excluir Conta Usuário
 - [CDU 15.Promover Usuário à Administrador](#CDU-16-Promover-Usuário-à-Administrador): Promover Usuário à Administrador

 - [CDU 16.Criar Categoria](#CDU-17-Criar-Categoria): Criar Categoria
 - [CDU 17.Atualizar Categoria](#CDU-18-Atualizar-Categoria): Atualizar Categoria
 - [CDU 18.Criar Produto](#CDU-19-Criar-Produto): Criar Produto
 - [CDU 19.Atualizar Produto](#CDU-20-Atualizar-Produto): Atualizar Produto
 - [CDU 20.Adicionar Quantidade do Produto em Estoque](#CDU-21-Adicionar-Quantidade-do-Produto-em-Estoque): Adicionar Quantidade do Produto em Estoque
 - [CDU 21.Reduzir Quantidade do Produto em Estoque](#CDU-22-Reduzir-Quantidade-do-Produto-em-Estoque): Reduzir Quantidade do Produto em Estoque

<!-- Antigos CDUs
 - [CDU 01](#CDU-01-Fazer-Cadastro): Fazer Cadastro
 - [CDU 02](#CDU-02-Fazer-Login): Fazer Login 
 - [CDU 03](#CDU-03-Cadastrar-Categoria): Adm-Cadastrar Categoria
 - [CDU 04](#CDU-04-Atualizar-Categoria): Adm-Atualizar Categoria
 - [CDU 05](#CDU-05-Cadastrar-Produto): Adm-Cadastrar Produto
 - [CDU 06](#CDU-06-Atualizar-Produto): Adm-Atualizar Produto
 - [CDU 07](#CDU-07-Adicionar-Quantidade-de-Produto-em-Estoque): Adm-Adicionar Quantidade de Produto em Estoque
 - [CDU 08](#CDU-08-Remover-Quantidade-de-Produto-em-Estoque): Adm-Remover Quantidade de Produto em Estoque
 - [CDU 10](#CDU-10-Atualizar-Cliente): User-Atualizar Cliente
 - [CDU 13](#CDU-13-Adicionando-Produtos-no-Carrinho): User-Adicionando Produtos no Carrinho
 - [CDU 14](#CDU-14-Reduzir-Quantidade-do-Produto-no-Carrinho): User-Reduzir Quantidade do Produto no Carrinho
 - [CDU 15](#CDU-15-Aumentar-Quantidade-do-Produto-no-Carrinho): User-Aumentar Quantidade do Produto no Carrinho
 - [CDU 16](#CDU-16-Finalizar-Compra): User-Finalizar Compra
-->

## Lista de Atores
 - Visitante
 - Cliente
 - Adminstrador

## Diagrama de Casos de Uso
   ![CasosDeUso](/docs/CasosDeUsoImagens/CasosDeUso.png)

## Descrição dos Casos de Uso
 - [CDU 01](#CDU-01-Cadastro): O visitante realiza seu cadastro de cliente
 - [CDU 02](#CDU-02-Login): O visitante realiza seu login
 - [CDU 03](#CDU-03-Esqueceu-a-Senha): O visitante faz pedido de nova senha
 - [CDU 04](#CDU-04-Deslogar): O usuário finaliza sua sessão
 - [CDU 05](#CDU-05-Alterar-Email): O usuário altera seu email
 - [CDU 06](#CDU-06-Alterar-Senha): O usuário altera sua senha
 - [CDU 07](#CDU-07-Apagar-Conta): O usuário exclui sua conta
 - [CDU 08](#CDU-08-Visualizar-Produto): A pessoa visualiza produto do catálogo
 - [CDU 09](#CDU-09-Adicionar-Produto-ao-Carrinho): O usuário adiciona produto no seu carrinho
 - [CDU 10](#CDU-10-Comprar-Carrinho): O usuário compra seu carrinho
<!-- - [CDU 11](#CDU-11-Visualizar-Produto-Comprado): O usuário visualiza seus produtos já comprados -->
 - [CDU 11](#CDU-12-Visualizar-Todo-Produto-Comprado): O administrador visualiza todo produtos já comprado
 - [CDU 12](#CDU-13-Visualizar-Todo-Usuário-Cadastrado): O administrador visualiza todo usuário cadastrado
 - [CDU 13](#CDU-14-Atualizar-Email-de-Usuário): O administrador atualiza email de usuário
 - [CDU 14](#CDU-15-Excluir-Conta): O administrador exclui conta de usuário
 - [CDU 15](#CDU-16-Promover-Usuário-à-Administrador): O administrador promove a conta a administrador
 - [CDU 16](#CDU-17-Criar-Categoria): O administrador cria categoria
 - [CDU 17](#CDU-18-Atualizar-Categoria): O administrador atualiza categoria
 - [CDU 18](#CDU-19-Criar-Produto): O administrador cria produto
 - [CDU 19](#CDU-20-Atualizar-Produto): O administrador atualiza produto
 - [CDU 20](#CDU-21-Adicionar-Quantidade-do-Produto-em-Estoque): O administrador adiciona quantide do produto em estoque
 - [CDU 21](#CDU-22-Reduzir-Quantidade-do-Produto-em-Estoque): O administrador reduz quantide do produto em estoque

<!-- Antiga descrição dos CDUs
       1. O visitante se cadastra como cliente
       2. O visitante realiza o seu login.
       3. O cliente pesquisa por produtos.
       4. O cliente pesquisa usando categorias.
       5. O cliente adiciona produtos ao seu carrinho.
       6. O cliente visualiza seu carrinho.
       7. O cliente compra o seu carrinho.
       8. O cliente visualisa todas as sua compras já realizadas.
       9. O administrador cadastra outro aministrador.
       10. O adminstrador cadastra categorias;
       11. O aminsitrador atualiza categorias.
       12. O aministraador cadastra produtos.
       13. O administrador atualiza produtos.
       14. O aministrador visualiza as compras de todos os cliente.
-->

#### CDU-01 Cadastro
 - Fluxo Principal
      ![cadastroFP](/docs/CasosDeUsoImagens/cadastroFP.png)
       1. O sistema exibe o formulário solicitando nome, sobrenome, e-mail, senha e confirmação de senha.
       2. O visitante preenche as credencias solicitadas.
       3. O sistema verifica se o e-mail está cadastrado.
       4. O sistema cadastra os dados no Banco de Dados.
       5. O sistema retorna a mensagem: o cadastro foi finalizado com sucesso.
       6. O sistema direciona o usuário para a página de login.

 - Fluxo Alternativo A - Caso o email já esteja cadastrado
      ![cadastroFAa](/docs/CasosDeUsoImagens/cadastroFAa.png)
       1. O sistema exibe o formulário solicitando nome, sobrenome, e-mail, senha e confirmação de senha.
       2. O visitante preenche as credencias solicitadas.
       3. O sistema verifica se o e-mail está cadastrado.
       4. O sistema retorna a mensagem: o e-mail de já está cadastrado.
       5. O sistema sugere tentar novamente.

 - Fluxo Alternativo B - Caso as senhas não coincidem
      ![cadastroFAb](/docs/CasosDeUsoImagens/cadastroFAb.png)
       1. O sistema exibe o formulário solicitando nome, sobrenome, e-mail, senha e confirmação de senha.
       2. O visitante preenche as credencias solicitadas. 
       3. O sistema verifica se o e-mail está cadastrado.
       4. O sistema retorna a mensagem: as senhas não coicidem.
       5. O sistema sugere tentar novamente.

#### CDU-02. Login
 - Fluxo Principal
      ![loginFP](/docs/CasosDeUsoImagens/loginFP.png)
       1. O sistema exibe o formulário solicitando e-mail e senha.
       2. O usuário preenche as credencias solicitadas.
       3. O sistema verifica compatibilidade com o Banco de Dados.
       4. O sistema autentica o usuário.
       5. O sistema direciona o usuário para a página principal da loja.

 - Fluxo Alternativo A - Caso o e-mail não esteja cadastrado
      ![loginFAb](/docs/CasosDeUsoImagens/loginFAb.png)
       1. O sistema exibe o formulário solicitando e-mail e senha.
       2. O usuário preenche as credencias solicitadas.
       3. O sistema verifica compatibilidade com o Banco de Dados.
       4. O sistema retorna a mensagem: o email ou a senha está incorreto(a).

 - Fluxo Alternativo B - Caso a Senha esteja incorreta
      ![loginFAb](/docs/CasosDeUsoImagens/loginFAb.png)
       1. O sistema exibe o formulário solicitando e-mail e senha.
       2. O usuário preenche as credencias solicitadas.
       3. O sistema verifica compatibilidade com o Banco de Dados.
       4. O sistema retorna a mensagem: o email ou a senha está incorreto(a).

### CDU-03. Esqueceu Senha
 - Fluxo Principal
      ![esqueceusenhaFP](/docs/CasosDeUsoImagens/esqueceusenhaFP.png)
       1. O sistema exibe um formulário solicitando email e senha.
       2. O usuário preenche as credenciais solicitadas.
       3. O sistema verifica compatibilidade com o banco de dados.
       4. O sistema envia um token ao email.
       5. O sistema exibe um formulário solicitando email e o token.
       6. O usuário preenche as credenciais solicitadas.
       7. O sistema direciona o usuário para a página alterar senha.
       8. O sistema exibe o formulário solicitando senha e confirmação de senha.
       9. O usuário preenche as credenciais solicitadas.
       10. O sistema salva as alterações no banco de dados.

 - Fluxo Alternativo A - Caso email e nome não coincidam
      ![esqueceusenhaFAa](/docs/CasosDeUsoImagens/esqueceusenhaFAa.png)
       1. O sistema exibe um formulário solicitando email e senha.
       2. O usuário preenche as credenciais solicitadas.
       3. O sistema verifica compatibilidade com o banco de dados.
       4. O sistema não encontra compatibilidade entre email e nome com o banco de dados.
       5. O sistema solicita tentar novamente.

- Fluxo Alternativo B - Caso email e token não coicidam
      ![esqueceusenhaFAb](/docs/CasosDeUsoImagens/esqueceusenhaFAb.png)
       1. O sistema exibe um formulário solicitando email e senha.
       2. O usuário preenche as credenciais solicitadas.
       3. O sistema verifica compatibilidade com o banco de dados.
       4. O sistema envia um token ao email.
       5. O sistema exibe um formulário solicitando email e o token.
       6. O usuário preenche as credenciais solicitadas.
       7. O sistema não encontra compatibilide entre email e token.
       8. O sistema solicita tentar novamente.

 - Fluxo Alternativo C - Caso senha e confirmação de senha não coincidam
      ![esqueceusenhaFAc](/docs/CasosDeUsoImagens/esqueceusenhaFAc.png)
       1. O sistema exibe um formulário solicitando email e senha.
       2. O usuário preenche as credenciais solicitadas.
       3. O sistema verifica compatibilidade com o banco de dados.
       4. O sistema envia um token ao email.
       5. O sistema exibe um formulário solicitando email e o token.
       6. O usuário preenche as credenciais solicitadas.
       7. O sistema exibe a página de alterar senha.
       8. O sistema exibe o formulário solicitando senha e confirmação de senha.
       9. O usuário preenche as credenciais solicitadas.
       10. O sistema não encontra compatibilidade entre senha e confirmação de senha.
       11. O sistema solicita tentar novamente.

### CDU-04. Deslogar
 - Fluxo Principal
      ![deslogarFP](/docs/CasosDeUsoImagens/deslogarFP.png)
       1. O sistema exibe o menu de opções.
       2. O usuário seleciona deslogar.
       3. O sistema finaliza a sessão atual do usuário.
       4. O sistema direciona o visitante para a página principal

### CDU-05 Alterar Email
 - Fluxo Principal
      ![alteraremailFP](/docs/CasosDeUsoImagens/alteraremailFP.png)
       1. O sistema exibe o página alterar email
       2. O sistema exibe um formulário solicitando novo email e senha.
       3. O usuário preenche as credenciais solicitadas.
       4. O sistema verifica compatibilidade com o Banco de Dados.
       5. O sistema salva as alterações no banco de dados.
       5. O sistema finaliza a sessão do usuário.
       6. O sistema redireciona o visitante para a página de login.

 - Fluxo Alternativo A - Caso email e senha incompatíveis
      ![alteraremailFAa](/docs/CasosDeUsoImagens/alteraremailFAa.png)
       1. O sistema exibe o página alterar email
       2. O sistema exibe um formulário solicitando novo email e senha.
       3. O usuário preenche as credenciais solicitadas.
       4. O sistema verifica compatibilidade com o Banco de Dados. 
       5. O sistema não encontra compatibilidade entre email e senha no banco de dados.
       6. O sistema exibe a mensagem: Senha incompatível.
       6. O sistema solicita tentar novamente.

 - Fluxo Alternativo B - Caso novo email ja esteja registrado no banco de dados
      ![alteraremailFAb](/docs/CasosDeUsoImagens/alteraremailFAb.png)
       1. O sistema exibe o página alterar email
       2. O sistema exibe um formulário solicitando novo email e senha.
       3. O usuário preenche as credenciais solicitadas.
       4. O sistema verifica compatibilidade com o Banco de Dados. 
       5. O sistema encontra o novo email ja registrado no banco de dados.
       6. O sistema exibe a mensagem: Email já cadastrado.
       6. O sistema soiicita tentar novamente.

### CDU-06 Alterar Senha
 - Fluxo Principal
      ![alterarsenhaFP](/docs/CasosDeUsoImagens/alterarsenhaFP.png)
       1. O sistema exibe o página alterar senha
       2. O sistema exibe um formulário solicitando nova senha e confirmação de nova senha.
       3. O usuário preenche as credenciais solicitadas.
       4. O sistema salva as alterações no banco de dados.
       5. O sistema finaliza a sessão do usuário.
       6. O sistema redireciona o visitante para a página de login.

 - Fluxo Alternativo A - Caso nova senha e confirmação de nova senha sejam incompatíveis
      ![alterarsenhaFAa](/docs/CasosDeUsoImagens/alterarsenhaFAa.png)
       1. O sistema exibe o página alterar senha
       2. O sistema exibe um formulário solicitando nova senha e confirmação de nova senha.
       3. O usuário preenche as credenciais solicitadas.
       4. O sistema exibe a mensagem: nova senha e confirmação de nova senha são incompatíveis.
       5. O sistema sugere tentar novamente.

### CDU-07 Excluir Conta
 - Fluxo Principal
      ![excluircontaFP](/docs/CasosDeUsoImagens/excluircontaFP.png)
       1. O sistema exibe a confirmação de exclusão de conta.
       2. O usuário confirma a exclusão de conta.
       3. O sistema exclui todos os dados do usuário registrados no banco de dados.
       4. O sistema redireciona o visitante para a página principal.

 - Fluxo Alternativo A - O usuário não confirma a exclusão de conta
      ![excluircontaFAa](/docs/CasosDeUsoImagens/excluircontaFAa.png)
       1. O sistema exibe a confirmação de exclusão de conta.
       2. O usuário não confirma a exclusão de conta.
       3. O sistema mantém os dados inalterados.
       4. O sistema direciona o usuário para a página perfil.

### CDU-08 Visualizar Produto
 - Fluxo Principal
      ![visualizarprodutoFP](/docs/CasosDeUsoImagens/visualizarprodutoFP.png)
       1. O sistema exibe a página principal.
       2. O usuário seleciona um produto.
       3. O sistema direciona o usuário para a página do produto selecionado.

### CDU-09 Adicionar Produto ao Carrinho
 - Fluxo Principal
      ![adicionarprodutoaocarrinhoFP](/docs/CasosDeUsoImagens/adicionarprodutoaocarrinhoFP.png)
       1. O sistema exibe o produto selecionado pelo usuário.
       2. O usuário seleciona quantidade do produto.
       3. O usuário seleciona adicionar produto ao carrinho.
       4. O sistema salva na tabela produtocompra(carrinho) do banco de dados do usuário logado o id do produto, id da compra e quantidade do produto selecionado pelo usuário.
       5. O sistema direciona o usuário para a página carrinho.

 - Fluxo Alternativo A - Usuário não seleciona quantidade do produto
      ![adicionarprodutoaocarrinhoFAa](/docs/CasosDeUsoImagens/adicionarprodutoaocarrinhoFAa.png)
       1. O sistema exibe o produto selecionado pelo usuário.
       2. O usuário seleciona adicionar produto ao carrinho.
       3. O sistema seleciona 1(um) unidade do produto.
       4. O sistema salva na tabela produtocompra(carrinho) do banco de dados do usuário logado o id do produto, id da compra e quantidade do produto selecionado pelo usuário.
       5. O sistema direciona o usuário para a página carrinho.

 ### CDU-10 Comprar Carrinho
 - Fluxo Principal
      ![comprarcarrinhoFP](/docs/CasosDeUsoImagens/comprarcarrinhoFP.png)
       1. O sistema exibe a página carrinho.
       2. O sistema exibe todo produto registrado na tabela produtocompra(carrinho) do banco de dados do usuário logado.
       3. O sistema calcula e exibe o valor total de todo produto registrado na tabela produtocompra(carrinho) do banco de dados do usuário logado.
       4. O usuário seleciona comprar carrinho.
       5. O sistema salva na tabela compra do banco de dados do usuário logado o id da compra, id do usuário logado e data presente.
       6. O sistema direciona o usuário para a página produtos comprados.

 - Fluxo Alternativo A - O usuário remove produto do carrinho
      ![comprarcarrinhoFP](/docs/CasosDeUsoImagens/comprarcarrinhoFAa.png)
       1. O sistema exibe a página carrinho.
       2. O sistema exibe todo produto registrado na tabela produtocompra(carrinho) do banco de dados do usuário logado.
       3. O sistema calcula e exibe o valor total de todo produto registrado na tabela produtocompra(carrinho) do banco de dados do usuário logado.
       4. O usuário seleciona remover produto de algum produto do carrinho.
       5. O sistema remove na tabela produtocompra(carrinho) do banco de dados do usuário logado o id do produto, id da compra e quantidade total do produto selecionado pelo usuário.
       6. O sistema recarrega a página carrinho.

<!--
### CDU-11 Visualizar Produto Comprado
 - Fluxo Principal
      ![visualizarprodutocompradoFP](/docs/CasosDeUsoImagens/visualizarprodutocompradoFP.png)
       1. O sistema exibe a página produtos comprados.
       2. O sistema apresenta todo produto comprado e registrado na tabela compra do usuário logado na sessão.
-->

### CDU-11 Visualizar Todo Produto Comprado
 - Fluxo Principal
      ![visualizartodoprodutocompradoFP](/docs/CasosDeUsoImagens/visualizartodoprodutocompradoFP.png)
       1. O sistema exibe a página produtos comprados.
       2. O sistema apresenta todo produto comprado e registrado na tabela compra de todo usuário registrado na tabela usuário.

### CDU-12 Visualizar Todo Usuário Cadastrado
 - Fluxo Principal
      ![visualizartodousuariocompradoFP](/docs/CasosDeUsoImagens/visualizartodousuarioFP.png)
       1. O sistema exibe a página gerenciamento de usuário.
       2. O sistema exibe todo usuário registrado na tabela usuário.

### CDU-13 Atualizar Email Usuário
 - Fluxo Principal
      ![atualizaremailusuarioFP](/docs/CasosDeUsoImagens/atualizaremailusuárioFP.png)
       1. O sistema exibe a página gerenciamento de usuário.
       2. O sistema exibe todo usuário registrado na tabela usuário.
       3. O administrador seleciona editar de um usuário registrado na tabela usuário
       4. O administrador preenche o novo email.
       5. O administrador salva.
       5. O sistema salva a alteração do usuário tabela usuário.
       6. O sistema recarrega a pagina gerenciamento de usuário.

 - Fluxo Alternativo A - O administrador não salva a alteração
      ![atualizaremailusuarioFAa](/docs/CasosDeUsoImagens/atualizaremailusuárioFAa.png)
       1. O sistema exibe a página gerenciamento de usuário.
       2. O sistema exibe todo usuário registrado na tabela usuário.
       3. O administrador seleciona editar de um usuário registrado na tabela usuário
       4. O administrador preenche o novo email.
       5. O sistema mantém o dado inalterado.

### CDU-14 Excluir Conta Usuário
 - Fluxo Principal
      ![excluircontausuarioFP](/docs/CasosDeUsoImagens/excluircontausuarioFP.png)
       1. O sistema exibe a página gerenciamento de usuário.
       2. O sistema exibe todo usuário registrado na tabela usuário.
       3. O administrador seleciona excluir usuário de um usuário registrado na tabela usuário.
       4. O sistema exibe a confirmação da exclusão de usuário.
       5. O administrador confirma a exclusão de usuário.
       6. O sistema exclui todos os dados do usuário registrados no banco de dados.
       7. O sistema recarrega a pagina gerenciamento de usuário.

 - Fluxo Alternativo A - O administrador não confirma a exclusão de usuário
      ![excluircontausuarioFAa](/docs/CasosDeUsoImagens/excluircontausuarioFAa.png)
       1. O sistema exibe a página gerenciamento de usuário.
       2. O sistema exibe todo usuário registrado na tabela usuário.
       3. O administrador seleciona excluir usuário de um usuário registrado na tabela usuário.
       4. O sistema exibe a confirmação da exclusão de usuário.
       5. O administrador não confirma a exclusão de usuário.
       6. O sistema mantém os dados inalterados.

### CDU-15 Promover Usuário à Administrador
 - Fluxo Principal
      ![promoverusuarioaadministradorFP](/docs/CasosDeUsoImagens/promoverusuarioaadministradorFP.png)
       1. O sistema exibe a página gerenciamento de usuário.
       2. O sistema exibe todo usuário registrado na tabela usuário.
       3. O administrador seleciona tornar administrador de um usuário registrado na tabela usuário.
       4. O sistema exibe a confirmação para tornar o usuário em administrador.
       5. O administrador confirma.
       6. O sistema altera isAdmin de usuário para TRUE.
       7. O sistema recarrega a pagina gerenciamento de usuário.

 - Fluxo Alternativo A - O administrador não confirma tornar usuário em administrador
      ![promoverusuarioaadministradorFAa](/docs/CasosDeUsoImagens/promoverusuarioaadministradorFAa.png)
       1. O sistema exibe a página gerenciamento de usuário.
       2. O sistema exibe todo usuário registrado na tabela usuário.
       3. O administrador seleciona tornar administrador de um usuário registrado na tabela usuário.
       4. O sistema exibe a confirmação para tornar o usuário em administrador.
       5. O administrador não confirma.
       6. O sistema mantém os dados inalterados.

### CDU-16 Criar Categoria
 - Fluxo Principal
      ![criarcategoriaFP](/docs/CasosDeUsoImagens/criarcategoriaFP.png)
       1. O sistema exibe a página criar categoria.
       2. O sistema exibe o formulário de criação de categoria.
       3. O administrador insere o dado, nome. 
       4. O administrador confirma a criação de categoria.
       5. O sistema verifica se a categoria já está cadastrada.
       6. O sistema salva os dados na tabela categoria do banco de dados.
       7. O sistema redireciona o administrador para a página criação de produto.

 - Fluxo Alternativo A - O administrador não insere todos os dados no formulário
      ![criarcategoriaFAa](/docs/CasosDeUsoImagens/criarcategoriaFAa.png)
       1. O sistema exibe a página criar categoria.
       2. O sistema exibe o formulário de criação de categoria.
       3. O administrador incompletamente insere os dados.
       4. O administrador confirma a criação de categoria.
       5. O sistema verifica se a categoria já está cadastrada.
       6. O sistema apresenta a mensangem que faltam dados no formulário.
       7. O sistema sugere tentar novamente.

 - Fluxo Alternativo B - O administrador não confirma a criação de categoria
      ![criarcategoriaFAb](/docs/CasosDeUsoImagens/criarcategoriaFAb.png)
       1. O sistema exibe a página criar categoria.
       2. O sistema exibe o formulário de criação de categoria.
       3. O administrador insere o dado, nome. 
       4. O administrador não confirma a criação de categoria.
       5. O sistema mantém o banco de dados inalterado.

 - Fluxo Alternativo C - A categoria já está cadastrada
      ![criarcategoriaFAc](/docs/CasosDeUsoImagens/criarcategoriaFAc.png)
       1. O sistema exibe a página criar categoria.
       2. O sistema exibe o formulário de criação de categoria.
       3. O administrador insere o dado, nome. 
       4. O administrador confirma a criação de categoria.
       5. O sistema verifica se a categoria já está cadastrada.
       6. O sistema apresenta a mensagem: A categoria já está cadatrada.
       7. O sistema sugere tentar novamente.

### CDU-17 Atualizar Categoria
 - Fluxo Principal
      ![atualizarcategoriaFP](/docs/CasosDeUsoImagens/atualizarcategoriaFP.png)
       1. O sistema exibe a página gerenciamento de categoria.
       2. O sistema exibe toda categoria registrada na tabela categoria.
       3. O administrador seleciona editar de uma categoria registrada na tabela categoria.
       4. O administrador preenche o novo nome.
       5. O administrador salva.
       6. O sistema verifica se a categoria já está cadastrada.
       7. O sistema salva a alteração na tabela categoria.
       8. O sistema recarrega a pagina gerenciamento de categoria.

 - Fluxo Alternativo A - O administrador salva sem nome
      ![atualizarcategoriaFAa](/docs/CasosDeUsoImagens/atualizarcategoriaFAa.png)
       1. O sistema exibe a página gerenciamento de categoria.
       2. O sistema exibe toda categoria registrada na tabela categoria.
       3. O administrador seleciona editar de uma categoria registrada na tabela categoria.
       4. O administrador salva.
       5. O sistema verifica se a categoria já está cadastrada.
       6. O sistema não salva a alteração na tabela categoria.
       7. O sistema exibe a mensagem: nome inválido, não foi possivel atualizar.
       8. O sistema sugere tentar novamente.

 - Fluxo Alternativo B - O administrador salva com nome já existente
      ![atualizarcategoriaFAb](/docs/CasosDeUsoImagens/atualizarcategoriaFAb.png)
       1. O sistema exibe a página gerenciamento de categoria.
       2. O sistema exibe toda categoria registrada na tabela categoria.
       3. O administrador seleciona editar de uma categoria registrada na tabela categoria.
       4. O administrador preenche o novo nome.
       5. O administrador salva.
       6. O sistema verifica se a categoria já está cadastrada.
       7. O sistema não salva a alteração na tabela categoria.
       8. O sistema exibe a mensagem: categoria já existente.
       9. O sistema sugere tentar novamente.

 - Fluxo Alternativo C - O administrador não salva
      ![atualizarcategoriaFAc](/docs/CasosDeUsoImagens/atualizarcategoriaFAc.png)
       1. O sistema exibe a página gerenciamento de categoria.
       2. O sistema exibe toda categoria registrada na tabela categoria.
       3. O administrador seleciona editar de uma categoria registrada na tabela categoria.
       4. O administrador preenche o novo nome.
       5. O sistema mantém o dado inalterado.

### CDU-18 Criar Produto
 - Fluxo Principal
      ![criarprodutoFP](/docs/CasosDeUsoImagens/criarprodutoFP.png)
       1. O sistema exibe a página criar produto.
       2. O sistema exibe o formulário de criação de produto.
       3. O administrador insere os dados, imagem, nome, descrição, valor em númerico e seleciona a categoria. 
       4. O administrador confirma a criação de produto.
       5. O sistema verifica se o produto já está cadastrada.
       6. O sistema salva os dados na tabela produto do banco de dados.
       7. O sistema redireciona o administrador para a página principal.

 - Fluxo Alternativo A - O administrador não insere todos os dados no formulário
      ![criarprodutoFAa](/docs/CasosDeUsoImagens/criarprodutoFAa.png)
       1. O sistema exibe a página criar produto.
       2. O sistema exibe o formulário de criação de produto.
       3. O administrador incompletamente insere os dados. 
       4. O administrador confirma a criação de produto.
       5. O sistema verifica se o produto já está cadastrada.
       6. O sistema exibe a mensangem: dados incompletos.
       7. O sistema sugere tentar novamente.

 - Fluxo Alternativo B - O administrador não confirma a criação de produto
      ![criarprodutoFAb](/docs/CasosDeUsoImagens/criarprodutoFAb.png)
       1. O sistema exibe a página criar produto.
       2. O sistema exibe o formulário de criação de produto.
       3. O administrador insere os dados, imagem, nome, descrição, valor em númerico e seleciona a categoria.
       4. O administrador não confirma a criação de produto.
       5. O sistema mantém o banco de dados inalterado.

 - Fluxo Alternativo C - O produto já está cadastrado
      ![criarprodutoFAc](/docs/CasosDeUsoImagens/criarprodutoFAc.png)
       1. O sistema exibe a página criar produto.
       2. O sistema exibe o formulário de criação de produto.
       3. O administrador insere os dados, imagem, nome, descrição, valor em númerico e seleciona a categoria.
       4. O administrador confirma a criação de produto.
       5. O sistema verifica se o produto já está cadastrado.
       6. O sistema apresenta a mensagem: o produto já está cadatrado.
       7. O sistema sugere tentar novamente.

### CDU-19 Atualizar Produto
 - Fluxo Principal
      ![atualizarprodutoFP](/docs/CasosDeUsoImagens/atualizarprodutoFP.png)
       1. O sistema exibe a página gerenciamento de produto.
       2. O sistema exibe todo produto registrado na tabela produto.
       3. O administrador seleciona editar de um produto registrado na tabela produto.
       4. O administrador preenche os novos dados.
       5. O administrador salva.
       6. O sistema salva a alteração na tabela produto.
       7. O sistema recarrega a pagina gerenciamento de produto.

 - Fluxo Alternativo A - O administrador salva sem algum(s) dado(s)
      ![atualizarprodutoFAa](/docs/CasosDeUsoImagens/atualizarprodutoFAa.png)
       1. O sistema exibe a página gerenciamento de produto.
       2. O sistema exibe todo produto registrado na tabela produto.
       3. O administrador seleciona editar de um produto registrado na tabela produto.
       4. O administrador preenche os novos dados.
       5. O administrador salva.
       7. O sistema não salva a alteração na tabela produto.
       8. O sistema exibe a mensagem: dado inválido, não foi possivel atualizar.
       9. O sistema sugere tentar novamente.

 - Fluxo Alternativo B - O administrador não salva
      ![atualizarprodutoFAb](/docs/CasosDeUsoImagens/atualizarprodutoFAb.png)
       1. O sistema exibe a página gerenciamento de produto.
       2. O sistema exibe todo produto registrado na tabela produto.
       3. O administrador seleciona editar de um produto registrado na tabela produto.
       4. O administrador preenche os novos dados.
       5. O sistema mantém o dado inalterado.

### CDU-20 Adicionar Quantidade do Produto em Estoque
 - Fluxo Principal
      ![atualizarquantidadedeprodutoemestoqueFP](/docs/CasosDeUsoImagens/atualizarquantidadedoprodutoemestoqueFP.png)
       1. O sistema exibe a página gerenciamento de produto.
       2. O sistema exibe todo produto registrado na tabela produto.
       3. O administrador seleciona atualizar quantide em estoque de um produto registrado na tabela produto.
       4. O administrador altera a quantidade.
       5. O administrador salva.
       6. O sistema verfica a quantidade.
       7. O sistema salva a alteração na tabela produto.
       8. O sistema recarrega a página gerenciamento de produto.

 - Fluxo Alternativo A - O administrador altera para quantidade negativa
      ![atualizarquantidadedeprodutoemestoqueFAa](/docs/CasosDeUsoImagens/atualizarquantidadedoprodutoemestoqueFAa.png)
       1. O sistema exibe a página gerenciamento de produto.
       2. O sistema exibe todo produto registrado na tabela produto.
       3. O administrador seleciona atualizar quantide em estoque de um produto registrado na tabela produto.
       4. O administrador altera a quantidade para negativa.
       5. O administrador salva.
       6. O sistema verfica a quantidade.
       7. O sistema não salva a alteração na tabela produto.
       8. O sistema exibe a mensagem: quantidade inválida, não foi possível atualizar.

 - Fluxo Alternativo B - O administrador não salva
      ![atualizarquantidadedeprodutoemestoqueFAb](/docs/CasosDeUsoImagens/atualizarquantidadedoprodutoemestoqueFAb.png)
       1. O sistema exibe a página gerenciamento de produto.
       2. O sistema exibe todo produto registrado na tabela produto.
       3. O administrador seleciona atualizar quantide em estoque de um produto registrado na tabela produto.
       4. O administrador altera a quantidade.
       5. O sistema mantém o dado inalterado.

### CDU-21 Reduzir Quantidade do Produto em Estoque
 - Fluxo Principal
      ![atualizarquantidadedeprodutoemestoqueFP](/docs/CasosDeUsoImagens/atualizarquantidadedoprodutoemestoqueFP.png)
       1. O sistema exibe a página gerenciamento de produto.
       2. O sistema exibe todo produto registrado na tabela produto.
       3. O administrador seleciona atualizar quantide em estoque de um produto registrado na tabela produto.
       4. O administrador altera a quantidade.
       5. O administrador salva.
       6. O sistema verfica a quantidade.
       7. O sistema salva a alteração na tabela produto.
       8. O sistema recarrega a página gerenciamento de produto.

 - Fluxo Alternativo A - O administrador altera para quantidade negativa
      ![atualizarquantidadedeprodutoemestoqueFAa](/docs/CasosDeUsoImagens/atualizarquantidadedoprodutoemestoqueFAa.png)
       1. O sistema exibe a página gerenciamento de produto.
       2. O sistema exibe todo produto registrado na tabela produto.
       3. O administrador seleciona atualizar quantide em estoque de um produto registrado na tabela produto.
       4. O administrador altera a quantidade para negativa.
       5. O administrador salva.
       6. O sistema verfica a quantidade.
       7. O sistema não salva a alteração na tabela produto.
       8. O sistema exibe a mensagem: quantidade inválida, não foi possível atualizar.

 - Fluxo Alternativo B - O administrador não salva
      ![atualizarquantidadedeprodutoemestoqueFAb](/docs/CasosDeUsoImagens/atualizarquantidadedoprodutoemestoqueFAb.png)
       1. O sistema exibe a página gerenciamento de produto.
       2. O sistema exibe todo produto registrado na tabela produto.
       3. O administrador seleciona atualizar quantide em estoque de um produto registrado na tabela produto.
       4. O administrador altera a quantidade.
       5. O sistema mantém o dado inalterado.

<!-- Antigos CDUs
#### CDU-03. Cadastrar Categoria
 - Fluxo Principal
      ![CadCat_DSFP](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/767c373b-e1b3-4af2-b7ff-95f0abc1afd5)

       1. O sistema exibe um formulário solicitando o nome da nova categoria
       2. O administrador preenche a solicitação.
       3. O sistema verifica se a categoria já existe
       3. O sistema cadastra a categoria preenchida no Banco de Dados.
       4. O sistema sugere a criação de outra categoria

 - Fluxo Alternativo A - Caso a Categoria já exista
[CadCat_DSFA](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/f18ca598-1c44-4a9c-8f2f-eddbdce46e86)

       1. O sistema exibe um formulário solicitando o nome da nova categoria
       2. O administrador preenche a solicitação.
       3. O sistema verifica se a categoria já existe
       4. O sistema retorna a mensagem: que a categoria já existe
       5. O sistema sugere a criação de outra categoria

#### CDU-04. Atualizar Categoria
 - Fluxo Principal
      ![UpdCat_DSFP](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/235a3c8f-8f66-4d2b-89d6-dc71f37c2163)

       1. O sistema busca em si a categoria selecionado para atualização
       2. O sistema exibe a categoria e suas respectivas informações
       3. O administrador insere as novas informações e envia
       4. O sistema atualiza a categoria

 - Fluxo Alternativo A - Categoria semelhante a outra
      ![UpdCat_DSFA](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/b70dbc9d-f5fe-441b-9ab2-ff27a64a7034)

       1. O sistema busca em si a categoria selecionado para atualização.
       2. O sistema exibe a categoria e suas respectivas informações.
       3. O administrador insere as novas informações e envia.
       4. O sistema não atualiza a categoria por conter semelhanças a outra categoria.
       5. O sistema sugere a criação de outra categoria.
    
#### CDU-05. Cadastrar Produto
 - Fluxo Principal
      ![CadProd_DSFP](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/5014a12c-a6cd-46cd-807e-9119bfd484cd)

       1. O sistema exibe um formulário solicitando o nome do produto, o preço do produto, a foto do produto e a descrição do produto.
       2. O usuário preenche os dados do produto.
       3. O sistema exibe uma lista de categorias existentes para o produto.
       4. O usuário seleciona as categorias desejadas da lista.
       5. O usuário clica no botão: Enviar.
       6. O sistema verifica se o produto já está cadastrado.
       7. O produto é inserido ao Banco de dados.
    
 - Fluxo Alternativo A - Caso o Produto já exista
      ![CadProd_DSFA](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/47f2d398-c927-47ad-a5f1-6e8bf293b22c)

       1. O sistema exibe um formulário solicitando o nome do produto, o preço do produto e a descrição do produto.
       2. O usuário preenche os dados do produto.
       3. O sistema exibe uma lista de categorias existentes para o produto.
       4. O usuário seleciona uma categoria da lista.
       5. O usuário clica no botão: Enviar.
       6. O sistema verifica se o produto já está cadastrado.
       7. O sistema retorna uma mensagem: que o produto que está sendo cadastrado já existe.
       8. O sistema sugere a criação de outro produto.

#### CDU-06. Atualizar Produto
 - Fluxo Principal
      ![UpdProd_DSFP](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/6d6b1270-6377-4f10-86ce-c5ce733f5d6d)

       1. O sistema exibe os produtos para atualizar.
       2. O usuário seleciona o produto que deseja atualizar.
       3. O sistema exibe o produto e suas respectivas informações.
       4. O administrador insere as novas informações e envia.
       5. O sistema atualiza o produto.

 - Fluxo Alternativo A - Produto semelhante a outro
      ![UpdProd_DSFA](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/720a9376-c007-46b8-82e6-17488710b9b9)

       1. O sistema exibe os produtos para atualizar.
       2. O usuário seleciona o produto que deseja atualizar.
       3. O sistema exibe o produto e suas respectivas informações.
       4. O administrador insere as novas informações e envia.
       5. O sistema não atualiza o produto por conter semelhanças a outra categoria.
       8. O sistema sugere a criação de outro produto.

 - Fluxo Alternativo  B - Produto com valor inestimado
      ![UpdProd_DSFA2](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/5262476c-1023-49d9-a08c-f431b330ab2a)

       1. O sistema exibe os produtos para atualizar.
       2. O usuário seleciona o produto que deseja atualizar.
       3. O sistema exibe o produto e suas respectivas informações
       4. O administrador insere as novas informações e envia
       5. O sistema não atualiza o produto por conter valor inestimado(inválido) a outra categoria

#### CDU-07 Adicionar Quantidade de Produto em Estoque
 - Fluxo Principal
      ![InsertProd_DSFP](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/e2f739f5-452d-4f09-a08f-17b452b19dbc)

       1. O sistema exibe os produtos junto da quantidade atual no estoque.
       2. O administrador seleciona um produto cadastrado.
       3. O sistema exibe as opções: Aumentar Quantidade de Estoque e Diminuir Quantidade de Estoque.
       4. O administrador seleciona a opção de Aumentar Quantidade de Estoque.
       5. O sistema solicita a quantidade do produto a ser adicionados ao estoque.
       6. O adminstrador preenche a solicitação com a quantidade de produtos desejada.
       7. O usuário encerra a operação, clicando no botão: Finalizar.
       8. O sistema adiciona ao estoque do produto escolhido a quantidade informada na solicitação.

Fluxo Alternativo A - Inserção maior que possível do estoque
      ![InsertProd_DSFA](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/0ce043d4-7e40-46b3-9781-76359b317936)

       1. O sistema exibe os produtos junto da quantidade atual no estoque.
       2. O administrador seleciona um produto cadastrado.
       3. O sistema exibe as opções: Aumentar Quantidade de Estoque e Diminuir Quantidade de Estoque.
       4. O administrador seleciona a opção de Aumentar Quantidade de Estoque.
       5. O sistema solicita a quantidade do produto a ser adicionados ao estoque.
       6. O adminstrador preenche a solicitação com a quantidade de produtos desejada.
       7. O usuário encerra a operação, clicando no botão: Finalizar.
       8. O sistema não adiciona ao estoque do produto escolhido a quantidade informada na solicitação, pois ultrapassa o limite do estoque.

#### CDU-08. Remover Quantidade de Produto em Estoque
 - Fluxo Principal
      ![RemovProd_DSFP](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/6b7b899e-47ee-4db5-b88c-3b43c4f5a3a3)

       1. O sistema exibe os produtos junto da quantidade atual no estoque.
       2. O administrador seleciona um produto cadastrado.
       3. O sistema exibe as opções: Aumentar Quantidade de Estoque e Diminuir Quantidade de Estoque.
       4. O administrador seleciona a opção de Diminuir Quantidade de Estoque.
       5. O sistema solicita a quantidade do produto a ser removida do estoque.
       6. O adminstrador preenche a solicitação com a quantidade de produtos desejada.
       7. O usuário encerra a operação, clicando no botão: Finalizar.
       8. O sistema remove do estoque do produto escolhido a quantidade informada na solicitação.

Fluxo Alternativo A - Remoção maior que possível do estoque
      ![RemovProd_DSFA](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/cd1ba229-68cd-4b68-a1ca-566957e3841d)

       1. O sistema exibe os produtos junto da quantidade atual no estoque.
       2. O administrador seleciona um produto cadastrado.
       3. O sistema exibe as opções: Aumentar Quantidade de Estoque e Diminuir Quantidade de Estoque.
       4. O administrador seleciona a opção de Diminuir Quantidade de Estoque.
       5. O sistema solicita a quantidade do produto a ser removida do estoque.
       6. O adminstrador preenche a solicitação com a quantidade de produtos desejada.
       7. O usuário encerra a operação, clicando no botão: Finalizar.
       8. O sistema não rmeove do estoque do produto escolhido a quantidade informada na solicitação, pois ultrapassa o limite do estoque.


#### CDUs Cliente
#### CDU-09. Fazer Cadastro
 - Fluxo Principal
      ![CadUser_DSFP](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/5cc506fb-484f-4fc8-8ba4-d718457041f2)
         ![CadUser_DSFP](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/d398a2de-1d5d-412e-b803-09641c5cfcbe)

       1. O sistema exibe o formulário solicitando e-mail e senha.
       2. O usuário preenche as credencias solicitadas.
       3. O sistema verifica se o e-mail está cadastrado.
       4. O sistema cadastra o e-mail junto da senha no Banco de Dados.
       5. O sistema retorna a mensagem: o cadastro foi finalizado com sucesso.
       6. O sistema direciona o usuário para a página principal da loja.

 - Fluxo Alternativo A - Caso o usuário já esteja cadastrado
      ![CadUser_DSFA](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/0e5d122d-0761-45df-978f-60717bc76df3)
         ![CadUser_DSFA](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/08f7d6cd-63d3-4966-9caa-8d792e933784)

       1. O sistema exibe o formulário solicitando e-mail e senha.
       2. O usuário preenche as credencias solicitadas.
       3. O sistema verifica se o e-mail está cadastrado.
       4. O sistema retorna a mensagem: que o e-mail de já está cadastrado.
       5. O sistema sugere a aba de Fazer login.

#### CDU-10. Atualizar Cliente
 - Fluxo Principal
      ![UpdUser_DSFP](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/1fd4aa88-779a-45fe-b2f3-e16daf41ab2e)
         ![UpdUser_DSFP](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/f8ecc198-3ec0-4e23-9f7a-b5dffeaa5f20)

       1. O sistema busca em si o cliente logado para atualização
       2. O sistema exibe o cliente logado e suas respectivas informações
       3. O cliente logado insere as novas informações e envia
       4. O sistema atualiza o cliente logado

 - Fluxo Alternativo A - Cliente semelhante
      ![UpdUser_DSFA](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/45aec9b5-2b17-402f-9105-475edcb6e0f8)
         ![UpdUser_DSFA](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/ec744fe9-dab2-458a-9844-310abdf98e95)

       1. O sistema busca em si o cliente logado para atualização
       2. O sistema exibe o cliente logado e suas respectivas informações
       3. O cliente logado insere as novas informações e envia
       4. O sistema não atualiza o cliente logado por conter informações semelhantes à outro cliente
    
#### CDU-11. Fazer Login
 - Fluxo Principal
      ![LogUser_DSFP](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/5c36ecdd-be7b-4a2c-b0fc-7d6c77913734)
         ![LogUser_DSFP](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/3f49d177-47a0-48eb-98da-f5126450bf41)

       1. O sistema exibe o formulário solicitando e-mail e senha
       2. O usuário preenche as credencias solicitadas.
       3. O sistema verifica se o e-mail está cadastrado.
       4. O sistema verifica se credenciais são compatíveis com as do Banco de Dados.
       5. O sistema autentica o usuário.
       6. O sistema exibe a página principal da loja.

 - Fluxo Alternativo A - Caso o e-mail não esteja cadastrado
      ![LogUser_DSFA](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/fab02e02-a211-44d1-b528-a6283ae1cc48)
         ![LogUser_DSFA](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/1f6b6b2c-9a85-4581-b2af-196dc710a984)

       1. O sistema exibe o formulário solicitando e-mail e senha
       2. O usuário preenche as credencias solicitadas.
       3. O sistema verifica se o e-mail está cadastrado.
       4. O sistema retorna a mensagem: que o e-mail não está cadastrado 
       5. O sistema sugere a aba de Cadastro

 - Fluxo Alternativo B - Caso a Senha esteja incorreta
      ![LogUser_DSFA](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/404ef176-fba1-43d1-ba08-8a3a4c05d3dd)
         ![LogUser_DSFA2](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/6b35bb56-ff2e-4ebb-87db-e66b99703af7)

       1. O sistema exibe o formulário solicitando e-mail e senha
       2. O usuário preenche as credencias solicitadas.
       3. O sistema verifica se o e-mail está cadastrado.
       4. O sistema verifica se credenciais são compatíveis com as do Banco de Dados.
       6. O sistema retorna a mensagem: a senha deste e-mail está incorreta.

#### CDU-12. Pesquisar Produto
 - Fluxo Principal
      ![PsqzProd_DSFP](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/1566e8ad-2ae8-4fde-aef6-84120507e715)

       1. O sistema exibe a página principal do site.
       2. O usuário seleciona a aba de pesquisa e digita o nome do produto.
       3. O usuário clica no botão "Procurar" após digitar o nome do produto.
       3. O sistema procura o produto na qual o usuário digitou o nome no Banco de Dados.
       4. O sistema exibe uma lista dos produtos que foram encontrados com o nome solicitado.

#### CDU-13. Adicionando Produtos no Carrinho
 - Fluxo Principal

       1. O usuário seleciona um produto que deseje.
       2. O sistema abre a página do produto contendo suas informações como: nome, preço, descrição e categoria.
       3. O usuário seleciona o botão "Adicionar Produto ao Carrinho".
       4. O sistema verifica que possui o produto selecionado possui no estoque.
       5. O sistema adiciona o produto ao Carrinho.
       6. O sistema sugere ao usuário a opção de ver o Carrinho.
       7. O usuário seleciona a opção de ver o Carrinho.
       8. O sistema abre a página do Carrinho que contem os produtos na qual ele adicionou junto da quantidade no estoque.
       9. O sistema exibe as opções de: Adicionar mais quantidade desse produto ao Carrinho, Diminuir mais quantidade desse produto no Carrinho e exclusão do produto no Carrinho para cada produto no Carrinho.
       10. O usuário seleciona a opção de "Adicionar mais quantidade desse produto ao Carrinho".
       11. O sistema exibe uma lista de números para o usuário escolher a quantidades de produtos para serem adicionados ao Carrinho. Onde a quantidade adicionada no final não poderá ser maior que a quantidade no estoque.
       12. O usuário escolhe a quantidade de produtos que deseja adicionar no Carrinho.
       13. O sistema insere os produtos na quantidade selecionada no Carrinho.

 - Fluxo Alternativo A - Sem estoque do produto
      ![AddProdCart_DSFA](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/3f8f62eb-e2cc-4b75-8a88-385664fcfdc8)
         ![AddProdCart_DSFA](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/60935c18-e2a2-43ac-83a5-6f149df93f98)
    
       1. O usuário seleciona um produto que deseje.
       2. O sistema abre a página do produto contendo suas informações como: nome, preço, descrição e categoria.
       3. O usuário seleciona o botão "Adicionar Produto ao Carrinho".
       4. O sistema verifica que possui o produto selecionado possui no estoque.
       5. O sistema retorna a mensagem: que não possui o produto no estoque no momento.

 - Fluxo Alternativo B - Usuário escolhe não ver o carrinho
       1. O usuário seleciona um produto que deseje.
       2. O sistema abre a página do produto contendo suas informações como: nome, preço, descrição e categoria.
       3. O usuário seleciona o botão "Adicionar Produto ao Carrinho".
       4. O sistema verifica que possui o produto selecionado possui no estoque.
       5. O sistema adiciona o produto ao Carrinho.
       6. O sistema sugere ao usuário a opção de ver o Carrinho.
       7. O usuário escolhe não ver o carrinho.


#### CDU-14. Reduzir Quantidade do Produto no Carrinho
 - Fluxo Principal
       1. O usuário seleciona um produto que deseje.
       2. O sistema abre a página do produto contendo suas informações como: nome, preço, descrição e categoria.
       3. O usuário seleciona o botão "Adicionar Produto ao Carrinho".
       4. O sistema verifica que possui o produto selecionado possui no estoque.
       5. O sistema adiciona o produto ao Carrinho.
       6. O sistema sugere ao usuário a opção de ver o Carrinho.
       7. O usuário seleciona a opção de ver o Carrinho.
       8. O sistema abre a página do Carrinho que contem os produtos na qual ele adicionou junto da quantidade no estoque.
       9. O sistema exibe as opções de: Adicionar mais quantidade desse produto ao Carrinho, Diminuir mais quantidade desse produto no Carrinho e Exclusão do produto no Carrinho para cada produto no Carrinho.
       10. O usuário seleciona a opção de "Diminuir mais quantidade desse produto no Carrinho".
       11. O sistema exibe uma lista de números para o usuário escolher a quantidades de produtos que quer retirar no Carrinho. Onde a quantidade retirada no final não poderá ser igual a zero.
       12. O usuário escolhe a quantidade de produtos que deseja retirar no Carrinho.
       13. O sistema retira os produtos na quantidade selecionada no Carrinho.

 - Fluxo Alternativo A - Remover Produto do Carrinho
       1. O usuário seleciona um produto que deseje.
       2. O sistema abre a página do produto contendo suas informações como: nome, preço, descrição e categoria.
       3. O usuário seleciona o botão "Adicionar Produto ao Carrinho".
       4. O sistema verifica que possui o produto selecionado possui no estoque.
       5. O sistema adiciona o produto ao Carrinho.
       6. O sistema sugere ao usuário a opção de ver o Carrinho.
       7. O usuário seleciona a opção de ver o Carrinho.
       8. O sistema abre a página do Carrinho que contem os produtos na qual ele adicionou junto da quantidade no estoque.
       9. O sistema exibe as opções de: Adicionar mais quantidade desse produto ao Carrinho, Diminuir mais quantidade desse produto no Carrinho e Exclusão do produto no Carrinho, para cada produto no Carrinho.
       10. O usuário seleciona a opção de "Exclusão do produto no Carrinho".
       11. O sistema retira do Carrinho o produto no qual o usuário selecionou a opção de Exclusão do produto no Carrinho.

 - Fluxo Alternativo B - Cancelar Operação
       1. O usuário seleciona um produto que deseje.
       2. O sistema abre a página do produto contendo suas informações como: nome, preço, descrição e categoria.
       3. O usuário seleciona o botão "Adicionar Produto ao Carrinho".
       4. O sistema verifica que possui o produto selecionado possui no estoque.
       5. O sistema adiciona o produto ao Carrinho.
       6. O sistema sugere ao usuário a opção de ver o Carrinho.
       7. O usuário seleciona a opção de ver o Carrinho.
       8. O sistema abre a página do Carrinho que contem os produtos na qual ele adicionou junto da quantidade no estoque.
       9. O sistema exibe as opções de: Adicionar mais quantidade desse produto ao Carrinho, Diminuir mais quantidade desse produto no Carrinho e Exclusão do produto no Carrinho, para cada produto no Carrinho.
       10. O usuário seleciona a opção de "Exclusão do produto no Carrinho".
       11. O sistema retira do Carrinho o produto no qual o usuário selecionou a opção de Exclusão do produto no Carrinho.


#### CDU-15. Aumentar Quantidade do Produto no Carrinho
 - Fluxo Principal

#### CDU-16. Finalizar Compra
 - Fluxo Principal
      ![BuyCart_DSFP](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/3846e652-8336-4407-8e32-2874504c9d92)

       1. O usuário acessa a página: Carrinho de Compras.
       2. O sistema exibe a lista de produtos no carrinho.
       3. O sistema exibe o preço de todos os produtos no carrinho juntos.
       4. O sistema exibe as opções de pagamento disponíveis: Crédito, débito e boleto.
       5. O usuário escolhe a opção de pagamento via cartão de crédito.
       6. O sistema solicita os dados do cartão de crédito: número do cartão, data de validade e código de segurança.
       7. O usuário insere os dados solicitados.
       8. O sistema envia uma solicitação ao banco para verificar a autenticidade dos dados.
       9. O Banco responde confirmando a autenticação do cartão.
       10. O sistema envia uma solicitação ao banco para verificar se possui saldo disponível para a compra.
       11. O Banco responde confirmando o saldo disponível para a compra total do Carrinho.
       12. O sistema retorna a mensagem: que a compra no cartão de crédito foi aprovada com sucesso.

 - Fluxo Alternativo A - Cartão não válido - Crédito
      ![BuyCart_DSFA](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/7771e1e8-abeb-4156-a427-d5db352051d5)

       1. O usuário acessa a página: Carrinho de Compras.
       2. O sistema exibe a lista de produtos no carrinho.
       3. O sistema exibe o preço de todos os produtos no carrinho juntos.
       4. O sistema exibe as opções de pagamento disponíveis: Crédito, débito e boleto.
       5. O usuário escolhe a opção de pagamento via cartão de crédito.
       6. O sistema solicita os dados do cartão de crédito: número do cartão, data de validade e código de segurança.
       7. O usuário insere os dados solicitados.
       8. O sistema envia uma solicitação ao banco para verificar a autenticidade dos dados.
       9. O Banco responde negando a autenticação do cartão.
       10. O sistema retorna a mensagem: que o cartão não é válido. 

 - Fluxo Alternativo B - Saldo Insuficiente - Crédito
      ![BuyCart_DSFA](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/ce25a260-34e8-434e-95ff-b72a1e3651e8)

       1. O usuário acessa a página: Carrinho de Compras.
       2. O sistema exibe a lista de produtos no carrinho.
       3. O sistema exibe o preço de todos os produtos no carrinho juntos.
       4. O sistema exibe as opções de pagamento disponíveis: Crédito, débito e boleto.
       5. O usuário escolhe a opção de pagamento via cartão de crédito.
       6. O sistema solicita os dados do cartão de crédito: número do cartão, data de validade e código de segurança.
       7. O usuário insere os dados solicitados.
       8. O sistema envia uma solicitação ao banco para verificar a autenticidade dos dados.
       9. O Banco responde confirmando a autenticação do cartão.
       10. O sistema envia uma solicitação ao banco para verificar se possui saldo disponível para a compra.
       11. O Banco responde negando o saldo disponível para a compra total do Carrinho.
       12. O sistema retorna a mensagem: que não há saldo suficiente para finalizar a compra.

 - Fluxo Alternativo C - Aprovado - Cartão de Débito
       1. O usuário acessa a página: Carrinho de Compras.
       2. O sistema exibe a lista de produtos no carrinho.
       3. O sistema exibe o preço de todos os produtos no carrinho juntos.
       4. O sistema exibe as opções de pagamento disponíveis: Crédito, débito e boleto.
       5. O usuário escolhe a opção de pagamento via cartão de débito.
       6. O sistema solicita os dados do cartão de débito: número do cartão, data de validade e código de segurança.
       7. O usuário insere os dados solicitados.
       8. O sistema envia uma solicitação ao banco para verificar a autenticidade dos dados.
       9. O Banco responde confirmando a autenticação do cartão.
       10. O sistema envia uma solicitação ao banco para verificar se possui saldo disponível para a compra.
       11. O Banco responde confirmando o saldo disponível para a compra total do Carrinho.
       12. O sistema retorna a mensagem: que a compra no cartão de débito foi aprovada com sucesso.

 - Fluxo Alternativo D - Cartão não válido - Cartão de Débito
      ![BuyCart_DSFA](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/ba88b28a-b554-4b68-aeb2-25220ecf33a7)
    
       1. O usuário acessa a página: Carrinho de Compras.
       2. O sistema exibe a lista de produtos no carrinho.
       3. O sistema exibe o preço de todos os produtos no carrinho juntos.
       4. O sistema exibe as opções de pagamento disponíveis: Crédito, débito e boleto.
       5. O usuário escolhe a opção de pagamento via cartão de débito.
       6. O sistema solicita os dados do cartão de débito: número do cartão, data de validade e código de segurança.
       7. O usuário insere os dados solicitados.
       8. O sistema envia uma solicitação ao banco para verificar a autenticidade dos dados.
       9. O Banco responde negando a autenticação do cartão.
       10. O sistema retorna a mensagem: que o cartão não é válido.

 - Fluxo Alternativo E - Saldo Insuficiente - Débito
      ![BuyCart_DSFA](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/7d9f0192-d056-494b-8c57-a8db7c708e40)

       1. O usuário acessa a página: Carrinho de Compras.
       2. O sistema exibe a lista de produtos no carrinho.
       3. O sistema exibe o preço de todos os produtos no carrinho juntos.
       4. O sistema exibe as opções de pagamento disponíveis: Crédito, débito e boleto.
       5. O usuário escolhe a opção de pagamento via cartão de débito.
       6. O sistema solicita os dados do cartão de débito: número do cartão, data de validade e código de segurança.
       7. O usuário insere os dados solicitados.
       8. O sistema envia uma solicitação ao banco para verificar a autenticidade dos dados.
       9. O Banco responde confirmando a autenticação do cartão.
       10. O sistema envia uma solicitação ao banco para verificar se possui saldo disponível para a compra.
       11. O Banco responde negando o saldo disponível para a compra total do Carrinho.
       12. O sistema retorna a mensagem: que não há saldo suficiente para finalizar a compra.

 - Fluxo Alternativo F - Aprovado - Boleto
       1. O usuário acessa a página: Carrinho de Compras.
       2. O sistema exibe a lista de produtos no carrinho.
       3. O sistema exibe o preço de todos os produtos no carrinho juntos.
       4. O sistema exibe as opções de pagamento disponíveis: Crédito, débito e boleto.
       5. O usuário escolhe a opção de pagamento via Boleto.
       6. O sistema gera um boleto com as informações: nome e CNPJ/CPF do beneficiário, o valor a ser pago, a data de vencimento, a descrição do pagamento, o código de barras e a linha digitável.
       7. O cliente imprime ou anota os dados do boleto.
       8. O usuário realiza o pagamento do boleto em um banco, lotérica ou via internet banking.
       9. O sistema aguarda a confirmação do pagamento por parte do banco.
       10. O Banco retorna uma mensagem avisando do recebimento do pagamento
       11. O sistema salva a compra e finaliza o pedido.

 - Fluxo Alternativo G - Prazo Vencido - Boleto
      ![BuyCart_DSFA](/docs//https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/6d1f33fe-80b9-493f-9ff2-c3822aabfbc1)

       1. O usuário acessa a página: Carrinho de Compras.
       2. O sistema exibe a lista de produtos no carrinho.
       3. O sistema exibe o preço de todos os produtos no carrinho juntos.
       4. O sistema exibe as opções de pagamento disponíveis: Crédito, débito e boleto.
       5. O usuário escolhe a opção de pagamento via Boleto.
       6. O sistema gera um boleto com as informações: nome e CNPJ/CPF do beneficiário, o valor a ser pago, a data de vencimento, a descrição do pagamento, o código de barras e a linha digitável.
       7. O cliente imprime ou anota os dados do boleto.
       8. O usuário excede a data validade do boleto.
       9. O sistema retorna a mensagem: que o boleto foi quitado e a compra cancelada.

    >#### Caso o Banco Rejeitasse a Compra
            - O sistema retorna uma mensagem: que a compra foi rejeitada.

    >#### O usuário seleciona boleto como forma de pagamento
            - O usuário escolhe a opção de pagamento via boleto.
            - O sistema gera um boleto com os detalhes da compra e um código de barras.
            - O usuário realiza o pagamento do boleto em um banco, lotérica ou via internet banking.
            - O sistema aguarda a confirmação do pagamento por parte do banco.
            - O sistema quando confirma o pagamento, regista a compra e finaliza o pedido.
    >#### Caso o pagamento não for confirmado dentro do prazo
            - O sistema retorna uma mensagem: que o pagamento não foi realizado dentro do prazo.
            - O sistema cancela o pedido.
-->

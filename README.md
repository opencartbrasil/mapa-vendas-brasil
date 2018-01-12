[![license][licenca-badge]][LICENSE]

### Apresentação

Exibe no painel de controle do OpenCart o mapa de vendas no Brasil com os pedidos divididos pelos estados brasileiros.

#### Importante:

Caso esteja utilizando uma versão do OpenCart inferior a 2.3, você estará instalando uma modificação.

Se estiver utilizando a versão 2.3 ou 3.0, você estará instalando uma extensão.

### Instalação

 1. Acesse o link: https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=22375.
 2. Localize a versão mais atual e compatível com sua versão do OpenCart e faça o download.
 3. Na administração da loja acesse o menu "**Extensões→Instalador**" (Extensions→Installer).
 4. Na página do instalador, clique no botão "**Upload**" e selecione o arquivo '**mapa-vendas-brasil.ocmod.zip**' (que você baixou deste repositório), e aguarde a conclusão da instalação automática.
 5. Após a instalação, caso esteja utilizando uma versão do OpenCart inferior a 2.3, acesse o menu "**Extensões→Modificações**" (Extensions→Modifications) e clique no botão "**Atualizar**" (Refresh), para que a modificação instalada e incrementada na loja, lembrando que não é o botão Atualizar do seu navegador, e sim o botão Atualizar na cor azul ao lado do botão laranja e vermelho na tela do próprio OpenCart.
 6. Se estiver utilizando a versão 2.3 ou 3.0 do OpenCart, acesse o menu "**Extensões→Extensões**", filtre por "**Painéis**", localize a extensão "**Mapa de vendas no Brasil**", clique no botão "**Instalar**", depois no botão "**Editar**", no campo "**Largura/Colunas**" selecione **6**, no campo "**Situação**" selecione **Habilitado**, no campo "**Posição**" preencha com **5**, e clique no botão "**Salvar**", depois localize a extensão "**Mapa geográfico de vendas**", clique no botão "**Editar**", no campo "**Situação**" selecione **Desabilitado**, e clique no botão "**Salvar**".

### Desinstalação

Caso esteja utilizando uma versão do OpenCart inferior a 2.3, na administração da loja, acesse o menu **Extensões→Modificações** (Extensions→Modifications), selecione a modificação com o nome '**Mapa de vendas no Brasil**', depois clique no botão "**Excluir**" (Delete), e no botão "**Atualizar**" (Refresh).

Se estiver utilizando a versão 2.3 ou 3.0, acesse o menu "**Extensões→Extensões**", filtre por "**Painéis**", localize a extensão "**Mapa de vendas no Brasil**", clique no botão "**Excluir**" (Delete), depois localize a extensão "**Mapa geográfico de vendas**", clique no botão "**Editar**", no campo "**Situação**" selecione **Habilitado**, e clique no botão "**Salvar**".

### Atualização

Acesse a administração da loja e execute o procedimento de Desinstalação, depois execute o procedimento de Instalação, conforme sua versão do OpenCart.

### Correção para OpenCart 2.3.0.0, 2.3.0.1 e 2.3.0.2:

Nestas versões do OpenCart, há um bug que impede de abrir as configurações de novas extensões do tipo "Painel" após clicar no botão Instalar, para corrigir o bug, faça o seguinte:

- Edite o arquivo abaixo (preferencialmente com o editor Notepad++):

admin/controller/extension/extension/**dashboard.php**

- Localize a linha abaixo:

``$this->model_extension_extension->install('dashboard', 'dashboard_' . $this->request->get['extension']);``

- E substitua por:

``$this->model_extension_extension->install('dashboard', $this->request->get['extension']);``

- Localize a linha abaixo:

``$this->model_extension_extension->uninstall('dashboard', 'dashboard_' . $this->request->get['extension']);``

- E substitua por:

``$this->model_extension_extension->uninstall('dashboard', $this->request->get['extension']);``

Agora salve as alterações no arquivo, e instale a extensão novamente que o problema será resolvido.

### Dúvidas

O OCMOD (OpenCart Modification) é nativo do OpenCart, ou seja, não é necessário instalar nenhum complemento no OpenCart para utilizar modificações ou extensões no formato OCMOD, para mais informações sobre o OCMOD, segue o link para mais informações:

https://github.com/opencart/opencart/wiki/Modification-System

[licenca-badge]: https://img.shields.io/badge/licença-GPLv3-blue.svg
[LICENSE]: ./LICENSE

 @extends('layouts.app', ['current' => 'admin'])

@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('css/alerta.css')}}">
@endsection

@section('content')
    <section class="container">
        <h1 class="title"> Administração </h1>
        <div class="admin-group">
            <button id="usuario" class="btn add-product"> Usuários </button>
            <button id="produto" class="btn add-product"> Ver Produtos </button>
            <button id="correio" class="btn add-product"> Ver Entregas </button>
        </div>
        <div class="left-screen"></div>
        <div class="right-screen"></div>
        <div class="modal" id="produto-modal">
            <div class="close"></div>
            <h2 class="sub-title"> Produtos </h2>
            <button class="btn-show">Mostrar tudo</button>
            <table id="table-produtos" class="table-modal">
                <thead>
                    <tr>
                        <td colspan="8">
                            <div class="input-group">
                                <input type="text" class="input-form" placeholder="Buscar...">
                                <button class="lupe lupe-off"></button>
                            </div>
                            <select class="select" id="">
                                <option value="tudo">Tudo</option>
                                <option value="nome_prod">Nome</option>
                                <option value="marca_prod">Marca</option>
                                <option value="tipo_prod">Tipo</option>
                            </select>
                            <span class="tooltip-desc">Pesquisar por</span>
                            <button id="add" class="adicionar"></button>
                            <span class="tooltip-desc">Adicionar</span>
                        </td>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Marca</th>
                        <th>Tipo</th>
                        <th>Qntd</th>
                        <th>Descrição</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="8">
                        
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="modal" id="correio-modal">
            <div class="close"></div>
            <h2 class="sub-title"> Entregas </h2>
            <button class="btn-show">Mostrar tudo</button>
            <table id="table-correios" class="table-modal">
                <thead>
                    <tr>
                        <td colspan="12" style="position: relative;">
                            <div class="input-group">
                                <input type="text" class="input-form" placeholder="Buscar...">
                                <button class="lupe lupe-off"></button>
                            </div>
                            <select class="select" id="">
                                <option value="tudo">Tudo</option>
                                <option value="produtos">Produto</option>
                                <option value="usuarios">Usuário</option>
                                <option value="estado">Estado</option>
                                <option value="cidade">Cidade</option>
                                <option value="bairro">Bairro</option>
                                <option value="rua">Rua</option>
                                <option value="etapa">Etapa</option>
                            </select>
                            <span class="tooltip-desc">Pesquisar por</span>
                            <div class="btn-group-correio">
                                <button class="btn-modal btn-correio" id="cancelar-correio">Cancelar</button>
                                <button class="btn-modal btn-correio" id="salvar-correio">Salvar</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Produto</th>
                        <th>Qntd</th>
                        <th>Usuário</th>
                        <th>UF</th>
                        <th>Cidade</th>
                        <th>Bairro</th>
                        <th>Rua</th>
                        <th>Numero</th>
                        <th>Complemento</th>
                        <th>Etapa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="12">
                        
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="modal" id="usuario-modal">
            <div class="close"></div>
            <h2 class="sub-title"> Usuários </h2>
            <button class="btn-show">Mostrar tudo</button>
            <table id="table-usuarios" class="table-modal">
                <thead>
                    <tr>
                        <td colspan="10">
                            <div class="input-group">
                                <input type="text" class="input-form" placeholder="Buscar...">
                                <button class="lupe lupe-off"></button>
                            </div>
                            <select class="select" id="">
                                <option value="tudo">Tudo</option>
                                <option value="name">Nome</option>
                                <option value="email">Email</option>
                                <option value="estado">UF</option>
                                <option value="cidade">Cidade</option>
                                <option value="bairro">Bairro</option>
                                <option value="rua">Rua</option>
                                <option value="cep">CEP</option>
                                <option value="assinaturas">Assinatura</option>
                            </select>
                            <span class="tooltip-desc">Pesquisar por</span>
                        </td>
                    </tr>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>UF</th>
                        <th>Cidade</th>
                        <th>Bairro</th>
                        <th>Rua</th>
                        <th>CEP</th>
                        <th>Assinatura</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="10">
                        
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="modal-add modal">
            <div class="close"></div>
            <h2 class="sub-title">Adicionar Produto</h2>
                <form class="form-group" enctype="multipart/form-data" method="POST" id="form">
                    <div class="input-group add-group">
                        <input type="text" id="nome" class="input-form input-add" placeholder="Nome">
                    </div>
                    <div class="input-group add-group">
                        <select name="tipo" id="tipo" class="input-form input-add">
                            <option value="" selected>Tipo</option>
                            <option value="Shampoo">Shampoo</option>
                            <option value="Condicionador">Condicionador</option>
                            <option value="Finalizador">Finalizador</option>
                            <option value="creme de pentear">Creme de pentear</option>
                            <option value="Mascara">Creme de tratamento</option>
                        </select>
                    </div>
                    <div class="input-group add-group">
                        <select name="marca" id="marca" class="input-form input-add">
                            <option value="">Marca</option>
                            <option value="Salon Line">Salon Line</option>
                            <option value="Clear Men">Clear Men</option>
                            <option value="Seda">Seda</option>
                            <option value="TRESemme">TRESemme</option>
                            <option value="INOAR">INOAR</option>
                        </select>
                    </div>
                    <div class="input-group add-group">
                        <input id="qntd" name="qntd" type="number" class="input-form input-add" placeholder="Quantidade">
                    </div>
                    <div class="input-group add-group">
                        <input id="desc" name="desc" type="text" class="input-form input-add" placeholder="Descrição">
                    </div>
                    <div class="input-group add-group">
                        <label for="imagem_um" class="input-form label-form">Imagem (frente) </label>
                        <input class="file input-add" name="imagem_um" id="imagem_um" type="file">
                    </div>
                    <div class="input-group add-group">
                            <label for="imagem_dois" class="input-form label-form">Imagem (trás) </label>
                        <input class="file input-add" name="imagem_dois" id="imagem_dois" type="file"">
                    </div>
                <div class="btn-group-add">
                    <div class="btn btn-add cancel-btn">Cancelar</div>
                    <div id="btn-add" class="btn btn-add btn-lock">Adicionar</div>
                </div>
                </form>
        </div>
    </section>
@endsection

@section('javascript')
    <script src="{{asset('js/alerta.js')}}"></script>
    <script src="{{asset('js/admin.js')}}"></script>
@endsection
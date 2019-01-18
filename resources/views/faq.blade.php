@extends('layouts.app', ['current' => 'faq'])


@section('css')
    <link rel="stylesheet" href="{{asset('css/faq.css')}}">
    @guest
        <link rel="stylesheet" href="{{asset('css/login.css')}}">
    @endguest
@endsection

@guest
    @section('login')
        @component('components.login')
            @slot('index')
                @if ($errors->any())
                    <script>
                        localStorage.setItem("error", "Email ou senha incorreta, digite novamente.");
                        window.location = "{{route('login-page')}}";
                    </script>
                @endif
            @endslot
        @endcomponent
    @endsection
@endguest

@section('content')
    <section class="container">
        <h1 class="title">Dúvidas e Perguntas frequentes</h1>
        <div class="content-list">
            <div class="content-item">
                <span class="content-title"> Como faço para encontrar o produto que estou procurando? </span>
                <div class="item-desc">
                    <span class="n-text">
                        Se você precisar de ajuda para encontrar um produto, use nossa ferramenta de pesquisa de produtos no topo de qualquer página. Basta digitar qualquer palavra-chave(s) ou um número de produto e clique em "buscar". Os resultados da pesquisa serão exibidos na página, com links para produtos específicos. Você pode então, refinar a sua pesquisa, selecionando as diferentes categorias no lado esquerdo da página e apresentar seus resultados de pesquisa, por exemplo, por tipo de produto como shampoo, ou ainda por marca como Salon Line.
                        <br/>
                        &nbsp &nbsp Dicas de pesquisa: 
                        <br/>
                        Certifique-se que você digitou corretamente as palavras de busca, isto fornecerá resultados mais precisos.
                        <br/>
                        Use palavras para encontrar diferentes tipos de produtos, tais como "shampoo". Depois você pode refinar sua busca por marca.
                        <br/>
                    </span>
                </div>
            </div>
            <div class="content-item">
                <span class="content-title">O que devo fazer se o produto chegar danificado ou defeituoso?</span>
                <div class="item-desc">
                    Se você recebeu um produto danificado ou defeituoso, recomendamos que você entre em contato com nosso serviço de Atendimento ao Cliente através do email hairbox@gmail.com, atendimento 24 horas por dia 7 dias na semana.
                </div>
            </div>
            <div class="content-item">
                <span class="content-title"> Quais são as formas de pagamento existentes na loja? </span>
                <div class="item-desc">
                    Confira abaixo as opções de pagamento:
                    <br/>
                    <b>Cartão de Crédito:</b>
                    <br/>
                    Trabalhamos com os cartões VISA, MASTERCARD, DINERS CLUB, AMERICAN EXPRESS, HIPERCARD e ELO.
                    <br/>
                    Para sua segurança, todos os seus dados são mantidos em sigilo dentro de um ambiente protegido pela própria administradora, tornando sua compra simples e segura. A HairBox não mantém dados do cartão de crédito. 
                </div>
            </div>
            <div class="content-item">
                <span class="content-title"> Qual é o prazo de entrega do meu pedido? </span>
                <div class="item-desc">
                    O prazo de entrega é fixo para todas regiões do Brasil, sendo elas realizadas dentro de um prazo de 7 à 21 dias.
                    <br/>
                    Não esqueça! Nós começamos a contar a data da entrega a partir da data de confirmação de pagamento do seu pedido pela instituição financeira.
                </div>
            </div>
            <div class="content-item">
                <span class="content-title"> Qual o valor do frete? </span>
                <div class="item-desc">
                    O frete é fixo de acordo com cada região do Brasil, seguindo os valores a seguir:
                    <br/>
                    Sudeste: R$10,50.
                    <br/>
                    Sul: R$10,50.
                    <br/>
                    Centro-oeste: R$12,50.
                    <br/>
                    Nordeste: R$15,50.
                    <br/>
                    Norte: R$15,50.
                </div>
            </div>
            <div class="content-item">
                <span class="content-title"> Se eu não conseguir encontrar a resposta para minha pergunta aqui? </span>
                <div class="item-desc">
                    Se você não conseguir encontrar a resposta para sua pergunta, recomendamos entrar em contato com nosso Serviço de Atendimento ao Cliente através do e-mail: hairbox@gmail.com.
                </div>
            </div>
        </div>
    </section>
@endsection


@section('javascript')
    <script src="{{asset('js/faq.js')}}"></script>
    @guest
        <script src="{{asset('js/login.js')}}"></script>
    @endguest
@endsection
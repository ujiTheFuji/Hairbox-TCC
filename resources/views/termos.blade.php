@extends('layouts.app', ['current' => 'termos'])


@section('css')
    <link rel="stylesheet" href="{{asset('css/termos.css')}}">
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
        <h1 class="title">TERMOS DE USO HAIRBOX</h1>
        <div class="content-term">
            HairBox COMÉRCIO DE PRODUTOS PARA CABELO LTDA. Doravante denominada simplesmente HairBox, e a pessoa física ou jurídica identificada no cadastramento do banco de dados eletrônico do site da HairBox, doravante denominado simplesmente ASSOCIADO, celebram o presente contrato, mediante as cláusulas e condições abaixo:
            <br/>
            <br/> <b> 1. OBJETO </b> <br/>
            <br/>
            1.1. Pelo presente contrato, o ASSOCIADO adere ao plano de assinatura de produtos de cabelo HairBox, podendo optar por alguma das opções e dentro de algum dos planos descritos nos itens 2 e 3 deste instrumento, cujo objeto final é a venda mensal de 1 ou mais produtos de cabelo, de variadas marcas, em favor do ASSOCIADO.
            <br/>
            1.2. Os produtos mensalmente disponibilizados ao ASSOCIADO serão de livre escolha e opção do consumidor.
            <br/>
            <br/> <b>2. MODALIDADES DE ASSINATURA</b><br/>
            <br/>
            2.1. A HairBox disponibiliza ao ASSOCIADO quatro modalidades distintas de adesão ao seu plano de assinatura de livros:  BeautyBox, SuperBox, PowerBox e Profissional.
            <br/>
            2.2. Na modalidade BeautyBox, dispõe-se ao cliente a escolha de 1 a 4 itens, custando R$ 49,90, sem descontos. 
            <br/>
            2.3. Na modalidade SuperBox , oferece ao usuário que selecione de 5 a 7 produtos, custando R$ 79,90, com um desconto de 10%. 
            <br/>
            2.4.Na modalidade PowerBox, é oferecido de 8 a 12, custando R$ 124,90, com 15% de desconto.
            <br/>
            2.5.Na modalidade Profissional, é oferecido uma quantia de 12 a 25 produtos, oferecendo unidades profissionais importadas, sendo essa uma das diferenças com os outros planos, além da quantidade que cada um fornece e o preço, esse plano custará R$ 399,90, com 20% de desconto. 
            <br/>
            <br/><b>3. PLANOS DE ASSINATURA</b><br/>
            <br/>
            3.1. O ASSOCIADO da TAG, ao aderir às modalidades descritas acima, terá direito ao plano de assinatura : PLANO MENSAL 
            <br/>
            3.2. No PLANO MENSAL, o ASSOCIADO assinará a modalidade escolhida e receberá o respectivo kit com recorrência mensal.
            <br/>
            <br/> <b> 4. PREÇO E FORMAS DE PAGAMENTO </b> <br/>
            <br/>
            4.1. O ASSOCIADO pagará o preço vigente da modalidade de assinatura escolhida no site da HairBox, e o preço total é composto pela soma do valor do kit com o valor da taxa de entrega.
            <br/>
            4.1.1. A taxa de entrega variará de acordo com a região cadastrada para entrega do kit, e a TAG compromete-se em informar claramente ao ASSOCIADO, já no momento da contratação, o valor aplicável ao seu endereço.
            <br/>
            4.1.2. DESDE LOGO, O ASSOCIADO FICA CIENTE DE QUE A ALTERAÇÃO DO ENDEREÇO DE ENTREGA DO SEU KIT AO LONGO DA CONTRATAÇÃO PODERÁ MODIFICAR O PREÇO FINAL DA ASSINATURA, CASO O VALOR DA TAXA DE ENTREGA AO NOVO ENDEREÇO SEJA DIVERSO DO ANTERIOR.
            <br/>
            4.2. O preço de cada modalidade de assinatura e as condições específicas de pagamento de cada plano estarão amplamente expostos e divulgados no site da TAG no momento da contratação, e poderão ser reajustados mediante ampla divulgação e informação aos associados, o que será feito com antecedência mínima de 14 (quatorze) dias.
            <br/>
            4.2.1. O reajuste acima mencionado será aplicado automaticamente para a próxima mensalidade no caso de PLANO MENSAL, e o ASSOCIADO optante por este plano terá o direito de cancelar sua assinatura, sem ônus, dentro do prazo suprarreferido, caso discorde da alteração. Findo o prazo sem que haja manifestação do ASSOCIADO, o novo valor será considerado aceito e passará a ser cobrado nas mensalidades seguintes.
            <br/>
            4.3. Para fins de associação ao , site HairBox, além do cadastro completo, atualizado e verídico dos dados pessoais no site da HairBox, o ASSOCIADO deverá apresentar um cartão de crédito válido entre as bandeiras VISA, MASTERCARD, ELO, DINNERS, AMEX e HIPERCARD.
            <br/>
            4.4. No primeiro mês de adesão ao PLANO MENSAL, o lançamento do pagamento da mensalidade é realizado no momento da contratação do plano escolhido pelo ASSOCIADO. Depois, o lançamento das demais cobranças ocorrerá nos dias 15 (quinze), 20 (vinte) ou 25 (vinte e cinco) do mês anterior ao envio do kit. Caso o pagamento não seja capturado na data de cobrança, poderão ser realizadas novas tentativas de cobrança nos dias seguintes, até o dia 15 (quinze) do mês de competência (envio) do kit.
            <br/>
            4.5. Caso o ASSOCIADO não possua cartão de crédito, não será possível a assinatura dos planos.
            <br/>
            <br/> <b> 5. DIREITO DE ARREPENDIMENTO </b> <br/>
            <br/>
            5.1. O ASSOCIADO TERÁ ATÉ 7 (SETE) DIAS CONTADOS DO RECEBIMENTO DO PRIMEIRO KIT PARA EXERCER O DIREITO DE ARREPENDIMENTO PREVISTO NO ARTIGO 49 DO CÓDIGO DE DEFESA DO CONSUMIDOR (LEI Nº 8.078/90), DEVENDO, PARA TANTO, COMUNICAR TEMPESTIVAMENTE SUA VONTADE À HAIRBOX POR MEIO DO EMAIL HAIRBOX@GMAIL.COM	
            <br/>
            5.2. Se o ASSOCIADO exercitar o direito de arrependimento no prazo previsto acima, todos os valores eventualmente pagos, incluindo despesas com envio do kit, serão devolvidos pela HAIRBOX.
            <br/>
            5.3. O ASSOCIADO QUE EXERCER O DIREITO DE ARREPENDIMENTO OBRIGA-SE A REALIZAR A DEVOLUÇÃO DO KIT À HAIRBOX, QUE PRESTARÁ TODAS AS INFORMAÇÕES NECESSÁRIAS PARA TANTO.
            <br/>
            <br/> <b> 6. HIPÓTESES DE SUSPENSÃO E CANCELAMENTO </b> <br/>
            <br/>
            6.1. A SUSPENSÃO da assinatura é a opção do ASSOCIADO em não receber o kit em um mês específico, voltando a recebê-lo no mês seguinte, mantendo ativa sua assinatura, o que deverá ser comunicado à HairBox obrigatoriamente até o dia anterior à cobrança do kit que deseja suspender, pelo email hairbox@gmail.com, conforme exemplo descritivo abaixo: - O associado deseja suspender sua assinatura para não receber o kit no mês de maio, e a sua data de cobrança é o dia 20 (vinte). Portanto, para que a suspensão seja efetivada no mês de maio, o associado deve solicitá-la à HairBox até o dia 19 (dezenove) de abril, voltando a receber o kit no mês de junho.
            <br/>
            6.1.2. No caso do ASSOCIADO de PLANO MENSAL pagante via cartão de crédito, durante o mês de suspensão não será lançada cobrança de mensalidade, uma vez que foi feita a opção por não receber o kit naquele mês.
            <br/>
            6.2. O CANCELAMENTO é a opção do ASSOCIADO em encerrar, de forma definitiva, sua assinatura, o que deverá ser comunicado à HairBox até o dia anterior à cobrança do kit que deseja cancelar, pelo email hairbox@gmail.com, conforme exemplo descritivo abaixo: - O associado deseja cancelar sua assinatura para não receber mais o kit a partir do mês de setembro, e a sua data de cobrança é o dia 15 (quinze). Portanto, para que o cancelamento seja efetivado no mês de setembro, o associado deve solicitá-lo à HairBox até o dia 14 (quatorze) de agosto.
            <br/>
            6.2.1. No caso de PLANO MENSAL, ultrapassado o prazo de arrependimento previsto no item 5, o ASSOCIADO poderá, a qualquer momento e sem multa, cancelar a sua assinatura.
            <br/>
            6.2.5. SE A COBRANÇA NÃO FOR REALIZADA POR 2 (DOIS) MESES SEGUIDOS, MESMO COM A COMUNICAÇÃO DO PROBLEMA PELA HAIRBOX AO ASSOCIADO, VIA EMAIL E CONTATO TELEFÔNICO, A ASSINATURA PODERÁ SERÁ CANCELADA UNILATERALMENTE PELA HAIRBOX.
            <br/>
            <br/> <b> 7. REGRAS E PRAZOS DE ENVIO DO KIT </b> <br/>
            <br/>
            7.1. A HAIRBOX só realizará o envio do kit ao ASSOCIADO depois de confirmado o pagamento da respectiva mensalidade (no caso de PLANO MENSAL) via cartão de crédito.
            <br/>
            7.2. SE FOR CONSTATADO O NÃO LANÇAMENTO DA MENSALIDADE OU DA PARCELA NO CARTÃO DE CRÉDITO CADASTRADO PELO ASSOCIADO, POR ALGUM PROBLEMA ALHEIO À HAIRBOX, NÃO SERÁ ENVIADO O KIT AO ASSOCIADO ATÉ QUE ELE REGULARIZE SUA SITUAÇÃO DE PAGAMENTO.
            <br/>
            7.3. O prazo padrão para entrega do kit ao ASSOCIADO é até o dia 20 (vinte) do mês de envio/competência do kit, caso o pagamento seja realizado até o último dia do mês anterior. Por exemplo, o kit de abril será entregue, em regra, até o dia 20 (vinte) de abril, caso o pagamento tenha ocorrido ainda no mês de março.
            <br/>
            7.4. Se o pagamento for realizado após o dia 1º (primeiro) do mês de envio/competência do kit, o prazo para entrega variará dependendo da localidade, sendo, em média, de 15 (quinze) dias úteis contados da confirmação do pagamento.
            <br/>
            7.5. Se o kit não for entregue nos prazos médios informados nas cláusulas acima, a HAIRBOX oferecerá ao ASSOCIADO a possibilidade de aguardar mais 5 (cinco) dias úteis, a fim de que seja verificada a situação da entrega.
            <br/>
            7.5.1. Caso o ASSOCIADO não esteja de acordo com a dilação prevista no item acima, poderá solicitar à HAIRBOX, de imediato, a realização de um novo envio, a fim de suprir a primeira tentativa de entrega.
            <br/>
            7.5.2. Na hipótese do item acima, o ASSOCIADO será informado de que, caso venha a receber 2 (dois) exemplares idênticos do mesmo kit, terá de devolver um deles à HAIRBOX, que fornecerá as informações necessárias para tanto.
            <br/>
            7.6. A HAIRBOX INFORMA QUE PODEM OCORRER DIFICULDADES LOGÍSTICAS A DEPENDER DA LOCALIDADE PARA A QUAL O ASSOCIADO SOLICITOU O ENVIO DE SEUS KITS. NOS CASOS EM QUE HOUVER EXCEPCIONAL DIFICULDADE NO ATENDIMENTO AOS PRAZOS MÉDIOS DE ENTREGA DOS KITS, A HAIRBOX COLOCAR-SE-Á INTEIRAMENTE À DISPOSIÇÃO DO ASSOCIADO PARA SOLUCIONAR A SITUAÇÃO DA MELHOR MANEIRA POSSÍVEL.
            <br/>
            <br/> <b> 11. VIGÊNCIA E RESCISÃO IMOTIVADA </b> <br/>
            <br/>
            11.1. Este CONTRATO DE ASSOCIAÇÃO é celebrado por PRAZO INDETERMINADO, entrando em vigor na data de sua aprovação eletrônica, que se dá pela efetivação do cadastro dos dados pessoais, de contato e de cobrança do cartão de crédito do ASSOCIADO no site da HAIRBOX.
            <br/>
            11.2. AS PARTES PODERÃO, A QUALQUER TEMPO, RESCINDIR IMOTIVADA E UNILATERALMENTE O PRESENTE INSTRUMENTO, BASTANDO, PARA TANTO, COMUNICAÇÃO PRÉVIA À OUTRA PARTE, POR CORREIO ELETRÔNICO (EMAIL).
            <br/>
            11.4. Nos termos do item 6.2, se o ASSOCIADO rescindir o presente instrumento depois da data de cobrança do kit, o cancelamento só será efetivado no mês seguinte.
            <br/>
            <br/> <b>14. DISPOSIÇÕES GERAIS</b> <br/>
            <br/>
            14.1. Este CONTRATO DE ASSOCIAÇÃO constitui o entendimento integral entre as partes e atende, principalmente, às disposições do Código de Defesa do Consumidor (Lei nº 8.078/90) e do Decreto nº 7.962/13.
            <br/>
            14.2. O ASSOCIADO declara e garante possuir capacidade jurídica para celebrar este CONTRATO DE ASSOCIAÇÃO e se compromete a manter seus dados pessoais informados no cadastro devidamente atualizados junto à HAIRBOX, principalmente o endereço para envio do kit, o email e o contato telefônico.
            <br/>
            14.3. A HAIRBOX NÃO SE RESPONSABILIZARÁ, EM NENHUMA HIPÓTESE, CASO O ASSOCIADO NÃO OBSERVAR O DEVER DE MANTER ATUALIZADOS SEUS DADOS PESSOAIS.
            <br/>
            14.4. A HAIRBOX NÃO SE RESPONSABILIZA PELO USO INADEQUADO DOS PRODUTOS QUE COMPÕEM O KIT, CUJA DESTINAÇÃO DEVE SER OBSERVADA FIELMENTE PELO ASSOCIADO, SENDO SUA RESPONSABILIDADE EXCLUSIVA A FILTRAGEM DE SEUS DESTINATÁRIOS.
            <br/>
            14.5. A estrutura do site hairbox.net, bem como a logomarca, os textos, as imagens, os vídeos e demais aplicações informáticas que o compõem, são de propriedade da HAIRBOX e protegidas pela legislação brasileira referente à propriedade intelectual, e o ASSOCIADO não está autorizado a utilizar, sob qualquer forma ou pretexto, as marcas, conteúdos e serviços propostos pelo site, podendo a HAIRBOX recorrer às medidas cíveis e penais cabíveis contra a utilização ou reprodução indevida.
            <br/>
            14.6. Ao enviar qualquer conteúdo ao site da HAIRBOX, o ASSOCIADO retém a titularidade de seus direitos sobre esse conteúdo (textos, vídeos, imagens, áudio, entre outros), cedendo à HAIRBOX uma licença de caráter gratuito, irrevogável, mundial e não exclusiva para a reprodução, modificação e exibição, sob qualquer meio ou forma, inclusive no site.
            <br/>
            14.7. A HAIRBOX RESERVA-SE AO DIREITO DE, A SEU CRITÉRIO E A QUALQUER TEMPO, MODIFICAR, ADICIONAR OU REMOVER QUAISQUER CLÁUSULAS OU CONDIÇÕES DESTE CONTRATO DE ASSOCIAÇÃO, COMUNICANDO AO ASSOCIADO, PREVIAMENTE, POR EMAIL E MEDIANTE PUBLICAÇÃO EM SUAS REDES SOCIAIS, COM ANTECEDÊNCIA MÍNIMA DE 14 (QUATORZE) DIAS.
            <br/>
            14.8. Ao ASSOCIADO fica garantido o direito de cancelar o presente CONTRATO DE ASSOCIAÇÃO na hipótese de não concordar com as eventuais alterações previstas no item acima, realizadas pela HAIRBOX.
            <br/>
            14.9. Qualquer tipo de promoção de adesão feita pela HAIRBOX não aproveitará ao ASSOCIADO cuja adesão tenha sido feita em período anterior, exceto se expressamente divulgada nesse sentido.
            <br/>
            14.10. O ASSOCIADO fica desde logo ciente de que a HAIRBOX não possui autonomia e ingerência sobre os procedimentos de estorno de valores pagos via cartão de crédito, uma vez que são as instituições financeiras que controlam o modo de sua realização.
            <br/>
            14.11. O disposto acima não exclui o direito do ASSOCIADO ao ressarcimento pelo cancelamento da compra com a HAIRBOX, mas o procedimento para tanto será verificado caso a caso juntamente com o banco ou a operadora do cartão de crédito em questão.
            <br/>
            14.12. O ASSOCIADO aceita que a HAIRBOX, de forma razoável, envie-lhe mensagens de email ou outras correspondências de caráter promocional e informativo.
            <br/>
            14.13. A HAIRBOX compromete-se em manter serviço adequado e eficaz de atendimento pelo email hairbox@gmail, possibilitando ao ASSOCIADO a resolução de demandas referentes a informações, dúvidas, reclamações, suspensão ou cancelamento do presente CONTRATO DE ASSOCIAÇÃO.
            <br/>
            14.14. A POLÍTICA DE PRIVACIDADE E SEGURANÇA é parte integrante deste CONTRATO DE ASSOCIAÇÃO, e as partes contratantes comprometem-se a cumpri-lo.
        </div>
    </section>
@endsection

@section('javascript')


    @guest
        <script src="{{asset('js/login.js')}}"></script>
    @endguest
@endsection
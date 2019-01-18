<?php

use Illuminate\Database\Seeder;
class umproduto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            'desc_prod' => 'Condicionador Cacho dos Sonhos {XÔ RESSECAMENTO!} 300ML! Aproveita e mostra para as amigas a linha completa!',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Cacho dos sonhos',
            'quant_prod' => 10
        ]);

	    DB::table('imagem_produtos')->insert([
            'produto_id' => 1,
            'imagem_um' => 'imagens/010.jpg',
            'imagem_dois' => 'imagens/009.jpg'
        ]);


        DB::table('produtos')->insert([
            'desc_prod' => 'CO-WASH S.O.S BOMBA ORIGINAL limpa e condiciona a fibra capilar, deixando os cabelos mais saudáveis.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'SOS bomba CO-WASH',
            'quant_prod' => 50
        ]);

        DB::table('imagem_produtos')->insert([
            'produto_id' => 2,
            'imagem_um' => 'imagens/026.png',
            'imagem_dois' => 'imagens/025.png'
        ]);



        DB::table('produtos')->insert([
            'desc_prod' => 'Condicionador Crespissimo Black Power - {ESTILO DIVO} 300ML. Com ativos supernutritivos e hidratantes!',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Crespissimo black power',
            'quant_prod' => 50
        ]);

        DB::table('imagem_produtos')->insert([
            'produto_id' => 3,
            'imagem_um' => 'imagens/006.png',
            'imagem_dois' => 'imagens/005.png'
        ]);


        DB::table('produtos')->insert([
            'desc_prod' => 'Condicionador Crespo Divino {Desembaraço Divo} 300ml. Hidratação na dose certa! ',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Crespo divino',
            'quant_prod' => 50
        ]);

        DB::table('imagem_produtos')->insert([
            'produto_id' => 4,
            'imagem_um' => 'imagens/008.jpg',
            'imagem_dois' => 'imagens/007.jpg'
        ]);


DB::table('produtos')->insert([
            'desc_prod' => 'Condicionador Hidra - BABOSA & QUERATINA 300ML. Além de hidratar, garante restauração, desembaraço, força e maciez aos fios. ',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Babosa & queratina',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 5,
            'imagem_um' => 'imagens/024.jpg',
            'imagem_dois' => 'imagens/023.jpg'
]);



DB::table('produtos')->insert([
            'desc_prod' => 'Condicionador Hidra - LEITE DE COCO & COLÁGENO 300ML. Perfeito para hidratar, nutrir e manter a saúde dos fios. ',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Hidra coco',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 6,
            'imagem_um' => 'imagens/018.jpg',
            'imagem_dois' => 'imagens/017.jpg'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'Condicionador Maria Natureza - ÓLEOS MILENARES RITUAL REPARAÇÃO 350ML. Garante fios reconstruídos e nutridos desde o primeiro uso. Um cuidado profundo da raiz às pontas!',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Maria natureza',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 7,
            'imagem_um' => 'imagens/020.jpg',
            'imagem_dois' => 'imagens/019.jpg'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'Condicionador meu liso - ARGAN REPARAÇÃO 300ML. Para fios quebradiços e sem vida.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Argan reparacao',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 8,
            'imagem_um' => 'imagens/016.jpg',
            'imagem_dois' => 'imagens/015.jpg'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'Condicionador meu liso - COCO HIDRATAÇÃO 300ML. Para fios impecáveis, sem frizz e hidratados.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Coco hidratacao',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 9,
            'imagem_um' => 'imagens/014.jpg',
            'imagem_dois' => 'imagens/013.jpg'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'Condicionador S.O.S cachos - RADIANCE BRILHO ABSOLUTO 300ML.  Possui poderosa combinação com fórmula que hidrata e nutre os fios',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Radiance brilho absoluto',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 10,
            'imagem_um' => 'imagens/022.jpg',
            'imagem_dois' => 'imagens/021.jpg'
]);




DB::table('produtos')->insert([
            'desc_prod' => ' Possui fórmula mega hidratante e nutritiva que garante brilho extremo aos fios. Ao mesmo tempo que repara os fios, cria uma barreira protetora contra danos externos causados pelo dia a dia.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Cachos mel suaves',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 11,
            'imagem_um' => 'imagens/004.jpg',
            'imagem_dois' => 'imagens/003.png'
]);




DB::table('produtos')->insert([
            'desc_prod' => 'Possui fórmula mega hidratante e nutritiva que garante brilho extremo aos fios. Ao mesmo tempo que repara os fios, cria uma barreira protetora contra danos externos causados pelo dia a dia.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Cachos mel intensos',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 12,
            'imagem_um' => 'imagens/004.jpg',
            'imagem_dois' => 'imagens/003.png'
]);



DB::table('produtos')->insert([
            'desc_prod' => 'Condicionador meu liso-  MEU LISO #DESMAIADO - 300ML. O  Condicionador desembaraça, elimina o frizz e ainda finaliza com um desmaio e alinhamento lindo dos fios!',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Meu liso #desmaiado',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 13,
            'imagem_um' => 'imagens/002.png',
            'imagem_dois' => 'imagens/001.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'Condicionador S.O.S BOMBA CONDICIONADOR BRILHO 3D. Cabelos brilhantes, lindos e saudáveis! ',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'SOS bomba condicionador brilho 3d',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 14,
            'imagem_um' => 'imagens/012.jpg',
            'imagem_dois' => 'imagens/011.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'Creme para pentear #TODECACHO. Seus fios ficam seladinhos, leves e macios! ',
            'tipo_prod' => 'creme de pentear',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Vinagre de maca',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 15,
            'imagem_um' => 'imagens/095.png',
            'imagem_dois' => 'imagens/096.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'Creme para pentear ATIVADOR DE CACHOS KIDS. O hidratante indicado para cabelos crespos e cacheados volumosos, ele define os cachinhos, desembaraça e protege. ',
            'tipo_prod' => 'creme de pentear',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Ativador de cachos kids',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 16,
            'imagem_um' => 'imagens/099.png',
            'imagem_dois' => 'imagens/098.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'Relaxante Natural: Gel Controle de Volume S.O.S Cachos 320ml. Para te ajudar em sua rotina de cuidados com os fios!',
            'tipo_prod' => 'creme de pentear',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'SOS volume',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 17,
            'imagem_um' => 'imagens/094.png',
            'imagem_dois' => 'imagens/093.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'Essa poderosa combinação possui fórmula hidratante e nutritiva, além de ultra desembaraante, também sela as cutículas promovendo brilho radiante e cachos controlados e sem frizz.',
            'tipo_prod' => 'creme de pentear',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Radiance brilho absoluto',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 18,
            'imagem_um' => 'imagens/090.png',
            'imagem_dois' => 'imagens/091.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'Creme para pentear - BRILHO UMIDIFICADO 1KG. E agora com brilho máximo e desembaraço perfeito dos fios.',
            'tipo_prod' => 'creme de pentear',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Brilho umidificado',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 19,
            'imagem_um' => 'imagens/085.jpg',
            'imagem_dois' => 'imagens/084.png'
]);


    DB::table('produtos')->insert([
            'tipo_prod' => 'creme de pentear',
            'desc_prod' => 'Com óleo de Rícino, um óleo vegetal com alto poder hidratante e nutritivo, e queratina, que possui ação de reparação extrema proporcionando força e brilho aos cabelos.',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Ricino e queratina',
            'quant_prod' => 52
    ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 20,
            'imagem_um' => 'imagens/085.png',
            'imagem_dois' => 'imagens/083.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'O  Ativador de Cachos Argan Nutrição Liberada S.O.S Cachos com fórmula para um cuidado mais saudável dos cabelos. Com óleo de Argan e Proteína do Arroz. ',
            'tipo_prod' => 'creme de pentear',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Ativador de cachos argan',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 21,
            'imagem_um' => 'imagens/089.png',
            'imagem_dois' => 'imagens/080.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'Creme para pentear ÓLEO DE MANGA TRADICIONAL  S.O.S CACHOS 300ml. Essa poderosa combinação controla o volume, reduz o frizz e ainda garante um super desembaraço e hidratação.',
            'tipo_prod' => 'creme de pentear',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'SOS cachos oleo de manga',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 22,
            'imagem_um' => 'imagens/070.png',
            'imagem_dois' => 'imagens/071.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'Creme para pentear CREME PARA PENTEAR RECONSTRUÇÃO INTENSA 1kg- Força , resistência e reparação dos danos. Prevenção de pontas duplas. Para cabelos fragilizados, quebradiços e em transição.',
            'tipo_prod' => 'creme de pentear',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Reconstrucao intensa',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 23,
            'imagem_um' => 'imagens/072.png',
            'imagem_dois' => 'imagens/073.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'O Ativador de Cachos Teen S.O.S Cachos 300ml. perfeito para as jovens que querem manter os seus cachos nutridos, hidratados e controlados, sempre! Com Calándula e óleo de Algodão.',
            'tipo_prod' => 'Finalizador',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Ativador de cachos teen',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 24,
            'imagem_um' => 'imagens/075.png',
            'imagem_dois' => 'imagens/074.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'Black power crespissimo poderoso {ESTILO DIVO!}. Com ativos super nutritivos e mega hidratantes, ele vai te deixar com um crespo de dar inveja! ',
            'tipo_prod' => 'Finalizador',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Black power crespissimo poderoso',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 25,
            'imagem_um' => 'imagens/077.png',
            'imagem_dois' => 'imagens/076.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'Sua fórmula condiciona os cabelos, conferindo brilho e maciez, evitando o ressecamento.',
            'tipo_prod' => 'Finalizador',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Loção neutralizante liquida',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 26,
            'imagem_um' => 'imagens/078.png',
            'imagem_dois' => 'imagens/079.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'Finalizador-ÓLEO CREME DE COCO TRATAMENTO PROFUNDO S.O.S CACHOS 100ml- Com óleo de manteiga de coco para uma hidratação nutritiva, antiressecameto e reparação total da fibra. ',
            'tipo_prod' => 'Finalizador',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Umectacao coco profundo ',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 27,
            'imagem_um' => 'imagens/060.png',
            'imagem_dois' => 'imagens/061.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => ' Cremáscara 201 S.O.S Cachos Nutritivo, uma máscara de tratamento cosmético finalizadora 2 em 1, ou seja, além de ser uma máscara super nutritiva. ',
            'tipo_prod' => 'Mascara',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'SOS cacho nutritivo',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 28,
            'imagem_um' => 'imagens/062.png',
            'imagem_dois' => 'imagens/063.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'A Máscara de Babosa Tratamento pra divar {Alerta Salvação!} 5 em 1: tem ação super hidratante, fortalecimento power, rejuvenescimento poderoso, crescimento super saudável e brilho divo. ',
            'tipo_prod' => 'Mascara',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Mascara de babosa',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 29,
            'imagem_um' => 'imagens/065.jpg',
            'imagem_dois' => 'imagens/064.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'MÁSCARA DE HIDRATAÇÃO CONCENTRADA TURBINADA, NÍVEL 3, 1Kg- ideal para cuidar dos fios de nível 3 de ressecamento, ou seja, extremamente ressecados. Além disso, ela não possui Parabenos!',
            'tipo_prod' => 'Mascara',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Mascara de hidratacao turbinada',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 30,
            'imagem_um' => 'imagens/067.png',
            'imagem_dois' => 'imagens/066.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'MÁSCARA DE HIDRATAÇÃO MEU LISO BRILHO 300gr- Além de hidratar como ninguém! Banho de brilho pra sempre! Com Extrato de Pérola, D-Pantenol e Argan.',
            'tipo_prod' => 'Mascara',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Mascara de hidratacao meuliso brilho',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 31,
            'imagem_um' => 'imagens/068.png',
            'imagem_dois' => 'imagens/069.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'Além desembaraçar os fios, sua fórmula garante toque ultra sedoso e cabelos desmaiados. ',
            'tipo_prod' => 'Mascara',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Mascara festival das flores',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 32,
            'imagem_um' => 'imagens/051.png',
            'imagem_dois' => 'imagens/052.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'Chega de misturinhas caseiras, aqui tem tudo que você precisa para o seu cabelo crescer muito mais forte e saudável! Uma explosão de restauração mega intensiva, perfeito para sua hidratação! ',
            'tipo_prod' => 'Mascara',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Mascara hidratante bombastica',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 33,
            'imagem_um' => 'imagens/050.png',
            'imagem_dois' => 'imagens/053.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => ' Não importa, ele perfeito para os dois, sério. Ela é tão poderosa que consegue hidratar sem pesar. ',
            'tipo_prod' => 'Mascara',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Mascara hidratante detox',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 34,
            'imagem_um' => 'imagens/054.png',
            'imagem_dois' => 'imagens/055.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'que age na regeneração de fios ressecados. O resultado incrível: fios mais hidratados, fortes e, o mais importante, com a cor que você deseja. ',
            'tipo_prod' => 'Mascara',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Mascara hidratante matizadora',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 35,
            'imagem_um' => 'imagens/057.png',
            'imagem_dois' => 'imagens/056.png'
]);



DB::table('produtos')->insert([
            'desc_prod' => ' MÁSCARA MEU LISO ABACATE ALISADOS E RELAXADOS 500g. O bom de ser poderosa que a opinião alheia não faz a menor diferença né?! Por isso, pode alisar ou relaxar o cabelo feliz da vida!',
            'tipo_prod' => 'Mascara',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Mascara meu liso abacate',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 36,
            'imagem_um' => 'imagens/058.png',
            'imagem_dois' => 'imagens/059.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'ele ainda deixa o cabelo mais forte e ajuda no rescimento saudável.Óleo de argan: brilho, nutrição profunda e ajuda a restaurar a flexibilidade natural dos fios. ',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Shampoo brilho 3d',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 37,
            'imagem_um' => 'imagens/041.png',
            'imagem_dois' => 'imagens/040.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'SHAMPOO CACHOS DOS SONHOS {LIMPEZA BABADEIRA!} 300ML.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Shampoo cacho dos sonhos',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 38,
            'imagem_um' => 'imagens/042.png',
            'imagem_dois' => 'imagens/043.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'SHAMPOO CRESPISSIMO BLACK POWER - {MEU CRESPO PIRA} 300ML.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Shampoo crespissimo black power',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 39,
            'imagem_um' => 'imagens/045.png',
            'imagem_dois' => 'imagens/044.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'Shampoo Crespo Divino {Limpeza Milagrosa} 300ml. ',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Shampoo crespo divino',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 40,
            'imagem_um' => 'imagens/048.png',
            'imagem_dois' => 'imagens/047.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'SHAMPOO HIDRA - BABOSA & QUERATINA 300ML. Shampoo Hidra Babosa, limpa,hidrata e restaura os fios, devolvendo força,vitalidade e brilho saudável aos fios.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Shampoo babosa e queratina',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 41,
            'imagem_um' => 'imagens/039.png',
            'imagem_dois' => 'imagens/049.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'SHAMPOO HIDRA - LEITE DE COCO & COLÁGENO 300ML. O Shampoo Hidra Coco limpa e, ao mesmo tempo, hidrata os fios, garantindo saúde e brilho ao cabelo.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Shampoo leite de coco e colageno ',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 42,
            'imagem_um' => 'imagens/037.png',
            'imagem_dois' => 'imagens/038.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'SHAMPOO MARIA NATUREZA - ÓLEOS MILENARES RITUAL REPARAÇÃO 350ML.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Shampoo maria natureza',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 43,
            'imagem_um' => 'imagens/035.png',
            'imagem_dois' => 'imagens/036.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'a linha Argan Reparação a salvação, já que ela fortalece os fios da raiz até as pontas.O Shampoo Argan Reparação proporciona limpeza profunda dos danos, rejuvenescendo a fibra.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Shampoo argan reparacao ',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 44,
            'imagem_um' => 'imagens/033.png',
            'imagem_dois' => 'imagens/034.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'Para fios impecáveis, sem frizz e hidratados, a linha Coco Hidratação a solução. O Shampoo Coco Hidratação oferece limpeza saudável e hidratante, além de combater as pontas duplas.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Shampoo meu liso coco hidratacao ',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 45,
            'imagem_um' => 'imagens/032.png',
            'imagem_dois' => 'imagens/031.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'Essa poderosa combinação, possui fórmula que ao mesmo tempo limpa, hidrata e nutre os os, além de selar as cutículas, promovendo brilho radiante.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Shampoo radiance brilho absoluto  ',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 46,
            'imagem_um' => 'imagens/101.png',
            'imagem_dois' => 'imagens/102.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'SHAMPOO SALON LINE - S.O.S BOMBA ORIGINAL - 300M.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Shampoo bomba original ',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 47,
            'imagem_um' => 'imagens/104.png',
            'imagem_dois' => 'imagens/103.png'
]);



DB::table('produtos')->insert([
            'desc_prod' => 'Um cabelo liso com tom vermelho super intenso! E sabe como você conquista isso? Simples migs! se usar nosso Shampoo poderoso com limpeza e matização que são simplesmente maras!',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Salon line',
            'nome_prod' => 'Shampoo vermelho meu liso ',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 48,
            'imagem_um' => 'imagens/106.png',
            'imagem_dois' => 'imagens/105.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'Desenvolvido para homens, o Shampoo CLEAR Men Ice Cool Menthol com Mentol, remove a sujeira, oleosidade e caspa no cabelo e couro cabeludo.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Clear Men',
            'nome_prod' => 'Shampoo Anticaspa Ice Cool Menthol',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 49,
            'imagem_um' => 'imagens/cshampoo_1.1.png',
            'imagem_dois' => 'imagens/cshampoo_1.2.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'Desenvolvido para homens, o Shampoo CLEAR Men Queda Control com cafeína, Agora você está pronto para continuar vencendo.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Clear Men',
            'nome_prod' => 'Shampoo Anticaspa Queda Control',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 50,
            'imagem_um' => 'imagens/cshampoo_2.1.png',
            'imagem_dois' => 'imagens/cshampoo_2.2.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'Desenvolvido para homens, porque o couro cabeludo do homem está mais propenso a caspa. Uma preocupação a menos para a ascensão da sua carreira.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Clear Men',
            'nome_prod' => 'Shampoo Anticaspa Limpeza Profunda',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 51,
            'imagem_um' => 'imagens/cshampoo_3.1.png',
            'imagem_dois' => 'imagens/cshampoo_3.2.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'Com Eucalipto e Melaleuca, o Shampoo Anticaspa CLEAR alívio da Coceira remove a caspa e chega  raiz do problema para proporcionar um alívio da coceira duradouro.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Clear Men',
            'nome_prod' => 'Shampoo Anticaspa alívio da Coceira',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 52,
            'imagem_um' => 'imagens/cshampoo_4.1.png',
            'imagem_dois' => 'imagens/cshampoo_4.2.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'O novo Shampoo TRESemmé hidratação Profunda hidrata e restaura a maciez dos fios, sem deixar o cabelo com aquele aspecto pesado. Pode ser usado todos os dias.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'TRESemme',
            'nome_prod' => 'SHAMPOO hidratação PROFUNDA',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 53,
            'imagem_um' => 'imagens/shampoo_1.1.png',
            'imagem_dois' => 'imagens/shampoo_1.2.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'O novo Shampoo TRESemmé reconstrução e força reduz 99% da quebra dos fios desde o primeiro uso. Pode ser usado todos os dias e  indicado para cabelos danificados.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'TRESemme',
            'nome_prod' => 'SHAMPOO reconstrução E força',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 54,
            'imagem_um' => 'imagens/shampoo_2.1.png',
            'imagem_dois' => 'imagens/shampoo_2.2.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'O novo Shampoo TRESemmé Cachos Definidos hidrata, define e de movimento aos cabelos cacheados que precisam de um boost de hidratação. Pode ser usado todos os dias',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'TRESemme',
            'nome_prod' => 'SHAMPOO CACHOS DEFINIDOS',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 55,
            'imagem_um' => 'imagens/shampoo_3.1.png',
            'imagem_dois' => 'imagens/shampoo_3.2.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'O novo Shampoo TRESemmé Liso Keratina  ideal para quem já tem cabelos lisos, mas sofre com o frizz dos fios rebeldes. Pode ser usado todos os dias e á indicado para cabelos lisos.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'TRESemme',
            'nome_prod' => 'SHAMPOO LISO KERATINA',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 56,
            'imagem_um' => 'imagens/shampoo_4.1.png',
            'imagem_dois' => 'imagens/shampoo_4.2.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'O novo Shampoo TRESemmé TRESplex Regeneração á ideal para quem deseja restaurar o cabelo após danos causados pelo calor do secador. Pode ser usado todos os dias.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'TRESemme',
            'nome_prod' => 'SHAMPOO TRESPLEX REGENERação',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 57,
            'imagem_um' => 'imagens/shampoo_5.1.png',
            'imagem_dois' => 'imagens/shampoo_5.2.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'O Shampoo TRESemmé Baixo Poo +nutrição nutre e revitaliza a beleza natural dos seus cabelos. Pode ser usado todos os dias e á indicado para cabelos normais a secos.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'TRESemme',
            'nome_prod' => 'SHAMPOO BAIXO POO +nutrição',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 58,
            'imagem_um' => 'imagens/shampoo_6.1.png',
            'imagem_dois' => 'imagens/shampoo_6.2.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'Inspirada nos tratamentos de salão, a linha TRESemmé Detox Capilar, deixando os cabelos purificados e nutridos. Pode ser usado todos os dias.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'TRESemme',
            'nome_prod' => 'SHAMPOO DETOX CAPILAR',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 59,
            'imagem_um' => 'imagens/shampoo_7.1.png',
            'imagem_dois' => 'imagens/shampoo_7.2.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'A nova mascara de Tratamento Intensivo TRESemmé Baixo Poo +nutrição nutre e revitaliza a beleza natural dos seus cabelos.',
            'tipo_prod' => 'mascara',
            'marca_prod' => 'TRESemme',
            'nome_prod' => 'mascara DE TRATAMENTO BAIXO POO +nutrição',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 60,
            'imagem_um' => 'imagens/mascara_1.1.png',
            'imagem_dois' => 'imagens/mascara_1.2.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'A nova mascara de Tratamento Intensivo TRESemmé hidratação Profunda hidrata e restaura a maciez dos fios, sem deixar o cabelo com aquele aspecto pesado.',
            'tipo_prod' => 'mascara',
            'marca_prod' => 'TRESemme',
            'nome_prod' => 'mascara DE TRATAMENTO hidratação PROFUNDA',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 61,
            'imagem_um' => 'imagens/mascara_2.1.png',
            'imagem_dois' => 'imagens/mascara_2.2.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'A nova mascara de Tratamento Intensivo TRESemmé reconstrução e força reduz 99% da quebra dos fios desde o primeiro uso, deixando seus cabelos mais fortes e resistentes.',
            'tipo_prod' => 'mascara',
            'marca_prod' => 'TRESemme',
            'nome_prod' => 'mascara DE TRATAMENTO reconstrução E força',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 62,
            'imagem_um' => 'imagens/mascara_3.1.png',
            'imagem_dois' => 'imagens/mascara_3.2.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'Inspirada nos tratamentos de salão, a linha TRESemmé Detox Capilar á uma maneira acessível de fazer detox nos cabelos em casa.',
            'tipo_prod' => 'mascara',
            'marca_prod' => 'TRESemme',
            'nome_prod' => 'mascara DE TRATAMENTO DETOX CAPILAR',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 63,
            'imagem_um' => 'imagens/mascara_4.1.png',
            'imagem_dois' => 'imagens/mascara_4.2.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'A nova mascara de Tratamento Pré-Shampoo TRESemmé TRESplex Regeneração  ideal para quem deseja restaurar o cabelo após danos causados pelo calor do secador.',
            'tipo_prod' => 'mascara',
            'marca_prod' => 'TRESemme',
            'nome_prod' => 'mascara DE TRATAMENTO PRé-SHAMPOO TRESPLEX REGENERação',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 64,
            'imagem_um' => 'imagens/mascara_5.1.png',
            'imagem_dois' => 'imagens/mascara_5.2.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'O Condicionador TRESemmé Baixo Poo +nutrição nutre e revitaliza a beleza natural dos seus cabelos. Pode ser usado todos os dias e é indicado para cabelos normais a secos.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'TRESemme',
            'nome_prod' => 'CONDICIONADOR BAIXO POO +nutrição',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 65,
            'imagem_um' => 'imagens/condicionador_1.1.png',
            'imagem_dois' => 'imagens/condicionador_1.2.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'O novo Condicionador TRESemmé hidratação Profunda hidrata e restaura a maciez dos fios, sem deixar o cabelo com aquele aspecto pesado. Pode ser usado todos os dias',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'TRESemme',
            'nome_prod' => 'CONDICIONADOR hidratação PROFUNDA',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 66,
            'imagem_um' => 'imagens/condicionador_2.1.png',
            'imagem_dois' => 'imagens/condicionador_2.2.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'O novo Condicionador TRESemmé reconstrução e força reduz 99% da quebra dos fios desde o primeiro uso, deixando seus cabelos mais fortes e resistentes. Pode ser usado todos os dias',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'TRESemme',
            'nome_prod' => 'CONDICIONADOR reconstrução E força',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 67,
            'imagem_um' => 'imagens/condicionador_3.1.png',
            'imagem_dois' => 'imagens/condicionador_3.2.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'Inspirada nos tratamentos de salão, a linha TRESemmé Detox Capilar  uma maneira acessível de fazer detox nos cabelos em casa.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'TRESemme',
            'nome_prod' => 'CONDICIONADOR DETOX CAPILAR',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 68,
            'imagem_um' => 'imagens/condicionador_4.1.png',
            'imagem_dois' => 'imagens/condicionador_4.2.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'O novo Condicionador TRESemmé TRESplex Regeneração  ideal para quem deseja restaurar o cabelo após danos causados pelo calor do secador.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'TRESemme',
            'nome_prod' => 'CONDICIONADOR TRESPLEX REGENERação',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 69,
            'imagem_um' => 'imagens/condicionador_5.1.png',
            'imagem_dois' => 'imagens/condicionador_5.2.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'O novo Condicionador TRESemmé Cachos Definidos hidrata, define e de movimento aos cabelos cacheados que precisam de um boost de hidratação.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'TRESemme',
            'nome_prod' => 'CONDICIONADOR CACHOS DEFINIDOS',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 70,
            'imagem_um' => 'imagens/condicionador_6.1.png',
            'imagem_dois' => 'imagens/condicionador_6.2.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'O novo Condicionador TRESemme Cachos Definidos hidrata, define e de movimento aos cabelos cacheados que precisam de um boost de hidratação. indicado para cabelos cacheados do tipo 2BC e 3ABC.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'TRESemme',
            'nome_prod' => 'CONDICIONADOR LISO KERATINA',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 71,
            'imagem_um' => 'imagens/condicionador_7.1.png',
            'imagem_dois' => 'imagens/condicionador_7.2.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'O Creme de Pentear TRESemmé ANTIFRIZZ  ideal para quem já tem cabelos lisos ou ondulados, mas precisa controlar o frizz dos fios, deixando seus cabelos mais alinhados',
            'tipo_prod' => 'Creme de pentear',
            'marca_prod' => 'TRESemme',
            'nome_prod' => 'CREME DE PENTEAR ANTIFRIZZ',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 72,
            'imagem_um' => 'imagens/creme_pentear_1.1.png',
            'imagem_dois' => 'imagens/creme_penter_1.2.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'O Creme de Pentear TRESemmé REVITALIZA  real para quem quer manter seus cabelos sempre nutridos, revitalizados e com acabamento profissional.  indicado para cabelos normais a secos.',
            'tipo_prod' => 'Creme de pentear',
            'marca_prod' => 'TRESemme',
            'nome_prod' => 'CREME DE PENTEAR REVITALIZA',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 73,
            'imagem_um' => 'imagens/creme_pentear_2.1.png',
            'imagem_dois' => 'imagens/creme_penter_2.2.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'O Creme de Pentear TRESemmé HIDRATA  ideal para quem tem um rotina corrida, mas quer manter seus cabelos sempre hidratados, bonitos e com acabamento profissional. ',
            'tipo_prod' => 'Creme de pentear',
            'marca_prod' => 'TRESemme',
            'nome_prod' => 'CREME DE PENTEAR HIDRATA',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 74,
            'imagem_um' => 'imagens/creme_pentear_3.1.png',
            'imagem_dois' => 'imagens/creme_penter_3.2.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'A Geleia Modeladora TRESemmé DEFINE  ideal para deseja ter cachos definidos, sem frizz e com acabamento profissional.  indicado para cabelos cacheados do tipo 2BC, 3ABC e 4ABC.',
            'tipo_prod' => 'Creme de pentear',
            'marca_prod' => 'TRESemme',
            'nome_prod' => 'GELEIA MODELADORA DEFINE',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 75,
            'imagem_um' => 'imagens/creme_pentear_4.1.png',
            'imagem_dois' => 'imagens/creme_penter_4.2.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'O Creme de Pentear TRESemmé CACHOS  ideal para quem tem cabelos cacheados que precisam de um boost de hidratação para deixa-los ainda mais definidos',
            'tipo_prod' => 'Creme de pentear',
            'marca_prod' => 'TRESemme',
            'nome_prod' => 'CREME DE PENTEAR CACHOS',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 76,
            'imagem_um' => 'imagens/creme_pentear_5.1.png',
            'imagem_dois' => 'imagens/creme_penter_5.2.png'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'O Creme de Pentear TRESemmé CRESPOS  ideal para quem tem cabelos crespos que precisam de constante hidratação.',
            'tipo_prod' => 'Creme de pentear',
            'marca_prod' => 'TRESemme',
            'nome_prod' => 'CREME DE PENTEAR CRESPOS',
            'quant_prod' => 50
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 77,
            'imagem_um' => 'imagens/creme_pentear_6.1.png',
            'imagem_dois' => 'imagens/creme_penter_6.2.png'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'Com máximo poder emoliente e ação ultra-hidratante, Inoar Absolut Daymoist CLR  perfeita para te acompanhar nos desafios do dia a dia.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'INOAR',
            'nome_prod' => 'Absolut DayMoist',
            'quant_prod' => 51
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 78,
            'imagem_um' => 'imagens/absolutcond.jpg',
            'imagem_dois' => 'imagens/absolutcond2.jpg'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'Condicionador em tamanho salão para cabelos ressecados. Inoar coleção Blends Condicionador hidrata a fibra capilar para devolver o brilho e a maciez perdida. ',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'INOAR',
            'nome_prod' => 'Inoar coleção Blends',
            'quant_prod' => 51
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 79,
            'imagem_um' => 'imagens/blend.jpg',
            'imagem_dois' => 'imagens/blend2.jpg'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'Condicionador para cabelos ondulados, cacheados e crespos. Inoar Meu Cacho, Meu Crush Condicionador nutre e hidrata intensamente, além de definir.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'INOAR',
            'nome_prod' => 'Inoar Meu Cacho, Meu Crush',
            'quant_prod' => 51
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 80,
            'imagem_um' => 'imagens/cacho.jpg',
            'imagem_dois' => 'imagens/cacho2.jpg'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'O incomparável poder de hidratação do óleo de Macadémia! Usado diariamente, ele restaura e rejuvenesce até os fios mais danificados.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'INOAR',
            'nome_prod' => 'Macadémia',
            'quant_prod' => 51
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 81,
            'imagem_um' => 'imagens/macadamia.jpg',
            'imagem_dois' => 'imagens/macadamia2.jpg'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'Com alta concentraçãoo de Dexpantenol e Arginina, Inoar Rejupantenol evita a perda de água do interior da fibra capilar.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'INOAR',
            'nome_prod' => 'Rejupantenol',
            'quant_prod' => 51
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 82,
            'imagem_um' => 'imagens/rejupantenol.jpg',
            'imagem_dois' => 'imagens/rejupantenol2.jpg'
]);



DB::table('produtos')->insert([
            'desc_prod' => 'Com máximo poder emoliente e ação ultra-hidratante, Inoar Absolut Daymoist CLR  perfeita para te acompanhar nos desafios do dia a dia.',
            'tipo_prod' => 'mascara',
            'marca_prod' => 'INOAR',
            'nome_prod' => 'mascara Absolut DayMoist',
            'quant_prod' => 51
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 83,
            'imagem_um' => 'imagens/absolutmask.jpg',
            'imagem_dois' => 'imagens/absolutmask2.jpg'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'mascara de tratamento para cabelos ondulados, cacheados, crespos e afros. Inoar Afro Vegan Máscara hidrata e nutre intensamente para manter os cachos de tipo 4ABC saudaveis sempre.',
            'tipo_prod' => 'mascara',
            'marca_prod' => 'INOAR',
            'nome_prod' => 'Inoar Afro Vegan',
            'quant_prod' => 51
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 84,
            'imagem_um' => 'imagens/afrovegan.jpg',
            'imagem_dois' => 'imagens/afrovegan2.jpg'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'Doctor  o sistema de tratamento completo para os seus cabelos, que consiste em Hidratar, Nutrir e Reconstruir. Formado por um shampoo multifuncional.',
            'tipo_prod' => 'mascara',
            'marca_prod' => 'INOAR',
            'nome_prod' => 'mascara Doctor de reconstrução',
            'quant_prod' => 51
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 85,
            'imagem_um' => 'imagens/doctor.jpg',
            'imagem_dois' => 'imagens/doctor2.jpg'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'Tratamento reconstrutor para cabelos danificados. Inoar Lifting Capilar Tratamento devolve a saúde, força e vitalidade ao cabelo.',
            'tipo_prod' => 'mascara',
            'marca_prod' => 'INOAR',
            'nome_prod' => 'Inoar Lifting Capilar',
            'quant_prod' => 51
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 86,
            'imagem_um' => 'imagens/lifting.jpg',
            'imagem_dois' => 'imagens/lifting2.jpg'
]);


DB::table('produtos')->insert([
            'desc_prod' => 'Cabelos grossos tendem ao ressecamento. Por isso, a Inoar desenvolveu a versão da clássica Inoar Mask própria para cabelos grossos.',
            'tipo_prod' => 'mascara',
            'marca_prod' => 'INOAR',
            'nome_prod' => 'mascara Mask de hidratação 1000g',
            'quant_prod' => 51
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 87,
            'imagem_um' => 'imagens/mask.jpg',
            'imagem_dois' => 'imagens/mask2.jpg'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'Hit absoluto dos salões, o óleo de tratamento Argan Oil da Inoar traz o mundialmente famoso ouro marroquino para aprimorar ainda mais a prática profissional. ',
            'tipo_prod' => 'Finalizador',
            'marca_prod' => 'INOAR',
            'nome_prod' => 'óleo Argan Oil System Capilar 60ml',
            'quant_prod' => 51
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 88,
            'imagem_um' => 'imagens/arganoil.jpg',
            'imagem_dois' => 'imagens/arganoil2.jpg'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'óleo de coco virgem multifuncional para todos os tipos de cabelo. óleo de Coco Inoar hidrata, nutre e traz saúde aos fios.',
            'tipo_prod' => 'Finalizador',
            'marca_prod' => 'INOAR',
            'nome_prod' => 'Inoar óleo de Coco',
            'quant_prod' => 51
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 89,
            'imagem_um' => 'imagens/coco.jpg',
            'imagem_dois' => 'imagens/coco2.jpg'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'Leave-in e protetor solar para todos os tipos de cabelos expostos ao Sol, mar e cloro.',
            'tipo_prod' => 'Finalizador',
            'marca_prod' => 'INOAR',
            'nome_prod' => 'Inoar Deixa Ficar',
            'quant_prod' => 51
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 90,
            'imagem_um' => 'imagens/deixa.jpg',
            'imagem_dois' => 'imagens/deixa2.jpg'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'Hair Spray finaliza seu penteado de maneira natural Seu jato seco e a ação anti-umidade oferecem um acabamento natural, sem resduos.',
            'tipo_prod' => 'Finalizador',
            'marca_prod' => 'INOAR',
            'nome_prod' => 'Spray Fixador Extra Forte 200ml',
            'quant_prod' => 51
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 91,
            'imagem_um' => 'imagens/spray.jpg',
            'imagem_dois' => 'imagens/spray2.jpg'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'Cabelos loiros refletem totalmente a saúde da fibra capilar. Por isso, Inoar desenvolveu a linha Absolut Speed Blonde.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'INOAR',
            'nome_prod' => 'Absolut Speed Blond Desamarelador',
            'quant_prod' => 51
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 92,
            'imagem_um' => 'imagens/absolut.jpg',
            'imagem_dois' => 'imagens/absolut2.jpg'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'Shampoo para cabelos ondulados, cacheados, crespos e afros. Inoar Afro Vegan Shampoo ajuda a nutrir e hidratar os fios, que ganham mais vida e maleabilidade.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'INOAR',
            'nome_prod' => 'Afro Vegan',
            'quant_prod' => 51
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 93,
            'imagem_um' => 'imagens/afro.jpg',
            'imagem_dois' => 'imagens/afro2.jpg'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'Sucesso absoluto nos salões, Argan Oil  fonte poderosa de beleza capilar. Suas múltiplas funções hidratantes e disciplinantes transformam os fios fragilizados ou secos em sedosos.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'INOAR',
            'nome_prod' => 'Shampoo Argan Oil System 1000ml',
            'quant_prod' => 51
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 94,
            'imagem_um' => 'imagens/argan.jpg',
            'imagem_dois' => 'imagens/argan2.jpg'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'A linha Inoar Divine Curls foi feita assim para quem tem cachos  e para que você nem pense em viver sem eles. Composta por Shampoo sem ingredientes acumulativos.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'INOAR',
            'nome_prod' => 'Shampoo Divine Curls 250ml',
            'quant_prod' => 51
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 95,
            'imagem_um' => 'imagens/curls.jpg',
            'imagem_dois' => 'imagens/curls2.jpg'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'A Inoar acredita que algumas misturas são infalíveis, por isso criou uma linha com tudo de bom para os cabelos, garantindo assim brilho, maciez e a saúde dos fios.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'INOAR',
            'nome_prod' => 'Shampoo Minha VÓ Fazia 1000ml',
            'quant_prod' => 51
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 96,
            'imagem_um' => 'imagens/vo.jpg',
            'imagem_dois' => 'imagens/vo2.jpg'
]);
DB::table('produtos')->insert([
	        'desc_prod' => 'O shampoo Seda Anticaspa hidratação Diria possui uma fórmula exclusiva sem sal, com Zinco Piritiona, age profundamente em seu cabelo, deixando-o livre da caspa, suave.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Shampoo Seda Anticaspa hidratação Diria 325 ml',
            'quant_prod' => 45
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 97,
            'imagem_um' => 'imagens/a.jpg',
            'imagem_dois' => 'imagens/a1.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O shampoo Seda Cachos Definidos possui a tecnologia Nutri Seladora de Cachos e  sem sal. A sua fórmula exclusiva hidrata as fibras do cabelo, deixando os cachos lindos.',
            'marca_prod' => 'Seda',
            'tipo_prod' => 'Shampoo',
            'nome_prod' => 'Shampoo Seda Cachos Definidos 325ml',
            'quant_prod' => 32
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 98,
            'imagem_um' => 'imagens/b.jpg',
            'imagem_dois' => 'imagens/b1.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O shampoo Seda Ceramidas foi desenvolvido para potencializar o brilho dos fios. Sua fórmula com Microceramida Complex, deixando os cabelos brilhantes. fórmula sem sal.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Shampoo Seda Ceramidas 325ml',
            'quant_prod' => 43
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 99,
            'imagem_um' => 'imagens/c.jpg',
            'imagem_dois' => 'imagens/c1.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O shampoo Seda Crescimento saudavel  sem sal e tem sua fórmula enriquecida com Biotina, limpa e nutre o cabelo. Ideal para manter o cabelo sempre forte e saudavel.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Shampoo Seda Crescimento saudavel 325ml',
            'quant_prod' => 35
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 100,
            'imagem_um' => 'imagens/d.jpg',
            'imagem_dois' => 'imagens/d1.jpg'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'O shampoo sem sal Seda Keraforce Original foi desenvolvido especificamente para cabelos crespos sem química. Removendo os resíduos e preparando o cabelo para a correta absorção',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Shampoo Seda Keraforce Original 325ml',
            'quant_prod' => 56
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 101,
            'imagem_um' => 'imagens/e.jpg',
            'imagem_dois' => 'imagens/e1.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O shampoo Seda Liso Extremo ajuda a deixar os cabelos superlisos por mais tempo. Limpa e atua na fibra capilar dando definição no cabelo. Indicado para cabelos lisos, alisados',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Shampoo Seda Liso Extremo 325ml',
            'quant_prod' => 45
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 102,
            'imagem_um' => 'imagens/f.jpg',
            'imagem_dois' => 'imagens/f1.jpg'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'O shampoo Seda Liso Perfeito com proteína da seda e sem sal, limpa os fios e deixa os cabelos cheios de vida. Seu cabelo macio e liso desde a primeira a lavagem.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Shampoo Seda Liso Perfeito 325ml',
            'quant_prod' => 34
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 103,
            'imagem_um' => 'imagens/g.jpg',
            'imagem_dois' => 'imagens/g1.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O shampoo Seda óleo hidratação tem uma fórmula sem sal e  enriquecida com óleo de Argan e amêndoas, nutre a os fios desde a primeira lavagem.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Shampoo Seda óleo hidratação 325ml',
            'quant_prod' => 31
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 104,
            'imagem_um' => 'imagens/h.jpg',
            'imagem_dois' => 'imagens/h1.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O shampoo Seda Pretos Luminosos com melanina ressalta o brilho e cuida delicadamente do cabelo, além de limpar, hidratar e cuidar dos fios.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Shampoo Seda Pretos Luminosos 325ml',
            'quant_prod' => 51
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 105,
            'imagem_um' => 'imagens/i.jpg',
            'imagem_dois' => 'imagens/i1.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O cacau  conhecimento por suas propriedades de hidratação. A manteiga de Karité também um hidratante excelente, muito usado para amaciar e revitalizar.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Shampoo Seda Recarga Natural Bomba de nutrição 325ml',
            'quant_prod' => 54
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 106,
            'imagem_um' => 'imagens/j.jpg',
            'imagem_dois' => 'imagens/j1.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O shampoo Seda Recarga Natural hidratação Antinós feito com raiz de amoreira e fusão de óleos. Ideal para quem quer manter o cabelo naturalmente lindo.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Shampoo Seda Recarga Natural hidratação Antinós 325ml',
            'quant_prod' => 54
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 107,
            'imagem_um' => 'imagens/k.jpg',
            'imagem_dois' => 'imagens/k1.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O shampoo Seda Recarga Natural Mel Antiquebra, feito com mel e fusão de óleos e sem sal, ajuda a recarregar a vitalidade dos fios.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Shampoo Seda Recarga Natural Mel Antiquebra 325ml',
            'quant_prod' => 43
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 108,
            'imagem_um' => 'imagens/l.jpg',
            'imagem_dois' => 'imagens/l1.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O shampoo Seda Recarga Natural Pureza Detox  feito com chá verde, e extratos cítricos. além disso, ele deixa o seu cabelo naturalmente bonito.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Shampoo Seda Recarga Natural Pureza Detox 325ml',
            'quant_prod' => 34
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 109,
            'imagem_um' => 'imagens/m.jpg',
            'imagem_dois' => 'imagens/m1.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O shampoo Seda Restauração instantânea foi criado para ajudar a agir contra o efeito dos danos no cabelo. ',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Shampoo Seda Restauração instantânea 325ml',
            'quant_prod' => 57
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 110,
            'imagem_um' => 'imagens/n.jpg',
            'imagem_dois' => 'imagens/n1.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'Diga oi para um cabelo suave, com brilho e cheio de vida! Nossa fórmula exclusiva. Rico em Vitamina E e antioxidantes, o óleo de Argan do Marrocos.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Shampoo Seda Bomba Argan 325ml',
            'quant_prod' => 54
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 111,
            'imagem_um' => 'imagens/o.jpg',
            'imagem_dois' => 'imagens/o1.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'você  fé de produtos liberados? Chegou o novo Seda boom liberado. Possui uma combinação poderosa de d-panthenol e óleo de coco para você arrasar na hidratação e nutrição.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Shampoo Seda Boom Liberado 325ml',
            'quant_prod' => 65
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 112,
            'imagem_um' => 'imagens/p.jpg',
            'imagem_dois' => 'imagens/p1.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'Babosa+óleos traz o super Mix de óleos Vegetais (Coco, amêndoas e Argan) com o poder da Babosa. Inspirado nas misturinhas caseiras, Babosa+óleos = hidratação e umectação pura.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Shampoo Seda by Rayza Babosa + óleos 325ml',
            'quant_prod' => 56
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 113,
            'imagem_um' => 'imagens/q.jpg',
            'imagem_dois' => 'imagens/q1.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'Nossa fórmula exclusiva, com água de Coco e água de Cacto, limpa, hidrata e deixa seu cabelo macio.',
            'tipo_prod' => 'Shampoo',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Shampoo Seda hidratação Baixo Poo 325ml',
            'quant_prod' => 55
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 114,
            'imagem_um' => 'imagens/r.jpg',
            'imagem_dois' => 'imagens/r1.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O condicionador Seda Cachos Definidos  indicado para cabelos cacheados. A sua fórmula exclusiva possui a tecnologia Nutri Seladora de Cachos, hidrata as fibras do cabelo e definidos.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Condicionador Seda Cachos Definidos 325ml',
            'quant_prod' => 45
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 115,
            'imagem_um' => 'imagens/aa.jpg',
            'imagem_dois' => 'imagens/a2.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O condicionador Seda Ceramidas foi feito especialmente para dar brilhos aos cabelos. além disso, ele hidrata os fios, deixando-os macios e sedosos.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Condicionador Seda Ceramidas 325ml',
            'quant_prod' => 65
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 116,
            'imagem_um' => 'imagens/bb.jpg',
            'imagem_dois' => 'imagens/b2.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O condicionador Seda Crescimento saudavel tem a sua fórmula enriquecida com Biotina, nutre o cabelo e fortaleze os fios para um crescimento saudavel.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Condicionador Seda Crescimento saudavel 325ml',
            'quant_prod' => 67
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 117,
            'imagem_um' => 'imagens/cc.jpg',
            'imagem_dois' => 'imagens/c2.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O condicionador Seda Recarga Natural hidratação Antinós hidrata fibra por fibra, alinha as cutículas do cabelo propenso a nós, proporcionando suavidade e fios mais féceis de pentear.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Condicionador Seda hidratação Antinós 325ml',
            'quant_prod' => 65
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 118,
            'imagem_um' => 'imagens/dd.jpg',
            'imagem_dois' => 'imagens/d2.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O condicionador Seda Keraforce Original foi desenvolvido especialmente para cabelos crespos sem química e tem uma fórmula enriquecida com Queratina e óleo de Argan.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Condicionador Seda Keraforce Original 325ml',
            'quant_prod' => 54
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 119,
            'imagem_um' => 'imagens/ee.jpg',
            'imagem_dois' => 'imagens/e2.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O condicionador Seda Liso Extremo ajuda a deixar os cabelos superlisos por mais tempo*. Indicado para cabelos lisos, alisados, desalinhados e com frizz.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Condicionador Seda Liso Extremo 325ml',
            'quant_prod' => 64
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 120,
            'imagem_um' => 'imagens/ff.jpg',
            'imagem_dois' => 'imagens/f2.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O condicionador Seda Liso Perfeito age sobre os fios deixando-os macios. Formula que sela a fibra capilar, deixa os cabelos com balano natural, oferecendo proteção prolongada ao seu cabelo.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Shampoo Seda Liso Perfeito 325ml',
            'quant_prod' => 43
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 121,
            'imagem_um' => 'imagens/gg.jpg',
            'imagem_dois' => 'imagens/g2.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O condicionador Seda óleo hidratação, especialmente desenvolvido para cabelos secos,  enriquecido com óleos de Argan.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Condicionador Seda óleo hidratação 325ml',
            'quant_prod' => 64
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 122,
            'imagem_um' => 'imagens/hh.jpg',
            'imagem_dois' => 'imagens/h2.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O condicionador Seda Pretos Luminosos com melanina, reativa os fios pretos, hidratando, cuidando e deixando seu cabelo ainda mais lindo e cheio de brilho.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Condicionador Seda Pretos Luminosos 325ml',
            'quant_prod' => 35
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 123,
            'imagem_um' => 'imagens/ii.jpg',
            'imagem_dois' => 'imagens/i2.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O cacau conhecimento por suas propriedades de hidratação. Ele contém muitos nutrientes e propriedades revitalizantes. A manteiga de Karité também à um hidratante excelente.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Condicionador Seda Recarga Natural Bomba de nutrição 325ml',
            'quant_prod' => 67
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 124,
            'imagem_um' => 'imagens/jj.jpg',
            'imagem_dois' => 'imagens/j2.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O condicionador Seda Recarga Natural Mel Antiquebra foi criado para revitalizar o cabelo deixando-o forte e hidratado.  A sua fórmula contém Mel e fusão de óleos naturais.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Condicionador Seda Recarga Natural Mel Antiquebra 325ml',
            'quant_prod' => 76
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 125,
            'imagem_um' => 'imagens/kk.jpg',
            'imagem_dois' => 'imagens/k2.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O condicionador Seda Recarga Natural Pureza Detox, feito com chá verde e extratos cítricos, purifica os fios, restaura o movimento e proporciona uma sensação de frescor por muito mais tempo. ',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Condicionador Seda Recarga Natural Pureza Detox 325ml',
            'quant_prod' => 65
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 126,
            'imagem_um' => 'imagens/ll.jpg',
            'imagem_dois' => 'imagens/l2.jpg'
]);

DB::table('produtos')->insert([
            'desc_prod' => 'Babosa+óleos traz o super Mix de óleos Vegetais (Coco, amêndoas e Argan) com o poder da Babosa. Inspirado nas misturinhas caseiras, Babosa+óleos = hidratação e umectação pura.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Condicionador Seda by Raiza Babosa + óleos 325ml',
            'quant_prod' => 76
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 127,
            'imagem_um' => 'imagens/nn.jpg',
            'imagem_dois' => 'imagens/n2.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'você  fé de produtos liberados? Chegou o novo Seda Boom LIBERADO. Possui uma combinação poderosa de D-Panthenol e óleo de coco para você arrasar na hidratação e nutrição.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Condicionador Seda Boom Liberado 325ml',
            'quant_prod' => 75
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 128,
            'imagem_um' => 'imagens/oo.jpg',
            'imagem_dois' => 'imagens/o2.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'Diga oi para um cabelo suave, com brilho e cheio de vida! Nossa fórmula exclusiva. Rico em Vitamina E e antioxidantes, o óleo de Argan do Marrocos.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Condicionador Seda Bomba Argan 325ml',
            'quant_prod' => 65
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 129,
            'imagem_um' => 'imagens/pp.jpg',
            'imagem_dois' => 'imagens/p2.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'A água de Coco e água de Cacto possuem poderosas propriedades refrescantes e hidratantes.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Condicionador Seda hidratação Baixo Poo 325ml',
            'quant_prod' => 75
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 130,
            'imagem_um' => 'imagens/qq.jpg',
            'imagem_dois' => 'imagens/q2.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'Deixa os cachos mais soltos, valoriza e amplifica o volume, além de mante-los hidratados.',
            'tipo_prod' => 'Creme de Pentear',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Creme para Pentear Seda Boom volumão 295ml',
            'quant_prod' => 65
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 131,
            'imagem_um' => 'imagens/aaa.jpg',
            'imagem_dois' => 'imagens/a3.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'Proporciona uma ultra hidratação aos fios para você conquistar um volume perfeito.',
            'tipo_prod' => 'Creme de Pentear',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Creme para Pentear Seda Boom Crespos ostentação 500ml',
            'quant_prod' => 76
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 132,
            'imagem_um' => 'imagens/bbb.jpg',
            'imagem_dois' => 'imagens/b3.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'Hidrata e nutre os fios suavemente para dar leveza e movimento aos cachos.',
            'tipo_prod' => 'Creme de Pentear',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Creme para Pentear Seda Boom Cachos livres, leves, soltos 500ml',
            'quant_prod' => 45
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 133,
            'imagem_um' => 'imagens/ccc.jpg',
            'imagem_dois' => 'imagens/c3.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'Define os cachos por 24h e deixa os fios super hidratados.',
            'tipo_prod' => 'Creme de Pentear',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Creme para Pentear Seda Boom definição 295ml',
            'quant_prod' => 56
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 134,
            'imagem_um' => 'imagens/ddd.jpg',
            'imagem_dois' => 'imagens/d3.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'Hidrata os cabelos em transição, deixando os fios mais saudaveis, fortes e cheios de vida da raiz até as pontas.',
            'tipo_prod' => 'Creme de Pentear',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Creme para Pentear Seda Boom transição 295ml',
            'quant_prod' => 65
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 135,
            'imagem_um' => 'imagens/eee.jpg',
            'imagem_dois' => 'imagens/e3.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'Deixa seus cachos super definidos, hidratados e com o volume ideal para você arrasar.',
            'tipo_prod' => 'Creme de Pentear',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Creme para Pentear Seda Boom Cachos Mara Definidos 500ml',
            'quant_prod' => 76
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 136,
            'imagem_um' => 'imagens/fff.jpg',
            'imagem_dois' => 'imagens/f3.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'Define os cachos por 24h, além de proporcionar uma super hidratação aos fios.',
            'tipo_prod' => 'Creme de Pentear',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Creme para Pentear Seda Boom definição 1kg',
            'quant_prod' => 54
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 137,
            'imagem_um' => 'imagens/ggg.jpg',
            'imagem_dois' => 'imagens/g3.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'Deixa os cachos mais soltos, valoriza e amplifica o volume, além de mante-los hidratados.',
            'tipo_prod' => 'Creme de Pentear',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Creme para Pentear Seda Boom volumão 1kg',
            'quant_prod' => 65
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 138,
            'imagem_um' => 'imagens/hhh.jpg',
            'imagem_dois' => 'imagens/h3.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'Hidrata os cabelos em transição, deixando os fios mais saudaveis, fortes e cheios de vida da raiz até as pontas.',
            'tipo_prod' => 'Creme de Pentear',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Creme para Pentear Seda Boom transição 1kg',
            'quant_prod' => 65
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 139,
            'imagem_um' => 'imagens/iii.jpg',
            'imagem_dois' => 'imagens/i3.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O creme para pentear Seda Cachos Definidos  ideal para cabelos cacheados e crespos. além de manter os cachos definidos. ',
            'tipo_prod' => 'Creme de Pentear',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Creme para Pentear Seda Cachos Definidos 300ml',
            'quant_prod' => 76
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 140,
            'imagem_um' => 'imagens/jjj.jpg',
            'imagem_dois' => 'imagens/j3.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O creme para pentear Seda Ceramidas hidrata os fios por 24 horas. além disso, ele cuida do seu cabelo mesmo após a lavagem, mantendo-o forte e com brilho. ',
            'tipo_prod' => 'Creme de Pentear',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Creme para Pentear Seda Ceramidas 300ml',
            'quant_prod' => 53
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 141,
            'imagem_um' => 'imagens/kkk.jpg',
            'imagem_dois' => 'imagens/k3.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O creme para pentear Seda Crescimento saudavel ajuda a reduzir a quebra da fibra capilar no momento de pentear, que nutre os fios, fortalecendo-os para um crescimento saudavel.',
            'tipo_prod' => 'Creme de Pentear',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Creme para Pentear Seda Crescimento saudavel 300ml',
            'quant_prod' => 63
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 142,
            'imagem_um' => 'imagens/lll.jpg',
            'imagem_dois' => 'imagens/l3.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'Sua exclusiva fórmula, enriquecida com Queratina e óleo de Argan, hidrata e fortalece os cabelos sem deixa-los oleosos, reduzindo o frizz e o volume.',
            'tipo_prod' => 'Creme de Pentear',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Creme para Pentear Seda Keraforce Original 300ml',
            'quant_prod' => 43
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 143,
            'imagem_um' => 'imagens/mmm.jpg',
            'imagem_dois' => 'imagens/m3.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O creme para pentear Seda Liso Perfeito com fórmula exclusiva, possui a inovadora tecnologia Seladora de Lisos, nutre e alinha cada fibra enquanto deixa o cabelo vibrante',
            'tipo_prod' => 'Creme de Pentear',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Creme para Pentear Seda Liso Perfeito 300ml',
            'quant_prod' => 52
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 144,
            'imagem_um' => 'imagens/nnn.jpg',
            'imagem_dois' => 'imagens/n3.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O creme para pentear Seda óleo hidratação, enriquecido com óleos de Argan e amêndoas, ajuda a nutrir o cabelo seco, além de controla o frizz.',
            'tipo_prod' => 'Creme de Pentear',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Creme para Pentear Seda óleo hidratação 300ml',
            'quant_prod' => 34
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 145,
            'imagem_um' => 'imagens/ooo.jpg',
            'imagem_dois' => 'imagens/o3.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O creme de tratamento Seda Cachos Definidos, com a tecnologia Nutri Seladora de Cachos, atua profundamente na fibra capilar.',
            'tipo_prod' => 'mascara',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Creme de Tratamento Seda Cachos Definidos 400g',
            'quant_prod' => 56
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 146,
            'imagem_um' => 'imagens/aaaa.jpg',
            'imagem_dois' => 'imagens/a4.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O creme de tratamento Seda Ceramidas  indicado para quem deseja uma hidratação dos fios, ajuda a fortalecer** e dar brilho extra.',
            'tipo_prod' => 'mascara',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Creme de Tratamento Seda Ceramidas 400g',
            'quant_prod' => 65
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 147,
            'imagem_um' => 'imagens/bbbb.jpg',
            'imagem_dois' => 'imagens/b4.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O creme de tratamento Seda Keraforce Original. Proporciona uma ultra-hidratação e deixa o cabelo visivelmente nutrido desde o 1 uso.',
            'tipo_prod' => 'mascara',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Creme de Tratamento Seda Keraforce Original 400g',
            'quant_prod' => 76
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 148,
            'imagem_um' => 'imagens/cccc.jpg',
            'imagem_dois' => 'imagens/c4.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O creme de tratamento Seda Liso Perfeito com proteína da Seda, nutre e alinha cada fibra enquanto deixa o cabelo vibrante, sedoso e cheio de movimento. ',
            'tipo_prod' => 'mascara',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Creme de Tratamento Seda Liso Perfeito 400g',
            'quant_prod' => 54
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 149,
            'imagem_um' => 'imagens/dddd.jpg',
            'imagem_dois' => 'imagens/d4.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O creme de tratamento Seda óleo hidratação tem em sua fórmula óleos de Argan e amêndoas, cria uma película nos fios e deixa seu cabelo sedoso. contém filtro UV.',
            'tipo_prod' => 'mascara',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Creme de Tratamento Seda óleo hidratação 400g',
            'quant_prod' => 65
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 150,
            'imagem_um' => 'imagens/eeee.jpg',
            'imagem_dois' => 'imagens/af.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O creme de tratamento Seda Restauração instantânea, com Max Cálcio e Queratina, elimina o dano visível em apenas 1 minuto e devolve a força e a resistência aos seus cabelos.',
            'tipo_prod' => 'mascara',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Creme de Tratamento Seda Restauração instantânea 400g',
            'quant_prod' => 78
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 151,
            'imagem_um' => 'imagens/ffff.jpg',
            'imagem_dois' => 'imagens/f4.jpg'
]);
DB::table('produtos')->insert([
            'desc_prod' => 'O condicionador Seda Restauração instantânea  de a sua rotina diria o poder dos tratamentos para tratar os sinais visíveis de dano desde a 1? lavagem.',
            'tipo_prod' => 'Condicionador',
            'marca_prod' => 'Seda',
            'nome_prod' => 'Condicionador Seda Restauração Instantânea 325ml',
            'quant_prod' => 78
        ]);

	DB::table('imagem_produtos')->insert([
            'produto_id' => 152,
            'imagem_um' => 'imagens/mm.jpg',
            'imagem_dois' => 'imagens/m2.jpg'
]);

    }
}

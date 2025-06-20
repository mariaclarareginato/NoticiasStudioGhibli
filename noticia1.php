<?php 

$noticias = [

    [
        "titulo" => "Documentário sobre Hayao Miyazaki chega ao Brasil pela <br> primeira vez",
        "descricao" => "Documentário “Miyazaki, L’Esprit de la Nature” terá estreia na noite de abertura do festival ANIMAGE.",
        "imagem" => "miyazaki.webp",
        "lermais" => "A 14ª edição do ANIMAGE – Festival Internacional de Animação de Pernambuco, um dos mais relevantes festivais de cinema de animação da América Latina, realizará a estreia latino-americana do documentário “Miyazaki, L’Esprit de la Nature” (Miyazaki, O espírito da natureza, em tradução livre), de Léo Favier, sobre o mestre da animação e vencedor do Oscar, Hayao Miyazaki.

O documentário que teve sua estreia originalmente no Festival de Veneza este ano, é anunciado como o “primeiro documentário a se concentrar na profunda conexão de Hayao Miyazaki com a natureza e os temas ambientais expressos por meio de seus filmes”. “Miyazaki, L’Esprit de la Nature” será exibido nesta terça-feira, 1/10, na noite de abertura do ANIMAGE, na histórica sala do Teatro do Parque às 19h.

Sinopse: Por meio de personagens icônicos como Totoro e Princesa Mononoke, os filmes de Miyazaki refletem suas profundas preocupações com o mundo, muitas vezes autobiográficas e ecoando as convulsões do século 20. Miyazaki, Spirit of Nature, enriquecido com trechos excepcionais de filmes e insights de vozes como seu filho e diretor Goro Miyazaki, seu produtor Toshio Suzuki e o filósofo Timothy Morton, revela o profundo trabalho ecológico de Miyazaki, que questiona nossa relação com o mundo natural e as criaturas vivas."
    ],

    [
        "titulo" => "Studio Ghibli recebe Palma de Ouro honorária em Cannes na França",
        "descricao" => "Palma de Ouro Honorária ao Studio Ghibli <br> é um feito inédito na premiação.",
        "imagem" => "premio.webp",
        "lermais" => "O 77º Festival Internacional de Cinema de Cannes premiou o Studio Ghibli com a Palma de Ouro Honorária. O prêmio homenageia aqueles que realizaram trabalhos notáveis. Segundo a equipe do festival, esta é a primeira vez que Cannes concede a homenagem a um grupo e não a um indivíduo.

“Estamos todos aqui porque estamos encantados com esta animação japonesa“, entusiasmou-se Thierry Frémaux no seu discurso de abertura. “Pela primeira vez, Iris Knobloch e eu decidimos conceder a Palma de Ouro honorária a um estúdio, em vez de um único criativo. E que estúdio! 

Hayao Miyazaki, um dos cofundadores do Studio Ghibli, não pode viajar para Cannes, mas agradeceu junto a Toshio Suzuki ao Festival e aos fãs por vídeo. Seu filho Goro, o diretor por trás de A Colina Kokuriko e Contos de Terramar, teve a honra de receber o prêmio em nome do estúdio, museu e parque, emocionado ao ser ovacionado pela plateia."

    ],


    [
        "titulo" => "O Menino e a Garça, do Studio Ghibli, tem estreia confirmada no Brasil",
        "descricao" => "Filme chegará aos cinemas nacionais em 2024 com distribuição da Sato Company.",
        "imagem" => "omeninoeagarca.webp",
        "lermais" => "Segundo o Estadão, o filme do Studio Ghibli deve estrear no país entre fevereiro ou o início de março, antes do Oscar, que acontece dia 10. Nelson Sato, presidente da empresa distribuidora, vinha negociando os direitos do filme a cerca de 6 meses. “É uma grande alegria, especialmente por ser esta obra, que é considerada, talvez, a última de Hayao Miyazaki”.

A mais recente obra de Hayao Miyazaki foi lançada no Japão sob o título de Kimitachi Wa do Ikiru Ka (Como vocês vivem? em tradução livre) com uma estratégia de marketing bem incomum: o Studio Ghibli apostou em não utilizar nenhum trailer ou imagens de divulgação ou sequer sinopse, tendo somente um pôster com uma imagem sendo de um suposto pássaro e atraiu um público gigantesco às salas de cinema.

Sinopse
Um jovem garoto chamado Mahito, ansiando por sua mãe, se aventura em um mundo compartilhado pelos vivos e os mortos. Ali, a morte encontra um fim e a vida encontra um começo. Uma semi-autobriografia fantástica sobre vida, morte e criação, em homenagem à amizade, da mente de Hayao Miyazaki."
    ],

];


$cod = $_GET['codigonoticia'];

$noticia = $noticias[$cod];
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>

        <meta charset="UTF-8">
        <title><?php echo $noticia['titulo']; ?></title>

        <link rel="stylesheet" href="noticias.css">
</head>



<body>

<header>
    <nav>

        <a class="imgnavbar" href="index.php"><img src="imgs/ghiblilogo.png"></a>

    </nav>
</header>


<h1><?php echo $noticia['titulo']; ?></h1>
<img src="<?php echo  'imgs/'. $noticia['imagem']; ?>" class="cardimgs">
<p><?php echo $noticia['lermais']; ?></p>

</body>
</html>
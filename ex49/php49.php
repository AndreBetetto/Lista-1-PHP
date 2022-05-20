<?php
    $selecionado = "$_POST[pais]";

    echo"País escolhido: ".$selecionado; 

    
    if($selecionado = "guatemala")
    {
        echo"Guatemala, pais da America Central localizado ao sul do Mexico, tem vulcoes, florestas tropicais e antigos sitios maias. Na capital, Cidade da Guatemala, ficam o imponente Palacio Nacional de la Cultura e o Museo Nacional de Arqueologia y Etnologia. Antigua, a oeste da capital, tem predios coloniais espanhois preservados. O lago de Atitlan, formado em uma enorme cratera vulcanica, e cercado de plantacoes de cafe e vilarejos."; 
        echo"<br><br>Lingua falada no pais: castelhano <br>Cidades: El Peten e Coban";
    }
    else
    if($selecionado = "noruega")
    {
        echo"A Noruega e um pais escandinavo que abrange montanhas, geleiras e fiordes litoraneos profundos. Oslo, a capital, e uma cidade cheia de areas verdes e museus. Navios vikings preservados do seculo IX sao exibidos no Museu do Navio Viking de Oslo. Bergen, com suas casas coloridas de madeira, é o ponto de partida de cruzeiros rumo ao deslumbrante Fiorde de Sogn. O pais tambem e famoso pela pesca, pelas trilhas e pelo esqui, especialmente no resort olimpico de Lillehammer.";
        echo"<br><br>Lingua falada no pais: Noruegues <br>Cidades: Oslo e Tromsø";
    }
    else
    if($selecionado = "samoa")
    {
        echo"Samoa e um pais que compreende o grupo ocidental das ilhas Samoa, na Polinesia. Muitas de suas ilhas tem praias cercadas por recifes e interiores de relevo acidentado com florestas tropicais, desfiladeiros e cachoeiras. Dentre essas ilhas, entao Upolu, onde a maioria da populacao de Samoa vive, e Savai'i, uma das maiores ilhas do Pacifico Sul. Ilhas menores podem ter aldeias pequenas ou ser desabitadas, algumas com santuarios de vida selvagem.";
        echo"<br><br>Lingua falada no pais: Samoano / Ingles <br>Cidades: Safotu e Lufi-lufi";
    }

?>
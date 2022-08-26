@extends('layouts.default')
@yield('app.css')



<body>

        <main>
        
            <nav>
                <header>
                
                    <h1>Curiosidades de Tecnologia</h1>
                    <h2>Tudo aquilo que você sempre quis saber sobre o mundo Tech, em um único lugar</h2>
                    @section('conteúdo')
                </header>
            </nav>
            <section id="sessoes">
                <article>
                    <h1 class="droid">História do Mascote do Android</h1>
                    <p>Provavelmente você sabe que o sistema operacional Android, mantido pelo Google é um dos mais utilizados para dispositivos móveis em todo o mundo. Mas tavez você não saiba que o seu simpático mascote tem um nome e uma história muito curiosa? Pois acompanhe esse artigo para aprender muita coisa sobre esse robozinho. </p>
                    <h2 class="robo">A primeira versão</h2>
                    <p>A primeira tentativa de criar um mascote surgiu em 2007 e veio de um desenvolvedor chamado Dan Morrill. Ele conta que abriu o Inkscape (software livre para vetorização de imagens) e criou sua própria versão de robô.O objetivo era apenas personificar o sistema apenas para a a sua equipe, não existia nenhuma solicitação da empresa para a criação de um mascote.</p>
                    <div>foto</div>
                    <p>Essa primeira versão bizarra até foi batizada em homenagem ao seu criador: seriam os Dandroids.</p>
                    <h2 class="robo">Surge um novo mascote</h2>
                    <p>A ideia deter um mascote foi amadurecendo e a missão foi passada para uma profissional da área. A ilustradora Russa Irina Blok, também funcionária do Google,  ficou com a missão de representar o pequeno robô de uma maneira mais agradável.</p>
                     <div>foto</div>
                     <p> ideia principal da Irina era representar tudo graficamente com poucos traços e de forma mais chapada. O desenho também deveria gerar identificação rápida com quem o olha. Surgiu então o Bugdroid, o novo mascote do Android.</p>
                     <div>foto</div>
                     <p>A principal inspiração para os traços do novo Bugdroid veio daqueles bonequinhos que ilustram portas de banheiro para indicar o gênero de cada porta. Conta a lenda que a artista estava criando em sua mesa no escritório do Google e olhou para o lado dos banheiros e a identificação foi imediata: simples, limpo, objetivo.</p>
            <section id="video">
                <div>video</div>
            </section>
            <section id="conclue">
                <div>
                    <h1>Quer aprender mais?</h1>
                    <div>
                        <p> Outro assunto curioso em relação ao Android é que cada versão sempre foi nomeada em homenagem a um doce, em ordem alfabética a partir da versão 1.5 até a 9.0 </p>
                        <ul>
                        <li>1.5 Cupcake</li>
                        <li>1.6 - Donut</li>
                        <li>3.0 - Eclair</li>
                        <li>2.2 - Froyo</li>
                        <li>2.3 - Gingerbread</li>
                        <li>3.0 - Honeycomb</li>
                        <li>4.0 - Ice Cream Sandwich</li>
                        <li>4.1 - Jelly Bean</li>
                        <li>4.4 - KitKat</li>
                        <li>5.0 - Lolipop</li>
                        <li>6.0 - Marshmallow</li>
                        <li>7.0 - Nougat</li>
                        <li>8.0 - Oreo</li>
                        <li>9.0 - Pie</li>
                    </ul>

                    <p>Infelizmente, o Android Q não existiu, pois o Google resolveu pôr fim a essa divertida prática e começou a usar numerações, o que deu origem ao Android 10.</p>

                    <p>Acesse aqui o site Android History para conhecer a sequência das versões "adocicadas" e o que cada uma trouxe para o sistema Android.
                        [/EXTRA]</p>

                    <p>Então é isso! Espero que você tenha gostado do nosso artigo com essa curiosidade sobre o sistema Android e seu simpático mascote.</p>
         
<footer>Site criado por Gustavo Guanabara para o CursoemVideo.</footer>
                       
                    </div>
                </div>
            </section>

                </article>
            </section>
        </main>
        @stop
    </body>


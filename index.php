<!DOCTYPE html>
<html>
    <head>
        <title>Mirror Fashion</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
    </head>
    <body>

        <?php include("cabecalho.php"); ?>

        <div class="container destaque">
            <section class="busca">
                <h2>Busca</h2>
                <form>
                    <input type="search">
                    <input type="image" src="img/busca.png">
                </form>
            </section>
            <section class="menu-departamentos">
                <h2>Departamentos</h2>
                <nav>
                    <ul>
                        <li>
                            <a href="#">Blusas e Camisas</a>
                            <ul>
                                <li><a href="#">Manga curta</a></li>
                                <li><a href="#">Manga comprida</a></li>
                                <li><a href="#">Camisa social</a></li>
                                <li><a href="#">Camisa casual</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Calças</a></li>
                        <li><a href="#">Saias</a></li>
                        <li><a href="#">Vestidos</a></li>
                        <li><a href="#">Sapatos</a></li>
                        <li><a href="#">Bolsas e Carteiras</a></li>
                        <li><a href="#">Acessórios</a></li>
                    </ul>
                </nav>
            </section>
            <section class="sectionImagem">
                <img src="img/destaque-home.png" alt="Promoção: Big City Night">
                <input type="button" value="Pausar" id="botaoPausa">
                <input type="button" value="Recomeçar" id="botaoRecomeca">
            </section>
        </div>
        <!--exercicios 4.9 */-->
        <div class="container paineis">
            <section class="painel novidades painel-compacto">
                <h2>Novidades</h2>
                <ol>
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura1.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
          						<a href="produto.html">
          							<figure>
          								<img src="img/produtos/miniatura2.png">
          								<figcaption>Roupa bem louca por R$ 19,90</figcaption>
          							</figure>
          						</a>
          					</li>
          					<li>
          						<a href="produto.html">
          							<figure>
          								<img src="img/produtos/miniatura3.png">
          								<figcaption>O gerente tá doidão camiseta por R$ 119,00</figcaption>
          							</figure>
          						</a>
          					</li>
          					<li>
          						<a href="produto.html">
          							<figure>
          								<img src="img/produtos/miniatura4.png">
          								<figcaption>Calça doidera por R$ 129,90</figcaption>
          							</figure>
          						</a>
          					</li>
          					<li>
          						<a href="produto.html">
          							<figure>
          								<img src="img/produtos/miniatura5.png">
          								<figcaption>Olar por R$ 5,90</figcaption>
          							</figure>
          						</a>
          					</li>
          					<li>
          						<a href="produto.html">
          							<figure>
          								<img src="img/produtos/miniatura6.png">
          								<figcaption>Peçde roupa doida por R$ 59,90</figcaption>
          							</figure>
          						</a>
          					</li>
                    <li>
          						<a href="produto.html">
          							<figure>
          								<img src="img/produtos/miniatura4.png">
          								<figcaption>Calça doidera por R$ 129,90</figcaption>
          							</figure>
          						</a>
          					</li>
          					<li>
          						<a href="produto.html">
          							<figure>
          								<img src="img/produtos/miniatura5.png">
          								<figcaption>Olar por R$ 5,90</figcaption>
          							</figure>
          						</a>
          					</li>
          					<li>
          						<a href="produto.html">
          							<figure>
          								<img src="img/produtos/miniatura6.png">
          								<figcaption>Peçde roupa doida por R$ 59,90</figcaption>
          							</figure>
          						</a>
          					</li>
          				</ol>
                  <button type="button">Mostra mais</button>
            </section>
            <section class="painel mais-vendidos">
                <h2>Mais Vendidos</h2>
                    <ol>
                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura1.png">
                                    <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                                </figure>
                            </a>
                        </li>
                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura2.png">
                                    <figcaption>Roupa bem louca por R$ 19,90</figcaption>
                                </figure>
                            </a>
                        </li>
                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura3.png">
                                    <figcaption>O gerente tá doidão camiseta por R$ 119,00</figcaption>
                                </figure>
                            </a>
                        </li>
                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura4.png">
                                    <figcaption>Calça doidera por R$ 129,90</figcaption>
                                </figure>
                            </a>
                        </li>
                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura5.png">
                                    <figcaption>Olar por R$ 5,90</figcaption>
                                </figure>
                            </a>
                        </li>
                        <li>
                            <a href="produto.html">
                                <figure>
                                    <img src="img/produtos/miniatura6.png">
                                    <figcaption>Peçde roupa doida por R$ 59,90</figcaption>
                                </figure>
                            </a>
                        </li>
                    </ol>
                </section>
        </div>
        <?php include("rodape.php"); ?>
        <script src="js/jquery.js"></script>
        <script src="js/converteMoeda.js"></script>
        <script src="js/testaConversao.js"></script>
        <script src="js/home.js"></script>
    </body>
</html>

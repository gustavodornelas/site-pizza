<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maratonas de Programação</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div>
            <h1>PIZZA++</h1>
        </div>

        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Programação</a></li>
                <li><a href="#">Resultados</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>Maratonas de Programação</h1>
                <p>Bem-vindo à página oficial das maratonas de programação. Aqui você pode encontrar informações sobre as próximas competições, resultados anteriores e muito mais.</p>
                <a href="#" class="button">Registre-se agora</a> 
            </div>
        </section>
        <section class="info">
            <div class="container">
                <h2>Informações sobre as Maratonas</h2>
                <p>A maratona de programação é um evento onde equipes de programadores competem para resolver problemas complexos de programação. Cada equipe tem um tempo limitado para resolver o maior número possível de problemas e a equipe com a maior pontuação ganha a competição.</p>
                <p>As maratonas são realizadas em todo o mundo e atraem equipes de programadores de todos os níveis de habilidade.</p>
            </div>
        </section>
        <section class="schedule">
            <div class="container">
                <h2>Programação</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Local</th>
                            <th>Evento</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>15 de Maio</td>
                            <td>São Paulo, Brasil</td>
                            <td>Maratona Brasileira de Programação</td>
                        </tr>
                        <tr>
                            <td>22 de Maio</td>
                            <td>Tóquio, Japão</td>
                            <td>Maratona Japonesa de Programação</td>
                        </tr>
                        <tr>
                            <td>29 de Maio</td>
                            <td>Paris, França</td>
                            <td>Maratona Francesa de Programação</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section>
            <h2>Prêmios</h2>
            <p>Aqui estão os prêmios para os vencedores da maratona de programação:</p>
            <ul>
                <li>1º lugar: R$ 10.000,00 e um notebook de última geração</li>
                <li>2º lugar: R$ 5.000,00 e um tablet</li>
                <li>3º lugar: R$ 2.000,00 e um smartwatch</li>
                <li>Menção Honrosa: Certificado de Participação</li>
            </ul>
        </section>

        <section class="patrocinadores">
            <h2>Patrocinadores</h2>
            <p>Confira abaixo os patrocinadores da Maratona de Programação:</p>
            <div class="patrocinadores-container">

                <div class="patrocinador">
                    <img src="./src/img/logo-1.png" alt="Logo do patrocinador 1">
                    <h3>Instututo Federal do Triangulo Mineiro</h3>
                    <p>Descrição do patrocínio e benefícios para a maratona.</p>
                </div>
                <div class="patrocinador">
                    <img src="./src/img/logo-1.png" alt="Logo do patrocinador 1">
                    <h3>Instututo Federal do Triangulo Mineiro</h3>
                    <p>Descrição do patrocínio e benefícios para a maratona.</p>
                </div>
                <div class="patrocinador">
                    <img src="./src/img/logo-1.png" alt="Logo do patrocinador 1">
                    <h3>Instututo Federal do Triangulo Mineiro</h3>
                    <p>Descrição do patrocínio e benefícios para a maratona.</p>
                </div>
                <div class="patrocinador">
                    <img src="./src/img/logo-1.png" alt="Logo do patrocinador 1">
                    <h3>Instututo Federal do Triangulo Mineiro</h3>
                    <p>Descrição do patrocínio e benefícios para a maratona.</p>
                </div>
                <div class="patrocinador">
                    <img src="./src/img/logo-1.png" alt="Logo do patrocinador 1">
                    <h3>Instututo Federal do Triangulo Mineiro</h3>
                    <p>Descrição do patrocínio e benefícios para a maratona.</p>
                </div>
                <div class="patrocinador">
                    <img src="./src/img/logo-1.png" alt="Logo do patrocinador 1">
                    <h3>Instututo Federal do Triangulo Mineiro</h3>
                    <p>Descrição do patrocínio e benefícios para a maratona.</p>
                </div>

            </div>
        </section>

        <section class="registro" id="registro">
            <h2>Registro</h2>
            <div class="registro-container">
                <div><img src="src/img/programming-illustration.webp" alt="" srcset=""></div>

                <div>
                    <form>
                        <label for="nome">Nome completo:</label>
                        <input type="text" id="nome" name="nome" required>

                        <label for="email">E-mail:</label>
                        <input type="email" id="email" name="email" required>

                        <label for="instituicao">Instituição:</label>
                        <input type="text" id="instituicao" name="instituicao" required>

                        <label for="habilidade">Nível de habilidade:</label>
                        <select id="habilidade" name="habilidade" required>
                            <option value="">Selecione uma opção</option>
                            <option value="iniciante">Iniciante</option>
                            <option value="intermediario">Intermediário</option>
                            <option value="avancado">Avançado</option>
                        </select>
                        <div class="formulario-rodape">
                            <input type="submit" value="Registrar">
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </main>
    <footer>
        <div class="container">
            <p>&copy; 2023 Pizza++ - PETi Patrocínio. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>

</html>
<?php include_once 'header.php'; ?>

<?php include_once 'header.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Gerenciar Sobre-nós</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo URL . 'painel'; ?>">Painel de Controle</a></li>
                <li class="breadcrumb-item active">Gerenciar Sobre-nós</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Formulário Sobre-nós -->
            <div class="col-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Atualização feita em: </font>
                            </font><span>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">| </font>
                                    <font style="vertical-align: inherit;">01/06/2023</font>
                                </font>
                            </span>
                        </h5>

                        <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns">
                            <div class="datatable-container">
                                <p class="mb-3 bt-5 text-center">Preencha o formulário abaixo e adicione a história de
                                    criação da Escolinha.</p>
                                <!-- Floating Labels Form -->
                                <form class="row g-3">
                                    <div class="col-md-12">
                                        <label for="floatingPassword">Conteúdo da 1 Coluna*:</label>
                                        <div class="form-floating">

                                            <textarea name="editor1"></textarea>
                                            <script>
                                                CKEDITOR.replace('editor1');
                                            </script>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="floatingPassword">Conteúdo da 2 Coluna*:</label>
                                        <div class="form-floating">

                                            <textarea name="editor2"></textarea>
                                            <script>
                                                CKEDITOR.replace('editor2');
                                            </script>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Meta-Título"
                                                    id="floatingTextarea" style="height: 100px;"></textarea>
                                                <label for="floatingCity">Meta-Título*:</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Meta-Keywords"
                                                id="floatingTextarea" style="height: 100px;"></textarea>
                                            <label for="floatingZip">Meta-Keywords (palavras-chave)*:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Meta-Decrição"
                                                id="floatingTextarea" style="height: 100px;"></textarea>
                                            <label for="floatingZip">Meta-Descrição*:</label>
                                        </div>
                                    </div>

                            </div>
                        </div>

                        <div class="mt-5 text-center">
                            <button type="submit" class="btn btn-primary">Atualizar Informções</button>
                        </div>
                        </form>

                    </div>
                </div><!-- End Formulário Sobre-nós -->

            </div>
    </section>

</main><!-- End #main -->

<?php include_once 'footer.php'; ?>
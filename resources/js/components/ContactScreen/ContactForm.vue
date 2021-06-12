<template>
    <div class="card text-center">
        <div class="card-body">
            <h1 class="card-title blue-text"><strong>Entre em Contato!</strong></h1>
            <form>
                <div class="mb-3">
                    <input type="text" class="form-control" id="nome" placeholder="Nome">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="telefone" placeholder="Telefone">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="email" placeholder="E-mail">
                </div>
            </form>
            <a href="#" class="btn btn-primary">Enviar</a>
        </div>
    </div>
</template>

<style scoped>
    .blue-text {
        color: rgb(31, 124, 191);
    }

    .mar-auto {
        margin: auto;
    }

    form {
        margin-top: 100px;
    }
</style>

<script>
import CardHelp from './CardHelp.vue'

export default {
    components: {
        CardHelp
    }
}
</script>

<template>
    <div id="root">
        <h3 class="blue-text">
            <strong>
                Como Nós Ajudamos
            </strong>
        </h3>
        <div class="container">
            <div class="row">
                <CardHelp v-for="num in 6" :key="num" />
            </div>
            <div class="row">
                <div class="mt-5 col-md-12 d-flex justify-content-center">
                    <a href="#contato" class="btn btn-primary">
                        <span class="margin-sides">Entre em Contato</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
#id {
    width: 80%;
}

.blue-text {
    color: rgb(31, 124, 191);
}

.margin-sides {
    margin-left: 10px;
    margin-right: 10px;
}
</style>

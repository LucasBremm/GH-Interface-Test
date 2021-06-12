<script>
import ContactForm from './ContactForm.vue'

export default {
    components: {
        ContactForm
    },
    computed: {
        isMobile () {
            return document.documentElement.clientWidth < 768;
        }
    },
    mounted () {
        console.log(this.isMobile);
    }
}
</script>

<template>
    <div id="root" class="d-flex align-items-end" :class="isMobile ? 'flex-column-reverse' : ''">
        <div class="col-sm-6 d-flex justify-content-end flex-column pr-4 pl-4">
            <h1 class="blue-text"><strong>Desenvolvimento de Produtos Digitais</strong></h1>
            <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, quo?</h5>
        </div>
        <div class="col-sm-6 pr-4 pl-4" :class="isMobile ? 'mb-5' : ''">
            <ContactForm id="contato" />
        </div>
    </div>
</template>

<style scoped>
    #root {
        background: url("./img/background.jpg") top center no-repeat;
        width: 100%;
        height: 80vh;
        position: relative;
    }

    .blue-text {
        color: rgb(31, 124, 191);
    }
</style>

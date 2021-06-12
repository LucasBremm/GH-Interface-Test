<script>
import axios from 'axios'

export default {
    data () {
        return {
            nome: '',
            telefone: '',
            email: ''
        }
    },
    computed: {
        isValidName () {
            return this.isValidText(this.nome)
        },
        isValidPhone () {
            return this.isValidText(this.telefone)
        },
        isValidEmail () {
            return this.isValidText(this.email)
        }
    },
    methods: {
        isValidText (text) {
            return text.length > 3
        },
        submit () {
            if (this.isValidName && this.isValidEmail && this.isValidPhone) {
                axios.post('/contact/add', { nome: this.nome, telefone: this.telefone, email: this.email })
                    .then(() => {
                        this.nome = ''
                        this.telefone = ''
                        this.email = ''
                    })
            }
            return
        }
    }
}
</script>

<template>
    <div class="card text-center">
        <div class="card-body">
            <h1 class="card-title blue-text"><strong>Entre em Contato!</strong></h1>
            <b-form @submit.prevent="submit" novalidate validated >
                <div class="mb-3">
                    <b-form-input v-model='nome' type="text" class="form-control" id="nome" placeholder="Nome" required :state="isValidName"></b-form-input>
                    <div class="invalid-feedback">
                        Por favor informe seu nome.
                    </div>
                </div>
                <div class="mb-3">
                    <b-form-input v-model='telefone' type="text" class="form-control" id="telefone" placeholder="Telefone" required :state="isValidPhone"></b-form-input>
                    <div class="invalid-feedback">
                        Por favor informe seu telefone.
                    </div>
                </div>
                <div class="mb-3">
                    <b-form-input v-model='email' type="text" class="form-control" id="email" placeholder="E-mail" required :state="isValidEmail"></b-form-input>
                    <div class="invalid-feedback">
                        Por favor informe seu e-mail.
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </b-form>
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

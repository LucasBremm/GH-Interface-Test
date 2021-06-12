<script>
import NavBar from './NavBar.vue'
import StartBanner from './StartBanner.vue'
import JustificationText from './JustificationText.vue'
import HowWeHelp from './HowWeHelp.vue'
import Cases from './Cases.vue'
import Footer from './Footer.vue'

export default {
    props: {
        logo_path: {
            type: String,
            default: null
        },
        arrow_path: {
            type: String,
            default: null
        }
    },
    components: {
        NavBar,
        StartBanner,
        JustificationText,
        HowWeHelp,
        Cases,
        Footer
    }
}
</script>

<template>
<div>
    <NavBar :logo_path="logo_path" />
    <StartBanner />
    <div class="mt-80 d-flex justify-content-center align-items-center">
        <JustificationText />
    </div>
    <div class="center-width mt-80 d-flex flex-column align-items-start">
        <HowWeHelp />
        <Cases :arrow_path="arrow_path" class="mt-5" />
    </div>
    <Footer />
</div>
</template>

<style scoped>
    .mt-80 {
        margin-top: 80px;
    }

    .center-width {
        width: 70%;
        margin-left: auto;
        margin-right: auto;
    }

    @media screen and (max-width: 768px) {
        .center-width {
            width: 90%;
        }
    }
</style>

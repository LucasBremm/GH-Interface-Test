<script>
import CardCases from "./CardCases.vue";
export default {
    components: {
        CardCases
    },
    props: {
        arrow_path: {
            type: String,
            default: null
        }
    }
};
</script>

<template>
    <div>
        <h3 class="blue-text">
            <strong>
                Cases
            </strong>
        </h3>
        <div class="container">
            <div class="row">
                <CardCases :arrow_path="arrow_path" />
                <CardCases :arrow_path="arrow_path" title="Gerencial" text="Gerencial is an office of auditing, accounting and consulting" />
                <CardCases :arrow_path="arrow_path"  title="Vetherapy" text="Vetherapy is a San Francisco startup. Focused on therapies from stem cells" />
            </div>
            <div class="row mt-5">
                <div class="col col-xs-6">
                    <img :src="arrow_path" style="width: 100%" />
                </div>
                <div class="col col-xs-6">
                    <span class="blue-text">
                        <strong>
                            <a href="#">
                                All Projects
                            </a>
                        </strong>
                    </span>
                </div>

            </div>
        </div>
    </div>
</template>

<style scoped>
.blue-text {
    color: rgb(31, 124, 191);
    font-size: 32px;
}

@media screen and (max-width: 768px) {
    .blue-text {
        font-size: 24px;
    }
}

.margin-sides {
    margin-left: 10px;
    margin-right: 10px;
}
</style>

<template>
    <div class="mt-3 col-md-4 col-sm-12 col-xs-12 pad-0 pr-2">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-end">
                    <div class="col-sm-8">
                        <img :src="arrow_path">
                        <a href="#">More</a>
                    </div>
                </div>
                <div class="d-flex justify-content-start mt-5">
                    <span class="card-text mt-5" >
                        <div class="card border-0">
                            <div class="card-body pad-0">
                                <span class="card-title h4"><strong>{{ title }}</strong></span><br>
                                <span class="card-text">{{ text }}</span><br>
                                <small>branding, interaction</small>
                            </div>
                        </div>
                    </span>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        props: {
            title: {
                type: String,
                default: 'Godoc'
            },
            text: {
                type: String,
                default: 'Godoc is an app for scheduling of medical appointments.'
            },
            tags: {
                type: String,
                default: 'branding, interaction'
            },
            arrow_path: {
                type: String,
                default: ''
            }
        }
    }
</script>

<style scoped>
    .pad-0 {
        padding: 0;
    }

    img {
        width: 70%;
        height: auto;
    }
</style>

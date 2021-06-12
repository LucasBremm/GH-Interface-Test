<template>
    <div class="mt-5 col-md-4 col-sm-6 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <div>
                        <h5 class="card-title"><strong>{{ title }}</strong></h5>
                        <p class="card-text mt-5" >{{ text }}</p>
                    </div>
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
                default: 'Lorem ipsum dolor sit amet, consectetur eli.'
            },
            text: {
                type: String,
                default: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam egestas orci in sapien volutpat, sed fringilla risus.'
            },
            img_path: {
                type: String,
                default: ''
            }
        }
    }
</script>

<style scoped>
    .width-60 {
        width: 60%;
    }
</style>

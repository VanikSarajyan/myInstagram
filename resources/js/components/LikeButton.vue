<template>
    <div class="container">
        <button class="btn btn-primary" @click="likePost" v-text="buttonText"></button>
    </div>
</template>

<script>
    export default {
        props: ['postId', 'isLiked'],

        data: function(){
            return {
                status: this.isLiked,
            }
        },

        methods: {
            likePost(){
                axios.post('/like/' + this.postId)
                    .then(response => {
                        this.status = !this.status;
                    }
                ).catch(errors => {
                    if(errors.response.status == 401){
                        window.location = "/login";
                    }
                })
            }
        },

        computed: {
            buttonText(){
                return this.status ? 'Unlike' : 'Like';
            }
        }
    }
</script>

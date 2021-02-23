<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
             <a href="api/posts">SHOW API</a>     
                <div class="card" v-for="post in posts">
                    <div class="card-header">
                        <h3>{{ post.title }}</h3>
                        </div>
                    <div class="card-body">
                        {{ post.description }}
                    </div>
                    <div class="card-footer">
                        <span>Created at: {{ new Date(post.created_at).toLocaleString('it') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                posts: ""
            } 
        },
        mounted() {
            axios.get('api/posts').then(response => {
                console.log(response.data.data);
                this.posts = response.data.data;
            }).catch(error => {
                console.log(error);
            })
        }
    }
</script>
<style lang="scss" scoped>
    .card{
        margin: 15px 0;
        border: 1px solid #636b6f;
        border-radius: 15px;
    }
</style>
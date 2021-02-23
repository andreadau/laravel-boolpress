<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
             <a href="api/articles">SHOW ARTICLES API</a> 
             <a href="api/categories">SHOW CATEGORIES API</a>     
             <a href="api/tags">SHOW TAGS API</a>     
                <div class="card" v-for="article in articles">
                    <div class="card-header">
                        <h3>{{ article.title }}</h3>
                        </div>
                    <div class="card-body">
                        {{ article.description }}
                    </div>
                    <div class="card-footer">
                        <span>Created at: {{ new Date(article.created_at).toLocaleString('it') }}</span>
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
                articles: ""
            } 
        },
        mounted() {
            axios.get('api/articles').then(response => {
                console.log(response.data.data);
                this.articles = response.data.data;
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
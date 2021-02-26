<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
             <a href="api/articles">ARTICLES API</a> 
             <a href="api/categories">CATEGORIES API</a>     
             <a href="api/tags">TAGS API</a>     
                <div class="card" v-for="(article,index) in articles">
                    <div class="card-header">
                        <h3>{{ article.title }}</h3>
                    </div>
                    <div class="card-body">
                        {{ article.description }}
                    </div>
                    <div  v-if="article.category && article.tags">
                        <p> Category : {{ article.category.name }} </p>
                        <p> Tags : 
                        <span v-for="(tag,index) in article.tags"> 
                            #{{ tag.name }} 
                        </span>
                        </p>
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
                articles: { type: Object, default: () => ({}) }
            } 
        },
        mounted() {
            // Article Api Call
            axios.get('api/articles').then(response => {
                this.articles = response.data.data;
            }).catch(error => {
                console.log(error);
            });
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
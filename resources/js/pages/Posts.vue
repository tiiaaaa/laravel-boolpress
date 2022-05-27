<template>
    <div class="row flex-wrap">
        <Post v-for="(post, index) in posts" :key="index" :post='post'/>
    </div>
</template>

<script>
import Post from '../components/Post.vue';

export default {
    name: "Posts",

    components: {
        Post,
    },

    data: function(){
        return{
            posts: [],
        }
    },

    methods: {
        getPosts(){
            axios.get('http://localhost:8000/api/posts')
                .then((result)=>{
                    // console.log(result.data.results.data);
                    this.posts = result.data.results.data;
                    // console.log(this.posts);
                })
                .catch((error)=>{
                    console.warn(error);
                })
        }
    },

    created(){
        this.getPosts();
    }

}
</script>

<style lang='scss' scoped>

</style>

<template>
    <div>
        <Post/>
    </div>
</template>

<script>
import Post from './Post.vue';

export default {
    name: "PostList",

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
                    console.log(result.data.data);
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

<style>

</style>

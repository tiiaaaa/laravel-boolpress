<template>
    <div class="col-3">
        <div class="card mb-5">
            <div class="card-immage p-1">
                <img class="img-fluid" :src="post.url_immage" :alt="post.name">
            </div>

            <div class="card-body">
                <div class="post-title">
                    <h2 class="text-uppercase">{{ post.name }}</h2>
                </div>

                <div class="post-text">
                    <p>{{ post.description }}</p>
                </div>

                <div class="post-date">
                    <p class="text-capitalize">published on: {{ post.pubblication_date }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Post",

    props: ['post']

}
</script>

<style lang='scss' scoped>

    div.card-body{
        height: 300px;
    }

</style>

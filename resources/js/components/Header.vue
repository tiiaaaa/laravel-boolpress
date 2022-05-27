<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold fs-3" href="#">Boolpress</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item" v-for="(navItem, index) in navItems" :key='index'>
                        <router-link class="nav-link text-capitalize" :to="{ name: navItem.routeName }">
                            {{ navItem.label }}
                        </router-link>
                    </li>
                    <!-- <li class="nav-item">
                        <router-link class="nav-link" :to="{ name: 'contacts' }">
                            Contacts
                        </router-link>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "Header",

    data: function(){

        return{
            navItems: [
                {
                    label: 'posts',
                    routeName: 'posts'
                },

                {
                    label: 'contacts',
                    routeName: 'contact-us'
                },
            ]
        }
    }

}
</script>

<style lang='scss' scoped>

    nav.navbar{
        height: 10vh;
    }

</style>

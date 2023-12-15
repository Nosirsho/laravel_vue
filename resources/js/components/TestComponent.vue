<template>
    <div class="m-5">
        <CreateComponent ref="create"></CreateComponent>
        <IndexComponent ref="index"></IndexComponent>
    </div>
</template>

<script>
import CreateComponent from "./CreateComponent.vue";
import IndexComponent from "./IndexComponent.vue";
export default {
    name: "TestComponent",

    data() {
        return {
            persons: null
        }
    },

    mounted() {
        this.getPersons();
    },

    methods: {
        getPersons() {
            axios.get('/persons')
                .then(res =>{
                    this.persons = res.data;
                })
        }
    },

    computed: {},

    components:{
        CreateComponent,
        IndexComponent
    }
}
</script>

<style scoped>

</style>

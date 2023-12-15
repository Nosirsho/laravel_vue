<template>
    <div class="m-5">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
                <th scope="col">+</th>
                <th scope="col">-</th>
            </tr>
            </thead>
            <tbody>
            <template v-for="person in persons">
                <ShowComponent :person="person" :ref="`show_${person.id}`"></ShowComponent>
                <EditComponent :person="person" :ref="`edit_${person.id}`"></EditComponent>
            </template>
            </tbody>
        </table>
    </div>
</template>

<script>

import EditComponent from "./EditComponent.vue";
import ShowComponent from "./ShowComponent.vue";

export default {
    name: "CreateComponent",

    data() {
        return {
            persons: null,
            editPersonId: null,
            name: '',
            age: null,
            job: null
        }
    },
    mounted() {
        this.getPerson();
    },

    methods: {
        getPerson() {
            axios.get("/api/people").then(res => {
                this.persons = res.data;
            }).catch(err =>{
                console.log('err-> ' + err);
            });
        },
    },
    components:{
        EditComponent,
        ShowComponent
    }

}
</script>

<style scoped>

</style>

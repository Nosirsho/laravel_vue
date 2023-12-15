<template>
    <div class="w-25">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" v-model="name" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" v-model="age" class="form-control" id="age">
        </div>
        <div class="mb-3">
            <label for="job" class="form-label">Job</label>
            <input type="text" v-model="job" class="form-control" id="job">
        </div>
        <button type="submit" @click.prevent="addPerson" class="btn btn-primary">Save</button>
        <SomeComponent :obj="obj"></SomeComponent>
    </div>
</template>

<script>
import SomeComponent from "./SomeComponent.vue";
export default {
    name: "CreateComponent",

    data() {
        return {
            name: null,
            age: null,
            job: null,
            obj: {
                name: "Nosirsho",
                title: "Another title",
                year: "2015",
            }
        }
    },

    methods: {
        addPerson() {
            axios.post("/api/people",{
                name: this.name,
                age: this.age,
                job: this.job
            }).then(res =>{
                this.name = null
                this.age = null
                this.job = null
                this.$parent.$refs.index.getPerson();
            })
        }
    },

    components:{
        SomeComponent
    }

}
</script>

<style scoped>

</style>

<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="person in persons">
                <td>{{ person.id }}</td>
                <td>{{ person.name }}</td>
                <td>{{ person.age }}</td>
                <td>{{ person.job }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: "Index",

    data(){
        return {
            persons: null
        }
    },

    mounted() {
        this.index()
    },

    methods: {
        index(){
            axios.get('api/people').then(res=>{
                this.persons = res.data
            })
        }
    }
}
</script>

<style scoped>

</style>

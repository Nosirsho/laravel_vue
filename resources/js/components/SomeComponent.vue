<template>
    <div class="m-5">
        <div>Name: {{ obj.name }}</div>
        <div>Title: {{ obj.title }}</div>
        <div>Year: {{ obj.year }}</div>
    </div>
</template>

<script>
export default {
    name: "SomeComponent",

    props: [
        'obj'
    ]


}
</script>

<style scoped>

</style>

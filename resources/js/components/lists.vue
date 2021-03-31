<template>
    <table>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>email</td>
        </tr>
        <tr v-for="item in userData" v-bind:key="item.id">
            <td>{{ item.id }}</td>
            <td>{{ item.name }}</td>
            <td>{{ item.email }}</td>
        </tr>
    </table>
</template>
<script>
import axios from "axios";

export default {
    name: "Showlists",
    data() {
        return { userData: undefined };
    },
    mounted() {
        axios.get("http://127.0.0.1:8000/api/post").then(response => {
            console.log(response);
            this.userData = response.data;
        });
    }
};
</script>

<style>
table {
    margin-bottom: 5%;
}
</style>

<template>
    <div>
        <h2>Database</h2>

        <router-link to="/create">Create</router-link>
        <table border="1" style="border-collapse: collapse">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Qty</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in items" :key="item.id">
                    <td>#</td>
                    <td>{{ item.name }}</td>
                    <td>{{ item.category }}</td>
                    <td>{{ item.qty }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            items: [],
        };
    },
    created() {
        axios.get("http://127.0.0.1:8000/api/items").then((response) => {
            this.items = response.data[0].data;
        });
    },
};
</script>

<template>
    <div>
        <h1>Create item</h1>
        <form @submit.prevent="createItem" method="post">
            @csrf
            <label for=""
                >Name <input type="text" v-model="item.name" /> </label
            ><br />
            <label for=""
                >Category <input type="text" v-model="item.category" /> </label
            ><br />
            <label for=""
                >Qty
                <input type="number" v-model="item.qty" />
            </label>
            <button type="submit">Submit</button>
        </form>
    </div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            item: [],
        };
    },
    methods: {
        createItem() {
            axios
                    .post("http://127.0.0.1:8000/api/items", this.item)
                    .then(response => {
                        this.$router.push();
                    })
                    .catch(errors => {
                        console.log(this.item);
                        console.log(errors);
                    })
        },
    },
};
</script>

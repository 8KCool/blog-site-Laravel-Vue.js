<template>
    <v-container>
        <vue-simplemde v-model="form.body" />
        <v-btn dark color="green" v-on:click="submit">
            Reply
        </v-btn>
    </v-container>
</template>

<script>
export default {
    props: ["questionSlug"],
    data() {
        return {
            form: {
                body: null
<<<<<<< HEAD
            },
            initialState: null,
=======
            }
>>>>>>> adf261b28bc0cbf76515a85e9a02d6cd3b32afa2
        };
    },
    methods: {
        submit(e) {
<<<<<<< HEAD
            // e.preventDefault();
=======
            e.preventDefault();
>>>>>>> adf261b28bc0cbf76515a85e9a02d6cd3b32afa2
            axios
                .post(`/api/question/${this.questionSlug}/reply`, {
                    body: this.form.body
                })
                .then((response) => {
<<<<<<< HEAD
                    this.form.body = '';
=======
                    this.form.body = "";
>>>>>>> adf261b28bc0cbf76515a85e9a02d6cd3b32afa2
                    EventBus.$emit("newReply", response.data.replies);
                })
                .catch(error => console.error(error));
        }
    }
};
</script>

<style>
@import 'simplemde/dist/simplemde.min.css';
</style>

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
            }
        };
    },
    methods: {
        submit(e) {
            e.preventDefault();
            axios
                .post(`/api/question/${this.questionSlug}/reply`, {
                    body: this.form.body
                })
                .then((response) => {
                    this.form.body = "";
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

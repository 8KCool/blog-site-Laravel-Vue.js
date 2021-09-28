<template>
    <v-container fluid grid-list-md>
        <v-layout row wrap>
            <v-flex md3>
                <app-sidebar></app-sidebar>
            </v-flex>
            <v-flex md9>
                <question
                    v-for="question in questions"
                    :key="question.id"
                    :data="question"
                ></question>
                <div class="text-center">
                    <v-pagination
                        v-model="meta.current_page"
<<<<<<< HEAD
                        :length="links"
=======
                        :length="meta.total"
>>>>>>> adf261b28bc0cbf76515a85e9a02d6cd3b32afa2
                        :total-visible="meta.total"
                        v-on:input="paginate"
                    ></v-pagination>
                </div>
            </v-flex>
        </v-layout>
    </v-container>
</template>

<script>
import Question from "./Question";
import AppSidebar from "./AppSidebar";
export default {
    components: { Question, AppSidebar },
    data() {
        return {
            questions: {},
<<<<<<< HEAD
            meta: {},
            links: 0
=======
            meta: {}
>>>>>>> adf261b28bc0cbf76515a85e9a02d6cd3b32afa2
        };
    },
    created() {
        this.paginate()
    },
    methods: {
        paginate(page) {
            axios
            .get(`api/question?page=${page}`)
            .then(response => {
                this.questions = response.data.data;
                this.meta = response.data.meta;
<<<<<<< HEAD
                this.links = Object.keys(response.data.links).length-1
=======
>>>>>>> adf261b28bc0cbf76515a85e9a02d6cd3b32afa2
            })
            .catch(error => console.error(error));
        }
    }
};
</script>

<style></style>

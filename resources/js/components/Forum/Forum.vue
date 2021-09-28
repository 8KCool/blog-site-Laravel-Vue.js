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
                        :length="meta.total"
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
            meta: {}
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
            })
            .catch(error => console.error(error));
        }
    }
};
</script>

<style></style>

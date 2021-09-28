<template>
<<<<<<< HEAD
    <div class="text-center mr-4">
=======
    <div class="text-center">
>>>>>>> adf261b28bc0cbf76515a85e9a02d6cd3b32afa2
        <v-menu offset-y>
            <template v-slot:activator="{ on }">
                <v-btn v-on="on" icon small>
                    <v-icon :color="color">add_alert</v-icon>{{ unreadCount }}
                </v-btn>
            </template>
            <v-list>
                <v-list-item v-for="item in unread" :key="item.id">
                    <router-link :to="'/'+item.path">
                        <v-list-item-title v-on:click="markAsRead(item)">
                            {{ item.question }}
                        </v-list-item-title>
                    </router-link>
                </v-list-item>
                <v-list-item v-for="item in read" :key="item.id">
                        <v-list-item-title>
                            {{ item.question }}
                        </v-list-item-title>
                </v-list-item>
            </v-list>
        </v-menu>
    </div>
</template>

<script>
export default {
    name: "AppNotification",
    created() {
        if (User.loggedIn()) {
            this.getNotifications();
        }

        Echo.private("App.Models.User." + User.getId()).notification(
            notification => {
                this.unread.unshift(notification);
                this.unreadCount++;
            }
        );
    },
    data() {
        return {
            read: {},
            unread: {},
            unreadCount: 0
        };
    },
    methods: {
        getNotifications() {
            axios.post("/api/notifications").then(response => {
                this.read = response.data.read;
                this.unread = response.data.unread;
                this.unreadCount = response.data.unread.length;
            })
            .catch(error => Exception.handle(error));
        },
        markAsRead(notification) {
            axios
                .post("/api/markAsRead", { id: notification.id })
                .then(response => {
                    this.unread.splice(notification, 1);
                    this.read.push(notification);
                    this.unreadCount--;
                });
        }
    },
    computed: {
        color() {
            return this.unreadCount > 0 ? "red" : "red lighten-4";
        },
        // url(url) {
        //     return router.push(url)
        // }
    }
};
</script>

<style></style>

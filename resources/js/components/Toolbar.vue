<template>
    <v-app-bar color="light-grey">
        <router-link to="/" style="text-decoration: none; color: inherit;">
            <v-toolbar-title>
                Chainlink
            </v-toolbar-title>
        </router-link>
        <v-spacer></v-spacer>
        <app-notification v-if="loggedIn"> </app-notification>
        <div>
            <!-- class="hidden-sm-and-down" -->
            <router-link
                v-for="item in items"
                :key="item.title"
                :to="item.to"
                v-if="item.show"
<<<<<<< HEAD
                style="text-decoration: none; color: inherit;"
=======
>>>>>>> adf261b28bc0cbf76515a85e9a02d6cd3b32afa2
            >
                <v-btn text>{{ item.title }}</v-btn>
            </router-link>
        </div>
<<<<<<< HEAD
        <v-avatar :color="`#${Math.floor(Math.random() * 0xFFFFFF)}`" size="44" v-if="getUserName()">{{ userName }}</v-avatar>
    </v-app-bar>
=======
    </v-app-bar>

    <!-- <v-app id="inspire">
        <v-app-bar color="white" absolute right>
            <v-app-bar-nav-icon
                class="hidden-md-and-up"
                @click.stop="drawer = !drawer"
            ></v-app-bar-nav-icon>
        </v-app-bar>

        <v-navigation-drawer
            class="blue lighten-5 px-3 py-3"
            v-model="drawer"
            :permanent="$vuetify.breakpoint.mdAndUp"
            absolute
        >
            <v-list-item>
                <v-list-item-content>
                    <router-link
                        to="/"
                        style="text-decoration: none; color: inherit;"
                    >
                        <v-toolbar-title>
                            Chainlink
                        </v-toolbar-title>
                    </router-link>
                </v-list-item-content>
            </v-list-item>

            <v-divider></v-divider>

            <v-list nav>
                    <router-link
                        v-for="item in items"
                        :key="item.title"
                        :to="item.to"
                        v-if="item.show"
                    >
                        <v-list-item>
                                <v-list-item-icon>
                                    <v-icon>icon</v-icon>
                                </v-list-item-icon>
                                <v-list-item-content>
                                    <v-btn text>{{ item.title }}</v-btn>
                                </v-list-item-content>
                        </v-list-item>
                    </router-link>
            </v-list>
        </v-navigation-drawer>
    </v-app> -->
>>>>>>> adf261b28bc0cbf76515a85e9a02d6cd3b32afa2
</template>

<script>
import AppNotification from "./AppNotification.vue";
export default {
    components: { AppNotification },
    data() {
        return {
            drawer: null,
            toggleMenu: false,
            items: [
                { title: "Forum", to: "/forum", show: true },
                { title: "Ask Question", to: "/ask", show: User.hasToken() },
                { title: "Category", to: "/category", show: User.admin() },
                { title: "Login", to: "/login", show: !User.hasToken() },
                { title: "Logout", to: "/logout", show: User.hasToken() }
            ],
<<<<<<< HEAD
            loggedIn: User.loggedIn(),
            userName: this.getUserName()
=======
            loggedIn: User.loggedIn()
>>>>>>> adf261b28bc0cbf76515a85e9a02d6cd3b32afa2
        };
    },
    created() {
        EventBus.$on("logout", () => {
            User.loggedOut();
        });
<<<<<<< HEAD
    },
    methods: {
        getUserName() {
            if(User.loggedIn()){
                return User.getName()
                .split(" ")
                .map(s => s[0].toUpperCase())
                .join("")
            }
            return false
        }
=======
>>>>>>> adf261b28bc0cbf76515a85e9a02d6cd3b32afa2
    }
};
</script>

<style></style>

<template>
<v-container>
    <h1>Login</h1>
    <v-form v-on:submit="login">
    <v-container>
      <v-row>
          <v-col
          cols="12"
          md="12"
        >
          <v-text-field
            v-model="form.email"
            type="email"
            required
          >
        <template #label>
<<<<<<< HEAD
            <span class="red--text"><strong>* </strong></span>Email
=======
            <span class="red--text"><strong>* </strong></span>EMAIL
>>>>>>> adf261b28bc0cbf76515a85e9a02d6cd3b32afa2
        </template>
        </v-text-field>
        </v-col>

          <v-col
          cols="12"
          md="12"
        >
          <v-text-field
            v-model="form.password"
            type="password"
            required
          >
            <template #label>
<<<<<<< HEAD
                <span class="red--text"><strong>* </strong></span>Password
=======
                <span class="red--text"><strong>* </strong></span>PASSWORD
>>>>>>> adf261b28bc0cbf76515a85e9a02d6cd3b32afa2
            </template>
          </v-text-field>
        </v-col>
      </v-row>
      <v-btn
        color="green"
        type="submit"
      >
          Login
      </v-btn>
      <router-link to="/signup">
        <v-btn text>Sign up</v-btn>
      </router-link>
    </v-container>
  </v-form>
</v-container>
</template>

<script>
export default {
    data() {
        return {
            form: {
            email: null,
            password: null
            }
        }
    },
    created(){
        if(User.hasToken()) {
            this.$router.push({name: 'forum'})
        }
    },
    methods: {
        login(e) {
            e.preventDefault();
            User.login(this.form);
        }
    }
}
</script>

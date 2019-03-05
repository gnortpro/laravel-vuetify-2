@extends('layouts.app_custom')
@section('content')
<template>
  <v-app id="app">
    <v-content>
      <v-container fluid fill-height>
        <v-layout align-center justify-center>
          <v-flex xs12 sm8 md4>
            <v-card class="elevation-12">
              <v-toolbar dark color="primary">
                <v-toolbar-title>Login form</v-toolbar-title>
          
              </v-toolbar>
              <v-card-text>
                <v-form>
                  <v-text-field prepend-icon="person" name="login" label="Login" type="text"></v-text-field>
                  <v-text-field id="password" prepend-icon="lock" name="password" label="Password" type="password"></v-text-field>
                </v-form>
              </v-card-text>
              <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn color="primary">Login</v-btn>
              </v-card-actions>
            </v-card>
          </v-flex>
        </v-layout>
      </v-container>
    </v-content>
  </v-app>
</template>

<script>
  export default {
    data: () => ({
      drawer: null
    }),

    props: {
      source: String
    }
  }
</script>
@endsection
<!-- <script>
  export default {
    data () {
        return {
            drawer: null,
            response : []
        }
      
    },

    props: {
      source: String
    },
    method: {
        onSubmit: function () {
            axios.post('/login', {
                email : this.$ref.user_email.value,
                password: this.$ref.user_password.value
            }),
            .then(response => {
                console.log(response)
            })
            .catch(error => {
                console.log(error.response.data.errors)
            })
        }
       
    }
  }
  </script> -->

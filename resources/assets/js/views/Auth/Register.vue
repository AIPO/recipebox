<template>
    <div class="column is-half is-offset-one-quarter">
        <section class="section ">
            <form class="form" @submit.prerent="register">
                <h1 class="title">Create an Account</h1>
                <div class="field">
                    <label for="name" class="label">Name</label>
                    <div class="control">
                        <input type="text" class="input" v-model="form.name">
                        <p class="help is-danger" v-if="error.name">{{error.name}}</p>
                    </div>
                </div>
                <div class="field">
                    <label for="email" class="label">Email</label>
                    <div class="control has-icons-left">
                        <input type="text" class="input" v-model="form.email">
                        <p class="help is-danger" v-if="error.email">{{error.email}}</p>
                        <span class="icon is-small is-left"><i class="fa fa-envelope"></i></span>
                    </div>
                </div>

                <div class="field">
                    <label for="password" class="label">Confirm Password</label>
                    <div class="control">
                        <input type="password" class="input" v-model="form.password">
                        <p class="help is-danger" v-if="error.password">{{error.password}}</p>
                    </div>
                </div>
                <div class="field">

                    <label for="password_confirm" class="label">Password</label>
                    <div class="control">
                        <input type="password" class="input" v-model="form.password_confirm">
                        <!--<p class="help is-danger" v-if="error.password_confirm">{{error.password_confirm}}</p>-->
                    </div>
                </div>
                <div class="field ">
                    <div class="control ">
                        <a :disabled="isProcessing" class="button is-primary is-centered">Register</a>
                    </div>
                </div>
            </form>
        </section>
    </div>
</template>
<script type="text/javascript">
  export default {
    data () {
      return {
        form: {
          name: '',
          email: '',
          password: '',
          password_confirm: ''
        },
        error: {},
        isProcessing: false
      }
    },
    methods: {
      register () {}
    }
  }
</script>
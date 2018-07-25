<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Ssr example with ajax</h1>
                <div class="card card-default">
                    <div class="card-header">User</div>

                    <div class="card-body text-center">
                        <div v-if="user !== null">
                            <p>
                                First name: <b>{{ user.name }}</b>
                            </p>
                            <p>
                                Last name: <b>{{ user.last_name }}</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  data() {
    return {
      title: 'Ssr example',
      user: null,
    };
  },
  mounted() {
    this.getUser();
  },
  methods: {
    getUser() {
      this.$axios.get('/api/user').then((response) => {
        this.user = response.data.user;
      });
    },
  },
};
</script>
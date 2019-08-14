<template>
  <div>
    <button
      class="btn btn-primary ml-4"
      user-id="this.userId"
      @click="followUser"
      v-text="buttonText"
    ></button>
  </div>
</template>

<script>
export default {
  props: ["userId", "follows"],

  mounted() {
    console.log("Component mounted.");
  },

  data: function() {
    return {
      stastus: this.follows
    };
  },

  methods: {
    followUser() {
      axios.post("/follow/" + this.userId).then(Response => {
        console.log(Response.data);
      });
    }
  },

  computed: {
    buttonText() {
      return this.status ? "Unfollow" : "Follow";
    }
  }
};
</script>

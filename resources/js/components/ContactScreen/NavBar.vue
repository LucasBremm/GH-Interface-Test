<script>
export default {
    props: {
        logo_path: {
            type: String,
            default: ''
        }
    }
}
</script>

<template>
    <div>
  <b-navbar toggleable="lg">
    <b-navbar-brand href="#">
        <img :src="logo_path">
    </b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
      <!-- Right aligned nav items -->
      <b-navbar-nav class="ml-auto">
        <b-nav-item class="b-nav-link" href="#">Work</b-nav-item>
        <b-nav-item class="b-nav-link" href="#">Services</b-nav-item>
        <b-nav-item class="b-nav-link" href="#">About</b-nav-item>
        <b-nav-item class="b-nav-link" href="#">Contact</b-nav-item>
        <b-nav-item class="b-nav-locale" href="#">BRA / EUA</b-nav-item>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
</div>
</template>

<style scoped>
    .navbar-light .navbar-nav .nav-link{
      color:black;
    }
</style>

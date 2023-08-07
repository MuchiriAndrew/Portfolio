<template>
  <div class="home">
    <NavbarComponent />
    <Body />
  </div>
</template>

<script>
import NavbarComponent from "../components/NavbarComponent.vue"
import Body from "../components/Body.vue"
export default {
  name: 'HomeView',
  components: {NavbarComponent, Body}
}
</script>

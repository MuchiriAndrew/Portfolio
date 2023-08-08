<template>
  <div class="home">
    <NavbarComponent />
    <HomeSection />
  </div>
</template>

<script>
import NavbarComponent from "../components/NavbarComponent.vue"
import HomeSection from "../components/HomeSection.vue"
export default {
  name: 'HomeView',
  components: {NavbarComponent, HomeSection}
}
</script>

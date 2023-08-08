<template>
  <div class="home">
    <NavbarComponent />
    <HomeSection />
    <About />
  </div>
</template>

<script>
import NavbarComponent from "../components/NavbarComponent.vue"
import HomeSection from "../components/HomeSection.vue"
import About from "../components/About.vue"
export default {
  name: 'HomeView',
  components: {NavbarComponent, HomeSection, About}
}
</script>

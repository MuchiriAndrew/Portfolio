<template>
  <div class="home">
    <NavbarComponent />
    <HomeSection />
    <About />
    <Projects />
    <Blog />
    <Contact />
  </div>
</template>

<script>
import NavbarComponent from "../components/NavbarComponent.vue"
import HomeSection from "../components/HomeSection.vue"
import About from "../components/About.vue"
import Projects from "../components/Projects.vue"
import Blog from "../components/Blog.vue"
import Contact from "../components/Contact.vue"
export default {
  name: 'HomeView',
  components: {NavbarComponent, HomeSection, About, Projects, Blog, Contact}
}
</script>

<template>
<nav class="navbar navbar-expand-md fixed-top" style="background-color:#0a192f">
  <div class="container-fluid m-0 px-4" id="nav-container">

    <transition name="fade">
    <a v-if="show" class="navbar-brand" id="logo" href="#">
        <svg width="40" height="40" viewBox="0 0 304 281" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M149.712 6.17764C151.148 5.43861 152.852 5.43862 154.288 6.17764L280.924 71.3543C282.589 72.2113 283.636 73.9271 283.636 75.8V205.2C283.636 207.073 282.589 208.789 280.924 209.646L154.288 274.822C152.852 275.561 151.148 275.561 149.712 274.822L23.076 209.646C21.4108 208.789 20.3641 207.073 20.3641 205.2V75.8C20.3641 73.9271 21.4108 72.2113 23.076 71.3543L149.712 6.17764Z" stroke="#64ffda" stroke-width="20"/>
        <path d="M118.942 201H89.2827L134.474 70.0909H170.142L215.27 201H185.611L152.82 100.006H151.797L118.942 201ZM117.088 149.544H187.145V171.149H117.088V149.544Z" fill="#64ffda"/>
        </svg>
    </a>
    </transition>


    <div style="border:none" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <transition name="toggle">
    <svg v-if="show" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#64ffda" class="bi bi-list" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
    </svg>
    </transition>
    </div>


    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

      <div class="offcanvas-header justify-content-end">
        <div id="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#64ffda" class="bi bi-x" viewBox="0 0 16 16">
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
        </div>
      </div>

<transition name="navfade">
      <div v-if="show" class="offcanvas-body p-0" id="nav-body">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link" href="#"><span>01.&nbsp;</span>Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#"><span>02.&nbsp;</span>About Me</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#"><span>03.&nbsp;</span>Projects</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#"><span>04.&nbsp;</span>Blog</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#"><span>05.&nbsp;</span>Contact</a>
          </li>
        </ul>
      </div>
      </transition>

    </div>

  </div>
</nav>
</template>

<script>
export default {
  data() {
    return {
      body:document.body,
      lastScroll: 0,
      currentScroll: null,
      show:false,
    }
  },
  methods: {},
  mounted() {
    window.addEventListener("scroll", ()=> {
      this.currentScroll = window.pageYOffset
      if (this.currentScroll <= 0) {
        this.body.classList.remove("scroll-up")
      }

      if(this.currentScroll > this.lastScroll && !this.body.classList.contains("scroll-down")) {
        this.body.classList.remove("scroll-up")
        this.body.classList.add("scroll-down")
      }

      if(this.currentScroll < this.lastScroll && this.body.classList.contains("scroll-down")) {
        this.body.classList.remove("scroll-down")
        this.body.classList.add("scroll-up")
      }

      this.lastScroll  = this.currentScroll
    })

    setTimeout(() => {
      this.show = true;
    }, 500);
  },
  }

</script>

<style>

/* fade in animations */
.fade-enter-from{opacity: 0;transform:translateX(-20px) ;}
.fade-enter-to{opacity: 1;}
.fade-enter-active{transition: all 0.8s ease-in-out;}

.navfade-enter-from{opacity: 0;transform:translateY(-20px) ;}
.navfade-enter-to{opacity: 1;}
.navfade-enter-active{transition: all 0.8s ease-in-out;}

.toggle-enter-from{transform:translateX(20px) ;}
.toggle-enter-active{transition: 0.8s ease-in-out;}

* {
  font-family: Fira Code;
  font-size: 13px;
}

/* Scroll stuff */

.scroll-down nav {
  transform: translate3d(0, -100%, 0);
}
.scroll-up nav {
  box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
}

nav {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 999;
  transition: all 300ms ease-in-out;
}

#nav-container {
    height: 100%;
}

#offcanvasNavbar {
    display: flex;
    justify-content: center;
    align-items: flex-end;

}

.navbar-toggler {
    border: none;
}

#nav-body {
    width: 50%;
    height: 12vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.navbar-nav {
    height: 100%;
    width: 100%;
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.nav-item {
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.nav-item a {
    color: hsl(239, 57%, 85%);
}
.nav-item a span {
    color: #64ffda;
}
.nav-item a:hover {
    color: #64ffda;
    transition: 0.2s ease-in-out;
}

@media (max-width: 992px) {
  #nav-body {
    width: 70%;
    height: 12vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
}

@media (max-width: 768px) {
#offcanvasNavbar {
    width: 80%;
    display: flex;
    justify-content: center;
    align-items: flex-end;
    background: #0a192f;
}

#nav-body {
    width: 100%;
    height: unset;
    display: flex;
    justify-content: center;
    align-items: flex-start;
}
.navbar-nav {
    height: 50%;
    flex-direction: column;
    justify-content: space-around;
    align-items: flex-start;
}

.nav-item {
    height: max-content;
    width: 200px;
    text-align: start;
    margin-left: 20px;
}

.nav-item a {
    width: 100%;
    text-align: start;
}

.nav-item:hover {
    border-bottom: unset;
    transition: unset;
}

}

</style>

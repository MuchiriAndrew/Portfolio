<template>
  <div class="container-fluid" id="wrapper1">

<transition name="home-fade">
    <div v-if="show1" id="txt-wrapper">
        <p>Hi there, I'm</p>
        <h1>Andrew Muchiri</h1>
        <h3>Full-Stack Developer</h3>
        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore omnis tenetur quo est libero, eaque, deserunt dolorem et id veritatis doloremque distinctio. Odit veniam sapiente necessitatibus, minima tempora dolorem velit nostrum? Excepturi rerum officiis pariatur magni veritatis. Officiis, eveniet error odio deleniti expedita saepe nemo nisi fugiat consequuntur! Maiores, asperiores!</span>
        <div id="resume">Download Resume</div>
    </div>
</transition>

    </div>
</template>

<script>
export default {
  data() {
    return {
      show1:false,
    }
  },

  mounted() {
      setTimeout(() => {
        this.show1 = true
    }, 900);
  },
}
</script>

<style scoped>

.home-fade-enter-from{opacity: 0;transform:translateY(20px) ;}
.home-fade-enter-to{opacity: 1;}
.home-fade-enter-active{transition: all 0.8s ease-in-out;}

* {
    background: #0a192f;
}

#wrapper1 {
    min-height: max-content;
    height: 100vh;
    display: flex;
    justify-content: start;
    align-items: center;
}

#txt-wrapper {
  padding-left: 50px;
  padding-top: 50px;
  width: 70%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: start;
}

#txt-wrapper h1 {
  font-family: Poppins;
  font-size: 80px;
  color: hsl(239, 57%, 85%);
}

#txt-wrapper p {
  font-family: Fira Code;
  font-size: 22px;
  color: #64ffda;
}

#txt-wrapper h3 {
  font-family: Poppins;
  font-size: 40px;
  color: #0075FF;
}

span {
  font-family: Fira Code;
  font-size: 16px;
  text-align: start;
  color: hsl(211, 10%, 45%);
}

#resume {
  width: 200px;
  height: 50px;
  border: 2px solid #64ffda;
  margin-top: 20px;
  color: #64ffda;
  font-family: Fira Code;
  font-size: 16px;
  font-weight: 500;
  display: flex;
  justify-content: center;
  align-items: center;
}
#resume:hover {
  background: #64ffda;
  color: #0a192f;
  transition: 0.3s ease-in-out;
  cursor: pointer;
}

@media (max-width: 992px) and (min-width: 768px)  {
  #txt-wrapper {
  padding-left: unset;
  padding-top: unset;
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content:space-around;
  align-items: center;
}

span {
  text-align: center;
}


}

@media (max-width: 992px) and (max-height: 500px)  {
  #wrapper1 {
    min-height: max-content;
    height: 150vh;
    display: flex;
    justify-content: start;
    align-items: center;
}
}

@media (max-width: 768px) {
#txt-wrapper {
  padding-left: unset;
  padding-top: unset;
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: start;
}

#txt-wrapper h3 {
  font-size: 28px;
}
#txt-wrapper h1 {
  font-size: 45px;
}
}

@media screen and (max-height:720px) and (max-width:768px) {
#wrapper1 {
    min-height: max-content;
    height: 130vh;
    display: flex;
    justify-content: start;
    align-items: center;
}
#txt-wrapper {
  padding-left: unset;
  padding-top: unset;
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

#txt-wrapper h1 {
  font-size: 42px;
}
#txt-wrapper h3 {
  font-size: 28px;
}
}


</style>

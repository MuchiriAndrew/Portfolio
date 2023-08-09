<template>
  <div class="container-fluid" id="wrapper1">

    <div id="txt-wrapper">
        <p v-motion
            :initial="{
                opacity: 0,
                y:20
            }"
            :enter="{
                opacity: 1,
                y:0,
                transition: {
                delay:400,
                duration: 800,
                ease: 'easeInOut'
                },
            }">Hi there, I'm</p>
        <h1 v-motion
            :initial="{
                opacity: 0,
                y:20
            }"
            :enter="{
                opacity: 1,
                y:0,
                transition: {
                delay:500,
                duration: 800,
                ease: 'easeInOut'
                },
            }">Andrew Muchiri</h1>
        <h3 v-motion
            :initial="{
                opacity: 0,
                y:20
            }"
            :enter="{
                opacity: 1,
                y:0,
                transition: {
                delay:600,
                duration: 800,
                ease: 'easeInOut'
                },
            }">Full-Stack Developer</h3>
        <span v-motion
            :initial="{
                opacity: 0,
                y:20
            }"
            :enter="{
                opacity: 1,
                y:0,
                transition: {
                delay:700,
                duration: 800,
                ease: 'easeInOut'
                },
            }">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore omnis tenetur quo est libero, eaque, deserunt dolorem et id veritatis doloremque distinctio. Odit veniam sapiente necessitatibus, minima tempora dolorem velit nostrum? Excepturi rerum officiis pariatur magni veritatis. Officiis, eveniet error odio deleniti expedita saepe nemo nisi fugiat consequuntur! Maiores, asperiores!</span>
        <div v-motion
            :initial="{
                opacity: 0,
                y:20
            }"
            :enter="{
                opacity: 1,
                y:0,
                transition: {
                delay:800,
                duration: 800,
                ease: 'easeInOut'
                },
            }" id="resume">Download Resume</div>
    </div>

    </div>
</template>

<script>
export default {
  data() {
    return {

    }
  },

  mounted() {

}
}
</script>

<style scoped>
#wrapper1 {
    background: #0a192f;
    min-height: 100vh;
    height: max-content;
    display: flex;
    justify-content: flex-start;
    align-items: center;
}

#txt-wrapper {
  padding-left: 50px;
  padding-top: 50px;
  width: 70%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
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
    justify-content: flex-start;
    align-items: center;
}
}

@media (max-width: 768px) {
#txt-wrapper {
  padding-left: 15px;
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
    justify-content: flex-start;
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

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
                duration: 400,
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
                delay:600,
                duration: 400,
                ease: 'easeInOut'
                },
            }">Andrew Muchiri.</h1>
        <h3 v-motion
            :initial="{
                opacity: 0,
                y:20
            }"
            :enter="{
                opacity: 1,
                y:0,
                transition: {
                delay:800,
                duration: 400,
                ease: 'easeInOut'
                },
            }">I build cool stuff that lives on the web.</h3>
        <span v-motion
            :initial="{
                opacity: 0,
                y:20
            }"
            :enter="{
                opacity: 1,
                y:0,
                transition: {
                delay:1000,
                duration: 400,
                ease: 'easeInOut'
                },
            }">Highly motivated and hardworking software engineer with a passion for Full-Stack Web development. Proficient in using cutting-edge technologies to come up with innovative solutions. I love writing code and creating beautiful and efficient softwares. I believe that true happiness comes from closing 100 chrome tabs after solving an obscure programming bug and not from anywhere else.</span>
        <div v-motion
            :initial="{
                opacity: 0,
                y:20
            }"
            :enter="{
                opacity: 1,
                y:0,
                transition: {
                delay:1200,
                duration: 400,
                ease: 'easeInOut'
                },
            }" id="resume"><a :href="pdfUrl" download = "resume.pdf">Download Resume</a></div>
    </div>

    </div>
</template>

<script>
export default {
  data() {
    return {
      pdfUrl : "../resume.pdf"
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
  color: hsl(223, 19%, 93%);
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
  font-family: Poppins;
  font-size: 16px;
  text-align: start;
  color: hsl(239, 57%, 85%);
}

#resume {
  width: 200px;
  height: 50px;
  border: 2px solid #64ffda;
  margin-top: 20px;
}
#resume:hover {
  background: #64ffda;
  transition: 0.3s ease-in-out;
  cursor: pointer;
}

#resume a {
  display: flex;
  justify-content: center;
  align-items: center;
  color: #64ffda;
  font-family: Fira Code;
  font-size: 16px;
  font-weight: 500;
  width: 100%;
  height: 100%;
  text-decoration: none;
}

#resume a:hover {
  color: #0a192f;
  transition: 0.3s ease-in-out;
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

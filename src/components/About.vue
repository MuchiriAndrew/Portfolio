<template>
    <div id="wrapper2">
        <h2 v-motion
            :initial="{
                opacity: 0,
            }"
            :visibleOnce="{
                opacity: 1,
                transition: {
                delay:400,
                duration: 800,
                ease: 'easeInOut'
                },
            }" class="mb-5"><span>02.</span> About Me</h2>


        <div v-motion
            :initial="{
                opacity: 0,
                y:100
            }"
            :visibleOnce="{
                opacity: 1,
                y:0,
                transition: {
                delay:400,
                duration: 800,
                ease: 'easeInOut'
                },
            }" id="txt-wrapper">

            <div id="aboutrow" class="">
                <div id="txt-col" class="">
                <!-- <p>Hello, my name is Andrew Muchiri. I am a software engineer based in Nairobi, Kenya. I enjoy coming up with creative solutions to complex issues using various technologies. My love for writing code began when I started studying Computer Science and voila! I guess I found my passion. Besides creating beautiful and efficient web applications, I am an avid chess player and occassionally take part in chess tournaments where I have a blast! <br> I aspire to be a renowned 10x developer who prioritizes delivering softwares that exceed client expectations.</p> -->

                <p>Hello, my name is Andrew Muchiri. I am a software engineer based in Nairobi, Kenya. I enjoy coming up with creative solutions to complex issues using various technologies. My love for writing code began when I started studying Computer Science and voila! I guess I found my passion. I have experience in various programming languages including JavaScript, Python, and Java, and I have worked on numerous projects ranging from web applications to machine learning models. I am constantly learning and keeping up with the latest trends in technology to improve my skills. Besides creating beautiful and efficient web applications, I am an avid chess player and occasionally take part in chess tournaments where I have a blast! <br> I aspire to be a renowned 10x developer who prioritizes delivering software that exceeds client expectations.</p>
                </div>

                <div id="img-col" class="">
                    <img id="myimg" class="img-fluid rounded-3" src="../assets/myimg.jpg" alt="me">
                </div>
            </div>

            <div id="skills" class="mt-3 ">
                    <div class="" id="heading">
                        <h4 class="mt-5">SKILLS</h4>
                    </div>

                    <div id="col1" class="">
                        <ul class="p-0" style="list-style:none" id="frontend">
                            <h5>LANGUAGES</h5>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> JavaScript</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> HTML</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> CSS</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> PHP</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> Ruby</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> Python</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> SQL</li>
                        </ul>

                    </div>

                    <div id="col2" class="">
                        <ul class="p-0" style="list-style:none" id="backend">
                            <h5>FRAMEWORKS</h5>
                           <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> Vuejs</li>
                           <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> React</li>
                           <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> Nodejs</li>
                           <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> Ruby On Rails</li>
                           <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> Laravel</li>
                           <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> Bootstrap</li>
                           <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> TailwindCSS</li>
                        </ul>

                    </div>

                    <div id="col3" class="">
                        <ul class="p-0" style="list-style:none">
                            <h5>DATABASES & TOOLS</h5>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> MongoDB</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> MySQL</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> WordPress</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> Render</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> AWS EC2</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> Google Cloud</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> Nginx</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> Postman</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> GIT & GitHub</li>

                        </ul>

                    </div>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    data() {
        return{

        }
    },
    mounted() {

    }

}
</script>

<style scoped>
#wrapper2 {
    background: #0a192f;
    /* background: aqua; */
    height: max-content;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align:start;
    /* overflow: hidden; */
}

#wrapper2 h2 {
    width: 90%;
    text-align:start;
    font-size: 26px;
    color: hsl(239, 57%, 85%);
}
#wrapper2 h2 span {
    color: #64ffda;
    font-size: 26px;
}

#wrapper2 h2 b {
    color: #64ffda;
}

#txt-wrapper {
    height:120vh;
    min-height: max-content;
    width: 90%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

#aboutrow {
    height: 50%;
    display: flex;
    flex-direction: row;
}

#txt-col {
    width: 50%;
    height: 80%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

#txt-col p {
    color: hsl(223, 19%, 93%);
    font-size: 16px;
    font-family: Poppins;
}

#img-col {
    width: 50%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

#myimg {
    height: 100%;
    box-shadow: #0a192f 10px -10px 0px -3px, #64ffda 10px -10px;
}

#heading {
    width: 15%;
    display: flex;
    justify-content: center;
    align-items: center;
    height: max-content;
}

#heading h4 {
    /* color: hsl(239, 57%, 85%); */
    color: #0075FF;
    font-size: 20px;
    font-family: Poppins;
}

#skills {
    height: 40%;
    display: flex;
    flex-direction: row;
}

#col1 {
    width: 25%;
    height: 100%;
    display: flex;
    justify-content: center;
}

#col2 {
    width: 25%;
    height: 100%;
    display: flex;
    justify-content: center;
}
#col3 {
    width: 25%;
    height: 100%;
    display: flex;
    justify-content: center;
}

ul {
    height: 100%;
    width: 60%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

h5 {
    color: #64ffda;
    font-size: 18px;
    width: max-content;
}

li {
    color:hsl(239, 57%, 85%);
    margin-top: 7px;
}

@media (max-width: 992px) {
#txt-wrapper {
    min-height: max-content;
    height: 70vh;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

#aboutrow {
    width:100%;
    height: 50%;
    display: flex;
    flex-direction: row;
}

#txt-col {
    width: 50%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

#txt-col p {
    color: hsl(223, 19%, 93%);
    font-size: 16px;
    font-family: Poppins;
}

#img-col {
    width: 50%;
    /* height: 100%; */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

#myimg {
    height: 300px;
    width: 300px;
    box-shadow: #0a192f 10px -10px 0px -3px, #64ffda 10px -10px;
}

#skills {
    height: 40%;
    display: flex;
    flex-direction: row;
}

#col1 {
    width: 25%;
    height: 100%;
    display: flex;
    justify-content: center;
}

#col2 {
    width: 25%;
    height: 100%;
    display: flex;
    justify-content: center;
}
#col3 {
    width: 25%;
    height: 100%;
    display: flex;
    justify-content: center;
}

ul {
    height: 100%;
    width: 70%;
    /* text-align: center; */
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
}

@media (max-width: 992px) and (max-height: 500px)  {
#txt-wrapper {
    min-height: 180vh;
    height: max-content;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

#aboutrow {
    width:100%;
    height: 50%;
    display: flex;
    flex-direction: row;
}

#txt-col {
    width: 50%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

#txt-col p {
    color: hsl(223, 19%, 93%);
    font-size: 16px;
    font-family: Poppins;
}

#img-col {
    width: 50%;
    /* height: 100%; */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

#myimg {
    height: 300px;
    width: 300px;
    box-shadow: #0a192f 10px -10px 0px -3px, #64ffda 10px -10px;
}

#skills {
    height: 40%;
    display: flex;
    flex-direction: row;
}

#col1 {
    width: 25%;
    height: 100%;
    display: flex;
    justify-content: center;
}

#col2 {
    width: 25%;
    height: 100%;
    display: flex;
    justify-content: center;
}
#col3 {
    width: 25%;
    height: 100%;
    display: flex;
    justify-content: center;
}

ul {
    height: 100%;
    width: 70%;
    /* text-align: center; */
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

}

@media (max-width: 768px) {
#txt-wrapper {
    min-height: 170vh;
    height: max-content;
    width: 90%;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
}

#aboutrow {
    width:100%;
    height: 50%;
    display: flex;
    flex-direction: column;
}

#txt-col {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

#txt-col p {
    color: hsl(223, 19%, 93%);
    font-size: 16px;
    font-family: Poppins;
}

#img-col {
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

#myimg {
    height: 300px;
    width: 300px;
    box-shadow: #0a192f 10px -10px 0px -3px, #64ffda 10px -10px;
}

#skills {
    height: 40%;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
}

#heading {
    width: 30%;
    display: flex;
    justify-content: center;
    align-items: center;
    height: max-content;
    margin-bottom: 2rem;
}

#col1 {
    width: 100%;
    height: max-content;
    display: flex;
    justify-content: center;
    padding: 10px;
}

#col2 {
    width: 100%;
    height: max-content;
    display: flex;
    justify-content: center;
    padding: 10px;

}
#col3 {
    width: 100%;
    height: max-content;
    display: flex;
    justify-content: center;
    padding: 10px;

}

ul {
    height: 100%;
    width: 60%;
    display: flex;
    /* text-align: start; */
    flex-direction: column;
    align-items: flex-start;
}
}

@media screen and (max-height:720px) and (max-width:768px) {
#txt-wrapper {
    height: max-content;
    min-height: 250vh;
    width: 90%;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
}

#aboutrow {
    width:100%;
    height: 50%;
    display: flex;
    flex-direction: column;
}

#txt-col {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

#txt-col p {
    color: hsl(223, 19%, 93%);
    font-size: 16px;
    font-family: Poppins;
}

#img-col {
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

#myimg {
    height: 300px;
    width: 300px;
    box-shadow: #0a192f 10px -10px 0px -3px, #64ffda 10px -10px;
}

#skills {
    height: 40%;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
}

#col1 {
    width: 100%;
    height: max-content;
    display: flex;
    justify-content: center;
}

#col2 {
    width: 100%;
    height: max-content;
    display: flex;
    justify-content: center;
}
#col3 {
    width: 100%;
    height: max-content;
    display: flex;
    justify-content: center;
}

ul {
    height: 100%;
    width: 60%;
    display: flex;
    /* text-align: center; */
    flex-direction: column;
    align-items: flex-start;
}
}
@media screen and (max-height:400px) and (max-width:768px) {
#txt-wrapper {
    height: max-content;
    min-height: 350vh;
    width: 90%;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
}

#aboutrow {
    width:100%;
    height: 50%;
    display: flex;
    flex-direction: column;
}

#txt-col {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

#txt-col p {
    color: hsl(223, 19%, 93%);
    font-size: 16px;
    font-family: Poppins;
}

#img-col {
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

#myimg {
    height: 300px;
    width: 300px;
    box-shadow: #0a192f 10px -10px 0px -3px, #64ffda 10px -10px;
}

#skills {
    height: 40%;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
}

#col1 {
    width: 100%;
    height: max-content;
    display: flex;
    justify-content: center;
}

#col2 {
    width: 100%;
    height: max-content;
    display: flex;
    justify-content: center;
}
#col3 {
    width: 100%;
    height: max-content;
    display: flex;
    justify-content: center;
}

ul {
    height: 100%;
    width: 60%;
    display: flex;
    /* text-align: center; */
    flex-direction: column;
    align-items: flex-start;
}
}

</style>

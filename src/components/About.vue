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

            <div id="aboutrow" class="bg-success">
                <div id="txt-col" class="">
                <p>Hello, my name is Andrew Muchiri. I am a software engineer based in Nairobi, Kenya. I am 20 years old and currently a third year Computer Science student at Kenyatta University. I enjoy coming up with creative solutions to complex issues using various technologies. My love for writing code began when I started studying Computer Science and voila! I guess I found my passion. Besides creating beautiful and efficient web applications, I am an avid chess player and occassionally take part in chess tournaments where I have a blast! <br> I aspire to be a renowned 10x developer who prioritizes delivering softwares that exceed client expectations.</p>
                </div>

                <div id="img-col" class="bg-primary">
                    <img id="myimg" class="img-fluid rounded-3" src="../assets/myimg.jpg" alt="me">
                </div>
            </div>

            <div id="heading">
                <h4>My Skills</h4>
            </div>



            <div id="skills" class="mt-3">
                    <div id="col1" class="bg-primary">
                        <ul class="p-0" style="list-style:none" id="frontend">
                            <h5>Frontend Technologies</h5>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> HTML/CSS</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> JavaScript</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> React</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> Vuejs</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> WordPress</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> Bootstrap</li>
                        </ul>

                    </div>

                    <div id="col2" class="bg-success">
                        <ul class="p-0" style="list-style:none" id="backend">
                            <h5>Backend Technologies</h5>
                           <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> Nodejs</li>
                           <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> Ruby</li>
                           <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> Ruby on Rails</li>
                        </ul>

                    </div>

                    <div id="col3" class="bg-warning">
                        <ul class="p-0" style="list-style:none">
                            <h5>Databases, Tools and Platforms</h5>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> SQL</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> MongoDB</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> Render</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> Amazon Web Services</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> Google App Engine</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> Nginx</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> Postman</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> GIT</li>
                            <li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="#64ffda" class="bi bi-caret-right" viewBox="0 0 16 16">
                            <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                            </svg> GitHub</li>
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
    /* background: #0a192f; */
    background: aqua;
    min-height: max-content;
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
    background: pink;
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

#skills {
    height: 40%;
    display: flex;
    flex-direction: row;
}

#heading {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    height: max-content;
    background: red;
}

#heading h4 {
    color: #64ffda;
    font-size: 28px;
    font-family: Fira Code;
}

#col1 {
    width: 33.333%;
    height: 100%;
    display: flex;
    justify-content: center;
}

#col2 {
    width: 33.333%;
    height: 100%;
    display: flex;
    justify-content: center;
}
#col3 {
    width: 33.333%;
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
}

li {
    color:hsl(239, 57%, 85%);
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

@media (max-width: 992px) {
#txt-wrapper {
    height: 60%;
    width: 90%;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}

#txt-col {
    width: 50%;
    height: 80%;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
}
    #img-col {
    width: 50%;
    height: 800px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
}

#myimg {
    width: 300px;
    height: 300px;
}

#myimg:hover {
   scale: unset;
   transition: unset;
}
}

@media (max-width: 992px) and (max-height: 500px)  {
    #txt-wrapper {
    height: 80%;
    width: 90%;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}

#txt-col {
    width: 50%;
    height: 80%;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
}
    #img-col {
    width: 50%;
    height: 800px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
}

#myimg {
    width: 300px;
    height: 300px;
}

}

@media (max-width: 768px) {
#wrapper2 {
    background: #0a192f;
    min-height: 140vh;
    height: max-content;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: start;
}

#txt-wrapper {
    height: max-content;
    width: 90%;
    display: flex;
    flex-direction: column;
    justify-content: unset;
    align-items:unset;
}

#txt-col {
    width: 100%;
    height: 60%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding-top: 20px;
}

#img-col {
    padding-top: 30px;
    padding-bottom: 30px;
    width: 100%;
    height: 40%;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    align-items: center;
}

#myimg {
    width: 250px;
    height: 250px;
}
}

@media screen and (max-height:720px) and (max-width:768px) {
#wrapper2 {
    background: #0a192f;
    min-height: 190vh;
    height: max-content;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: start;
}

#txt-wrapper {
    height: max-content;
}

#img-col {
    justify-content: center;
}

#myimg {
    width: 250px;
    height: 250px;
}
}

</style>

<template>
    <div id="wrapper2">
        <h2>02. About Me</h2>
        <div id="txt-wrapper">
            <div id="txt-col" class="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus a ex reiciendis. Amet tenetur velit distinctio iste maxime voluptatibus, quis porro autem, voluptas, ab praesentium? Consectetur mollitia magnam accusantium quaerat sit, eligendi, optio cumque pariatur exercitationem labore dolores nemo eum, alias error libero perspiciatis excepturi maiores quas. Voluptates, earum quis?</p>
                <h4>My skills</h4>

                <div id="skills" class="mt-3">
                    <div id="col1">
                        <ul id="frontend">
                            <h5>Frontend Technologies</h5>
                            <li>HTML/CSS</li>
                            <li>JavaScript</li>
                            <li>React</li>
                            <li>Vuejs</li>
                            <li>Bootstrap</li>
                        </ul>

                        <ul id="backend">
                            <h5>Backend Technologies</h5>
                            <li>Nodejs</li>
                            <li>Ruby</li>
                            <li>Ruby on Rails</li>
                        </ul>

                    </div>

                    <div id="col-2">
                        <ul>
                            <h5>Databases, Tools and Platforms</h5>
                            <li>PostgreSQL</li>
                            <li>MongoDB</li>
                            <li>Render</li>
                            <li>Amazon Web Services</li>
                            <li>GIT</li>
                            <li>GitHub</li>
                        </ul>

                    </div>
                </div>

            </div>

            <div id="img-col" class="">
                <div id="myimg">
                    <img class="img-fluid rounded-3" src="../assets/myimg.jpg" alt="me">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped>

#wrapper2 {
    background: #0a192f;
    min-height: 100vh;
    height: max-content;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: start;
}

#wrapper2 h2 {
    width: 90%;
    text-align: start;
}

#wrapper2 h2 b {
    color: #64ffda;
}

#txt-wrapper {
    height: 100%;
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
    justify-content: center;
}

#txt-col p {
    color: hsl(239, 57%, 85%);
    font-size: 16px;
}

#txt-col h4 {
    color: #0075FF;
    font-size: 28px;
    font-family: Poppins;
}

li {
    color:hsl(211, 10%, 45%);

}
#skills {
    display: flex;
    flex-direction: row;
}

#col1 {
    display: flex;
    flex-direction: column;
    width: 50%;
}

#col2 {
    width: 50%;
}

h5 {
    color: #64ffda;
}

#img-col {
    width: 50%;
    height: 80%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

#myimg {
    width: 400px;
    height: 400px;
}

@media (max-width: 992px) {
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
    justify-content: start;
}
    #img-col {
    width: 50%;
    height: 80%;
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: center;
}

    #myimg {
    width: 300px;
    height: 300px;
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
    justify-content: start;
}
    #img-col {
    width: 50%;
    height: 80%;
    display: flex;
    flex-direction: column;
    justify-content: start;
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
    min-height: 130vh;
    height: max-content;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: start;
}

#txt-wrapper {
    height: 100%;
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
    width: 100%;
    height: 40%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

#myimg {
    width: 300px;
    height: 300px;
}
}

@media screen and (max-height:720px) and (max-width:768px) {
#wrapper2 {
    background: #0a192f;
    min-height: 180vh;
    height: max-content;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: start;
}

#myimg {
    width: 250px;
    height: 250px;
}
}

</style>

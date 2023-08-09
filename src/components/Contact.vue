<template>
    <div id="wrapper5">
        <h2 v-motion
            :initial="{
                opacity: 0,
                y:20
            }"
            :visibleOnce="{
                opacity: 1,
                y:0,
                transition: {
                delay:400,
                duration: 400,
                ease: 'easeInOut'
                },
            }"><span>05. </span>Contact</h2>
        <div id="content-wrapper" class="">
            <h1 v-motion
            :initial="{
                opacity: 0,
                y:20
            }"
            :visibleOnce="{
                opacity: 1,
                y:0,
                transition: {
                delay:600,
                duration: 400,
                ease: 'easeInOut'
                },
            }">Contact Me</h1>
            <p v-motion
            :initial="{
                opacity: 0,
                y:20
            }"
            :visibleOnce="{
                opacity: 1,
                y:0,
                transition: {
                delay:800,
                duration: 400,
                ease: 'easeInOut'
                },
            }">My inbox is always open. Whether you need some help on a project or you just want to say hi, send me a message and I will get back to you</p>
            <div v-motion
            :initial="{
                opacity: 0,
                y:20
            }"
            :visibleOnce="{
                opacity: 1,
                y:0,
                transition: {
                delay:1000,
                duration: 400,
                ease: 'easeInOut'
                },
            }" id="message" class="rounded-3 mt-5">
                <a href="mailto:kariukia225@gmail.com">Shoot me a message!</a>
            </div>
        </div>

        <div id="socials">
            <ul>
                <li v-motion
            :initial="{
                opacity: 0,
                y:20
            }"
            :visibleOnce="{
                opacity: 1,
                y:0,
                transition: {
                delay:400,
                duration: 400,
                ease: 'easeInOut'
                },
            }">
                    <a href="https://github.com/MuchiriAndrew">
                    <svg id="social-icons" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="hsl(239, 57%, 85%)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><title>GitHub</title><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                    </svg>
                    </a>
                </li>

                <li v-motion
            :initial="{
                opacity: 0,
                y:20
            }"
            :visibleOnce="{
                opacity: 1,
                y:0,
                transition: {
                delay:600,
                duration: 400,
                ease: 'easeInOut'
                },
            }">
                    <a href="https://twitter.com/A__Muchiri">
                    <svg id="social-icons" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="hsl(239, 57%, 85%)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><title>Twitter</title><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                    </a>
                </li>

                <li v-motion
            :initial="{
                opacity: 0,
                y:20
            }"
            :visibleOnce="{
                opacity: 1,
                y:0,
                transition: {
                delay:800,
                duration: 400,
                ease: 'easeInOut'
                },
            }">
                    <a href="https://www.linkedin.com/in/andrew-muchiri-70574a273/">
                    <svg id="social-icons" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 24 24" fill="none" stroke="hsl(239, 57%, 85%)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><title>LinkedIn</title><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle>
                    </svg>
                    </a>
                </li>
            </ul>

            <p v-motion
            :initial="{
                opacity: 0,
                y:20
            }"
            :visibleOnce="{
                opacity: 1,
                y:0,
                transition: {
                delay:1000,
                duration: 400,
                ease: 'easeInOut'
                },
            }" class="mt-5">kariukia225@gmail.com</p>

            <p v-motion
            :initial="{
                opacity: 0,
                y:20
            }"
            :visibleOnce="{
                opacity: 1,
                y:0,
                transition: {
                delay:1200,
                duration: 400,
                ease: 'easeInOut'
                },
            }">+254 786 638 466</p>

            <p v-motion
            :initial="{
                opacity: 0,
                y:20
            }"
            :visibleOnce="{
                opacity: 1,
                y:0,
                transition: {
                delay:1400,
                duration: 400,
                ease: 'easeInOut'
                },
            }">Designed and Created by Andrew Muchiri</p>

        </div>

    </div>
</template>

<script>
export default {

}
</script>

<style scoped>

#wrapper5 {
    background: #0a192f;
    min-height: 100vh;
    height: max-content;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    text-align: start;
}

#wrapper5 h2 {
    padding-bottom: 10vh;
    width: 90%;
    text-align: start;
    font-size: 26px;
    color: hsl(239, 57%, 85%);
}

#wrapper5 h2 span {
    color: #64ffda;
    font-size: 26px;
}

#content-wrapper {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    width: 90%;
    height: max-content;
    text-align: center;
}

#content-wrapper p {
    font-family: Poppins;
    font-size: 16px;
    width: 70%;
    color: hsl(223, 19%, 93%);
}
#content-wrapper h1 {
    font-family: Poppins;
    font-size: 65px;
    font-weight: 700;
    color:hsl(239, 57%, 85%)
}

#message {
    width: 180px;
    height: 50px;
    border: 1px solid #64ffda;
}
#message:hover {
    background: #64ffda;
    transition: 0.3s ease-in-out;
}

#message a {
    text-decoration: none;
    color: #64ffda;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 13px;
    font-family: Poppins;
    font-weight: 500;
}
#message a:hover {
    color: #0a192f;
}

#socials {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    width: 40%;
    height: 100px;
}

#socials ul {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    height: 20%;
    width: 100%;
    list-style: none;
}

svg {
    height: 100%;
}

#socials p {
    color:hsl(239, 57%, 85%) ;
}

#social-icons:hover{
    stroke:#65ffda;
    transition: 0.3s ease-in-out;
}

@media (max-width: 768px){
#content-wrapper h1 {
    font-size: 40px;
}

#content-wrapper p {
    font-size: 14px;
    width: 100%;
}

#socials {
    width: 90%;
}
}

</style>

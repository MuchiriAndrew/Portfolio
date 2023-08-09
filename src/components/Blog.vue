<template>
    <div id="wrapper4">
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
                duration: 500,
                ease: 'easeInOut'
                },
            }"><span>04. </span>Blog</h2>
        <div id="content-wrapper">
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
                duration: 500,
                ease: 'easeInOut'
                },
            }">My Blog Page</h1>
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
                duration: 500,
                ease: 'easeInOut'
                },
            }">Whether it's a technical article about something I've learnt and want to share or just any one of my thoughts, I post them all inside my blog. Feel free to check it out.</p>
            <a v-motion
            :initial="{
                opacity: 0,
                y:20
            }"
            :visibleOnce="{
                opacity: 1,
                y:0,
                transition: {
                delay:1000,
                duration: 500,
                ease: 'easeInOut'
                },
            }" href="#">Click Here</a>
        </div>

    </div>
</template>

<script>
export default {

}
</script>

<style scoped>
#wrapper4 {
    background: #0a192f;
    min-height: 80vh;
    height: max-content;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: start;
}

#wrapper4 h2 {
    padding-bottom: 10vh;
    width: 90%;
    text-align: start;
    font-size: 26px;
    color: hsl(239, 57%, 85%);
}

#wrapper4 h2 span {
    color: #64ffda;
    font-size: 26px;
}

#content-wrapper {
    padding-bottom: 10vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 90%;
    height: max-content;
    text-align: center;
}

#content-wrapper h1 {
    font-family: Poppins;
    font-size: 50px;
    color: #64ffda;
}
#content-wrapper p {
    font-family: Fira Code;
    font-size: 20px;
    color:hsl(223, 19%, 93%);
    width: 60%;
}
#content-wrapper a {
    color: #64ffda;
    text-decoration: none;
    font-size: 16px;
}
#content-wrapper a:hover {
    text-decoration: underline;
    transition: 3s ease-in-out;
}

@media (max-width: 768px){

#content-wrapper h1 {
    font-size: 40px;
}
#content-wrapper p {
    font-size: 15px;
    width: 100%;
}
#content-wrapper a {
    font-size: 14px;
}
}

</style>

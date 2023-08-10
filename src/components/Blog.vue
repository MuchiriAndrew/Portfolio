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

            <!-- change to router link once blog page is created -->
            <router-link to="/blog" id="blog-link" v-motion
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
            }" href="#">Go to blog page
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-rocket-takeoff" viewBox="0 0 16 16"><path d="M9.752 6.193c.599.6 1.73.437 2.528-.362.798-.799.96-1.932.362-2.531-.599-.6-1.73-.438-2.528.361-.798.8-.96 1.933-.362 2.532Z"/><path d="M15.811 3.312c-.363 1.534-1.334 3.626-3.64 6.218l-.24 2.408a2.56 2.56 0 0 1-.732 1.526L8.817 15.85a.51.51 0 0 1-.867-.434l.27-1.899c.04-.28-.013-.593-.131-.956a9.42 9.42 0 0 0-.249-.657l-.082-.202c-.815-.197-1.578-.662-2.191-1.277-.614-.615-1.079-1.379-1.275-2.195l-.203-.083a9.556 9.556 0 0 0-.655-.248c-.363-.119-.675-.172-.955-.132l-1.896.27A.51.51 0 0 1 .15 7.17l2.382-2.386c.41-.41.947-.67 1.524-.734h.006l2.4-.238C9.005 1.55 11.087.582 12.623.208c.89-.217 1.59-.232 2.08-.188.244.023.435.06.57.093.067.017.12.033.16.045.184.06.279.13.351.295l.029.073a3.475 3.475 0 0 1 .157.721c.055.485.051 1.178-.159 2.065Zm-4.828 7.475.04-.04-.107 1.081a1.536 1.536 0 0 1-.44.913l-1.298 1.3.054-.38c.072-.506-.034-.993-.172-1.418a8.548 8.548 0 0 0-.164-.45c.738-.065 1.462-.38 2.087-1.006ZM5.205 5c-.625.626-.94 1.351-1.004 2.09a8.497 8.497 0 0 0-.45-.164c-.424-.138-.91-.244-1.416-.172l-.38.054 1.3-1.3c.245-.246.566-.401.91-.44l1.08-.107-.04.039Zm9.406-3.961c-.38-.034-.967-.027-1.746.163-1.558.38-3.917 1.496-6.937 4.521-.62.62-.799 1.34-.687 2.051.107.676.483 1.362 1.048 1.928.564.565 1.25.941 1.924 1.049.71.112 1.429-.067 2.048-.688 3.079-3.083 4.192-5.444 4.556-6.987.183-.771.18-1.345.138-1.713a2.835 2.835 0 0 0-.045-.283 3.078 3.078 0 0 0-.3-.041Z"/><path d="M7.009 12.139a7.632 7.632 0 0 1-1.804-1.352A7.568 7.568 0 0 1 3.794 8.86c-1.102.992-1.965 5.054-1.839 5.18.125.126 3.936-.896 5.054-1.902Z"/>
            </svg>
            </router-link>
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
    text-align: flex-start;
}

#wrapper4 h2 {
    padding-bottom: 10vh;
    width: 90%;
    height: 20vh;
    text-align: flex-start;
    font-size: 26px;
    color: hsl(239, 57%, 85%);
    display: flex;
    align-items: flex-end;
}

#wrapper4 h2 span {
    color: #64ffda;
    font-size: 26px;
}

#content-wrapper {
    height: 70vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 90%;
    text-align: center;
}

#content-wrapper h1 {
    font-family: Fira Code;
    font-size: 50px;
    font-weight: 700;
    color: #64ffda;
}
#content-wrapper p {
    font-family: Poppins;
    font-size: 20px;
    color:hsl(223, 19%, 93%);
    width: 60%;
}
#blog-link {
    color: #64ffda;
    text-decoration: none;
    font-size: 16px;
    display: inline-block;
    position: relative;
}

#blog-link::after {
  content: '';
  position: absolute;
  width: 100%;
  transform: scaleX(0);
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: #65ffda;
  transform-origin: bottom right;
  transition: transform 0.3s ease-out;
}

#blog-link:hover::after {
    transform: scaleX(1);
    transform-origin: bottom left;
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

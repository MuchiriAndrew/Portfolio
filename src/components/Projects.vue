<template>
    <div id="wrapper3">
        <h2 v-motion
            :initial="{
                opacity: 0,
            }"
            :visibleOnce="{
                opacity: 1,
                transition: {
                delay:400,
                duration: 500,
                ease: 'easeInOut'
                },
            }" class="mb-5"><span>03.</span> Featured Projects</h2>
        <div id="content-wrapper" class="">
            <div class="row m-0">

                <div v-motion
            :initial="{
                opacity: 0,
                y:50
            }"
            :visibleOnce="{
                opacity: 1,
                y:0,
                transition: {
                delay:200,
                duration: 500,
                ease: 'easeInOut'
                },
            }" id="column" class="col-12 col-lg-4 p-4">
            <div>
                <div id="image-div" class="rounded-3 ">
                        <img class="pb-5 pt-5 img-fluid rounded-3" src="../assets/mpesa_woocommerce.png" alt="portfolio">
                    </div>
                        <h3>MPESA WooCommerce Plugin</h3>
                        <p>
                            This is a custom WooCommerce plugin that allows users to pay for their orders using MPESA. The plugin uses the MPESA API to initiate the payment and the WooCommerce API to update the order status once the payment is complete
                        </p>
            </div>


                    <div id="links">
                        <div class="rounded-3" id="btns"><a target="_blank" href="https://mpesa-demo-wordpress.projects.muchiriandrew.tech/shop">Live Demo</a></div>
                        <!-- <div class="rounded-3" id="btns"><a target="_blank" href="https://github.com/MuchiriAndrew/Portfolio">GitHub Repo</a></div> -->
                    </div>
                </div>

                <div v-motion
            :initial="{
                opacity: 0,
                y:50
            }"
            :visibleOnce="{
                opacity: 1,
                y:0,
                transition: {
                delay:300,
                duration: 500,
                ease: 'easeInOut'
                },
            }" id="column" class="col-12 col-lg-4 p-4 mb-4">
                    <div>
                        <div id="image-div" class="rounded-3">
                                <img class="img-fluid rounded-3" src="../assets/comments.jpg" alt="portfolio">
                            </div>
                            <h3>Mini Social Forum</h3>
                            <p>
                                This full-stack project was done using Vuejs and laravel using inertiajs for the frontend. It is a mini social forum where users can create posts, comment on posts and like posts. It also has a user profile page where users can update their profile information
                            </p>

                    </div>

                    <div id="links">
                        <div class="rounded-3" id="btns"><a target="_blank" href="https://interactive-comments.projects.muchiriandrew.tech/">Live Demo</a></div>
                        <div class="rounded-3" id="btns"><a target="_blank" href="https://github.com/MuchiriAndrew/mini-sm-forum">GitHub Repo</a></div>
                    </div>
                </div>

                <div v-motion
            :initial="{
                opacity: 0,
                y:50
            }"
            :visibleOnce="{
                opacity: 1,
                y:0,
                transition: {
                delay:200,
                duration: 500,
                ease: 'easeInOut'
                },
            }" id="column" class="col-12 col-lg-4 p-4">
                    <div>
                        <div id="image-div" class="rounded-3">
                                <img class="img-fluid rounded-3" src="../assets/ip-address.jpg" alt="portfolio">
                            </div>
                            <h3>IP Address Tracker</h3>
                            <p>This Web App uses the Geolocation API by IPify which displays data on an IP Address given to it and the React Leaflet API to show the location of the IP Address on the World Map. The whole project was done using React and Bootstrap</p>
                    </div>

                    <div id="links">
                        <div class="rounded-3" id="btns"><a target="_blank" href="https://ip-address-tracker-j5c7.onrender.com/">Live Demo</a></div>
                        <div class="rounded-3" id="btns"><a target="_blank" href="https://github.com/MuchiriAndrew/Front-End-Projects/tree/master/IP%20address%20tracker">GitHub Repo</a></div>
                    </div>
                </div>

                
            </div>

            <div class="row m-0 ">


                <div v-motion
            :initial="{
                opacity: 0,
                y:50
            }"
            :visibleOnce="{
                opacity: 1,
                y:0,
                transition: {
                delay:300,
                duration: 500,
                ease: 'easeInOut'
                },
            }" id="column" class="col-12 col-lg-4 p-4">
                    <div>
                            <div id="image-div" class="rounded-3">
                                <img class="img-fluid rounded-3" src="../assets/space.jpg" alt="portfolio">
                            </div>
                            <h3>Space Tourism Website</h3>
                            <p>A multi-page space tourism website done using React, Bootstrap and Framer Motion for the subtle animations. A purely frontend project that challenged my skills in React Router and State Management.</p>
                    </div>

                    <div id="links">
                        <div class="rounded-3" id="btns"><a target="_blank" href="https://space-tourism-lxuk.onrender.com/">Live Demo</a></div>
                        <div class="rounded-3" id="btns"><a target="_blank" href="https://github.com/MuchiriAndrew/Space-Tourism">GitHub Repo</a></div>
                    </div>
                </div>

                <div v-motion
            :initial="{
                opacity: 0,
                y:50
            }"
            :visibleOnce="{
                opacity: 1,
                y:0,
                transition: {
                delay:400,
                duration: 500,
                ease: 'easeInOut'
                },
            }" id="column" class="col-12 col-lg-4 p-4">
                    <div>
                            <div id="image-div" class="rounded-3">
                                <img class="img-fluid rounded-3" src="../assets/ecommerce.jpg" alt="portfolio">
                            </div>
                            <h3>E-Commerce Product Page</h3>
                            <p>Another noteworthy frontend project done using Vuejs and Bootstrap. Challenged me to work with cart functionality, using the local storage function in JavaScript and Bootstrap's Modal for the lightbox gallery</p>
                    </div>

                    <div id="links">
                        <div class="rounded-3" id="btns"><a target="_blank" href="https://product-page-an5n.onrender.com">Live Demo</a></div>
                        <div class="rounded-3" id="btns"><a target="_blank" href="https://github.com/MuchiriAndrew/Front-End-Projects/tree/master/e-commerce%20product%20page">GitHub Repo</a></div>
                    </div>
                </div>

                <div v-motion
            :initial="{
                opacity: 0,
                y:50
            }"
            :visibleOnce="{
                opacity: 1,
                y:0,
                transition: {
                delay:400,
                duration: 500,
                ease: 'easeInOut'
                },
            }" id="column" class="col-12 col-lg-4 p-4">
                    <div>
                        <div id="image-div" class="rounded-3">
                                <img class="img-fluid rounded-3" src="../assets/countries.jpg" alt="portfolio">
                            </div>
                            <h3>REST Countries API</h3>
                            <p>This Web app uses the REST countries 3rd party API which allows the user to search for any country by name/region and it then displays data on the country. It also uses the leaflet API which shows the country's position on the World Map. The whole project was done using React and Bootstrap</p>
                    </div>

                    <div id="links">
                        <div class="rounded-3" id="btns"><a target="_blank" href="https://rest-countries-api-project.onrender.com/">Live Demo</a></div>
                        <div class="rounded-3" id="btns"><a target="_blank" href="https://github.com/MuchiriAndrew/Front-End-Projects/tree/master/REST%20countries%20API%20project">GitHub Repo</a></div>
                    </div>
                </div>
            </div>
            <div class="row m-0">
                <div v-motion
            :initial="{
                opacity: 0,
                y:50
            }"
            :visibleOnce="{
                opacity: 1,
                y:0,
                transition: {
                delay:200,
                duration: 500,
                ease: 'easeInOut'
                },
            }" id="column" class="col-12 col-lg-4 p-4">
            <div>
                <div id="image-div" class="rounded-3 ">
                        <img class="img-fluid rounded-3" src="../assets/portfolio.jpg" alt="portfolio">
                    </div>
                        <h3>Portfolio Website</h3>
                        <p>My personal portfolio website made using Vuejs for the frontend and Ruby on Rails for the backend on the blog page. Also used Bootstrap and the vueuse/motion library for the on scroll animations</p>
            </div>


                    <div id="links">
                        <div class="rounded-3" id="btns"><a target="_blank" href="#">Live Demo</a></div>
                        <div class="rounded-3" id="btns"><a target="_blank" href="https://github.com/MuchiriAndrew/Portfolio">GitHub Repo</a></div>
                    </div>
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
#wrapper3 {
    background: #0a192f;
    min-height: 200vh;
    height: max-content;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: start;
}

#content-wrapper {
    width: 90%;
    height: max-content;
}

.row {
    width: 100%;
}

#wrapper3 h2 {
    width: 90%;
    text-align: start;
    font-size: 26px;
    color: hsl(239, 57%, 85%);
}
#wrapper3 h2 span {
    color: #64ffda;
    font-size: 26px;
}

#wrapper3 h2 b {
    color: #64ffda;
}

#column {
    min-height: 500px;
    height: max-content;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    /* box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; */
}

#column h3 {
    font-family: Poppins;
    font-size: 24px;
    color: hsl(239, 57%, 85%);
}

#column p {
    font-family: Poppins;
    font-size: 12px;
    color: hsl(223, 19%, 93%);
}

#image-div {
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
     margin-bottom: 10px;
}
/* #image-div:hover {
    scale: 1.05;
    transition: 0.8s ease-in-out;
} */
#links {
    display: flex;
    justify-content: space-around;
    flex-direction: row;
}

#btns {
    width: 100px;
    height: 50px;
    border: 1px solid #64ffda;
}
#btns a {
    text-decoration: none;
    color: #64ffda;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

#btns:hover {
    background: #64ffda;
    transition: 0.3s ease-in-out;
    cursor: pointer;
}

#btns a:hover{
    color: #0a192f;
    transition: 0.3s ease-in-out;
}

#collab {
    font-size: 12px;
    font-family: Poppins;
    text-decoration: none;
    color: #64ffda;
    /* display: inline-block; */
    position: relative;
}

#collab::after {
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

#collab:hover::after {
    transform: scaleX(1);
    transform-origin: bottom left;
}

@media (max-width: 992px) and (min-width: 768px) {
    #column {
    min-height: 650px;
    height: max-content;
    display: flex;
    flex-direction: column;
}
#image-div:hover {
    scale: unset;
    transition: unset;
}
}

@media (max-width: 768px){
    #column {
    min-height: 500px;
    height: max-content;
    display: flex;
    flex-direction: column;
}

#image-div:hover {
    scale: unset;
    transition: unset;
}

#links {
    display: flex;
    justify-content: space-around;
    flex-direction: row;
    flex-grow: 1;
    align-items: center;
}
}

</style>

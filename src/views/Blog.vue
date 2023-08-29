<template>
<ViewBlog v-if= "isSelected" :currentItem = "currentItem" :isSelected = "isSelected"/>

  <div v-else id="wrapper6">
    <h1 class="mt-3">Blogs</h1>

    <div id="loading" v-if="loading">Loading...</div>

    <div v-else id="content-wrapper" class="">
      <ul id="navbar" class="nav">
        <li class="nav-item m-0">
          <a id="links-1" class="nav-link" aria-current="page" href="#" @click = "handleTechnical">Technical Articles</a>
        </li>
        <li class="nav-item m-0">
          <a id="links-2" class="nav-link" href="#" @click = "handleOthers">Others</a>
        </li>
      </ul>

      <div id="blog-list" v-for="item in renderedData" :key="item">
        <a style="text-decoration:none" @click = "handleClicked(item)">
          <div id="blog-item" class="rounded-3 p-4 mt-3">
          <h3>{{item.title}}</h3>
          <p>{{item.content.substr(0, 100) + '...'}}</p>
          <span>{{item.source}}</span>
          <span>{{item.timestamp}}</span>
        </div>
        </a>
      </div>

      <p class="pt-5" id="paragraph"><a id="back" href="/">Go back to Home Page <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-rocket-takeoff" viewBox="0 0 16 16"><path d="M9.752 6.193c.599.6 1.73.437 2.528-.362.798-.799.96-1.932.362-2.531-.599-.6-1.73-.438-2.528.361-.798.8-.96 1.933-.362 2.532Z"/><path d="M15.811 3.312c-.363 1.534-1.334 3.626-3.64 6.218l-.24 2.408a2.56 2.56 0 0 1-.732 1.526L8.817 15.85a.51.51 0 0 1-.867-.434l.27-1.899c.04-.28-.013-.593-.131-.956a9.42 9.42 0 0 0-.249-.657l-.082-.202c-.815-.197-1.578-.662-2.191-1.277-.614-.615-1.079-1.379-1.275-2.195l-.203-.083a9.556 9.556 0 0 0-.655-.248c-.363-.119-.675-.172-.955-.132l-1.896.27A.51.51 0 0 1 .15 7.17l2.382-2.386c.41-.41.947-.67 1.524-.734h.006l2.4-.238C9.005 1.55 11.087.582 12.623.208c.89-.217 1.59-.232 2.08-.188.244.023.435.06.57.093.067.017.12.033.16.045.184.06.279.13.351.295l.029.073a3.475 3.475 0 0 1 .157.721c.055.485.051 1.178-.159 2.065Zm-4.828 7.475.04-.04-.107 1.081a1.536 1.536 0 0 1-.44.913l-1.298 1.3.054-.38c.072-.506-.034-.993-.172-1.418a8.548 8.548 0 0 0-.164-.45c.738-.065 1.462-.38 2.087-1.006ZM5.205 5c-.625.626-.94 1.351-1.004 2.09a8.497 8.497 0 0 0-.45-.164c-.424-.138-.91-.244-1.416-.172l-.38.054 1.3-1.3c.245-.246.566-.401.91-.44l1.08-.107-.04.039Zm9.406-3.961c-.38-.034-.967-.027-1.746.163-1.558.38-3.917 1.496-6.937 4.521-.62.62-.799 1.34-.687 2.051.107.676.483 1.362 1.048 1.928.564.565 1.25.941 1.924 1.049.71.112 1.429-.067 2.048-.688 3.079-3.083 4.192-5.444 4.556-6.987.183-.771.18-1.345.138-1.713a2.835 2.835 0 0 0-.045-.283 3.078 3.078 0 0 0-.3-.041Z"/><path d="M7.009 12.139a7.632 7.632 0 0 1-1.804-1.352A7.568 7.568 0 0 1 3.794 8.86c-1.102.992-1.965 5.054-1.839 5.18.125.126 3.936-.896 5.054-1.902Z"/>
            </svg></a></p>
    </div>


  </div>
</template>

<script>

import ViewBlog from "../components/ViewBlog.vue"

export default {
  components:{ViewBlog},
  data() {
    return {
      isArticle: true,
      background1: "#233554",
      background2: "none",
      color1:"#65ffda",
      color2:"hsl(239, 57%, 85%)",
      articleData: [],
      otherData:[],
      renderedData:[],
      loading:true,
      isSelected:false,
      currentItem:[]
    }
  },

  methods: {
    handleTechnical() {
      this.isArticle = true
      this.background1 = "#233554"
      this.background2 = "none"
      this.color1 = "#65ffda"
      this.color2 = "hsl(239, 57%, 85%)"
      this.renderedData = this.articleData
    },
    handleOthers() {
      this.isArticle = false
      this.background2 = "#233554"
      this.background1 = "none"
      this.color2 = "#65ffda"
      this.color1 = "hsl(239, 57%, 85%)"
      this.renderedData = this.otherData
    },

    handleClicked(item) {
      this.isSelected = true
      this.currentItem = item
    },

    async fetchArticles() {
      const response = await fetch("https://blog.andrewmuchiri.com/articles");
      this.articleData = await response.json();
      localStorage.setItem('articleData', JSON.stringify(this.articleData))
    },

    async fetchOthers() {
      const response = await fetch("https://blog.andrewmuchiri.com/others");
      this.otherData = await response.json();
      localStorage.setItem('otherData', JSON.stringify(this.otherData))
    },

    async loadData() {
      await this.fetchArticles();
      await this.fetchOthers();
    },
  },

  async mounted() {
    try {
      await this.loadData();
      this.loading = false;
      this.renderedData = this.articleData
    } catch (error) {
      console.error("Error loading data:", error);
    }
  },

}
</script>

<style scoped>

#wrapper6 {
    background: #0a192f;
    min-height: 100vh;
    height: max-content;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

h1 {
  font-family: Poppins;
  font-size: 40px;
  color: hsl(223, 19%, 93%);
}

#wrapper6 h2 {
    font-family: Fira Code;
    color: #65ffda;
}

#content-wrapper {
  min-height: 100vh;
  height: max-content;
  width: 70%;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  text-align: start;
}

#navbar {
  width: 400px;
  height: 100px;
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  align-items: center;
}

#blog-list {
  height: max-content;
  width: 100%;
}

#blog-item {
  width: 100%;
  background: #233554;
  display: flex;
  flex-direction: column;
}
#blog-item:hover {
  scale: 1.03;
  transition: 0.3s ease-in-out;
  cursor: pointer;
}

#blog-item h3 {
  font-family: Poppins;
  color: #64ffda;

}
#blog-item p {
  color: hsl(223, 19%, 93%);
  font-family: Poppins;
}
#blog-item span {
  color: hsl(239, 57%, 85%);
}

#links-1 {
  color: v-bind("color1");
  background: v-bind("background1");
  display: flex;
  justify-content: center;
  align-items: center;
  width: max-content;
}

#links-1 {
  border-radius: 15px;
}

#links-1:hover {
  background: #233554;
}

#links-2 {
  color: v-bind("color2");
  background: v-bind("background2");
  display: flex;
  justify-content: center;
  align-items: center;
  width: max-content;
}

#links-2 {
  border-radius: 15px;
}

#links-2:hover {
  background: #233554;
}

#loading {
  color: #64ffda;
  font-size: 16px;
}

#paragraph {
    width: 100%;
    text-align: center;
}

#back {
    text-decoration: none;
    color: #65ffda;
    width: max-content;
    text-align: center;
    font-size: 16px;
    display: inline-block;
    position: relative;
}

#back::after {
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

#back:hover::after {
    transform: scaleX(1);
    transform-origin: bottom left;
}

@media (max-width: 768px) {
  #content-wrapper {
  min-height: 100vh;
  height: max-content;
  width: 90%;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  text-align: start;
  }

#navbar {
  width: 100%;
  height: 50px;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  text-align: center;
}

.nav-item {
  width: 50%;
  display: flex;
}

#links {
  color: hsl(239, 57%, 85%);
  display: flex;
  justify-content: center;
  align-items: center;
  width: max-content;
}

#links:hover {
  color:  #65ffda;
  border: none;
}

#blog-item {
  width: 100%;
}
}


</style>

<template>
  <div id="wrapper6">
    <h1 class="mt-3">Blogs</h1>

    <!-- <div v-if="loading">Loading...</div> -->

    <div id="content-wrapper" class="">
      <ul id="navbar" class="nav">
        <li class="nav-item m-0">
          <a id="links-1" class="nav-link" aria-current="page" href="#" @click = "handleTechnical">Technical Articles</a>
        </li>
        <li class="nav-item m-0">
          <a id="links-2" class="nav-link" href="#" @click = "handleOthers">Others</a>
        </li>
      </ul>

      <div id="blog-item" class="rounded-3 p-4 mt-3">
        <h3>This is the blog title</h3>
        <p>Blog Snippet : Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum rem repellat suscipit maiores iusto nisi ut repellendus cupiditate ipsam itaque?</p>
        <span>Written By Muchiri</span>
        <span>9.21 AM</span>
      </div>
      <div id="blog-item" class="rounded-3 p-4 mt-3">
        <h3>This is the blog title</h3>
        <p>Blog Snippet : Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum rem repellat suscipit maiores iusto nisi ut repellendus cupiditate ipsam itaque?</p>
        <span>Written By Muchiri</span>
        <span>9.21 AM</span>
      </div>
    </div>


  </div>
</template>

<script>
import axios from 'axios';

export default {
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
      loading:true
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

    // async fetchArticles() {
    //   fetch('https://blog-backend-eh5g.onrender.com/articles', {
    //     method: 'GET',
    //     headers: { 'Content-Type': 'application/json' },
    //     body: JSON.stringify(newComment),
    // })
    // .catch(err => console.log(err))
    // console.log("push reached")
    // },

    // async fetchOthers() {
    //   const response = await fetch("https://blog-backend-eh5g.onrender.com/others");
    //   this.otherData = await response.json();
    //   console.log(this.otherData);
    // },

    // async loadData() {
    //   await this.fetchArticles();
    //   await this.fetchOthers();
    // },
  },

  async mounted() {
    // try {
    //  const response = await fetch("https://blog-backend-eh5g.onrender.com/articles");
    //   this.articleData = await response.json();
    // } catch (error) {
    //   console.error("Error loading data:", error);
    // }

    // try {
    //     await axios.get('https://blog-backend-eh5g.onrender.com/articles')
    //     .then(response => {
    //       console.log(response);
    //     })
    //   } catch (error) {
    //     console.log('Error adding user', error);
    // }

    const getArticles = async() => {
      const response = await fetch("https://blog-backend-eh5g.onrender.com/articles")
      const data = await response.json()
      return data
    }
    getArticles()
    .then(data => console.log('data found', data))
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
  font-family: Fira Code;
  color: #64ffda;

}
#blog-item p {
  color: hsl(223, 19%, 93%);

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

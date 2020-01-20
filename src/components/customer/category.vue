
<template>
  <div>
  <!--Main layout-->
  <main>
    <div class="container">

      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">

        <!-- Navbar brand -->
        <span class="navbar-brand">Categories:</span>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

          <!-- Links -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" v-on:click="side('categAll')">All
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" v-on:click="side('categCorp')">Corporate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" v-on:click="side('categNative')">Native</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" v-on:click="side('categSuite')">Suite</a>
            </li>

          </ul>
          <!-- Links -->

          <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
          </form>
        </div>
        <!-- Collapsible content -->

      </nav>
      <!--/.Navbar-->

      <div>
          <div v-if="categoAll">
            <CategAll></CategAll>
          </div>
           <div v-if="categoCorp">
              <CategCorp></CategCorp>
          </div>
          <div v-if="categoNative">
              <CategNative></CategNative>
          </div>
           <div v-if="categoSuite">
              <CategSuite></CategSuite>
          </div>
      </div>

    </div>
  </main>
  <!--Main layout-->

  <!-- SCRIPTS -->
  <!-- JQuery -->

  </div>
</template>

<script>
        import CategAll from './categAll.vue'
        import CategCorp from './categCorp.vue'
        import CategNative from './categNative.vue'
        import CategSuite from './categSuite.vue' 

export default {
  name: 'Category',
   props: {
    categAll: Boolean,
    categCorp: Boolean,
    categNative: Boolean,
    categSuite: Boolean

    },
   data() {
        return {
        categoAll: true,
        categoCorp: false,
        categoNative: false,
        categoSuite: false
        }
          },
        methods: {
        sendMessage () {
              window.alert('Send a message...')
            },
            doACall () {
              window.alert('Calling someone...')
            },
        side(show)
          {
            if(show == 'categAll'){this.categoAll=true} else{this.categoAll=false}
            if(show == 'categCorp'){this.categoCorp=true} else{this.categoCorp=false}
            if(show == 'categNative'){this.categoNative=true} else{this.categoNative=false}
            if(show == 'categSuite'){this.categoSuite=true} else{this.categoSuite=false}
          }
        },
  components: {
      CategAll,
      CategCorp,
      CategNative,
      CategSuite
  }
}
</script>

<style>
    .md-card {

    width: 270px;
    margin: 4px;
    display: inline-block;
    vertical-align: top;
  }
  .md-card-area .photo img{
    width: 100%;
    height: 200px;
  }

  
.pricef{
  font-size: 20px;
}
</style>

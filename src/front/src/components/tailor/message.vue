<template>
  <div class="page-container">
    <md-app>
      <md-app-toolbar class="md-primary" md-elevation="0">
        <md-button class="md-icon-button" @click="toggleMenu" v-if="!menuVisible">
          <md-icon>menu</md-icon>
        </md-button>
          <md-avatar>
            <img src="https://placeimg.com/40/40/people/5" alt="People">
          </md-avatar>

          <span class="md-list-item-text">Abbey Christansen</span>

          <md-menu>
      <md-button class="md-icon-button" md-menu-trigger>
        <md-icon>phone</md-icon>
      </md-button>
    </md-menu>

    <md-menu md-size="big" md-direction="bottom-end">
      <md-button class="md-icon-button" md-menu-trigger>
        <md-icon>attachment</md-icon>
      </md-button>

      <md-menu-content>
        <md-menu-item>
          <span>Gallary</span>
          <md-icon>attachment</md-icon>
        </md-menu-item>
        <md-menu-item>
          <span>Image</span>
          <md-icon>attachment</md-icon>
        </md-menu-item>
        <md-menu-item>
          <span>Video</span>
          <md-icon>attachment</md-icon>
        </md-menu-item>
        <md-menu-item>
          <span>File</span>
          <md-icon>attachment</md-icon>
        </md-menu-item>
        <md-menu-item>
          <span>Audio</span>
          <md-icon>attachment</md-icon>
        </md-menu-item>
      </md-menu-content>
    </md-menu>
    <md-menu md-size="big" md-direction="bottom-end">
      <md-button class="md-icon-button" md-menu-trigger>
        <md-icon>menu</md-icon>
      </md-button>

      <md-menu-content>
        <md-menu-item>
          <span>View contact</span>
        </md-menu-item>
        <md-menu-item>
          <span>Media</span>
        </md-menu-item>
        <md-menu-item>
          <span>Serch</span>
        </md-menu-item>
        <md-menu-item>
          <span>Mute notification</span>
        </md-menu-item>
        <md-menu-item>
          <span>Block</span>
        </md-menu-item>
        <md-menu-item>
          <span>Clear chat</span>
        </md-menu-item>
      </md-menu-content>
    </md-menu>

      </md-app-toolbar>

      <md-app-drawer :md-active.sync="menuVisible" md-persistent="mini">
        <md-toolbar class="md-transparent" md-elevation="0">
          <span>Navigation</span>

          <div class="md-toolbar-section-end">
            <md-button class="md-icon-button md-dense" @click="toggleMenu">
              <md-icon>keyboard_arrow_left</md-icon>
            </md-button>
          </div>
        </md-toolbar>

        <md-list>
        <md-list-item>
          <md-icon>move_to_inbox</md-icon>
          <span class="md-list-item-text">Inbox</span>
        </md-list-item>

        <md-list-item>
          <md-icon>send</md-icon>
          <span class="md-list-item-text">Sent Mail</span>
        </md-list-item>

        <md-list-item>
          <md-icon>delete</md-icon>
          <span class="md-list-item-text">Trash</span>
        </md-list-item>

        <md-list-item>
          <md-icon>error</md-icon>
          <span class="md-list-item-text">Spam</span>
        </md-list-item>
      </md-list>
      <Inbox></Inbox>
      </md-app-drawer>

      <md-app-content>
        <div class="chatlogs">
          <div md-elevation="1" class="toolb">
          <h2 class="md-body-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quibusdam, non molestias et! Earum magnam, similique, quo recusandae placeat dicta asperiores modi sint ea.</h2>
          </div>
          <div md-elevation="1" class="toolr">
            <h2 class="md-body-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quibusdam, non molestias et! Earum magnam, similique, quo recusandae placeat dicta asperiores modi sint ea.</h2>
          </div>
          <div md-elevation="1" class="toolb">
            <h2 class="md-body-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quibusdam, non molestias et! Earum magnam, similique, quo recusandae placeat dicta asperiores modi sint ea.dolor sit amet, consectetur adipisicing elit. Error quibusdam, non molestias et! Earum magnam, similique, quo recusandae placeat dicta asperiores modi sint ea.</h2>
          </div>
          <div md-elevation="1" class="toolb">
            <h2 class="md-body-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quibusdam, non molestias et! Earum magnam, similique, quo recusandae placeat dicta asperiores modi sint ea.</h2>
          </div>
           <div md-elevation="1" class="toolr">
            <h2 class="md-body-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quibusdam, non molestias et! Earum magnam, similique, quo recusanda Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quibusdam, non molestias et! Earum magnam, similique, quo recusanda Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quibusdam, non molestias et! Earum magnam, similique, quo recusandae placeat dicta asperiores modi sint ea.</h2>
          </div>
           <div md-elevation="1" class="toolr">
            <h2 class="md-body-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quibusdam, non molestias et! Earum magnam, similique, quo recusandae placeat dicta asperiores modi sint ea.</h2>
          </div>          
        </div><br>
        <md-divider class="md-inset"></md-divider>
      <div class="chat-form">
                  <textarea></textarea>
                  <md-icon>send</md-icon>
                </div>
      </md-app-content>
    </md-app>
  </div>
</template>

<script>
  import Inbox from './inbox.vue'
  export default {
    name: 'Message',
    data: () => ({
      menuVisible: false
    }),
    methods: {
      toggleMenu () {
        this.menuVisible = !this.menuVisible
      }
    },
    components:{
      Inbox
    }
  }
</script>

<style >
  .md-app {
    min-height: 350px;
    border: 1px solid rgba(#000, .12);
  }

   // Demo purposes only
  .md-drawer {
    width: 230px;
    max-width: calc(100vw - 125px);
  }

  .chatlogs{
    padding: 10px;
    width: 100%;
    height: 500px;
    overflow-x: hidden;
    overflow-y: scroll;
}

  .chatlogs::-webkit-scrollbar{
    width: 10px;
}

.chatlogs::-webkit-scrollbar-thumb {
    border-radius: 5px;
    background: rgba(0,0,0,.1); 
}


.chat-form {
    margin-top:  20px;
    display: flex;
    align-items: flex-start;

}

.chat-form textarea  {
    background: #fbfbfb;
    width: 75%;
    height: 40px;
    border: 2px solid #eeee;
    border-radius:20px;
    resize: none;
    padding: 10px;
    font-size: 16px;
    color: #333 ;
    margin-left: 10%;

}
.chat-form textarea:focus {
    background: #fff;
}

.chat-form textarea::-webkit-scrollbar{
    width: 10px;
}
.chat-form textarea::-webkit-scrollbar-thumb {
    border-radius: 5px;
    background: rgba(0,0,0,.1); 
}

.chat-form button {
    background:#2AB967; 
    padding: 5px;
    font-size: 25px;
    color: #fff;
    border: none;
    margin: 0 10px;
    border-radius: 3px;
    box-shadow: 0 3px 0 #2AB967;
    cursor: pointer;
}

.chat-form button:hover {
    background: #13c8d9;
}



  .toolb {
    margin-top: 16px;
    border-radius: 5px;
    max-width: 80%;
    border-width: 2;
    background-color: rgba(0, 0, 0, 0.075);
    float: left;

  }

  .toolb h2{
    padding: 5px;
    padding-left: 12px; 
    font-size: 16px; 
  }
  .toolr {
    margin-top: 16px;
    border-radius: 5px;
    max-width: 80%;
    border-width: 2;
    flot: right;
    background-color: #B0C9F7;
    float: right;

  }

  .toolr h2{
    padding: 5px;
    padding-left: 12px; 
    font-size: 16px; 
  }
</style>
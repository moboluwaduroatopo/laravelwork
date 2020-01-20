<script>
    import Vue from 'vue';
    const EventBus = new Vue()
    export default EventBus
</script>
// import axios from 'axios'
import Store from './Store'
    export default {
        data (){
    return{
      email:'',
      password:'',
         loginError: false,
    }
  },
  methods: {
    login () {
       this.loginError = false;
      axios.post("http://localhost/laravel/larasofine/backend/public/api/login",{
        email:this.email,
        password:this.password
      })
      .then((res)=>{
        //console.log(response)
         store.commit('loginUser')
        localStorage.setItem('usertoken',res.data.access_token)
        // this.email=''
        // this.password=''
         this.$router.push({ name: 'profile' })
        // router.push({name: 'profile'})
      })
      .catch(error => {
                    this.loginError = true
                });
    }
  }
    }
//
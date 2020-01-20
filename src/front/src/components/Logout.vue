
<script>
//  import Store from './Store'
    export default {
        mounted () {
            localStorage.removeItem('usertoken')
            store.commit('logoutUser')
            this.$router.push({ name: 'signin' })
        }
    }
</script>
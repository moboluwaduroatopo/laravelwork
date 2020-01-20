import vue from 'vue'
import Router from 'vue-router'
import signIn from './components/sign-in.vue'
import signUp from './components/sign-up.vue'
// import navbar from './components/navbar.vue'
// import EventBus from './components/EventBus.vue'
import tailorSignup from './components/tailor-sign-up.vue'
import Contact from './components/contact.vue'
import customerDashboard from './components/customer/customer-dashboard'
import tailorDashboard from './components/tailor/tailor-dashboard'

// import Home from './components/home.vue'
// import Sign_In from './components/signIn.vue'
// import customerDashboard from './components/customer/dashBoard.vue'
import MySupport from './components/tailor/mySupport.vue'
import MyService from './components/tailor/myService.vue'
import Dashboard from '@/components/tailor/Dashboard'
import Profile from '@/components/tailor/Profile'
import Tables from '@/components/tailor/Tables'
// import Maps from '@/components/tailor/Maps'
// import BadGateway from '@/components/tailor/BadGateway'
// import GuestNav from './components/guestNav.vue'
// import HomeDashboard from './components/customer/homeDashboard.vue'
import ProductDashboard from './components/customer/productDashboard.vue'
import ProductPage from './components/customer/product-page.vue'
import Category from './components/customer/category.vue'
import Logout from './components/Logout'
vue.use(Router)

export default new Router({
routes: [
 {
        path: '/',
        redirect: { name: 'signin' }
    },
	// {
	// 	path: '/',
	// 	name: 'index',
	// 	component: signIn
	// },
	{
		path: '/signin',
		name: 'signin',
		component: signIn
	},
	{
		path: '/signup',
		name: 'signup',
		component: signUp
	},
	{
		path: '/tailor-signup',
		name: 'tailor-signup',
		component: tailorSignup
	},
	{
		path: '/contact',
		name: 'contact',
		component: Contact
	},
	{
		path: '/customer-dashboard',
		name: 'customer-dashboard',
		component: customerDashboard
	},
	{
		path: '/tailor-dashboard',
		name: 'tailor-dashboard',
		component: tailorDashboard
	},
    {
		path: '/mySupport',
		name: 'mySupport',
		component: MySupport
	},
	{
		path: '/myService',
		name: 'myService',
		component: MyService
	},
	// {
	// 	path: '/profile',
	// 	name: 'profile',
	// 	component: profile
	// },
	// {
	// 	path: '/navbar',
	// 	name: 'navbar',
	// 	component: navbar
	// },
	// {
	// 	path: '/home',
	// 	name: 'home',
	// 	component: Home
	// },
	// {
	// 	path: '/homedash',
	// 	name: 'homedash',
	// 	component: HomeDashboard
	// },
	{
		path: '/productDash',
		name: 'productDash',
		component: ProductDashboard
	},
	{
		path: '/productPage',
		name: 'productPage',
		component: ProductPage
	},
	{
		path: '/category',
		name: 'category',
		component: Category
	},




	{
      path: '/dashboard',
      name: 'Dashboard',
      component: Dashboard,
      props: { page: 1 },
      // alias: '/'
    },
    {
      path: '/profile',
      name: 'Profile',
      props: { page: 2 },
      component: Profile
    },
    {
      path: '/tables',
      name: 'Tables',
      props: { page: 3 },
      component: Tables
    },
    {
        path: '/logout',
        name: 'logout',
        component: Logout
    }
    // {
    //   path: '/maps',
    //   name: 'Maps',
    //   props: { page: 4 },
    //   component: Maps
    // },
    // {
    //   path: '/404',
    //   name: 'BadGateway',
    //   props: { page: 5 },
    //   component: BadGateway
    // },
    // {
    //   path: '*',
    //   props: { page: 5 },
    //   redirect: '/404'
    // }
]
	})
import Vue from 'Vue'

export default {
	get() {
		return Vue.http.get('http://apis/')
	}

}	
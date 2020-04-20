
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#user_comment',
    data: {
    	newComm: {'user_id':'', 'post_id': '', 'body': '' },
    	hasError : true,
    },
    methods: {
    	createNewCom: function createNewCom(){
    		var comInput = this.newComm;
    		 console.log(comInput);

    		if(  comInput['body'] == '' ){
    			this.hasError = false;
    			 console.log("Has No data");
    		}else{
    			this.hasError = true;
    			axios.post('/user/store-comment/', comInput). then(function(response){
                   console.log("Good to go");
    			})
    		}
    	}

    },
});

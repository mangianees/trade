//  import react from 'react';
//  import {InstantSearch,Hits,SearchBox,RefinementList,Pagination,Stats} from 'react-instantsearch/dom';
//  const App = () =>
//      <InstantSearch
//          appId='GAK18FB40X'
//          appKey='055baf9b5e8d9d6855629b2d7ee37827'
//          indexName='make'
//          >
//          <SearchBox />
//          <Stats />
//          <RefinementList 
//              attributesName='make'
//              withSearchBox
//          />
//          <RefinementList 
//              attributesName='model'            
//          />
//          <Hits 
//          hitComponent={make}
//          />
//          <Pagination />
//          </InstantSearch>

/** can you delete
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
 import InstantSearch from 'vue-instantsearch';
 Vue.use(InstantSearch);


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('instant-post', require('./components/instantPost.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});

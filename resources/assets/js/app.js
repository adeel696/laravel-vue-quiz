
require('./bootstrap');
require('../css/custom.css');

import Vue from 'vue';

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

import App from './App.vue';
import Quiz from './components/Quiz.vue';
import CreateQuiz from './components/CreateQuiz.vue';

const routes = [
	{
		name: 'CreateQuiz',
		path: '/CreateQuiz',
		component: CreateQuiz
	},
		{
		name: 'Quiz',
		path: '/',
		component: Quiz
	},
];

const router = new VueRouter({ mode: 'history', routes: routes});
new Vue(Vue.util.extend({ router }, App)).$mount('#app');

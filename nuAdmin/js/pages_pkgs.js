const micro = '../js/components/micro';
const components = '../js/components';
const modules = '../js/modules';
const  activities = '../js/activities';
const js = '../js';
include `${micro}/fa-card.js ${'default'}`;
include `${micro}/switch.js ${'default'}`;
include `${modules}/builder.js ${'default'}`;
include `${js}/app.config.js ${document.getElementById('endRef')}`;
if(window.location.toString().includes('home.html')){
    include `${activities}/home.js ${document.getElementById('endRef')}`;
}
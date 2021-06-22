Vue.component('task-list', {

    template: '<div><task v-for="task in tasks">{{ task.task }}</task></div>',
    
    

    data() {
return{
    tasks: [
        {task: 'Go to to to ', complete: true},
        {task: 'Go to to to ', complete: false},
        {task: 'Go to to to ', complete: true},
        {task: 'Go to to to ', complete: false},
    ]
};
    }
})




Vue.component('task', {

    template: '<li><slot></slot></li>',

    data() {

    }
})




new Vue({

el:'#root'

})
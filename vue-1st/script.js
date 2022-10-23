const Home = {
    template: `<div>text text text</div>`
}
// const routes = [
//     { path: '/', component: Home },
//     { path: '/about', component: About },
//   ];


// Vue.component('navbar-component', {
//     template: `
//     <nav>
//         <ul class="navbar">
//             <li><a :class="{active:menu==='test1'}" v-on:click.prevent="changePage('test1')" href="#">Test1</a></li>
//             <li><a :class="{active:menu==='test2'}" v-on:click.prevent="changePage('test2')" href="#">Test2</a></li>
//             <li><a :class="{active:menu==='test3'}" v-on:click.prevent="changePage('test3')" href="#">Test3</a></li>
//             <li><a target="blank" href="https://github.com/madvier83/">GitHub</a></li>
//         </ul>
//     </nav>`,
//     data: function() {
//         return {
//           menu: 'test1'
//         }
//     },
//     methods: {
//         changePage: function(page){
//             this.menu = page
//         }
//     }
// })

// Vue.component('footer-component',{
//     template: `
//     test
//     <slot></slot>`
// })

const app = new Vue({
    el:'#app',
    components:{
        'home': Home
    },
    data:{
        name: 'Muhammad Advie Rifaldy',
        message: 'hello world',
        img: '01.png',
        menu: 'test1',
        bear: 'Go on a walk?',
        qty: 1,
        bil: 3,
        testArray: ['test1', 'test2', 'test3'],
        numbers: [1,2,3,4,5],
        materi: ['Vue.js'],
        book: {
            title: 'Metamorphosis (177013)',
            author: 'Shindo L'
        }
    },
    methods:{
        changePage: function(page){
            this.menu = page
        },
        getName: function(){
            return "Hi, my name is " + this.name;
        },
        changeName: function(newName){
            this.name = newName;
        },
        checkEven: function(numbers){
            return numbers.filter(data => {
                return data % 2 == 0;
            })
        },
        greet: function(name){
            return alert('Hello '+name+'!');
        },
        dangerLevel: function(number){
            if(number>0.9){
                return 'red';
            }
            if(number>0.5&&number<0.9){
                return 'orange';
            }
            if(number>0&&number<0.5){
                return 'green';
            }
        },
        submit: function(event){
            this.materi.push(event.target.value)
            event.target.value = ""
        }
    },
    computed: {
        total: function(){
            return this.qty * 10000;
        },
        ganjilGenap: function(){
            return this.bil%2 == 0 ? 'ganjil':'genap';
        }
    }
});
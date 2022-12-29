<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row" v-if="allBooks.length > 0">
                    <div class="col-md-3" v-for="(book,key) in allBooks" :key="key">
                        <div class="media">
                            <img class="" v-bind:src="book.image" height='80 px' alt="Generic placeholder image">
                            <div class="media-body">
                                <h5 class="mt-0 font-weight-bold">{{book.name}}</h5>
                                <h5 class="mt-0 font-weight-bold">By : {{book.author_name}}</h5>
                                <h5 class="mt-0 font-weight-bold">Price : {{book.price}}</h5> 
                            </div>
                        </div>
                    </div>
                    
                </div>

                
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name:"allBooks",
        data(){
            return {
                allBooks:[]
            }
        },
        methods:{
            getBookListing(){
                axios.get('/allbooks').then((response)=>{
                    this.allBooks = response.data;
                }).catch(error=>{
                    console.log(error)
                })
                console.log('get All the books');
            }
        },
        mounted() {
            this.getBookListing()
            console.log('Component mounted.')
        }
    }
</script>

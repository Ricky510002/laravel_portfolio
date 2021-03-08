<template>
    <v-main>
        

        <!-- 説明部分 -->
        <v-container class=" mt-7 " style=" width:100%;" >
            <v-row  justify=center class="font-italic text-h3">message page</v-row>

            <v-row justify=center class="border-bottom text-h6 my-7  pt-5 px-5 pb-1 ">
                
                このページでで住所、発送日時等、その他必要な連絡（大学の情報で聞いてみたいことがあるなど）の確認を行って下さい。
            </v-row>
           
        </v-container>
       
        <!-- メッセージメイン -->
        <v-container class="grey lighten-3 mt-3 rounded" style=" width:97%; overflow: scroll; height:300px;" >
            
           
            
            
            <v-row v-for="m in messagesYou" :key="m.message" >

                 
                <!-- <v-col cols="1">
                    <v-avatar color="black" size="45" ><span class="white--text headline">You</span></v-avatar>
                </v-col> -->
                <v-col cols="auto" style=" max-width:300px;">
                    <v-card  class="mx-auto rounded-xl" color="white" dark>
                        <v-card-text class="black--text">{{ m.body }}</v-card-text>
                    </v-card>
                </v-col>
             
            </v-row>
        
            
            <v-row  v-for="(m, k) in messagesMe" :key="k" >

                <v-spacer></v-spacer>
                
                <v-col  cols="auto" style=" max-width:300px;">
                    <v-card class="mx-auto rounded-xl" color="white" dark >
                        <v-card-text class="black--text">{{ m.body }}</v-card-text>
                    </v-card>
                </v-col>
                <!-- <v-col cols="1" >
                    <v-avatar color="black" size="45" ><span class="white--text headline">Me</span></v-avatar>
                </v-col>              -->
                

                
            </v-row>

           
           
        </v-container>
        

        <!-- 送信部分 -->
        <v-container class=" mt-2" style="min-height: 60px; width:100%;">
            <v-row>
                <v-col cols="8" >
                            <v-textarea
                            label="Message"
                            auto-grow
                            outlined
                            rows="1"
                            row-height="15"
                            v-model="message"
                            style="white-space: pre-wrap;"
                            wrap
                            ></v-textarea>
                </v-col>
                <v-col cols="1">
                        <v-btn 
                            @click="send()"
                            class="mx-2"
                            fab
                            dark
                            color="black"
                            
                            >
                            <v-icon dark>
                               mdi-send
                            </v-icon>
                        </v-btn>
                </v-col>
            </v-row>
        </v-container>

    </v-main>
          
</template>


<script>
    export default {
  
     data() {
             return{

                drawer: false,
                group: null,

                message: '',
                messagesMe:[],
                messagesYou:[],
                

             }

            
        },

    
    methods: {
        send() {
            const id =this.$route.params.id;
            const url = '/api/ajax/chat/' + id;
            const params = { message: this.message };
            //console.log(params);
            this.axios.post(url, params)
                .then((response) => {

                    this.message = '';
                    this.getMessages();
                    // this.getMessagesYou();
                });

        },
        
        getMessages(){
            const id =this.$route.params.id;
            const url = '/api/ajax/chat/' + id;
             this.axios.get(url)
                .then((response) => {
                    
                    this.messagesMe = response.data.right;
                    this.messagesYou = response.data.left;
                });
        },
        // getMessagesYou(){
        //     const id =this.$route.params.id;
        //     const url = '/api/ajax/chat/you/' + id;
        //      this.axios.get(url)
        //         .then((response) => {
                    
        //             this.messagesYou = response.data;

        //         });
        // },

    },
    mounted() {
            this.getMessages();
            // this.getMessagesYou();
        },
          
    }
</script>

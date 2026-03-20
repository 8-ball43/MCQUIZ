const button_1 = document.querySelectorAll(".button_1");
const button_2 = document.querySelectorAll(".button_2");
const button_3 = document.querySelectorAll(".button_3");
const button_4 = document.querySelectorAll(".button_4");
const button_5 = document.querySelectorAll(".button_5");
const button_6 = document.querySelectorAll(".button_6");
const button_7 = document.querySelectorAll(".button_7");
const button_8 = document.querySelectorAll(".button_8");
const button_9 = document.querySelectorAll(".button_9");
const button_10 = document.querySelectorAll(".button_10");


const quest_1 = document.getElementById("quest_1");
const quest_2 = document.getElementById("quest_2");
const quest_3 = document.getElementById("quest_3");
const quest_4 = document.getElementById("quest_4");
const quest_5 = document.getElementById("quest_5");
const quest_6 = document.getElementById("quest_6");
const quest_7 = document.getElementById("quest_7");
const quest_8 = document.getElementById("quest_8");
const quest_9 = document.getElementById("quest_9");
const quest_10 = document.getElementById("quest_10");
const final_block = document.getElementById("final_block");

let point = 0;

button_1.forEach(button => {
button.addEventListener("click",function(){
   quest_1.classList.remove("quest_block");
   quest_1.classList.add("hidden");

   quest_2.classList.remove("hidden");
   quest_2.classList.add("quest_block");

   let choose_1 = this.value;
  

   if(choose_1 == 2){
      point++;
       
   }
   document.getElementById("p").innerHTML=point;

   
});
});
button_2.forEach(button =>{
   button.addEventListener("click",function(){
      quest_2.classList.remove("quest_block");
      quest_2.classList.add("hidden");

      quest_3.classList.remove("hidden");
      quest_3.classList.add("quest_block");

      let choose_2 = this.value;
      if(choose_2 == 3){
         point++;
      }
      document.getElementById("p").innerHTML=point;

   });
});

button_3.forEach(button => {
   button.addEventListener("click",function(){
      quest_3.classList.remove("quest_block");
      quest_3.classList.add("hidden");

      quest_4.classList.remove("hidden");
      quest_4.classList.add("quest_block");

      let choose_3 = this.value;
      if(choose_3 == 1){
         point++;
      }
      document.getElementById("p").innerHTML=point;
   });


});

button_4.forEach(button => {
   button.addEventListener("click",function(){
      quest_4.classList.remove("quest_block");
      quest_4.classList.add("hidden");

      quest_5.classList.remove("hidden");
      quest_5.classList.add("quest_block");

      let choose_4 = this.value;
      if(choose_4 == 3){
         point++;
      }
      document.getElementById("p").innerHTML=point;
   });
});

   button_5.forEach(button =>{
      button.addEventListener("click",function(){
         quest_5.classList.remove("quest_block");
         quest_5.classList.add("hidden");

         quest_6.classList.remove("hidden");
         quest_6.classList.add("quest_block");

         let choose_5 = this.value;
         if(choose_5 == 4){
            point++;
         }
         document.getElementById("p").innerHTML=point;
      });
   });

   button_6.forEach(button =>{
      button.addEventListener("click",function(){
         quest_6.classList.remove("quest_block");
         quest_6.classList.add("hidden");

         quest_7.classList.remove("hidden");
         quest_7.classList.add("quest_block");

         let choose_6 = this.value;
         if(choose_6 == 3){
            point++;
         }
         document.getElementById("p").innerHTML=point;
      });
   });

   button_7.forEach(button =>{
      button.addEventListener("click",function(){
      quest_7.classList.remove("quest_block");
      quest_7.classList.add("hidden");

      quest_8.classList.remove("hidden");
      quest_8.classList.add("quest_block");
      
      let choose_7 = this.value;
      if(choose_7 == 1){
         point++;
      }
      document.getElementById("p").innerHTML=point;
      
   });
   });
   button_8.forEach(button =>{
      button.addEventListener("click",function(){
         quest_8.classList.remove("quest_block");
         quest_8.classList.add("hidden");

         quest_9.classList.remove("hidden");
         quest_9.classList.add("quest_block");

         let choose_8 = this.value;
         if(choose_8 == 4){
            point++;
         }
         document.getElementById("p").innerHTML=point;
      });
   });
   

button_9.forEach(button =>{
   button.addEventListener("click",function(){
      quest_9.classList.remove("quest_block");
      quest_9.classList.add("hidden");

      quest_10.classList.remove("hidden");
      quest_10.classList.add("quest_block");

      let choose_9 = this.value;
      if(choose_9 == 2){
         point++;
      }
      document.getElementById("p").innerHTML=point;
   });
});

button_10.forEach(button => {
   button.addEventListener("click",function(){
      quest_10.classList.remove("quest_block");
      quest_10.classList.add("hidden");

      final_block.classList.remove("hidden");
      final_block.classList.add("quest_block");

      let choose_10 = this.value;
      if(choose_10 == 1){
         point++;
      }
      document.getElementById("p").innerHTML=point;
      document.cookie = "punkty=" + point + "; path=/";
      p.style.color="red";
   });
});
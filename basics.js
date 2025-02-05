//**** LOOPS */
//1) For Loop 
// for(let i=1;i<=5;i++){
//     console.log("count:",i);
// }
//2)while loop 
//  let i =0;
//  while(i<= 3)
//  {
//     console.log("number",i);
//     i++;
//  }
//3)Do While
// do{
//     console.log("num",i);
//     i++;
// }while(i<=3)
//4) For in loop- iterate over the properties of objects
// let obj = {name:"bhakti", Id:"123"};
// for(let key in obj){
//     console.log(key,":",obj[key]);
// }
//5)for of loop - iterate over itrable like object, array or sets.
//  let a =[1,2,3,4,5];
//  for(let val of a)
//  {
//     if(val===3){
//         //continue;
//         break;
//     }
//     console.log(val);
   
//  }
//return statement

// let fun = ()=>{ 
//     let a =[1,2,3,4,5];
//  for(let val of a)
//  {
//     if(val===3){
//         return;
//     }
//     console.log(val);
   
//  }
// }
// fun();
//Recursive (1)
// function recursive(num){
//     if(num===0 || num > 10){
//         return;
//     }
//     console.log(num);
//     recursive(num + 1);
// }
// const num =1;
// recursive(num);

// palindrome string using recursive
// function palinndrome(s,i){
//     if(i>=s.length/2){
//         return true;
//     }
//     if(s[i]!==s[s.length - i - 1]){
//         return false;
//     }
//    return palinndrome(s,i+1);
// }
// console.log(palinndrome("php", 0));

//sum of the number 
// function sum(n){
//     if(n<10){
//         return n;
//     }
//     let cal =Math.floor (n/10);
//     return n % 10 + sum(cal);
// }
// console.log(sum(123));

// first N natural number
function natural(n){
    if(n==0){
        return n;
    }
    else{
        return n + natural( n-1);
    }
}
console.log(natural(5));

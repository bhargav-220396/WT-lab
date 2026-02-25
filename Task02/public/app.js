let user = 10;

let result;
const res = (function(){
    let user2 = 30;
    user2 = user2 + 1;
    return user2;
})
console.log(res());

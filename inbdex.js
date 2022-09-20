const gen = (i) =>{
    const start = 'a';
    const end = 'z';
    const count = end.charCodeAt() - start.charCodeAt() + 1;
    let str = "";
    while( i > 0){
        str = String.fromCharCode(start.charCodeAt() + i % count) + str;
        i = Math.floor(i / count);
    }
    return str;
}
for(let i = 0 ; i < 99999;i++){
    ((i)=>{
        setTimeout(() => {
            fetch(gen(i));
        }, i*1);
    })(i);
}
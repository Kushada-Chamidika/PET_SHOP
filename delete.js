function  showpass(){
    document.getElementById("span").classList.toggle("ani");
    var pw = document.getElementById("inp");
    
    if(pw.type=="text"){
        pw.type="password";
    }
    else
    {
        pw.type="text";
    }
}

function sabt(){
    a=0;
    b=0;
    c=0;
    d=0;
    e=0;
    a=document.getElementById("name").value;
    b=document.getElementById("namefamily").value;
    c=document.getElementById("username").value;
    d=document.getElementById("password").value;
    e=document.getElementById("repassword").value;

    if(a!=0 && b!=0 && c!=0 && d!=0 && e!=0){
        if(d==e){
            alert("ثبت نام موفقیت آمیز");
            alert(a);
            alert(b);
            alert(c);
            alert(d);
        }else
            alert("رمز عبور مطابقت ندارد");
    }else
    alert("مقداری وارد کنید")
}
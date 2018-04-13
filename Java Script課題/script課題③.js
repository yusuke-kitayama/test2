function ryokin(otona,kodomo){
    return "料金は"+ (otona*500+kodomo*200) +"円です。";
}





document.write(ryokin(2,4));
document.write("Aグループ<br>");
document.write(ryokin(1,5));
document.write("Bグループ<br>");
document.write(ryokin(3,7));
document.write("Cグループ<br>");
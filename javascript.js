function hello(){
    sessionStorage.setItem("dest1", this.form.Destination1.value)
    sessionStorage.setItem("dest2", this.form.Destination2.value)
    sessionStorage.setItem("dest3", this.form.Destination3.value)
    sessionStorage.setItem("dest4", this.form.Destination4.value)
    sessionStorage.setItem("dest5", this.form.Destination5.value)
    sessionStorage.setItem("dest6", this.form.Destination6.value)
    sessionStorage.setItem("dest7", this.form.Destination7.value)
    sessionStorage.setItem("dest8", this.form.Destination8.value)
    sessionStorage.setItem("dest9", this.form.Destination9.value)
    sessionStorage.setItem("dest10", this.form.Destination10.value)
    sessionStorage.setItem("startdate", this.form.startdate.value)

}
var c=1;
var x=document.getElementsByTagName("select");
function dest() {
    console.log("dest");
     x[c].parentElement.parentElement.style.display='block';
     c=c+1;
}
function destdel() {
    console.log("destdel");
    x[c-1].parentElement.parentElement.style.display='none';
    c=c-1;
}
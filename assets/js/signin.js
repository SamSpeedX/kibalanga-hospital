const alert = document.getElementById("alert")
const body = document.getElementById("body")

body.onload = () => {
    alert.style.display='block'
    setTimeout(()=> {
        alert.style.display='none'
    },5000)

}

const selectBox = document.querySelector(".selectBox");
const changeValue = document.getElementById("changeValue");
const main_submit = document.getElementById("main_submit");

selectBox.addEventListener("change", (e) =>{
    changeValue.value = e.target.value;
    // if(changeValue.value == "bulkComplete"){
    //   alert("hello success");
    // }
    // console.log(e.target.value,"kaj kortese");
    console.log(changeValue.value,"kaj kortese");
})





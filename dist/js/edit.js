$(".editbtn").click(e =>{
  console.log("Icon clicked");
  let textvalue = displayData(e);

  console.log(textvalue);
  let id = $("input[name*=fname]");
  id.val(textvalue[0]);
});



function displayData(e) {
  let id = 0;
  let small = $(".content-wrapper .invoice .invoice-info .col-sm-4 .box-primary .box-body p ");
  textvalue = [];
  for (const value of small) {
    if (value.dataset.id == e.target.dataset.id) {
      textvalue[id++] = value.textContent;
    }
  }
 return textvalue;
}

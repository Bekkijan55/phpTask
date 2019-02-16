// $('.edit-btn').click(function(e) {
//     let name = e.target.parentNode.childNodes[1].textContent;
//     let email = e.target.parentNode.childNodes[3].textContent;
//     let task = e.target.parentNode.childNodes[5].textContent;

//     $('.modal-body')[0].childNodes[1].childNodes[3].value=name;  
//     $('.modal-body')[0].childNodes[1].childNodes[7].value=email;    
//     $('.modal-body')[0].childNodes[1].childNodes[11].value=task;    
    
// });
$('.edit-btn').click(function(e) {
    let name = e.target.parentNode.childNodes[3].value;
    let email = e.target.parentNode.childNodes[7].value;
    let task = e.target.parentNode.childNodes[11].value;
    let imagename = e.target.parentNode.childNodes[15].value;
    console.log(e.target.parentNode.childNodes[15].value);

        $('.modal-body')[0].childNodes[1].childNodes[3].value=name;  
        $('.modal-body')[0].childNodes[1].childNodes[7].value=email;    
        $('.modal-body')[0].childNodes[1].childNodes[11].value=task;  
       
});

function changestatus(id) {
    console.log('done');
    event.preventDefault();
    $.ajax({
        url:"/changestatus",
        type:"POST",
        data:{id:id},
        success:function(response) {
            console.log('good');
        }
    });
}

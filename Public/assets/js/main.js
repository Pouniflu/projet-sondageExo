// renderMessages();

// $("button").click(function(e){
//     e.preventDefault();
//     let content = $("input").val();
//     $.ajax({
//         url:"router.php?function=postMessage",
//         method:"POST",
//         dataType:"json",
//         data:{content},
//         success:function(response){
//             renderMessages();
//         }
//     })
// })

// function renderMessages()
// {
//     $("#messages").html("")
//     $.ajax({
//         url:"router.php?function=getMessages",
//         dataType:"json",
//         success:function(response){
//             response.forEach(message => {
//                 $("#messages").append(`<p>${message.content}</p>`)
//             });
//         }
//     })
// }

let i = 0;
let x= 0;
let w = 0;
let z = 0;

$("#sendVote1").click(function() {
    i++;
    $("#result1").html(i);
});
$("#sendVote2").click(function() {
    x++;
    $("#result2").html(x);
});
$("#sendVote3").click(function() {
    w++;
    $("#result3").html(w);
});
$("#sendVote4").click(function() {
    z++;
    $("#result4").html(z);
});
$("#ajax").on("click", function(){
    var category = $('#select').val();
    $.getJSON('/api/samples/'+category,function(data){
    var ar=data[0];
    console.log(ar.samplearticle)
    $("#result").html(ar.samplearticle);
    })
})

    // if(category=='テスト'){
    //     var ct= Math.floor(Math.random() *4+1);
    //     console.log(ct)

    //     $.getJSON('/api/samples/'+category,function(data){
    //     console.log(data)
    
    //     $("#result").html(data);})



    //     }else if(category=='test'){
    //     var category= Math.floor(Math.random() *4+5);
    //     console.log(category)
    //     }else if(category=='test5'){
    //     var category= Math.floor(Math.random() *1+9);
    //     console.log(category)
    //     }
        


$("#ajax").on("click", function(){
    const category = $('#select').val();
    $.getJSON('/api/samples/'+category,function(data){
        console.log(data)
    })
})






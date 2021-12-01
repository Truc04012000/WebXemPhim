$(document).ready(function(){
  if($(".tr").length>10){
    var pageSize=10;
    var numRow=$(".tr").length;
    var numPage=Math.ceil(numRow/pageSize); 
    for(var i=1;i<=numPage;i++){
    	$(".page_numbers").append("<li class='number'><span>"+i+"</span></li>"); /*Tạo các nút hiển thị số trang*/
    }
    		
    $(".number").first().addClass("active");
    showPage = function(currentPage){
    	/*Ẩn tất cả tr trong tbody*/
        $(".tr").hide(); 
       	var start= parseInt(pageSize*(currentPage-1)); /*Dòng bắt đầu của trang*/
       	var end= parseInt(pageSize*currentPage); /*Dòng cuối cùng của trang*/
        $(".tr").each(function(row){ /*Với mỗi tr, nếu thỏa điều kiện thì sẽ show hàng đó ra*/
            if (row>=start && row<end)		$(this).show();
        });  
    }
    showPage(1); /*Mặc định ban đầu show trang đầu tiên*/
    $(".number").click(function(){
    	$(".number").removeClass("active"); 
        $(this).addClass("active");
    	showPage($(this).text()); 
    });
  }
});
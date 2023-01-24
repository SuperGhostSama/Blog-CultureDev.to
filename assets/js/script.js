function resetCategoryForm(){
    if (window.location.pathname.startsWith('/Blog-CultureDev.to/pages/categories.php')) {
      document.getElementById("category").value = "";
      $("#save").show();
      $("#update").hide();
    }
  }
  
function resetPostsForm(){
    if (window.location.pathname.startsWith('/Blog-CultureDev.to/pages/posts.php')) {
      document.getElementById("title").value = "";
      document.getElementById("category").value = "";
      document.getElementById("description").value = "";
      document.getElementById("title2").value = "";
      document.getElementById("category2").value = "";
      document.getElementById("description2").value = "";
      $("#save").show();
      $("#update").hide();
      $("#addMore").show();
      $("#secondModal").hide();
      $( "#addMore" ).prop( "disabled", false );

    }
  }

function showAddMore(){
  $("#secondModal").show();
  $( "#addMore" ).prop( "disabled", true );
}
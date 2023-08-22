$(document).on("click",`[data-role="delete-button"]`,function(e){
  // document.location.reload();
  let parent = $(this).parents("tr");
	let id = parent.data("id");
  console.log(id);
	e.preventDefault();
  $.ajax({
				url: '/user/note/delete',
				type: 'delete',
				data: JSON.stringify({id}),
				success: function(d){
					// console.log(d)
					if(d.code === 202){
            parent.remove();
            // console.log("die");

					}
				},
				error: function(d){
						console.log(d)
					}
			});
	})

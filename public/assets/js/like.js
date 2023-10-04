	var post = {

		posting: false,
		liked_element: null, 
		root: root,

		like : function(post_id, ele) {

			post.liked_element = ele;

			let obj = {
				post_id, 
				'data_type':'like'
			};

			post.send_data(obj);
		},

		send_data: function(obj) {

			if(post.posting)
				return;	

			let ajx = new XMLHttpRequest();
			post.posting = true;

			ajx.addEventListener('readystatechange', function(){

				if (ajx.readyState == 4)
				{
					post.posting = false;
					post.handle_result(ajx.responseText);
				}
			});

			let myform = new FormData();

			for(key in obj)
			{
				myform.append(key, obj[key])
			}

			ajx.open('post',post.root+'/ajax');
			ajx.send(myform);
		},	

		handle_result: function(result)
		{
			// console.log(result);
			let obj = JSON.parse(result);
			if(obj.data_type = 'like')
			{
				if(obj.error != "")
				{
					alert(obj.error);
					return 0;
				}

				let svg = post.liked_element.querySelector('svg');
				let color = obj.liked ? 'rgb(255, 48, 64)' : 'rgb(245, 245, 245)'; 
				svg.setAttribute('fill', color);

				if(obj.total_likes == 0)
				{
					obj.total_likes = "";
				} 
				post.liked_element.querySelector(".js-likes-count").innerHTML = obj.total_likes;

			}
		},

	};

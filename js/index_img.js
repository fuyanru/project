		var container = document.getElementsByClassName('portfolio-box');
		var row_portfolio_box = document.getElementsByClassName('row-portfolio-box')[0];
		var a = document.getElementsByClassName('hover')[0];
		var p =  document.getElementsByClassName('box-in-title')[0];
		console.log(p);
		var h3 = document.getElementsByClassName('type')[0];
		
		var ajax = new Ajax();
		function getImage(data){
			// 将json字符串转换为json数组
			var arr = JSON.parse(data);
			console.log(arr);
			for(var i=0;i<arr.length;i++){
				if(i==0){
					var img = document.createElement('img');
					a.appendChild(img);
					// img.src = './images/porduct/'+arr[i].path;
				}else{
					var row_box = row_portfolio_box.cloneNode(true);
					container[0].appendChild(row_box);
				}
				img.src = './images/porduct/'+arr[i].path;
				p.innerHTML=arr[i].title;
				h3.innerHTML=arr[i].type;
			}
		}
		ajax.get('./php/img.php','',getImage);
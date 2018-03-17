var http = require("http");
var fs = require('fs');

var doucumentRoot = "../";

http.createServer(function (request, response){
	var url = request.url;
	var filePath = doucumentRoot + url;
	console.log(url);

	fs.readFile(filePath, function(err, data){
		if(err){
			response.writeHeader(404, {
				'content-type' : 'text/html;charset="utf-8" '
 			});
 			response.write('<h1>404Error</h1><p>The webpage you find does not exists.</p>');
 			response.end();
		}
		else{
			var i = filePath.lastIndexOf('.');
            var suffix = filePath.substr( i+1, filePath.length);
            response.writeHead(200,{                     //响应客户端，将文件内容发回去
                'Content-type':"text/"+suffix});    //通过后缀名指定mime类型
            response.end(data);
		}
	});
}).listen(8888, "0.0.0.0");
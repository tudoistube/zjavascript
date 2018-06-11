var http = require('http');
var fs = require('fs');
var url = require('url');

function templateHtml(title, list, body){
  return `
  <!doctype html>
  <html>
  <head>
    <title>WEB - ${title}</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1><a href="/">WEB run by PM2</a></h1>
    <h2>pm2 start main.js --watch</h2>
    <h2>pm2 log</h2>
    ${list}
    ${body}
  </body>
  </html>
  `;
}

function templateList(filelist){

    var list = '<ul>';
    var i = 0;
    while(i < filelist.length){
      list = list + `<li><a href="/?id=${filelist[i]}">${filelist[i]}</a></li>`;
      i = i + 1;
    }
    list = list+'</ul>';
    return list;
}

var app = http.createServer(function(request,response){
    var _url = request.url;
    var queryData = url.parse(_url, true).query;
    var pathname = url.parse(_url, true).pathname;
    console.log(`queryData.id : ${queryData.id}, pathname : ${pathname}`);

    if(pathname === '/'){
      if(queryData.id === undefined){

        fs.readdir('./data', function(err, filelist){
          console.log(filelist);

          var title = 'Welcome';
          var description = 'Hello, Node.js';
          var body = `<h2>${title}</h2> ${description}`;
          var list = templateList(filelist);
          var template = templateHtml(title, list, body);

          response.writeHead(200);
          response.end(template);
        });

      } else {
        fs.readdir('./data', function(error, filelist){

          fs.readFile(`data/${queryData.id}`, 'utf8', function(err, description){
            var title = queryData.id;
            var body = `<h2>${title}</h2> ${description}`;
            var list = templateList(filelist);
            var template = templateHtml(title, list, body);

            response.writeHead(200);
            response.end(template);
          });
        });
      }
    } else {
      response.writeHead(404);
      response.end('Not found');
    }



});
app.listen(3000);
